<?php

include('connect.php');
ini_set("memory_limit","256M");

if ($_POST['form_submitted'] == '1') {
		    $errormsg = array(); //Initialize errors
			$params = array();
		
			$accessorytype = $_POST['accessorytype'];
			$params['accessorytype'] = $accessorytype;
			
			
			$jewelrytype = $_POST['jewelrytype'];
			$params['jewelrytype'] = $jewelrytype;
			
			
			$jewelrycondition = $_POST['jewelrycondition'];
			$params['jewelrycondition'] = $jewelrycondition;
			
			
			$wrapjacketshaw = $_POST['wrapjacketshaw'];
			$params['wrapjacketshaw'] = $wrapjacketshaw;
			
			
			$wraplegnth = $_POST['wraplegnth'];
			$params['wraplegnth'] = $wraplegnth;
			
			
			$wrapcondition = $_POST['wrapcondition'];
			$params['wrapcondition'] = $wrapcondition;
			
			
			$shoecolor = $_POST['shoecolor'];
			$params['shoecolor'] = $shoecolor;
			
			
			$shoesize = $_POST['shoesize'];
			$params['shoesize'] = $shoesize;
			
			
			$shoecondition = $_POST['shoecondition'];
			$params['shoecondition'] = $shoecondition;
			
			
			$veilcolor = $_POST['veilcolor'];
			$params['veilcolor'] = $veilcolor;
			
			
			$veillength = $_POST['veillength'];
			$params['veillength'] = $veillength;
			
			
			$veilcondition = $_POST['veilcondition'];
			$params['veilcondition'] = $veilcondition;
			
			
			$sashcolor = $_POST['sashcolor'];
			$params['sashcolor'] = $sashcolor;
			
			
			$sashcondition = $_POST['sashcondition'];
			$params['sashcondition'] = $sashcondition;
			
			
			$slipcolor = $_POST['slipcolor'];
			$params['slipcolor'] = $slipcolor;
			
			
			$slipsize = $_POST['slipsize'];
			$params['slipsize'] = $slipsize;
			
			
			$slipcondition = $_POST['slipcondition'];
			$params['slipcondition'] = $slipcondition;
			
			
			$tiaracondition = $_POST['tiaracondition'];
			$params['tiaracondition'] = $tiaracondition;
			
			
			$pursecolor = $_POST['pursecolor'];
			$params['pursecolor'] = $pursecolor;
			
			
			$pursecondition = $_POST['pursecondition'];
			$params['pursecondition'] = $pursecondition;
			
			
			$askingprice = $_POST['askingprice'];
			$params['askingprice'] = $askingprice;


			$accessdescr = $_POST['accessdescr'];
			$params['accessdescr'] = $accessdescr;
			
			
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
			
			
			$shippingcost = $_POST['shippingcost'];
			$params['shippingcost'] = $shippingcost;
			
			
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
			
			$willship = $_POST['willship'];
			$params['willship'] = $willship;
			
			$valid = true;

			if (empty($accessorytype)){
		    	$valid = false;
		    	$errormsg['accessorytype'] = " <font color='red', size='2'><i>Please select Accessory Type</i></font>";
			}
			
			if (empty($typeofseller)){
		    	$valid = false;
		    	$errormsg['typeofseller'] = " <font color='red', size='2'><i>Type of Seller</i></font>";
			}
			if (empty($originalreceipt)){
		    	$valid = false;
		    	$errormsg['originalreceipt'] = " <font color='red', size='2'><i>Please Select Original Receipt</i></font>";
			}
			if (empty($originalowner)){
		    	$valid = false;
		    	$errormsg['originalowner'] = " <font color='red', size='2'><i>Original Owner</i></font>";
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

		$accessorytype = mysql_real_escape_string($_POST['accessorytype']);
		$jewelrytype = mysql_real_escape_string($_POST['jewelrytype']);
		$jewelrycondition = mysql_real_escape_string($_POST['jewelrycondition']);
		$wrapjacketshaw = mysql_real_escape_string($_POST['wrapjacketshaw']);
		$wraplegnth = mysql_real_escape_string($_POST['wraplegnth']);
		$wrapcondition = mysql_real_escape_string($_POST['wrapcondition']);
		$shoecolor = mysql_real_escape_string($_POST['shoecolor']);
		$shoesize = mysql_real_escape_string($_POST['shoesize']);
		$shoecondition = mysql_real_escape_string($_POST['shoecondition']);
		$veilcolor = mysql_real_escape_string($_POST['veilcolor']);
		$veillength = mysql_real_escape_string($_POST['veillength']);
		
		$veilcondition = mysql_real_escape_string($_POST['veilcondition']);
		$sashcolor = mysql_real_escape_string($_POST['sashcolor']);
		$sashcondition = mysql_real_escape_string($_POST['sashcondition']);
		$slipcolor = mysql_real_escape_string($_POST['slipcolor']);
		$slipsize = mysql_real_escape_string($_POST['slipsize']);
		$slipcondition = mysql_real_escape_string($_POST['slipcondition']);
		$tiaracondition = mysql_real_escape_string($_POST['tiaracondition']);
		$pursecolor = mysql_real_escape_string($_POST['pursecolor']);
		$pursecondition = mysql_real_escape_string($_POST['pursecondition']);
		
		$askingprice = preg_replace("/[^0-9]/", "", $_POST['askingprice']);
		//$askingprice = mysql_real_escape_string($_POST['askingprice']);
		$accessdescr = mysql_real_escape_string($_POST['accessdescr']);
		$typeofseller = mysql_real_escape_string($_POST['typeofseller']);
		$originalreceipt = mysql_real_escape_string($_POST['originalreceipt']);
		$originalowner = mysql_real_escape_string($_POST['originalowner']);
		$state = mysql_real_escape_string($_POST['state']);
		$city = mysql_real_escape_string($_POST['city']);
		$zip = mysql_real_escape_string($_POST['zip']);
		$shippingcost = mysql_real_escape_string($_POST['shippingcost']);
		$saleterms = mysql_real_escape_string($_POST['saleterms']);
		
		$willship = mysql_real_escape_string($_POST['willship']);
		$acceptpayment = mysql_real_escape_string($_POST['acceptpayment']);
		$contactemail = mysql_real_escape_string($_POST['contactemail']);
		$hearaboutpog = mysql_real_escape_string($_POST['hearaboutpog']);
		$termsagree = 'Yes';
		//$ran = md5(uniqid(rand()));
		
		//create txt file
		$name =  md5(uniqid(rand()));
		$file = "../listtxt/$name.txt";
		$Saved_File = fopen($file, 'w');
		chmod($file, 0777);
		fwrite($Saved_File, $accessdescr);
		fclose($Saved_File);
		//create txt file END

		session_start();
		$userid = $_SESSION['is_logged_in'];
		$listingdate = date('Y-m-d');
			   
		define('MAX_FILE_SIZE', 4194304); //2097152 bytes = 2MB.
		define('UPLOAD_PATH',   '../listimg/');
		$allowed_types = array('image/gif', 'image/jpg', 'image/jpeg', 'image/png');
		$targetPath = '../listimg/';
		include "img_resize.php";
		$image1 = $_FILES['image1']['name'];
		$params['image1'] = $image1;
		//resize code here
		
		$imageNames = array();
		
		for($i = 1; $i <= count($_FILES); $i++){
			$fileArr = $_FILES['image'.$i];
			if(is_array($fileArr)){
				if(isset($fileArr['name']) && $fileArr['name'] != ''){
					$randFilename = uniqid("preownedgowns_");
					$exploded = explode('.', $fileArr['name']);
					$oldFileExt = $exploded[count($exploded) - 1];
					$newFilename = $randFilename.".".$oldFileExt;
					if (img_resize($fileArr['tmp_name'], 498, $targetPath, $newFilename)){
						$imageNames[$i - 1] = mysql_real_escape_string($newFilename);
					}
					else {
						echo 'There was an error uploading your images. Please make sure each file is under 2mb and try again.';
						$errormsg['image1'] = " <font color='red', size='2'><i>Sorry, there was a problem uploading your file</i></font>";
					}
				}
			}
		}

		$sql="INSERT INTO tempa (UserID, AccessoryType, JewelryType, JewelryCondition, WrapJacketShaw, WrapLegnth, WrapCondition, ShoeColor, ShoeSize, ShoeCondition, VeilColor, VeilLength, VeilCondition, SashColor, SashCondition, SlipColor, SlipSize, SlipCondition, TiaraCondition, PurseColor, PurseCondition, AskingPrice, AccessDescr, TypeofSeller, OriginalReceipt, OriginalOwner, State, City, Zip, ShippingCost, SaleTerms, WillShip, AcceptPayment, ContactEmail, HearAboutpog, TermsAgree, ListingDate, Image1, Image2, Image3) VALUES ('$userid', '$accessorytype', '$jewelrytype', '$jewelrycondition', '$wrapjacketshaw', '$wraplegnth', '$wrapcondition', '$shoecolor', '$shoesize','$shoecondition', '$veilcolor', '$veillength', '$veilcondition', '$sashcolor', '$sashcondition', '$slipcolor', '$slipsize', '$slipcondition', '$tiaracondition', '$pursecolor', '$pursecondition', '$askingprice', '$file', '$typeofseller', '$originalreceipt', '$originalowner', '$state', '$city', '$zip', '$shippingcost', '$saleterms', '$willship', '$acceptpayment', '$contactemail', '$hearaboutpog', '$termsagree', '$listingdate', '".$imageNames[0]."', '".$imageNames[1]."', '".$imageNames[2]."')";
		
		//print ($sql);
		
		if (!mysql_query($sql))
		  
		  {
		
		  die('Error: ' . mysql_error());
		
		  }
		  
		
		$custom = mysql_insert_id();
		header("Location:https://www.paypal.com/cgi-bin/webscr&cmd=_s-xclick&hosted_button_id=KL4R5QDVU9REN&custom=$custom");

		}
		else { 
			session_start();
			$_SESSION['model']['errormsg'] = $errormsg;
			$_SESSION['model']['params'] = $params;
			header("Location:/member/accessorylisting?id=requiredfieldsmissing");
		}
}
mysql_close($conn);
?>