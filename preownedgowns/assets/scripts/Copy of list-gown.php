<?php

$link = mysql_connect ('preownedgownsdb.db.6391935.hostedresource.com', 'preownedgownsdb', 'Ericryan1') or die ('Error: ' .mysql_error());

mysql_select_db('preownedgownsdb') or die(mysql_error());

if ($_POST['form_submitted'] == '1') {
		    $errormsg = array(); //Initialize errors
			$params = array();
		
			$gowntype = $_POST['gowntype'];
			$params['gowntype'] = $gowntype;
			
			
			$designer = $_POST['designer'];
			$params['designer'] = $designer;
			
			
			$gowncondition = $_POST['gowncondition'];
			$params['gowncondition'] = $gowncondition;
			
			
			$silhouette = $_POST['silhouette'];
			$params['silhouette'] = $silhouette;
			
			
			$sleevestyle = $_POST['sleevestyle'];
			$params['sleevestyle'] = $sleevestyle;
			
			
			$stylenumber = $_POST['stylenumber'];
			$params['stylenumber'] = $stylenumber;
			
			
			$neckline = $_POST['neckline'];
			$params['neckline'] = $neckline;
			
			
			$waistline = $_POST['waistline'];
			$params['waistline'] = $waistline;
			
			
			$dresslength = $_POST['dresslength'];
			$params['dresslength'] = $dresslength;
			
			
			$purchasedate = $_POST['purchasedate'];
			$params['purchasedate'] = $purchasedate;
			
			
			$paid = $_POST['paid'];
			$params['paid'] = $paid;
			
			
			$askingprice = $_POST['askingprice'];
			$params['askingprice'] = $askingprice;
			
			
			$labelsize = $_POST['labelsize'];
			$params['labelsize'] = $labelsize;
			
			
			$streetsize = $_POST['streetsize'];
			$params['streetsize'] = $streetsize;
			
			
			$bustsize = $_POST['bustsize'];
			$params['bustsize'] = $bustsize;
			
			
			$waistsize = $_POST['waistsize'];
			$params['waistsize'] = $waistsize;
			
			
			$hipsize = $_POST['hipsize'];
			$params['hipsize'] = $hipsize;
			
			
			$heightwshoes = $_POST['heightwshoes'];
			$params['heightwshoes'] = $heightwshoes;
			
			
			$gowndescr = $_POST['gowndescr'];
			$params['gowndescr'] = $gowndescr;
			
			
			$altdescr = $_POST['altdescr'];
			$params['altdescr'] = $altdescr;
			
			
			$veildescr = $_POST['veildescr'];
			$params['veildescr'] = $veildescr;
			
			
			$presmethod = $_POST['presmethod'];
			$params['presmethod'] = $presmethod;
			
			$typeofseller = $_POST['typeofseller'];
			$params['typeofseller'] = $typeofseller;
			
			
			$originalreceipt = $_POST['originalreceipt'];
			$params['originalreceipt'] = $originalreceipt;
			
			
			$originalowner = $_POST['originalowner'];
			$params['originalowner'] = $originalowner;
			
			
			$state = $_POST['state'];
			$params['state'] = $state;
			
			
			$city = $_POST['city'];
			$params['city'] = $city;
			
			
			$zip = $_POST['zip'];
			$params['zip'] = $zip;
			
			
			$shippingcosts = $_POST['shippingcosts'];
			$params['shippingcosts'] = $shippingcosts;
			
			
			$saleterms = $_POST['saleterms'];
			$params['saleterms'] = $saleterms;
			
			
			$acceptpayment = $_POST['acceptpayment'];
			$params['acceptpayment'] = $acceptpayment;
			
			
			$contactemail = $_POST['contactemail'];
			$params['contactemail'] = $contactemail;
			
			
			$hearaboutpog = $_POST['hearaboutpog'];
			$params['hearaboutpog'] = $hearaboutpog;
			
			
			$termsagree = $_POST['termsagree'];
			$params['termsagree'] = $termsagree;
			
			$valid = true;

			if (empty($gowntype)){
		    	$valid = false;
		    	$errormsg['gowntype'] = " <font color='red', size='2'><i>Please select Gown Type</i></font>";
			}
			if (empty($designer)){
		    	$valid = false;
		    	$errormsg['designer'] = " <font color='red', size='2'><i>Please select a Designer</i></font>";
			}
			if (empty($gowncondition)){
		    	$valid = false;
		    	$errormsg['gowncondition'] = " <font color='red', size='2'><i>Please enter a Condition</i></font>";
			}
			if (empty($purchasedate)){
		    	$valid = false;
		    	$errormsg['purchasedate'] = " <font color='red', size='2'><i>Please select Purchase Date</i></font>";
			}
			if (empty($askingprice)){
		    	$valid = false;
		    	$errormsg['askingprice'] = " <font color='red', size='2'><i>Please enter Asking Price</i></font>";
			}
			if (empty($labelsize)){
		    	$valid = false;
		    	$errormsg['labelsize'] = " <font color='red', size='2'><i>Please select a Label Size</i></font>";
			}
			if (empty($streetsize)){
		    	$valid = false;
		    	$errormsg['streetsize'] = " <font color='red', size='2'><i>Please select a Street Size</i></font>";
			}
			if (empty($typeofseller)){
		    	$valid = false;
		    	$errormsg['typeofseller'] = " <font color='red', size='2'><i>Please select Type of Seller</i></font>";
			}
			if (empty($originalreceipt)){
		    	$valid = false;
		    	$errormsg['originalreceipt'] = " <font color='red', size='2'><i>Please Select Original Receipt</i></font>";
			}
			if (empty($originalowner)){
		    	$valid = false;
		    	$errormsg['originalowner'] = " <font color='red', size='2'><i>Possess Original Receipt</i></font>";
			}
			if (empty($state)){
		    	$valid = false;
		    	$errormsg['state'] = " <font color='red', size='2'><i>Please select your State</i></font>";
			}
			if (empty($zip)){
		    	$valid = false;
		    	$errormsg['zip'] = " <font color='red', size='2'><i>Please enter your Zip</i></font>";
			}
			if ($termsagree == 0){
		    	$valid = false;
		    	$errormsg['termsagree'] = " <font color='red', size='2'><i>Do you Agree to our Terms</i></font>";
			}
		//If all fields present
		if ($valid){

		$gowntype = mysql_real_escape_string($_POST['gowntype']);
		$designer = mysql_real_escape_string($_POST['designer']);
		$gowncondition = mysql_real_escape_string($_POST['gowncondition']);
		$silhouette = mysql_real_escape_string($_POST['silhouette']);
		$sleevestyle = mysql_real_escape_string($_POST['sleevestyle']);
		$stylenumber = mysql_real_escape_string($_POST['stylenumber']);
		$neckline = mysql_real_escape_string($_POST['neckline']);
		$waistline = mysql_real_escape_string($_POST['waistline']);
		$dresslength = mysql_real_escape_string($_POST['dresslength']);
		$purchasedate = mysql_real_escape_string($_POST['purchasedate']);
		$paid = mysql_real_escape_string($_POST['paid']);
		
		$askingprice = mysql_real_escape_string($_POST['askingprice']);
		$labelsize = mysql_real_escape_string($_POST['labelsize']);
		$streetsize = mysql_real_escape_string($_POST['streetsize']);
		$bustsize = mysql_real_escape_string($_POST['bustsize']);
		$waistsize = mysql_real_escape_string($_POST['waistsize']);
		$hipsize = mysql_real_escape_string($_POST['hipsize']);
		$heightwshoes = mysql_real_escape_string($_POST['heightwshoes']);
		$gowndescr = mysql_real_escape_string($_POST['gowndescr']);
		$altdescr = mysql_real_escape_string($_POST['altdescr']);
		
		$veildescr = mysql_real_escape_string($_POST['veildescr']);
		$presmethod = mysql_real_escape_string($_POST['presmethod']);
		$typeofseller = mysql_real_escape_string($_POST['typeofseller']);
		$originalreceipt = mysql_real_escape_string($_POST['originalreceipt']);
		$originalowner = mysql_real_escape_string($_POST['originalowner']);
		$state = mysql_real_escape_string($_POST['state']);
		$city = mysql_real_escape_string($_POST['city']);
		$zip = mysql_real_escape_string($_POST['zip']);
		$shippingcosts = mysql_real_escape_string($_POST['shippingcosts']);
		$saleterms = mysql_real_escape_string($_POST['saleterms']);
		
		$willship = mysql_real_escape_string($_POST['willship']);
		$acceptpayment = mysql_real_escape_string($_POST['acceptpayment']);
		$contactemail = mysql_real_escape_string($_POST['contactemail']);
		$hearaboutpog = mysql_real_escape_string($_POST['hearaboutpog']);
		$termsagree = 'Yes';
		//$ran = md5(uniqid(rand()));

		session_start();
		$userid = $_SESSION['is_logged_in'];
		$listingdate = date('Y-m-d');
			   
		define('MAX_FILE_SIZE', 2097152); //2097152 bytes = 2MB.
		define('UPLOAD_PATH',   '../listimg/');
		$allowed_types = array('image/gif', 'image/jpg', 'image/jpeg', 'image/png');
//		$randFilename = uniqid("preownedgowns_");
//		$exploded = explode('.', $_FILES['image1']['name']);
//		$oldFileExt = $exploded[count($exploded) - 1];
//		$newFilename = $randFilename.".".$oldFileExt;
		$targetPath = '../listimg/';
		include "img_resize.php";
		$image1 = $_FILES['image1']['name'];
		$params['image1'] = $image1;
		//resize code here
		
		$imageNames = array();
		
		for($i = 0; $i < count($_FILES); $i++){
			$fileArr = $_FILES['image'.$i];
			if(is_array($fileArr)){
				if(isset($fileArr['name']) && $fileArr['name'] != ''){
					$randFilename = uniqid("preownedgowns_");
					$exploded = explode('.', $fileArr['name']);
					$oldFileExt = $exploded[count($exploded) - 1];
					$newFilename = $randFilename.".".$oldFileExt;
					if (img_resize($fileArr['tmp_name'], 400, $targetPath, $newFilename)){
						$imageNames[$i - 1] = mysql_real_escape_string($newFilename);
					}
					else {
						$errormsg['image1'] = " <font color='red', size='2'><i>Sorry, there was a problem uploading your file</i></font>";
					}
				}
			}
		}
		
		//if(isset($_FILES['image1']['name']) && $_FILES['image1']['name'] != ''){
//			include "img_resize.php";
//			if (img_resize($_FILES['image1']['tmp_name'], 400, $targetPath, $newFilename)){
//			}
//			else {
//				$errormsg['image1'] = " <font color='red', size='2'><i>Sorry, there was a problem uploading your file</i></font>";
//			}
//			$image1 = mysql_real_escape_string($newFilename);
//		}
		//else{
//		}
		//$image2 = mysql_real_escape_string($newFilename);
//		$image3 = mysql_real_escape_string($newFilename);
//		$image4 = mysql_real_escape_string($newFilename);
//		$image5 = mysql_real_escape_string($newFilename);

		$sql="INSERT INTO gowns (UserID, GownType, Designer, GownCondition, Silhouette, SleeveStyle, StyleNumber, NeckLine, WaistLine, DressLength, PurchaseDate, Paid, AskingPrice, LabelSize, StreetSize, BustSize, WaistSize, HipSize, HeightwShoes, GownDescr, AltDescr, VeilDescr, PresMethod, TypeofSeller, OriginalReceipt, OriginalOwner, State, City, Zip, ShippingCosts, SaleTerms, WillShip, AcceptPayment, ContactEmail, HearAboutpog, TermsAgree, ListingDate, Image1, Image2, Image3, Image4, Image5) VALUES ('$userid', '$gowntype', '$designer', '$gowncondition', '$silhouette', '$sleevestyle', '$stylenumber', '$neckline', '$waistline','$dresslength', '$purchasedate', '$paid', '$askingprice', '$labelsize', '$streetsize', '$bustsize', '$waistsize', '$hipsize', '$heightwshoes', '$gowndescr', '$altdescr', '$veildescr', '$presmethod', '$typeofseller', '$originalreceipt', '$originalowner', '$state', '$city', '$zip', '$shippingcosts', '$saleterms', '$willship', '$acceptpayment', '$contactemail', '$hearaboutpog', '$termsagree', '$listingdate', '".$imageNames[0]."', '".$imageNames[1]."', '".$imageNames[2]."', '".$imageNames[3]."', '".$imageNames[4]."')";
		
		//print ($sql);
		
		if (!mysql_query($sql))
		  
		  {
		
		  die('Error: ' . mysql_error());
		
		  }
		  
		
		header("Location:/member?id=gownlistingsuccess");
		}
		else { 
			session_start();
			$_SESSION['model']['errormsg'] = $errormsg;
			$_SESSION['model']['params'] = $params;
			header("Location:/member/gownlisting?id=requiredfieldsmissing");
		}
}
mysql_close($link);
?>