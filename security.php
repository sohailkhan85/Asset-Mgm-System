<?php
ob_start();
	@session_start();
	 	$admin_id 			= 	$_SESSION['admin_id'];
		$admin_name 		= 	$_SESSION['admin_name'];
	
	if(!$admin_id)
	{
		header("location: index.php?val=u");
		exit();
	}
ob_end_flush();	
?>