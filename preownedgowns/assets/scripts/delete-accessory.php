<?php
session_start();

include('connect.php');

if ($_SESSION['admin_logged_in']){
	
		$id = $_REQUEST['accessorylistingid'];
		$img1 = $_REQUEST['img1'];
		$img2 = $_REQUEST['img2'];
		$img3 = $_REQUEST['img3'];
		
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
		
		$ad = $_REQUEST['ad'];
		$tmpfilead = "../listtxt/$ad";
		unlink($tmpfilead);
		
		$id = $_REQUEST['id'];
		$result = mysql_query("DELETE FROM accessories WHERE ID=$id");
		header("Location:/admin/accessories?page=1");
}
else{
	header("Location:/login");	
}
mysql_close($conn);
?>