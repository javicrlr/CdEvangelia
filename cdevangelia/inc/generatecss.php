<?php
defined('_JEXEC') or die;
 $app = JFactory::getApplication();
	
		 $currentpath = realpath(__DIR__ ) ;
		 $pageurl = str_replace('&amp;compileless=1', '', JURI::getInstance ());
	 	if (!defined('FOF_INCLUDED')) {
	 		require_once JPATH_LIBRARIES . '/fof/include.php';
		}
	 	$less = new FOFLess;
	 	$less->setFormatter(new FOFLessFormatterJoomla);
		try {
	 		$less->compileFile($currentpath. '/../less/template.less', $currentpath.'/../css/template.css');
		}
		catch (Exception $e) {
	 		$app->enqueueMessage($e->getMessage(), 'error');
	 	}

