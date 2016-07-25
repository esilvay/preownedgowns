<?php
session_start();

if ($_SESSION['admin_logged_in']){
	
	$id = $_REQUEST['id'];
	
	if(!$id == ""){
		$tmpfile = "../listimg/$id";
			if(file_exists($tmpfile)){
				unlink($tmpfile);
			}
			else{
			}
	}
	
	$gl = $_REQUEST['gl'];
	header("Location:/admin/updateaccessory&id=$gl");
	//header("Location:/admin/accessories?page=1");
}
else{
	header("Location:/login");	
}
?>