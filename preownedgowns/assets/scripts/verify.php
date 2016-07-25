<?php
session_start();

include('connect.php');
	
	if ($_POST['form_submitted'] == '1') {
		    $errormsg = array(); //Initialize errors
			$params = array();
		
			$firstname = $_POST['firstname'];
			$params['firstname'] = $firstname;
			
			
			$lastname = $_POST['lastname'];
			$params['lastname'] = $lastname;
			
			
			$email = $_POST['email'];
			$params['email'] = $email;
			
			
			$cemail = $_POST['cemail'];
			$params['cemail'] = $cemail;
			
			
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
			
			
			$password = $_POST['password'];
			$params['password'] = $password;
			
			
			$cpassword = $_POST['cpassword'];
			$params['cpassword'] = $cpassword;
			$valid = true;

			if (empty($firstname)){
		    	$valid = false;
		    	$errormsg['firstname'] = " <font color='red', size='2'><i>Please enter your First Name</i></font>";
			}
			if (empty($lastname)){
		    	$valid = false;
		    	$errormsg['lastname'] = " <font color='red', size='2'><i>Please enter your Last Name</i></font>";
			}
			if (empty($email)){
		    	$valid = false;
		    	$errormsg['email'] = " <font color='red', size='2'><i>Please enter your Email</i></font>";
			}
			if (empty($cemail)){
		    	$valid = false;
		    	$errormsg['cemail'] = " <font color='red', size='2'><i>Please confirm your Email</i></font>";
			}
			if ($email !== $cemail){
		    	$valid = false;
		    	$errormsg['bemail'] = " <font color='red', size='2'><i>Email's do not match</i></font>";
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
			if (empty($password)){
		    	$valid = false;
		    	$errormsg['password'] = " <font color='red', size='2'><i>Please enter your Password</i></font>";
			}
			if (empty($cpassword)){
		    	$valid = false;
		    	$errormsg['cpassword'] = " <font color='red', size='2'><i>Please confirm your Password</i></font>";
			}
			if ($password !== $cpassword){
		    	$valid = false;
		    	$errormsg['bpassword'] = " <font color='red', size='2'><i>Password's do not match</i></font>";
			}
			
			$_SESSION['model']['errormsg'] = $errormsg;
			$_SESSION['model']['params'] = $params;
			header("location:/register?id=epicfail");
		//If all fields present
		if ($valid){
   		
			$activationkey =  md5(uniqid(rand()));
			
			$email = mysql_real_escape_string($_POST['email']);
			$password = mysql_real_escape_string($_POST['password']);
			$firstname = mysql_real_escape_string($_POST['firstname']);
			$lastname = mysql_real_escape_string($_POST['lastname']);
			$address1 = mysql_real_escape_string($_POST['address1']);
			$address2 = mysql_real_escape_string($_POST['address2']);
			$city = mysql_real_escape_string($_POST['city']);
			$state = mysql_real_escape_string($_POST['state']);
			$zip = mysql_real_escape_string($_POST['zip']);
			$telephone = mysql_real_escape_string($_POST['telephone']);
			$joindate = date('Y-m-d');
			$status = 'unverified';
			
			
			$sql="INSERT INTO User (Email, Password, ActivationKey, Status, Joindate) VALUES ('$email', '$password', '$activationkey', '$status', '$joindate')";
			
			## Form was submitted,the user is registering!
			
			if (!mysql_query($sql))
			  
			  {
			
			  die('Error: ' . mysql_error());
			
			  }
			
			$UserID = mysql_insert_id();
			
			$sql="INSERT INTO Accounts (FirstName, LastName, Address1, Address2, City, State, Zip, Telephone, Joindate, UserID) VALUES ('$firstname', '$lastname', '$address1', '$address2', '$city', '$state', '$zip', '$telephone', '$joindate', '$UserID')";
			
			if (!mysql_query($sql))
			  
			  {
			
			  die('Error: ' . mysql_error());
			
			  }
			
			//echo "An email has been sent to ".$_POST['email']." with an activation key. Please check your mail to complete registration.";
			
			##Send activation Email    http://www.preownedgowns.com/assets/scripts/activate-account.php?ak=$activationkey
			
			$to      = $email;
			$subject = " PreOwnedGowns Registration";
			
			$message = "Welcome to PreOwnedGowns!\r\r\n You are 1 step away from completing your registration at PreOwnedGowns.com. To complete registration please clickthe following link:\r\r\n\rhttp://www.preownedgowns.com/assets/scripts/activate-account.php?ak=$activationkey\r\r\n If this is an error, ignore this email and you will be removed from our mailing list.\r\r\nRegards,\r\r\n PreOwnedGowns.com Team";
			
			$headers = 'From: donotreply@preownedgowns.com' . "\r\n" .
					   'X-Mailer: PHP/' . phpversion();
			
			
			mail($to, $subject, $message, $headers);
			header("location:/register/verify?id=emailverificationsent");
			
			}
			else { print $errormsg; }
			}
mysql_close($conn);
?>