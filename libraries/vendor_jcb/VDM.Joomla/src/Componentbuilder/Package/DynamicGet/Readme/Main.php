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

namespace VDM\Joomla\Componentbuilder\Package\DynamicGet\Readme;


use VDM\Joomla\Interfaces\Readme\MainInterface;


/**
 * Dynamic Get Main Readme
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
                                                                                               
██████╗ ██╗   ██╗███╗   ██╗ █████╗ ███╗   ███╗██╗ ██████╗     ██████╗ ███████╗████████╗███████╗
██╔══██╗╚██╗ ██╔╝████╗  ██║██╔══██╗████╗ ████║██║██╔════╝    ██╔════╝ ██╔════╝╚══██╔══╝██╔════╝
██║  ██║ ╚████╔╝ ██╔██╗ ██║███████║██╔████╔██║██║██║         ██║  ███╗█████╗     ██║   ███████╗
██║  ██║  ╚██╔╝  ██║╚██╗██║██╔══██║██║╚██╔╝██║██║██║         ██║   ██║██╔══╝     ██║   ╚════██║
██████╔╝   ██║   ██║ ╚████║██║  ██║██║ ╚═╝ ██║██║╚██████╗    ╚██████╔╝███████╗   ██║   ███████║
╚═════╝    ╚═╝   ╚═╝  ╚═══╝╚═╝  ╚═╝╚═╝     ╚═╝╚═╝ ╚═════╝     ╚═════╝ ╚══════╝   ╚═╝   ╚══════╝
```"];

		// default description of dynamic gets
		$readme[] = "\n### What are Joomla Dynamic Gets?\nJoomla Dynamic Gets offer a unified way to create, manage, and reuse data‑retrieval definitions that pull records or values from any Joomla database table or field, making the results instantly available in site views or custom admin views built with Joomla Component Builder (JCB). This repository serves as the central hub for curating, versioning, and distributing these Dynamic Gets throughout the entire JCB ecosystem.\n
\n
When you need to update Dynamic Gets in any JCB project, simply select the desired dynamic get and click the \"reset\" button. This action will automatically sync the selected dynamic get with its corresponding version hosted in our core repository, ensuring you always have the latest updates.\n
\n
If you need to tailor a Dynamic Get—perhaps to filter data differently, join additional tables, or anything in that line, you can fork the repository and point your JCB instance to your fork. This lets you maintain and evolve Dynamic Gets independently of the main JCB community while preserving the convenience of JCB’s one‑click update mechanism.\n
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

