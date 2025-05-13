<?php
/**
 * @package    Joomla.Component.Builder
 *
 * @created    4th September, 2022
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        Joomla Component Builder <https://git.vdm.dev/joomla/Component-Builder>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace VDM\Joomla\Componentbuilder\Package\Dependency;


use VDM\Joomla\Interfaces\Remote\ConfigInterface as Config;
use VDM\Joomla\Interfaces\Registryinterface as Tracker;
use VDM\Joomla\Componentbuilder\Power\Interfaces\TableInterface as Table;
use VDM\Joomla\Utilities\GetHelper;
use VDM\Joomla\Utilities\StringHelper;
use VDM\Joomla\Utilities\ArrayHelper;
use VDM\Joomla\Interfaces\Remote\Dependency\ResolverInterface;


/**
 * Package Dependency Resolver
 * 
 * @since 5.2.1
 */
final class Resolver implements ResolverInterface
{
	/**
	 * The ConfigInterface Class.
	 *
	 * @var   Config
	 * @since 5.2.1
	 */
	protected Config $config;

	/**
	 * The Tracker Class.
	 *
	 * @var   Tracker
	 * @since 5.2.1
	 */
	protected Tracker $tracker;

	/**
	 * The Table Class.
	 *
	 * @var   Table
	 * @since 5.2.1
	 */
	protected Table $table;

	/**
	 * The linked fields.
	 *
	 * @var   array
	 * @since 5.2.1
	 */
	protected array $linked;

	/**
	 * The dependencies.
	 *
	 * @var   array
	 * @since 5.2.1
	 */
	protected array $dependencies;

	/**
	 * The code search.
	 *
	 * @var   array
	 * @since 5.2.1
	 */
	protected array $code;

	/**
	 * The placeholders search.
	 *
	 * @var   array
	 * @since 5.2.1
	 */
	protected array $placeholders;

	/**
	 * The template and layout alias map.
	 *
	 * @var   array
	 * @since 5.2.1
	 */
	protected array $alias_map;

	/**
	 * Constructor.
	 *
	 * @param Config    $config    The ConfigInterface Class.
	 * @param Tracker   $tracker   The Tracker Class.
	 * @param Table     $table     The Table Class.
	 *
	 * @since 5.2.1
	 */
	public function __construct(Config $config, Tracker $tracker, Table $table)
	{
		$this->config = $config;
		$this->tracker = $tracker;
		$this->table = $table;

		$this->setTableLinkedFields();
		$this->setTableDependencies();
		$this->setTableSearch();
		$this->setAliasMap();
	}

	/**
	 * Inspect an item and extract all the dependencies
	 *
	 * This method inspects the item and loads all dependencies
	 *
	 * @param   object  $item  The data item to inspect.
	 *
	 * @return  void
	 * @since   5.2.1
	 */
	public function extract(object $item): void
	{
		$this->extractLinkedFields($item);
		$this->extractDependencies($item);
		$this->extractDynamicContent($item);
	}

	/**
	 * Set all the linked fields of this table
	 *
	 * @return  void
	 * @since   5.2.1
	 */
	protected function setTableLinkedFields(): void
	{
		$this->linked = $this->table->linked($this->config->getTable());
	}

	/**
	 * Set all the dependencies of this table
	 *
	 * @return  void
	 * @since   5.2.1
	 */
	protected function setTableDependencies(): void
	{
		$this->dependencies = $this->table->dependencies($this->config->getTable());
	}

	/**
	 * Set all the related table search fields
	 *
	 * @return  void
	 * @since   5.2.1
	 */
	protected function setTableSearch(): void
	{
		$this->code = $this->table->search($this->config->getTable(), 'code');
		$this->placeholders = $this->table->search($this->config->getTable(), 'placeholders');
	}

	/**
	 * Load all alias and GUID's of template and layout tables
	 *
	 * @return  void
	 * @since   5.2.1
	 */
	protected function setAliasMap(): void
	{
		// now check if key is found
		foreach(['template', 'layout'] as $table)
		{
			// Create a new query object.
			$query = $this->db->getQuery(true);
			$query->select(array('a.guid', 'a.alias'));
			$query->from('#__componentbuilder_' . $table . ' AS a');
			$this->db->setQuery($query);
			$items = $this->db->loadObjectList();

			// check if we have an array
			if (ArrayHelper::check($items))
			{
				$this->alias_map[$table] = [];
				foreach ($items as $item)
				{
					// build the key
					$k_ey = StringHelper::safe($item->alias);
					$key  = preg_replace("/[^A-Za-z]/", '', (string) $k_ey);

					// set the keys
					$this->alias_map[$table][$item->alias] = $item->guid;
					$this->alias_map[$table][$k_ey] = $item->guid;
					$this->alias_map[$table][$key] = $item->guid;
				}
			}
		}
	}

	/**
	 * Inspects all fields with outgoing links (type 1) and records their dependencies.
	 *
	 * Handles both plain fields and sub-form paths (denoted by “|”).  Any value
	 * encountered is normalised to one-dimensional strings before recording.
	 *
	 * @param   object  $item  The data item containing potential linked field values.
	 *
	 * @return  void
	 * @since   5.2.1
	 */
	protected function extractLinkedFields(object $item): void
	{
		foreach ($this->linked as $fieldName => $link)
		{
			// Decide which normaliser to employ
			$values = (strpos($fieldName, '|') === false)
				? $this->normalizeToStringArray($item->{$fieldName} ?? null)
				: $this->normalizeToSubformArray($fieldName, $item);

			// Persist every resolved value
			foreach ($values as $value)
			{
				$this->record('parent', $link['entity'], $value, $link['table'], $link['key']);
			}
		}
	}

	/**
	 * Extracts entities that depend on this item (incoming links)
	 *
	 * @param   object  $item  The data item containing potential linked field values.
	 *
	 * @return void
	 * @since   5.2.1
	 */
	protected function extractDependencies(object $item): void
	{
		foreach ($this->dependencies as $fieldName => $tables)
		{
			$values = $this->normalizeToStringArray($item->{$fieldName} ?? null);

			foreach ($values as $value)
			{
				foreach ($tables as $link)
				{
					$this->record('child', $link['entity'], $value, $link['table'], $link['key']);
				}
			}
		}
	}

	/**
	 * Inspects all fields for dynamic linking content.
	 *
	 * @param   object  $item  The data item containing potential linked field values.
	 *
	 * @return  void
	 * @since   5.2.1
	 */
	protected function extractDynamicContent(object $item): void
	{
		foreach ($this->code as $field)
		{
			$value = $item->{$field} ?? '';

			if (!empty($value))
			{
				$this->processCustomCode($value);
				$this->processTemplates($value);
				$this->processLayouts($value);
			}
		}

		foreach ($this->placeholders as $field)
		{
			$value = $item->{$field} ?? '';

			if (!empty($value))
			{
				$this->processPlaceholders($value);
			}
		}
	}

	/**
	 * Process custom code function references from value.
	 *
	 * @param   string  $value  The input string to scan.
	 *
	 * @return  void
	 * @since   5.2.1
	 */
	private function processCustomCode(string $value): void
	{
		$function_names = $this->getCustomCode($value);

		foreach ($function_names as $function_name)
		{
			$this->record(
				'parent',
				'custom_code',
				$function_name,
				'#__componentbuilder_custom_code',
				'function_name'
			);
		}
	}

	/**
	 * Process template usages from value.
	 *
	 * @param   string  $value  The input string to scan.
	 *
	 * @return  void
	 * @since   5.2.1
	 */
	private function processTemplates(string $value): void
	{
		$guids = $this->getTemplates($value);

		foreach ($guids as $guid)
		{
			$this->record(
				'parent',
				'template',
				$guid,
				'#__componentbuilder_template',
				'guid'
			);
		}
	}

	/**
	 * Process layout references from value.
	 *
	 * @param   string  $value  The input string to scan.
	 *
	 * @return  void
	 * @since   5.2.1
	 */
	private function processLayouts(string $value): void
	{
		$guids = $this->getLayouts($value);

		foreach ($guids as $guid)
		{
			$this->record(
				'parent',
				'layout',
				$guid,
				'#__componentbuilder_layout',
				'guid'
			);
		}
	}

	/**
	 * Process placeholder targets from value.
	 *
	 * @param   string  $value  The input string to scan.
	 *
	 * @return  void
	 * @since   5.2.1
	 */
	private function processPlaceholders(string $value): void
	{
		foreach ($this->getPlaceholders($value) as $target)
		{
			$this->record('parent', 'placeholder', "[[[{$target}]]]", '#__componentbuilder_placeholder', 'target');
		}
	}

	/**
	 * Extracts custom code function names from a string value.
	 *
	 * Handles both direct names and numeric IDs, including parsing
	 * '+'-delimited forms where only the first token is used.
	 *
	 * @param   string  $value
	 *
	 * @return  array
	 * @since   5.2.1
	 */
	private function getCustomCode(string $value): array
	{
		if (strpos($value, '[CUSTO' . 'MCODE=') === false)
		{
			return [];
		}

		$results = [];
		$matches = GetHelper::allBetween($value, '[CUSTO' . 'MCODE=', ']') ?? [];

		foreach ($matches as $raw)
		{
			$raw = trim((string) $raw);

			if (!StringHelper::check($raw))
			{
				continue;
			}

			// Support 'id+name' format, prefer the ID
			$key = strpos($raw, '+') !== false ? trim(explode('+', $raw, 2)[0]) : $raw;

			// Use helper lookup for numeric keys
			if (is_numeric($key))
			{
				$name = GetHelper::var('custom_code', $key, 'id', 'function_name');

				if (StringHelper::check($name))
				{
					$results[] = $name;
				}
			}
			elseif (StringHelper::check($key))
			{
				$results[] = $key;
			}
		}

		return array_unique($results);
	}

	/**
	 * Extracts template names (GUIDs) from a string value.
	 *
	 * @param   string  $value
	 *
	 * @return  array
	 * @since   5.2.1
	 */
	private function getTemplates(string $value): array
	{
		$templates = [];

		$temp1 = GetHelper::allBetween($value, "\$this->load" . "Template('", "')");
		$temp2 = GetHelper::allBetween($value, '$this->load" . "Template("', '")');

		if (!empty($temp1))
		{
			$templates = array_merge($templates, $temp1);
		}

		if (!empty($temp2))
		{
			$templates = array_merge($templates, $temp2);
		}

		$guids = [];
		foreach ($templates as $template)
		{
			$guid = $this->alias_map['template'][$template] ?? null;
			if ($guid !== null)
			{
				$guids[$guid] = $guid;
			}
		}
		return array_values($guids);
	}

	/**
	 * Extracts layout names (GUIDs) from a string value.
	 *
	 * @param   string  $value
	 *
	 * @return  array
	 * @since   5.2.1
	 */
	private function getLayouts(string $value): array
	{
		$layouts = [];

		$patterns = [
			["Layout" . "Helper::render('", "',"],
			['Layout" . "Helper::render("', '",'],
			["Joomla__" . "_7ab82272_0b3d_4bb1_af35_e63a096cfe0b___Power::render('", "',"],
			['Joomla__' . '_7ab82272_0b3d_4bb1_af35_e63a096cfe0b___Power::render("', '",'],
		];

		foreach ($patterns as [$start, $end])
		{
			$found = GetHelper::allBetween($value, $start, $end);
			if (!empty($found))
			{
				$layouts = array_merge($layouts, $found);
			}
		}

		$guids = [];
		foreach ($layouts as $layout)
		{
			$guid = $this->alias_map['layout'][$layout] ?? null;
			if ($guid !== null)
			{
				$guids[$guid] = $guid;
			}
		}
		return array_values($guids);
	}

	/**
	 * Extracts placeholders from a string value.
	 *
	 * @param   string  $value
	 *
	 * @return  array
	 * @since   5.2.1
	 */
	private function getPlaceholders(string $value): array
	{
		return GetHelper::allBetween($value, '[[[', ']]]') ?? [];
	}

	/**
	 * Normalizes a raw field value into an array of strings.
	 *
	 * Accepts strings, arrays of strings, or Traversable of strings. Any invalid or
	 * non-scalar values are excluded.
	 *
	 * @param   mixed  $raw  The raw value from the item field.
	 *
	 * @return  string[]  A list of clean, non-empty string values.
	 * @since   5.2.1
	 */
	private function normalizeToStringArray(mixed $raw): array
	{
		return array_values(array_filter(match (true) {
			is_string($raw)               => [$raw],
			is_array($raw)                => $raw,
			$raw instanceof Traversable   => iterator_to_array($raw),
			default                       => [],
		}, static fn($v) => is_string($v) && trim($v) !== ''));
	}

	/**
	 * Traverses an arbitrarily nested sub-form path and returns every value
	 * found as a clean string array.
	 *
	 * Example field path: "contacts|0|address|street".
	 *   • "contacts" is the root field on <code>$item</code> (holds the sub-form rows).
	 *   • Intermediate numeric parts are row indexes; non-numeric parts are keys.
	 *
	 * @param   string  $fieldPath  Full field name containing “|” separators.
	 * @param   object  $item       Source data object (row returned from Joomla DB).
	 *
	 * @return  string[]  One-dimensional list of normalised values.
	 * @since   5.2.1
	 */
	private function normalizeToSubformArray(string $fieldPath, object $item): array
	{
		$parts     = explode('|', $fieldPath);
		$coreField = array_shift($parts);

		$subData = $item->{$coreField} ?? null;

		// If the core field is missing or isn’t an array, nothing to do
		if (!is_array($subData))
		{
			return [];
		}

		// Collect every leaf value along the remaining path
		$rawValues = $this->collectSubformValues($subData, $parts);

		// Flatten, normalise, de-duplicate
		$result = [];
		foreach ($rawValues as $value)
		{
			foreach ($this->normalizeToStringArray($value) as $v)
			{
				$result[] = $v;
			}
		}

		return array_values(array_unique($result));
	}

	/**
	 * Recursively digs through the sub-form structure to harvest raw leaf values.
	 *
	 * @param   mixed   $data  Current level (array|object|scalar).
	 * @param   string[] $path  Remaining segments to traverse.
	 *
	 * @return  array  Collected raw values (may still be arrays/scalars at this point).
	 * @since   5.2.1
	 */
	private function collectSubformValues(mixed $data, array $path): array
	{
		if ($data === null)
		{
			return [];
		}

		// Reached the end of the path → return whatever is here
		if ($path === [])
		{
			return [$data];
		}

		$segment   = array_shift($path);
		$collected = [];

		// ───────────────────────────────────────────────────────────
		// ARRAY HANDLING
		// ───────────────────────────────────────────────────────────
		if (is_array($data))
		{
			// Numeric segment = address specific row
			if (is_numeric($segment))
			{
				$index = (int) $segment;
				if (array_key_exists($index, $data))
				{
					$collected = $this->collectSubformValues($data[$index], $path);
				}
			}
			// Non-numeric segment = traverse same key in *all* rows
			else
			{
				foreach ($data as $row)
				{
					if ((is_array($row) && array_key_exists($segment, $row)) ||
						(is_object($row) && property_exists($row, $segment)))
					{
						$next = is_array($row) ? $row[$segment] : $row->{$segment};
						$collected = array_merge(
							$collected,
							$this->collectSubformValues($next, $path)
						);
					}
				}
			}
		}

		// ───────────────────────────────────────────────────────────
		// OBJECT HANDLING
		// ───────────────────────────────────────────────────────────
		elseif (is_object($data) && property_exists($data, $segment))
		{
			$collected = $this->collectSubformValues($data->{$segment}, $path);
		}

		return $collected;
	}

	/**
	 * Records a  child/parent in the tracker.
	 *
	 * @param   string  $target  The name of the target direction (child/parent).
	 * @param   string  $entity  The name of the linked entity.
	 * @param   string  $value   The string value representing the link.
	 * @param   string  $table   The table name where the link originates.
	 * @param   string  $key     The key in the target table the link refers to.
	 *
	 * @return  void
	 * @since   5.2.1
	 */
	private function record(string $target, string $entity, string $value, string $table, string $key): void
	{
		$this->tracker->set("{$target}.{$entity}.{$key}.{$value}",
			[
				'key'   => $key,
				'value' => $value,
				'entity' => $entity,
				'table' => $table
			]
		);
	}
}

