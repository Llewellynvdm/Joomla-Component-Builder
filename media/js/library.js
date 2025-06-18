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
jform_vvvvwajvwr_required = false;
jform_vvvvwaxvws_required = false;
jform_vvvvwaxvwt_required = false;

// Initial Script
document.addEventListener('DOMContentLoaded', function()
{
	var how_vvvvwah = jQuery("#jform_how").val();
	var target_vvvvwah = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwah(how_vvvvwah,target_vvvvwah);

	var how_vvvvwaj = jQuery("#jform_how").val();
	var target_vvvvwaj = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwaj(how_vvvvwaj,target_vvvvwaj);

	var how_vvvvwal = jQuery("#jform_how").val();
	var target_vvvvwal = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwal(how_vvvvwal,target_vvvvwal);

	var how_vvvvwan = jQuery("#jform_how").val();
	var target_vvvvwan = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwan(how_vvvvwan,target_vvvvwan);

	var how_vvvvwap = jQuery("#jform_how").val();
	var target_vvvvwap = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwap(how_vvvvwap,target_vvvvwap);

	var target_vvvvwaq = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwaq = jQuery("#jform_how").val();
	vvvvwaq(target_vvvvwaq,how_vvvvwaq);

	var how_vvvvwar = jQuery("#jform_how").val();
	var target_vvvvwar = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwar(how_vvvvwar,target_vvvvwar);

	var target_vvvvwas = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwas = jQuery("#jform_how").val();
	vvvvwas(target_vvvvwas,how_vvvvwas);

	var how_vvvvwat = jQuery("#jform_how").val();
	var target_vvvvwat = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwat(how_vvvvwat,target_vvvvwat);

	var target_vvvvwau = jQuery("#jform_target input[type='radio']:checked").val();
	var how_vvvvwau = jQuery("#jform_how").val();
	vvvvwau(target_vvvvwau,how_vvvvwau);

	var target_vvvvwav = jQuery("#jform_target input[type='radio']:checked").val();
	var type_vvvvwav = jQuery("#jform_type input[type='radio']:checked").val();
	vvvvwav(target_vvvvwav,type_vvvvwav);

	var target_vvvvwax = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvwax(target_vvvvwax);

	var target_vvvvway = jQuery("#jform_target input[type='radio']:checked").val();
	vvvvway(target_vvvvway);
});

// the vvvvwah function
function vvvvwah(how_vvvvwah,target_vvvvwah)
{
	if (isSet(how_vvvvwah) && how_vvvvwah.constructor !== Array)
	{
		var temp_vvvvwah = how_vvvvwah;
		var how_vvvvwah = [];
		how_vvvvwah.push(temp_vvvvwah);
	}
	else if (!isSet(how_vvvvwah))
	{
		var how_vvvvwah = [];
	}
	var how = how_vvvvwah.some(how_vvvvwah_SomeFunc);

	if (isSet(target_vvvvwah) && target_vvvvwah.constructor !== Array)
	{
		var temp_vvvvwah = target_vvvvwah;
		var target_vvvvwah = [];
		target_vvvvwah.push(temp_vvvvwah);
	}
	else if (!isSet(target_vvvvwah))
	{
		var target_vvvvwah = [];
	}
	var target = target_vvvvwah.some(target_vvvvwah_SomeFunc);


	// set this function logic
	if (how && target)
	{
		jQuery('#jform_addconditions-lbl').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_addconditions-lbl').closest('.control-group').hide();
	}
}

// the vvvvwah Some function
function how_vvvvwah_SomeFunc(how_vvvvwah)
{
	// set the function logic
	if (how_vvvvwah == 2)
	{
		return true;
	}
	return false;
}

// the vvvvwah Some function
function target_vvvvwah_SomeFunc(target_vvvvwah)
{
	// set the function logic
	if (target_vvvvwah == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwaj function
function vvvvwaj(how_vvvvwaj,target_vvvvwaj)
{
	if (isSet(how_vvvvwaj) && how_vvvvwaj.constructor !== Array)
	{
		var temp_vvvvwaj = how_vvvvwaj;
		var how_vvvvwaj = [];
		how_vvvvwaj.push(temp_vvvvwaj);
	}
	else if (!isSet(how_vvvvwaj))
	{
		var how_vvvvwaj = [];
	}
	var how = how_vvvvwaj.some(how_vvvvwaj_SomeFunc);

	if (isSet(target_vvvvwaj) && target_vvvvwaj.constructor !== Array)
	{
		var temp_vvvvwaj = target_vvvvwaj;
		var target_vvvvwaj = [];
		target_vvvvwaj.push(temp_vvvvwaj);
	}
	else if (!isSet(target_vvvvwaj))
	{
		var target_vvvvwaj = [];
	}
	var target = target_vvvvwaj.some(target_vvvvwaj_SomeFunc);


	// set this function logic
	if (how && target)
	{
		jQuery('#jform_php_setdocument').closest('.control-group').show();
		// add required attribute to php_setdocument field
		if (jform_vvvvwajvwr_required)
		{
			updateFieldRequired('php_setdocument',0);
			jQuery('#jform_php_setdocument').prop('required','required');
			jQuery('#jform_php_setdocument').attr('aria-required',true);
			jQuery('#jform_php_setdocument').addClass('required');
			jform_vvvvwajvwr_required = false;
		}
	}
	else
	{
		jQuery('#jform_php_setdocument').closest('.control-group').hide();
		// remove required attribute from php_setdocument field
		if (!jform_vvvvwajvwr_required)
		{
			updateFieldRequired('php_setdocument',1);
			jQuery('#jform_php_setdocument').removeAttr('required');
			jQuery('#jform_php_setdocument').removeAttr('aria-required');
			jQuery('#jform_php_setdocument').removeClass('required');
			jform_vvvvwajvwr_required = true;
		}
	}
}

// the vvvvwaj Some function
function how_vvvvwaj_SomeFunc(how_vvvvwaj)
{
	// set the function logic
	if (how_vvvvwaj == 3)
	{
		return true;
	}
	return false;
}

// the vvvvwaj Some function
function target_vvvvwaj_SomeFunc(target_vvvvwaj)
{
	// set the function logic
	if (target_vvvvwaj == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwal function
function vvvvwal(how_vvvvwal,target_vvvvwal)
{
	if (isSet(how_vvvvwal) && how_vvvvwal.constructor !== Array)
	{
		var temp_vvvvwal = how_vvvvwal;
		var how_vvvvwal = [];
		how_vvvvwal.push(temp_vvvvwal);
	}
	else if (!isSet(how_vvvvwal))
	{
		var how_vvvvwal = [];
	}
	var how = how_vvvvwal.some(how_vvvvwal_SomeFunc);

	if (isSet(target_vvvvwal) && target_vvvvwal.constructor !== Array)
	{
		var temp_vvvvwal = target_vvvvwal;
		var target_vvvvwal = [];
		target_vvvvwal.push(temp_vvvvwal);
	}
	else if (!isSet(target_vvvvwal))
	{
		var target_vvvvwal = [];
	}
	var target = target_vvvvwal.some(target_vvvvwal_SomeFunc);


	// set this function logic
	if (how && target)
	{
		jQuery('.note_display_library_config').closest('.control-group').show();
	}
	else
	{
		jQuery('.note_display_library_config').closest('.control-group').hide();
	}
}

// the vvvvwal Some function
function how_vvvvwal_SomeFunc(how_vvvvwal)
{
	// set the function logic
	if (how_vvvvwal == 2 || how_vvvvwal == 3)
	{
		return true;
	}
	return false;
}

// the vvvvwal Some function
function target_vvvvwal_SomeFunc(target_vvvvwal)
{
	// set the function logic
	if (target_vvvvwal == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwan function
function vvvvwan(how_vvvvwan,target_vvvvwan)
{
	if (isSet(how_vvvvwan) && how_vvvvwan.constructor !== Array)
	{
		var temp_vvvvwan = how_vvvvwan;
		var how_vvvvwan = [];
		how_vvvvwan.push(temp_vvvvwan);
	}
	else if (!isSet(how_vvvvwan))
	{
		var how_vvvvwan = [];
	}
	var how = how_vvvvwan.some(how_vvvvwan_SomeFunc);

	if (isSet(target_vvvvwan) && target_vvvvwan.constructor !== Array)
	{
		var temp_vvvvwan = target_vvvvwan;
		var target_vvvvwan = [];
		target_vvvvwan.push(temp_vvvvwan);
	}
	else if (!isSet(target_vvvvwan))
	{
		var target_vvvvwan = [];
	}
	var target = target_vvvvwan.some(target_vvvvwan_SomeFunc);


	// set this function logic
	if (how && target)
	{
		jQuery('.note_display_library_files_folders_urls').closest('.control-group').show();
	}
	else
	{
		jQuery('.note_display_library_files_folders_urls').closest('.control-group').hide();
	}
}

// the vvvvwan Some function
function how_vvvvwan_SomeFunc(how_vvvvwan)
{
	// set the function logic
	if (how_vvvvwan == 1 || how_vvvvwan == 2 || how_vvvvwan == 3)
	{
		return true;
	}
	return false;
}

// the vvvvwan Some function
function target_vvvvwan_SomeFunc(target_vvvvwan)
{
	// set the function logic
	if (target_vvvvwan == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwap function
function vvvvwap(how_vvvvwap,target_vvvvwap)
{
	if (isSet(how_vvvvwap) && how_vvvvwap.constructor !== Array)
	{
		var temp_vvvvwap = how_vvvvwap;
		var how_vvvvwap = [];
		how_vvvvwap.push(temp_vvvvwap);
	}
	else if (!isSet(how_vvvvwap))
	{
		var how_vvvvwap = [];
	}
	var how = how_vvvvwap.some(how_vvvvwap_SomeFunc);

	if (isSet(target_vvvvwap) && target_vvvvwap.constructor !== Array)
	{
		var temp_vvvvwap = target_vvvvwap;
		var target_vvvvwap = [];
		target_vvvvwap.push(temp_vvvvwap);
	}
	else if (!isSet(target_vvvvwap))
	{
		var target_vvvvwap = [];
	}
	var target = target_vvvvwap.some(target_vvvvwap_SomeFunc);


	// set this function logic
	if (how && target)
	{
		jQuery('.note_no_behaviour_one').closest('.control-group').show();
		jQuery('.note_no_behaviour_three').closest('.control-group').show();
		jQuery('.note_no_behaviour_two').closest('.control-group').show();
	}
	else
	{
		jQuery('.note_no_behaviour_one').closest('.control-group').hide();
		jQuery('.note_no_behaviour_three').closest('.control-group').hide();
		jQuery('.note_no_behaviour_two').closest('.control-group').hide();
	}
}

// the vvvvwap Some function
function how_vvvvwap_SomeFunc(how_vvvvwap)
{
	// set the function logic
	if (how_vvvvwap == 0)
	{
		return true;
	}
	return false;
}

// the vvvvwap Some function
function target_vvvvwap_SomeFunc(target_vvvvwap)
{
	// set the function logic
	if (target_vvvvwap == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwaq function
function vvvvwaq(target_vvvvwaq,how_vvvvwaq)
{
	if (isSet(target_vvvvwaq) && target_vvvvwaq.constructor !== Array)
	{
		var temp_vvvvwaq = target_vvvvwaq;
		var target_vvvvwaq = [];
		target_vvvvwaq.push(temp_vvvvwaq);
	}
	else if (!isSet(target_vvvvwaq))
	{
		var target_vvvvwaq = [];
	}
	var target = target_vvvvwaq.some(target_vvvvwaq_SomeFunc);

	if (isSet(how_vvvvwaq) && how_vvvvwaq.constructor !== Array)
	{
		var temp_vvvvwaq = how_vvvvwaq;
		var how_vvvvwaq = [];
		how_vvvvwaq.push(temp_vvvvwaq);
	}
	else if (!isSet(how_vvvvwaq))
	{
		var how_vvvvwaq = [];
	}
	var how = how_vvvvwaq.some(how_vvvvwaq_SomeFunc);


	// set this function logic
	if (target && how)
	{
		jQuery('.note_no_behaviour_one').closest('.control-group').show();
		jQuery('.note_no_behaviour_three').closest('.control-group').show();
		jQuery('.note_no_behaviour_two').closest('.control-group').show();
	}
	else
	{
		jQuery('.note_no_behaviour_one').closest('.control-group').hide();
		jQuery('.note_no_behaviour_three').closest('.control-group').hide();
		jQuery('.note_no_behaviour_two').closest('.control-group').hide();
	}
}

// the vvvvwaq Some function
function target_vvvvwaq_SomeFunc(target_vvvvwaq)
{
	// set the function logic
	if (target_vvvvwaq == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwaq Some function
function how_vvvvwaq_SomeFunc(how_vvvvwaq)
{
	// set the function logic
	if (how_vvvvwaq == 0)
	{
		return true;
	}
	return false;
}

// the vvvvwar function
function vvvvwar(how_vvvvwar,target_vvvvwar)
{
	if (isSet(how_vvvvwar) && how_vvvvwar.constructor !== Array)
	{
		var temp_vvvvwar = how_vvvvwar;
		var how_vvvvwar = [];
		how_vvvvwar.push(temp_vvvvwar);
	}
	else if (!isSet(how_vvvvwar))
	{
		var how_vvvvwar = [];
	}
	var how = how_vvvvwar.some(how_vvvvwar_SomeFunc);

	if (isSet(target_vvvvwar) && target_vvvvwar.constructor !== Array)
	{
		var temp_vvvvwar = target_vvvvwar;
		var target_vvvvwar = [];
		target_vvvvwar.push(temp_vvvvwar);
	}
	else if (!isSet(target_vvvvwar))
	{
		var target_vvvvwar = [];
	}
	var target = target_vvvvwar.some(target_vvvvwar_SomeFunc);


	// set this function logic
	if (how && target)
	{
		jQuery('.note_yes_behaviour_one').closest('.control-group').show();
		jQuery('.note_yes_behaviour_two').closest('.control-group').show();
	}
	else
	{
		jQuery('.note_yes_behaviour_one').closest('.control-group').hide();
		jQuery('.note_yes_behaviour_two').closest('.control-group').hide();
	}
}

// the vvvvwar Some function
function how_vvvvwar_SomeFunc(how_vvvvwar)
{
	// set the function logic
	if (how_vvvvwar == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwar Some function
function target_vvvvwar_SomeFunc(target_vvvvwar)
{
	// set the function logic
	if (target_vvvvwar == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwas function
function vvvvwas(target_vvvvwas,how_vvvvwas)
{
	if (isSet(target_vvvvwas) && target_vvvvwas.constructor !== Array)
	{
		var temp_vvvvwas = target_vvvvwas;
		var target_vvvvwas = [];
		target_vvvvwas.push(temp_vvvvwas);
	}
	else if (!isSet(target_vvvvwas))
	{
		var target_vvvvwas = [];
	}
	var target = target_vvvvwas.some(target_vvvvwas_SomeFunc);

	if (isSet(how_vvvvwas) && how_vvvvwas.constructor !== Array)
	{
		var temp_vvvvwas = how_vvvvwas;
		var how_vvvvwas = [];
		how_vvvvwas.push(temp_vvvvwas);
	}
	else if (!isSet(how_vvvvwas))
	{
		var how_vvvvwas = [];
	}
	var how = how_vvvvwas.some(how_vvvvwas_SomeFunc);


	// set this function logic
	if (target && how)
	{
		jQuery('.note_yes_behaviour_one').closest('.control-group').show();
		jQuery('.note_yes_behaviour_two').closest('.control-group').show();
	}
	else
	{
		jQuery('.note_yes_behaviour_one').closest('.control-group').hide();
		jQuery('.note_yes_behaviour_two').closest('.control-group').hide();
	}
}

// the vvvvwas Some function
function target_vvvvwas_SomeFunc(target_vvvvwas)
{
	// set the function logic
	if (target_vvvvwas == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwas Some function
function how_vvvvwas_SomeFunc(how_vvvvwas)
{
	// set the function logic
	if (how_vvvvwas == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwat function
function vvvvwat(how_vvvvwat,target_vvvvwat)
{
	if (isSet(how_vvvvwat) && how_vvvvwat.constructor !== Array)
	{
		var temp_vvvvwat = how_vvvvwat;
		var how_vvvvwat = [];
		how_vvvvwat.push(temp_vvvvwat);
	}
	else if (!isSet(how_vvvvwat))
	{
		var how_vvvvwat = [];
	}
	var how = how_vvvvwat.some(how_vvvvwat_SomeFunc);

	if (isSet(target_vvvvwat) && target_vvvvwat.constructor !== Array)
	{
		var temp_vvvvwat = target_vvvvwat;
		var target_vvvvwat = [];
		target_vvvvwat.push(temp_vvvvwat);
	}
	else if (!isSet(target_vvvvwat))
	{
		var target_vvvvwat = [];
	}
	var target = target_vvvvwat.some(target_vvvvwat_SomeFunc);


	// set this function logic
	if (how && target)
	{
		jQuery('.note_build_in_behaviour_one').closest('.control-group').show();
		jQuery('.note_build_in_behaviour_three').closest('.control-group').show();
		jQuery('.note_build_in_behaviour_two').closest('.control-group').show();
	}
	else
	{
		jQuery('.note_build_in_behaviour_one').closest('.control-group').hide();
		jQuery('.note_build_in_behaviour_three').closest('.control-group').hide();
		jQuery('.note_build_in_behaviour_two').closest('.control-group').hide();
	}
}

// the vvvvwat Some function
function how_vvvvwat_SomeFunc(how_vvvvwat)
{
	// set the function logic
	if (how_vvvvwat == 4)
	{
		return true;
	}
	return false;
}

// the vvvvwat Some function
function target_vvvvwat_SomeFunc(target_vvvvwat)
{
	// set the function logic
	if (target_vvvvwat == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwau function
function vvvvwau(target_vvvvwau,how_vvvvwau)
{
	if (isSet(target_vvvvwau) && target_vvvvwau.constructor !== Array)
	{
		var temp_vvvvwau = target_vvvvwau;
		var target_vvvvwau = [];
		target_vvvvwau.push(temp_vvvvwau);
	}
	else if (!isSet(target_vvvvwau))
	{
		var target_vvvvwau = [];
	}
	var target = target_vvvvwau.some(target_vvvvwau_SomeFunc);

	if (isSet(how_vvvvwau) && how_vvvvwau.constructor !== Array)
	{
		var temp_vvvvwau = how_vvvvwau;
		var how_vvvvwau = [];
		how_vvvvwau.push(temp_vvvvwau);
	}
	else if (!isSet(how_vvvvwau))
	{
		var how_vvvvwau = [];
	}
	var how = how_vvvvwau.some(how_vvvvwau_SomeFunc);


	// set this function logic
	if (target && how)
	{
		jQuery('.note_build_in_behaviour_one').closest('.control-group').show();
		jQuery('.note_build_in_behaviour_three').closest('.control-group').show();
		jQuery('.note_build_in_behaviour_two').closest('.control-group').show();
	}
	else
	{
		jQuery('.note_build_in_behaviour_one').closest('.control-group').hide();
		jQuery('.note_build_in_behaviour_three').closest('.control-group').hide();
		jQuery('.note_build_in_behaviour_two').closest('.control-group').hide();
	}
}

// the vvvvwau Some function
function target_vvvvwau_SomeFunc(target_vvvvwau)
{
	// set the function logic
	if (target_vvvvwau == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwau Some function
function how_vvvvwau_SomeFunc(how_vvvvwau)
{
	// set the function logic
	if (how_vvvvwau == 4)
	{
		return true;
	}
	return false;
}

// the vvvvwav function
function vvvvwav(target_vvvvwav,type_vvvvwav)
{
	// set the function logic
	if (target_vvvvwav == 1 && type_vvvvwav == 2)
	{
		jQuery('#jform_libraries').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_libraries').closest('.control-group').hide();
	}
}

// the vvvvwax function
function vvvvwax(target_vvvvwax)
{
	// set the function logic
	if (target_vvvvwax == 1)
	{
		jQuery('#jform_how').closest('.control-group').show();
		// add required attribute to how field
		if (jform_vvvvwaxvws_required)
		{
			updateFieldRequired('how',0);
			jQuery('#jform_how').prop('required','required');
			jQuery('#jform_how').attr('aria-required',true);
			jQuery('#jform_how').addClass('required');
			jform_vvvvwaxvws_required = false;
		}
		jQuery('#jform_type').closest('.control-group').show();
		// add required attribute to type field
		if (jform_vvvvwaxvwt_required)
		{
			updateFieldRequired('type',0);
			jQuery('#jform_type').prop('required','required');
			jQuery('#jform_type').attr('aria-required',true);
			jQuery('#jform_type').addClass('required');
			jform_vvvvwaxvwt_required = false;
		}
	}
	else
	{
		jQuery('#jform_how').closest('.control-group').hide();
		// remove required attribute from how field
		if (!jform_vvvvwaxvws_required)
		{
			updateFieldRequired('how',1);
			jQuery('#jform_how').removeAttr('required');
			jQuery('#jform_how').removeAttr('aria-required');
			jQuery('#jform_how').removeClass('required');
			jform_vvvvwaxvws_required = true;
		}
		jQuery('#jform_type').closest('.control-group').hide();
		// remove required attribute from type field
		if (!jform_vvvvwaxvwt_required)
		{
			updateFieldRequired('type',1);
			jQuery('#jform_type').removeAttr('required');
			jQuery('#jform_type').removeAttr('aria-required');
			jQuery('#jform_type').removeClass('required');
			jform_vvvvwaxvwt_required = true;
		}
	}
}

// the vvvvway function
function vvvvway(target_vvvvway)
{
	// set the function logic
	if (target_vvvvway == 2)
	{
		jQuery('.note_yes_behaviour_library').closest('.control-group').show();
	}
	else
	{
		jQuery('.note_yes_behaviour_library').closest('.control-group').hide();
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


jQuery(document).ready(function()
{
	// get the linked details
	getLinked();
	// now load the displays
	getAjaxDisplay('library_config');
	getAjaxDisplay('library_files_folders_urls');

	// check and load all the customcode edit buttons
	setTimeout(getEditCustomCodeButtons, 300);
});

function addData(result,where){
	jQuery(result).insertAfter(jQuery(where).closest('.control-group'));
}

function getAjaxDisplay(type){
	getCodeFrom_server(1, type, 'type', 'getAjaxDisplay').then(function(result) {
		if (result) {
			jQuery('#display_'+type).html(result);
		}
		// set button
		addButtonID(type,'header_'+type+'_buttons', 2); // <-- little edit button
	});
}

function getFieldSelectOptions(fieldKey){
	// first check if the field is set
	if(jQuery("#jform_addconditions__addconditions"+fieldKey+"__option_field").length) {
		var fieldId = jQuery("#jform_addconditions__addconditions"+fieldKey+"__option_field option:selected").val();
		getCodeFrom_server(fieldId, 'type', 'type', 'fieldSelectOptions').then(function(result) {
			if(result) {
				jQuery('textarea#jform_addconditions__addconditions'+fieldKey+'__field_options').val(result);
			} else {
				jQuery('textarea#jform_addconditions__addconditions'+fieldKey+'__field_options').val('');
			}
		});
	}
}

function getCodeFrom_server(id, type, type_name, callingName) {
	var url = "index.php?option=com_componentbuilder&task=ajax." + callingName + "&format=json&raw=true&vdm="+vastDevMod;
	if (token.length > 0 && getCodeFrom_isValidId(id) && type.length > 0) {
		url += '&' + token + '=1&' + type_name + '=' + type + '&id=' + id;
	} else {
		console.error('There was a issue with the values passed to the [getCodeFrom_server] method and we could not make the Ajax call.');
		return;
	}
	var getUrl = JRouter(url);
	return fetch(getUrl, {
		method: 'GET',
		headers: {
			'Content-Type': 'application/json'
		}
	}).then(function(response) {
		if (response.ok) {
			return response.json();
		} else {
			throw new Error('Network response was not ok');
		}
	}).then(function(data) {
		return data;
	}).catch(function(error) {
		console.error('There was a problem with the fetch operation:', error);
	});
}
function getCodeFrom_isValidId(id) {
    if (typeof id === 'number') {
        // Check if it's a positive integer
        return Number.isInteger(id) && id > 0;
    } else if (typeof id === 'string') {
        // Check if it's a string of length > 30
        return id.length > 30;
    }
    // If neither a number nor a string, return false
    return false;
}

function getEditCustomCodeButtons_server(id) {
	var getUrl = JRouter("index.php?option=com_componentbuilder&task=ajax.getEditCustomCodeButtons&format=json&raw=true&vdm="+vastDevMod);
	let requestParams = '';
	if (token.length > 0 && id > 0) {
		requestParams = token+'=1&id='+id+'&return_here='+return_here;
	}
	// Construct URL with parameters for GET request
	const urlWithParams = getUrl + '&' + requestParams;

	// Using the Fetch API for the GET request
	return fetch(urlWithParams, {
		method: 'GET',
		headers: {
			'Content-Type': 'application/json'
		}
	}).then(response => {
		if (!response.ok) {
			throw new Error('Network response was not ok');
		}
		return response.json();
	});
}

function getEditCustomCodeButtons() {
	// Get the id using pure JavaScript
	const id = document.querySelector("#jform_id").value;
	getEditCustomCodeButtons_server(id).then(function(result) {
		if (typeof result === 'object') {
			Object.entries(result).forEach(([field, buttons]) => {
				// Creating the div element for buttons
				const div = document.createElement('div');
				div.className = 'control-group';
				div.innerHTML = '<div class="control-label"><label>Add/Edit Customcode</label></div><div class="controls control-customcode-buttons-'+field+'"></div>';

				// Insert the div before .control-wrapper-{field}
				const insertBeforeElement = document.querySelector(".control-wrapper-"+field);
				if (insertBeforeElement) {
					insertBeforeElement.parentNode.insertBefore(div, insertBeforeElement);
				}

				// Adding buttons to the div
				Object.entries(buttons).forEach(([name, button]) => {
					const controlsDiv = document.querySelector(".control-customcode-buttons-"+field);
					if (controlsDiv) {
						controlsDiv.innerHTML += button;
					}
				});
			});
		}
	}).catch(error => {
		console.error('Error:', error);
	});
}

function addButtonID_server(type, size){
	var getUrl = JRouter("index.php?option=com_componentbuilder&task=ajax.getButtonID&format=json&raw=true&vdm="+vastDevMod);
	if(token.length > 0 && type.length > 0 && size > 0){
		var request = token+'=1&type='+type+'&size='+size;
	}
	return jQuery.ajax({
		type: 'GET',
		url: getUrl,
		dataType: 'json',
		data: request,
		jsonp: false
	});
}
function addButtonID(type, where, size){
	addButtonID_server(type, size).done(function(result) {
		if(result){
			if (2 == size) {
				jQuery('#'+where).html(result);
			} else {
				addData(result, '#jform_'+where);
			}
		}
	});
}

function addButton_server(type, size){
	var getUrl = JRouter("index.php?option=com_componentbuilder&task=ajax.getButton&format=json&raw=true&vdm="+vastDevMod);
	if(token.length > 0 && type.length > 0){
		var request = token+'=1&type='+type+'&size='+size;
	}
	return jQuery.ajax({
		type: 'GET',
		url: getUrl,
		dataType: 'json',
		data: request,
		jsonp: false
	});
}
function addButton(type, where, size){
	// just to insure that default behaviour still works
	size = typeof size !== 'undefined' ? size : 1;
	addButton_server(type, size).done(function(result) {
		if(result){
			if (2 == size) {
				jQuery('#'+where).html(result);
			} else {
				addData(result, '#jform_'+where);
			}
		}
	})
}

function getLinked() {
	getCodeFrom_server(1, 'type', 'type', 'getLinked').then(function(result) {
		if (result.error) {
			console.error(result.error);
		} else if (result) {
			document.getElementById('display_linked_to').innerHTML = result;
		}
	});
}
