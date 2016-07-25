<?php

include('connect.php');


if ($_POST['reset-password'] == '1') {
		    $errormsg = array(); //Initialize errors
			$params = array();
			
			$email = $_POST['email'];
			$params['email'] = $email;
			$valid = true;
			
			if (empty($email)){
		    	$valid = false;
		    	$errormsg['email'] = " <font color='red', size='2'><i>Please enter your Email Address</i></font>";
			}
			
			session_start();
			$_SESSION['model']['errormsg'] = $errormsg;
			$_SESSION['model']['params'] = $params;
			header("location:/login/forgot?id=epicfail");
		//If all fields present

if ($valid){

$email = mysql_real_escape_string($_POST['email']);

// retrieve password from table where e-mail = $email_to(mark@phpeasystep.com)
$sql="SELECT password FROM User WHERE email='$email'";
$result=mysql_query($sql);

// if found this e-mail address, row must be 1 row
// keep value in variable name "$count"
$count = mysql_num_rows($result);
// compare if $count =1 row

if($count == 0){
	$errormsg['fail'] = " <font color='red', size='2'><i>Invalid Email Address</i></font>";
	
	session_start();
	$_SESSION['model']['errormsg'] = $errormsg;
	header("location:/login/forgot?id=epicfail");
	mysql_query($sql) or die(mysql_error());
	}
	
if($count == 1){
	
	$errormsg['success'] = " <font color='green', size='2'><i>Password has been sent</i></font>";
	$rows=mysql_fetch_array($result);
	
	// keep password in $your_password
	$your_password=$rows['password'];
	session_start();
	$_SESSION['model']['errormsg'] = $errormsg;
	header("location:/login/forgot?id=emailremindersent");
	
 // ---------------- SEND MAIL FORM ----------------

// send e-mail to ...
$to=$email;

// Your subject
$subject="Password Reminder Email";

// From
$header= 'From: donotreply@preownedgowns.com' . "\r\n" .

    'Reply-To: donotreply@preownedgowns.com' . "\r\n" .

    'X-Mailer: PHP/' . phpversion();

// Your message
$messages= "As promised... Here is your Password Reminder from PreOwnedGowns.com \r\r";
$messages.="Your password is: $your_password \r\r\r";
$messages.="Regards,\r\rPreownedGowns.com Team\r\n";

// send email
$sentmail = mail($to,$subject,$messages,$header);

		}
else{
	$errormsg['error'] = " <font color='red', size='2'><i>Unable to send</i></font>";
	
	session_start();
	$_SESSION['model']['errormsg'] = $errormsg;
	header("location:/login/forgot?id=epicfail");
}
	}
}
mysql_close($conn);
?>