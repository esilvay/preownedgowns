<?php

include('connect.php');
	
	$tableName="gowns";
	
    $query = "SELECT * FROM $tableName ORDER BY ID ASC";
    $result = mysql_query($query);
	

	function getDays($start, $end) {
	// Vars
		$day = 86400; // Day in seconds
		$format = 'Y-m-d'; // Output format (see PHP date funciton)
		$sTime = strtotime($start); // Start as time
		$eTime = strtotime($end); // End as time
		$numDays = round(($eTime - $sTime) / $day) + 1;
		$days = $numDays;
		// Return days
		return $days;
	} 

	while($row = mysql_fetch_array($result)){
	
		$sdate = $row['ListingDate'];
		$edate = date("Y-m-d");
		$days = getDays($sdate, $edate);
		//$daysleft = (365 - $days);
	
		if($days > 365){
			$to      = $row['ContactEmail'];
			$subject = 'PreOwnedGowns Listing Expired ID# '.$row['ID'].'';
			$message = '<html><body>
			<p>Your PreOwnedGown.com Listing has recently expired. We are sorry that your item did not sell. We now make it super easy for you to re-list your item again.</p><br /><p>Simply <a href="http://www.preownedgowns.com/member">Login</a> to your account, select the <span font-weight: bold;>"My Gown Listings"</span> tab then click <span font-weight: bold;>"List It".</span></p><br />
			<p>Regards,</p>
			<p>PreOwnedGowns Team</p>
			<p>http://www.preownedgowns.com</p>
			</body></html>';
			$headers = 'From: donotreplay@preownedgowns.com' . "\r\n" .
					   'Reply-To: donotreplay@preownedgowns.com' . "\r\n" .
					   'MIME-Version: 1.0\r\n' . "\r\n" .
					   'Content-Type: text/html; charset=ISO-8859-1\r\n';
			
			mail($to, $subject, $message, $headers);
		
			$qstring="INSERT INTO tempg (UserID, GownType, Designer, GownCondition, Silhouette, SleeveStyle, StyleNumber, NeckLine, WaistLine, DressLength, PurchaseDate, Paid, AskingPrice, Labelsize, StreetSize, BustSize, WaistSize, HipSize, HeightwShoes, GownDescr, AltDescr, VeilDescr, PresMethod, TypeofSeller, OriginalReceipt, OriginalOwner, State, City, Zip, ShippingCosts, SaleTerms, WillShip, AcceptPayment, ContactEmail, HearAboutpog, TermsAgree, ListingDate, Image1, Image2, Image3, Image4, Image5) SELECT UserID, GownType, Designer, GownCondition, Silhouette, SleeveStyle, StyleNumber, NeckLine, WaistLine, DressLength, PurchaseDate, Paid, AskingPrice, Labelsize, StreetSize, BustSize, WaistSize, HipSize, HeightwShoes, GownDescr, AltDescr, VeilDescr, PresMethod, TypeofSeller, OriginalReceipt, OriginalOwner, State, City, Zip, ShippingCosts, SaleTerms, WillShip, AcceptPayment, ContactEmail, HearAboutpog, TermsAgree, '$edate', Image1, Image2, Image3, Image4, Image5 FROM gowns WHERE ID=".$row['ID'];
			mysql_query($qstring);
		
			$dstring="DELETE FROM gowns WHERE ID=".$row['ID'];
			mysql_query($dstring);
			
			$to      = 'info@preownedgowns.com';
			$subject = 'Cron - Gowns Successs';
			$message = '<html><body>
			<p>AutoEmail</span></p><br />
			<p>Regards,</p><br />
			<p>PreOwnedGowns Team</p>
			<p>http://www.preownedgowns.com</p>
			</body></html>';
			$headers = 'From: donotreplay@preownedgowns.com' . "\r\n" .
					   'Reply-To: donotreplay@preownedgowns.com' . "\r\n" .
					   'MIME-Version: 1.0\r\n' . "\r\n" .
					   'Content-Type: text/html; charset=ISO-8859-1\r\n';
			
			mail($to, $subject, $message, $headers);
		}
		else{
		}
		
	}
mysql_close($conn);
?>