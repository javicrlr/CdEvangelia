<script type="text/javascript">
	function iconfirtselectright(id_select_a){
		var value_a = id_select_a.value;
		value_id = id_select_a.id;
		position_b = document.getElementById("position_b" + value_id);
		position_c = document.getElementById("position_c" + value_id);
		position_d = document.getElementById("position_d" + value_id);
		var text_b = '';
		position_b.innerHTML = text_b;
		text_b += '<select class="selectdismode" onchange="iconsecondselectright(this.value)">';
		text_b += '<option value=""><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONCONF_LABEL') ?></option>';
		if (value_a == 0){
			text_b += '<option value="0"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONLIGHT_LABEL') ?></option>';
			text_b += '<option value="1"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONDARK_LABEL') ?></option>';
		}
		if (value_a == 1){
			text_b += '<option value="2"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONLIGHT_LABEL') ?></option>';
			text_b += '<option value="3"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONDARK_LABEL') ?></option>';
		}
		text_b +='</select>';
		position_b.innerHTML = text_b;
		position_c.innerHTML = '';
		document.getElementById('id_select' + value_id).value = '';
		document.getElementById('id_select' + value_id).value = value_a;
	}
	function iconsecondselectright(id_select_b){
		var text_c = '';
		position_c.innerHTML = text_c;
		text_c += '<select class="selectdismode" onchange="iconthirdselectright(this.value)">';
		text_c += '<option value=""><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECT_LABEL') ?></option>';
		if (id_select_b == 0){
			text_c += '<option value="searchiconlightright.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTSEARCHLIGHT_LABEL') ?></option>';
			text_c += '<option value="binocularsiconlightright.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTBINOCULARSLIGHT_LABEL') ?></option>';
		}
		if (id_select_b  == 1){
			text_c += '<option value="searchicondarkright.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTSEARCHDARK_LABEL') ?></option>';
			text_c += '<option value="binocularsicondarkright.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTBINOCULARSDARK_LABEL') ?></option>';
		}
		if (id_select_b == 2){
			text_c += '<option value="calliconlight.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTCALLLIGHT_LABEL') ?></option>';
			text_c += '<option value="arrobaiconlight.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTARROBALIGHT_LABEL') ?></option>';
			text_c += '<option value="tooliconlight.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTTOOLLIGHT_LABEL') ?></option>';
			text_c += '<option value="peniconlight.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTPENLIGHT_LABEL') ?></option>';
			text_c += '<option value="searchiconlight.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTSEARCHLIGHT_LABEL') ?></option>';
			text_c += '<option value="binocularsiconlight.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTBINOCULARSLIGHT_LABEL') ?></option>';
		}
		if (id_select_b  == 3){
			text_c += '<option value="callicondark.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTCALLDARK_LABEL') ?></option>';
			text_c += '<option value="arrobaicondark.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTARROBADARK_LABEL') ?></option>';
			text_c += '<option value="toolicondark.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTTOOLDARK_LABEL') ?></option>';
			text_c += '<option value="penicondark.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTPENDARK_LABEL') ?></option>';
			text_c += '<option value="searchicondark.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTSEARCHDARK_LABEL') ?></option>';
			text_c += '<option value="binocularsicondark.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTBINOCULARSDARK_LABEL') ?></option>';
		}
		text_c +='</select>';
		position_c.innerHTML = text_c;
		document.getElementById('id_select' + value_id).value = '';
		document.getElementById('id_select' + value_id).value = id_select_b;	
	}
	function iconthirdselectright(id_select_c){
		document.getElementById('id_select' + value_id).value = '';
		document.getElementById('id_select' + value_id).value = id_select_c;
	}
</script>
<?php
defined('_JEXEC') or die;
jimport('joomla.form.formfield');
$doc =& JFactory::getDocument();
class JFormFieldIconselectright extends JFormField {
	protected $type = 'Iconselectright';
	public function getInput() {
		return '<input id="id_select'.$this->id.'" type="text" name="'.$this->name.'"  value="'.$this->value.'">'.
		'<select id="'.$this->id.'" class="selectdismode" onchange="iconfirtselectright(this)">'.
		'<option value="">' . JText::_('TPL_CDEVANGELIA_CDSELECTICONCONF_LABEL') . '</option>'.
		'<option value="0">' . JText::_('TPL_CDEVANGELIA_CDSELECTICONSEARCH_LABEL') . '</option>'.
		'<option value="1">' . JText::_('TPL_CDEVANGELIA_CDSELECTICONOTHER_LABEL') . '</option>'.
		'</select>'.
		'<div id="position_b'.$this->id.'"></div>'.
		'<div id="position_c'.$this->id.'"></div>';
	}
}
