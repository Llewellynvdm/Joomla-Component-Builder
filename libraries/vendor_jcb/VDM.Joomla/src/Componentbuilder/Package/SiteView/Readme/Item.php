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

namespace VDM\Joomla\Componentbuilder\Package\SiteView\Readme;


use VDM\Joomla\Interfaces\Readme\ItemInterface;


/**
 * Compiler Site View Item Readme
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
                                                              
███████╗██╗████████╗███████╗    ██╗   ██╗██╗███████╗██╗    ██╗
██╔════╝██║╚══██╔══╝██╔════╝    ██║   ██║██║██╔════╝██║    ██║
███████╗██║   ██║   █████╗      ██║   ██║██║█████╗  ██║ █╗ ██║
╚════██║██║   ██║   ██╔══╝      ╚██╗ ██╔╝██║██╔══╝  ██║███╗██║
███████║██║   ██║   ███████╗     ╚████╔╝ ██║███████╗╚███╔███╔╝
╚══════╝╚═╝   ╚═╝   ╚══════╝      ╚═══╝  ╚═╝╚══════╝ ╚══╝╚══╝ 
```"];
		// system name
		$readme[] = "# " . $item->name;

		if (!empty($item->description))
		{
			$readme[] = "\n" . $item->description;
		}

		$readme[] = "\nThe Joomla! Site View contained in this repository equips your component with a bespoke front‑end interface—complete with its own markup, Templates, Layouts, Dynamic Gets, and custom CSS/HTML/PHP—ready to plug straight into Joomla Component Builder (JCB). Each view is pre‑wired for the JCB pipeline, so data retrieval, rendering, and interaction flow smoothly on the public site without extra scaffolding. By using the \"reset\" button, you can instantly synchronize this Site View with the authoritative version hosted in our core repository, ensuring your Sites always benefit from the latest UI refinements, performance optimizations, and security enhancements.\n\n Want to go bespoke? Fork the repo, tailor the view, and point JCB to your branch. Whether you’re layering in complex filters, interactive charts, or head‑turning animations, you stay in charge while still enjoying JCB’s effortless deployment workflow.\n
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

