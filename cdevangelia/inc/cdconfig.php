<?php 
if ($this->params->get('sitetitle')) {
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle')) . '</span>';
}
if ($this->params->get('cdlogo')) {
	$logo = '<img class="img-responsive center-block" src="' . JUri::root() . $this->params->get('cdlogo') . '" alt="' . $sitename . '" width = "' . $this->params->get('logowidth') . '" />';
}
if ($this->params->get('cdtwitter')) {
	$twitter = '<a  href="' . $this->params->get('cdtwitter') . '" target="_blank" />';
}
