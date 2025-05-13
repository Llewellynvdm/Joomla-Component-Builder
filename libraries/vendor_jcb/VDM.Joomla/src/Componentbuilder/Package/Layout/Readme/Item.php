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

namespace VDM\Joomla\Componentbuilder\Package\Layout\Readme;


use VDM\Joomla\Interfaces\Readme\ItemInterface;


/**
 * Compiler Layout Item Readme
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
                                                     
██╗      █████╗ ██╗   ██╗ ██████╗ ██╗   ██╗████████╗ 
██║     ██╔══██╗╚██╗ ██╔╝██╔═══██╗██║   ██║╚══██╔══╝ 
██║     ███████║ ╚████╔╝ ██║   ██║██║   ██║   ██║    
██║     ██╔══██║  ╚██╔╝  ██║   ██║██║   ██║   ██║    
███████╗██║  ██║   ██║   ╚██████╔╝╚██████╔╝   ██║    
╚══════╝╚═╝  ╚═╝   ╚═╝    ╚═════╝  ╚═════╝    ╚═╝
```"];
		// system name
		$readme[] = "# " . $item->name;

		if (!empty($item->description))
		{
			$readme[] = "\n" . $item->description;
		}

		$readme[] = "The Joomla layout within this repository offer a robust mechanism for integrating structured, reusable HTML and PHP code into Joomla Component Builder (JCB). Each layout is carefully crafted to ensure full compatibility and ease of use within the JCB framework, allowing developers to streamline interface design, enforce consistency, and accelerate custom component development.\n
\n
Using the reset functionality, you can quickly update any individual layout to the latest version from the official core repository, ensuring that your components benefit from the most recent improvements, features, and fixes.\n
\n
For developers who require more tailored solutions, this repository can be forked. By pointing your JCB instance to your custom fork, you gain full control over your layouts, allowing you to modify, maintain, and distribute them independently from the main JCB repository.\n
\n
This flexible approach embraces JCB’s open-source model, giving you the freedom to adapt your components to your exact needs while staying connected to a powerful and community-driven ecosystem.\n";

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

