<?php 

// initialize database
require_once('core/db/mysql.php');

// commonly used paths
$basepath = dirname(__FILE__);
$basepath = (TRV_WINDOWS) ? str_replace('\\','/',$basepath) : $basepath ;
$basepath = (strlen($basepath)>2) ? $basepath : '.' ;

// Base is absolute
define('TRV_BASEPATH',  $basepath.'/');

// Root is relative
define('TRV_ROOTPATH',  $_SERVER['DOCUMENT_ROOT'].'/');

define('TRV_COREPATH',  TRV_BASEPATH.'core/');
define('TRV_CACHPATH',  TRV_BASEPATH.'cache/');
define('TRV_PLUGPATH',  TRV_BASEPATH.'plugin/');
define('TRV_THEMEPATH', TRV_BASEPATH.'theme/');



