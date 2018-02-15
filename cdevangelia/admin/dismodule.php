<script type="text/javascript">
	function columnsshowmodulesa(id_select_a){
		var value_a = id_select_a.value;
		value_id = id_select_a.id;
		position_b = document.getElementById("position_b" + value_id);
		position_c = document.getElementById("position_c" + value_id);
		position_d = document.getElementById("position_d" + value_id);
		var text_b = '';
		position_b.innerHTML = text_b;
		text_b += '<select class="selectdismode" onchange="columnsshowmodulesb(this.value)">';
		text_b += '<option value=""><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS_LABEL') ?></option>';
		column_a = value_a.slice(1); 
		column_select_a = parseInt(column_a);
		var diferencia_select_a = 12 - column_select_a; 
		for (i=0 ; i <= diferencia_select_a; i++){
			text_b += '<option value="' + value_a + '-b' + i +'">' + i + ' <?php echo JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNSNAME_LABEL') ?></option>';
		}
		text_b +='</select>';
		position_b.innerHTML = text_b;
		position_c.innerHTML = '';
		position_d.innerHTML = '';
		document.getElementById('id_select' + value_id).value = '';
		document.getElementById('id_select' + value_id).value = value_a;
	}
	function columnsshowmodulesb(id_select_b){
		var text_c = '';
		position_c.innerHTML = text_c;
		text_c += '<select class="selectdismode" onchange="columnsshowmodulesc(this.value)">';
		text_c += '<option value=""><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS_LABEL') ?></option>';
		column_b = id_select_b.slice(4); 
		column_select_b = parseInt(column_b);
		var diferencia_select_b = 12 - (column_select_b + column_select_a); 
		for (i=0 ; i <= diferencia_select_b; i++){
			text_c += '<option value="'+ id_select_b + '-c'+ i +'">' + i + ' <?php echo JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNSNAME_LABEL') ?></option>';
		}
		text_c +='</select>';
		position_c.innerHTML = text_c;
		position_d.innerHTML = '';
		document.getElementById('id_select' + value_id).value = '';
		document.getElementById('id_select' + value_id).value = id_select_b;
	}
	function columnsshowmodulesc(id_select_c){
		var text_d = '';
		position_d.innerHTML = text_d;
		text_d += '<select class="selectdismode" onchange="columnsshowmodulesd(this.value)">';
		text_d += '<option value=""><?php echo JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS_LABEL') ?></option>';
		column_c = id_select_c.slice(7); 
		column_select_c = parseInt(column_c);
		var diferencia_select_c = 12 - (column_select_c + column_select_b + column_select_a);  
		for (i=0 ; i <= diferencia_select_c; i++){
			text_d += '<option value="' + id_select_c + '-d' + i +'">' + i + ' <?php echo JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNSNAME_LABEL') ?></option>';
		}
		text_d +='</select>';
		position_d.innerHTML = text_d;
		document.getElementById('id_select' + value_id).value = '';
		document.getElementById('id_select' + value_id).value = id_select_c;
	}
	function columnsshowmodulesd(id_select_d){
		column_d = id_select_d.slice(10);
		column_select_d = parseInt(column_d);
		document.getElementById('id_select' + value_id).value = '';
		document.getElementById('id_select' + value_id).value = id_select_d;
	}
</script>
<?php
defined('_JEXEC') or die;
jimport('joomla.form.formfield');
$doc =& JFactory::getDocument();
class JFormFieldDismodule extends JFormField {
	protected $type = 'Dismodule';
	public function getInput() {
		return '<input id="id_select'.$this->id.'" type="text" name="'.$this->name.'"  value="'.$this->value.'">'.
		'<select id="'.$this->id.'" class="selectdismode" onchange="columnsshowmodulesa(this)">'.
		'<option value="">' . JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS_LABEL') . '</option>'.
		'<option value="a0">' . JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS0_LABEL') . '</option>'.
		'<option value="a1">' . JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS1_LABEL') . '</option>'.
		'<option value="a2">' . JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS2_LABEL') . '</option>'.
		'<option value="a3">' . JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS3_LABEL') . '</option>'.
		'<option value="a4">' . JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS4_LABEL') . '</option>'.
		'<option value="a5">' . JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS5_LABEL') . '</option>'.
		'<option value="a6">' . JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS6_LABEL') . '</option>'.
		'<option value="a7">' . JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS7_LABEL') . '</option>'.
		'<option value="a8">' . JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS8_LABEL') . '</option>'.
		'<option value="a9">' . JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS9_LABEL') . '</option>'.
		'<option value="a10">' . JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS10_LABEL') . '</option>'.
		'<option value="a11">' . JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS11_LABEL') . '</option>'.
		'<option value="a12">' . JText::_('TPL_CDEVANGELIA_CDSELECTCOLUMNS12_LABEL') . '</option>'.
		'</select>'.
		'<div id="position_b'.$this->id.'"></div>'.
		'<div id="position_c'.$this->id.'"></div>'.
		'<div id="position_d'.$this->id.'"></div>';
	}
}