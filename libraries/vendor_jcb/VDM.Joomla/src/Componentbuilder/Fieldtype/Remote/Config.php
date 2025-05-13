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

namespace VDM\Joomla\Componentbuilder\Fieldtype\Remote;


use VDM\Joomla\Interfaces\Remote\ConfigInterface;
use VDM\Joomla\Abstraction\Remote\Config as ExtendingConfig;


/**
 * Base Configure values for the remote classes
 * 
 * @since 5.1.1
 */
final class Config extends ExtendingConfig implements ConfigInterface
{
	/**
	 * Table Name
	 *
	 * @var    string
	 * @since 5.0.3
	 */
	protected string $table = 'fieldtype';

	/**
	 * Area Name
	 *
	 * @var   string|null
	 * @since 5.0.3
	 */
	protected ?string $area = 'Field Type';

	/**
	 * Prefix Key
	 *
	 * @var    string
	 * @since 3.2.2
	 */
	protected string $prefix_key = '';

	/**
	 * Suffix Key
	 *
	 * @var    string
	 * @since 3.2.2
	 */
	protected string $suffix_key = '';

	/**
	 * The main readme file path
	 *
	 * @var    string
	 * @since  5.1.1
	 */
	// [DEFAULT] protected string $main_readme_path = 'README.md';

	/**
	 * The index file path (index of all items)
	 *
	 * @var    string
	 * @since 3.2.2
	 */
	// [DEFAULT] protected string $index_path = 'index.json';

	/**
	 * The item (files) source path
	 *
	 * @var    string
	 * @since  5.1.1
	 */
	// [DEFAULT] protected string $src_path = 'src';

	/**
	 * The item settings file path
	 *
	 * @var   string
	 * @since 3.2.2
	 */
	// [DEFAULT] protected string $settings_path = 'item.json';

	/**
	 * The item guid=unique field
	 *
	 * @var    string
	 * @since  5.1.1
	 */
	// [DEFAULT] protected string $guid_field = 'guid';

	/**
	 * The item map
	 *
	 * @var    array
	 * @since 5.0.3
	protected array $map = [];
	[DEFAULT] */

	/**
	 * The index map
	 *    must always have: [name,path,guid]
	 *    you can add more
	 *
	 * @var   array
	 * @since 5.0.3
	 */
	protected array $index_map = [
		'name' => 'index_map_IndexName',
		'desc' => 'index_map_ShortDescription',
		'settings' => 'index_map_IndexSettingsPath',
		'path' => 'index_map_IndexPath',
		'guid' => 'index_map_IndexGUID'
	];

	/**
	 * The index header
	 *    mapping the index map to a table
	 *    must always have: [name,path,guid,local]
	 *    with [name] always first
	 *    with [path,guid,local] always last
	 *    you can add more in between
	 *
	 * @var    array
	 * @since  5.1.1
	 */
	protected array $index_header = [
		'name',
		'desc',
		'path',
		'guid',
		'local'
	];

	/**
	 * Core Placeholders
	 *
	 * @var    array
	 * @since  5.0.3
	protected array $placeholders = [
		'[['.'[NamespacePrefix]]]' => 'VDM',
		'[['.'[ComponentNamespace]]]' => 'Componentbuilder',
		'[['.'[Component]]]' => 'Componentbuilder', 
		'[['.'[component]]]' => 'componentbuilder'
	];
	[DEFAULT] */
}

