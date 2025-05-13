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

namespace VDM\Joomla\Componentbuilder\Package\CustomCode\Readme;


use VDM\Joomla\Interfaces\Readme\ItemInterface;


/**
 * Compiler Custom Code Item Readme
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
                                                                                           
 ██████╗██╗   ██╗███████╗████████╗ ██████╗ ███╗   ███╗     ██████╗ ██████╗ ██████╗ ███████╗
██╔════╝██║   ██║██╔════╝╚══██╔══╝██╔═══██╗████╗ ████║    ██╔════╝██╔═══██╗██╔══██╗██╔════╝
██║     ██║   ██║███████╗   ██║   ██║   ██║██╔████╔██║    ██║     ██║   ██║██║  ██║█████╗  
██║     ██║   ██║╚════██║   ██║   ██║   ██║██║╚██╔╝██║    ██║     ██║   ██║██║  ██║██╔══╝  
╚██████╗╚██████╔╝███████║   ██║   ╚██████╔╝██║ ╚═╝ ██║    ╚██████╗╚██████╔╝██████╔╝███████╗
 ╚═════╝ ╚═════╝ ╚══════╝   ╚═╝    ╚═════╝ ╚═╝     ╚═╝     ╚═════╝ ╚═════╝ ╚═════╝ ╚══════╝
```"];
		// system name
		$readme[] = "# " . $item->system_name;

		if (!empty($item->description))
		{
			$readme[] = "\n" . $item->description;
		}

		$readme[] = "\nThe Joomla! custom‑code snippet contained in this repository offers a simple, reliable way to inject a self‑contained block of PHP, JavaScript, CSS, or markup into components built with Joomla Component Builder (JCB) through a custom‑code placeholder such as [CUSTOMCODE=getCustom]. Each snippet is packaged for seamless compatibility with the JCB workflow, so you can drop it into your components without manual wiring or asset juggling. By clicking the \"reset\" button, you can instantly synchronize this custom‑code with the authoritative version stored in our core repository, ensuring your components always take advantage of the latest refinements, security fixes, and performance improvements.\n\n Need something more tailored? Fork this repository and direct your JCB instance to your fork. Whether you’re adding component‑specific logic, stripping out unused functionality, or expanding the custom‑code’s capabilities, you stay fully in control while still leveraging JCB’s convenient custom‑code‑management tooling.\n
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

