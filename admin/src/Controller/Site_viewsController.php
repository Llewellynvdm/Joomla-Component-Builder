<?php
/**
 * @package    Joomla.Component.Builder
 *
 * @created    30th April, 2015
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        Joomla Component Builder <https://git.vdm.dev/joomla/Component-Builder>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
namespace VDM\Component\Componentbuilder\Administrator\Controller;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\Controller\AdminController;
use Joomla\Utilities\ArrayHelper;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Session\Session;
use VDM\Component\Componentbuilder\Administrator\Helper\ComponentbuilderHelper;

// No direct access to this file
\defined('_JEXEC') or die;

/**
 * Site_views Admin Controller
 *
 * @since  1.6
 */
class Site_viewsController extends AdminController
{
	/**
	 * The prefix to use with controller messages.
	 *
	 * @var    string
	 * @since  1.6
	 */
	protected $text_prefix = 'COM_COMPONENTBUILDER_SITE_VIEWS';

	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  \Joomla\CMS\MVC\Model\BaseDatabaseModel
	 *
	 * @since   1.6
	 */
	public function getModel($name = 'Site_view', $prefix = 'Administrator', $config = ['ignore_request' => true])
	{
		return parent::getModel($name, $prefix, $config);
	}


	/**
	 * Redirect the request to the Initialization selection page.
	 *
	 * @return bool True on successful initialization, false on failure.
	 */
	public function initPowers()
	{
		// Check for request forgeries
		Session::checkToken() or die(Text::_('JINVALID_TOKEN'));

		// set default in development message
		$message = '<h1>' . Text::_('COM_COMPONENTBUILDER_STILL_IN_DEVELOPMENT') . '</h1>';
		$message .= '<p>' . Text::_('COM_COMPONENTBUILDER_ONCE_COMPLETED_THIS_FEATURE_WILL_ALLOW_YOU_TO_PULL_BOTH_DEMO_AND_USERCREATED_SITE_VIEWS_INTO_THIS_JCB_INSTANCE') . '</p>';

		$redirect_url = Route::_('index.php?option=com_componentbuilder&view=site_views', false);
		$this->setRedirect($redirect_url, $message, 'success');

		return true;
	}

	/**
	 * Resets the selected Site Views.
	 *
	 * This function performs several checks and operations:
	 * 1. It verifies the authenticity of the request to prevent request forgery.
	 * 2. It retrieves the IDs of the selected powers from the user input.
	 * 3. It sanitizes the input by converting the IDs to integers.
	 * 4. It checks whether any powers have been selected.
	 * 5. It checks whether the current user has the necessary permissions to reset the selected Site Views.
	 * 6. If the user is authorized and powers are selected, it attempts to reset the selected Site Views.
	 * 7. Depending on the result of the reset operation, it sets the appropriate success or error message.
	 * 8. It redirects the user to a specified URL with the result message and status.
	 *
	 * @return bool True on successful reset, false on failure.
	 */
	public function resetPowers()
	{
		// Check for request forgeries
		Session::checkToken() or die(Text::_('JINVALID_TOKEN'));

		// set default in development message
		$message = '<h1>' . Text::_('COM_COMPONENTBUILDER_STILL_IN_DEVELOPMENT') . '</h1>';
		$message .= '<p>' . Text::_('COM_COMPONENTBUILDER_ONCE_COMPLETED_THIS_FEATURE_WILL_ALLOW_YOU_TO_RESET_BOTH_DEMO_AND_USERCREATED_SITE_VIEWS_WITHIN_THIS_JCB_INSTANCE') . '</p>';

		$redirect_url = Route::_('index.php?option=com_componentbuilder&view=site_views', false);
		$this->setRedirect($redirect_url, $message, 'success');

		return true;
	}

	/**
	 * Pushes the selected Site Views.
	 *
	 * This function performs several checks and operations:
	 * 1. It verifies the authenticity of the request to prevent request forgery.
	 * 2. It retrieves the IDs of the selected powers from the user input.
	 * 3. It sanitizes the input by converting the IDs to integers.
	 * 4. It checks whether any powers have been selected.
	 * 5. It checks whether the current user has the necessary permissions to push the selected Site Views.
	 * 6. If the user is authorized and powers are selected, it attempts to push the selected Site Views.
	 * 7. Depending on the result of the push operation, it sets the appropriate success or error message.
	 * 8. It redirects the user to a specified URL with the result message and status.
	 *
	 * @return bool True on successful push, false on failure.
	 */
	public function pushPowers()
	{
		// Check for request forgeries
		Session::checkToken() or die(Text::_('JINVALID_TOKEN'));

		// set default in development message
		$message = '<h1>' . Text::_('COM_COMPONENTBUILDER_STILL_IN_DEVELOPMENT') . '</h1>';
		$message .= '<p>' . Text::_('COM_COMPONENTBUILDER_ONCE_COMPLETED_THIS_FEATURE_WILL_ALLOW_YOU_TO_PUSH_USERCREATED_SITE_VIEWS_FROM_THIS_JCB_INSTANCE_TO_YOUR_CONFIGURED_REPOSITORIES') . '</p>';

		$redirect_url = Route::_('index.php?option=com_componentbuilder&view=site_views', false);
		$this->setRedirect($redirect_url, $message, 'success');

		return true;
	}
}