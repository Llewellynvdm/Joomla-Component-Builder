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

namespace VDM\Joomla\Abstraction\Remote;


use VDM\Joomla\Interfaces\Remote\ConfigInterface as Config;
use VDM\Joomla\Interfaces\GrepInterface as Grep;
use VDM\Joomla\Interfaces\Data\ItemInterface as Item;
use VDM\Joomla\Interfaces\Remote\GetInterface;
use VDM\Joomla\Abstraction\Remote\Base;


/**
 * Get data based on global unique ids from remote system
 * 
 * @since 3.2.0
 */
abstract class Get extends Base implements GetInterface
{
	/**
	 * The Grep Class.
	 *
	 * @var   Grep
	 * @since 3.2.2
	 */
	protected Grep $grep;

	/**
	 * The Item Class.
	 *
	 * @var   Item
	 * @since 3.2.0
	 */
	protected Item $item;

	/**
	 * Constructor.
	 *
	 * @param Config      $config   The Config Class.
	 * @param Grep        $grep     The Grep Class.
	 * @param Item        $item     The ItemInterface Class.
	 * @param string|null $table    The table name.
	 *
	 * @since 3.2.0
	 */
	public function __construct(Config $config, Grep $grep, Item $item, ?string $table = null)
	{
		parent::__construct($config);

		$this->grep = $grep;
		$this->item = $item;
		if ($table !== null)
		{
			$this->table($table);
		}
	}

	/**
	 * Initializes and categorizes items by checking their existence in the local database
	 * and optionally retrieving them from a remote repository if not found locally.
	 *
	 * This method processes an array of unique identifiers (`$items`) and checks each item:
	 * - If found in the local database: categorized under 'local'.
	 * - If not found locally and not available remotely: categorized under 'not_found'.
	 * - If retrieved from the remote repository: categorized under 'added' and stored locally.
	 *
	 * @param array        $items   An array of item identifiers (GUIDs) to initialize and validate.
	 * @param object|null  $repo    The repository object to search. If null, all repos will be searched.
	 *
	 * @return array{
	 *     local: array<string, string>,
	 *     not_found: array<string, string>,
	 *     added: array<string, string>
	 * } Associative arrays indexed by GUIDs indicating the status of each item:
	 * - 'local': Items already present in the local database.
	 * - 'not_found': Items not found locally or remotely.
	 * - 'added': Items successfully retrieved from the remote repository and stored.
	 *
	 * @since  5.1.1
	 */
	public function init(array $items, ?object $repo = null): array
	{
		$done = [];
		$logger = [
			'local'     => [],
			'not_found' => [],
			'added'     => []
		];
		$guid_field = $this->getGuidField();

		foreach ($items as $guid)
		{
			if (isset($done[$guid]))
			{
				continue;
			}
			$done[$guid] = $guid;

			// Check if item exists in the local database
			if ($this->item->table($this->getTable())->value($guid, $guid_field) !== null)
			{
				$logger['local'][$guid] = $guid;
				continue;
			}

			// Attempt to fetch the item from the remote repository
			$item = $this->grep->get($guid, ['remote'], $repo);

			if ($item === null)
			{
				$logger['not_found'][$guid] = $guid;
				continue;
			}

			// pass item to the inspector to get all dependencies
			// $item = $this->model->init($item);

			// Store the retrieved remote item into the local structure
			$this->item->set($item, $guid_field);

			$logger['added'][$guid] = $guid;
		}

		return $logger;
	}

	/**
	 * Get the path/repo object
	 *
	 * @param string   $guid  The target repository guid.
	 *
	 * @return object|null
	 * @since  5.1.1
	 */
	public function path(string $guid): ?object
	{
		return $this->grep->getPath($guid);
	}

	/**
	 * get all the available paths for this area
	 *
	 * @return array|null
	 * @since  5.1.1
	 */
	public function paths(): ?array
	{
		return $this->grep->getPaths();
	}

	/**
	 * Get all available items for the given repository, or all repositories if none specified.
	 *
	 * @param string|null $repo The target repository to list (optional).
	 *
	 * @return array|null An array of indexed path objects or null if not found.
	 * @since 5.1.1
	 */
	public function list(?string $repo = null): ?array
	{
		$guid_field = $this->getGuidField();
		$table = $this->item->table($this->getTable());

		if ($repo === null)
		{
			$paths = $this->grep->getPathsIndexes();
		}
		else
		{
			$singlePath = $this->grep->getPathIndexes($repo);
			$paths = $singlePath !== null ? [$singlePath] : null;
		}

		if ($paths === null)
		{
			return null;
		}

		foreach ($paths as &$path)
		{
			foreach ($path->index as &$item)
			{
				$guid = $item->{$guid_field};
				$item->local = $table->value($guid, $guid_field) !== null;
			}
		}

		return $paths;
	}

	/**
	 * Reset the items
	 *
	 * @param array   $items    The global unique ids of the items
	 *
	 * @return bool
	 * @since  3.2.0
	 */
	public function reset(array $items): bool
	{
		if ($items === [])
		{
			return false;
		}

		$success = true;

		foreach($items as $guid)
		{
			if (!$this->item($guid, ['remote']))
			{
				$success = false;
			}
		}

		return $success;
	}

	/**
	 * Load an item
	 *
	 * @param string       $guid    The global unique id of the item
	 * @param array        $order   The search order
	 * @param object|null  $repo    The repository object to search. If null, all repos will be searched.
	 *
	 * @return bool
	 * @since  3.2.0
	 * @since  5.1.1  We added the repo object
	 */
	public function item(string $guid, array $order = ['remote', 'local'], ?object $repo = null): bool
	{
		$guid_field = $this->getGuidField();
		if (($item = $this->grep->get($guid, $order, $repo)) !== null)
		{
			// pass item to the model to set the direct children
			// $item = $this->model->getItem($item);
			return $this->item->table($this->getTable())->set($item, $guid_field);
		}

		return false;
	}
}

