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
jform_vvvvwbyvxi_required = false;
jform_vvvvwbyvxj_required = false;
jform_vvvvwbyvxk_required = false;
jform_vvvvwbyvxl_required = false;
jform_vvvvwbyvxm_required = false;
jform_vvvvwbzvxn_required = false;
jform_vvvvwcavxo_required = false;
jform_vvvvwccvxp_required = false;
jform_vvvvwcevxq_required = false;

// Initial Script
document.addEventListener('DOMContentLoaded', function()
{
	var protocol_vvvvwby = jQuery("#jform_protocol").val();
	vvvvwby(protocol_vvvvwby);

	var protocol_vvvvwbz = jQuery("#jform_protocol").val();
	vvvvwbz(protocol_vvvvwbz);

	var protocol_vvvvwca = jQuery("#jform_protocol").val();
	var authentication_vvvvwca = jQuery("#jform_authentication").val();
	vvvvwca(protocol_vvvvwca,authentication_vvvvwca);

	var protocol_vvvvwcc = jQuery("#jform_protocol").val();
	var authentication_vvvvwcc = jQuery("#jform_authentication").val();
	vvvvwcc(protocol_vvvvwcc,authentication_vvvvwcc);

	var protocol_vvvvwce = jQuery("#jform_protocol").val();
	var authentication_vvvvwce = jQuery("#jform_authentication").val();
	vvvvwce(protocol_vvvvwce,authentication_vvvvwce);

	var protocol_vvvvwcg = jQuery("#jform_protocol").val();
	var authentication_vvvvwcg = jQuery("#jform_authentication").val();
	vvvvwcg(protocol_vvvvwcg,authentication_vvvvwcg);
});

// the vvvvwby function
function vvvvwby(protocol_vvvvwby)
{
	if (isSet(protocol_vvvvwby) && protocol_vvvvwby.constructor !== Array)
	{
		var temp_vvvvwby = protocol_vvvvwby;
		var protocol_vvvvwby = [];
		protocol_vvvvwby.push(temp_vvvvwby);
	}
	else if (!isSet(protocol_vvvvwby))
	{
		var protocol_vvvvwby = [];
	}
	var protocol = protocol_vvvvwby.some(protocol_vvvvwby_SomeFunc);


	// set this function logic
	if (protocol)
	{
		jQuery('#jform_authentication').closest('.control-group').show();
		// add required attribute to authentication field
		if (jform_vvvvwbyvxi_required)
		{
			updateFieldRequired('authentication',0);
			jQuery('#jform_authentication').prop('required','required');
			jQuery('#jform_authentication').attr('aria-required',true);
			jQuery('#jform_authentication').addClass('required');
			jform_vvvvwbyvxi_required = false;
		}
		jQuery('#jform_host').closest('.control-group').show();
		// add required attribute to host field
		if (jform_vvvvwbyvxj_required)
		{
			updateFieldRequired('host',0);
			jQuery('#jform_host').prop('required','required');
			jQuery('#jform_host').attr('aria-required',true);
			jQuery('#jform_host').addClass('required');
			jform_vvvvwbyvxj_required = false;
		}
		jQuery('#jform_port').closest('.control-group').show();
		// add required attribute to port field
		if (jform_vvvvwbyvxk_required)
		{
			updateFieldRequired('port',0);
			jQuery('#jform_port').prop('required','required');
			jQuery('#jform_port').attr('aria-required',true);
			jQuery('#jform_port').addClass('required');
			jform_vvvvwbyvxk_required = false;
		}
		jQuery('#jform_path').closest('.control-group').show();
		// add required attribute to path field
		if (jform_vvvvwbyvxl_required)
		{
			updateFieldRequired('path',0);
			jQuery('#jform_path').prop('required','required');
			jQuery('#jform_path').attr('aria-required',true);
			jQuery('#jform_path').addClass('required');
			jform_vvvvwbyvxl_required = false;
		}
		jQuery('.note_ssh_security').closest('.control-group').show();
		jQuery('#jform_username').closest('.control-group').show();
		// add required attribute to username field
		if (jform_vvvvwbyvxm_required)
		{
			updateFieldRequired('username',0);
			jQuery('#jform_username').prop('required','required');
			jQuery('#jform_username').attr('aria-required',true);
			jQuery('#jform_username').addClass('required');
			jform_vvvvwbyvxm_required = false;
		}
	}
	else
	{
		jQuery('#jform_authentication').closest('.control-group').hide();
		// remove required attribute from authentication field
		if (!jform_vvvvwbyvxi_required)
		{
			updateFieldRequired('authentication',1);
			jQuery('#jform_authentication').removeAttr('required');
			jQuery('#jform_authentication').removeAttr('aria-required');
			jQuery('#jform_authentication').removeClass('required');
			jform_vvvvwbyvxi_required = true;
		}
		jQuery('#jform_host').closest('.control-group').hide();
		// remove required attribute from host field
		if (!jform_vvvvwbyvxj_required)
		{
			updateFieldRequired('host',1);
			jQuery('#jform_host').removeAttr('required');
			jQuery('#jform_host').removeAttr('aria-required');
			jQuery('#jform_host').removeClass('required');
			jform_vvvvwbyvxj_required = true;
		}
		jQuery('#jform_port').closest('.control-group').hide();
		// remove required attribute from port field
		if (!jform_vvvvwbyvxk_required)
		{
			updateFieldRequired('port',1);
			jQuery('#jform_port').removeAttr('required');
			jQuery('#jform_port').removeAttr('aria-required');
			jQuery('#jform_port').removeClass('required');
			jform_vvvvwbyvxk_required = true;
		}
		jQuery('#jform_path').closest('.control-group').hide();
		// remove required attribute from path field
		if (!jform_vvvvwbyvxl_required)
		{
			updateFieldRequired('path',1);
			jQuery('#jform_path').removeAttr('required');
			jQuery('#jform_path').removeAttr('aria-required');
			jQuery('#jform_path').removeClass('required');
			jform_vvvvwbyvxl_required = true;
		}
		jQuery('.note_ssh_security').closest('.control-group').hide();
		jQuery('#jform_username').closest('.control-group').hide();
		// remove required attribute from username field
		if (!jform_vvvvwbyvxm_required)
		{
			updateFieldRequired('username',1);
			jQuery('#jform_username').removeAttr('required');
			jQuery('#jform_username').removeAttr('aria-required');
			jQuery('#jform_username').removeClass('required');
			jform_vvvvwbyvxm_required = true;
		}
	}
}

// the vvvvwby Some function
function protocol_vvvvwby_SomeFunc(protocol_vvvvwby)
{
	// set the function logic
	if (protocol_vvvvwby == 2)
	{
		return true;
	}
	return false;
}

// the vvvvwbz function
function vvvvwbz(protocol_vvvvwbz)
{
	if (isSet(protocol_vvvvwbz) && protocol_vvvvwbz.constructor !== Array)
	{
		var temp_vvvvwbz = protocol_vvvvwbz;
		var protocol_vvvvwbz = [];
		protocol_vvvvwbz.push(temp_vvvvwbz);
	}
	else if (!isSet(protocol_vvvvwbz))
	{
		var protocol_vvvvwbz = [];
	}
	var protocol = protocol_vvvvwbz.some(protocol_vvvvwbz_SomeFunc);


	// set this function logic
	if (protocol)
	{
		jQuery('.note_ftp_signature').closest('.control-group').show();
		jQuery('#jform_signature').closest('.control-group').show();
		// add required attribute to signature field
		if (jform_vvvvwbzvxn_required)
		{
			updateFieldRequired('signature',0);
			jQuery('#jform_signature').prop('required','required');
			jQuery('#jform_signature').attr('aria-required',true);
			jQuery('#jform_signature').addClass('required');
			jform_vvvvwbzvxn_required = false;
		}
	}
	else
	{
		jQuery('.note_ftp_signature').closest('.control-group').hide();
		jQuery('#jform_signature').closest('.control-group').hide();
		// remove required attribute from signature field
		if (!jform_vvvvwbzvxn_required)
		{
			updateFieldRequired('signature',1);
			jQuery('#jform_signature').removeAttr('required');
			jQuery('#jform_signature').removeAttr('aria-required');
			jQuery('#jform_signature').removeClass('required');
			jform_vvvvwbzvxn_required = true;
		}
	}
}

// the vvvvwbz Some function
function protocol_vvvvwbz_SomeFunc(protocol_vvvvwbz)
{
	// set the function logic
	if (protocol_vvvvwbz == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwca function
function vvvvwca(protocol_vvvvwca,authentication_vvvvwca)
{
	if (isSet(protocol_vvvvwca) && protocol_vvvvwca.constructor !== Array)
	{
		var temp_vvvvwca = protocol_vvvvwca;
		var protocol_vvvvwca = [];
		protocol_vvvvwca.push(temp_vvvvwca);
	}
	else if (!isSet(protocol_vvvvwca))
	{
		var protocol_vvvvwca = [];
	}
	var protocol = protocol_vvvvwca.some(protocol_vvvvwca_SomeFunc);

	if (isSet(authentication_vvvvwca) && authentication_vvvvwca.constructor !== Array)
	{
		var temp_vvvvwca = authentication_vvvvwca;
		var authentication_vvvvwca = [];
		authentication_vvvvwca.push(temp_vvvvwca);
	}
	else if (!isSet(authentication_vvvvwca))
	{
		var authentication_vvvvwca = [];
	}
	var authentication = authentication_vvvvwca.some(authentication_vvvvwca_SomeFunc);


	// set this function logic
	if (protocol && authentication)
	{
		jQuery('#jform_password').closest('.control-group').show();
		// add required attribute to password field
		if (jform_vvvvwcavxo_required)
		{
			updateFieldRequired('password',0);
			jQuery('#jform_password').prop('required','required');
			jQuery('#jform_password').attr('aria-required',true);
			jQuery('#jform_password').addClass('required');
			jform_vvvvwcavxo_required = false;
		}
	}
	else
	{
		jQuery('#jform_password').closest('.control-group').hide();
		// remove required attribute from password field
		if (!jform_vvvvwcavxo_required)
		{
			updateFieldRequired('password',1);
			jQuery('#jform_password').removeAttr('required');
			jQuery('#jform_password').removeAttr('aria-required');
			jQuery('#jform_password').removeClass('required');
			jform_vvvvwcavxo_required = true;
		}
	}
}

// the vvvvwca Some function
function protocol_vvvvwca_SomeFunc(protocol_vvvvwca)
{
	// set the function logic
	if (protocol_vvvvwca == 2)
	{
		return true;
	}
	return false;
}

// the vvvvwca Some function
function authentication_vvvvwca_SomeFunc(authentication_vvvvwca)
{
	// set the function logic
	if (authentication_vvvvwca == 1 || authentication_vvvvwca == 3 || authentication_vvvvwca == 5)
	{
		return true;
	}
	return false;
}

// the vvvvwcc function
function vvvvwcc(protocol_vvvvwcc,authentication_vvvvwcc)
{
	if (isSet(protocol_vvvvwcc) && protocol_vvvvwcc.constructor !== Array)
	{
		var temp_vvvvwcc = protocol_vvvvwcc;
		var protocol_vvvvwcc = [];
		protocol_vvvvwcc.push(temp_vvvvwcc);
	}
	else if (!isSet(protocol_vvvvwcc))
	{
		var protocol_vvvvwcc = [];
	}
	var protocol = protocol_vvvvwcc.some(protocol_vvvvwcc_SomeFunc);

	if (isSet(authentication_vvvvwcc) && authentication_vvvvwcc.constructor !== Array)
	{
		var temp_vvvvwcc = authentication_vvvvwcc;
		var authentication_vvvvwcc = [];
		authentication_vvvvwcc.push(temp_vvvvwcc);
	}
	else if (!isSet(authentication_vvvvwcc))
	{
		var authentication_vvvvwcc = [];
	}
	var authentication = authentication_vvvvwcc.some(authentication_vvvvwcc_SomeFunc);


	// set this function logic
	if (protocol && authentication)
	{
		jQuery('#jform_private').closest('.control-group').show();
		// add required attribute to private field
		if (jform_vvvvwccvxp_required)
		{
			updateFieldRequired('private',0);
			jQuery('#jform_private').prop('required','required');
			jQuery('#jform_private').attr('aria-required',true);
			jQuery('#jform_private').addClass('required');
			jform_vvvvwccvxp_required = false;
		}
	}
	else
	{
		jQuery('#jform_private').closest('.control-group').hide();
		// remove required attribute from private field
		if (!jform_vvvvwccvxp_required)
		{
			updateFieldRequired('private',1);
			jQuery('#jform_private').removeAttr('required');
			jQuery('#jform_private').removeAttr('aria-required');
			jQuery('#jform_private').removeClass('required');
			jform_vvvvwccvxp_required = true;
		}
	}
}

// the vvvvwcc Some function
function protocol_vvvvwcc_SomeFunc(protocol_vvvvwcc)
{
	// set the function logic
	if (protocol_vvvvwcc == 2)
	{
		return true;
	}
	return false;
}

// the vvvvwcc Some function
function authentication_vvvvwcc_SomeFunc(authentication_vvvvwcc)
{
	// set the function logic
	if (authentication_vvvvwcc == 2 || authentication_vvvvwcc == 3)
	{
		return true;
	}
	return false;
}

// the vvvvwce function
function vvvvwce(protocol_vvvvwce,authentication_vvvvwce)
{
	if (isSet(protocol_vvvvwce) && protocol_vvvvwce.constructor !== Array)
	{
		var temp_vvvvwce = protocol_vvvvwce;
		var protocol_vvvvwce = [];
		protocol_vvvvwce.push(temp_vvvvwce);
	}
	else if (!isSet(protocol_vvvvwce))
	{
		var protocol_vvvvwce = [];
	}
	var protocol = protocol_vvvvwce.some(protocol_vvvvwce_SomeFunc);

	if (isSet(authentication_vvvvwce) && authentication_vvvvwce.constructor !== Array)
	{
		var temp_vvvvwce = authentication_vvvvwce;
		var authentication_vvvvwce = [];
		authentication_vvvvwce.push(temp_vvvvwce);
	}
	else if (!isSet(authentication_vvvvwce))
	{
		var authentication_vvvvwce = [];
	}
	var authentication = authentication_vvvvwce.some(authentication_vvvvwce_SomeFunc);


	// set this function logic
	if (protocol && authentication)
	{
		jQuery('#jform_private_key').closest('.control-group').show();
		// add required attribute to private_key field
		if (jform_vvvvwcevxq_required)
		{
			updateFieldRequired('private_key',0);
			jQuery('#jform_private_key').prop('required','required');
			jQuery('#jform_private_key').attr('aria-required',true);
			jQuery('#jform_private_key').addClass('required');
			jform_vvvvwcevxq_required = false;
		}
	}
	else
	{
		jQuery('#jform_private_key').closest('.control-group').hide();
		// remove required attribute from private_key field
		if (!jform_vvvvwcevxq_required)
		{
			updateFieldRequired('private_key',1);
			jQuery('#jform_private_key').removeAttr('required');
			jQuery('#jform_private_key').removeAttr('aria-required');
			jQuery('#jform_private_key').removeClass('required');
			jform_vvvvwcevxq_required = true;
		}
	}
}

// the vvvvwce Some function
function protocol_vvvvwce_SomeFunc(protocol_vvvvwce)
{
	// set the function logic
	if (protocol_vvvvwce == 2)
	{
		return true;
	}
	return false;
}

// the vvvvwce Some function
function authentication_vvvvwce_SomeFunc(authentication_vvvvwce)
{
	// set the function logic
	if (authentication_vvvvwce == 4 || authentication_vvvvwce == 5)
	{
		return true;
	}
	return false;
}

// the vvvvwcg function
function vvvvwcg(protocol_vvvvwcg,authentication_vvvvwcg)
{
	if (isSet(protocol_vvvvwcg) && protocol_vvvvwcg.constructor !== Array)
	{
		var temp_vvvvwcg = protocol_vvvvwcg;
		var protocol_vvvvwcg = [];
		protocol_vvvvwcg.push(temp_vvvvwcg);
	}
	else if (!isSet(protocol_vvvvwcg))
	{
		var protocol_vvvvwcg = [];
	}
	var protocol = protocol_vvvvwcg.some(protocol_vvvvwcg_SomeFunc);

	if (isSet(authentication_vvvvwcg) && authentication_vvvvwcg.constructor !== Array)
	{
		var temp_vvvvwcg = authentication_vvvvwcg;
		var authentication_vvvvwcg = [];
		authentication_vvvvwcg.push(temp_vvvvwcg);
	}
	else if (!isSet(authentication_vvvvwcg))
	{
		var authentication_vvvvwcg = [];
	}
	var authentication = authentication_vvvvwcg.some(authentication_vvvvwcg_SomeFunc);


	// set this function logic
	if (protocol && authentication)
	{
		jQuery('#jform_secret').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_secret').closest('.control-group').hide();
	}
}

// the vvvvwcg Some function
function protocol_vvvvwcg_SomeFunc(protocol_vvvvwcg)
{
	// set the function logic
	if (protocol_vvvvwcg == 2)
	{
		return true;
	}
	return false;
}

// the vvvvwcg Some function
function authentication_vvvvwcg_SomeFunc(authentication_vvvvwcg)
{
	// set the function logic
	if (authentication_vvvvwcg == 2 || authentication_vvvvwcg == 3 || authentication_vvvvwcg == 4 || authentication_vvvvwcg == 5)
	{
		return true;
	}
	return false;
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
