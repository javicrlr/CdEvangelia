<?php
/**
 * @package Joomla.Site
 * @subpackage Templates.dna
 *
 * @copyright Copyright (C) 2014 Robert Went. All rights reserved.
 * @license GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;
class JFormFieldCompile extends JFormField {
	 protected function getInput() {
		 $app = JFactory::getApplication();
		 $jinput = $app->input;
		 $compile = 0;
		 $compile = $jinput->get('compileless');
		 $currentpath = realpath(__DIR__ ) ;
		 $pageurl = str_replace('&amp;compileless=1', '', JURI::getInstance ());
		if ($compile) {
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
	}
	return '<button onclick="window.location.href=\''.$pageurl.'\'+\'&amp;compileless=1\'" class="btn btn-primary" type="button">Compile Less</button>';
	 }
}
?>