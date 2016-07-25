<?php
session_start();

include('connect.php');

if ($_SESSION['admin_logged_in']){
	
		$id = $_REQUEST['listingid'];
		$img1 = $_REQUEST['img1'];
		$img2 = $_REQUEST['img2'];
		$img3 = $_REQUEST['img3'];
		$img4 = $_REQUEST['img4'];
		$img5 = $_REQUEST['img5'];
		
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
		
		$gd = $_REQUEST['gd'];
		$tmpfilegd = "../listtxt/$gd";
		unlink($tmpfilegd);
		
		$ad = $_REQUEST['ad'];
		$tmpfilead = "../listtxt/$ad";
		unlink($tmpfilead);
		
		$vd = $_REQUEST['vd'];
		$tmpfilevd = "../listtxt/$vd";
		unlink($tmpfilevd);
		
		$pm = $_REQUEST['pm'];
		$tmpfilepm = "../listtxt/$pm";
		unlink($tmpfilepm);
		
		$id = $_REQUEST['id'];
		$result = mysql_query("DELETE FROM gowns WHERE ID=$id");
		header("Location:/admin/gowns?page=1");
}
else{
	header("Location:/login");	
}
mysql_close($conn);
?>