<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$dbhost							= "mysql.preownedgowns.com";
$dbuser							= "preownedgowns";
$dbpass							= "ericryan1";
$dbname							= "preownedgowns";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysql_select_db($dbname);
?>