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
use Joomla\CMS\Form\FormFactoryInterface;
use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\MVC\Factory\MVCFactoryInterface;
use Joomla\Input\Input;
use Joomla\CMS\Versioning\VersionableControllerTrait;
use Joomla\CMS\MVC\Controller\FormController;
use Joomla\CMS\MVC\Model\BaseDatabaseModel;
use Joomla\Utilities\ArrayHelper;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Session\Session;
use Joomla\CMS\Uri\Uri;
use VDM\Component\Componentbuilder\Administrator\Helper\ComponentbuilderHelper;
use VDM\Joomla\Utilities\GuidHelper;
use VDM\Joomla\Data\Factory as DataFactory;

// No direct access to this file
\defined('_JEXEC') or die;

/**
 * Admin_view Form Controller
 *
 * @since  1.6
 */
class Admin_viewController extends FormController
{
	use VersionableControllerTrait;

	/**
	 * The prefix to use with controller messages.
	 *
	 * @var    string
	 * @since  1.6
	 */
	protected $text_prefix = 'COM_COMPONENTBUILDER_ADMIN_VIEW';

	/**
	 * Current or most recently performed task.
	 *
	 * @var    string
	 * @since  12.2
	 * @note   Replaces _task.
	 */
	protected $task;

	/**
	 * The URL view list variable.
	 *
	 * @var    string
	 * @since  1.6
	 */
	protected $view_list = 'admin_views';

	/**
	 * Referral value
	 *
	 * @var    string
	 * @since  5.0
	 */
	protected string $ref;

	/**
	 * Referral ID value
	 *
	 * @var    int
	 * @since  5.0
	 */
	protected int $refid;


	/**
	 * Method to edit an existing record.
	 *
	 * @param   string  $key     The name of the primary key of the URL variable.
	 * @param   string  $urlVar  The name of the URL variable if different from the primary key
	 *                           (sometimes required to avoid router collisions).
	 *
	 * @return  boolean  True if access level check and checkout passes, false otherwise.
	 *
	 * @since   1.6
	 */
	public function edit($key = null, $urlVar = null)
	{
		// for modal title key selection (unique key to do mapping)
		$titleKey = $this->input->get('titleKey', 'id', 'word');
		$guid = null;
		$value = null;

 		// Determine the name of the primary key for the data.
		if (empty($key))
		{
			$model = $this->getModel();
			$table = $model->getTable();
			$key = $table->getKeyName();
		}

		if ($titleKey === 'guid')
		{
			$guid = $this->input->get('guid', null, 'string');
		}

		if ($guid !== null && GuidHelper::valid($guid))
		{
			$value = GuidHelper::item($guid, 'admin_view', 'a.' . $key, 'componentbuilder');
		}

		if ($value !== null)
		{
			$this->input->set($key, $value);
		}

		return parent::edit($key, $urlVar);
	}

	/**
	 * Resets the specified Admin View.
	 *
	 * This function performs several checks and operations:
	 * 1. It verifies the authenticity of the request to prevent request forgery.
	 * 2. It retrieves the item data posted by the user.
	 * 3. It checks whether the current user has the necessary permissions to reset the Admin View.
	 * 4. It validates the presence of the necessary item identifiers (ID and GUID).
	 * 5. If the user is authorized and the identifiers are valid, it attempts to reset the specified Admin View.
	 * 6. Depending on the result of the reset operation, it sets the appropriate success or error message.
	 * 7. It redirects the user to a specified URL with the result message and status.
	 *
	 * @return bool True on successful reset, false on failure.
	 */
	public function resetPowers()
	{
		// Check for request forgeries
		Session::checkToken() or die(Text::_('JINVALID_TOKEN'));

		// get Item posted
		$item = $this->input->post->get('jform', array(), 'array');

		// load the ID
		$id = $item['id'] ?? null;

		// set default in development message
		$message = '<h1>' . Text::_('COM_COMPONENTBUILDER_STILL_IN_DEVELOPMENT') . '</h1>';
		$message .= '<p>' . Text::_('COM_COMPONENTBUILDER_ONCE_COMPLETED_THIS_FEATURE_WILL_ALLOW_YOU_TO_RESET_BOTH_DEMO_AND_USERCREATED_ADMIN_VIEW_WITHIN_THIS_JCB_INSTANCE') . '</p>';

		// set redirect
		$redirect_url = Route::_(
			'index.php?option=com_componentbuilder&view=admin_view'
			. $this->getRedirectToItemAppend($id), false
		);
		$this->setRedirect($redirect_url, $message, 'success');

		return true;
	}

	 /**
	 * Pushes the specified Admin View.
	 *
	 * This function performs several checks and operations:
	 * 1. It verifies the authenticity of the request to prevent request forgery.
	 * 2. It retrieves the item data posted by the user.
	 * 3. It checks whether the current user has the necessary permissions to push the Admin View.
	 * 4. It validates the presence of the necessary item identifiers (ID and GUID).
	 * 5. If the user is authorized and the identifiers are valid, it attempts to push the specified Admin View.
	 * 6. Depending on the result of the push operation, it sets the appropriate success or error message.
	 * 7. It redirects the user to a specified URL with the result message and status.
	 *
	 * @return bool True on successful push, false on failure.
	 */
	public function pushPowers()
	{
		// Check for request forgeries
		Session::checkToken() or die(Text::_('JINVALID_TOKEN'));

		// get Item posted
		$item = $this->input->post->get('jform', array(), 'array');

		// load the ID
		$id = $item['id'] ?? null;

		// set default in development message
		$message = '<h1>' . Text::_('COM_COMPONENTBUILDER_STILL_IN_DEVELOPMENT') . '</h1>';
		$message .= '<p>' . Text::_('COM_COMPONENTBUILDER_ONCE_COMPLETED_THIS_FEATURE_WILL_ALLOW_YOU_TO_PUSH_USERCREATED_ADMIN_VIEW_FROM_THIS_JCB_INSTANCE_TO_YOUR_CONFIGURED_REPOSITORIES') . '</p>';

		// set redirect
		$redirect_url = Route::_(
			'index.php?option=com_componentbuilder&view=admin_view'
			. $this->getRedirectToItemAppend($id), false
		);
		$this->setRedirect($redirect_url, $message, 'success');

		return true;
	}

	/**
	 * Method override to check if you can add a new record.
	 *
	 * @param   array  $data  An array of input data.
	 *
	 * @return  boolean
	 *
	 * @since   1.6
	 */
	protected function allowAdd($data = [])
	{
		// Get user object.
		$user = $this->app->getIdentity();
		// Access check.
		$access = $user->authorise('admin_view.access', 'com_componentbuilder');
		if (!$access)
		{
			return false;
		}

		// In the absence of better information, revert to the component permissions.
		return $user->authorise('admin_view.create', $this->option);
	}

	/**
	 * Method override to check if you can edit an existing record.
	 *
	 * @param   array   $data  An array of input data.
	 * @param   string  $key   The name of the key for the primary key.
	 *
	 * @return  boolean
	 *
	 * @since   1.6
	 */
	protected function allowEdit($data = [], $key = 'id')
	{
		// get user object.
		$user = $this->app->getIdentity();
		// get record id.
		$recordId = (int) isset($data[$key]) ? $data[$key] : 0;


		// Access check.
		$access = ($user->authorise('admin_view.access', 'com_componentbuilder.admin_view.' . (int) $recordId) && $user->authorise('admin_view.access', 'com_componentbuilder'));
		if (!$access)
		{
			return false;
		}

		if ($recordId)
		{
			// The record has been set. Check the record permissions.
			$permission = $user->authorise('admin_view.edit', 'com_componentbuilder.admin_view.' . (int) $recordId);
			if (!$permission)
			{
				if ($user->authorise('admin_view.edit.own', 'com_componentbuilder.admin_view.' . $recordId))
				{
					// Now test the owner is the user.
					$ownerId = (int) isset($data['created_by']) ? $data['created_by'] : 0;
					if (empty($ownerId))
					{
						// Need to do a lookup from the model.
						$record = $this->getModel()->getItem($recordId);

						if (empty($record))
						{
							return false;
						}
						$ownerId = $record->created_by;
					}

					// If the owner matches 'me' then allow.
					if ($ownerId == $user->id)
					{
						if ($user->authorise('admin_view.edit.own', 'com_componentbuilder'))
						{
							return true;
						}
					}
				}
				return false;
			}
		}
		// Since there is no permission, revert to the component permissions.
		return $user->authorise('admin_view.edit', $this->option);
	}

	/**
	 * Gets the URL arguments to append to an item redirect.
	 *
	 * @param   integer  $recordId  The primary key id for the item.
	 * @param   string   $urlVar    The name of the URL variable for the id.
	 *
	 * @return  string  The arguments to append to the redirect URL.
	 *
	 * @since   1.6
	 */
	protected function getRedirectToItemAppend($recordId = null, $urlVar = 'id')
	{
		// get int-defaults (to int new items with default values dynamically)
		$init_defaults = $this->input->get('init_defaults', null, 'STRING');

		// get the referral options (old method use init_defaults or return instead see parent)
		$ref = $this->input->get('ref', 0, 'string');
		$refid = $this->input->get('refid', 0, 'int');

		// get redirect info.
		$append = parent::getRedirectToItemAppend($recordId, $urlVar);

		// set int-defaults
		if (!empty($init_defaults))
		{
			$append = '&init_defaults='. (string) $init_defaults . $append;
		}

		// set the referral options
		if ($refid && $ref)
		{
			$append = '&ref=' . (string) $ref . '&refid='. (int) $refid . $append;
		}
		elseif ($ref)
		{
			$append = '&ref='. (string) $ref . $append;
		}

		return $append;
	}

	/**
	 * Method to run batch operations.
	 *
	 * @param   object  $model  The model.
	 *
	 * @return  boolean   True if successful, false otherwise and internal error is set.
	 *
	 * @since   2.5
	 */
	public function batch($model = null)
	{
		Session::checkToken() or exit(Text::_('JINVALID_TOKEN'));

		// Set the model
		$model = $this->getModel('Admin_view', '', []);

		// Preset the redirect
		$this->setRedirect(Route::_('index.php?option=com_componentbuilder&view=admin_views' . $this->getRedirectToListAppend(), false));

		return parent::batch($model);
	}

	/**
	 * Method to cancel an edit.
	 *
	 * @param   string  $key  The name of the primary key of the URL variable.
	 *
	 * @return  boolean  True if access level checks pass, false otherwise.
	 *
	 * @since   12.2
	 */
	public function cancel($key = null)
	{
		// get the referral options
		$this->ref = $this->input->get('ref', 0, 'word');
		$this->refid = $this->input->get('refid', 0, 'int');

		// Check if there is a return value
		$return = $this->input->get('return', null, 'base64');

		$cancel = parent::cancel($key);

		if (!is_null($return) && Uri::isInternal(base64_decode($return)))
		{
			$redirect = base64_decode($return);

			// Redirect to the return value.
			$this->setRedirect(
				Route::_(
					$redirect, false
				)
			);
		}
		elseif ($this->refid && $this->ref)
		{
			$redirect = '&view=' . (string)$this->ref . '&layout=edit&id=' . (int)$this->refid;

			// Redirect to the item screen.
			$this->setRedirect(
				Route::_(
					'index.php?option=' . $this->option . $redirect, false
				)
			);
		}
		elseif ($this->ref)
		{
			$redirect = '&view='.(string)$this->ref;

			// Redirect to the list screen.
			$this->setRedirect(
				Route::_(
					'index.php?option=' . $this->option . $redirect, false
				)
			);
		}
		// When editing in modal then redirect to modalreturn layout
		elseif ($cancel && $this->input->get('layout') === 'modal')
		{
			$id = $this->input->get('id');
			$return = 'index.php?option=' . $this->option . '&view=' . $this->view_item . $this->getRedirectToItemAppend($id)
				. '&layout=modalreturn&from-task=cancel';

			$this->setRedirect(Route::_($return, false));
		}
		return $cancel;
	}

	/**
	 * Method to save a record.
	 *
	 * @param   string  $key     The name of the primary key of the URL variable.
	 * @param   string  $urlVar  The name of the URL variable if different from the primary key (sometimes required to avoid router collisions).
	 *
	 * @return  boolean  True if successful, false otherwise.
	 *
	 * @since   12.2
	 */
	public function save($key = null, $urlVar = null)
	{
		// get the referral options
		$this->ref = $this->input->get('ref', 0, 'word');
		$this->refid = $this->input->get('refid', 0, 'int');

		// Check if there is a return value
		$return = $this->input->get('return', null, 'base64');
		$canReturn = (!is_null($return) && Uri::isInternal(base64_decode($return)));

		if ($this->ref || $this->refid || $canReturn)
		{
			// to make sure the item is checkedin on redirect
			$this->task = 'save';
		}

		$saved = parent::save($key, $urlVar);

		// This is not needed since parent save already does this
		// Due to the ref and refid implementation we need to add this
		if ($canReturn)
		{
			$redirect = base64_decode($return);

			// Redirect to the return value.
			$this->setRedirect(
				Route::_(
					$redirect, false
				)
			);
		}
		elseif ($this->refid && $this->ref)
		{
			$redirect = '&view=' . (string) $this->ref . '&layout=edit&id=' . (int) $this->refid;

			// Redirect to the item screen.
			$this->setRedirect(
				Route::_(
					'index.php?option=' . $this->option . $redirect, false
				)
			);
		}
		elseif ($this->ref)
		{
			$redirect = '&view=' . (string) $this->ref;

			// Redirect to the list screen.
			$this->setRedirect(
				Route::_(
					'index.php?option=' . $this->option . $redirect, false
				)
			);
		}
		return $saved;
	}

	/**
	 * Function that allows child controller access to model data
	 * after the data has been saved.
	 *
	 * @param   BaseDatabaseModel  $model     The data model object.
	 * @param   array              $validData  The validated data.
	 *
	 * @return  void
	 *
	 * @since   11.1
	 */
	protected function postSaveHook(BaseDatabaseModel $model, $validData = [])
	{
		if ($this->input->get('layout') === 'modal' && $this->task === 'save')
		{
			// When editing in modal then redirect to modalreturn layout
			$id = $model->getState('admin_view.id', '');
			$return = 'index.php?option=' . $this->option . '&view=' . $this->view_item . $this->getRedirectToItemAppend($id)
				. '&layout=modalreturn&from-task=save';

			$this->setRedirect(Route::_($return, false));
		}
		// linked tables to update
		$_tables_array = [
			'admin_fields' => 'admin_view',
			'admin_fields_conditions' => 'admin_view',
			'admin_fields_relations' => 'admin_view',
			'admin_custom_tabs' => 'admin_view'
		];

		// get the state object (Joomla\CMS\Object\CMSObject)
		$state = $model->get('state');

		// if we save2copy we need to also copy linked tables found!
		if (!empty($_tables_array) && $state->task === 'save2copy' && $state->{'admin_view.new'})
		{
			// get new GUID
			$new_guid = DataFactory::_('Load')->value(
				['a.guid' => 'guid'], // select
				['a' => 'admin_view'], // tables
				['a.id' => $state->{'admin_view.id'}] // where
			);

			// get old GUID
			$old_guid = $validData['guid'] ?? $this->input->get('guid', null, 'STRING') ?? DataFactory::_('Load')->value(
				['a.guid' => 'guid'], // select
				['a' => 'admin_view'], // tables
				['a.id' => $validData['id'] ?? $this->input->get('id', 0, 'INT')] // where
			);

			// we only continue if we have valid GUIDs
			if (!GuidHelper::valid($new_guid) || !GuidHelper::valid($old_guid))
			{
				return;
			}

			foreach($_tables_array as $_update_table => $_field_name)
			{
				// get the linked ID
				$_item_id = DataFactory::_('Load')->value(
					['a.id' => 'id'], // select
					['a' => $_update_table], // tables
					['a.' . $_field_name => $old_guid] // where
				);

				if ($_item_id !== null)
				{
					// copy fields to new admin view
					ComponentbuilderHelper::copyItem(/*id->*/ $_item_id, /*table->*/ $_update_table, /*change->*/ [$_field_name => $new_guid]);
				}
			}
		}

		return;
	}
}
