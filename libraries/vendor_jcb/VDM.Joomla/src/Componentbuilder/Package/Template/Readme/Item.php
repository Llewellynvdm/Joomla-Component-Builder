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

namespace VDM\Joomla\Componentbuilder\Package\Template\Readme;


use VDM\Joomla\Interfaces\Readme\ItemInterface;


/**
 * Compiler Template Item Readme
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
                                                                     
████████╗███████╗███╗   ███╗██████╗ ██╗      █████╗ ████████╗███████╗
╚══██╔══╝██╔════╝████╗ ████║██╔══██╗██║     ██╔══██╗╚══██╔══╝██╔════╝
   ██║   █████╗  ██╔████╔██║██████╔╝██║     ███████║   ██║   █████╗  
   ██║   ██╔══╝  ██║╚██╔╝██║██╔═══╝ ██║     ██╔══██║   ██║   ██╔══╝  
   ██║   ███████╗██║ ╚═╝ ██║██║     ███████╗██║  ██║   ██║   ███████╗
   ╚═╝   ╚══════╝╚═╝     ╚═╝╚═╝     ╚══════╝╚═╝  ╚═╝   ╚═╝   ╚══════╝
```"];
		// system name
		$readme[] = "# " . $item->name;

		if (!empty($item->description))
		{
			$readme[] = "\n" . $item->description;
		}

		$readme[] = "The Joomla template within this repository provide an essential mechanism for organizing and rendering the structure of site views and custom admin views in Joomla Component Builder (JCB). Each template acts as a top-level wrapper, often including one or more layouts, and is carefully designed to control the overall flow and presentation of view output.\n
\n
Templates ensure a clean separation of concerns by handling shared rendering logic above the layout level, enabling developers to maintain consistent design and behavior across multiple views. They streamline the way views are built and presented, making component development more efficient and maintainable.\n
\n
By using the reset functionality, users can seamlessly update individual templates to match the latest versions maintained in the core repository—ensuring their projects stay current with improvements and best practices.\n
\n
For developers who need more control or wish to implement project-specific logic, this repository can be forked. You can then point your JCB instance to your own fork to maintain and distribute customized templates independently from the main JCB repository.\n
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

