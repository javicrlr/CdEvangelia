<?php defined('_JEXEC') or die; ?>
<style type="text/css">
	a {
		<?php if ($this->params->get('templateColor')){ ?>
			color: <?php echo $this->params->get('templateColor');?>;
		<?php } ?>
	}	
	html, body {
		<?php if ($this->params->get('googlefontdefault')) { ?>
			font-family: '<?php echo str_replace('+', ' ', $this->params->get('googlefontdefault')); ?>';
		<?php }else { ?>
			font-family: <?php echo $this->params->get('fontdefault');?>;
		<?php } ?>
	}
	body {
		<?php if ($this->params->get('templateBackgroundColor')) { ?>
			background-color: <?php echo $this->params->get('templateBackgroundColor');?>
		<?php } ?>
		<?php if ($this->params->get('fontColorbody')) { ?>
			color: <?php echo $this->params->get('fontColorbody');?>;
		<?php }?>
	}
	a:hover, a:focus, a:active, legend {
		<?php if ($this->params->get('fontColorbody')) { ?>
			color: <?php echo $this->params->get('fontColorbody');?>;
		<?php }?>
	}
	.badge {
		<?php if ($this->params->get('fontColorbody')) { ?>
			background-color: <?php echo $this->params->get('fontColorbody');?>;
		<?php }?>
	}
	.page-header {
		<?php if ($this->params->get('fontColorbody')) { ?>
			border-bottom: 1px solid <?php echo $this->params->get('fontColorbody');?>;
		<?php }?>
	}
	h1,h2,h3,h4,h5,h6,.site-title {
		<?php if ($this->params->get('googlefonttitle')) { ?>
			font-family: '<?php echo str_replace('+', ' ', $this->params->get('googlefonttitle')); ?>';
		<?php }else { ?>
			font-family: <?php echo $this->params->get('fonttitle');?>;
		<?php } ?>
		<?php if ($this->params->get('templateColor')) { ?>
			color: <?php echo $this->params->get('templateColor');?>;
		<?php }?>
	}
	.btn, .btn-default, .btn-primary, .btn-primary.disabled, .btn-primary[disabled], fieldset[disabled] .btn-primary, .btn-primary.disabled:hover, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary:hover, .btn-primary.disabled:focus, .btn-primary[disabled]:focus, fieldset[disabled] .btn-primary:focus, .btn-primary.disabled:active, .btn-primary[disabled]:active, fieldset[disabled] .btn-primary:active, .btn-primary.disabled.active, .btn-primary.active[disabled], fieldset[disabled] .btn-primary.active {
		<?php if ($this->params->get('templateColor')) { ?>
			background-color: <?php echo $this->params->get('templateColor');?>;
			border-color: <?php echo $this->params->get('templateColor');?>;
		<?php }?>
	}
	.btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default, .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
		<?php if ($this->params->get('templateColor')) { ?>
			background-color:  #FFFFFF;
			color: <?php echo $this->params->get('templateColor');?>;
			border-color: <?php echo $this->params->get('templateColor');?>;
		<?php }?>
	}
    .form-control {
		<?php if ($this->params->get('templateColor')) { ?>
			color: <?php echo $this->params->get('templateColor');?>;
		<?php }?>
	}
	.default-menu {
		<?php if ($this->params->get('googlefontmenu')) { ?>
			font-family: '<?php echo str_replace('+', ' ', $this->params->get('googlefontmenu')); ?>';
		<?php }else { ?>
			font-family: <?php echo $this->params->get('fontmenu');?>;
		<?php } ?>
	}
	.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
		<?php if ($this->params->get('menuColor')) { ?>
			color: <?php echo $this->params->get('menuColor');?>;
		<?php } ?>
	}
	.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
		<?php if ($this->params->get('menuColor')) { ?>
				color: <?php echo $this->params->get('menuColor');?>;
			<?php } ?>
	}
	.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
		<?php if ($this->params->get('menuColor')) { ?>
				color: <?php echo $this->params->get('menuColor');?>;
			<?php } ?>
	}
	.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
		<?php if ($this->params->get('menuColor')) { ?>
			color: <?php echo $this->params->get('menuColor');?>;
		<?php } ?>
	}
	
	.navbar-default .navbar-nav > li > a {
		<?php if ($this->params->get('menuColorContrast')) { ?>
			color: <?php echo $this->params->get('menuColorContrast');?>;
		<?php } ?>
	}

	.dropdown-menu > li > a {
		<?php if ($this->params->get('menuColorContrast')) { ?>
				color: <?php echo $this->params->get('menuColorContrast');?>;
			<?php } ?>
	}
	.full-top1 {
		<?php if ($this->params->get('fulltop1Color')) { ?>
			background-color: <?php echo $this->params->get('fulltop1Color');?>;
		<?php } ?>
		<?php if ($this->params->get('fulltop1Colorfont')){ ?>
			color: <?php echo $this->params->get('fulltop1Colorfont');?>;
		<?php } ?>
	}
	.full-top1 a {
		<?php if ($this->params->get('fulltop1Colorfont')){ ?>
			color: <?php echo $this->params->get('fulltop1Colorfont');?>;
		<?php } ?>
	}
	.full-top1 h1,.full-top1 h2,.full-top1 h3,.full-top1 h4,.full-top1 h5,.full-top1 h6 {
		<?php if ($this->params->get('fulltop1Colorfont')) { ?>
			color: <?php echo $this->params->get('fulltop1Colorfont');?>;
		<?php }?>
	}
	.full-menulogo {
		<?php if ($this->params->get('fullmenulogoColor')) { ?>
			background-color: <?php echo $this->params->get('fullmenulogoColor');?>;
		<?php } ?>
		<?php if ($this->params->get('fullmenulogoColorfont')){ ?>
			color: <?php echo $this->params->get('fullmenulogoColorfont');?>;
		<?php } ?>
	}
	.full-menulogo a {
		<?php if ($this->params->get('fullmenulogoColorfont')){ ?>
			color: <?php echo $this->params->get('fullmenulogoColorfont');?>;
		<?php } ?>
	}
	.full-menulogo h1,.full-menulogo h2,.full-menulogo h3,.full-menulogo h4,.full-menulogo h5,.full-menulogo h6 {
		<?php if ($this->params->get('fullmenulogoColorfont')) { ?>
			color: <?php echo $this->params->get('fullmenulogoColorfont');?>;
		<?php }?>
	}
	.full-header {
		<?php if ($this->params->get('fullheaderColor')) { ?>
			background-color: <?php echo $this->params->get('fullheaderColor');?>;
		<?php } ?>
		<?php if ($this->params->get('fullheaderColorfont')){ ?>
			color: <?php echo $this->params->get('fullheaderColorfont');?>;
		<?php } ?>
	}
	.full-header a {
		<?php if ($this->params->get('fullheaderColorfont')){ ?>
			color: <?php echo $this->params->get('fullheaderColorfont');?>;
		<?php } ?>
	}
	.full-header h1,.full-header h2,.full-header h3,.full-header h4,.full-header h5,.full-header h6 {
		<?php if ($this->params->get('fullheaderColorfont')) { ?>
			color: <?php echo $this->params->get('fullheaderColorfont');?>;
		<?php }?>
	}
	.full-top2 {
		<?php if ($this->params->get('fulltop2Color')) { ?>
			background-color: <?php echo $this->params->get('fulltop2Color');?>;
		<?php } ?>
		<?php if ($this->params->get('fulltop2Colorfont')){ ?>
			color: <?php echo $this->params->get('fulltop2Colorfont');?>;
		<?php } ?>
	}
	.full-top2 a {
		<?php if ($this->params->get('fulltop2Colorfont')){ ?>
			color: <?php echo $this->params->get('fulltop2Colorfont');?>;
		<?php } ?>
	}
	.full-top2 h1,.full-top2 h2,.full-top2 h3,.full-top2 h4,.full-top2 h5,.full-top2 h6 {
		<?php if ($this->params->get('fulltop2Colorfont')) { ?>
			color: <?php echo $this->params->get('fulltop2Colorfont');?>;
		<?php }?>
	}
	.full-top3 {
		<?php if ($this->params->get('fulltop3Color')) { ?>
			background-color: <?php echo $this->params->get('fulltop3Color');?>;
		<?php } ?>
		<?php if ($this->params->get('fulltop3Colorfont')){ ?>
			color: <?php echo $this->params->get('fulltop3Colorfont');?>;
		<?php } ?>
	}
	.full-top3 a {
		<?php if ($this->params->get('fulltop3Colorfont')){ ?>
			color: <?php echo $this->params->get('fulltop3Colorfont');?>;
		<?php } ?>
	}
	.full-top3 h1,.full-top3 h2,.full-top3 h3,.full-top3 h4,.full-top3 h5,.full-top3 h6 {
		<?php if ($this->params->get('fulltop3Colorfont')) { ?>
			color: <?php echo $this->params->get('fulltop3Colorfont');?>;
		<?php }?>
	}
	.full-top4 {
		<?php if ($this->params->get('fulltop4Color')) { ?>
			background-color: <?php echo $this->params->get('fulltop4Color');?>;
		<?php } ?>
		<?php if ($this->params->get('fulltop4Colorfont')){ ?>
			color: <?php echo $this->params->get('fulltop4Colorfont');?>;
		<?php } ?>
	}
	.full-top4 a {
		<?php if ($this->params->get('fulltop4Colorfont')){ ?>
			color: <?php echo $this->params->get('fulltop4Colorfont');?>;
		<?php } ?>
	}
	.full-top4 h1,.full-top4 h2,.full-top4 h3,.full-top4 h4,.full-top4 h5,.full-top4 h6 {
		<?php if ($this->params->get('fulltop4Colorfont')) { ?>
			color: <?php echo $this->params->get('fulltop4Colorfont');?>;
		<?php }?>
	}
	.full-main {
		<?php if ($this->params->get('fullmain')) { ?>
			background-color: <?php echo $this->params->get('fullmain');?>;
		<?php } ?>
		<?php if ($this->params->get('fullmainfont')){ ?>
			color: <?php echo $this->params->get('fullmainfont');?>;
		<?php } ?>
	}
	.full-main a {
		<?php if ($this->params->get('fullmainfont')){ ?>
			color: <?php echo $this->params->get('fullmainfont');?>;
		<?php } ?>
	}
	.full-main h1,.full-main h2,.full-main h3,.full-main h4,.full-main h5,.full-main h6 {
		<?php if ($this->params->get('fullmainfont')) { ?>
			color: <?php echo $this->params->get('fullmainfont');?>;
		<?php }?>
	}
	.full-bottom1 {
		<?php if ($this->params->get('fullbottom1')) { ?>
			background-color: <?php echo $this->params->get('fullbottom1');?>;
		<?php } ?>
		<?php if ($this->params->get('fullbottom1font')){ ?>
			color: <?php echo $this->params->get('fullbottom1font');?>;
		<?php } ?>
	}
	.full-bottom1 a {
		<?php if ($this->params->get('fullbottom1font')){ ?>
			color: <?php echo $this->params->get('fullbottom1font');?>;
		<?php } ?>
	}
	.full-bottom1 h1,.full-bottom1 h2,.full-bottom1 h3,.full-bottom1 h4,.full-bottom1 h5,.full-bottom1 h6 {
		<?php if ($this->params->get('fullbottom1font')) { ?>
			color: <?php echo $this->params->get('fullbottom1font');?>;
		<?php }?>
	}
	.full-bottom2 {
		<?php if ($this->params->get('fullbottom2')) { ?>
			background-color: <?php echo $this->params->get('fullbottom2');?>;
		<?php } ?>
		<?php if ($this->params->get('fullbottom2font')){ ?>
			color: <?php echo $this->params->get('fullbottom2font');?>;
		<?php } ?>
	}
	.full-bottom2 a {
		<?php if ($this->params->get('fullbottom2font')){ ?>
			color: <?php echo $this->params->get('fullbottom2font');?>;
		<?php } ?>
	}
	.full-bottom2 h1,.full-bottom2 h2,.full-bottom2 h3,.full-bottom2 h4,.full-bottom2 h5,.full-bottom2 h6 {
		<?php if ($this->params->get('fullbottom2font')) { ?>
			color: <?php echo $this->params->get('fullbottom2font');?>;
		<?php }?>
	}
	.full-bottom3 {
		<?php if ($this->params->get('fullbottom3')) { ?>
			background-color: <?php echo $this->params->get('fullbottom3');?>;
		<?php } ?>
		<?php if ($this->params->get('fullbottom3font')){ ?>
			color: <?php echo $this->params->get('fullbottom3font');?>;
		<?php } ?>
	}
	.full-bottom3 a {
		<?php if ($this->params->get('fullbottom3font')){ ?>
			color: <?php echo $this->params->get('fullbottom3font');?>;
		<?php } ?>
	}
	.full-bottom3 h1,.full-bottom3 h2,.full-bottom3 h3,.full-bottom3 h4,.full-bottom3 h5,.full-bottom3 h6 {
		<?php if ($this->params->get('fullbottom3font')) { ?>
			color: <?php echo $this->params->get('fullbottom3font');?>;
		<?php }?>
	}
	.full-bottom4 {
		<?php if ($this->params->get('fullbottom4')) { ?>
			background-color: <?php echo $this->params->get('fullbottom4');?>;
		<?php } ?>
		<?php if ($this->params->get('fullbottom4font')){ ?>
			color: <?php echo $this->params->get('fullbottom4font');?>;
		<?php } ?>
	}
	.full-bottom4 a {
		<?php if ($this->params->get('fullbottom4font')){ ?>
			color: <?php echo $this->params->get('fullbottom4font');?>;
		<?php } ?>
	}
	.full-bottom4 h1,.full-bottom4 h2,.full-bottom4 h3,.full-bottom4 h4,.full-bottom4 h5,.full-bottom4 h6 {
		<?php if ($this->params->get('fullbottom4font')) { ?>
			color: <?php echo $this->params->get('fullbottom4font');?>;
		<?php }?>
	}
	.full-footer {
		<?php if ($this->params->get('fullfooter')) { ?>
			background-color: <?php echo $this->params->get('fullfooter');?>;
		<?php } ?>
		<?php if ($this->params->get('fullfooterfont')){ ?>
			color: <?php echo $this->params->get('fullfooterfont');?>;
		<?php } ?>
	}
	.full-footer a {
		<?php if ($this->params->get('fullfooterfont')){ ?>
			color: <?php echo $this->params->get('fullfooterfont');?>;
		<?php } ?>
	}
	.full-footer h1,.full-footer h2,.full-footer h3,.full-footer h4,.full-footer h5,.full-footer h6 {
		<?php if ($this->params->get('fullfooterfont')) { ?>
			color: <?php echo $this->params->get('fullfooterfont');?>;
		<?php }?>
	}
	.full-data {
		<?php if ($this->params->get('fulldata')) { ?>
			background-color: <?php echo $this->params->get('fulldata');?>;
		<?php } ?>
		<?php if ($this->params->get('fulldatafont')){ ?>
			color: <?php echo $this->params->get('fulldatafont');?>;
		<?php } ?>
	}
	.full-data a {
		<?php if ($this->params->get('fulldatafont')){ ?>
			color: <?php echo $this->params->get('fulldatafont');?>;
		<?php } ?>
	}
	.full-data h1,.full-data h2,.full-data h3,.full-data h4,.full-data h5,.full-data h6 {
		<?php if ($this->params->get('fulldatafont')) { ?>
			color: <?php echo $this->params->get('fulldatafont');?>;
		<?php }?>
	}
	.full-data ul.lined li {
		<?php if ($this->params->get('fulldatafont')) { ?>
			border-bottom: 1px solid <?php echo $this->params->get('fulldatafont');?>;
		<?php }?>
	}
	ul.lined {
		<?php if ($this->params->get('fulldatafont')) { ?>
			border-top: 1px solid <?php echo $this->params->get('fulldatafont');?>;
		<?php }?>
	}
	.full-copyright {
		<?php if ($this->params->get('fullcopyright')) { ?>
			background-color: <?php echo $this->params->get('fullcopyright');?>;
		<?php } ?>
		<?php if ($this->params->get('fullcopyrightfont')){ ?>
			color: <?php echo $this->params->get('fullcopyrightfont');?>;
		<?php } ?>
	}
	.full-copyright a {
		<?php if ($this->params->get('fullcopyrightfont')){ ?>
			color: <?php echo $this->params->get('fullcopyrightfont');?>;
		<?php } ?>
	}
	.full-copyright h1,.full-copyright h2,.full-copyright h3,.full-copyright h4,.full-copyright h5,.full-copyright h6 {
		<?php if ($this->params->get('fullcopyrightfont')) { ?>
			color: <?php echo $this->params->get('fullcopyrightfont');?>;
		<?php }?>
	}
</style>
