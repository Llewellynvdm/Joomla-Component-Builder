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
 * @var   Form    $tmpl             The empty form for the template.
 * @var   array   $forms            Array of Form instances for rendering the rows.
 * @var   bool    $multiple         The multiple state for the form field.
 * @var   int     $min              Count of minimum repeating in multiple mode.
 * @var   int     $max              Count of maximum repeating in multiple mode.
 * @var   string  $name             Name of the input field.
 * @var   string  $fieldname        The field name.
 * @var   string  $fieldId          The field ID.
 * @var   string  $control          The forms control.
 * @var   string  $label            The field label.
 * @var   string  $description      The field description.
 * @var   string  $class            Classes for the container.
 * @var   array   $buttons          Array of the buttons that will be rendered.
 * @var   bool    $groupByFieldset  Whether to group the subform fields by fieldset.
 */

$tmpl            = $displayData['tmpl'] ?? null;
$forms           = $displayData['forms'] ?? [];
$multiple        = (bool) ($displayData['multiple'] ?? false);
$min             = (int) ($displayData['min'] ?? 0);
$max             = (int) ($displayData['max'] ?? 0);
$name            = (string) ($displayData['name'] ?? '');
$fieldname       = (string) ($displayData['fieldname'] ?? '');
$fieldId         = (string) ($displayData['fieldId'] ?? '');
$control         = (string) ($displayData['control'] ?? '');
$label           = (string) ($displayData['label'] ?? '');
$description     = (string) ($displayData['description'] ?? '');
$class           = trim((string) ($displayData['class'] ?? ''));
$buttons         = $displayData['buttons'] ?? [];
$groupByFieldset = (bool) ($displayData['groupByFieldset'] ?? false);

// Kept for backward compatibility with incoming layout data.
unset($control, $groupByFieldset);

if ($multiple)
{
	Factory::getApplication()
		->getDocument()
		->getWebAssetManager()
		->useScript('webcomponent.field-subform');
}

$showAdd          = !empty($buttons['add']);
$showMove         = !empty($buttons['move']);
$wrapperClass     = $class !== '' ? ' ' . $class : '';
$sublayout        = 'sectionjcbjsix';
$describedById    = $fieldId !== '' ? $fieldId . '-desc' : '';
$labelId          = $fieldId !== '' ? $fieldId . '-lbl' : '';
$subformClassName = 'subform-repeatable subform-layout d-block' . $wrapperClass;

?>
<div class="subform-repeatable-wrapper">
	<joomla-field-subform
		class="<?php echo $subformClassName; ?>"
		name="<?php echo $name; ?>"
		button-add=".group-add"
		button-remove=".group-remove"
		button-move="<?php echo $showMove ? '.group-move' : ''; ?>"
		repeatable-element=".subform-repeatable-group"
		minimum="<?php echo $min; ?>"
		maximum="<?php echo $max; ?>"
		<?php echo $fieldId !== '' ? 'id="' . $fieldId . '"' : ''; ?>
	>
		<?php if ($showAdd) : ?>
			<div class="mb-2">
				<button
					type="button"
					class="group-add btn btn-success btn-sm"
					aria-label="<?php echo Text::_('COM_COMPONENTBUILDER_ADD'); ?>"
					title="<?php echo Text::_('COM_COMPONENTBUILDER_ADD'); ?>"
				>
					<span class="icon-plus" aria-hidden="true"></span>
				</button>
			</div>
		<?php endif; ?>

		<?php foreach ($forms as $k => $form) : ?>
			<?php
			if (!$form instanceof Form)
			{
				continue;
			}
			echo LayoutHelper::render($sublayout,['form' => $form, 'basegroup' => $fieldname, 'group' => $fieldname . $k, 'buttons' => $buttons,]);
			?>
		<?php endforeach; ?>

		<?php if ($multiple && $tmpl instanceof Form) : ?>
			<template class="subform-repeatable-template-section">
				<?php
				echo trim(LayoutHelper::render($sublayout, ['form' => $tmpl, 'basegroup' => $fieldname, 'group' => $fieldname . 'X', 'buttons' => $buttons]));
				?>
			</template>
		<?php endif; ?>
	</joomla-field-subform>
</div>
