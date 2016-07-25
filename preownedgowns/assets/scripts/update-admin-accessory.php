<?php
// Connect to server and select databse.
include('connect.php');

session_start();

if ($_POST['form_submitted'] == '1') {

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
		$accessorylistingid = mysql_real_escape_string($_POST['accessorylistingid']);
		$adname = mysql_real_escape_string($_POST['adname']);
		
		//$name = $_POST['gdname']; //file name
		$file = "$adname";
		$Saved_File = fopen($file, 'w');
		chmod($file, 0777);
		fwrite($Saved_File, $accessdescr);
		fclose($Saved_File);

$sql="UPDATE accessories SET AccessoryType = '$accessorytype', JewelryType = '$jewelrytype', JewelryCondition = '$jewelrycondition', WrapJacketShaw = '$wrapjacketshaw', WrapLegnth = '$wraplegnth', WrapCondition = '$wrapcondition', ShoeColor = '$shoecolor', ShoeSize = '$shoesize', ShoeCondition = '$shoecondition', VeilColor = '$veilcolor', VeilLength = '$veillength', VeilCondition = '$veilcondition', SashColor = '$sashcolor', SashCondition = '$sashcondition', SlipColor = '$slipcolor', SlipSize = '$slipsize', SlipCondition = '$slipcondition', TiaraCondition = '$tiaracondition', PurseColor = '$pursecolor', PurseCondition = '$pursecondition', AskingPrice = '$askingprice', TypeofSeller = '$typeofseller', OriginalReceipt = '$originalreceipt', OriginalOwner = '$originalowner', State = '$state', City = '$city', Zip = '$zip', ShippingCost = '$shippingcost', SaleTerms = '$saleterms', WillShip = '$willship', AcceptPayment = '$acceptpayment', ContactEmail = '$contactemail', HearAboutpog = '$hearaboutpog', TermsAgree = '$termsagree' WHERE ID = $accessorylistingid";

mysql_query($sql) or die(mysql_error());
	header("Location:/admin/home?id=successfulupdate");
}
else { 
	header("Location:/admin/home?id=epicfail");
}
mysql_close($conn);
?>