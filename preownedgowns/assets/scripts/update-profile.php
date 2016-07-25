<?php
// Connect to server and select databse.
include('connect.php');

session_start();

if ($_POST['form_submitted'] == '1') {
		    $errormsg = array(); //Initialize errors
			$params = array();
		
			$firstname = $_POST['firstname'];
			$params['firstname'] = $firstname;
			
			
			$lastname = $_POST['lastname'];
			$params['lastname'] = $lastname;
			
			
			$address1 = $_POST['address1'];
			$params['address1'] = $address1;
			
			
			$city = $_POST['city'];
			$params['city'] = $city;
			
			
			$state = $_POST['state'];
			$params['state'] = $state;
			
			
			$zip = $_POST['zip'];
			$params['zip'] = $zip;
			
			
			$telephone = $_POST['telephone'];
			$params['telephone'] = $telephone;

			$valid = true;

			if (empty($firstname)){
		    	$valid = false;
		    	$errormsg['firstname'] = " <font color='red', size='2'><i>Please enter your First Name</i></font>";
			}
			if (empty($lastname)){
		    	$valid = false;
		    	$errormsg['lastname'] = " <font color='red', size='2'><i>Please enter your Last Name</i></font>";
			}
			if (empty($address1)){
		    	$valid = false;
		    	$errormsg['address1'] = " <font color='red', size='2'><i>Please enter your Address</i></font>";
			}
			if (empty($city)){
		    	$valid = false;
		    	$errormsg['city'] = " <font color='red', size='2'><i>Please enter your City</i></font>";
			}
			if (empty($state)){
		    	$valid = false;
		    	$errormsg['state'] = " <font color='red', size='2'><i>Please enter your State</i></font>";
			}
			if (empty($zip)){
		    	$valid = false;
		    	$errormsg['zip'] = " <font color='red', size='2'><i>Please enter your Zip</i></font>";
			}
			if (empty($telephone)){
		    	$valid = false;
		    	$errormsg['telephone'] = " <font color='red', size='2'><i>Please enter your Telephone</i></font>";
			}
			
		//If all fields present
		if ($valid){

$firstname = mysql_real_escape_string($_POST['firstname']);
$lastname = mysql_real_escape_string($_POST['lastname']);
$address1 = mysql_real_escape_string($_POST['address1']);
$address2 = mysql_real_escape_string($_POST['address2']);
$city = mysql_real_escape_string($_POST['city']);
$state = mysql_real_escape_string($_POST['state']);
$zip = mysql_real_escape_string($_POST['zip']);
$telephone = mysql_real_escape_string($_POST['telephone']);

$sql="UPDATE Accounts SET FirstName = '$firstname', LastName = '$lastname', Address1 = '$address1', Address2 = '$address2', City = '$city', State = '$state', Zip = '$zip', Telephone = '$telephone' WHERE UserID = " . $_SESSION['is_logged_in'];
mysql_query($sql) or die(mysql_error());

	$errormsg['updatedsuccess'] = " <font color='green', size='2'><i>Profile Successfully Updated.</i></font>";
	$_SESSION['model']['errormsg'] = $errormsg;
	header("Location:/member/manageprofile?id=successfulupdate");

}
else { 
	$_SESSION['model']['errormsg'] = $errormsg;
	header("Location:/member/manageprofile?id=epicfail");
}
}
mysql_close($conn);
?>