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



use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\HTML\HTMLHelper as Html;
use Joomla\CMS\Layout\LayoutHelper;
use VDM\Component\Componentbuilder\Administrator\Helper\ComponentbuilderHelper;

// No direct access to this file
defined('JPATH_BASE') or die;

use Joomla\CMS\Form\Form;

extract($displayData);

/**
 * Layout variables
 * -----------------
 * @var   Form    $form       The form instance for rendering the section.
 * @var   string  $basegroup  The base group name.
 * @var   string  $group      Current group name.
 * @var   array   $buttons    Array of the buttons that will be rendered.
 */

$form = $displayData['form'] ?? null;
$basegroup = (string) ($displayData['basegroup'] ?? '');
$group = (string) ($displayData['group'] ?? '');
$buttons = $displayData['buttons'] ?? [];

if (!$form instanceof Form)
{
	return;
}

$showAdd    = !empty($buttons['add']);
$showRemove = !empty($buttons['remove']);
$showMove   = !empty($buttons['move']);

$fields = $form->getGroup('');

if (empty($fields))
{
	return;
}

?>
<div
	class="subform-repeatable-group card mb-3 position-relative overflow-visible"
	data-base-name="<?php echo $basegroup; ?>"
	data-group="<?php echo $group; ?>"
>
	<?php if ($showMove) : ?>
		<div class="position-absolute top-50 start-0 translate-middle-y z-1" style="margin-left: -1.1rem;">
			<button
				type="button"
				class="group-move btn btn-sm btn-primary shadow-sm px-2 py-3"
				aria-label="<?php echo Text::_('COM_COMPONENTBUILDER_MOVE'); ?>"
				title="<?php echo Text::_('COM_COMPONENTBUILDER_MOVE'); ?>"
			>
				<span class="icon-arrows-alt" aria-hidden="true"></span>
				<span class="visually-hidden"><?php echo Text::_('COM_COMPONENTBUILDER_MOVE'); ?></span>
			</button>
		</div>
	<?php endif; ?>

	<?php if ($showRemove) : ?>
		<div class="position-absolute top-0 end-0 z-1" style="margin-top: 0.5rem; margin-right: 0.5rem;">
			<button
				type="button"
				class="group-remove btn btn-sm btn-danger shadow-sm"
				aria-label="<?php echo Text::_('COM_COMPONENTBUILDER_REMOVE'); ?>"
				title="<?php echo Text::_('COM_COMPONENTBUILDER_REMOVE'); ?>"
			>
				<span class="icon-minus" aria-hidden="true"></span>
				<span class="visually-hidden"><?php echo Text::_('COM_COMPONENTBUILDER_REMOVE'); ?></span>
			</button>
		</div>
	<?php endif; ?>

	<?php if ($showAdd) : ?>
		<div class="position-absolute bottom-0 end-0 z-1" style="margin-bottom: 0.5rem; margin-right: 0.5rem;">
			<button
				type="button"
				class="group-add btn btn-sm btn-success shadow-sm"
				aria-label="<?php echo Text::_('COM_COMPONENTBUILDER_ADD'); ?>"
				title="<?php echo Text::_('COM_COMPONENTBUILDER_ADD'); ?>"
			>
				<span class="icon-plus" aria-hidden="true"></span>
				<span class="visually-hidden"><?php echo Text::_('COM_COMPONENTBUILDER_ADD'); ?></span>
			</button>
		</div>
	<?php endif; ?>

	<div class="card-body">
		<div class="row g-3">
			<?php foreach ($fields as $field) : ?>
				<div class="col-12 col-md-6 col-xl-4 col-xxl-3">
					<div class="h-100">
						<?php echo $field->renderField(); ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
