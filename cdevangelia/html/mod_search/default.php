<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$params = JFactory::getApplication()->getTemplate(true)->params;
$cdiconsearchright = $params->get('iconrightfixed');
$cdiconsearchwidthright = $params->get('cdrighticonwidth');
?>
<div class="search<?php echo $moduleclass_sfx ?>">
	<form action="<?php echo JRoute::_('index.php');?>" method="post" class="form-inline navbar-form navbar-left" role="search">
	<div class="form-group">
	<?php
	$output = '<div id="search-toggle" class="search-toggle hidden-medium"><input name="searchword" id="mod-search-searchword" maxlength="' . $maxlength . '"  class="inputbox search-query form-control" type="text" size="' . $width . '" value="' . $text . '"  onblur="if (this.value==\'\') this.value=\'' . $text . '\';" onfocus="if (this.value==\'' . $text . '\') this.value=\'\';" /><button type="image" value="" class="icon-search"  onclick="this.form.searchword.focus();"><img src="/templates/cdevangelia/images/'.$cdiconsearchright.'" width="'.$cdiconsearchwidthright.'" height="auto" alt="image" border="0" /></buttom></div>';
				if ($button) :
				if ($imagebutton) :
				$btn_output = ' <button type="image" value="" id="cdsearch" class="button btn btn-default"  onclick="this.form.searchword.focus();"></buttom>';
				else :
				$btn_output = ' <button class="button btn btn-primary" onclick="this.form.searchword.focus();">' . $button_text . '</button>';
				endif;
				switch ($button_pos) :
					case 'top' :
						$output = $btn_output . '<br />' . $output;
						break;
					case 'bottom' :
						$output .= '<br />' . $btn_output;
						break;
					case 'right' :
						$output .= $btn_output;
						break;
					case 'left' :
					default :
						$output = $btn_output . $output;
						break;
				endswitch;
			endif;
			echo $output;
		?>
		<input type="hidden" name="task" value="search" />
		<input type="hidden" name="option" value="com_search" />
		<input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>" />
        </div>
	</form>
</div>
