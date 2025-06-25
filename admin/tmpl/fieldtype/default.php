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
use Joomla\CMS\Router\Route;
use VDM\Component\Componentbuilder\Administrator\Helper\ComponentbuilderHelper;
use Joomla\CMS\Uri\Uri;

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $this->getDocument()->getWebAssetManager();
$wa->useScript('keepalive')->useScript('form.validate');
Html::_('bootstrap.tooltip');

// No direct access to this file
defined('_JEXEC') or die;

$layout  = $this->isModal ? 'modal' : 'edit';
$tmpl    = $this->input->get('tmpl');
$tmpl    = $tmpl ? '&tmpl=' . $tmpl : '';
?>
<script type="text/javascript">
	// waiting spinner
	var outerDiv = document.querySelector('body');
	var loadingDiv = document.createElement('div');
	loadingDiv.id = 'loading';
	loadingDiv.style.cssText = "background: rgba(255, 255, 255, .8) url('components/com_componentbuilder/assets/images/ajax.gif') 50% 35% no-repeat; top: " + (outerDiv.getBoundingClientRect().top + window.pageYOffset) + "px; left: " + (outerDiv.getBoundingClientRect().left + window.pageXOffset) + "px; width: " + outerDiv.offsetWidth + "px; height: " + outerDiv.offsetHeight + "px; position: fixed; opacity: 0.80; -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80); filter: alpha(opacity=80); display: none;";
	outerDiv.appendChild(loadingDiv);
	loadingDiv.style.display = 'block';
	// when page is ready remove and show
	window.addEventListener('load', function() {
		var componentLoader = document.getElementById('componentbuilder_loader');
		if (componentLoader) componentLoader.style.display = 'block';
		loadingDiv.style.display = 'none';
	});
</script>
<div id="componentbuilder_loader" style="display: none;">
<form action="<?php echo Route::_('index.php?option=com_componentbuilder&&layout=' . $layout . $tmpl . '&id='. (int) $this->item->id . $this->referral); ?>" method="post" name="adminForm" id="adminForm" class="form-validate" enctype="multipart/form-data">

<?php echo LayoutHelper::render('fieldtype.details_above', $this); ?>
<div class="main-card">

	<?php echo Html::_('uitab.startTabSet', 'fieldtypeTab', ['active' => 'details', 'recall' => true]); ?>

	<?php echo Html::_('uitab.addTab', 'fieldtypeTab', 'details', Text::_('COM_COMPONENTBUILDER_FIELDTYPE_DETAILS', true)); ?>
		<div class="row">
			<div class="col-md-6">
				<?php echo LayoutHelper::render('fieldtype.details_left', $this); ?>
			</div>
			<div class="col-md-6">
				<?php echo LayoutHelper::render('fieldtype.details_right', $this); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php echo LayoutHelper::render('fieldtype.details_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo Html::_('uitab.endTab'); ?>

	<?php echo Html::_('uitab.addTab', 'fieldtypeTab', 'database_defaults', Text::_('COM_COMPONENTBUILDER_FIELDTYPE_DATABASE_DEFAULTS', true)); ?>
		<div class="row">
			<div class="col-md-6">
				<?php echo LayoutHelper::render('fieldtype.database_defaults_left', $this); ?>
			</div>
			<div class="col-md-6">
				<?php echo LayoutHelper::render('fieldtype.database_defaults_right', $this); ?>
			</div>
		</div>
	<?php echo Html::_('uitab.endTab'); ?>

	<?php $this->ignore_fieldsets = array('details','metadata','vdmmetadata','accesscontrol'); ?>
	<?php $this->tab_name = 'fieldtypeTab'; ?>
	<?php echo LayoutHelper::render('joomla.edit.params', $this); ?>

	<?php if ($this->canDo->get('core.edit.created_by') || $this->canDo->get('core.edit.created') || $this->canDo->get('fieldtype.edit.state') || ($this->canDo->get('fieldtype.delete') && $this->canDo->get('fieldtype.edit.state'))) : ?>
	<?php echo Html::_('uitab.addTab', 'fieldtypeTab', 'publishing', Text::_('COM_COMPONENTBUILDER_FIELDTYPE_PUBLISHING', true)); ?>
		<div class="row">
			<div class="col-md-6">
				<?php echo LayoutHelper::render('fieldtype.publishing', $this); ?>
			</div>
			<div class="col-md-6">
				<?php echo LayoutHelper::render('fieldtype.publlshing', $this); ?>
			</div>
		</div>
	<?php echo Html::_('uitab.endTab'); ?>
	<?php endif; ?>

	<?php if ($this->canDo->get('core.admin')) : ?>
	<?php echo Html::_('uitab.addTab', 'fieldtypeTab', 'permissions', Text::_('COM_COMPONENTBUILDER_FIELDTYPE_PERMISSION', true)); ?>
		<div class="row">
			<div class="col-md-12">
				<fieldset id="fieldset-rules" class="options-form">
					<legend><?php echo Text::_('COM_COMPONENTBUILDER_FIELDTYPE_PERMISSION'); ?></legend>
					<div>
						<?php echo $this->form->getInput('rules'); ?>
					</div>
				</fieldset>
			</div>
		</div>
	<?php echo Html::_('uitab.endTab'); ?>
	<?php endif; ?>

	<?php echo Html::_('uitab.endTabSet'); ?>

	<div>
		<input type="hidden" name="task" value="fieldtype.edit" />
		<?php echo Html::_('form.token'); ?>
	</div>
</div>
</form>
</div>

<script type="text/javascript">

// #jform_datalenght listeners for datalenght_vvvvwbk function
jQuery('#jform_datalenght').on('keyup',function()
{
	var datalenght_vvvvwbk = jQuery("#jform_datalenght").val();
	var has_defaults_vvvvwbk = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbk(datalenght_vvvvwbk,has_defaults_vvvvwbk);

});
jQuery('#adminForm').on('change', '#jform_datalenght',function (e)
{
	e.preventDefault();
	var datalenght_vvvvwbk = jQuery("#jform_datalenght").val();
	var has_defaults_vvvvwbk = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbk(datalenght_vvvvwbk,has_defaults_vvvvwbk);

});

// #jform_has_defaults listeners for has_defaults_vvvvwbk function
jQuery('#jform_has_defaults').on('keyup',function()
{
	var datalenght_vvvvwbk = jQuery("#jform_datalenght").val();
	var has_defaults_vvvvwbk = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbk(datalenght_vvvvwbk,has_defaults_vvvvwbk);

});
jQuery('#adminForm').on('change', '#jform_has_defaults',function (e)
{
	e.preventDefault();
	var datalenght_vvvvwbk = jQuery("#jform_datalenght").val();
	var has_defaults_vvvvwbk = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbk(datalenght_vvvvwbk,has_defaults_vvvvwbk);

});

// #jform_datadefault listeners for datadefault_vvvvwbm function
jQuery('#jform_datadefault').on('keyup',function()
{
	var datadefault_vvvvwbm = jQuery("#jform_datadefault").val();
	var has_defaults_vvvvwbm = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbm(datadefault_vvvvwbm,has_defaults_vvvvwbm);

});
jQuery('#adminForm').on('change', '#jform_datadefault',function (e)
{
	e.preventDefault();
	var datadefault_vvvvwbm = jQuery("#jform_datadefault").val();
	var has_defaults_vvvvwbm = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbm(datadefault_vvvvwbm,has_defaults_vvvvwbm);

});

// #jform_has_defaults listeners for has_defaults_vvvvwbm function
jQuery('#jform_has_defaults').on('keyup',function()
{
	var datadefault_vvvvwbm = jQuery("#jform_datadefault").val();
	var has_defaults_vvvvwbm = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbm(datadefault_vvvvwbm,has_defaults_vvvvwbm);

});
jQuery('#adminForm').on('change', '#jform_has_defaults',function (e)
{
	e.preventDefault();
	var datadefault_vvvvwbm = jQuery("#jform_datadefault").val();
	var has_defaults_vvvvwbm = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbm(datadefault_vvvvwbm,has_defaults_vvvvwbm);

});

// #jform_datatype listeners for datatype_vvvvwbo function
jQuery('#jform_datatype').on('keyup',function()
{
	var datatype_vvvvwbo = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbo = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbo(datatype_vvvvwbo,has_defaults_vvvvwbo);

});
jQuery('#adminForm').on('change', '#jform_datatype',function (e)
{
	e.preventDefault();
	var datatype_vvvvwbo = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbo = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbo(datatype_vvvvwbo,has_defaults_vvvvwbo);

});

// #jform_has_defaults listeners for has_defaults_vvvvwbo function
jQuery('#jform_has_defaults').on('keyup',function()
{
	var datatype_vvvvwbo = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbo = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbo(datatype_vvvvwbo,has_defaults_vvvvwbo);

});
jQuery('#adminForm').on('change', '#jform_has_defaults',function (e)
{
	e.preventDefault();
	var datatype_vvvvwbo = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbo = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbo(datatype_vvvvwbo,has_defaults_vvvvwbo);

});

// #jform_datatype listeners for datatype_vvvvwbq function
jQuery('#jform_datatype').on('keyup',function()
{
	var datatype_vvvvwbq = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbq = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbq(datatype_vvvvwbq,has_defaults_vvvvwbq);

});
jQuery('#adminForm').on('change', '#jform_datatype',function (e)
{
	e.preventDefault();
	var datatype_vvvvwbq = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbq = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbq(datatype_vvvvwbq,has_defaults_vvvvwbq);

});

// #jform_has_defaults listeners for has_defaults_vvvvwbq function
jQuery('#jform_has_defaults').on('keyup',function()
{
	var datatype_vvvvwbq = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbq = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbq(datatype_vvvvwbq,has_defaults_vvvvwbq);

});
jQuery('#adminForm').on('change', '#jform_has_defaults',function (e)
{
	e.preventDefault();
	var datatype_vvvvwbq = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbq = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbq(datatype_vvvvwbq,has_defaults_vvvvwbq);

});

// #jform_has_defaults listeners for has_defaults_vvvvwbr function
jQuery('#jform_has_defaults').on('keyup',function()
{
	var has_defaults_vvvvwbr = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	var datatype_vvvvwbr = jQuery("#jform_datatype").val();
	vvvvwbr(has_defaults_vvvvwbr,datatype_vvvvwbr);

});
jQuery('#adminForm').on('change', '#jform_has_defaults',function (e)
{
	e.preventDefault();
	var has_defaults_vvvvwbr = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	var datatype_vvvvwbr = jQuery("#jform_datatype").val();
	vvvvwbr(has_defaults_vvvvwbr,datatype_vvvvwbr);

});

// #jform_datatype listeners for datatype_vvvvwbr function
jQuery('#jform_datatype').on('keyup',function()
{
	var has_defaults_vvvvwbr = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	var datatype_vvvvwbr = jQuery("#jform_datatype").val();
	vvvvwbr(has_defaults_vvvvwbr,datatype_vvvvwbr);

});
jQuery('#adminForm').on('change', '#jform_datatype',function (e)
{
	e.preventDefault();
	var has_defaults_vvvvwbr = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	var datatype_vvvvwbr = jQuery("#jform_datatype").val();
	vvvvwbr(has_defaults_vvvvwbr,datatype_vvvvwbr);

});

// #jform_datatype listeners for datatype_vvvvwbs function
jQuery('#jform_datatype').on('keyup',function()
{
	var datatype_vvvvwbs = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbs = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbs(datatype_vvvvwbs,has_defaults_vvvvwbs);

});
jQuery('#adminForm').on('change', '#jform_datatype',function (e)
{
	e.preventDefault();
	var datatype_vvvvwbs = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbs = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbs(datatype_vvvvwbs,has_defaults_vvvvwbs);

});

// #jform_has_defaults listeners for has_defaults_vvvvwbs function
jQuery('#jform_has_defaults').on('keyup',function()
{
	var datatype_vvvvwbs = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbs = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbs(datatype_vvvvwbs,has_defaults_vvvvwbs);

});
jQuery('#adminForm').on('change', '#jform_has_defaults',function (e)
{
	e.preventDefault();
	var datatype_vvvvwbs = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbs = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbs(datatype_vvvvwbs,has_defaults_vvvvwbs);

});

// #jform_store listeners for store_vvvvwbu function
jQuery('#jform_store').on('keyup',function()
{
	var store_vvvvwbu = jQuery("#jform_store").val();
	var datatype_vvvvwbu = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbu = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbu(store_vvvvwbu,datatype_vvvvwbu,has_defaults_vvvvwbu);

});
jQuery('#adminForm').on('change', '#jform_store',function (e)
{
	e.preventDefault();
	var store_vvvvwbu = jQuery("#jform_store").val();
	var datatype_vvvvwbu = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbu = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbu(store_vvvvwbu,datatype_vvvvwbu,has_defaults_vvvvwbu);

});

// #jform_datatype listeners for datatype_vvvvwbu function
jQuery('#jform_datatype').on('keyup',function()
{
	var store_vvvvwbu = jQuery("#jform_store").val();
	var datatype_vvvvwbu = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbu = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbu(store_vvvvwbu,datatype_vvvvwbu,has_defaults_vvvvwbu);

});
jQuery('#adminForm').on('change', '#jform_datatype',function (e)
{
	e.preventDefault();
	var store_vvvvwbu = jQuery("#jform_store").val();
	var datatype_vvvvwbu = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbu = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbu(store_vvvvwbu,datatype_vvvvwbu,has_defaults_vvvvwbu);

});

// #jform_has_defaults listeners for has_defaults_vvvvwbu function
jQuery('#jform_has_defaults').on('keyup',function()
{
	var store_vvvvwbu = jQuery("#jform_store").val();
	var datatype_vvvvwbu = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbu = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbu(store_vvvvwbu,datatype_vvvvwbu,has_defaults_vvvvwbu);

});
jQuery('#adminForm').on('change', '#jform_has_defaults',function (e)
{
	e.preventDefault();
	var store_vvvvwbu = jQuery("#jform_store").val();
	var datatype_vvvvwbu = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbu = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbu(store_vvvvwbu,datatype_vvvvwbu,has_defaults_vvvvwbu);

});

// #jform_datatype listeners for datatype_vvvvwbv function
jQuery('#jform_datatype').on('keyup',function()
{
	var datatype_vvvvwbv = jQuery("#jform_datatype").val();
	var store_vvvvwbv = jQuery("#jform_store").val();
	var has_defaults_vvvvwbv = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbv(datatype_vvvvwbv,store_vvvvwbv,has_defaults_vvvvwbv);

});
jQuery('#adminForm').on('change', '#jform_datatype',function (e)
{
	e.preventDefault();
	var datatype_vvvvwbv = jQuery("#jform_datatype").val();
	var store_vvvvwbv = jQuery("#jform_store").val();
	var has_defaults_vvvvwbv = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbv(datatype_vvvvwbv,store_vvvvwbv,has_defaults_vvvvwbv);

});

// #jform_store listeners for store_vvvvwbv function
jQuery('#jform_store').on('keyup',function()
{
	var datatype_vvvvwbv = jQuery("#jform_datatype").val();
	var store_vvvvwbv = jQuery("#jform_store").val();
	var has_defaults_vvvvwbv = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbv(datatype_vvvvwbv,store_vvvvwbv,has_defaults_vvvvwbv);

});
jQuery('#adminForm').on('change', '#jform_store',function (e)
{
	e.preventDefault();
	var datatype_vvvvwbv = jQuery("#jform_datatype").val();
	var store_vvvvwbv = jQuery("#jform_store").val();
	var has_defaults_vvvvwbv = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbv(datatype_vvvvwbv,store_vvvvwbv,has_defaults_vvvvwbv);

});

// #jform_has_defaults listeners for has_defaults_vvvvwbv function
jQuery('#jform_has_defaults').on('keyup',function()
{
	var datatype_vvvvwbv = jQuery("#jform_datatype").val();
	var store_vvvvwbv = jQuery("#jform_store").val();
	var has_defaults_vvvvwbv = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbv(datatype_vvvvwbv,store_vvvvwbv,has_defaults_vvvvwbv);

});
jQuery('#adminForm').on('change', '#jform_has_defaults',function (e)
{
	e.preventDefault();
	var datatype_vvvvwbv = jQuery("#jform_datatype").val();
	var store_vvvvwbv = jQuery("#jform_store").val();
	var has_defaults_vvvvwbv = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbv(datatype_vvvvwbv,store_vvvvwbv,has_defaults_vvvvwbv);

});

// #jform_has_defaults listeners for has_defaults_vvvvwbw function
jQuery('#jform_has_defaults').on('keyup',function()
{
	var has_defaults_vvvvwbw = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	var store_vvvvwbw = jQuery("#jform_store").val();
	var datatype_vvvvwbw = jQuery("#jform_datatype").val();
	vvvvwbw(has_defaults_vvvvwbw,store_vvvvwbw,datatype_vvvvwbw);

});
jQuery('#adminForm').on('change', '#jform_has_defaults',function (e)
{
	e.preventDefault();
	var has_defaults_vvvvwbw = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	var store_vvvvwbw = jQuery("#jform_store").val();
	var datatype_vvvvwbw = jQuery("#jform_datatype").val();
	vvvvwbw(has_defaults_vvvvwbw,store_vvvvwbw,datatype_vvvvwbw);

});

// #jform_store listeners for store_vvvvwbw function
jQuery('#jform_store').on('keyup',function()
{
	var has_defaults_vvvvwbw = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	var store_vvvvwbw = jQuery("#jform_store").val();
	var datatype_vvvvwbw = jQuery("#jform_datatype").val();
	vvvvwbw(has_defaults_vvvvwbw,store_vvvvwbw,datatype_vvvvwbw);

});
jQuery('#adminForm').on('change', '#jform_store',function (e)
{
	e.preventDefault();
	var has_defaults_vvvvwbw = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	var store_vvvvwbw = jQuery("#jform_store").val();
	var datatype_vvvvwbw = jQuery("#jform_datatype").val();
	vvvvwbw(has_defaults_vvvvwbw,store_vvvvwbw,datatype_vvvvwbw);

});

// #jform_datatype listeners for datatype_vvvvwbw function
jQuery('#jform_datatype').on('keyup',function()
{
	var has_defaults_vvvvwbw = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	var store_vvvvwbw = jQuery("#jform_store").val();
	var datatype_vvvvwbw = jQuery("#jform_datatype").val();
	vvvvwbw(has_defaults_vvvvwbw,store_vvvvwbw,datatype_vvvvwbw);

});
jQuery('#adminForm').on('change', '#jform_datatype',function (e)
{
	e.preventDefault();
	var has_defaults_vvvvwbw = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	var store_vvvvwbw = jQuery("#jform_store").val();
	var datatype_vvvvwbw = jQuery("#jform_datatype").val();
	vvvvwbw(has_defaults_vvvvwbw,store_vvvvwbw,datatype_vvvvwbw);

});

// #jform_has_defaults listeners for has_defaults_vvvvwbx function
jQuery('#jform_has_defaults').on('keyup',function()
{
	var has_defaults_vvvvwbx = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbx(has_defaults_vvvvwbx);

});
jQuery('#adminForm').on('change', '#jform_has_defaults',function (e)
{
	e.preventDefault();
	var has_defaults_vvvvwbx = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbx(has_defaults_vvvvwbx);

});




<?php
	$app = Factory::getApplication();
?>
function JRouter(link) {
<?php
	if ($app->isClient('site'))
	{
		echo 'var url = "'. Uri::root() . '";';
	}
	else
	{
		echo 'var url = "";';
	}
?>
	return url+link;
}
</script>
