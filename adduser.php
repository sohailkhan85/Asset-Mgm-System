<?php
	ob_start();
	
	include_once("check.php");
	@session_start();

	include_once("common.php");
	$db = new Database;
	$smarty = new Smarty;
	$Company_list = array();
	$users_list = array();
	$iTicket_Cat = array();
	
	$userid = $_SESSION['userid'];
	
	$company = $_REQUEST['company'] ;
	$assetid = $_REQUEST['assetid'] ;
	//echo $company.'____' ; exit;
	
	
	//echo "select Assetid,  Username from userinfo where CompanyName ='$company' "; exit;
	
/*	if($db->query("select Assetid, Username from userinfo where CompanyName ='$company' ") && $db->rowCount() > 0) // CALLER/USERNAMES - MASTER
	{
			
				
					$cnt = $db->rowCount();
					 //echo $cnt.'-----------';exit;
					for($i=0;$i<$cnt;$i++)
					{
						//echo 'Hii';exit;
						$result = $db->fetchNumericRow();
						array_push($users_list,$result);
					}
				
				//echo $result;exit;
	}*/
	
	if($db->query("select DISTINCT CompanyName from userinfo ") && $db->rowCount() > 0) // COMPANY NAMES - MASTER
	{
			
				//echo "select DISTINCT CompanyName from userinfo ";exit;
				
				$cnt = $db->rowCount();
					 //echo $cnt.'-----------';exit;
					for($i=0;$i<$cnt;$i++)
					{
						//echo 'Hii';exit;
						$result = $db->fetchNumericRow();
						array_push($Company_list,$result);
					}
					//echo $result;exit;
	}

	
	
if($_POST['company'] && $_POST['username']) // FULL FORM SUMBIT
{
	
	$companyname 			= 		$_REQUEST['company'];
	$username 				= 		$_REQUEST['username'];
	$email 					= 		$_REQUEST['email'];
	$dept 					= 		$_REQUEST['dept'];
	$assetid 				= 		$_REQUEST['assetid']; // coming from hidden field

			
			if($_REQUEST['assetid'])
			{
			
				if($db->query("update userinfo set companyname = '$companyname', username = '$username', email = '$email', dept = '$dept' where Assetid='$assetid'"))
				{
					
					$updated = 1;
					header("location:viewusers.php?updated=$updated");
					exit;
			
				}	
			}
			
			else
			{
				if($db->query("insert into userinfo set username = '$username', companyname = '$companyname', email = '$email', dept = '$dept' "))
				{
					
					$added = 1;
					header("location:viewusers.php?added=$added");
					exit;
			
				}
			}

}

else if ($_GET['assetid'])
{
	
	//echo "Insdie";
	$assetid = $_GET['assetid'];
	
	//echo "select * from userinfo where Assetid = '$assetid' ";
	
	
	if($db->query("select assetid,CompanyName,username,email,dept from userinfo where Assetid = '$assetid' ") && $db->rowCount() > 0) 
	{
		//echo "inside Query";		
		$userupdate = $db->fetchRow();
	}
	
}
	
	
	//echo $userupdate['CompanyName'].'_____';
	
	$smarty->assign("assetid", $userupdate['assetid']);
	$smarty->assign("username", $userupdate['username']);
	$smarty->assign("Companyname", $userupdate['CompanyName']);
	$smarty->assign("email", $userupdate['email']);
	$smarty->assign("dept", $userupdate['dept']);

	
	$smarty->assign("Company_list", $Company_list);
	
	$smarty->assign("users_list", $users_list);
	
	
	$smarty->assign("company", $company);
	
	$smarty->assign("assetid", $assetid);
	
	$smarty->assign("display_name", $_SESSION['display_name']);
	
	$smarty->display('adduser.html');	

?>