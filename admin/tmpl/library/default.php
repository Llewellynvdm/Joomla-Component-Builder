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

<?php echo LayoutHelper::render('library.behaviour_above', $this); ?>
<div class="main-card">

	<?php echo Html::_('uitab.startTabSet', 'libraryTab', ['active' => 'behaviour', 'recall' => true]); ?>

	<?php echo Html::_('uitab.addTab', 'libraryTab', 'behaviour', Text::_('COM_COMPONENTBUILDER_LIBRARY_BEHAVIOUR', true)); ?>
		<div class="row">
			<div class="col-md-6">
				<?php echo LayoutHelper::render('library.behaviour_left', $this); ?>
			</div>
			<div class="col-md-6">
				<?php echo LayoutHelper::render('library.behaviour_right', $this); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php echo LayoutHelper::render('library.behaviour_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo Html::_('uitab.endTab'); ?>

	<?php echo Html::_('uitab.addTab', 'libraryTab', 'files_folders_urls', Text::_('COM_COMPONENTBUILDER_LIBRARY_FILES_FOLDERS_URLS', true)); ?>
		<div class="row">
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php echo LayoutHelper::render('library.files_folders_urls_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo Html::_('uitab.endTab'); ?>

	<?php echo Html::_('uitab.addTab', 'libraryTab', 'config', Text::_('COM_COMPONENTBUILDER_LIBRARY_CONFIG', true)); ?>
		<div class="row">
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php echo LayoutHelper::render('library.config_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo Html::_('uitab.endTab'); ?>

	<?php echo Html::_('uitab.addTab', 'libraryTab', 'linked', Text::_('COM_COMPONENTBUILDER_LIBRARY_LINKED', true)); ?>
		<div class="row">
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php echo LayoutHelper::render('library.linked_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo Html::_('uitab.endTab'); ?>

	<?php $this->ignore_fieldsets = array('details','metadata','vdmmetadata','accesscontrol'); ?>
	<?php $this->tab_name = 'libraryTab'; ?>
	<?php echo LayoutHelper::render('joomla.edit.params', $this); ?>

	<?php if ($this->canDo->get('core.edit.created_by') || $this->canDo->get('core.edit.created') || $this->canDo->get('library.edit.state') || ($this->canDo->get('library.delete') && $this->canDo->get('library.edit.state'))) : ?>
	<?php echo Html::_('uitab.addTab', 'libraryTab', 'publishing', Text::_('COM_COMPONENTBUILDER_LIBRARY_PUBLISHING', true)); ?>
		<div class="row">
			<div class="col-md-6">
				<?php echo LayoutHelper::render('library.publishing', $this); ?>
			</div>
			<div class="col-md-6">
				<?php echo LayoutHelper::render('library.publlshing', $this); ?>
			</div>
		</div>
	<?php echo Html::_('uitab.endTab'); ?>
	<?php endif; ?>

	<?php if ($this->canDo->get('core.admin')) : ?>
	<?php echo Html::_('uitab.addTab', 'libraryTab', 'permissions', Text::_('COM_COMPONENTBUILDER_LIBRARY_PERMISSION', true)); ?>
		<div class="row">
			<div class="col-md-12">
				<fieldset id="fieldset-rules" class="options-form">
					<legend><?php echo Text::_('COM_COMPONENTBUILDER_LIBRARY_PERMISSION'); ?></legend>
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
		<input type="hidden" name="task" value="library.edit" />
		<?php echo Html::_('form.token'); ?>
	</div>
</div>

<div class="clearfix"></div>
<?php echo LayoutHelper::render('library.behaviour_under', $this); ?>
</form>
</div>

<script type="text/javascript">

// #jform_how listeners for how_vvvvwah function
jQuery('#jform_how').on('keyup',function()
{
	var how_vvvvwah = jQuery("#jform_how").val();
	var target_vvvvwah = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwah(how_vvvvwah,target_vvvvwah);

});
jQuery('#adminForm').on('change', '#jform_how',function (e)
{
	e.preventDefault();
	var how_vvvvwah = jQuery("#jform_how").val();
	var target_vvvvwah = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwah(how_vvvvwah,target_vvvvwah);

});

// #jform_target listeners for target_vvvvwah function
jQuery('#jform_target').on('keyup',function()
{
	var how_vvvvwah = jQuery("#jform_how").val();
	var target_vvvvwah = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwah(how_vvvvwah,target_vvvvwah);

});
jQuery('#adminForm').on('change', '#jform_target',function (e)
{
	e.preventDefault();
	var how_vvvvwah = jQuery("#jform_how").val();
	var target_vvvvwah = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwah(how_vvvvwah,target_vvvvwah);

});

// #jform_how listeners for how_vvvvwaj function
jQuery('#jform_how').on('keyup',function()
{
	var how_vvvvwaj = jQuery("#jform_how").val();
	var target_vvvvwaj = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwaj(how_vvvvwaj,target_vvvvwaj);

});
jQuery('#adminForm').on('change', '#jform_how',function (e)
{
	e.preventDefault();
	var how_vvvvwaj = jQuery("#jform_how").val();
	var target_vvvvwaj = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwaj(how_vvvvwaj,target_vvvvwaj);

});

// #jform_target listeners for target_vvvvwaj function
jQuery('#jform_target').on('keyup',function()
{
	var how_vvvvwaj = jQuery("#jform_how").val();
	var target_vvvvwaj = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwaj(how_vvvvwaj,target_vvvvwaj);

});
jQuery('#adminForm').on('change', '#jform_target',function (e)
{
	e.preventDefault();
	var how_vvvvwaj = jQuery("#jform_how").val();
	var target_vvvvwaj = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwaj(how_vvvvwaj,target_vvvvwaj);

});

// #jform_how listeners for how_vvvvwal function
jQuery('#jform_how').on('keyup',function()
{
	var how_vvvvwal = jQuery("#jform_how").val();
	var target_vvvvwal = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwal(how_vvvvwal,target_vvvvwal);

});
jQuery('#adminForm').on('change', '#jform_how',function (e)
{
	e.preventDefault();
	var how_vvvvwal = jQuery("#jform_how").val();
	var target_vvvvwal = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwal(how_vvvvwal,target_vvvvwal);

});

// #jform_target listeners for target_vvvvwal function
jQuery('#jform_target').on('keyup',function()
{
	var how_vvvvwal = jQuery("#jform_how").val();
	var target_vvvvwal = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwal(how_vvvvwal,target_vvvvwal);

});
jQuery('#adminForm').on('change', '#jform_target',function (e)
{
	e.preventDefault();
	var how_vvvvwal = jQuery("#jform_how").val();
	var target_vvvvwal = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwal(how_vvvvwal,target_vvvvwal);

});

// #jform_how listeners for how_vvvvwan function
jQuery('#jform_how').on('keyup',function()
{
	var how_vvvvwan = jQuery("#jform_how").val();
	var target_vvvvwan = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwan(how_vvvvwan,target_vvvvwan);

});
jQuery('#adminForm').on('change', '#jform_how',function (e)
{
	e.preventDefault();
	var how_vvvvwan = jQuery("#jform_how").val();
	var target_vvvvwan = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwan(how_vvvvwan,target_vvvvwan);

});

// #jform_target listeners for target_vvvvwan function
jQuery('#jform_target').on('keyup',function()
{
	var how_vvvvwan = jQuery("#jform_how").val();
	var target_vvvvwan = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwan(how_vvvvwan,target_vvvvwan);

});
jQuery('#adminForm').on('change', '#jform_target',function (e)
{
	e.preventDefault();
	var how_vvvvwan = jQuery("#jform_how").val();
	var target_vvvvwan = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwan(how_vvvvwan,target_vvvvwan);

});

// #jform_how listeners for how_vvvvwap function
jQuery('#jform_how').on('keyup',function()
{
	var how_vvvvwap = jQuery("#jform_how").val();
	var target_vvvvwap = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwap(how_vvvvwap,target_vvvvwap);

});
jQuery('#adminForm').on('change', '#jform_how',function (e)
{
	e.preventDefault();
	var how_vvvvwap = jQuery("#jform_how").val();
	var target_vvvvwap = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwap(how_vvvvwap,target_vvvvwap);

});

// #jform_target listeners for target_vvvvwap function
jQuery('#jform_target').on('keyup',function()
{
	var how_vvvvwap = jQuery("#jform_how").val();
	var target_vvvvwap = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwap(how_vvvvwap,target_vvvvwap);

});
jQuery('#adminForm').on('change', '#jform_target',function (e)
{
	e.preventDefault();
	var how_vvvvwap = jQuery("#jform_how").val();
	var target_vvvvwap = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwap(how_vvvvwap,target_vvvvwap);

});

// #jform_target listeners for target_vvvvwaq function
jQuery('#jform_target').on('keyup',function()
{
	var target_vvvvwaq = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwaq = jQuery("#jform_how").val();
	vvvvwaq(target_vvvvwaq,how_vvvvwaq);

});
jQuery('#adminForm').on('change', '#jform_target',function (e)
{
	e.preventDefault();
	var target_vvvvwaq = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwaq = jQuery("#jform_how").val();
	vvvvwaq(target_vvvvwaq,how_vvvvwaq);

});

// #jform_how listeners for how_vvvvwaq function
jQuery('#jform_how').on('keyup',function()
{
	var target_vvvvwaq = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwaq = jQuery("#jform_how").val();
	vvvvwaq(target_vvvvwaq,how_vvvvwaq);

});
jQuery('#adminForm').on('change', '#jform_how',function (e)
{
	e.preventDefault();
	var target_vvvvwaq = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwaq = jQuery("#jform_how").val();
	vvvvwaq(target_vvvvwaq,how_vvvvwaq);

});

// #jform_how listeners for how_vvvvwar function
jQuery('#jform_how').on('keyup',function()
{
	var how_vvvvwar = jQuery("#jform_how").val();
	var target_vvvvwar = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwar(how_vvvvwar,target_vvvvwar);

});
jQuery('#adminForm').on('change', '#jform_how',function (e)
{
	e.preventDefault();
	var how_vvvvwar = jQuery("#jform_how").val();
	var target_vvvvwar = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwar(how_vvvvwar,target_vvvvwar);

});

// #jform_target listeners for target_vvvvwar function
jQuery('#jform_target').on('keyup',function()
{
	var how_vvvvwar = jQuery("#jform_how").val();
	var target_vvvvwar = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwar(how_vvvvwar,target_vvvvwar);

});
jQuery('#adminForm').on('change', '#jform_target',function (e)
{
	e.preventDefault();
	var how_vvvvwar = jQuery("#jform_how").val();
	var target_vvvvwar = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwar(how_vvvvwar,target_vvvvwar);

});

// #jform_target listeners for target_vvvvwas function
jQuery('#jform_target').on('keyup',function()
{
	var target_vvvvwas = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwas = jQuery("#jform_how").val();
	vvvvwas(target_vvvvwas,how_vvvvwas);

});
jQuery('#adminForm').on('change', '#jform_target',function (e)
{
	e.preventDefault();
	var target_vvvvwas = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwas = jQuery("#jform_how").val();
	vvvvwas(target_vvvvwas,how_vvvvwas);

});

// #jform_how listeners for how_vvvvwas function
jQuery('#jform_how').on('keyup',function()
{
	var target_vvvvwas = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwas = jQuery("#jform_how").val();
	vvvvwas(target_vvvvwas,how_vvvvwas);

});
jQuery('#adminForm').on('change', '#jform_how',function (e)
{
	e.preventDefault();
	var target_vvvvwas = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwas = jQuery("#jform_how").val();
	vvvvwas(target_vvvvwas,how_vvvvwas);

});

// #jform_how listeners for how_vvvvwat function
jQuery('#jform_how').on('keyup',function()
{
	var how_vvvvwat = jQuery("#jform_how").val();
	var target_vvvvwat = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwat(how_vvvvwat,target_vvvvwat);

});
jQuery('#adminForm').on('change', '#jform_how',function (e)
{
	e.preventDefault();
	var how_vvvvwat = jQuery("#jform_how").val();
	var target_vvvvwat = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwat(how_vvvvwat,target_vvvvwat);

});

// #jform_target listeners for target_vvvvwat function
jQuery('#jform_target').on('keyup',function()
{
	var how_vvvvwat = jQuery("#jform_how").val();
	var target_vvvvwat = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwat(how_vvvvwat,target_vvvvwat);

});
jQuery('#adminForm').on('change', '#jform_target',function (e)
{
	e.preventDefault();
	var how_vvvvwat = jQuery("#jform_how").val();
	var target_vvvvwat = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwat(how_vvvvwat,target_vvvvwat);

});

// #jform_target listeners for target_vvvvwau function
jQuery('#jform_target').on('keyup',function()
{
	var target_vvvvwau = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwau = jQuery("#jform_how").val();
	vvvvwau(target_vvvvwau,how_vvvvwau);

});
jQuery('#adminForm').on('change', '#jform_target',function (e)
{
	e.preventDefault();
	var target_vvvvwau = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwau = jQuery("#jform_how").val();
	vvvvwau(target_vvvvwau,how_vvvvwau);

});

// #jform_how listeners for how_vvvvwau function
jQuery('#jform_how').on('keyup',function()
{
	var target_vvvvwau = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwau = jQuery("#jform_how").val();
	vvvvwau(target_vvvvwau,how_vvvvwau);

});
jQuery('#adminForm').on('change', '#jform_how',function (e)
{
	e.preventDefault();
	var target_vvvvwau = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwau = jQuery("#jform_how").val();
	vvvvwau(target_vvvvwau,how_vvvvwau);

});

// #jform_target listeners for target_vvvvwav function
jQuery('#jform_target').on('keyup',function()
{
	var target_vvvvwav = jQuery("#jform_target input[type='radio']:checked").val();
	var type_vvvvwav = jQuery("#jform_type input[type='radio']:checked").val();
	vvvvwav(target_vvvvwav,type_vvvvwav);

});
jQuery('#adminForm').on('change', '#jform_target',function (e)
{
	e.preventDefault();
	var target_vvvvwav = jQuery("#jform_target input[type='radio']:checked").val();
	var type_vvvvwav = jQuery("#jform_type input[type='radio']:checked").val();
	vvvvwav(target_vvvvwav,type_vvvvwav);

});

// #jform_type listeners for type_vvvvwav function
jQuery('#jform_type').on('keyup',function()
{
	var target_vvvvwav = jQuery("#jform_target input[type='radio']:checked").val();
	var type_vvvvwav = jQuery("#jform_type input[type='radio']:checked").val();
	vvvvwav(target_vvvvwav,type_vvvvwav);

});
jQuery('#adminForm').on('change', '#jform_type',function (e)
{
	e.preventDefault();
	var target_vvvvwav = jQuery("#jform_target input[type='radio']:checked").val();
	var type_vvvvwav = jQuery("#jform_type input[type='radio']:checked").val();
	vvvvwav(target_vvvvwav,type_vvvvwav);

});

// #jform_target listeners for target_vvvvwax function
jQuery('#jform_target').on('keyup',function()
{
	var target_vvvvwax = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwax(target_vvvvwax);

});
jQuery('#adminForm').on('change', '#jform_target',function (e)
{
	e.preventDefault();
	var target_vvvvwax = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwax(target_vvvvwax);

});

// #jform_target listeners for target_vvvvway function
jQuery('#jform_target').on('keyup',function()
{
	var target_vvvvway = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvway(target_vvvvway);

});
jQuery('#adminForm').on('change', '#jform_target',function (e)
{
	e.preventDefault();
	var target_vvvvway = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvway(target_vvvvway);

});



<?php $numberAddconditions = range(0, count( (array) $this->item->addconditions) + 3, 1);?>

// for the values already set
jQuery(document).ready(function(){
<?php foreach($numberAddconditions as $fieldNr): ?>
	jQuery('#adminForm').on('change', '#jform_addconditions__addconditions<?php echo $fieldNr ?>__option_field',function (e) {
		e.preventDefault();
		getFieldSelectOptions(<?php echo $fieldNr ?>);
	});
<?php endforeach; ?>
	jQuery(document).on('subform-row-add', function(event, row){
		var groupName = jQuery(row).data('group');
		var fieldName = groupName.replace(/([0-9])/g, '');
		var fieldNr = groupName.replace(/([A-z_])/g, '');
		if ('addconditions' === fieldName) {
			jQuery('#adminForm').on('change', '#jform_addconditions__addconditions'+fieldNr+'__option_field',function (e) {
				e.preventDefault();
				getFieldSelectOptions(fieldNr);
			});
		}
	});
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

document.addEventListener("DOMContentLoaded", function() {
	document.querySelectorAll(".loading-dots").forEach(function(loading_dots) {
		let x = 0;
		let intervalId = setInterval(function() {
			if (!loading_dots.classList.contains("loading-dots")) {
				clearInterval(intervalId);
				return;
			}
			let dots = ".".repeat(x % 8);
			loading_dots.textContent = dots;
			x++;
		}, 500);
	});
});
</script>
