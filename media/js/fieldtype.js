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
jform_vvvvwbkvxa_required = false;
jform_vvvvwbmvxb_required = false;
jform_vvvvwbovxc_required = false;
jform_vvvvwbqvxd_required = false;
jform_vvvvwbrvxe_required = false;
jform_vvvvwbsvxf_required = false;
jform_vvvvwbxvxg_required = false;
jform_vvvvwbxvxh_required = false;

// Initial Script
document.addEventListener('DOMContentLoaded', function()
{
	var datalenght_vvvvwbk = jQuery("#jform_datalenght").val();
	var has_defaults_vvvvwbk = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbk(datalenght_vvvvwbk,has_defaults_vvvvwbk);

	var datadefault_vvvvwbm = jQuery("#jform_datadefault").val();
	var has_defaults_vvvvwbm = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbm(datadefault_vvvvwbm,has_defaults_vvvvwbm);

	var datatype_vvvvwbo = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbo = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbo(datatype_vvvvwbo,has_defaults_vvvvwbo);

	var datatype_vvvvwbq = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbq = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbq(datatype_vvvvwbq,has_defaults_vvvvwbq);

	var has_defaults_vvvvwbr = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	var datatype_vvvvwbr = jQuery("#jform_datatype").val();
	vvvvwbr(has_defaults_vvvvwbr,datatype_vvvvwbr);

	var datatype_vvvvwbs = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbs = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbs(datatype_vvvvwbs,has_defaults_vvvvwbs);

	var store_vvvvwbu = jQuery("#jform_store").val();
	var datatype_vvvvwbu = jQuery("#jform_datatype").val();
	var has_defaults_vvvvwbu = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbu(store_vvvvwbu,datatype_vvvvwbu,has_defaults_vvvvwbu);

	var datatype_vvvvwbv = jQuery("#jform_datatype").val();
	var store_vvvvwbv = jQuery("#jform_store").val();
	var has_defaults_vvvvwbv = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbv(datatype_vvvvwbv,store_vvvvwbv,has_defaults_vvvvwbv);

	var has_defaults_vvvvwbw = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	var store_vvvvwbw = jQuery("#jform_store").val();
	var datatype_vvvvwbw = jQuery("#jform_datatype").val();
	vvvvwbw(has_defaults_vvvvwbw,store_vvvvwbw,datatype_vvvvwbw);

	var has_defaults_vvvvwbx = jQuery("#jform_has_defaults input[type='radio']:checked").val();
	vvvvwbx(has_defaults_vvvvwbx);
});

// the vvvvwbk function
function vvvvwbk(datalenght_vvvvwbk,has_defaults_vvvvwbk)
{
	if (isSet(datalenght_vvvvwbk) && datalenght_vvvvwbk.constructor !== Array)
	{
		var temp_vvvvwbk = datalenght_vvvvwbk;
		var datalenght_vvvvwbk = [];
		datalenght_vvvvwbk.push(temp_vvvvwbk);
	}
	else if (!isSet(datalenght_vvvvwbk))
	{
		var datalenght_vvvvwbk = [];
	}
	var datalenght = datalenght_vvvvwbk.some(datalenght_vvvvwbk_SomeFunc);

	if (isSet(has_defaults_vvvvwbk) && has_defaults_vvvvwbk.constructor !== Array)
	{
		var temp_vvvvwbk = has_defaults_vvvvwbk;
		var has_defaults_vvvvwbk = [];
		has_defaults_vvvvwbk.push(temp_vvvvwbk);
	}
	else if (!isSet(has_defaults_vvvvwbk))
	{
		var has_defaults_vvvvwbk = [];
	}
	var has_defaults = has_defaults_vvvvwbk.some(has_defaults_vvvvwbk_SomeFunc);


	// set this function logic
	if (datalenght && has_defaults)
	{
		jQuery('#jform_datalenght_other').closest('.control-group').show();
		// add required attribute to datalenght_other field
		if (jform_vvvvwbkvxa_required)
		{
			updateFieldRequired('datalenght_other',0);
			jQuery('#jform_datalenght_other').prop('required','required');
			jQuery('#jform_datalenght_other').attr('aria-required',true);
			jQuery('#jform_datalenght_other').addClass('required');
			jform_vvvvwbkvxa_required = false;
		}
	}
	else
	{
		jQuery('#jform_datalenght_other').closest('.control-group').hide();
		// remove required attribute from datalenght_other field
		if (!jform_vvvvwbkvxa_required)
		{
			updateFieldRequired('datalenght_other',1);
			jQuery('#jform_datalenght_other').removeAttr('required');
			jQuery('#jform_datalenght_other').removeAttr('aria-required');
			jQuery('#jform_datalenght_other').removeClass('required');
			jform_vvvvwbkvxa_required = true;
		}
	}
}

// the vvvvwbk Some function
function datalenght_vvvvwbk_SomeFunc(datalenght_vvvvwbk)
{
	// set the function logic
	if (datalenght_vvvvwbk == 'Other')
	{
		return true;
	}
	return false;
}

// the vvvvwbk Some function
function has_defaults_vvvvwbk_SomeFunc(has_defaults_vvvvwbk)
{
	// set the function logic
	if (has_defaults_vvvvwbk == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwbm function
function vvvvwbm(datadefault_vvvvwbm,has_defaults_vvvvwbm)
{
	if (isSet(datadefault_vvvvwbm) && datadefault_vvvvwbm.constructor !== Array)
	{
		var temp_vvvvwbm = datadefault_vvvvwbm;
		var datadefault_vvvvwbm = [];
		datadefault_vvvvwbm.push(temp_vvvvwbm);
	}
	else if (!isSet(datadefault_vvvvwbm))
	{
		var datadefault_vvvvwbm = [];
	}
	var datadefault = datadefault_vvvvwbm.some(datadefault_vvvvwbm_SomeFunc);

	if (isSet(has_defaults_vvvvwbm) && has_defaults_vvvvwbm.constructor !== Array)
	{
		var temp_vvvvwbm = has_defaults_vvvvwbm;
		var has_defaults_vvvvwbm = [];
		has_defaults_vvvvwbm.push(temp_vvvvwbm);
	}
	else if (!isSet(has_defaults_vvvvwbm))
	{
		var has_defaults_vvvvwbm = [];
	}
	var has_defaults = has_defaults_vvvvwbm.some(has_defaults_vvvvwbm_SomeFunc);


	// set this function logic
	if (datadefault && has_defaults)
	{
		jQuery('#jform_datadefault_other').closest('.control-group').show();
		// add required attribute to datadefault_other field
		if (jform_vvvvwbmvxb_required)
		{
			updateFieldRequired('datadefault_other',0);
			jQuery('#jform_datadefault_other').prop('required','required');
			jQuery('#jform_datadefault_other').attr('aria-required',true);
			jQuery('#jform_datadefault_other').addClass('required');
			jform_vvvvwbmvxb_required = false;
		}
	}
	else
	{
		jQuery('#jform_datadefault_other').closest('.control-group').hide();
		// remove required attribute from datadefault_other field
		if (!jform_vvvvwbmvxb_required)
		{
			updateFieldRequired('datadefault_other',1);
			jQuery('#jform_datadefault_other').removeAttr('required');
			jQuery('#jform_datadefault_other').removeAttr('aria-required');
			jQuery('#jform_datadefault_other').removeClass('required');
			jform_vvvvwbmvxb_required = true;
		}
	}
}

// the vvvvwbm Some function
function datadefault_vvvvwbm_SomeFunc(datadefault_vvvvwbm)
{
	// set the function logic
	if (datadefault_vvvvwbm == 'Other')
	{
		return true;
	}
	return false;
}

// the vvvvwbm Some function
function has_defaults_vvvvwbm_SomeFunc(has_defaults_vvvvwbm)
{
	// set the function logic
	if (has_defaults_vvvvwbm == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwbo function
function vvvvwbo(datatype_vvvvwbo,has_defaults_vvvvwbo)
{
	if (isSet(datatype_vvvvwbo) && datatype_vvvvwbo.constructor !== Array)
	{
		var temp_vvvvwbo = datatype_vvvvwbo;
		var datatype_vvvvwbo = [];
		datatype_vvvvwbo.push(temp_vvvvwbo);
	}
	else if (!isSet(datatype_vvvvwbo))
	{
		var datatype_vvvvwbo = [];
	}
	var datatype = datatype_vvvvwbo.some(datatype_vvvvwbo_SomeFunc);

	if (isSet(has_defaults_vvvvwbo) && has_defaults_vvvvwbo.constructor !== Array)
	{
		var temp_vvvvwbo = has_defaults_vvvvwbo;
		var has_defaults_vvvvwbo = [];
		has_defaults_vvvvwbo.push(temp_vvvvwbo);
	}
	else if (!isSet(has_defaults_vvvvwbo))
	{
		var has_defaults_vvvvwbo = [];
	}
	var has_defaults = has_defaults_vvvvwbo.some(has_defaults_vvvvwbo_SomeFunc);


	// set this function logic
	if (datatype && has_defaults)
	{
		jQuery('#jform_datalenght').closest('.control-group').show();
		// add required attribute to datalenght field
		if (jform_vvvvwbovxc_required)
		{
			updateFieldRequired('datalenght',0);
			jQuery('#jform_datalenght').prop('required','required');
			jQuery('#jform_datalenght').attr('aria-required',true);
			jQuery('#jform_datalenght').addClass('required');
			jform_vvvvwbovxc_required = false;
		}
	}
	else
	{
		jQuery('#jform_datalenght').closest('.control-group').hide();
		// remove required attribute from datalenght field
		if (!jform_vvvvwbovxc_required)
		{
			updateFieldRequired('datalenght',1);
			jQuery('#jform_datalenght').removeAttr('required');
			jQuery('#jform_datalenght').removeAttr('aria-required');
			jQuery('#jform_datalenght').removeClass('required');
			jform_vvvvwbovxc_required = true;
		}
	}
}

// the vvvvwbo Some function
function datatype_vvvvwbo_SomeFunc(datatype_vvvvwbo)
{
	// set the function logic
	if (datatype_vvvvwbo == 'CHAR' || datatype_vvvvwbo == 'VARCHAR' || datatype_vvvvwbo == 'INT' || datatype_vvvvwbo == 'TINYINT' || datatype_vvvvwbo == 'BIGINT' || datatype_vvvvwbo == 'FLOAT' || datatype_vvvvwbo == 'DECIMAL' || datatype_vvvvwbo == 'DOUBLE')
	{
		return true;
	}
	return false;
}

// the vvvvwbo Some function
function has_defaults_vvvvwbo_SomeFunc(has_defaults_vvvvwbo)
{
	// set the function logic
	if (has_defaults_vvvvwbo == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwbq function
function vvvvwbq(datatype_vvvvwbq,has_defaults_vvvvwbq)
{
	if (isSet(datatype_vvvvwbq) && datatype_vvvvwbq.constructor !== Array)
	{
		var temp_vvvvwbq = datatype_vvvvwbq;
		var datatype_vvvvwbq = [];
		datatype_vvvvwbq.push(temp_vvvvwbq);
	}
	else if (!isSet(datatype_vvvvwbq))
	{
		var datatype_vvvvwbq = [];
	}
	var datatype = datatype_vvvvwbq.some(datatype_vvvvwbq_SomeFunc);

	if (isSet(has_defaults_vvvvwbq) && has_defaults_vvvvwbq.constructor !== Array)
	{
		var temp_vvvvwbq = has_defaults_vvvvwbq;
		var has_defaults_vvvvwbq = [];
		has_defaults_vvvvwbq.push(temp_vvvvwbq);
	}
	else if (!isSet(has_defaults_vvvvwbq))
	{
		var has_defaults_vvvvwbq = [];
	}
	var has_defaults = has_defaults_vvvvwbq.some(has_defaults_vvvvwbq_SomeFunc);


	// set this function logic
	if (datatype && has_defaults)
	{
		jQuery('#jform_datadefault').closest('.control-group').show();
		jQuery('#jform_indexes').closest('.control-group').show();
		// add required attribute to indexes field
		if (jform_vvvvwbqvxd_required)
		{
			updateFieldRequired('indexes',0);
			jQuery('#jform_indexes').prop('required','required');
			jQuery('#jform_indexes').attr('aria-required',true);
			jQuery('#jform_indexes').addClass('required');
			jform_vvvvwbqvxd_required = false;
		}
	}
	else
	{
		jQuery('#jform_datadefault').closest('.control-group').hide();
		jQuery('#jform_indexes').closest('.control-group').hide();
		// remove required attribute from indexes field
		if (!jform_vvvvwbqvxd_required)
		{
			updateFieldRequired('indexes',1);
			jQuery('#jform_indexes').removeAttr('required');
			jQuery('#jform_indexes').removeAttr('aria-required');
			jQuery('#jform_indexes').removeClass('required');
			jform_vvvvwbqvxd_required = true;
		}
	}
}

// the vvvvwbq Some function
function datatype_vvvvwbq_SomeFunc(datatype_vvvvwbq)
{
	// set the function logic
	if (datatype_vvvvwbq == 'CHAR' || datatype_vvvvwbq == 'VARCHAR' || datatype_vvvvwbq == 'DATETIME' || datatype_vvvvwbq == 'DATE' || datatype_vvvvwbq == 'TIME' || datatype_vvvvwbq == 'INT' || datatype_vvvvwbq == 'TINYINT' || datatype_vvvvwbq == 'BIGINT' || datatype_vvvvwbq == 'FLOAT' || datatype_vvvvwbq == 'DECIMAL' || datatype_vvvvwbq == 'DOUBLE')
	{
		return true;
	}
	return false;
}

// the vvvvwbq Some function
function has_defaults_vvvvwbq_SomeFunc(has_defaults_vvvvwbq)
{
	// set the function logic
	if (has_defaults_vvvvwbq == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwbr function
function vvvvwbr(has_defaults_vvvvwbr,datatype_vvvvwbr)
{
	if (isSet(has_defaults_vvvvwbr) && has_defaults_vvvvwbr.constructor !== Array)
	{
		var temp_vvvvwbr = has_defaults_vvvvwbr;
		var has_defaults_vvvvwbr = [];
		has_defaults_vvvvwbr.push(temp_vvvvwbr);
	}
	else if (!isSet(has_defaults_vvvvwbr))
	{
		var has_defaults_vvvvwbr = [];
	}
	var has_defaults = has_defaults_vvvvwbr.some(has_defaults_vvvvwbr_SomeFunc);

	if (isSet(datatype_vvvvwbr) && datatype_vvvvwbr.constructor !== Array)
	{
		var temp_vvvvwbr = datatype_vvvvwbr;
		var datatype_vvvvwbr = [];
		datatype_vvvvwbr.push(temp_vvvvwbr);
	}
	else if (!isSet(datatype_vvvvwbr))
	{
		var datatype_vvvvwbr = [];
	}
	var datatype = datatype_vvvvwbr.some(datatype_vvvvwbr_SomeFunc);


	// set this function logic
	if (has_defaults && datatype)
	{
		jQuery('#jform_datadefault').closest('.control-group').show();
		jQuery('#jform_indexes').closest('.control-group').show();
		// add required attribute to indexes field
		if (jform_vvvvwbrvxe_required)
		{
			updateFieldRequired('indexes',0);
			jQuery('#jform_indexes').prop('required','required');
			jQuery('#jform_indexes').attr('aria-required',true);
			jQuery('#jform_indexes').addClass('required');
			jform_vvvvwbrvxe_required = false;
		}
	}
	else
	{
		jQuery('#jform_datadefault').closest('.control-group').hide();
		jQuery('#jform_indexes').closest('.control-group').hide();
		// remove required attribute from indexes field
		if (!jform_vvvvwbrvxe_required)
		{
			updateFieldRequired('indexes',1);
			jQuery('#jform_indexes').removeAttr('required');
			jQuery('#jform_indexes').removeAttr('aria-required');
			jQuery('#jform_indexes').removeClass('required');
			jform_vvvvwbrvxe_required = true;
		}
	}
}

// the vvvvwbr Some function
function has_defaults_vvvvwbr_SomeFunc(has_defaults_vvvvwbr)
{
	// set the function logic
	if (has_defaults_vvvvwbr == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwbr Some function
function datatype_vvvvwbr_SomeFunc(datatype_vvvvwbr)
{
	// set the function logic
	if (datatype_vvvvwbr == 'CHAR' || datatype_vvvvwbr == 'VARCHAR' || datatype_vvvvwbr == 'DATETIME' || datatype_vvvvwbr == 'DATE' || datatype_vvvvwbr == 'TIME' || datatype_vvvvwbr == 'INT' || datatype_vvvvwbr == 'TINYINT' || datatype_vvvvwbr == 'BIGINT' || datatype_vvvvwbr == 'FLOAT' || datatype_vvvvwbr == 'DECIMAL' || datatype_vvvvwbr == 'DOUBLE')
	{
		return true;
	}
	return false;
}

// the vvvvwbs function
function vvvvwbs(datatype_vvvvwbs,has_defaults_vvvvwbs)
{
	if (isSet(datatype_vvvvwbs) && datatype_vvvvwbs.constructor !== Array)
	{
		var temp_vvvvwbs = datatype_vvvvwbs;
		var datatype_vvvvwbs = [];
		datatype_vvvvwbs.push(temp_vvvvwbs);
	}
	else if (!isSet(datatype_vvvvwbs))
	{
		var datatype_vvvvwbs = [];
	}
	var datatype = datatype_vvvvwbs.some(datatype_vvvvwbs_SomeFunc);

	if (isSet(has_defaults_vvvvwbs) && has_defaults_vvvvwbs.constructor !== Array)
	{
		var temp_vvvvwbs = has_defaults_vvvvwbs;
		var has_defaults_vvvvwbs = [];
		has_defaults_vvvvwbs.push(temp_vvvvwbs);
	}
	else if (!isSet(has_defaults_vvvvwbs))
	{
		var has_defaults_vvvvwbs = [];
	}
	var has_defaults = has_defaults_vvvvwbs.some(has_defaults_vvvvwbs_SomeFunc);


	// set this function logic
	if (datatype && has_defaults)
	{
		jQuery('#jform_store').closest('.control-group').show();
		// add required attribute to store field
		if (jform_vvvvwbsvxf_required)
		{
			updateFieldRequired('store',0);
			jQuery('#jform_store').prop('required','required');
			jQuery('#jform_store').attr('aria-required',true);
			jQuery('#jform_store').addClass('required');
			jform_vvvvwbsvxf_required = false;
		}
	}
	else
	{
		jQuery('#jform_store').closest('.control-group').hide();
		// remove required attribute from store field
		if (!jform_vvvvwbsvxf_required)
		{
			updateFieldRequired('store',1);
			jQuery('#jform_store').removeAttr('required');
			jQuery('#jform_store').removeAttr('aria-required');
			jQuery('#jform_store').removeClass('required');
			jform_vvvvwbsvxf_required = true;
		}
	}
}

// the vvvvwbs Some function
function datatype_vvvvwbs_SomeFunc(datatype_vvvvwbs)
{
	// set the function logic
	if (datatype_vvvvwbs == 'CHAR' || datatype_vvvvwbs == 'VARCHAR' || datatype_vvvvwbs == 'TEXT' || datatype_vvvvwbs == 'MEDIUMTEXT' || datatype_vvvvwbs == 'LONGTEXT' || datatype_vvvvwbs == 'BLOB' || datatype_vvvvwbs == 'TINYBLOB' || datatype_vvvvwbs == 'MEDIUMBLOB' || datatype_vvvvwbs == 'LONGBLOB')
	{
		return true;
	}
	return false;
}

// the vvvvwbs Some function
function has_defaults_vvvvwbs_SomeFunc(has_defaults_vvvvwbs)
{
	// set the function logic
	if (has_defaults_vvvvwbs == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwbu function
function vvvvwbu(store_vvvvwbu,datatype_vvvvwbu,has_defaults_vvvvwbu)
{
	if (isSet(store_vvvvwbu) && store_vvvvwbu.constructor !== Array)
	{
		var temp_vvvvwbu = store_vvvvwbu;
		var store_vvvvwbu = [];
		store_vvvvwbu.push(temp_vvvvwbu);
	}
	else if (!isSet(store_vvvvwbu))
	{
		var store_vvvvwbu = [];
	}
	var store = store_vvvvwbu.some(store_vvvvwbu_SomeFunc);

	if (isSet(datatype_vvvvwbu) && datatype_vvvvwbu.constructor !== Array)
	{
		var temp_vvvvwbu = datatype_vvvvwbu;
		var datatype_vvvvwbu = [];
		datatype_vvvvwbu.push(temp_vvvvwbu);
	}
	else if (!isSet(datatype_vvvvwbu))
	{
		var datatype_vvvvwbu = [];
	}
	var datatype = datatype_vvvvwbu.some(datatype_vvvvwbu_SomeFunc);

	if (isSet(has_defaults_vvvvwbu) && has_defaults_vvvvwbu.constructor !== Array)
	{
		var temp_vvvvwbu = has_defaults_vvvvwbu;
		var has_defaults_vvvvwbu = [];
		has_defaults_vvvvwbu.push(temp_vvvvwbu);
	}
	else if (!isSet(has_defaults_vvvvwbu))
	{
		var has_defaults_vvvvwbu = [];
	}
	var has_defaults = has_defaults_vvvvwbu.some(has_defaults_vvvvwbu_SomeFunc);


	// set this function logic
	if (store && datatype && has_defaults)
	{
		jQuery('.note_whmcs_encryption').closest('.control-group').show();
	}
	else
	{
		jQuery('.note_whmcs_encryption').closest('.control-group').hide();
	}
}

// the vvvvwbu Some function
function store_vvvvwbu_SomeFunc(store_vvvvwbu)
{
	// set the function logic
	if (store_vvvvwbu == 4)
	{
		return true;
	}
	return false;
}

// the vvvvwbu Some function
function datatype_vvvvwbu_SomeFunc(datatype_vvvvwbu)
{
	// set the function logic
	if (datatype_vvvvwbu == 'CHAR' || datatype_vvvvwbu == 'VARCHAR' || datatype_vvvvwbu == 'TEXT' || datatype_vvvvwbu == 'MEDIUMTEXT' || datatype_vvvvwbu == 'LONGTEXT' || datatype_vvvvwbu == 'BLOB' || datatype_vvvvwbu == 'TINYBLOB' || datatype_vvvvwbu == 'MEDIUMBLOB' || datatype_vvvvwbu == 'LONGBLOB')
	{
		return true;
	}
	return false;
}

// the vvvvwbu Some function
function has_defaults_vvvvwbu_SomeFunc(has_defaults_vvvvwbu)
{
	// set the function logic
	if (has_defaults_vvvvwbu == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwbv function
function vvvvwbv(datatype_vvvvwbv,store_vvvvwbv,has_defaults_vvvvwbv)
{
	if (isSet(datatype_vvvvwbv) && datatype_vvvvwbv.constructor !== Array)
	{
		var temp_vvvvwbv = datatype_vvvvwbv;
		var datatype_vvvvwbv = [];
		datatype_vvvvwbv.push(temp_vvvvwbv);
	}
	else if (!isSet(datatype_vvvvwbv))
	{
		var datatype_vvvvwbv = [];
	}
	var datatype = datatype_vvvvwbv.some(datatype_vvvvwbv_SomeFunc);

	if (isSet(store_vvvvwbv) && store_vvvvwbv.constructor !== Array)
	{
		var temp_vvvvwbv = store_vvvvwbv;
		var store_vvvvwbv = [];
		store_vvvvwbv.push(temp_vvvvwbv);
	}
	else if (!isSet(store_vvvvwbv))
	{
		var store_vvvvwbv = [];
	}
	var store = store_vvvvwbv.some(store_vvvvwbv_SomeFunc);

	if (isSet(has_defaults_vvvvwbv) && has_defaults_vvvvwbv.constructor !== Array)
	{
		var temp_vvvvwbv = has_defaults_vvvvwbv;
		var has_defaults_vvvvwbv = [];
		has_defaults_vvvvwbv.push(temp_vvvvwbv);
	}
	else if (!isSet(has_defaults_vvvvwbv))
	{
		var has_defaults_vvvvwbv = [];
	}
	var has_defaults = has_defaults_vvvvwbv.some(has_defaults_vvvvwbv_SomeFunc);


	// set this function logic
	if (datatype && store && has_defaults)
	{
		jQuery('.note_whmcs_encryption').closest('.control-group').show();
	}
	else
	{
		jQuery('.note_whmcs_encryption').closest('.control-group').hide();
	}
}

// the vvvvwbv Some function
function datatype_vvvvwbv_SomeFunc(datatype_vvvvwbv)
{
	// set the function logic
	if (datatype_vvvvwbv == 'CHAR' || datatype_vvvvwbv == 'VARCHAR' || datatype_vvvvwbv == 'TEXT' || datatype_vvvvwbv == 'MEDIUMTEXT' || datatype_vvvvwbv == 'LONGTEXT' || datatype_vvvvwbv == 'BLOB' || datatype_vvvvwbv == 'TINYBLOB' || datatype_vvvvwbv == 'MEDIUMBLOB' || datatype_vvvvwbv == 'LONGBLOB')
	{
		return true;
	}
	return false;
}

// the vvvvwbv Some function
function store_vvvvwbv_SomeFunc(store_vvvvwbv)
{
	// set the function logic
	if (store_vvvvwbv == 4)
	{
		return true;
	}
	return false;
}

// the vvvvwbv Some function
function has_defaults_vvvvwbv_SomeFunc(has_defaults_vvvvwbv)
{
	// set the function logic
	if (has_defaults_vvvvwbv == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwbw function
function vvvvwbw(has_defaults_vvvvwbw,store_vvvvwbw,datatype_vvvvwbw)
{
	if (isSet(has_defaults_vvvvwbw) && has_defaults_vvvvwbw.constructor !== Array)
	{
		var temp_vvvvwbw = has_defaults_vvvvwbw;
		var has_defaults_vvvvwbw = [];
		has_defaults_vvvvwbw.push(temp_vvvvwbw);
	}
	else if (!isSet(has_defaults_vvvvwbw))
	{
		var has_defaults_vvvvwbw = [];
	}
	var has_defaults = has_defaults_vvvvwbw.some(has_defaults_vvvvwbw_SomeFunc);

	if (isSet(store_vvvvwbw) && store_vvvvwbw.constructor !== Array)
	{
		var temp_vvvvwbw = store_vvvvwbw;
		var store_vvvvwbw = [];
		store_vvvvwbw.push(temp_vvvvwbw);
	}
	else if (!isSet(store_vvvvwbw))
	{
		var store_vvvvwbw = [];
	}
	var store = store_vvvvwbw.some(store_vvvvwbw_SomeFunc);

	if (isSet(datatype_vvvvwbw) && datatype_vvvvwbw.constructor !== Array)
	{
		var temp_vvvvwbw = datatype_vvvvwbw;
		var datatype_vvvvwbw = [];
		datatype_vvvvwbw.push(temp_vvvvwbw);
	}
	else if (!isSet(datatype_vvvvwbw))
	{
		var datatype_vvvvwbw = [];
	}
	var datatype = datatype_vvvvwbw.some(datatype_vvvvwbw_SomeFunc);


	// set this function logic
	if (has_defaults && store && datatype)
	{
		jQuery('.note_whmcs_encryption').closest('.control-group').show();
	}
	else
	{
		jQuery('.note_whmcs_encryption').closest('.control-group').hide();
	}
}

// the vvvvwbw Some function
function has_defaults_vvvvwbw_SomeFunc(has_defaults_vvvvwbw)
{
	// set the function logic
	if (has_defaults_vvvvwbw == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwbw Some function
function store_vvvvwbw_SomeFunc(store_vvvvwbw)
{
	// set the function logic
	if (store_vvvvwbw == 4)
	{
		return true;
	}
	return false;
}

// the vvvvwbw Some function
function datatype_vvvvwbw_SomeFunc(datatype_vvvvwbw)
{
	// set the function logic
	if (datatype_vvvvwbw == 'CHAR' || datatype_vvvvwbw == 'VARCHAR' || datatype_vvvvwbw == 'TEXT' || datatype_vvvvwbw == 'MEDIUMTEXT' || datatype_vvvvwbw == 'LONGTEXT' || datatype_vvvvwbw == 'BLOB' || datatype_vvvvwbw == 'TINYBLOB' || datatype_vvvvwbw == 'MEDIUMBLOB' || datatype_vvvvwbw == 'LONGBLOB')
	{
		return true;
	}
	return false;
}

// the vvvvwbx function
function vvvvwbx(has_defaults_vvvvwbx)
{
	// set the function logic
	if (has_defaults_vvvvwbx == 1)
	{
		jQuery('#jform_datatype').closest('.control-group').show();
		// add required attribute to datatype field
		if (jform_vvvvwbxvxg_required)
		{
			updateFieldRequired('datatype',0);
			jQuery('#jform_datatype').prop('required','required');
			jQuery('#jform_datatype').attr('aria-required',true);
			jQuery('#jform_datatype').addClass('required');
			jform_vvvvwbxvxg_required = false;
		}
		jQuery('#jform_null_switch').closest('.control-group').show();
		// add required attribute to null_switch field
		if (jform_vvvvwbxvxh_required)
		{
			updateFieldRequired('null_switch',0);
			jQuery('#jform_null_switch').prop('required','required');
			jQuery('#jform_null_switch').attr('aria-required',true);
			jQuery('#jform_null_switch').addClass('required');
			jform_vvvvwbxvxh_required = false;
		}
	}
	else
	{
		jQuery('#jform_datatype').closest('.control-group').hide();
		// remove required attribute from datatype field
		if (!jform_vvvvwbxvxg_required)
		{
			updateFieldRequired('datatype',1);
			jQuery('#jform_datatype').removeAttr('required');
			jQuery('#jform_datatype').removeAttr('aria-required');
			jQuery('#jform_datatype').removeClass('required');
			jform_vvvvwbxvxg_required = true;
		}
		jQuery('#jform_null_switch').closest('.control-group').hide();
		// remove required attribute from null_switch field
		if (!jform_vvvvwbxvxh_required)
		{
			updateFieldRequired('null_switch',1);
			jQuery('#jform_null_switch').removeAttr('required');
			jQuery('#jform_null_switch').removeAttr('aria-required');
			jQuery('#jform_null_switch').removeClass('required');
			jform_vvvvwbxvxh_required = true;
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


jQuery(document).ready(function($)
{
	// check and load all the custom code edit buttons
	getEditCustomCodeButtons();
});

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
