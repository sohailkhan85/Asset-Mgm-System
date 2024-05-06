<?php
	ob_start();
	
	include_once("common.php");
	$db = new Database;
	$smarty = new Smarty;

	$uname 		= 	$_POST['uname'];
	$pwd 		= 	$_POST['password'];

//echo "Inside loginaction" ; exit;

if($_POST)
{
			//echo "Inside Post" ; exit;
			
			$uname 			= 		$_POST['uname'];
			$password 		= 		$_POST['password'];
			
			//$pwdhash = hash_hmac('sha512', 'salt' .$password, $_SERVER['site_key']);
			//$passwordenc	= 		sha1($password);
			
			//echo $passwordenc.'-------';
			//exit;
			
			$admin_name 	= 		$_POST['admin_name'];
		
		
		//echo "select user_id,uname,pwd,display_name from login where uname = '$uname' and pwd = '$pwdhash'"; exit;

				if($db->query("select user_id,uname,pwd,display_name from login where uname = '$uname' and pwd = '$password'") && $db->rowCount() > 0)
				{
					
					
					   //echo "Inside 1st query"; exit;
					
					$result = $db->fetchRow();
					
					$userid 			= 	$result['user_id']; // admin_id is coming from SESSION ie y ADMIN_ID1
					$uname 				= 	$result['uname'];
					$display_name 		= 	$result['display_name'];
					
					if($userid)
					{
							@session_start();
							
							$_SESSION['userid'] 		= 	$userid;
							$_SESSION['display_name'] 	= 	$display_name;
							
							header("location:mainpage.php?userid=$userid&display_name=$display_name");
							exit;	
					}
					
					else
					{
							header("location:index.php?val=f");
							exit;
					}
				
				}
				
				else
				{
						header("location:index.php?val=f");
						exit;
				}
	
	
}

?>