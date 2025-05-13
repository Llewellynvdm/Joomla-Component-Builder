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

namespace VDM\Joomla\Componentbuilder\Package\Field\Readme;


use VDM\Joomla\Interfaces\Readme\ItemInterface;


/**
 * Compiler Field Item Readme
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
                                                     
███████╗██╗███████╗██╗     ██████╗                   
██╔════╝██║██╔════╝██║     ██╔══██╗                  
█████╗  ██║█████╗  ██║     ██║  ██║                  
██╔══╝  ██║██╔══╝  ██║     ██║  ██║                  
██║     ██║███████╗███████╗██████╔╝                  
╚═╝     ╚═╝╚══════╝╚══════╝╚═════╝                   
```"];
		// system name
		$readme[] = "# " . $item->name;

		if (!empty($item->description))
		{
			$readme[] = "\n" . $item->description;
		}

		$readme[] = "\nThe Joomla Field is the heartbeat of every JCB‑built component: it defines a slice of the data schema, drives form generation, and dictates how a single piece of information is captured, validated, and stored in the database. By combining its fieldtype, datatype, and parameters into a reusable building block, the field underpins every admin view, site view, and custom admin view, making it a foundational element of the entire JCB ecosystem. By using the \"reset\" button, you can instantly synchronize this Field with the authoritative version hosted in our core repository, ensuring your Components always benefit from the latest refinements, performance optimizations, and security enhancements.\n\n If you want something more different from the provided fields. Fork the repo, tailor the field, and point JCB to your branch. Whether you’re storing different types of data, setting different parameters, you stay in charge while still enjoying JCB’s effortless deployment workflow.\n
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

