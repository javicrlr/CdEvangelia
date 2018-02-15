<?php defined('_JEXEC') or die; ?>
<?php if (($top1acount) || ($top1bcount) || ($top1ccount) || ($top1dcount)){ ?>
	<div id="top1-continue" class="full-top1">
	<div class="container">
	<div class="row clearfix top1">
	<?php if (($top1acount) || (substr($top1amd, 7) > 0) || ($top1bcount) || (substr($top1bmd, 7) > 0) || ($top1ccount)|| (substr($top1cmd, 7) > 0) || ($top1dcount)|| (substr($top1dmd, 7) > 0)){ ?>
		<div class="<?php echo $top1axs; ?> <?php echo $top1asm; ?> <?php echo $top1amd ?> <?php echo $top1ahd ?> column top1-a">
			<jdoc:include type="modules" name="top1-A" style="cddefault" />
		</div>
		<?php } ?>
		<?php if (($top1bcount) || (substr($top1bmd, 7) > 0)){ ?>
			<div class="<?php echo $top1bxs; ?> <?php echo $top1bsm; ?> <?php echo $top1bmd ?> <?php echo $top1bhd ?> column top1-b">
				<jdoc:include type="modules" name="top1-B" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($top1ccount)|| (substr($top1cmd, 7) > 0)){ ?>
			<div class="<?php echo $top1cxs; ?> <?php echo $top1csm; ?> <?php echo $top1cmd ?> <?php echo $top1chd ?> column top1-c">
				<jdoc:include type="modules" name="top1-C" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($top1dcount)|| (substr($top1dmd, 7) > 0)){ ?>
			<div class="<?php echo $top1dxs; ?> <?php echo $top1dsm; ?> <?php echo $top1dmd ?> <?php echo $top1dhd ?> column top1-d">
				<jdoc:include type="modules" name="top1-D" style="cddefault" />
			</div>
		<?php } ?>
	</div>
	</div>
	</div>
	<?php } ?>
	<?php if (($logocount) || ($menucount)){ ?>
	<div id="menulogo-continue" class="full-menulogo">
	<div class="container">
	<div class="row clearfix menulogo">
		<?php if (($logocount) || (substr($logomd, 7) > 0)){ ?>
			<div class="<?php echo $logoxs; ?> <?php echo $logosm; ?> <?php echo $logomd ?> <?php echo $logohd ?> column logoposition">
				<?php echo $logo; ?>
			</div>
		<?php } ?>
		<?php if (($menucount) || (substr($menumd, 7) > 0)){ ?>
			<div class="<?php echo $menuxs; ?> <?php echo $menusm; ?> <?php echo $menumd ?> <?php echo $menuhd ?> column menuposition">
				<?php echo $cdmenur ?>
			</div>
		<?php } ?>
        <?php if (($menuccount)|| (substr($menucmd, 7) > 0)){ ?>
			<div class="<?php echo $menucxs; ?> <?php echo $menucsm; ?> <?php echo $menucmd ?> <?php echo $menuchd ?> column top1-c">
				<jdoc:include type="modules" name="menu-C" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($menudcount)|| (substr($menudmd, 7) > 0)){ ?>
			<div class="<?php echo $menudxs; ?> <?php echo $menudsm; ?> <?php echo $menudmd ?> <?php echo $menudhd ?> column top1-d">
				<jdoc:include type="modules" name="menu-D" style="cddefault" />
			</div>
		<?php } ?>
	</div>
	</div>
	</div>
	<?php } ?>
<?php if (($headeracount) || ($headerbcount) || ($headerccount) || ($headerdcount)){ ?>
	<div class="full-header" id="header-continue">
	<div class="container">
	<div id="header-continue" class="row clearfix header">
		<?php if (($headeracount) || (substr($headeramd, 7) > 0) || ($headerbcount) || (substr($headerbmd, 7) > 0) || ($headerccount)|| (substr($headercmd, 7) > 0) || ($headerdcount)|| (substr($headerdmd, 7) > 0)){ ?>
			<div class="<?php echo $headeraxs; ?> <?php echo $headerasm; ?> <?php echo $headeramd ?> <?php echo $headerahd ?> column header-a">
				<jdoc:include type="modules" name="header-A" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($headerbcount) || (substr($headerbmd, 7) > 0)){ ?>
			<div class="<?php echo $headerbxs; ?> <?php echo $headerbsm; ?> <?php echo $headerbmd ?> <?php echo $headerbhd ?> column header-b">
				<jdoc:include type="modules" name="header-B" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($headerccount)|| (substr($headercmd, 7) > 0)){ ?>
			<div class="<?php echo $headercxs; ?> <?php echo $headercsm; ?> <?php echo $headercmd ?> <?php echo $headerchd ?> column header-c">
				<jdoc:include type="modules" name="header-C" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($headerdcount)|| (substr($headerdmd, 7) > 0)){ ?>
			<div class="<?php echo $headerdxs; ?> <?php echo $headerdsm; ?> <?php echo $headerdmd ?> <?php echo $headerdhd ?> column header-d">
				<jdoc:include type="modules" name="header-D" style="cddefault" />
			</div>
		<?php } ?>
	</div>
	</div>
	</div>
<?php } ?>
<div class="full-containerbody">
	<div class="container-body">
	<?php if (($top2acount) || ($top2bcount) || ($top2ccount) || ($top2dcount)){ ?>
	<div class="full-top2" id="top2-continue">
	<div class="container">
	<div class="row clearfix top2">
		<?php if (($top2acount) || (substr($top2amd, 7) > 0) || ($top2bcount) || (substr($top2bmd, 7) > 0) || ($top2ccount)|| (substr($top2cmd, 7) > 0) || ($top2dcount)|| (substr($top2dmd, 7) > 0)){ ?>
			<div class="<?php echo $top2axs; ?> <?php echo $top2asm; ?> <?php echo $top2amd ?> <?php echo $top2ahd ?> column top2-a">
				<jdoc:include type="modules" name="top2-A" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($top2bcount) || (substr($top2bmd, 7) > 0)){ ?>
			<div class="<?php echo $top2bxs; ?> <?php echo $top2bsm; ?> <?php echo $top2bmd ?> <?php echo $top2bhd ?> column top2-b">
				<jdoc:include type="modules" name="top2-B" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($top2ccount)|| (substr($top2cmd, 7) > 0)){ ?>
			<div class="<?php echo $top2cxs; ?> <?php echo $top2csm; ?> <?php echo $top2cmd ?> <?php echo $top2chd ?> column top2-c">
				<jdoc:include type="modules" name="top2-C" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($top2dcount)|| (substr($top2dmd, 7) > 0)){ ?>
			<div class="<?php echo $top2dxs; ?> <?php echo $top2dsm; ?> <?php echo $top2dmd ?> <?php echo $top2dhd ?> column top2-d">
				<jdoc:include type="modules" name="top2-D" style="cddefault" />
			</div>
		<?php } ?>
	</div>
	</div>
	</div>
	<?php } ?>
	<?php if (($top3acount) || ($top3bcount) || ($top3ccount) || ($top3dcount)){ ?>
	<div id="top3-continue" class="full-top3">
	<div class="container">
	<div class="row clearfix top3">
		<?php if ((($top3acount)) || (substr($top3amd, 7) > 0)){ ?>
			<div class="<?php echo $top3axs; ?> <?php echo $top3asm; ?> <?php echo $top3amd ?> <?php echo $top3ahd ?> column top3-a">
				<jdoc:include type="modules" name="top3-A" style="cddefault" />
			</div>
		<?php } ?>
		<?php if ((($top3bcount)) || (substr($top3bmd, 7) > 0)){ ?>
			<div class="<?php echo $top3axs; ?> <?php echo $top3asm; ?> <?php echo $top3bmd ?> <?php echo $top3bhd ?> column top3-b">
				<jdoc:include type="modules" name="top3-B" style="cddefault" />
			</div>
		<?php } ?>
		<?php if ((($top3ccount)) || (substr($top3cmd, 7) > 0)){ ?>
			<div class="<?php echo $top3axs; ?> <?php echo $top3asm; ?> <?php echo $top3cmd ?> <?php echo $top3chd ?> column top3-c">
				<jdoc:include type="modules" name="top3-C" style="cddefault" />
			</div>
		<?php } ?>
		<?php if ((($top3dcount)) || (substr($top3dmd, 7) > 0)){ ?>
			<div class="<?php echo $top3axs; ?> <?php echo $top3asm; ?> <?php echo $top3dmd ?> <?php echo $top3dhd ?> column top3-d">
				<jdoc:include type="modules" name="top3-D" style="cddefault" />
			</div>
		<?php } ?>
	</div>
	</div>
	</div>
	<?php } ?>
	<?php if (($top4acount) || ($top4bcount) || ($top4ccount) || ($top4dcount)){ ?>
	<div id="top4-continue" class="full-top4">
	<div class="container">
	<div class="row clearfix top4">
		<?php if ((($top4acount)) || (substr($top4amd, 7) > 0)){ ?>
			<div class="<?php echo $top4axs; ?> <?php echo $top4asm; ?> <?php echo $top4amd ?> <?php echo $top4ahd ?> column top4-a">
				<jdoc:include type="modules" name="top4-A" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($top4bcount) || (substr($top4bmd, 7) > 0)){ ?>
			<div class="<?php echo $top4axs; ?> <?php echo $top4asm; ?> <?php echo $top4bmd ?> <?php echo $top4bhd ?> column top4-b">
				<jdoc:include type="modules" name="top4-B" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($top4ccount) || (substr($top4cmd, 7) > 0)){ ?>
			<div class="<?php echo $top4axs; ?> <?php echo $top4asm; ?> <?php echo $top4cmd ?> <?php echo $top4chd ?> column top4-c">
				<jdoc:include type="modules" name="top4-C" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($top4dcount) || (substr($top4dmd, 7) > 0)){ ?>
			<div class="<?php echo $top4axs; ?> <?php echo $top4asm; ?> <?php echo $top4dmd ?> <?php echo $top4dhd ?> column top4-d">
				<jdoc:include type="modules" name="top4-D" style="cddefault" />
			</div>
		<?php } ?>
	</div>
	</div>
	</div>
	<?php } ?>
	<div id="main-continue" class="full-main">
	<div class="container">
	<div class="row clearfix">
		<?php if (($leftacount) || (substr($leftamd, 7) > 0)){ ?>
			<div class="<?php echo $leftaxs; ?>  <?php echo $leftasm; ?> <?php echo $leftamd; ?> <?php echo $leftahd; ?> column left-a">
				<jdoc:include type="modules" name="left-A" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($leftbcount) || (substr($leftbmd, 7) > 0)){ ?>
			<div class="<?php echo $leftbxs; ?> <?php echo $leftbsm; ?> <?php echo $leftbmd; ?> <?php echo $leftbhd; ?> column left-b">
				<jdoc:include type="modules" name="left-B" style="cddefault" />
			</div>
		<?php } ?>
		<div class="<?php echo $mainxs; ?> <?php echo $mainsm; ?> <?php echo $mainmd; ?> <?php echo $mainhd; ?> column main">
			<div class="row clearfix main-top">
				<?php if (($maintopacount) || (substr($maintopamd, 7) > 0)){ ?>
					<div class="<?php echo $maintopaxs; ?> <?php echo $maintopasm; ?> <?php echo $maintopamd; ?> <?php echo $maintopahd; ?> column main-top-a">
						<jdoc:include type="modules" name="main-top-A" style="cddefault" />
					</div>
				<?php } ?>
				<?php if (($maintopacount) || (substr($maintopbmd, 7) > 0)){ ?>
					<div class="<?php echo $maintopbxs; ?> <?php echo $maintopbsm; ?> <?php echo $maintopbmd; ?> <?php echo $maintopbhd; ?> column main-top-b">
						<jdoc:include type="modules" name="main-top-B" style="cddefault" />
					</div>
				<?php } ?>
			</div>
			<div class="row clearfix main-content">
				<div class="col-md-12 column main-column">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>
			</div>
			<div class="row clearfix main-bottom">
				<?php if (($mainbottomacount)|| (substr($mainbottomamd, 7) > 0)){ ?>
					<div class="<?php echo $mainbottomaxs; ?> <?php echo $mainbottomasm; ?> <?php echo $mainbottomamd; ?> <?php echo $mainbottomahd; ?> column main-bottom-a">
						<jdoc:include type="modules" name="main-bottom-A" style="cddefault" />
					</div>
				<?php } ?>
				<?php if (($mainbottombcount) || (substr($mainbottombmd, 7) > 0)){ ?>
					<div class="<?php echo $mainbottombxs; ?> <?php echo $mainbottombsm; ?> <?php echo $mainbottombmd; ?> <?php echo $mainbottombhd; ?> column main-bottom-b">
						<jdoc:include type="modules" name="main-bottom-B" style="cddefault" />
					</div>
				<?php } ?>
			</div>
		</div>
		<?php if (($rightacount) || (substr($rightamd, 7) > 0)){ ?>
			<div class="<?php echo $rightaxs; ?> <?php echo $rightasm; ?> <?php echo $rightamd; ?> <?php echo $rightahd; ?> column right-a">
				<jdoc:include type="modules" name="right-A" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($rightbcount) || (substr($rightbmd, 7) > 0)){ ?>
			<div class="<?php echo $rightbxs; ?> <?php echo $rightbsm; ?> <?php echo $rightbmd; ?> <?php echo $rightbhd; ?> column right-b">
				<jdoc:include type="modules" name="right-B" style="cddefault" />
			</div>
		<?php } ?>
	</div>
	</div>
	</div>
	<?php if (($bottom1acount) || ($bottom1bcount) || ($bottom1ccount) || ($bottom1dcount)){ ?>
	<div id="bottom1-continue" class="full-bottom1">
	<div class="container">
	<div class="row clearfix bottom1">
		<?php if (($bottom1acount) || (substr($bottom1amd, 7) > 0)){ ?>
			<div class="<?php echo $bottom1axs; ?> <?php echo $bottom1asm; ?> <?php echo $bottom1amd ?> <?php echo $bottom1ahd ?> column bottom1-a">
				<jdoc:include type="modules" name="bottom1-A" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($bottom1bcount) || (substr($bottom1bmd, 7) > 0)){ ?>
			<div class="<?php echo $bottom1bxs; ?> <?php echo $bottom1bsm; ?> <?php echo $bottom1bmd ?> <?php echo $bottom1bhd ?> column bottom1-b">
				<jdoc:include type="modules" name="bottom1-B" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($bottom1ccount) || (substr($bottom1cmd, 7) > 0)){ ?>
			<div class="<?php echo $bottom1cxs; ?> <?php echo $bottom1csm; ?> <?php echo $bottom1cmd ?> <?php echo $bottom1chd ?> column bottom1-c">
				<jdoc:include type="modules" name="bottom1-C" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($bottom1dcount) || (substr($bottom1cmd, 7) > 0)){ ?>
			<div class="<?php echo $bottom1dxs; ?> <?php echo $bottom1dsm; ?> <?php echo $bottom1dmd ?> <?php echo $bottom1dhd ?> column bottom1-d">
				<jdoc:include type="modules" name="bottom1-D" style="cddefault" />
			</div>
		<?php } ?>
	</div>
	</div>
	</div>
	<?php } ?>
	<?php if (($bottom2acount) || ($bottom2bcount) || ($bottom2ccount) || ($bottom2dcount)){ ?>
	<div id="bottom1-continue" class="full-bottom2">
	<div class="container">
	<div class="row clearfix bottom2">
		<?php if (($bottom2acount) || (substr($bottom2amd, 7) > 0)){ ?>
			<div class="<?php echo $bottom2axs; ?> <?php echo $bottom2asm; ?> <?php echo $bottom2amd ?> <?php echo $bottom2ahd ?> column bottom2-a">
				<jdoc:include type="modules" name="bottom2-A" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($bottom2bcount) || (substr($bottom2bmd, 7) > 0)){ ?>
			<div class="<?php echo $bottom2bxs; ?> <?php echo $bottom2bsm; ?> <?php echo $bottom2bmd ?> <?php echo $bottom2bhd ?> column bottom2-b">
				<jdoc:include type="modules" name="bottom2-B" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($bottom2ccount) || (substr($bottom2cmd, 7) > 0)){ ?>
			<div class="<?php echo $bottom2cxs; ?> <?php echo $bottom2csm; ?> <?php echo $bottom2cmd ?> column bottom2-c">
				<jdoc:include type="modules" name="bottom2-C" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($bottom2dcount) || (substr($bottom2dmd, 7) > 0)){ ?>
			<div class="<?php echo $bottom2dxs; ?> <?php echo $bottom2dsm; ?> <?php echo $bottom2dmd ?> <?php echo $bottom2dhd ?> column bottom2-d">
				<jdoc:include type="modules" name="bottom2-D" style="cddefault" />
			</div>
		<?php } ?>
	</div>
	</div>
	</div>
	</div>
	<?php } ?>
	<?php if (($bottom3acount) || ($bottom3bcount) || ($bottom3ccount) || ($bottom3dcount)){ ?>
	<div id="bottom1-continue" class="full-bottom3">
	<div class="container">
	<div class="row clearfix bottom3">
		<?php if (($bottom3acount) || (substr($bottom3amd, 7) > 0)){ ?>
			<div class="<?php echo $bottom3axs; ?> <?php echo $bottom3asm; ?> <?php echo $bottom3amd ?> <?php echo $bottom3ahd ?> column bottom3-a">
				<jdoc:include type="modules" name="bottom3-A" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($bottom3bcount) || (substr($bottom3bmd, 7) > 0)){ ?>
			<div class="<?php echo $bottom3bxs; ?> <?php echo $bottom3bsm; ?> <?php echo $bottom3bmd ?> <?php echo $bottom3bhd ?> column bottom3-b">
				<jdoc:include type="modules" name="bottom3-B" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($bottom3ccount) || (substr($bottom3cmd, 7) > 0)){ ?>
			<div class="<?php echo $bottom3cxs; ?> <?php echo $bottom3csm; ?> <?php echo $bottom3cmd ?> <?php echo $bottom3chd ?> column bottom3-c">
				<jdoc:include type="modules" name="bottom3-C" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($bottom3dcount) || (substr($bottom3dmd, 7) > 0)){ ?>
			<div class="<?php echo $bottom3dxs; ?> <?php echo $bottom3dsm; ?> <?php echo $bottom3dmd ?> <?php echo $bottom3dhd ?> column bottom3-d">
				<jdoc:include type="modules" name="bottom3-D" style="cddefault" />
			</div>
		<?php } ?>
	</div>
	</div>
	</div>
	<?php } ?>
	</div>
	</div>
	</div>
	<?php if (($bottom4acount) || ($bottom4bcount) || ($bottom4ccount) || ($bottom4dcount)){ ?>
	<div id="bottom1-continue" class="full-bottom4">
	<div class="container container-bottom4">
	<div class="row clearfix bottom4">
		<?php if (($bottom4acount) || (substr($bottom4amd, 7) > 0)){ ?>
			<div class="<?php echo $bottom4axs; ?> <?php echo $bottom4asm; ?> <?php echo $bottom4amd ?> <?php echo $bottom4ahd ?> column bottom4-a">
				<jdoc:include type="modules" name="bottom4-A" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($bottom4bcount) || (substr($bottom4bmd, 7) > 0)){ ?>
			<div class="<?php echo $bottom4bxs; ?> <?php echo $bottom4bsm; ?> <?php echo $bottom4bmd ?> <?php echo $bottom4bhd ?> column bottom4-a">
				<jdoc:include type="modules" name="bottom4-B" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($bottom4ccount) || (substr($bottom4cmd, 7) > 0)){ ?>
			<div class="<?php echo $bottom4cxs; ?> <?php echo $bottom4csm; ?> <?php echo $bottom4cmd ?> <?php echo $bottom4chd ?> column bottom4-c">
				<jdoc:include type="modules" name="bottom4-C" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($bottom4dcount) || (substr($bottom4dmd, 7) > 0)){ ?>
			<div class="<?php echo $bottom4dxs; ?> <?php echo $bottom4dsm; ?> <?php echo $bottom4dmd ?> <?php echo $bottom4dhd ?> column bottom4-d">
				<jdoc:include type="modules" name="bottom4-D" style="cddefault" />
			</div>
		<?php } ?>
	</div>
	</div>
	</div>
	<?php } ?>
	<?php if (($footeracount) || ($footerbcount) || ($footerccount) || ($footerdcount)){ ?>
	<div id="footer-continue" class="full-footer">
	<div class="container container-footer">
	<div class="row clearfix footer">
		<?php if(($footeracount) || (substr($footeramd, 7) > 0)){ ?>
			<div class="<?php echo $footeraxs; ?> <?php echo $footerasm; ?> <?php echo $footeramd ?> <?php echo $footerahd ?> column footer-a">
				<jdoc:include type="modules" name="footer-A" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($footerbcount) || (substr($footerbmd, 7) > 0)){ ?>
			<div class="<?php echo $footerbxs; ?> <?php echo $footerbsm; ?> <?php echo $footerbmd  ?> <?php echo $footerbhd  ?> column footer-b">
				<jdoc:include type="modules" name="footer-B" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($footerccount) || (substr($footercmd, 7) > 0)){ ?>
			<div class="<?php echo $footercxs; ?> <?php echo $footercsm; ?> <?php echo $footercmd  ?> <?php echo $footerchd  ?> column footer-c">
				<jdoc:include type="modules" name="footer-C" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($footerdcount) || (substr($footerdmd, 7) > 0)){ ?>
			<div class="<?php echo $footerdxs; ?> <?php echo $footerdsm; ?> <?php echo $footerdmd ?> <?php echo $footerdhd ?> column footer-d column search">
				<jdoc:include type="modules" name="footer-D" style="cddefault" />
			</div>
		<?php } ?>
	</div>
	</div>
	</div>
	<?php } ?>
	<?php if (($dataacount) || ($databcount) || ($dataccount) || ($datadcount)){ ?>
	<div id="data-continue" class="full-data">
	<div class="container container-data">
	 <div class="row clearfix data">
		<?php if(($dataacount) || (substr($dataamd, 7) > 0)){ ?>
			<div class="<?php echo $dataaxs; ?> <?php echo $dataasm; ?> <?php echo $dataamd ?> <?php echo $dataahd ?> column data-a">
				<?php if ($this->params->get('cdtitledataa')) { ?>
					<h3 class="title"><?php echo $this->params->get('cdtitledataa'); ?></h3>
				<?php } ?>
				<ul class="lined col-right">
					<?php if ($this->params->get('cdtelephone')) { ?>
						<li><span class="col1"><?php echo $this->params->get('cdtelephonetext'); ?></span> <span class="col2"><?php echo $this->params->get('cdtelephone'); ?></span></li>
					<?php } ?>
					<?php if ($this->params->get('cdemail')) { ?>
						<li><span class="col1"><?php echo $this->params->get('cdemailtext'); ?></span> <span class="col2"> <a href="mailto:<?php echo $this->params->get('cdemail'); ?><"><?php echo $this->params->get('cdemail'); ?></a> </span></li>
					<?php } ?>
					<?php if ($this->params->get('cdaddress')) { ?>
						<li><span class="col1"><?php echo $this->params->get('cdaddresstext'); ?></span> <span class="col2"><?php echo $this->params->get('cdaddress'); ?></span></li>
					<?php } ?>
				</ul>
				<jdoc:include type="modules" name="data-A" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($databcount) || (substr($databmd, 7) > 0)){ ?>
			<div class="<?php echo $databxs; ?> <?php echo $databsm; ?> <?php echo $databmd  ?> <?php echo $databhd  ?> column data-b">
				  <?php if ($this->params->get('cdtitledatab')) { ?>
					<h3 class="title"><?php echo $this->params->get('cdtitledatab'); ?></h3>
				<?php } ?>
				<ul class="lined col-right">
					<?php if (($this->params->get('cdurlcontact')) || ($this->params->get('cdcontacttextprev')) || ($this->params->get('cdcontacttext')) || ($this->params->get('cdcontacttextnext'))) { ?>
						<li><?php echo $this->params->get('cdcontacttextprev'); ?> <a href="<?php echo $this->params->get('cdurlcontact'); ?>"> <?php echo $this->params->get('cdcontacttext'); ?></a> <?php echo $this->params->get('cdcontacttextnext'); ?></li>
					<?php } ?>
				</ul>
				<jdoc:include type="modules" name="data-B" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($dataccount) || (substr($datacmd, 7) > 0)){ ?>
			<div class="<?php echo $datacxs; ?> <?php echo $datacsm; ?> <?php echo $datacmd  ?> <?php echo $datachd  ?> column data-c">
				<?php if ($this->params->get('cdtitledatac')) { ?>
					<h3 class="title"><?php echo $this->params->get('cdtitledatac'); ?></h3>
				<?php } ?>
				<ul class="lined col-right">
					<?php if (($this->params->get('redsoacial1text')) || ($this->params->get('redsoacial1url')) || ($this->params->get('redsoacial1textprev')) || ($this->params->get('redsoacial1textnext'))) { ?>
						<li><span class="col1"><?php echo $this->params->get('redsoacial1textprev'); ?> <a href="<?php echo $this->params->get('redsoacial1url'); ?>" target="_blank"><?php echo $this->params->get('redsoacial1text'); ?></a></span> <span class="col2"> <?php echo $this->params->get('redsoacial1textnext'); ?></span></li>
					<?php } ?>
					<?php if (($this->params->get('redsoacial2text')) || ($this->params->get('redsoacial2url')) || ($this->params->get('redsoacial2textprev')) || ($this->params->get('redsoacial2textnext'))) { ?>
						<li><span class="col1"><?php echo $this->params->get('redsoacial2textprev'); ?> <a href="<?php echo $this->params->get('redsoacial2url'); ?>" target="_blank"><?php echo $this->params->get('redsoacial2text'); ?></a></span> <span class="col2"> <?php echo $this->params->get('redsoacial2textnext'); ?></span></li>
					<?php } ?>
					<?php if (($this->params->get('redsoacial3text')) || ($this->params->get('redsoacial3url')) || ($this->params->get('redsoacial3textprev')) || ($this->params->get('redsoacial3textnext'))) { ?>
						<li><span class="col1"><?php echo $this->params->get('redsoacial3textprev'); ?> <a href="<?php echo $this->params->get('redsoacial3url'); ?>" target="_blank"><?php echo $this->params->get('redsoacial3text'); ?></a></span> <span class="col2"> <?php echo $this->params->get('redsoacial3textnext'); ?></span></li>
					<?php } ?>
				</ul>
				<jdoc:include type="modules" name="data-C" style="cddefault" />
			</div>
		<?php } ?>
		<?php if (($datadcount) || (substr($datadmd, 7) > 0)){ ?>
			<div class="<?php echo $datadxs; ?> <?php echo $datadsm; ?> <?php echo $datadmd ?> <?php echo $datadhd ?> column data-d column search">
				<jdoc:include type="modules" name="data-D" style="cddefault" />
			</div>
		<?php } ?>
	</div>
	</div>
	</div>
	<?php } ?>
	<?php if ($copyrightcount){ ?>
	<div id="copyright-continue" class="full-copyright">
	<div class="container container-copyright">
	<div class="row clearfix copyright">
		<?php if($copyrightcount){ ?>
				<div class="lined col-right">
					<?php if (($this->params->get('copyrighttextprev')) || ($this->params->get('copyrighttextnext')) || ($this->params->get('copyrighttext')) || ($this->params->get('copyrighturl'))) { ?>
						<?php echo $this->params->get('copyrighttextprev'); ?> <a href="<?php echo $this->params->get('copyrighturl'); ?>"> © <?php echo $this->params->get('copyrighttext'); ?></a> <?php echo $this->params->get('copyrighttextnext'); ?>
					<?php } ?>
				</div>
				<jdoc:include type="modules" name="copyright" style="cddefault" />
		<?php } ?>    
	</div>
	</div>
</div>
<?php } ?>
	