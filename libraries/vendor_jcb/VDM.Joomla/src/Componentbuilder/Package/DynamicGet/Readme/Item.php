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


use VDM\Joomla\Interfaces\Readme\ItemInterface;


/**
 * Compiler Dynamic Get Item Readme
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
                                                                                       
██████╗ ██╗   ██╗███╗   ██╗ █████╗ ███╗   ███╗██╗ ██████╗     ██████╗ ███████╗████████╗
██╔══██╗╚██╗ ██╔╝████╗  ██║██╔══██╗████╗ ████║██║██╔════╝    ██╔════╝ ██╔════╝╚══██╔══╝
██║  ██║ ╚████╔╝ ██╔██╗ ██║███████║██╔████╔██║██║██║         ██║  ███╗█████╗     ██║   
██║  ██║  ╚██╔╝  ██║╚██╗██║██╔══██║██║╚██╔╝██║██║██║         ██║   ██║██╔══╝     ██║   
██████╔╝   ██║   ██║ ╚████║██║  ██║██║ ╚═╝ ██║██║╚██████╗    ╚██████╔╝███████╗   ██║   
╚═════╝    ╚═╝   ╚═╝  ╚═══╝╚═╝  ╚═╝╚═╝     ╚═╝╚═╝ ╚═════╝     ╚═════╝ ╚══════╝   ╚═╝   
```"];
		// system name
		$readme[] = "# " . $item->name;

		if (!empty($item->description))
		{
			$readme[] = "\n" . $item->description;
		}

		$readme[] = "\nThe Joomla! Dynamic Get definition contained in this repository delivers a streamlined mechanism for retrieving data—whether that’s a list of records, a single field value, or an aggregated result—from any Joomla database table and exposing it inside a site view or custom admin view created with Joomla Component Builder (JCB). Each Dynamic Get is packaged for full compatibility with the JCB workflow, giving developers a hassle‑free way to bind query results to templates, forms, or business logic without writing SQL from scratch. By using the \"reset\" button, you can instantly synchronize this Dynamic Get with the authoritative version hosted in our core repository, ensuring your components always benefit from the latest performance optimizations, security hardening, and feature enhancements.\n\n If you need to customize the Dynamic Get—perhaps to add extra filters, join additional tables, or reshape the returned data—you’re welcome to fork this repository and point your JCB instance to your fork. This lets you evolve the Dynamic Get on your own schedule while still enjoying the convenience of JCB’s query‑management tooling.\n
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

