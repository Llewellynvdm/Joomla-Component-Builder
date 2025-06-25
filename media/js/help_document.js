/**
 * @package    Joomla.Component.Builder
 *
 * @created    30th April, 2015
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        Joomla Component Builder <https://git.vdm.dev/joomla/Component-Builder>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// Some Global Values
jform_vvvvwcivxr_required = false;
jform_vvvvwcjvxs_required = false;
jform_vvvvwckvxt_required = false;
jform_vvvvwclvxu_required = false;
jform_vvvvwcnvxv_required = false;

// Initial Script
document.addEventListener('DOMContentLoaded', function()
{
	var location_vvvvwci = jQuery("#jform_location input[type='radio']:checked").val();
	vvvvwci(location_vvvvwci);

	var location_vvvvwcj = jQuery("#jform_location input[type='radio']:checked").val();
	vvvvwcj(location_vvvvwcj);

	var type_vvvvwck = jQuery("#jform_type").val();
	vvvvwck(type_vvvvwck);

	var type_vvvvwcl = jQuery("#jform_type").val();
	vvvvwcl(type_vvvvwcl);

	var type_vvvvwcm = jQuery("#jform_type").val();
	vvvvwcm(type_vvvvwcm);

	var target_vvvvwcn = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwcn(target_vvvvwcn);
});

// the vvvvwci function
function vvvvwci(location_vvvvwci)
{
	// set the function logic
	if (location_vvvvwci == 1)
	{
		jQuery('#jform_admin_view').closest('.control-group').show();
		// add required attribute to admin_view field
		if (jform_vvvvwcivxr_required)
		{
			updateFieldRequired('admin_view',0);
			jQuery('#jform_admin_view').prop('required','required');
			jQuery('#jform_admin_view').attr('aria-required',true);
			jQuery('#jform_admin_view').addClass('required');
			jform_vvvvwcivxr_required = false;
		}
	}
	else
	{
		jQuery('#jform_admin_view').closest('.control-group').hide();
		// remove required attribute from admin_view field
		if (!jform_vvvvwcivxr_required)
		{
			updateFieldRequired('admin_view',1);
			jQuery('#jform_admin_view').removeAttr('required');
			jQuery('#jform_admin_view').removeAttr('aria-required');
			jQuery('#jform_admin_view').removeClass('required');
			jform_vvvvwcivxr_required = true;
		}
	}
}

// the vvvvwcj function
function vvvvwcj(location_vvvvwcj)
{
	// set the function logic
	if (location_vvvvwcj == 2)
	{
		jQuery('#jform_site_view').closest('.control-group').show();
		// add required attribute to site_view field
		if (jform_vvvvwcjvxs_required)
		{
			updateFieldRequired('site_view',0);
			jQuery('#jform_site_view').prop('required','required');
			jQuery('#jform_site_view').attr('aria-required',true);
			jQuery('#jform_site_view').addClass('required');
			jform_vvvvwcjvxs_required = false;
		}
	}
	else
	{
		jQuery('#jform_site_view').closest('.control-group').hide();
		// remove required attribute from site_view field
		if (!jform_vvvvwcjvxs_required)
		{
			updateFieldRequired('site_view',1);
			jQuery('#jform_site_view').removeAttr('required');
			jQuery('#jform_site_view').removeAttr('aria-required');
			jQuery('#jform_site_view').removeClass('required');
			jform_vvvvwcjvxs_required = true;
		}
	}
}

// the vvvvwck function
function vvvvwck(type_vvvvwck)
{
	if (isSet(type_vvvvwck) && type_vvvvwck.constructor !== Array)
	{
		var temp_vvvvwck = type_vvvvwck;
		var type_vvvvwck = [];
		type_vvvvwck.push(temp_vvvvwck);
	}
	else if (!isSet(type_vvvvwck))
	{
		var type_vvvvwck = [];
	}
	var type = type_vvvvwck.some(type_vvvvwck_SomeFunc);


	// set this function logic
	if (type)
	{
		jQuery('#jform_url').closest('.control-group').show();
		// add required attribute to url field
		if (jform_vvvvwckvxt_required)
		{
			updateFieldRequired('url',0);
			jQuery('#jform_url').prop('required','required');
			jQuery('#jform_url').attr('aria-required',true);
			jQuery('#jform_url').addClass('required');
			jform_vvvvwckvxt_required = false;
		}
	}
	else
	{
		jQuery('#jform_url').closest('.control-group').hide();
		// remove required attribute from url field
		if (!jform_vvvvwckvxt_required)
		{
			updateFieldRequired('url',1);
			jQuery('#jform_url').removeAttr('required');
			jQuery('#jform_url').removeAttr('aria-required');
			jQuery('#jform_url').removeClass('required');
			jform_vvvvwckvxt_required = true;
		}
	}
}

// the vvvvwck Some function
function type_vvvvwck_SomeFunc(type_vvvvwck)
{
	// set the function logic
	if (type_vvvvwck == 3)
	{
		return true;
	}
	return false;
}

// the vvvvwcl function
function vvvvwcl(type_vvvvwcl)
{
	if (isSet(type_vvvvwcl) && type_vvvvwcl.constructor !== Array)
	{
		var temp_vvvvwcl = type_vvvvwcl;
		var type_vvvvwcl = [];
		type_vvvvwcl.push(temp_vvvvwcl);
	}
	else if (!isSet(type_vvvvwcl))
	{
		var type_vvvvwcl = [];
	}
	var type = type_vvvvwcl.some(type_vvvvwcl_SomeFunc);


	// set this function logic
	if (type)
	{
		jQuery('#jform_article').closest('.control-group').show();
		// add required attribute to article field
		if (jform_vvvvwclvxu_required)
		{
			updateFieldRequired('article',0);
			jQuery('#jform_article').prop('required','required');
			jQuery('#jform_article').attr('aria-required',true);
			jQuery('#jform_article').addClass('required');
			jform_vvvvwclvxu_required = false;
		}
	}
	else
	{
		jQuery('#jform_article').closest('.control-group').hide();
		// remove required attribute from article field
		if (!jform_vvvvwclvxu_required)
		{
			updateFieldRequired('article',1);
			jQuery('#jform_article').removeAttr('required');
			jQuery('#jform_article').removeAttr('aria-required');
			jQuery('#jform_article').removeClass('required');
			jform_vvvvwclvxu_required = true;
		}
	}
}

// the vvvvwcl Some function
function type_vvvvwcl_SomeFunc(type_vvvvwcl)
{
	// set the function logic
	if (type_vvvvwcl == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwcm function
function vvvvwcm(type_vvvvwcm)
{
	if (isSet(type_vvvvwcm) && type_vvvvwcm.constructor !== Array)
	{
		var temp_vvvvwcm = type_vvvvwcm;
		var type_vvvvwcm = [];
		type_vvvvwcm.push(temp_vvvvwcm);
	}
	else if (!isSet(type_vvvvwcm))
	{
		var type_vvvvwcm = [];
	}
	var type = type_vvvvwcm.some(type_vvvvwcm_SomeFunc);


	// set this function logic
	if (type)
	{
		jQuery('#jform_content-lbl').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_content-lbl').closest('.control-group').hide();
	}
}

// the vvvvwcm Some function
function type_vvvvwcm_SomeFunc(type_vvvvwcm)
{
	// set the function logic
	if (type_vvvvwcm == 2)
	{
		return true;
	}
	return false;
}

// the vvvvwcn function
function vvvvwcn(target_vvvvwcn)
{
	// set the function logic
	if (target_vvvvwcn == 1)
	{
		jQuery('#jform_groups').closest('.control-group').show();
		// add required attribute to groups field
		if (jform_vvvvwcnvxv_required)
		{
			updateFieldRequired('groups',0);
			jQuery('#jform_groups').prop('required','required');
			jQuery('#jform_groups').attr('aria-required',true);
			jQuery('#jform_groups').addClass('required');
			jform_vvvvwcnvxv_required = false;
		}
	}
	else
	{
		jQuery('#jform_groups').closest('.control-group').hide();
		// remove required attribute from groups field
		if (!jform_vvvvwcnvxv_required)
		{
			updateFieldRequired('groups',1);
			jQuery('#jform_groups').removeAttr('required');
			jQuery('#jform_groups').removeAttr('aria-required');
			jQuery('#jform_groups').removeClass('required');
			jform_vvvvwcnvxv_required = true;
		}
	}
}

// update fields required
function updateFieldRequired(name, status) {
	// check if not_required exist
	if (document.getElementById('jform_not_required')) {
		var not_required = jQuery('#jform_not_required').val().split(",");

		if(status == 1)
		{
			not_required.push(name);
		}
		else
		{
			not_required = removeFieldFromNotRequired(not_required, name);
		}

		jQuery('#jform_not_required').val(fixNotRequiredArray(not_required).toString());
	}
}

// remove field from not_required
function removeFieldFromNotRequired(array, what) {
	return array.filter(function(element){
		return element !== what;
	});
}

// fix not required array
function fixNotRequiredArray(array) {
	var seen = {};
	return removeEmptyFromNotRequiredArray(array).filter(function(item) {
		return seen.hasOwnProperty(item) ? false : (seen[item] = true);
	});
}

// remove empty from not_required array
function removeEmptyFromNotRequiredArray(array) {
	return array.filter(function (el) {
		// remove ( 一_一) as well - lol
		return (el.length > 0 && '一_一' !== el);
	});
}

// the isSet function
function isSet(val)
{
	if ((val != undefined) && (val != null) && 0 !== val.length){
		return true;
	}
	return false;
}
