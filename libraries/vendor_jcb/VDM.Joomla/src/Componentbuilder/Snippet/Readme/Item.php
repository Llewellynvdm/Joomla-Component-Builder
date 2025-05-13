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

namespace VDM\Joomla\Componentbuilder\Snippet\Readme;


use VDM\Joomla\Interfaces\Readme\ItemInterface;


/**
 * Compiler Snippet Item Readme
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
███████╗███╗   ██╗██╗██████╗ ██████╗ ███████╗████████╗
██╔════╝████╗  ██║██║██╔══██╗██╔══██╗██╔════╝╚══██╔══╝
███████╗██╔██╗ ██║██║██████╔╝██████╔╝█████╗     ██║   
╚════██║██║╚██╗██║██║██╔═══╝ ██╔═══╝ ██╔══╝     ██║   
███████║██║ ╚████║██║██║     ██║     ███████╗   ██║   
╚══════╝╚═╝  ╚═══╝╚═╝╚═╝     ╚═╝     ╚══════╝   ╚═╝
```"];
		// system name
		$readme[] = "# " . $item->name;

		if (!empty($item->heading))
		{
			$readme[] = "\n### " . $item->heading;
		}

		if (!empty($item->description))
		{
			$readme[] = "\n" . $item->description;
		}

		$readme[] = "\nThis repository contains a snippet purpose-built for seamless integration with Joomla Component Builder (JCB). Each snippet is carefully crafted to work across site views, custom admin views, templates, and layouts—empowering developers to streamline development, promote code reuse, and maintain consistency throughout their components. The reset function allows you to easily update individual snippets to the latest versions from the core repository. For more tailored solutions, you can fork the repository to maintain and distribute your own customized snippet set. This flexible approach embraces JCB’s open-source model, giving you the freedom to adapt while staying connected to a robust, community-driven ecosystem.";

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

