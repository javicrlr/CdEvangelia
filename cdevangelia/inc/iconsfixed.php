<?php defined('_JEXEC') or die; ?>
<?php if (($this->params->get('iconrightfixed')) || ($this->params->get('cdrighticonurl')) || ($this->params->get('cdrighticonwidth'))) { ?>
        <div class="search <?php echo $searchhd ?>">
     	<?php if (($this->params->get('iconrightfixed') == 'searchiconlightright.png') || ($this->params->get('iconrightfixed') == 'binocularsiconlightright.png')  || ($this->params->get('iconrightfixed') == 'searchicondarkright.png') || ($this->params->get('iconrightfixed') == 'binocularsicondarkright.png')){ ?>
        	<jdoc:include type="modules" name="search" style="cddefault" />
     	<?php }else { ?>
            <a href="<?php echo $this->params->get('cdrighticonurl'); ?>" id="search-toggle" class="search-toggle hidden-medium"><img src="/templates/cdevangelia/images/<?php echo $this->params->get('iconrightfixed'); ?>" alt="" width="<?php echo $this->params->get('cdrighticonwidth'); ?>" height="auto" /></a>
         <?php } ?>
    	</div>
    <?php } ?>
    <?php if (($this->params->get('cdlefticon')) || ($this->params->get('cdlefticonurl')) || ($this->params->get('cdlefticonwidth'))) { ?>
        <div class="contact <?php echo $contacthd ?>">
            <a href="<?php echo $this->params->get('cdlefticonurl'); ?>" id="contact-toggle" class="contact-toggle hidden-medium"><img src="/templates/cdevangelia/images/<?php echo $this->params->get('iconleftfixed'); ?>" alt="" width="<?php echo $this->params->get('cdlefticonwidth'); ?>" height="auto" /></a>
       	</div>
    <?php } ?>
	