<?php
/**
 * @package Cloudesign
 * @version 1.0
 * @author Javier Cruz Lora
 * @copyright Copyright (C) 2013 Javi Cruz Lora, Inc. All rights reserved.
 * @license GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;
$params = JFactory::getApplication()->getTemplate(true)->params;
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');
$doc->addScript('templates/' .$this->template. '/js/template.js');
$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.min.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
if ($this->params->get('sitestyle')){
	$doc->addStyleSheet('templates/'.$this->template.'/css/'.$this->params->get('sitestyle').'.css');
}
require_once 'inc/funposition.php';
require_once 'inc/forzpositions.php';
require_once 'inc/cdmenu.php';
require_once 'inc/cdconfig.php';
$objetoCdMenu = new CdMenu;
$cdmenup = $this->params->get('cdmenu');
$objetoCdMenu->selectmenu($cdmenur, $cdmenup);
$margintop1 = ($cdmenup == 1) ? "margin-top1":"";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
	<link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get('googlefonttitle');?>' rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get('googlefontdefault');?>' rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get('googlefontmenu');?>' rel='stylesheet' type='text/css' />
    <!--[if IE 9]>
        <script src="/js/respond.min.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if IE 8]>
        <script src="/js/selectivizr.js" type="text/javascript"></script>
    <![endif]-->
    <?php require_once 'inc/style.php'; ?>
</head>
<body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
?>">
	<?php require_once 'inc/iconsfixed.php'; ?>
    <?php require_once 'inc/body.php'; ?>
    <?php JHTML :: _ ('jquery.framework'); ?>
	</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', '<?php echo $this->params->get('codegoogleanalytics');?>', 'auto');
  ga('send', 'pageview');
</script>
</html>