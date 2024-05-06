<?php

	
	@session_start();
	include_once("common.php");
	$smarty = new Smarty;
	$db		=	new Database;
	$userid = $_SESSION['userid'];
	$display_name = $_SESSION['display_name'];
	
	
	if($_POST)
	{
	
		$oldpwd 			= 	$_POST['oldpass'];
		$newpwd 			= 	$_POST['newpass'];
		//$pwhash				= 	hash_hmac('sha512', 'salt' . $newpwd, $_SERVER['site_key']);
		
		
		if($db->query("select * from login where pwd = '$oldpwd' && user_id = '$userid' ") && $db->rowCount() > 0)
		{
			if($db->query("update login set pwd = '$newpwd' where user_id = '$userid' "))
			{
				$updated=1;
				header("location:index.php?val=$updated");
				exit;
			}
			
		}
		
		else
		{
			$oldpwdwrong=1;
			//header("location:change");
		}
	
	}
	
	
	
	$smarty->assign('oldpwdwrong', $oldpwdwrong);
	$smarty->assign('display_name', $display_name);
	$smarty->display('changepass.html');
	
?>