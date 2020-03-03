<?php

/************************************************************************
  Trove CMS :: Copyright (c) 2008 Trove Partners
  ***********************************************************************/
function Install_Choice(){
	echo '<h2>CHOOSE YOUR INSTALLATION TYPE</h2>';
	echo '<a href="/install/index.php?type=PHP">Pure PHP</a> or <a href="/install/index.php?type=CMS">Database CMS</a><br /><br />';
	echo 'If you need help deciding please take a look at our <a href="../guide.html">guide</a>.<br />';
}

function Install_PHP(){
	echo '<h2>TT-PHP CONFIGURATION</h2>';
	echo 'When we say lightweight we mean lightweight.<br /><br />';
	echo '<form action="index.php?type=PHP_Confirmed" method="post" accept-charset="utf-8">';
	echo '<table width="100%" border="0" cellpadding="0" cellspacing="0">';
	echo "<tr><td width='45%' align='right'><input type='checkbox' name='hta' value='1' checked='checked' /> </td><td align='left'> &nbsp; HTAccess </td></tr>";
	echo "<tr><td width='45%' align='right'><input type='checkbox' name='tpl_eng' value='1' checked='checked' /> </td><td align='left'> &nbsp; Template Engine </td></tr>";
	echo "<tr><td width='45%' align='right'><input type='checkbox' name='errpg' value='1' checked='checked' /> </td><td align='left'> &nbsp; Error Page </td></tr>";
	echo "<tr><td width='45%' align='right'><input type='checkbox' name='crfunc' value='1' checked='checked' /> </td><td align='left'> &nbsp; Pre-Built Functions </td></tr>";
	echo "</table><br />";
    echo "<input type='hidden' name='type' value='PHP_Confirmed' />"
    	."<div align='center'><input type='submit' value='Continue' /></div>"
    	."</form>";
}

function Install_PHP_Submit($hta, $tpl_eng, $errpg, $crfunc){
	echo '<h2>TT-PHP CONFIG LOADED</h2>';

	echo 'Are you sure you want to install TT-PHP?<br />';
	echo 'This will delete directories and files needed for the CMS version...<br />';
	echo 'You can easily add them back in and upgrade in the future.<br /><br />';

  	echo '<form action="index.php" method="post" accept-charset="utf-8">';
	echo "<input type='hidden' name='hta' value='".$hta."' />";
	echo "<input type='hidden' name='tpl_eng' value='".$tpl_eng."' />";
	echo "<input type='hidden' name='errpg' value='".$errpg."' />";
	echo "<input type='hidden' name='crfunc' value='".$crfunc."' />";
  	echo "<input type='hidden' name='PHP_Install_Confirm' value='1' />";
	echo "You have elected: ".$hta.", ".$tpl_eng.", ".$errpg.", ".$crfunc."<br /><br />";
	echo "<br /><br />";
    echo "<input type='hidden' name='type' value='TT_PHP_Cleanup' />"
    	."<div align='center'><input type='submit' value='INSTALL' /></div>"
    	."</form>";

}

function Install_PHP_Cleanup($hta, $tpl_eng, $errpg, $crfunc, $confirm){
	// Confirm selection came from post on own domain
	if ($confirm==1){
	echo '<h2>INSTALLATION COMPLETED</h2>';
	echo "Removing Bloat...<br /><br />";

	echo '<table width="100%" border="0" cellpadding="0" cellspacing="0">';
	echo "<tr><td width='45%' align='right'>DELETED:</td><td align='left'> &nbsp; /core/db/";
	echo "<tr><td width='45%' align='right'>DELETED:</td><td align='left'> &nbsp; /core/js/";
	echo "<tr><td width='45%' align='right'>DELETED:</td><td align='left'> &nbsp; /core/functions.inc";
	echo "<tr><td width='45%' align='right'>DELETED:</td><td align='left'> &nbsp; /install/<br />";
	echo "<tr><td width='45%' align='right'>DELETED:</td><td align='left'> &nbsp; /plugin/";
	echo "</table><br />";
	echo "You have elected: ".$hta.", ".$tpl_eng.", ".$errpg.", ".$crfunc.", ".$confirm."<br /><br />";

	echo "TT-PHP Installation Completed<br />";
	echo "You now have a lightweight php site.";
/*
	delete_directory('../core/db/');
	delete_directory('../core/js/');
	unlink('../core/functions.inc');
	delete_directory('../install/');
	delete_directory('../plugin/');
*/
	}else{
	echo '<h2>INSTALLATION ERROR</h2>';
	echo 'Invalid Request Parameter...<br /><br />';
	}
}


function delete_directory($dirname) {
   if (is_dir($dirname))
      $dir_handle = opendir($dirname);
   if (!$dir_handle)
      return false;
   while($file = readdir($dir_handle)) {
      if ($file != "." && $file != "..") {
         if (!is_dir($dirname."/".$file))
            unlink($dirname."/".$file);
         else
            delete_directory($dirname.'/'.$file);    
      }
   }
   closedir($dir_handle);
   rmdir($dirname);
   return true;
}


function Install_CMS(){
	echo '<h2>DATABASE CMS INITIALIZED</h2>';
}


?>