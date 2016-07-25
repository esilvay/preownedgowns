<?php
// Connect to server and select databse.
include('connect.php');

session_start();

if ($_POST['form_submitted'] == '1') {

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
		
		$paid = preg_replace("/[^0-9]/", "", $_POST['paid']);
		//$paid = mysql_real_escape_string($_POST['paid']);
		$askingprice = preg_replace("/[^0-9]/", "", $_POST['askingprice']);
		//$askingprice = mysql_real_escape_string($_POST['askingprice']);
		
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
		$gownlistingid = mysql_real_escape_string($_POST['gownlistingid']);
		$gdname = mysql_real_escape_string($_POST['gdname']);
		$adname = mysql_real_escape_string($_POST['adname']);
		$vdname = mysql_real_escape_string($_POST['vdname']);
		$pmname = mysql_real_escape_string($_POST['pmname']);
		 
		//$name = $_POST['gdname']; //file name
		$file = "$gdname";
		$Saved_File = fopen($file, 'w');
		chmod($file, 0777);
		fwrite($Saved_File, $gowndescr);
		fclose($Saved_File);
		
		$file1 = "$adname";
		$Saved_File = fopen($file1, 'w');
		chmod($file1, 0777);
		fwrite($Saved_File, $altdescr);
		fclose($Saved_File);
		
		$file2 = "$vdname";
		$Saved_File = fopen($file2, 'w');
		chmod($file2, 0777);
		fwrite($Saved_File, $veildescr);
		fclose($Saved_File);
		
		$file3 = "$pmname";
		$Saved_File = fopen($file3, 'w');
		chmod($file3, 0777);
		fwrite($Saved_File, $presmethod);
		fclose($Saved_File);
		
$sql="UPDATE gowns SET GownType = '$gowntype', Designer = '$designer', GownCondition = '$gowncondition', Silhouette = '$silhouette', SleeveStyle = '$sleevestyle', StyleNumber = '$stylenumber', NeckLine = '$neckline', WaistLine = '$waistline', DressLength = '$dresslength', PurchaseDate = '$purchasedate', Paid = '$paid', AskingPrice = '$askingprice', Labelsize = '$labelsize', StreetSize = '$streetsize', BustSize = '$bustsize', WaistSize = '$waistsize', HipSize = '$hipsize', HeightwShoes = '$heightwshoes', TypeofSeller = '$typeofseller', OriginalReceipt = '$originalreceipt', OriginalOwner = '$originalowner', State = '$state', City = '$city', Zip = '$zip', ShippingCosts = '$shippingcosts', SaleTerms = '$saleterms', WillShip = '$willship', AcceptPayment = '$acceptpayment', ContactEmail = '$contactemail', HearAboutpog = '$hearaboutpog' WHERE ID = $gownlistingid"; 

mysql_query($sql) or die(mysql_error());
	header("Location:/admin/home?id=successfulupdate");
}
else { 
	header("Location:/admin/home?id=epicfail");
}
mysql_close($conn);
?>