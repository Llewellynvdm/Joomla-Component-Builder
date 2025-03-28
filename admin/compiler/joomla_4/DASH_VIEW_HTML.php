<?php
/**
 * @package    Joomla.Component.Builder
 *
 * @created    4th September 2022
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        Joomla Component Builder <https://git.vdm.dev/joomla/Component-Builder>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this JCB template file (EVER)
defined('_JCB_TEMPLATE') or die;
?>
###BOM###
namespace ###NAMESPACEPREFIX###\Component\###ComponentNamespace###\Administrator\View\###Component###;

###DASH_VIEW_HTML_HEADER###

// No direct access to this file
\defined('_JEXEC') or die;

/**
 * ###Component### View class
 *
 * @since  1.6
 */
#[\AllowDynamicProperties]
class HtmlView extends BaseHtmlView
{
	/**
	 * View display method
	 *
	 * @return void
	 * @throws \Exception
	 * @since   1.6
	 */
	function display($tpl = null): void
	{
		// Assign data to the view
		$this->icons          = $this->get('Icons');
		$this->styles         = $this->get('Styles');
		$this->scripts        = $this->get('Scripts');
		$this->contributors   = ###Component###Helper::getContributors();

		// get the manifest details of the component
		$this->manifest = ###Component###Helper::manifest();###DASH_GET_CUSTOM_DATA###

		// Set the toolbar
		$this->addToolBar();

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			throw new \Exception(implode("\n", $errors), 500);
		}

		// Set the html view document stuff
		$this->_prepareDocument();

		// Display the template
		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 * @since   1.6
	 */
	protected function addToolbar(): void
	{
		$canDo = ###Component###Helper::getActions('###component###');
		Joomla___0c1a176a_304f_433a_8233_37d01ff87815___Power::title(Joomla___ba6326ef_cb79_4348_80f4_ab086082e3c5___Power::_('COM_###COMPONENT###_DASHBOARD'), 'grid-2');

		// set help url for this view if found
		$this->help_url = ###Component###Helper::getHelpUrl('###component###');
		if (Super___1f28cb53_60d9_4db1_b517_3c7dc6b429ef___Power::check($this->help_url))
		{
			Joomla___0c1a176a_304f_433a_8233_37d01ff87815___Power::help('COM_###COMPONENT###_HELP_MANAGER', false, $this->help_url);
		}

		if ($canDo->get('core.admin') || $canDo->get('core.options'))
		{
			Joomla___0c1a176a_304f_433a_8233_37d01ff87815___Power::preferences('com_###component###');
		}
	}

	/**
	 * Prepare some document related stuff.
	 *
	 * @return  void
	 * @since   1.6
	 */
	protected function _prepareDocument(): void
	{
		// set page title
		$this->getDocument()->setTitle(Joomla___ba6326ef_cb79_4348_80f4_ab086082e3c5___Power::_('COM_###COMPONENT###_DASHBOARD'));
		// add manifest to page JavaScript
		$this->getDocument()->addScriptDeclaration("var manifest = JSON.parse(" . json_encode($this->manifest) . ");", "text/javascript");
		// add styles
		foreach ($this->styles as $style)
		{
			Joomla___34690c75_1090_47eb_8c06_7228dc7eedd6___Power::_('stylesheet', $style, ['version' => 'auto']);
		}
		// add scripts
		foreach ($this->scripts as $script)
		{
			Joomla___34690c75_1090_47eb_8c06_7228dc7eedd6___Power::_('script', $script, ['version' => 'auto']);
		}
	}
}
