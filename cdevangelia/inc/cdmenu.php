<?php
class CdMenu {
	public function selectmenu(&$cdmenur, $cdmenup){
		if ($cdmenup == 0) {
			$cdmenur = '<div class="clearfix main-menu-searh">'.
			'<div class="column main-menu cddefaultm">'.
			'<nav class="navbar navbar-default default-menu" role="navigation">'.
			'<div class="navbar-header">'.
			'<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">'.
			'<span class="sr-only">Toggle navigation</span>'.
			'<span class="icon-bar"></span>'.
			'<span class="icon-bar"></span>'.
			'<span class="icon-bar"></span>'.
			'</button>'.
			'</div>'.
			'<div class="collapse navbar-collapse navbar-ex1-collapse">'.
			'<jdoc:include type="modules" name="main-menu" style="none" />'.
			'</div>'.
			'</nav>'.
			'</div>'.
			'</div>';
		}else {
			$cdmenur = '<div class="clearfix main-menu-searh">'.
			'<div class="column main-menu">'.
			'<nav class="navbar navbar-default navbar-fixed-top">'.
			'<div class="navbar-inner cdmenuf">'.
			'<div class="navbar-header">'.
			'<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">'.
			'<span class="sr-only">Toggle navigation</span>'.
			'<span class="icon-bar"></span>'.
			'<span class="icon-bar"></span>'.
			'<span class="icon-bar"></span>'.
			'</button>'.
			'</div>'.
			'<div class="collapse navbar-collapse navbar-ex1-collapse">'.
			'<jdoc:include type="modules" name="main-menu" style="none" />'.
			'</div>'.
			'</div>'.
			'</nav>'.
			'</div>'.
			'</div>';
		}
	}
}
