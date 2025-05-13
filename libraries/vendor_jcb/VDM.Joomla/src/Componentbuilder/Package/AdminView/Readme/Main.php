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

namespace VDM\Joomla\Componentbuilder\Package\AdminView\Readme;


use VDM\Joomla\Interfaces\Readme\MainInterface;


/**
 * Admin View Main Readme
 * 
 * @since  5.1.1
 */
final class Main implements MainInterface
{
	/**
	 * Get Main Readme
	 *
	 * @param array    $items  All items of this repository.
	 *
	 * @return string
	 * @since 3.2.0
	 */
	public function get(array $items): string
	{
		// build readme
		$readme = ["```
     ██╗ ██████╗  ██████╗ ███╗   ███╗██╗      █████╗                              
     ██║██╔═══██╗██╔═══██╗████╗ ████║██║     ██╔══██╗                             
     ██║██║   ██║██║   ██║██╔████╔██║██║     ███████║                             
██   ██║██║   ██║██║   ██║██║╚██╔╝██║██║     ██╔══██║                             
╚█████╔╝╚██████╔╝╚██████╔╝██║ ╚═╝ ██║███████╗██║  ██║                             
 ╚════╝  ╚═════╝  ╚═════╝ ╚═╝     ╚═╝╚══════╝╚═╝  ╚═╝                             
                                                                                  
 █████╗ ██████╗ ███╗   ███╗██╗███╗   ██╗    ██╗   ██╗██╗███████╗██╗    ██╗███████╗
██╔══██╗██╔══██╗████╗ ████║██║████╗  ██║    ██║   ██║██║██╔════╝██║    ██║██╔════╝
███████║██║  ██║██╔████╔██║██║██╔██╗ ██║    ██║   ██║██║█████╗  ██║ █╗ ██║███████╗
██╔══██║██║  ██║██║╚██╔╝██║██║██║╚██╗██║    ╚██╗ ██╔╝██║██╔══╝  ██║███╗██║╚════██║
██║  ██║██████╔╝██║ ╚═╝ ██║██║██║ ╚████║     ╚████╔╝ ██║███████╗╚███╔███╔╝███████║
╚═╝  ╚═╝╚═════╝ ╚═╝     ╚═╝╚═╝╚═╝  ╚═══╝      ╚═══╝  ╚═╝╚══════╝ ╚══╝╚══╝ ╚══════╝
```"];

		// default description of admin views
		$readme[] = "\n### What are Joomla Admin Views?\nThe Joomla admin views provide a robust interface layer that assembles backend fields, and PHP logic, enabling seamless management of component data within Joomla Component Builder (JCB). Acting as the central hub for listing, editing, and persisting records, these views standardize how components interact with the database and ensure administrators enjoy a consistent, intuitive control panel across the entire JCB ecosystem.\n
\n
Whenever you need to update Admin Views in any JCB project, simply select the desired views and click the \"reset\" button. The selected views is synchronized with the original version stored in this repository, bringing the latest design tweaks, security fixes, and performance boosts.\n
\n
If your project calls for more distinctive Admin View, or component‑specific business logic. Simply fork the repository and point JCB to your copy. This lets you maintain and evolve Admin Views independently of the main JCB community while preserving the convenience of JCB’s one‑click update mechanism.\n
\n
\"We believe this approach empowers you to extend and customize JCB to fit your unique requirements, exemplifying the true spirit of freedom in software development. We trust you will find this capability both useful and aligned with the expectations of how open-source software should function.\"\n";

		// get the readme body
		$readme[] = $this->readmeBuilder($items);

		// yes you can remove this, but why?
		$readme[] = "\n---\n```
     ██╗ ██████╗  ██████╗ ███╗   ███╗██╗      █████╗
     ██║██╔═══██╗██╔═══██╗████╗ ████║██║     ██╔══██╗
     ██║██║   ██║██║   ██║██╔████╔██║██║     ███████║
██   ██║██║   ██║██║   ██║██║╚██╔╝██║██║     ██╔══██║
╚█████╔╝╚██████╔╝╚██████╔╝██║ ╚═╝ ██║███████╗██║  ██║
 ╚════╝  ╚═════╝  ╚═════╝ ╚═╝     ╚═╝╚══════╝╚═╝  ╚═╝
 ██████╗ ██████╗ ███╗   ███╗██████╗  ██████╗ ███╗   ██╗███████╗███╗   ██╗████████╗
██╔════╝██╔═══██╗████╗ ████║██╔══██╗██╔═══██╗████╗  ██║██╔════╝████╗  ██║╚══██╔══╝
██║     ██║   ██║██╔████╔██║██████╔╝██║   ██║██╔██╗ ██║█████╗  ██╔██╗ ██║   ██║
██║     ██║   ██║██║╚██╔╝██║██╔═══╝ ██║   ██║██║╚██╗██║██╔══╝  ██║╚██╗██║   ██║
╚██████╗╚██████╔╝██║ ╚═╝ ██║██║     ╚██████╔╝██║ ╚████║███████╗██║ ╚████║   ██║
 ╚═════╝ ╚═════╝ ╚═╝     ╚═╝╚═╝      ╚═════╝ ╚═╝  ╚═══╝╚══════╝╚═╝  ╚═══╝   ╚═╝
██████╗ ██╗   ██╗██╗██╗     ██████╗ ███████╗██████╗
██╔══██╗██║   ██║██║██║     ██╔══██╗██╔════╝██╔══██╗
██████╔╝██║   ██║██║██║     ██║  ██║█████╗  ██████╔╝
██╔══██╗██║   ██║██║██║     ██║  ██║██╔══╝  ██╔══██╗
██████╔╝╚██████╔╝██║███████╗██████╔╝███████╗██║  ██║
╚═════╝  ╚═════╝ ╚═╝╚══════╝╚═════╝ ╚══════╝╚═╝  ╚═╝
```\n> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)\n\n";

		return implode("\n", $readme);
	}

	/**
	 * The readme builder
	 *
	 * @param array    $classes  The powers.
	 *
	 * @return string
	 * @since 3.2.0
	 */
	private function readmeBuilder(array &$items): string
	{
		$classes = [];
		foreach ($items as $guid => $power)
		{
			// add to the sort bucket
			$classes[] = [
				'name' => $power['name'],
				'link' => $this->indexLinkPower($power)
			];
		}

		return $this->readmeModel($classes);
	}

	/**
	 * Sort and model the readme classes
	 *
	 * @param array $classes The powers.
	 *
	 * @return string
	 * @since 3.2.0
	 */
	private function readmeModel(array &$classes): string
	{
		$this->sortClasses($classes);

		return $this->generateIndex($classes);
	}

	/**
	 * Generate the index string for classes
	 *
	 * @param array $classes The sorted classes
	 *
	 * @return string The index string
	 */
	private function generateIndex(array &$classes): string
	{
		$result = "# Index of Joomla! Field Types\n";

		foreach ($classes as $class)
		{
			// Add the class details
			$result .= "\n - " . $class['link'];
		}

		return $result;
	}

	/**
	 * Sort the flattened array using a single sorting function
	 *
	 * @param array $classes The classes to sort
	 *
	 * @since 3.2.0
	 */
	private function sortClasses(array &$classes): void
	{
		usort($classes, function ($a, $b) {
			return $this->compareName($a, $b);
		});
	}

	/**
	 * Compare the name of two classes
	 *
	 * @param array $a First class
	 * @param array $b Second class
	 *
	 * @return int Comparison result
	 * @since 3.2.0
	 */
	private function compareName(array $a, array $b): int
	{
		return strcmp($a['name'], $b['name']);
	}

	/**
	 * Build the Link to the power in this repository
	 *
	 * @param array  $power  The power details.
	 *
	 * @return string
	 * @since 3.2.0
	 */
	private function indexLinkPower(array &$power): string
	{
		$name = $power['name'] ?? 'error';
		return '**' . $name . "** | "
			. $this->linkPowerRepo($power) . ' | '
			. $this->linkPowerSettings($power) . ' | '
			. $this->linkPowerDesc($power);
	}

	/**
	 * Build the Link to the power in this repository
	 *
	 * @param array  $power  The power details.
	 *
	 * @return string
	 * @since 3.2.0
	 */
	private function linkPowerRepo(array &$power): string
	{
		$path = $power['path'] ?? 'error';
		return '[Details](' . $path . ')';
	}

	/**
	 * Build the Link to the power settings in this repository
	 *
	 * @param array  $power  The power details.
	 *
	 * @return string
	 * @since 3.2.0
	 */
	private function linkPowerSettings(array &$power): string
	{
		$settings = $power['settings'] ?? 'error';
		return '[Settings](' . $settings . ')';
	}

	/**
	 * Get the short description
	 *
	 * @param array  $power  The power details.
	 *
	 * @return string
	 * @since 3.2.0
	 */
	private function linkPowerDesc(array &$power): string
	{
		$jpk = $power['desc'] ?? '';
		return $jpk;
	}
}

