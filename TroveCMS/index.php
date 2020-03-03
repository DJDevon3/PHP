<?php 


// Load the template engine
require_once('core/tpl_engine.inc');
global $TEMPLATE;
$TEMPLATE = & new Template($path);

// template engine requires this path to be set
$path = '';
$selected_theme = 'default';

// Not an Install so load themes.
if (file_exists('core/live.inc') && !file_exists('install/index.php')){
	// Detected core config but not install folder.  LIVE site.
	include_once('theme/'.$selected_theme.'/theme.php');

} elseif (file_exists('core/live.inc') && file_exists('install/index.php')){
	// Detected core config and install folder.  Failed installation?
	$installation_process = "Detected a previous install!<br />Delete core/live.inc to perform a fresh installation.<br />";
	include_once('theme/'.$selected_theme.'/theme.php');

}else {
	// Detected clean install and ready to go.
	$installation_process = "Welcome to Treasure Trove CMS<br /><br />We're still under construction...<br /><br />You can pass the time by reading <a href='../guide.html'>our guidelines</a>.";
	include_once('theme/'.$selected_theme.'/theme.php');
}