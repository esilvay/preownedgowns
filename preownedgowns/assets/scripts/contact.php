<?php
session_start();
if(($_SESSION['security_code'] == $_POST['security_code']) && (!empty($_SESSION['security_code'])) ) {
      // Insert you code for processing the form here, e.g emailing the submission, entering it into a database. 

if ($_POST['form_submitted'] == '1') {
		    $errormsg = array(); //Initialize errors
			$params = array();
			
			$inquirytype = $_POST['inquirytype'];
			
			$name = $_POST['name'];
			$params['name'] = $name;
			
			$email = $_POST['email'];
			$params['email'] = $email;
			
			$listid = $_POST['listid'];
			$params['listid'] = $listid;
			
			$message = $_POST['message'];
			$params['message'] = $message;
			
			$valid = true;

			if (empty($name)){
		    	$valid = false;
		    	$errormsg['name'] = " <font color='red', size='2'><i>Please enter your Name</i></font>";
			}
			if (empty($email)){
		    	$valid = false;
		    	$errormsg['email'] = " <font color='red', size='2'><i>Please enter your Email</i></font>";
			}
			if (empty($message)){
		    	$valid = false;
		    	$errormsg['message'] = " <font color='red', size='2'><i>Please enter your Message</i></font>";
			}
			
			$_SESSION['model']['errormsg'] = $errormsg;
			$_SESSION['model']['params'] = $params;
			header("location:/contact?id=epicfail");
		//If all fields present
		
//$name = mysql_real_escape_string($_REQUEST['name']);
//$email = mysql_real_escape_string($_REQUEST['email']);
//$listid = mysql_real_escape_string($_REQUEST['listid']);
//$message = mysql_real_escape_string($_REQUEST['message']);

		if ($valid){
	
			if ($inquirytype == 1){
					$to      = "info@preownedgowns.com";
					
					$subject = 'Support ID#'.$_REQUEST['listid'].'';
					
					$message = $_REQUEST['message'];
					
					$headers = 'From: donotreply@preownedgowns.com' . "\r\n" .
							   'Reply-To: '.$_REQUEST['email'].'' . "\r\n" .
							   'MIME-Version: 1.0\r\n' . "\r\n" .
							   'Content-Type: text/html; charset=ISO-8859-1\r\n';
					
					mail($to, $subject, $message, $headers);
					sleep(3);
					header("location:/?id=emailsent");
			}
			
			elseif ($inquirytype == 2){
					$to      = "info@preownedgowns.com";
					
					$subject = 'Info/Question/Comment ID#'.$_REQUEST['listid'].'';
					
					$message = $_REQUEST['message'];
					
					$headers = 'From: donotreply@preownedgowns.com' . "\r\n" .
							   'Reply-To: '.$_REQUEST['email'].'' . "\r\n" .
							   'MIME-Version: 1.0\r\n' . "\r\n" .
							   'Content-Type: text/html; charset=ISO-8859-1\r\n';
					
					mail($to, $subject, $message, $headers);
					sleep(3);
					header("location:/?id=emailsent");
			}
			
			elseif ($inquirytype == 3){
					$to      = "info@preownedgowns.com";
					
					$subject = 'Advertise with Us ID#'.$_REQUEST['listid'].'';
					
					$message = $_REQUEST['message'];
					
					$headers = 'From: donotreply@preownedgowns.com' . "\r\n" .
							   'Reply-To: '.$_REQUEST['email'].'' . "\r\n" .
							   'MIME-Version: 1.0\r\n' . "\r\n" .
							   'Content-Type: text/html; charset=ISO-8859-1\r\n';
					
					mail($to, $subject, $message, $headers);
					sleep(3);
					header("location:/?id=emailsent");
			}
		}
		else{
			echo 'You message could not be sent at this time.';
			header("location:/contact?id=epicfail");
		}
}
}
else {
      echo '<div><p>Security code did not match. Please try again.</p></div>';
	  unset($_SESSION['security_code']);
   }
?>