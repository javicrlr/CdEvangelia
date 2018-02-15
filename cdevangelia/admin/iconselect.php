<script type="text/javascript">
	function iconfirtselect(id_select_a){
		var value_a = id_select_a.value;
		value_id = id_select_a.id;
		position_b = document.getElementById("position_b" + value_id);
		var text_b = '';
		position_b.innerHTML = text_b;
		text_b += '<select class="selectdismode" onchange="iconsecondselect(this.value)">';
		text_b += '<option value=""><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECT_LABEL') ?></option>';
		if (value_a == 0){
			text_b += '<option value="calliconlight.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTCALLLIGHT_LABEL') ?></option>';
			text_b += '<option value="arrobaiconlight.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTARROBALIGHT_LABEL') ?></option>';
			text_b += '<option value="tooliconlight.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTTOOLLIGHT_LABEL') ?></option>';
			text_b += '<option value="peniconlight.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTPENLIGHT_LABEL') ?></option>';
			text_b += '<option value="searchiconlight.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTSEARCHLIGHT_LABEL') ?></option>';
		}
		if (value_a == 1){
			text_b += '<option value="callicondark.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTCALLDARK_LABEL') ?></option>';
			text_b += '<option value="arrobaicondark.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTARROBADARK_LABEL') ?></option>';
			text_b += '<option value="toolicondark.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTTOOLDARK_LABEL') ?></option>';
			text_b += '<option value="penicondark.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTPENDARK_LABEL') ?></option>';
			text_b += '<option value="searchicondark.png"><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTICONSELECTSEARCHDARK_LABEL') ?></option>';
		}
		text_b +='</select>';
		position_b.innerHTML = text_b;
		document.getElementById('id_select' + value_id).value = '';
	}
	function iconsecondselect(id_select_b){
		document.getElementById('id_select' + value_id).value = '';
		document.getElementById('id_select' + value_id).value = id_select_b;
	}
</script>
<?php
defined('_JEXEC') or die;
jimport('joomla.form.formfield');
$doc =& JFactory::getDocument();
class JFormFieldIconselect extends JFormField {
	protected $type = 'Iconselect';
	public function getInput() {
		return '<input id="id_select'.$this->id.'" type="text" name="'.$this->name.'"  value="'.$this->value.'">'.
		'<select id="'.$this->id.'" class="selectdismode" onchange="iconfirtselect(this)">'.
		'<option value="">' . JText::_('TPL_CDEVANGELIA_CDSELECTICONCONF_LABEL') . '</option>'.
		'<option value="0">' . JText::_('TPL_CDEVANGELIA_CDSELECTICONLIGHT_LABEL') . '</option>'.
		'<option value="1">' . JText::_('TPL_CDEVANGELIA_CDSELECTICONDARK_LABEL') . '</option>'.
		'</select>'.
		'<div id="position_b'.$this->id.'"></div>';
	}
}
