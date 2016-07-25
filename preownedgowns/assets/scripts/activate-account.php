<?php

include('connect.php');

$queryString = $_GET['ak'];
$query = "SELECT * FROM User WHERE ActivationKey = '$queryString'"; 
															
$result = mysql_query($query) or die(mysql_error());
$rowCount = mysql_num_rows($result);

if($rowCount == 1){
	$array = mysql_fetch_assoc($result);
	
	$sql = "UPDATE User SET Status = 'activated' WHERE ID = " . $array['ID'];
	mysql_query($sql) or die(mysql_error());
	header("location:/register/activated?id=success");
	echo "Congratulations! You're account is now active. Please Login.";
}
else if($rowCount == 0){
	header("location:/register/activation_error?id=failure");
	echo "Unable to activate account. Please try again later.";	
}
else{
	//echo "Error message = ".mysql_error();
	print 'ambiguous result';
}
mysql_close($conn);
?>

