<?php

include('connect.php');

	$tableName="User";
	$tableName1="Accounts";
	
    $query = "SELECT * FROM $tableName WHERE Status='unverified'";
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
	
		$sdate = $row['Joindate'];
		$edate = date("Y-m-d");
		$days = getDays($sdate, $edate);
		$uID = $row['ID'];
		//$daysleft = (365 - $days);
		

		if($days > 7){
			
			$query1 = mysql_query("SELECT * FROM Accounts WHERE ID=$uID");
			$result1 = mysql_fetch_assoc($query1);
			$aID = $result1['ID'];

			$dstring="DELETE FROM $tableName1 WHERE ID=$aID";
			mysql_query($dstring);
			
			$dstring1="DELETE FROM $tableName WHERE ID=$uID";
			mysql_query($dstring1);
			
			$to      = "info@preownedgowns.com";
			$subject = 'Cron - Users/Account Successs';
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
