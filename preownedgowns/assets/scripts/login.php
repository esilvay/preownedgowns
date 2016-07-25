<?php
// Connect to server and select databse.
include('connect.php');

if ($_POST['login_submitted'] == '1') {
	$errormsg = array(); //Initialize errors
	$params = array();
	
	$email = $_POST['email'];
	$params['email'] = $email;
	$valid = true;
	
	$password = $_POST['password'];
	$params['password'] = $password;
	$valid = true;
	
	if (empty($email)){
		$valid = false;
		$errormsg['email'] = " <font color='red', size='2'><i>Please enter your Email</i></font>";
	}
	if (empty($password)){
		$valid = false;
		$errormsg['password'] = " <font color='red', size='2'><i>Please enter your Password</i></font>";
	}

	if ($valid){
		
		// To protect MySQL injection (more detail about MySQL injection)
		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['password']);
		
		//This checks to see if there was a match which means everything the user typed
		//in was correct and matched everything in the database
		$result = mysql_query("SELECT ID, Status FROM User WHERE Email='$email' and Password='$password'");
		$count = mysql_num_rows($result);
		$result = mysql_fetch_assoc($result);
		
		// Define $myusername, $mypassword, error message and error display
		if($result['Status'] == 'unverified'){
			$errormsg['inactive'] = " <font color='red', size='2'><i>Account not yet activated. Please check your email for the confirmation link.</i></font>";
		
			session_start();
			$_SESSION['model']['errormsg'] = $errormsg;
			$_SESSION['model']['params'] = $params;
			header("Location:/login?id=epicfail");
			}
			
		elseif($count == 1){
			session_start();
				 $_SESSION['is_logged_in'] = $result['ID'];
				 $grabname = mysql_query("SELECT FirstName FROM Accounts WHERE UserID = ".$result['ID']);
				 $r = mysql_fetch_assoc($grabname);
				 $_SESSION['firstname'] = $r['FirstName'];
			header("Location:/member?id=success");
			exit();
			}
		
		elseif($count == 0){
			$errormsg['active'] = " <font color='red', size='2'><i>Incorrect Email or Password.</i></font>";
		
			session_start();
			$_SESSION['model']['errormsg'] = $errormsg;
			$_SESSION['model']['params'] = $params;
			header("Location:/login?id=epicfail");
			}
	}
	else {
		session_start();
		$_SESSION['model']['errormsg'] = $errormsg;
		$_SESSION['model']['params'] = $params;
		header("Location:/login?id=epicfail");	
	}
}
mysql_close($conn);
?>