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
jform_vvvvvzbvwb_required = false;
jform_vvvvvzevwc_required = false;
jform_vvvvvzfvwd_required = false;
jform_vvvvvzgvwe_required = false;
jform_vvvvvzrvwf_required = false;
jform_vvvvvzrvwg_required = false;
jform_vvvvvzwvwh_required = false;
jform_vvvvvzwvwi_required = false;
jform_vvvvvzwvwj_required = false;
jform_vvvvvzxvwk_required = false;
jform_vvvvvzyvwl_required = false;
jform_vvvvvzzvwm_required = false;

// Initial Script
document.addEventListener('DOMContentLoaded', function()
{
	var gettype_vvvvvzb = jQuery("#jform_gettype").val();
	vvvvvzb(gettype_vvvvvzb);

	var main_source_vvvvvzc = jQuery("#jform_main_source").val();
	vvvvvzc(main_source_vvvvvzc);

	var main_source_vvvvvzd = jQuery("#jform_main_source").val();
	vvvvvzd(main_source_vvvvvzd);

	var main_source_vvvvvze = jQuery("#jform_main_source").val();
	vvvvvze(main_source_vvvvvze);

	var main_source_vvvvvzf = jQuery("#jform_main_source").val();
	vvvvvzf(main_source_vvvvvzf);

	var main_source_vvvvvzg = jQuery("#jform_main_source").val();
	vvvvvzg(main_source_vvvvvzg);

	var addcalculation_vvvvvzh = jQuery("#jform_addcalculation input[type='radio']:checked").val();
	vvvvvzh(addcalculation_vvvvvzh);

	var addcalculation_vvvvvzi = jQuery("#jform_addcalculation input[type='radio']:checked").val();
	var gettype_vvvvvzi = jQuery("#jform_gettype").val();
	vvvvvzi(addcalculation_vvvvvzi,gettype_vvvvvzi);

	var addcalculation_vvvvvzj = jQuery("#jform_addcalculation input[type='radio']:checked").val();
	var gettype_vvvvvzj = jQuery("#jform_gettype").val();
	vvvvvzj(addcalculation_vvvvvzj,gettype_vvvvvzj);

	var main_source_vvvvvzm = jQuery("#jform_main_source").val();
	vvvvvzm(main_source_vvvvvzm);

	var main_source_vvvvvzn = jQuery("#jform_main_source").val();
	vvvvvzn(main_source_vvvvvzn);

	var add_php_before_getitem_vvvvvzo = jQuery("#jform_add_php_before_getitem input[type='radio']:checked").val();
	var gettype_vvvvvzo = jQuery("#jform_gettype").val();
	vvvvvzo(add_php_before_getitem_vvvvvzo,gettype_vvvvvzo);

	var add_php_after_getitem_vvvvvzp = jQuery("#jform_add_php_after_getitem input[type='radio']:checked").val();
	var gettype_vvvvvzp = jQuery("#jform_gettype").val();
	vvvvvzp(add_php_after_getitem_vvvvvzp,gettype_vvvvvzp);

	var gettype_vvvvvzr = jQuery("#jform_gettype").val();
	vvvvvzr(gettype_vvvvvzr);

	var add_php_getlistquery_vvvvvzs = jQuery("#jform_add_php_getlistquery input[type='radio']:checked").val();
	var gettype_vvvvvzs = jQuery("#jform_gettype").val();
	vvvvvzs(add_php_getlistquery_vvvvvzs,gettype_vvvvvzs);

	var add_php_before_getitems_vvvvvzt = jQuery("#jform_add_php_before_getitems input[type='radio']:checked").val();
	var gettype_vvvvvzt = jQuery("#jform_gettype").val();
	vvvvvzt(add_php_before_getitems_vvvvvzt,gettype_vvvvvzt);

	var add_php_after_getitems_vvvvvzu = jQuery("#jform_add_php_after_getitems input[type='radio']:checked").val();
	var gettype_vvvvvzu = jQuery("#jform_gettype").val();
	vvvvvzu(add_php_after_getitems_vvvvvzu,gettype_vvvvvzu);

	var gettype_vvvvvzw = jQuery("#jform_gettype").val();
	vvvvvzw(gettype_vvvvvzw);

	var gettype_vvvvvzx = jQuery("#jform_gettype").val();
	vvvvvzx(gettype_vvvvvzx);

	var gettype_vvvvvzy = jQuery("#jform_gettype").val();
	vvvvvzy(gettype_vvvvvzy);

	var gettype_vvvvvzz = jQuery("#jform_gettype").val();
	var add_php_router_parse_vvvvvzz = jQuery("#jform_add_php_router_parse input[type='radio']:checked").val();
	vvvvvzz(gettype_vvvvvzz,add_php_router_parse_vvvvvzz);

	var gettype_vvvvwab = jQuery("#jform_gettype").val();
	vvvvwab(gettype_vvvvwab);
});

// the vvvvvzb function
function vvvvvzb(gettype_vvvvvzb)
{
	if (isSet(gettype_vvvvvzb) && gettype_vvvvvzb.constructor !== Array)
	{
		var temp_vvvvvzb = gettype_vvvvvzb;
		var gettype_vvvvvzb = [];
		gettype_vvvvvzb.push(temp_vvvvvzb);
	}
	else if (!isSet(gettype_vvvvvzb))
	{
		var gettype_vvvvvzb = [];
	}
	var gettype = gettype_vvvvvzb.some(gettype_vvvvvzb_SomeFunc);


	// set this function logic
	if (gettype)
	{
		jQuery('#jform_getcustom').closest('.control-group').show();
		// add required attribute to getcustom field
		if (jform_vvvvvzbvwb_required)
		{
			updateFieldRequired('getcustom',0);
			jQuery('#jform_getcustom').prop('required','required');
			jQuery('#jform_getcustom').attr('aria-required',true);
			jQuery('#jform_getcustom').addClass('required');
			jform_vvvvvzbvwb_required = false;
		}
	}
	else
	{
		jQuery('#jform_getcustom').closest('.control-group').hide();
		// remove required attribute from getcustom field
		if (!jform_vvvvvzbvwb_required)
		{
			updateFieldRequired('getcustom',1);
			jQuery('#jform_getcustom').removeAttr('required');
			jQuery('#jform_getcustom').removeAttr('aria-required');
			jQuery('#jform_getcustom').removeClass('required');
			jform_vvvvvzbvwb_required = true;
		}
	}
}

// the vvvvvzb Some function
function gettype_vvvvvzb_SomeFunc(gettype_vvvvvzb)
{
	// set the function logic
	if (gettype_vvvvvzb == 3 || gettype_vvvvvzb == 4)
	{
		return true;
	}
	return false;
}

// the vvvvvzc function
function vvvvvzc(main_source_vvvvvzc)
{
	if (isSet(main_source_vvvvvzc) && main_source_vvvvvzc.constructor !== Array)
	{
		var temp_vvvvvzc = main_source_vvvvvzc;
		var main_source_vvvvvzc = [];
		main_source_vvvvvzc.push(temp_vvvvvzc);
	}
	else if (!isSet(main_source_vvvvvzc))
	{
		var main_source_vvvvvzc = [];
	}
	var main_source = main_source_vvvvvzc.some(main_source_vvvvvzc_SomeFunc);


	// set this function logic
	if (main_source)
	{
		jQuery('#jform_select_all').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_select_all').closest('.control-group').hide();
	}
}

// the vvvvvzc Some function
function main_source_vvvvvzc_SomeFunc(main_source_vvvvvzc)
{
	// set the function logic
	if (main_source_vvvvvzc == 1 || main_source_vvvvvzc == 2)
	{
		return true;
	}
	return false;
}

// the vvvvvzd function
function vvvvvzd(main_source_vvvvvzd)
{
	if (isSet(main_source_vvvvvzd) && main_source_vvvvvzd.constructor !== Array)
	{
		var temp_vvvvvzd = main_source_vvvvvzd;
		var main_source_vvvvvzd = [];
		main_source_vvvvvzd.push(temp_vvvvvzd);
	}
	else if (!isSet(main_source_vvvvvzd))
	{
		var main_source_vvvvvzd = [];
	}
	var main_source = main_source_vvvvvzd.some(main_source_vvvvvzd_SomeFunc);


	// set this function logic
	if (main_source)
	{
		jQuery('#jform_view_table_main').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_view_table_main').closest('.control-group').hide();
	}
}

// the vvvvvzd Some function
function main_source_vvvvvzd_SomeFunc(main_source_vvvvvzd)
{
	// set the function logic
	if (main_source_vvvvvzd == 1)
	{
		return true;
	}
	return false;
}

// the vvvvvze function
function vvvvvze(main_source_vvvvvze)
{
	if (isSet(main_source_vvvvvze) && main_source_vvvvvze.constructor !== Array)
	{
		var temp_vvvvvze = main_source_vvvvvze;
		var main_source_vvvvvze = [];
		main_source_vvvvvze.push(temp_vvvvvze);
	}
	else if (!isSet(main_source_vvvvvze))
	{
		var main_source_vvvvvze = [];
	}
	var main_source = main_source_vvvvvze.some(main_source_vvvvvze_SomeFunc);


	// set this function logic
	if (main_source)
	{
		jQuery('#jform_view_selection').closest('.control-group').show();
		// add required attribute to view_selection field
		if (jform_vvvvvzevwc_required)
		{
			updateFieldRequired('view_selection',0);
			jQuery('#jform_view_selection').prop('required','required');
			jQuery('#jform_view_selection').attr('aria-required',true);
			jQuery('#jform_view_selection').addClass('required');
			jform_vvvvvzevwc_required = false;
		}
	}
	else
	{
		jQuery('#jform_view_selection').closest('.control-group').hide();
		// remove required attribute from view_selection field
		if (!jform_vvvvvzevwc_required)
		{
			updateFieldRequired('view_selection',1);
			jQuery('#jform_view_selection').removeAttr('required');
			jQuery('#jform_view_selection').removeAttr('aria-required');
			jQuery('#jform_view_selection').removeClass('required');
			jform_vvvvvzevwc_required = true;
		}
	}
}

// the vvvvvze Some function
function main_source_vvvvvze_SomeFunc(main_source_vvvvvze)
{
	// set the function logic
	if (main_source_vvvvvze == 1)
	{
		return true;
	}
	return false;
}

// the vvvvvzf function
function vvvvvzf(main_source_vvvvvzf)
{
	if (isSet(main_source_vvvvvzf) && main_source_vvvvvzf.constructor !== Array)
	{
		var temp_vvvvvzf = main_source_vvvvvzf;
		var main_source_vvvvvzf = [];
		main_source_vvvvvzf.push(temp_vvvvvzf);
	}
	else if (!isSet(main_source_vvvvvzf))
	{
		var main_source_vvvvvzf = [];
	}
	var main_source = main_source_vvvvvzf.some(main_source_vvvvvzf_SomeFunc);


	// set this function logic
	if (main_source)
	{
		jQuery('#jform_db_table_main').closest('.control-group').show();
		// add required attribute to db_table_main field
		if (jform_vvvvvzfvwd_required)
		{
			updateFieldRequired('db_table_main',0);
			jQuery('#jform_db_table_main').prop('required','required');
			jQuery('#jform_db_table_main').attr('aria-required',true);
			jQuery('#jform_db_table_main').addClass('required');
			jform_vvvvvzfvwd_required = false;
		}
	}
	else
	{
		jQuery('#jform_db_table_main').closest('.control-group').hide();
		// remove required attribute from db_table_main field
		if (!jform_vvvvvzfvwd_required)
		{
			updateFieldRequired('db_table_main',1);
			jQuery('#jform_db_table_main').removeAttr('required');
			jQuery('#jform_db_table_main').removeAttr('aria-required');
			jQuery('#jform_db_table_main').removeClass('required');
			jform_vvvvvzfvwd_required = true;
		}
	}
}

// the vvvvvzf Some function
function main_source_vvvvvzf_SomeFunc(main_source_vvvvvzf)
{
	// set the function logic
	if (main_source_vvvvvzf == 2)
	{
		return true;
	}
	return false;
}

// the vvvvvzg function
function vvvvvzg(main_source_vvvvvzg)
{
	if (isSet(main_source_vvvvvzg) && main_source_vvvvvzg.constructor !== Array)
	{
		var temp_vvvvvzg = main_source_vvvvvzg;
		var main_source_vvvvvzg = [];
		main_source_vvvvvzg.push(temp_vvvvvzg);
	}
	else if (!isSet(main_source_vvvvvzg))
	{
		var main_source_vvvvvzg = [];
	}
	var main_source = main_source_vvvvvzg.some(main_source_vvvvvzg_SomeFunc);


	// set this function logic
	if (main_source)
	{
		jQuery('#jform_db_selection').closest('.control-group').show();
		// add required attribute to db_selection field
		if (jform_vvvvvzgvwe_required)
		{
			updateFieldRequired('db_selection',0);
			jQuery('#jform_db_selection').prop('required','required');
			jQuery('#jform_db_selection').attr('aria-required',true);
			jQuery('#jform_db_selection').addClass('required');
			jform_vvvvvzgvwe_required = false;
		}
	}
	else
	{
		jQuery('#jform_db_selection').closest('.control-group').hide();
		// remove required attribute from db_selection field
		if (!jform_vvvvvzgvwe_required)
		{
			updateFieldRequired('db_selection',1);
			jQuery('#jform_db_selection').removeAttr('required');
			jQuery('#jform_db_selection').removeAttr('aria-required');
			jQuery('#jform_db_selection').removeClass('required');
			jform_vvvvvzgvwe_required = true;
		}
	}
}

// the vvvvvzg Some function
function main_source_vvvvvzg_SomeFunc(main_source_vvvvvzg)
{
	// set the function logic
	if (main_source_vvvvvzg == 2)
	{
		return true;
	}
	return false;
}

// the vvvvvzh function
function vvvvvzh(addcalculation_vvvvvzh)
{
	// set the function logic
	if (addcalculation_vvvvvzh == 1)
	{
		jQuery('#jform_php_calculation-lbl').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_php_calculation-lbl').closest('.control-group').hide();
	}
}

// the vvvvvzi function
function vvvvvzi(addcalculation_vvvvvzi,gettype_vvvvvzi)
{
	if (isSet(addcalculation_vvvvvzi) && addcalculation_vvvvvzi.constructor !== Array)
	{
		var temp_vvvvvzi = addcalculation_vvvvvzi;
		var addcalculation_vvvvvzi = [];
		addcalculation_vvvvvzi.push(temp_vvvvvzi);
	}
	else if (!isSet(addcalculation_vvvvvzi))
	{
		var addcalculation_vvvvvzi = [];
	}
	var addcalculation = addcalculation_vvvvvzi.some(addcalculation_vvvvvzi_SomeFunc);

	if (isSet(gettype_vvvvvzi) && gettype_vvvvvzi.constructor !== Array)
	{
		var temp_vvvvvzi = gettype_vvvvvzi;
		var gettype_vvvvvzi = [];
		gettype_vvvvvzi.push(temp_vvvvvzi);
	}
	else if (!isSet(gettype_vvvvvzi))
	{
		var gettype_vvvvvzi = [];
	}
	var gettype = gettype_vvvvvzi.some(gettype_vvvvvzi_SomeFunc);


	// set this function logic
	if (addcalculation && gettype)
	{
		jQuery('.note_calculation_item').closest('.control-group').show();
	}
	else
	{
		jQuery('.note_calculation_item').closest('.control-group').hide();
	}
}

// the vvvvvzi Some function
function addcalculation_vvvvvzi_SomeFunc(addcalculation_vvvvvzi)
{
	// set the function logic
	if (addcalculation_vvvvvzi == 1)
	{
		return true;
	}
	return false;
}

// the vvvvvzi Some function
function gettype_vvvvvzi_SomeFunc(gettype_vvvvvzi)
{
	// set the function logic
	if (gettype_vvvvvzi == 1 || gettype_vvvvvzi == 3)
	{
		return true;
	}
	return false;
}

// the vvvvvzj function
function vvvvvzj(addcalculation_vvvvvzj,gettype_vvvvvzj)
{
	if (isSet(addcalculation_vvvvvzj) && addcalculation_vvvvvzj.constructor !== Array)
	{
		var temp_vvvvvzj = addcalculation_vvvvvzj;
		var addcalculation_vvvvvzj = [];
		addcalculation_vvvvvzj.push(temp_vvvvvzj);
	}
	else if (!isSet(addcalculation_vvvvvzj))
	{
		var addcalculation_vvvvvzj = [];
	}
	var addcalculation = addcalculation_vvvvvzj.some(addcalculation_vvvvvzj_SomeFunc);

	if (isSet(gettype_vvvvvzj) && gettype_vvvvvzj.constructor !== Array)
	{
		var temp_vvvvvzj = gettype_vvvvvzj;
		var gettype_vvvvvzj = [];
		gettype_vvvvvzj.push(temp_vvvvvzj);
	}
	else if (!isSet(gettype_vvvvvzj))
	{
		var gettype_vvvvvzj = [];
	}
	var gettype = gettype_vvvvvzj.some(gettype_vvvvvzj_SomeFunc);


	// set this function logic
	if (addcalculation && gettype)
	{
		jQuery('.note_calculation_items').closest('.control-group').show();
	}
	else
	{
		jQuery('.note_calculation_items').closest('.control-group').hide();
	}
}

// the vvvvvzj Some function
function addcalculation_vvvvvzj_SomeFunc(addcalculation_vvvvvzj)
{
	// set the function logic
	if (addcalculation_vvvvvzj == 1)
	{
		return true;
	}
	return false;
}

// the vvvvvzj Some function
function gettype_vvvvvzj_SomeFunc(gettype_vvvvvzj)
{
	// set the function logic
	if (gettype_vvvvvzj == 2 || gettype_vvvvvzj == 4)
	{
		return true;
	}
	return false;
}

// the vvvvvzm function
function vvvvvzm(main_source_vvvvvzm)
{
	if (isSet(main_source_vvvvvzm) && main_source_vvvvvzm.constructor !== Array)
	{
		var temp_vvvvvzm = main_source_vvvvvzm;
		var main_source_vvvvvzm = [];
		main_source_vvvvvzm.push(temp_vvvvvzm);
	}
	else if (!isSet(main_source_vvvvvzm))
	{
		var main_source_vvvvvzm = [];
	}
	var main_source = main_source_vvvvvzm.some(main_source_vvvvvzm_SomeFunc);


	// set this function logic
	if (main_source)
	{
		jQuery('#jform_php_custom_get-lbl').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_php_custom_get-lbl').closest('.control-group').hide();
	}
}

// the vvvvvzm Some function
function main_source_vvvvvzm_SomeFunc(main_source_vvvvvzm)
{
	// set the function logic
	if (main_source_vvvvvzm == 3)
	{
		return true;
	}
	return false;
}

// the vvvvvzn function
function vvvvvzn(main_source_vvvvvzn)
{
	if (isSet(main_source_vvvvvzn) && main_source_vvvvvzn.constructor !== Array)
	{
		var temp_vvvvvzn = main_source_vvvvvzn;
		var main_source_vvvvvzn = [];
		main_source_vvvvvzn.push(temp_vvvvvzn);
	}
	else if (!isSet(main_source_vvvvvzn))
	{
		var main_source_vvvvvzn = [];
	}
	var main_source = main_source_vvvvvzn.some(main_source_vvvvvzn_SomeFunc);


	// set this function logic
	if (main_source)
	{
		jQuery('#jform_filter-lbl').closest('.control-group').show();
		jQuery('#jform_global-lbl').closest('.control-group').show();
		jQuery('#jform_group-lbl').closest('.control-group').show();
		jQuery('#jform_order-lbl').closest('.control-group').show();
		jQuery('#jform_where-lbl').closest('.control-group').show();
		jQuery('#jform_join_db_table-lbl').closest('.control-group').show();
		jQuery('#jform_join_view_table-lbl').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_filter-lbl').closest('.control-group').hide();
		jQuery('#jform_global-lbl').closest('.control-group').hide();
		jQuery('#jform_group-lbl').closest('.control-group').hide();
		jQuery('#jform_order-lbl').closest('.control-group').hide();
		jQuery('#jform_where-lbl').closest('.control-group').hide();
		jQuery('#jform_join_db_table-lbl').closest('.control-group').hide();
		jQuery('#jform_join_view_table-lbl').closest('.control-group').hide();
	}
}

// the vvvvvzn Some function
function main_source_vvvvvzn_SomeFunc(main_source_vvvvvzn)
{
	// set the function logic
	if (main_source_vvvvvzn == 1 || main_source_vvvvvzn == 2)
	{
		return true;
	}
	return false;
}

// the vvvvvzo function
function vvvvvzo(add_php_before_getitem_vvvvvzo,gettype_vvvvvzo)
{
	if (isSet(add_php_before_getitem_vvvvvzo) && add_php_before_getitem_vvvvvzo.constructor !== Array)
	{
		var temp_vvvvvzo = add_php_before_getitem_vvvvvzo;
		var add_php_before_getitem_vvvvvzo = [];
		add_php_before_getitem_vvvvvzo.push(temp_vvvvvzo);
	}
	else if (!isSet(add_php_before_getitem_vvvvvzo))
	{
		var add_php_before_getitem_vvvvvzo = [];
	}
	var add_php_before_getitem = add_php_before_getitem_vvvvvzo.some(add_php_before_getitem_vvvvvzo_SomeFunc);

	if (isSet(gettype_vvvvvzo) && gettype_vvvvvzo.constructor !== Array)
	{
		var temp_vvvvvzo = gettype_vvvvvzo;
		var gettype_vvvvvzo = [];
		gettype_vvvvvzo.push(temp_vvvvvzo);
	}
	else if (!isSet(gettype_vvvvvzo))
	{
		var gettype_vvvvvzo = [];
	}
	var gettype = gettype_vvvvvzo.some(gettype_vvvvvzo_SomeFunc);


	// set this function logic
	if (add_php_before_getitem && gettype)
	{
		jQuery('#jform_php_before_getitem-lbl').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_php_before_getitem-lbl').closest('.control-group').hide();
	}
}

// the vvvvvzo Some function
function add_php_before_getitem_vvvvvzo_SomeFunc(add_php_before_getitem_vvvvvzo)
{
	// set the function logic
	if (add_php_before_getitem_vvvvvzo == 1)
	{
		return true;
	}
	return false;
}

// the vvvvvzo Some function
function gettype_vvvvvzo_SomeFunc(gettype_vvvvvzo)
{
	// set the function logic
	if (gettype_vvvvvzo == 1 || gettype_vvvvvzo == 3)
	{
		return true;
	}
	return false;
}

// the vvvvvzp function
function vvvvvzp(add_php_after_getitem_vvvvvzp,gettype_vvvvvzp)
{
	if (isSet(add_php_after_getitem_vvvvvzp) && add_php_after_getitem_vvvvvzp.constructor !== Array)
	{
		var temp_vvvvvzp = add_php_after_getitem_vvvvvzp;
		var add_php_after_getitem_vvvvvzp = [];
		add_php_after_getitem_vvvvvzp.push(temp_vvvvvzp);
	}
	else if (!isSet(add_php_after_getitem_vvvvvzp))
	{
		var add_php_after_getitem_vvvvvzp = [];
	}
	var add_php_after_getitem = add_php_after_getitem_vvvvvzp.some(add_php_after_getitem_vvvvvzp_SomeFunc);

	if (isSet(gettype_vvvvvzp) && gettype_vvvvvzp.constructor !== Array)
	{
		var temp_vvvvvzp = gettype_vvvvvzp;
		var gettype_vvvvvzp = [];
		gettype_vvvvvzp.push(temp_vvvvvzp);
	}
	else if (!isSet(gettype_vvvvvzp))
	{
		var gettype_vvvvvzp = [];
	}
	var gettype = gettype_vvvvvzp.some(gettype_vvvvvzp_SomeFunc);


	// set this function logic
	if (add_php_after_getitem && gettype)
	{
		jQuery('#jform_php_after_getitem-lbl').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_php_after_getitem-lbl').closest('.control-group').hide();
	}
}

// the vvvvvzp Some function
function add_php_after_getitem_vvvvvzp_SomeFunc(add_php_after_getitem_vvvvvzp)
{
	// set the function logic
	if (add_php_after_getitem_vvvvvzp == 1)
	{
		return true;
	}
	return false;
}

// the vvvvvzp Some function
function gettype_vvvvvzp_SomeFunc(gettype_vvvvvzp)
{
	// set the function logic
	if (gettype_vvvvvzp == 1 || gettype_vvvvvzp == 3)
	{
		return true;
	}
	return false;
}

// the vvvvvzr function
function vvvvvzr(gettype_vvvvvzr)
{
	if (isSet(gettype_vvvvvzr) && gettype_vvvvvzr.constructor !== Array)
	{
		var temp_vvvvvzr = gettype_vvvvvzr;
		var gettype_vvvvvzr = [];
		gettype_vvvvvzr.push(temp_vvvvvzr);
	}
	else if (!isSet(gettype_vvvvvzr))
	{
		var gettype_vvvvvzr = [];
	}
	var gettype = gettype_vvvvvzr.some(gettype_vvvvvzr_SomeFunc);


	// set this function logic
	if (gettype)
	{
		jQuery('#jform_add_php_after_getitem').closest('.control-group').show();
		// add required attribute to add_php_after_getitem field
		if (jform_vvvvvzrvwf_required)
		{
			updateFieldRequired('add_php_after_getitem',0);
			jQuery('#jform_add_php_after_getitem').prop('required','required');
			jQuery('#jform_add_php_after_getitem').attr('aria-required',true);
			jQuery('#jform_add_php_after_getitem').addClass('required');
			jform_vvvvvzrvwf_required = false;
		}
		jQuery('#jform_add_php_before_getitem').closest('.control-group').show();
		// add required attribute to add_php_before_getitem field
		if (jform_vvvvvzrvwg_required)
		{
			updateFieldRequired('add_php_before_getitem',0);
			jQuery('#jform_add_php_before_getitem').prop('required','required');
			jQuery('#jform_add_php_before_getitem').attr('aria-required',true);
			jQuery('#jform_add_php_before_getitem').addClass('required');
			jform_vvvvvzrvwg_required = false;
		}
	}
	else
	{
		jQuery('#jform_add_php_after_getitem').closest('.control-group').hide();
		// remove required attribute from add_php_after_getitem field
		if (!jform_vvvvvzrvwf_required)
		{
			updateFieldRequired('add_php_after_getitem',1);
			jQuery('#jform_add_php_after_getitem').removeAttr('required');
			jQuery('#jform_add_php_after_getitem').removeAttr('aria-required');
			jQuery('#jform_add_php_after_getitem').removeClass('required');
			jform_vvvvvzrvwf_required = true;
		}
		jQuery('#jform_add_php_before_getitem').closest('.control-group').hide();
		// remove required attribute from add_php_before_getitem field
		if (!jform_vvvvvzrvwg_required)
		{
			updateFieldRequired('add_php_before_getitem',1);
			jQuery('#jform_add_php_before_getitem').removeAttr('required');
			jQuery('#jform_add_php_before_getitem').removeAttr('aria-required');
			jQuery('#jform_add_php_before_getitem').removeClass('required');
			jform_vvvvvzrvwg_required = true;
		}
	}
}

// the vvvvvzr Some function
function gettype_vvvvvzr_SomeFunc(gettype_vvvvvzr)
{
	// set the function logic
	if (gettype_vvvvvzr == 1 || gettype_vvvvvzr == 3)
	{
		return true;
	}
	return false;
}

// the vvvvvzs function
function vvvvvzs(add_php_getlistquery_vvvvvzs,gettype_vvvvvzs)
{
	if (isSet(add_php_getlistquery_vvvvvzs) && add_php_getlistquery_vvvvvzs.constructor !== Array)
	{
		var temp_vvvvvzs = add_php_getlistquery_vvvvvzs;
		var add_php_getlistquery_vvvvvzs = [];
		add_php_getlistquery_vvvvvzs.push(temp_vvvvvzs);
	}
	else if (!isSet(add_php_getlistquery_vvvvvzs))
	{
		var add_php_getlistquery_vvvvvzs = [];
	}
	var add_php_getlistquery = add_php_getlistquery_vvvvvzs.some(add_php_getlistquery_vvvvvzs_SomeFunc);

	if (isSet(gettype_vvvvvzs) && gettype_vvvvvzs.constructor !== Array)
	{
		var temp_vvvvvzs = gettype_vvvvvzs;
		var gettype_vvvvvzs = [];
		gettype_vvvvvzs.push(temp_vvvvvzs);
	}
	else if (!isSet(gettype_vvvvvzs))
	{
		var gettype_vvvvvzs = [];
	}
	var gettype = gettype_vvvvvzs.some(gettype_vvvvvzs_SomeFunc);


	// set this function logic
	if (add_php_getlistquery && gettype)
	{
		jQuery('#jform_php_getlistquery-lbl').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_php_getlistquery-lbl').closest('.control-group').hide();
	}
}

// the vvvvvzs Some function
function add_php_getlistquery_vvvvvzs_SomeFunc(add_php_getlistquery_vvvvvzs)
{
	// set the function logic
	if (add_php_getlistquery_vvvvvzs == 1)
	{
		return true;
	}
	return false;
}

// the vvvvvzs Some function
function gettype_vvvvvzs_SomeFunc(gettype_vvvvvzs)
{
	// set the function logic
	if (gettype_vvvvvzs == 2 || gettype_vvvvvzs == 4)
	{
		return true;
	}
	return false;
}

// the vvvvvzt function
function vvvvvzt(add_php_before_getitems_vvvvvzt,gettype_vvvvvzt)
{
	if (isSet(add_php_before_getitems_vvvvvzt) && add_php_before_getitems_vvvvvzt.constructor !== Array)
	{
		var temp_vvvvvzt = add_php_before_getitems_vvvvvzt;
		var add_php_before_getitems_vvvvvzt = [];
		add_php_before_getitems_vvvvvzt.push(temp_vvvvvzt);
	}
	else if (!isSet(add_php_before_getitems_vvvvvzt))
	{
		var add_php_before_getitems_vvvvvzt = [];
	}
	var add_php_before_getitems = add_php_before_getitems_vvvvvzt.some(add_php_before_getitems_vvvvvzt_SomeFunc);

	if (isSet(gettype_vvvvvzt) && gettype_vvvvvzt.constructor !== Array)
	{
		var temp_vvvvvzt = gettype_vvvvvzt;
		var gettype_vvvvvzt = [];
		gettype_vvvvvzt.push(temp_vvvvvzt);
	}
	else if (!isSet(gettype_vvvvvzt))
	{
		var gettype_vvvvvzt = [];
	}
	var gettype = gettype_vvvvvzt.some(gettype_vvvvvzt_SomeFunc);


	// set this function logic
	if (add_php_before_getitems && gettype)
	{
		jQuery('#jform_php_before_getitems-lbl').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_php_before_getitems-lbl').closest('.control-group').hide();
	}
}

// the vvvvvzt Some function
function add_php_before_getitems_vvvvvzt_SomeFunc(add_php_before_getitems_vvvvvzt)
{
	// set the function logic
	if (add_php_before_getitems_vvvvvzt == 1)
	{
		return true;
	}
	return false;
}

// the vvvvvzt Some function
function gettype_vvvvvzt_SomeFunc(gettype_vvvvvzt)
{
	// set the function logic
	if (gettype_vvvvvzt == 2 || gettype_vvvvvzt == 4)
	{
		return true;
	}
	return false;
}

// the vvvvvzu function
function vvvvvzu(add_php_after_getitems_vvvvvzu,gettype_vvvvvzu)
{
	if (isSet(add_php_after_getitems_vvvvvzu) && add_php_after_getitems_vvvvvzu.constructor !== Array)
	{
		var temp_vvvvvzu = add_php_after_getitems_vvvvvzu;
		var add_php_after_getitems_vvvvvzu = [];
		add_php_after_getitems_vvvvvzu.push(temp_vvvvvzu);
	}
	else if (!isSet(add_php_after_getitems_vvvvvzu))
	{
		var add_php_after_getitems_vvvvvzu = [];
	}
	var add_php_after_getitems = add_php_after_getitems_vvvvvzu.some(add_php_after_getitems_vvvvvzu_SomeFunc);

	if (isSet(gettype_vvvvvzu) && gettype_vvvvvzu.constructor !== Array)
	{
		var temp_vvvvvzu = gettype_vvvvvzu;
		var gettype_vvvvvzu = [];
		gettype_vvvvvzu.push(temp_vvvvvzu);
	}
	else if (!isSet(gettype_vvvvvzu))
	{
		var gettype_vvvvvzu = [];
	}
	var gettype = gettype_vvvvvzu.some(gettype_vvvvvzu_SomeFunc);


	// set this function logic
	if (add_php_after_getitems && gettype)
	{
		jQuery('#jform_php_after_getitems-lbl').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_php_after_getitems-lbl').closest('.control-group').hide();
	}
}

// the vvvvvzu Some function
function add_php_after_getitems_vvvvvzu_SomeFunc(add_php_after_getitems_vvvvvzu)
{
	// set the function logic
	if (add_php_after_getitems_vvvvvzu == 1)
	{
		return true;
	}
	return false;
}

// the vvvvvzu Some function
function gettype_vvvvvzu_SomeFunc(gettype_vvvvvzu)
{
	// set the function logic
	if (gettype_vvvvvzu == 2 || gettype_vvvvvzu == 4)
	{
		return true;
	}
	return false;
}

// the vvvvvzw function
function vvvvvzw(gettype_vvvvvzw)
{
	if (isSet(gettype_vvvvvzw) && gettype_vvvvvzw.constructor !== Array)
	{
		var temp_vvvvvzw = gettype_vvvvvzw;
		var gettype_vvvvvzw = [];
		gettype_vvvvvzw.push(temp_vvvvvzw);
	}
	else if (!isSet(gettype_vvvvvzw))
	{
		var gettype_vvvvvzw = [];
	}
	var gettype = gettype_vvvvvzw.some(gettype_vvvvvzw_SomeFunc);


	// set this function logic
	if (gettype)
	{
		jQuery('#jform_add_php_after_getitems').closest('.control-group').show();
		// add required attribute to add_php_after_getitems field
		if (jform_vvvvvzwvwh_required)
		{
			updateFieldRequired('add_php_after_getitems',0);
			jQuery('#jform_add_php_after_getitems').prop('required','required');
			jQuery('#jform_add_php_after_getitems').attr('aria-required',true);
			jQuery('#jform_add_php_after_getitems').addClass('required');
			jform_vvvvvzwvwh_required = false;
		}
		jQuery('#jform_add_php_before_getitems').closest('.control-group').show();
		// add required attribute to add_php_before_getitems field
		if (jform_vvvvvzwvwi_required)
		{
			updateFieldRequired('add_php_before_getitems',0);
			jQuery('#jform_add_php_before_getitems').prop('required','required');
			jQuery('#jform_add_php_before_getitems').attr('aria-required',true);
			jQuery('#jform_add_php_before_getitems').addClass('required');
			jform_vvvvvzwvwi_required = false;
		}
		jQuery('#jform_add_php_getlistquery').closest('.control-group').show();
		// add required attribute to add_php_getlistquery field
		if (jform_vvvvvzwvwj_required)
		{
			updateFieldRequired('add_php_getlistquery',0);
			jQuery('#jform_add_php_getlistquery').prop('required','required');
			jQuery('#jform_add_php_getlistquery').attr('aria-required',true);
			jQuery('#jform_add_php_getlistquery').addClass('required');
			jform_vvvvvzwvwj_required = false;
		}
	}
	else
	{
		jQuery('#jform_add_php_after_getitems').closest('.control-group').hide();
		// remove required attribute from add_php_after_getitems field
		if (!jform_vvvvvzwvwh_required)
		{
			updateFieldRequired('add_php_after_getitems',1);
			jQuery('#jform_add_php_after_getitems').removeAttr('required');
			jQuery('#jform_add_php_after_getitems').removeAttr('aria-required');
			jQuery('#jform_add_php_after_getitems').removeClass('required');
			jform_vvvvvzwvwh_required = true;
		}
		jQuery('#jform_add_php_before_getitems').closest('.control-group').hide();
		// remove required attribute from add_php_before_getitems field
		if (!jform_vvvvvzwvwi_required)
		{
			updateFieldRequired('add_php_before_getitems',1);
			jQuery('#jform_add_php_before_getitems').removeAttr('required');
			jQuery('#jform_add_php_before_getitems').removeAttr('aria-required');
			jQuery('#jform_add_php_before_getitems').removeClass('required');
			jform_vvvvvzwvwi_required = true;
		}
		jQuery('#jform_add_php_getlistquery').closest('.control-group').hide();
		// remove required attribute from add_php_getlistquery field
		if (!jform_vvvvvzwvwj_required)
		{
			updateFieldRequired('add_php_getlistquery',1);
			jQuery('#jform_add_php_getlistquery').removeAttr('required');
			jQuery('#jform_add_php_getlistquery').removeAttr('aria-required');
			jQuery('#jform_add_php_getlistquery').removeClass('required');
			jform_vvvvvzwvwj_required = true;
		}
	}
}

// the vvvvvzw Some function
function gettype_vvvvvzw_SomeFunc(gettype_vvvvvzw)
{
	// set the function logic
	if (gettype_vvvvvzw == 2 || gettype_vvvvvzw == 4)
	{
		return true;
	}
	return false;
}

// the vvvvvzx function
function vvvvvzx(gettype_vvvvvzx)
{
	if (isSet(gettype_vvvvvzx) && gettype_vvvvvzx.constructor !== Array)
	{
		var temp_vvvvvzx = gettype_vvvvvzx;
		var gettype_vvvvvzx = [];
		gettype_vvvvvzx.push(temp_vvvvvzx);
	}
	else if (!isSet(gettype_vvvvvzx))
	{
		var gettype_vvvvvzx = [];
	}
	var gettype = gettype_vvvvvzx.some(gettype_vvvvvzx_SomeFunc);


	// set this function logic
	if (gettype)
	{
		jQuery('#jform_pagination').closest('.control-group').show();
		// add required attribute to pagination field
		if (jform_vvvvvzxvwk_required)
		{
			updateFieldRequired('pagination',0);
			jQuery('#jform_pagination').prop('required','required');
			jQuery('#jform_pagination').attr('aria-required',true);
			jQuery('#jform_pagination').addClass('required');
			jform_vvvvvzxvwk_required = false;
		}
	}
	else
	{
		jQuery('#jform_pagination').closest('.control-group').hide();
		// remove required attribute from pagination field
		if (!jform_vvvvvzxvwk_required)
		{
			updateFieldRequired('pagination',1);
			jQuery('#jform_pagination').removeAttr('required');
			jQuery('#jform_pagination').removeAttr('aria-required');
			jQuery('#jform_pagination').removeClass('required');
			jform_vvvvvzxvwk_required = true;
		}
	}
}

// the vvvvvzx Some function
function gettype_vvvvvzx_SomeFunc(gettype_vvvvvzx)
{
	// set the function logic
	if (gettype_vvvvvzx == 2)
	{
		return true;
	}
	return false;
}

// the vvvvvzy function
function vvvvvzy(gettype_vvvvvzy)
{
	if (isSet(gettype_vvvvvzy) && gettype_vvvvvzy.constructor !== Array)
	{
		var temp_vvvvvzy = gettype_vvvvvzy;
		var gettype_vvvvvzy = [];
		gettype_vvvvvzy.push(temp_vvvvvzy);
	}
	else if (!isSet(gettype_vvvvvzy))
	{
		var gettype_vvvvvzy = [];
	}
	var gettype = gettype_vvvvvzy.some(gettype_vvvvvzy_SomeFunc);


	// set this function logic
	if (gettype)
	{
		jQuery('#jform_add_php_router_parse').closest('.control-group').show();
		// add required attribute to add_php_router_parse field
		if (jform_vvvvvzyvwl_required)
		{
			updateFieldRequired('add_php_router_parse',0);
			jQuery('#jform_add_php_router_parse').prop('required','required');
			jQuery('#jform_add_php_router_parse').attr('aria-required',true);
			jQuery('#jform_add_php_router_parse').addClass('required');
			jform_vvvvvzyvwl_required = false;
		}
	}
	else
	{
		jQuery('#jform_add_php_router_parse').closest('.control-group').hide();
		// remove required attribute from add_php_router_parse field
		if (!jform_vvvvvzyvwl_required)
		{
			updateFieldRequired('add_php_router_parse',1);
			jQuery('#jform_add_php_router_parse').removeAttr('required');
			jQuery('#jform_add_php_router_parse').removeAttr('aria-required');
			jQuery('#jform_add_php_router_parse').removeClass('required');
			jform_vvvvvzyvwl_required = true;
		}
	}
}

// the vvvvvzy Some function
function gettype_vvvvvzy_SomeFunc(gettype_vvvvvzy)
{
	// set the function logic
	if (gettype_vvvvvzy == 1 || gettype_vvvvvzy == 2)
	{
		return true;
	}
	return false;
}

// the vvvvvzz function
function vvvvvzz(gettype_vvvvvzz,add_php_router_parse_vvvvvzz)
{
	if (isSet(gettype_vvvvvzz) && gettype_vvvvvzz.constructor !== Array)
	{
		var temp_vvvvvzz = gettype_vvvvvzz;
		var gettype_vvvvvzz = [];
		gettype_vvvvvzz.push(temp_vvvvvzz);
	}
	else if (!isSet(gettype_vvvvvzz))
	{
		var gettype_vvvvvzz = [];
	}
	var gettype = gettype_vvvvvzz.some(gettype_vvvvvzz_SomeFunc);

	if (isSet(add_php_router_parse_vvvvvzz) && add_php_router_parse_vvvvvzz.constructor !== Array)
	{
		var temp_vvvvvzz = add_php_router_parse_vvvvvzz;
		var add_php_router_parse_vvvvvzz = [];
		add_php_router_parse_vvvvvzz.push(temp_vvvvvzz);
	}
	else if (!isSet(add_php_router_parse_vvvvvzz))
	{
		var add_php_router_parse_vvvvvzz = [];
	}
	var add_php_router_parse = add_php_router_parse_vvvvvzz.some(add_php_router_parse_vvvvvzz_SomeFunc);


	// set this function logic
	if (gettype && add_php_router_parse)
	{
		jQuery('#jform_php_router_parse').closest('.control-group').show();
		// add required attribute to php_router_parse field
		if (jform_vvvvvzzvwm_required)
		{
			updateFieldRequired('php_router_parse',0);
			jQuery('#jform_php_router_parse').prop('required','required');
			jQuery('#jform_php_router_parse').attr('aria-required',true);
			jQuery('#jform_php_router_parse').addClass('required');
			jform_vvvvvzzvwm_required = false;
		}
	}
	else
	{
		jQuery('#jform_php_router_parse').closest('.control-group').hide();
		// remove required attribute from php_router_parse field
		if (!jform_vvvvvzzvwm_required)
		{
			updateFieldRequired('php_router_parse',1);
			jQuery('#jform_php_router_parse').removeAttr('required');
			jQuery('#jform_php_router_parse').removeAttr('aria-required');
			jQuery('#jform_php_router_parse').removeClass('required');
			jform_vvvvvzzvwm_required = true;
		}
	}
}

// the vvvvvzz Some function
function gettype_vvvvvzz_SomeFunc(gettype_vvvvvzz)
{
	// set the function logic
	if (gettype_vvvvvzz == 1 || gettype_vvvvvzz == 2)
	{
		return true;
	}
	return false;
}

// the vvvvvzz Some function
function add_php_router_parse_vvvvvzz_SomeFunc(add_php_router_parse_vvvvvzz)
{
	// set the function logic
	if (add_php_router_parse_vvvvvzz == 1)
	{
		return true;
	}
	return false;
}

// the vvvvwab function
function vvvvwab(gettype_vvvvwab)
{
	if (isSet(gettype_vvvvwab) && gettype_vvvvwab.constructor !== Array)
	{
		var temp_vvvvwab = gettype_vvvvwab;
		var gettype_vvvvwab = [];
		gettype_vvvvwab.push(temp_vvvvwab);
	}
	else if (!isSet(gettype_vvvvwab))
	{
		var gettype_vvvvwab = [];
	}
	var gettype = gettype_vvvvwab.some(gettype_vvvvwab_SomeFunc);


	// set this function logic
	if (gettype)
	{
		jQuery('#jform_plugin_events').closest('.control-group').show();
	}
	else
	{
		jQuery('#jform_plugin_events').closest('.control-group').hide();
	}
}

// the vvvvwab Some function
function gettype_vvvvwab_SomeFunc(gettype_vvvvwab)
{
	// set the function logic
	if (gettype_vvvvwab == 1)
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


/* ======================================================================== *\
   ComponentBuilder – Sub‑form helpers
   Fully production‑ready, ESLint‑clean, duplicate‑ID safe
\* ======================================================================== */
(function () {
	'use strict';

	/* --------------------------------------------------------------------- *
	 |  Configuration helpers                                                |
	 * --------------------------------------------------------------------- */

	/**
	 * Return the Joomla‑router URL for the given AJAX task.
	 * Falls back to a raw path if JRouter() is not defined.
	 *
	 * @param  {string} task e.g. "ajax.viewTableColumns"
	 * @return {string}
	 */
	function route(task) {
		const url = `index.php?option=com_componentbuilder&task=${task}&format=json&raw=true`;
		return typeof window.JRouter === 'function' ? window.JRouter(url) : url;
	}

	/**
	 * CSRF token (expects a global `token` variable).
	 */
	const csrf = window.token ?? Joomla.getOptions('csrf.token');

	/* --------------------------------------------------------------------- *
	 |  Generic server fetcher                                               |
	 * --------------------------------------------------------------------- */

	/**
	 * Fetch column data for either a *view* or a *db* table.
	 *
	 * @param {"view"|"db"} type
	 * @param {string} idOrName   View → GUID, DB → table name
	 * @param {string} asKey      Alias key (usually "a")
	 * @param {number} rowType    1‑based row‑type index
	 * @return {Promise<any>}     JSON payload (resolved) or thrown Error
	 */
	function fetchColumns(type, idOrName, asKey, rowType) {
		if (!csrf || !idOrName || !asKey) {
			return Promise.reject(
				new Error('[fetchColumns] Missing CSRF token, alias or identifier')
			);
		}

		const task      = type === 'view' ? 'ajax.viewTableColumns' : 'ajax.dbTableColumns';
		const paramName = type === 'view' ? 'id' : 'name';
		const url       = `${route(task)}&${csrf}=1&as=${asKey}&type=${rowType}&${paramName}=${encodeURIComponent(idOrName)}`;

		return fetch(url, { method: 'GET' })
			.then(r => r.json());
	}

	/* --------------------------------------------------------------------- *
	 |  UI utilities                                                         |
	 * --------------------------------------------------------------------- */

	/**
	 * Safely fetch the radio value for “select all / custom”.
	 * @return {number} 1 → select all, 0 → custom
	 */
	function currentSelectAll() {
		const radio = /** @type {HTMLInputElement|null} */ (
			document.querySelector('#jform_select_all input[type="radio"]:checked')
		);
		return radio ? Number(radio.value) : 0;
	}

	/**
	 * Update the selection `<textarea>` (main or sub‑row) with new data.
	 *
	 * @param {string|false} data
	 * @param {"view"|"db"}  type
	 * @param {string|number} key      Field index inside the row
	 * @param {boolean}      main      TRUE → main selection textarea
	 * @param {number|string} table_   Join‑table index (sub‑rows)
	 * @param {number|string} nr_      Clone suffix (sub‑rows)
	 */
	function loadSelectionData(data, type, key, main, table_, nr_) {
		let selector;
		if (main) {
			selector = `textarea#jform_${key}_selection`;
		} else {
			selector = `textarea#jform_join_${type}_table${table_}_join_${type}_table${key}${nr_}_selection`;
		}

		const textarea = /** @type {HTMLTextAreaElement|null} */ (document.querySelector(selector));
		if (!textarea) {
			console.warn('[loadSelectionData] Textarea not found:', selector);
			return;
		}
		textarea.value = data || '';
	}

	/* --------------------------------------------------------------------- *
	 |  Public helpers (exposed via window.*)                                |
	 * --------------------------------------------------------------------- */

	/**
	 * Handle the “Select all / Custom select” radio buttons.
	 *
	 * @param {number} selectAll 1 → select all, 0 → custom
	 */
	function setSelectAll(selectAll) {
		const mainSource = Number(document.getElementById('jform_main_source')?.value ?? 0);
		const key        = mainSource === 1 ? 'view' : mainSource === 2 ? 'db' : null;
		if (!key) return;

		const textarea  = document.getElementById(`jform_${key}_selection`);
		if (!textarea) return;

		if (selectAll === 1) {
			textarea.value    = 'a.*';
			textarea.readOnly = true;
		} else {
			textarea.readOnly = false;

			/* Trigger a fresh column fetch so the user sees all fields. */
			if (key === 'view') {
				const guid = /** @type {HTMLInputElement} */ (
					document.getElementById('jform_view_table_main_id')
				)?.value;
				if (guid) {
					getViewTableColumns(guid, 'a', key, 3, true, '', '');
				}
			} else {
				const name = /** @type {HTMLSelectElement} */ (
					document.getElementById('jform_db_table_main')
				)?.value;
				if (name) {
					getDbTableColumns(name, 'a', key, 3, true, '', '');
				}
			}
		}
	}

	/**
	 * Wrapper around `fetchColumns("view", …)` that keeps the original
	 * call‑signature (`id, asKey, key, rowType, main, table_, nr_`).
	 */
	function getViewTableColumns(id, asKey, key, rowType, main, table_, nr_) {
		if (main && currentSelectAll() === 1) {
			setSelectAll(1);
			return;
		}
		fetchColumns('view', id, asKey, rowType)
			.then(res => {
				if (res?.error) {
					console.error(res.error);
					loadSelectionData(false, 'view', key, main, table_, nr_);
				} else {
					loadSelectionData(res, 'view', key, main, table_, nr_);
				}
			})
			.catch(err => {
				console.error(err);
				loadSelectionData(false, 'view', key, main, table_, nr_);
			});
	}

	/**
	 * Wrapper around `fetchColumns("db", …)` that keeps the original
	 * call‑signature (`name, asKey, key, rowType, main, table_, nr_`).
	 */
	function getDbTableColumns(name, asKey, key, rowType, main, table_, nr_) {
		if (main && currentSelectAll() === 1) {
			setSelectAll(1);
			return;
		}
		fetchColumns('db', name, asKey, rowType)
			.then(res => {
				if (res?.error) {
					console.error(res.error);
					loadSelectionData(false, 'db', key, main, table_, nr_);
				} else {
					loadSelectionData(res, 'db', key, main, table_, nr_);
				}
			})
			.catch(err => {
				console.error(err);
				loadSelectionData(false, 'db', key, main, table_, nr_);
			});
	}

	/* --------------------------------------------------------------------- *
	 |  updateSubItems – duplicate‑ID safe handler                           |
	 * --------------------------------------------------------------------- */

	/**
	 * Attach duplicate‑ID‑safe, delegated change handling to a sub‑form row.
	 *
	 * @param {string} fieldName "view" | "db"
	 * @param {number} fieldNr   Row‑field index
	 * @param {number} table_    Join‑table index
	 * @param {number} nr_       Clone suffix
	 */
	function updateSubItems(fieldName, fieldNr, table_, nr_) {

		/* Build selectors (works for hidden input, text input, select). */
		const base = `jform_join_${fieldName}_table${table_}_join_${fieldName}_table${fieldNr}${nr_}`;
		const sel  = {
			tableId : `#${base}_${fieldName}_table_id`, // hidden <input>
			table   : `#${base}_${fieldName}_table`,    // <select> OR dup. inputs
			alias   : `#${base}_as`,
			rowType : `#${base}_row_type`,
		};

		const adminForm = document.getElementById('adminForm');
		if (!adminForm) {
			console.error('[updateSubItems] #adminForm not found.');
			return;
		}

		/* Guard: avoid rebinding the same row. */
		if (adminForm.dataset[`boundFor${base}`]) return;
		adminForm.dataset[`boundFor${base}`] = 'true';

		const tableSelectors = fieldName === 'view'
			? [sel.tableId, sel.table]
			: [sel.table];

		const delegateSelectors = [
			...tableSelectors, sel.alias, sel.rowType,
		].join(', ');

		adminForm.addEventListener('change', handleChange);

		/* --- Delegated change handler ----------------------------------- */
		function handleChange(e) {
			if (!e.target.matches(delegateSelectors)) return;
			e.preventDefault();

			const tableEl   = pickElement(tableSelectors);
			const aliasEl   = pickElement(sel.alias);
			const rowTypeEl = pickElement(sel.rowType);

			if (!tableEl || !aliasEl || !rowTypeEl) return;

			const tableVal   = getElementValue(tableEl);
			const aliasVal   = getElementValue(aliasEl);
			const rowTypeVal = getElementValue(rowTypeEl);

			if (fieldName === 'view') {
				getViewTableColumns(
					tableVal, aliasVal, fieldNr, rowTypeVal, false, table_, nr_
				);
			} else {
				getDbTableColumns(
					tableVal, aliasVal, fieldNr, rowTypeVal, false, table_, nr_
				);
			}
		}

		/* --- Helper: choose the correct node among duplicated IDs -------- */
		function pickElement(selectors) {
			const nodes = [...[].concat(selectors).flatMap(
				sel => [...document.querySelectorAll(sel)]
			)];
			if (!nodes.length) return null;
			if (nodes.length === 1) return nodes[0];

			/* 1️⃣ Prefer hidden input with GUID length 38. */
			for (const n of nodes) {
				if (isHidden(n) && getElementValue(n).length === 38) return n;
			}
			/* 2️⃣ Any hidden input with non‑empty value. */
			for (const n of nodes) {
				if (isHidden(n) && getElementValue(n)) return n;
			}
			/* 3️⃣ Fallback: newest element (last in DOM order). */
			return nodes[nodes.length - 1];
		}

		function isHidden(el) {
			return el.tagName === 'INPUT' && el.type === 'hidden';
		}

		function getElementValue(el) {
			if (isHidden(el)) return el.value;
			if (el.tagName === 'SELECT') {
				const s = /** @type {HTMLSelectElement} */ (el);
				return s.selectedIndex >= 0 ? s.options[s.selectedIndex].value : '';
			}
			return '';
		}
	}

	/* --------------------------------------------------------------------- *
	 |  Expose public helpers                                                |
	 * --------------------------------------------------------------------- */
	window.setSelectAll          = setSelectAll;
	window.getViewTableColumns   = getViewTableColumns;
	window.getDbTableColumns     = getDbTableColumns;
	window.loadSelectionData     = loadSelectionData;
	window.updateSubItems        = updateSubItems;
})();

document.addEventListener('DOMContentLoaded', function() {
	// get the linked details
	getLinked();
	let valueSwitch = document.querySelector("#jform_add_php_router_parse input[type='radio']:checked").value;
	getDynamicScripts(valueSwitch);
	// check and load all the custom code edit buttons
	getEditCustomCodeButtons();
});

function getDynamicScripts(id) {
	if (id == 1) {
		// get the current values
		let current_router_parse = document.querySelector('textarea#jform_php_router_parse').value;
		// set the router parse method script
		if (current_router_parse.length == 0) {
			getCodeFrom_server(1, 'routerparse', 'type', 'getDynamicScripts').then(function(result) {
				if (result.error) {
					console.error(result.error);
				} else if (result) {
					document.querySelector('textarea#jform_php_router_parse').value = result;
				}
			});
		}
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

function getLinked() {
	getCodeFrom_server(1, 'type', 'type', 'getLinked').then(function(result) {
		if (result.error) {
			console.error(result.error);
		} else if (result) {
			document.getElementById('display_linked_to').innerHTML = result;
		}
	});
}
