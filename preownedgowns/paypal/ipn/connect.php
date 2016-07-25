<?php
$dbhost							= "preownedgownsdb.db.6391935.hostedresource.com";
$dbuser							= "preownedgownsdb";
$dbpass							= "Ericryan1";
$dbname							= "preownedgownsdb";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysql_select_db($dbname);
?>