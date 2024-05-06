<?php
echo " Testing Connection ";

	include_once("common.php");
	$smarty = new Smarty;
	
	$val = $_GET['val'];
	
	if($val=='f')
	{
		$display = "Either Username or Password is incorrect.";
	}
	
	else if($val=='u')
		$display = "Unauthorized access to this page";
		
	else if($val=='1')
		$display = "Password Successfully Changed.";
		
	else if ($val=='o')
	{
		session_destroy();
		$display = "Successfully Logout.";
	}
		
		
	$smarty->assign('display', $display);
	$smarty->display("loginpage.html");
?>