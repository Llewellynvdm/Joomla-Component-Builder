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

namespace VDM\Joomla\Componentbuilder\Package\Library\Readme;


use VDM\Joomla\Interfaces\Readme\ItemInterface;


/**
 * Compiler Library Item Readme
 * 
 * @since  5.1.1
 */
final class Item implements ItemInterface
{
	/**
	 * Get an item readme
	 *
	 * @param object  $item  An item details.
	 *
	 * @return string
	 * @since 3.2.2
	 */
	public function get(object $item): string
	{
		// build readme
		$readme = ["```
     ██╗ ██████╗  ██████╗ ███╗   ███╗██╗      █████╗ 
     ██║██╔═══██╗██╔═══██╗████╗ ████║██║     ██╔══██╗
     ██║██║   ██║██║   ██║██╔████╔██║██║     ███████║
██   ██║██║   ██║██║   ██║██║╚██╔╝██║██║     ██╔══██║
╚█████╔╝╚██████╔╝╚██████╔╝██║ ╚═╝ ██║███████╗██║  ██║
 ╚════╝  ╚═════╝  ╚═════╝ ╚═╝     ╚═╝╚══════╝╚═╝  ╚═╝
                                                     
██╗     ██╗██████╗ ██████╗  █████╗ ██████╗ ██╗   ██╗ 
██║     ██║██╔══██╗██╔══██╗██╔══██╗██╔══██╗╚██╗ ██╔╝ 
██║     ██║██████╔╝██████╔╝███████║██████╔╝ ╚████╔╝  
██║     ██║██╔══██╗██╔══██╗██╔══██║██╔══██╗  ╚██╔╝   
███████╗██║██████╔╝██║  ██║██║  ██║██║  ██║   ██║    
╚══════╝╚═╝╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝    
```"];

		// system name
		$readme[] = "# " . $item->name;

		if (!empty($item->description))
		{
			$readme[] = "\n" . $item->description;
		}

		$readme[] = "\nThe Joomla! library contained in this repository delivers a streamlined mechanism for integrating a specific media framework—such as Bootstrap, UIkit, or any other asset bundle—directly into components built with Joomla Component Builder (JCB). Each library is carefully packaged for full compatibility with the JCB workflow, giving developers a hassle‑free way to enqueue its CSS, JavaScript, and related resources within their projects. By utilizing the \"reset\" functionality, users can seamlessly update individual field types to align with the latest versions maintained in our core repository, ensuring that their projects benefit from the most up-to-date features and fixes.\n\n If you need to customize the library—whether that involves theme adjustments, removing unused modules, or adding proprietary extensions—you’re welcome to fork this repository and direct your JCB instance to your fork. This lets you evolve the library on your own schedule while still enjoying the convenience of JCB’s asset‑management tooling.\n
\n
\"This flexible approach embraces JCB’s open-source model, giving you the freedom to adapt your components to your exact needs while staying connected to a powerful and community-driven ecosystem.\"\n";

		// yes you can remove this, but why?
		$readme[] = "\n---\n```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```\n> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)\n\n";

		return implode("\n", $readme);
	}
}

