<?php
	ob_start();
	
	include_once("check.php");
	@session_start();

	include_once("common.php");
	$db = new Database;
	$smarty = new Smarty;
	
	
	$userid = $_SESSION['userid'];
	
	$iTickid = $_REQUEST['itick_id'];
	
	if($db->query("delete from iticket_info where itick_id = '$iTickid'")) 
	{
		header("location:mainpage.php?deleted=1");
		exit;
	}
	
	

	
	


?>