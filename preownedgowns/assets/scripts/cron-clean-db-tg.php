<?php

include('connect.php');
	
	$tableName="tempg";
	
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
		
		$img1 = $row['Image1'];
		$img2 = $row['Image2'];
		$img3 = $row['Image3'];
		$img4 = $row['Image4'];
		$img5 = $row['Image5'];
		$gd = $row['GownDescr'];
		$ad = $row['AltDescr'];
		$vd = $row['VeilDescr'];
		$pm = $row['PresMethod'];
	
		
		if($days > 7){
			
			if(!$img1 == ""){
				$tmpfile1 = "../listimg/$img1";
					if(file_exists($tmpfile1)){
						unlink($tmpfile1);
					}
					else{
					}
			}
			if(!$img2 == ""){
				$tmpfile2 = "../listimg/$img2";
					if(file_exists($tmpfile2)){
						unlink($tmpfile2);
					}
					else{
					}
			}
			if(!$img3 == ""){
				$tmpfile3 = "../listimg/$img3";
					if(file_exists($tmpfile3)){
						unlink($tmpfile3);
					}
					else{
					}
			}
			if(!$img4 == ""){
				$tmpfile4 = "../listimg/$img4";
					if(file_exists($tmpfile4)){
						unlink($tmpfile4);
					}
					else{
					}
			}
			if(!$img5 == ""){
				$tmpfile5 = "../listimg/$img5";
					if(file_exists($tmpfile5)){
						unlink($tmpfile5);
					}
					else{
					}
			}
	
			$tmpfilegd = "$gd";
			unlink($tmpfilegd);
			
			$tmpfilead = "$ad";
			unlink($tmpfilead);
			
			$tmpfilevd = "$vd";
			unlink($tmpfilevd);
			
			$tmpfilepm = "$pm";
			unlink($tmpfilepm);
		
			$dstring="DELETE FROM tempg WHERE ID=".$row['ID'];
			mysql_query($dstring);
			
			$to      = 'info@preownedgowns.com';
			$subject = 'Cron - Temp Gowns Successs';
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