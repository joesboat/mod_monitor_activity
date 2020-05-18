<?php
/**
* @package Author
* @author Joseph P. Gibson
* @website www.joesboat.org
* @email joe@joesboat.org
* @copyright @copyright Copyright (C) 2015 Joseph P. Gibson. All rights reserved.
* @license GNU General Public License version 2 or later;  see LICENSE.txt
**/

// no direct access
defined('_JEXEC') or die('Restricted access');
jimport('usps.includes.routines');
date_default_timezone_set('America/New_York');

$debug = $params->get("siteLog");
$logFile = $params->get("logFile");
$doc = JFactory::getDocument(); 
$page_title = $doc->getTitle();
require_once(dirname(__FILE__).'/helper.php');

	$l_name = "logs/$logFile";
	$f = @fopen($l_name, 'a+');
	if($f){
		$str = date("m.d.Y g:ia").",  ".$page_title.",  ".$_SERVER['REMOTE_ADDR'];
		@fputs($f, $str."\n");
	  	@fclose($f);
	}


//  require(JModuleHelper::getLayoutPath('mod_monitor_activity'));


