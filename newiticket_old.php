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
	
	$company = $_REQUEST['company'];
	$assetid = $_REQUEST['assetid'];
	//echo $company.'____' ; exit;
	
	
	//echo "select Assetid,  Username from userinfo where CompanyName ='$company' "; exit;
	
	if($db->query("select Assetid, Username from userinfo where CompanyName ='$company' ") && $db->rowCount() > 0) // CALLER/USERNAMES - MASTER
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
	}
	
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
	
	if($db->query("select id, Categories from iticket_category ") && $db->rowCount() > 0) // iTicket Catergories - MASTER
	{
			
				//echo "select Assetid, CompanyName from userinfo ";exit;
				
				$cnt = $db->rowCount();
					//echo $cnt.'-----------';exit;
					for($i=0;$i<$cnt;$i++)
					{
						//echo 'Hii';exit;
						$result = $db->fetchNumericRow();
						array_push($iTicket_Cat,$result);
					}
	}
	
	
if($_POST['company'] && $_POST['callernameassetid'] && $_POST['problem']) // FULL FORM SUMBIT
{
	
	$companyName 			= 		$_REQUEST['company'];
	$callernameassetid 		= 		$_REQUEST['callernameassetid']; // 2 values (assetid & callername)
	
	$callernameassetid_explode = explode('|', $callernameassetid);
	$assetid = $callernameassetid_explode[0];
	$callerName = $callernameassetid_explode[1];
	
	//echo $assetid.'---'.$callerName.'----';exit;
	
	$iticket_cat 			= 		$_REQUEST['problem'];
	$problem_detail 		= 		$_REQUEST['problem_detail'];
	$solution 				= 		$_REQUEST['solution'];
	$status 				= 		$_REQUEST['status'];
	$itick_id 				= 		$_REQUEST['itick_id'];

	
	$date = new DateTime('now', new DateTimeZone('Asia/Muscat'));
	$datetime = $date->format('Y/m/d h:i:s');
	
			
			if($_REQUEST['itick_id'])
			{
				
				if($status=='p')
				{
					//echo "Inside P";
					if($db->query("update  iticket_info set Companyname = '$companyName', Assetid = '$assetid', Callername = '$callerName', iticket_cat='$iticket_cat',
						  iticket_problem='$problem_detail', solution='$solution',  status='$status' where itick_id='$itick_id' && user_id = '$userid' "))
					{
					
						$updated = 1;
						header("location:mainpage.php?updated=$updated&status=$status");
						exit;
			
					}
				}
				
				else // status = c
				{
						//echo "insert into iticket_info set Companyname = '$companyName' , Assetid = '$assetid', Callername = '$callerName', iticket_cat='$iticket_cat',iticket_problem='$problem_detail', solution='$solution', received_date='$datetime', completed_date='$datetime', status='$status', user_id ='$userid' ";exit;
					
					if($db->query("update  iticket_info set Companyname = '$companyName', Assetid = '$assetid', Callername = '$callerName', iticket_cat='$iticket_cat',
						  iticket_problem='$problem_detail', solution='$solution',  status='$status', completed_date='$datetime' where itick_id='$itick_id' && user_id = '$userid' "))
						{
							//echo "Hiiiiiiiiiiiii";exit;
							$updated = 1;
							header("location:mainpage.php?updated=$updated&status=$status");
							exit;
			
						}
				}
			}
			
			else
			{
				if($status=='c')
				{

					if($db->query("insert into iticket_info set Companyname = '$companyName' , Assetid = '$assetid', Callername = '$callerName', iticket_cat='$iticket_cat',
						  iticket_problem='$problem_detail', solution='$solution', received_date='$datetime', completed_date='$datetime', status='$status', user_id ='$userid' "))
					{
					
						$added = 1;
						header("location:mainpage.php?added=$added&status=$status");
						exit;
			
					}
				
				}
				
				else // status =p
				{
					
					if($db->query("insert into iticket_info set Companyname = '$companyName' , Assetid = '$assetid', Callername = '$callerName', iticket_cat='$iticket_cat',
						  iticket_problem='$problem_detail', solution='$solution', received_date='$datetime', status='$status', user_id ='$userid' "))
					{
					
						$added = 1;
						header("location:mainpage.php?added=$added&status=$status");
						exit;
			
					}
				}
			}

}

else if ($_GET['itick_id'])
{
	
	$itick_id = $_GET['itick_id'];
	
	if($db->query("select * from iticket_info where itick_id = '$itick_id' ") && $db->rowCount() > 0) 
	{
		//echo 	"select * from iticket_info where itick_id = '$itick_id' ";
		
		$iTicketUpdate = $db->fetchRow();
	}
	
}
	
	
	//echo $iTicketUpdate['Callername'].'----'; exit;
	//echo $users_list.'----';
	
	$smarty->assign("itick_id", $iTicketUpdate['itick_id']);
	$smarty->assign("Callername", $iTicketUpdate['Callername']);
	$smarty->assign("Companyname", $iTicketUpdate['Companyname']);
	$smarty->assign("iticket_cat", $iTicketUpdate['iticket_cat']);
	$smarty->assign("iticket_problem", $iTicketUpdate['iticket_problem']);
	$smarty->assign("solution", $iTicketUpdate['solution']);
	$smarty->assign("status", $iTicketUpdate['status']);
	
	$smarty->assign("Company_list", $Company_list);
	
	$smarty->assign("users_list", $users_list);
	
	$smarty->assign("iTicket_Cat", $iTicket_Cat);
	
	$smarty->assign("company", $company);
	
	$smarty->assign("assetid", $assetid);
	
	$smarty->assign("display_name", $_SESSION['display_name']);
	
	$smarty->display('newiticket.html');	

?>