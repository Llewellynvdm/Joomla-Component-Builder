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


use VDM\Joomla\Interfaces\Readme\ItemInterface;


/**
 * Compiler Admin View Item Readme
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
                                                                          
 █████╗ ██████╗ ███╗   ███╗██╗███╗   ██╗    ██╗   ██╗██╗███████╗██╗    ██╗
██╔══██╗██╔══██╗████╗ ████║██║████╗  ██║    ██║   ██║██║██╔════╝██║    ██║
███████║██║  ██║██╔████╔██║██║██╔██╗ ██║    ██║   ██║██║█████╗  ██║ █╗ ██║
██╔══██║██║  ██║██║╚██╔╝██║██║██║╚██╗██║    ╚██╗ ██╔╝██║██╔══╝  ██║███╗██║
██║  ██║██████╔╝██║ ╚═╝ ██║██║██║ ╚████║     ╚████╔╝ ██║███████╗╚███╔███╔╝
╚═╝  ╚═╝╚═════╝ ╚═╝     ╚═╝╚═╝╚═╝  ╚═══╝      ╚═══╝  ╚═╝╚══════╝ ╚══╝╚══╝ 
```"];
		// system name
		$readme[] = "# " . $item->name;

		if (!empty($item->description))
		{
			$readme[] = "\n" . $item->description;
		}
		elseif (!empty($item->short_description))
		{
			$readme[] = "\n" . $item->short_description;
		}

		$readme[] = "\nThe Joomla Admin View is a self‑contained backend form for a single record: it unites Fields to load existing data, validate user edits, and handle CRUD on data in the system, serving as the conduit that writes changes directly to the component’s database tables in Joomla Component Builder (JCB). By using the \"reset\" button, you can instantly synchronize this Admin View with the authoritative version hosted in our core repository, ensuring your Components always benefit from the latest refinements, performance optimizations, and security enhancements.\n\n Want something more fitting to your specific needs? Fork the repo, use the view as a blueprint and point JCB to your branch. Whether you’re layering in complex filters, interactive fields, or custom coded functionality;  you stay in charge while still enjoying JCB’s effortless deployment workflow.\n
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

