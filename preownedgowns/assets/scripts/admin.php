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
		sleep(3);
		header("Location:/login?id=PermissionDenied");
	}
	if (empty($password)){
		$valid = false;
		$errormsg['password'] = " <font color='red', size='2'><i>Please enter your Password.</i></font>";
		sleep(3);
		header("Location:/login?id=PermissionDenied");
	}

	if ($valid){
		
		// To protect MySQL injection (more detail about MySQL injection)
		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['password']);
		
		//This checks to see if there was a match which means everything the user typed
		//in was correct and matched everything in the database
		$result = mysql_query("SELECT ID, Admin FROM User WHERE Email='$email' and Password='$password'");
		$count = mysql_num_rows($result);
		$result = mysql_fetch_assoc($result);
		
		// Define $myusername, $mypassword, error message and error display
		if($count == 0){
			$errormsg['active'] = " <font color='red', size='2'><i>Incorrect Email or Password.</i></font>";

			session_start();
			$_SESSION['model']['errormsg'] = $errormsg;
			$_SESSION['model']['params'] = $params;
			sleep(3);
			header("Location:/login?id=PermissionDenied");
			}
		elseif($result['Admin'] == '1'){
			session_start();
				 $_SESSION['admin_logged_in'] = $result['ID'];
				 $grabname = mysql_query("SELECT FirstName FROM Accounts WHERE UserID = ".$result['ID']);
				 $r = mysql_fetch_assoc($grabname);
				 $_SESSION['firstname'] = $r['FirstName'];
			header("Location:/admin/home?id=success");
			exit();
			}
			else{
			session_start();
			header("Location:/login?id=PermissionDenied");
			exit();
			}
	}
	else {
		session_start();
		$_SESSION['model']['errormsg'] = $errormsg;
		$_SESSION['model']['params'] = $params;
		header("Location:/login?id=PermissionDenied");	
	}
}
mysql_close($conn);
?>