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

namespace VDM\Joomla\Componentbuilder\Package\CustomAdminView\Readme;


use VDM\Joomla\Interfaces\Readme\ItemInterface;


/**
 * Custom Admin View Get Item Readme
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
                                                                                                                                    
 ██████╗██╗   ██╗███████╗████████╗ ██████╗ ███╗   ███╗     █████╗ ██████╗ ███╗   ███╗██╗███╗   ██╗    ██╗   ██╗██╗███████╗██╗    ██╗
██╔════╝██║   ██║██╔════╝╚══██╔══╝██╔═══██╗████╗ ████║    ██╔══██╗██╔══██╗████╗ ████║██║████╗  ██║    ██║   ██║██║██╔════╝██║    ██║
██║     ██║   ██║███████╗   ██║   ██║   ██║██╔████╔██║    ███████║██║  ██║██╔████╔██║██║██╔██╗ ██║    ██║   ██║██║█████╗  ██║ █╗ ██║
██║     ██║   ██║╚════██║   ██║   ██║   ██║██║╚██╔╝██║    ██╔══██║██║  ██║██║╚██╔╝██║██║██║╚██╗██║    ╚██╗ ██╔╝██║██╔══╝  ██║███╗██║
╚██████╗╚██████╔╝███████║   ██║   ╚██████╔╝██║ ╚═╝ ██║    ██║  ██║██████╔╝██║ ╚═╝ ██║██║██║ ╚████║     ╚████╔╝ ██║███████╗╚███╔███╔╝
 ╚═════╝ ╚═════╝ ╚══════╝   ╚═╝    ╚═════╝ ╚═╝     ╚═╝    ╚═╝  ╚═╝╚═════╝ ╚═╝     ╚═╝╚═╝╚═╝  ╚═══╝      ╚═══╝  ╚═╝╚══════╝ ╚══╝╚══╝ 
```"];
		// system name
		$readme[] = "# " . $item->name;

		if (!empty($item->description))
		{
			$readme[] = "\n" . $item->description;
		}

		$readme[] = "\nThe Joomla! Custom Admin View contained in this repository delivers a customization option similar to a Site View, for integrating a hand‑crafted back‑end interface—complete with its own markup, PHP logic, Dynamic Gets, Templates, and Layouts—directly into components built with Joomla Component Builder (JCB). Each view is packaged for full compatibility with the JCB workflow, giving developers a hassle‑free way to present and manage data in the Joomla administrator without relying exclusively on auto‑generated tables. By using the \"reset\" button, you can instantly synchronize this Custom Admin View with the authoritative version hosted in our core repository, ensuring your components always benefit from the latest UI refinements, performance optimizations, and security enhancements.\n\n If you need to tailor the view—adding new filters, integrating dashboards, adjusting layouts, or incorporating additional Templates—you’re welcome to fork this repository and point your JCB instance to your fork. This lets you evolve the view on your own schedule while still enjoying the convenience of JCB’s view‑management tooling.\n
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

