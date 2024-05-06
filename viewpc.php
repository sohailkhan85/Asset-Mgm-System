<?php
	ob_start();
	
	include_once("check.php");
	
	
	@session_start();
	include_once("common.php");
	//include_once("page.inc.php");
	$smarty = new Smarty;
	$db_main		=	new Database;
	
	$userid = $_SESSION['userid'];
	$assetid = $_GET['assetid'];

	$viewpc = array();
	
	
	
	if($db_main->query("select u.Assetid,u.UserName,u.CompanyName,u.Dept,u.Email,p.ipaddress,p.gateway,p.ram,p.harddrive,p.model,p.manufacturer,p.type,p.cpu_type,p.osname,p.previousos,p.oskey,p.officename,p.officekey,p.soft1,p.purchase_date,p.invoice_no,p.offemail,p.vendor from userinfo u, pclicenses p where u.Assetid='$assetid' and p.Assetid='$assetid' ") && $db_main->rowCount() > 0)
			{
			
		
						$result = $db_main->fetchRow();
					
					
			}


	//echo $result['purchase_date'];
	if($result['purchase_date']!="0000-00-00")
	{
		$purchase_date = date_create($result['purchase_date']);
	
		$purchase_date_format 	=	date_format($purchase_date,"d-M-Y");
		
	}

	$smarty->assign("user_id", $user_id);
	$smarty->assign("assetid", $result['Assetid']);
	$smarty->assign("username", $result['UserName']);
	$smarty->assign("companyname", $result['CompanyName']);
	$smarty->assign("Dept", $result['Dept']);
	$smarty->assign("Email", $result['Email']);
	$smarty->assign("ipaddress", $result['ipaddress']);
	$smarty->assign("gateway", $result['gateway']);
	$smarty->assign("ram", $result['ram']);
	$smarty->assign("harddrive", $result['harddrive']);
	$smarty->assign("model", $result['model']);
	$smarty->assign("manufacturer", $result['manufacturer']);
	$smarty->assign("type", $result['type']);
	$smarty->assign("cpu_type", $result['cpu_type']);
	$smarty->assign("osname", $result['osname']);
	$smarty->assign("previousos", $result['previousos']);
	$smarty->assign("oskey", $result['oskey']);
	$smarty->assign("officename", $result['officename']);
	$smarty->assign("officekey", $result['officekey']);
	$smarty->assign("soft1", $result['soft1']);
	$smarty->assign("purchase_date", $purchase_date_format);
	$smarty->assign("invoice_no", $result['invoice_no']);
	$smarty->assign("offemail", $result['offemail']);
	$smarty->assign("vendor", $result['vendor']);

	$smarty->assign("display_name", $_SESSION['display_name']);
/*	
	$smarty->assign("total_records_pending", $total_records_pending);
	$smarty->assign("total_records_completed", $total_records_completed);
	
	$smarty->assign("total_records_search", $total_records_search);*/

	
	$smarty->display("viewpc.html");
	
	ob_end_flush();
?>