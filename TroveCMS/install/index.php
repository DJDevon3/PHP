<?php

require_once('functions.inc');

	// Initialize DATABASE connection
	require_once('../init.inc');
		if ($db==true){
			$message = 'Database Connected <br />';
		}else{
			$message = 'Unable to Connect to the Database';
		}


echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
echo '<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xml:lang="en" lang="en">';
echo '<head>';
echo '<link rel="stylesheet" type="text/css" href="../theme/default/css/style.css" />';
echo '<title>Treasure Trove Content Management System >> Installation</title>';
echo '</head>';
echo '<body>';
echo '<div id="xouter">';
	echo '<div id="xcontainer">';
		echo '<div id="xinner">';
		echo '<h1>Treasure Trove CMS</h1><br />';
		echo '<img src="../images/logo.png" alt="" /><br />';

$switch = '';
if ( isset($_POST['type']) || isset($_GET['type']) ) {
  $switch = (isset($_GET['type'])) ? $_GET['type'] : $_POST['type'] ;
}

switch($switch){

	default:
		Install_Choice();
	break;

	case 'CMS':
		Install_CMS();
			echo "CMS Installation";
	break;

	case 'PHP':
		Install_PHP();
	break;

	case 'PHP_Confirmed':
		$hta		= isset($_POST['hta'])		? intval($_POST['hta'])		: '0' ;
		$tpl_eng	= isset($_POST['tpl_eng'])	? intval($_POST['tpl_eng'])	: '0' ;
		$errpg		= isset($_POST['errpg'])	? intval($_POST['errpg'])	: '0' ;
		$crfunc		= isset($_POST['crfunc'])	? intval($_POST['crfunc'])	: '0' ;
		Install_PHP_Submit ($hta, $tpl_eng, $errpg, $crfunc);
	break;

	case 'TT_PHP_Cleanup':
		$hta		= isset($_POST['hta'])		? intval($_POST['hta'])		: '0' ;
		$tpl_eng	= isset($_POST['tpl_eng'])	? intval($_POST['tpl_eng'])	: '0' ;
		$errpg		= isset($_POST['errpg'])	? intval($_POST['errpg'])	: '0' ;
		$crfunc		= isset($_POST['crfunc'])	? intval($_POST['crfunc'])	: '0' ;
		$confirm	= isset($_POST['PHP_Install_Confirm'])	? intval($_POST['PHP_Install_Confirm'])	: '0' ;
		Install_PHP_Cleanup($hta, $tpl_eng, $errpg, $crfunc, $confirm);
	break;
}

		echo '</div>';
	echo '</div>';
echo '</div>';
echo '<div id="footer">Treasure Trove CMS &copy; <a href="http://www.TreasureCoastDesigns.com">T.C.D.</a></div>';
echo '</body>';
echo '</html>';
