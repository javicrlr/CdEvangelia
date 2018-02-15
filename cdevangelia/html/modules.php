<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2014 Javier Cruz Lora, LLC
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

defined('_JEXEC') or die;
function modChrome_cddefault($module, &$params, &$attribs) {
	if (!empty ($module->content)) : ?>
		<?php
        	$cdsuffix = $params->get('moduleclass_sfx');
        ?>
        <div class="cd-module-default <?php if ($cdsuffix!='') : ?><?php echo $cdsuffix; ?><?php endif; ?>">
            <div class="cd-module-default-sub">
				<?php if ($module->showtitle != 0) : ?>
                    <div class="cd-module-title">
                <?php
						echo '<h2 class="title">';
						echo $module->title;
						echo '</h2>';
                ?>
        			</div>
        <?php endif; ?>
        		<div class="cd-module-content">
        <?php echo $module->content; ?>
       			</div>
        	</div>
        </div>
        <?php endif;
	}
?>
