<?php
ini_set('session.gc_maxlifetime', 1*60*60);
SESSION_START();
// config database
$host = "mysql3.gear.host";
$username = "nghia";
$password = "fujn#Lkf349@uOm!";	
$dbname = "nghia";
$connection = mysql_connect($host,$username,$password);
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");
?>