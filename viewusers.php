<?php
	ob_start();
	
	include_once("check.php");
	
	
	@session_start();
	include_once("common.php");
	//include_once("page.inc.php");
	$smarty = new Smarty;
	$db_main		=	new Database;
	$db_search		=	new Database;
	
	$userid = $_SESSION['userid'];
	
	$added 		= 	$_GET['added'];
	$updated 	= 	$_GET['updated'];
	

	//exit;
	
	$viewusers = array();
	
	// **************** FOR PAGING ****************

		if(!$_POST || $_REQUEST['src']=="")
		{
			$db_main->query("select * from userinfo");
			$total_records = $db_main->rowCount();
		}

	  // echo $total_records.'-----'; exit;
	  
	$record_per_page=50;
	$scroll=50;
	$page_main=new Page(); ///creating new instance of Class Page for 1ST DEFAULT PAGE
	$page_search=new Page(); // CREATING FOR SEARCH PAGE
					
	$page_main->set_page_data($_SERVER['PHP_SELF'],$total_records,$record_per_page,$scroll,true,true,true);
	
	/* if there is any query string you want to pass with links just use*/
  
	// $page->set_qry_string(name=harish&id=7347);

	// If you want to pass any parameters to page links such that stylesheet or style sheet class

	// $page->set_link_parameter("Class = myStyleSheetClass") OR
	// $page->set_link_parameter("Style='color:#FF0000;'")


	 $page_main->set_qry_string();
	
	
	$limit_main 	= 	$page_main->get_limit_query($abc); // limit will remain the same
	//$limit_search 	= 	$page_search->get_limit_query($abc);
	


if($_REQUEST['src'])
{
		
		$search = $_REQUEST['src'];
		
		//echo "select u.Assetid,u.UserName,u.CompanyName,u.Dept,u.Email,p.osname,p.oskey,p.officename,p.officekey,p.ipaddress,p.CPU_type,p.HardDrive,p.ram,p.previousos from userinfo u, pclicenses p where u.Assetid=p.Assetid and u.Username like '%$search%' or u.CompanyName like '%$search%' order by u.Assetid DESC";exit;

			if($db_search->query("select Assetid,username,companyname,email,dept from userinfo where username like '$search' or companyname like '$search' order by Assetid DESC $limit_main ") && $db_search->rowCount() > 0)
			{
			
					$cnt = $db_search->rowCount();
					//echo $cnt.'-----------';exit;
					$total_records = $db_search->rowCount();
					for($i=0;$i<$cnt;$i++)
					{
						//echo 'Hii';exit;
						$result = $db_search->fetchNumericRow();
						array_push($viewusers,$result);
					}
			}
			
			else
			{
				$no_result = 1;
				// echo $no_result.'-------'; exit;
			}
			
}

else
{
	//echo "Not POST";
	//echo "select u.Assetid,u.CompanyName,u.Dept,u.Email,p.CPU_type,p.HardDrive,p.ipaddress,p.ram,p.osname,p.previousos,p.oskey,p.officename,p.officekey from userinfo u, pclicenses p where u.Assetid=p.Assetid order by u.Assetid DESC $limit_main ";exit;
	
	
	
			if($db_search->query("select Assetid,username,companyname,email,dept from userinfo order by Assetid DESC $limit_main ") && $db_search->rowCount() > 0)
			{
			
					$cnt = $db_search->rowCount();
					//echo $cnt.'------------------------------';exit;
					//$total_records = $db_search->rowCount();
					
					//echo $total_records.'___________'; exit;
					
					for($i=0;$i<$cnt;$i++)
					{
						//echo 'Hii';exit;
						$result = $db_search->fetchNumericRow();
						array_push($viewusers,$result);
					}
					
					//echo $pclicenses.'-----------------';exit;
			}
			
			else
			{
				$no_result = 1;
				// echo $no_result.'-------'; exit;
			}
}



	$smarty->assign_by_ref("page_numbering", $page_main->get_page_nav());
	$smarty->assign("viewusers", $viewusers);
	$smarty->assign("status", $status);
	$smarty->assign("no_result", $no_result);
	$smarty->assign("no_ticket", $no_ticket);
	$smarty->assign("search", $search);
	$smarty->assign("total_records", $total_records);
	$smarty->assign("added", $added);
	$smarty->assign("updated", $updated);
	$smarty->assign("display_name", $display_name);
	$smarty->assign("user_id", $user_id);
	$smarty->assign("display_name", $_SESSION['display_name']);


	
	$smarty->display("viewusers.html");
	
	ob_end_flush();
?>