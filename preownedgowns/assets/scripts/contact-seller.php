<?php
	session_start();

   if(($_SESSION['security_code'] == $_POST['security_code']) && (!empty($_SESSION['security_code'])) ) {
      // Insert you code for processing the form here, e.g emailing the submission, entering it into a database. 
	//$email = $result1['Email'];
	include('connect.php');
	$id = $_REQUEST['listingid'];
	$result = mysql_query("SELECT * FROM gowns WHERE ID=$id");
	$result = mysql_fetch_assoc($result);
	$a = $result['AskingPrice'];
	$afinal = number_format($a, 0, '.', ',');
	
	
	$result1 = mysql_query("SELECT Email FROM User WHERE ID=" .$result['UserID']);
	$result1 = mysql_fetch_assoc($result1);
	
if ($_POST['form_submitted'] == '1') {
		    $errormsg = array(); //Initialize errors
			$params = array();
			
			$name = $_POST['name'];
			$params['name'] = $name;
			
			$inquiryemail = $_POST['inquiryemail'];
			$params['inquiryemail'] = $inquiryemail;
			
			$message = $_POST['message'];
			$params['message'] = $message;
			
			$valid = true;

			if (empty($name)){
		    	$valid = false;
				echo '<p>Please enter your name</p><br />';

			}
			if (empty($inquiryemail)){
		    	$valid = false;
				echo '<p>Please enter your email</p><br />';

			}
			if (empty($message)){
		    	$valid = false;
				echo '<p>Please enter your message</p><br />';

			}
			
			$_SESSION['model']['errormsg'] = $errormsg;
			$_SESSION['model']['params'] = $params;

		if ($valid){
				$to      = $result1['Email'];

				$subject = 'Gown Listing Item ID# '.$result['ID'].'';
				
				$message = '<html><body>
				<p>You received a message from '.$_REQUEST['inquiryemail'].' about your item listing.</p>
				<p><strong>Message:</strong></p>
				<p>'.$_REQUEST['message'].'</p><br />
				<p><img src="http://www.preownedgowns.com/assets/listimg/'.$result['Image1'].'" style="width:166px; height:200px; border: none;"/></p>
				<p>'.$result['Designer'].'</p>
				<p>$'.$afinal.'</p>
				<p><a href="http://www.preownedgowns.com/gowns/look&gown='.$result['Designer'].'&id='.$result['ID'].'">Click Here to View Listing</a></p><br />
				<p>To respond to this inquiry, simply reply to this email.</p><br />
				<p>Regards,</p>
				<p>PreOwnedGowns Team</p>
				<p>http://www.preownedgowns.com</p>
				</body></html>';
				
				$headers = 'From: donotreply@PreOwnedGowns.com' . "\r\n" .
						   'Reply-To: '.$_REQUEST['inquiryemail'].'' . "\r\n" .
						   'MIME-Version: 1.0\r\n' . "\r\n" .
						   'Content-Type: text/html; charset=ISO-8859-1\r\n';
				
				mail($to, $subject, $message, $headers);
				echo '<div class="verified"><h2>Message Sent</h2></div>';
		}
		else{
			$errormsg['error'] = " <font color='red', size='2'><i>You message could not be sent at this time.</i></font>";
			echo '<div class="verified-text"><p>Unable to send message at this time. Please try again later.</p></div>';
		}
		      unset($_SESSION['security_code']);
   }
mysql_close($conn);
}
else {
      echo '<div><p>Security code did not match. Please try again.</p></div>';
	  unset($_SESSION['security_code']);
   }
?>