<?php
	include('connect.php');
	
if ($_POST['form_submitted'] == '1') {
	$q = mysql_escape_string($_REQUEST['q']);
	header("Location:/search?q=$q");
}
?>
