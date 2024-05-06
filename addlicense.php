<?php
	ob_start();
	
	include_once("check.php");
	@session_start();

	include_once("common.php");
	$db = new Database;
	$smarty = new Smarty;
	
	
	$userid = $_SESSION['userid'];
	
	$company = $_REQUEST['company'] ;
	$assetid = $_REQUEST['assetid'] ;
	$added = $_REQUEST['added'] ;
	$updated = $_REQUEST['updated'] ;
	
	
if($_POST) // FULL FORM SUMBIT
{
	
	$computername 			= 		$_REQUEST['computername'];
	$type 					= 		$_REQUEST['type'];
	$cpu_type 				= 		$_REQUEST['cpu_type'];
	$purchase_date 			= 		$_REQUEST['purchase_date'];
	$invoice_no 			= 		$_REQUEST['invoice_no'];
	$vendor 				= 		$_REQUEST['vendor'];
	$harddrive 				= 		$_REQUEST['harddrive'];
	$manufacturer 			= 		$_REQUEST['manufacturer'];
	$model 					= 		$_REQUEST['model'];
	$default_printer 		= 		$_REQUEST['default_printer'];
	$gateway 				= 		$_REQUEST['gateway'];
	$ipaddress 				= 		$_REQUEST['ipaddress'];
	$ram 					= 		$_REQUEST['ram'];
	$osname 				= 		$_REQUEST['osname'];
	$oskey 					= 		$_REQUEST['oskey'];
	
	$officename 			= 		$_REQUEST['officename'];
	$officekey 				= 		$_REQUEST['officekey'];
	$offemail 				= 		$_REQUEST['offemail'];
	$soft1 					= 		$_REQUEST['soft1'];
	$soft1key 				= 		$_REQUEST['soft1key'];
	$soft2 					= 		$_REQUEST['soft2'];
	$soft2key 				= 		$_REQUEST['soft2key'];
	$soft3 					= 		$_REQUEST['soft3'];
	$soft3key 				= 		$_REQUEST['soft3key'];
	$assetid 				= 		$_REQUEST['assetid']; // coming from hidden field

	//$purchase_date = date_format($purchase_date,"d-M-Y"); // e.g 01-sep-2019
	
			if($db->query("select Assetid from pclicenses where Assetid = '$assetid' ")&& $db->rowCount() > 0) // To Match Assetid for update Query
			{

				
				
				if($db->query("update pclicenses set computername = '$computername', type = '$type', cpu_type = '$cpu_type', harddrive = '$harddrive',manufacturer='$manufacturer',model='$model',defaultprinter='$default_printer',gateway='$gateway',ipaddress='$ipaddress',ram='$ram',osname='$osname',oskey='$oskey',officename='$officename',officekey='$officekey',soft1='$soft1',soft1key='$soft1key',soft2='$soft2',soft2key='$soft2key',soft3='$soft3',soft3key='$soft3key', purchase_date='$purchase_date', invoice_no='$invoice_no', vendor='$vendor', offemail='$offemail' where Assetid='$assetid'"))
				{
					
					$updated = 1;
					header("location:addlicense.php?updated=$updated&assetid=$assetid");
					exit;
			
				}	
			}
			
			else
			{
				if($db->query("insert into pclicenses set Assetid = '$assetid', computername = '$computername', type = '$type', cpu_type = '$cpu_type', harddrive = '$harddrive',manufacturer='$manufacturer',model='$model',defaultprinter='$default_printer',gateway='$gateway',ipaddress='$ipaddress',ram='$ram',osname='$osname',oskey='$oskey',officename='$officename',officekey='$officekey',soft1='$soft1',soft1key='$soft1key',soft2='$soft2',soft2key='$soft2key',soft3='$soft3',soft3key='$soft3key', purchase_date='$purchase_date', invoice_no='$invoice_no',vendor='$vendor', offemail='$offemail' " ))
				{
					
					$added = 1;
					header("location:addlicense.php?added=$added&assetid=$assetid");
					exit;
			
				}
			}

}

else if ($_GET['assetid'])
{
	
	//echo "Insdie";
	$assetid = $_GET['assetid'];
	
	//echo "select u.assetid,u.username,u.companyname,u.dept,u.email, p.computername,p.type,p.cpu_type,p.harddrive,p.manufacturer,p.model,p.defaultprinter,p.gateway,p.ipaddress,p.ram,p.osname,p.oskey,p.officename,p.officekey,p.soft1,p.soft1key,p.soft2,p.soft2key,p.soft3,p.soft3key from userinfo u, pclicenses p where u.Assetid = '$assetid' and p.Assetid = '$assetid' ";
	//exit;
	
	if($db->query("select u.assetid,u.username,u.companyname,u.dept,u.email, p.computername,p.type,p.cpu_type,p.harddrive,p.manufacturer,p.model,p.defaultprinter,p.gateway,p.ipaddress,p.ram,p.osname,p.oskey,p.officename,p.officekey,p.soft1,p.soft1key,p.soft2,p.soft2key,p.soft3,p.soft3key,p.purchase_date,p.invoice_no,p.vendor,p.offemail from userinfo u, pclicenses p where u.Assetid = '$assetid' and p.Assetid = '$assetid' ") && $db->rowCount() > 0) 
	{
		$pcupdate = $db->fetchRow();
	}
	
	else // ONLY TO DISPLAY USER INFO 
	{
		if($db->query("select assetid,username,companyname,email,dept from userinfo where Assetid = '$assetid' ")&& $db->rowCount() > 0)
		{
			$pcupdate = $db->fetchRow();
		}
	}
	
}
	
	
	//echo $userupdate['CompanyName'].'_____';
	
	// ************* PC LICENSE INFO *************
	
	$smarty->assign("computername", $pcupdate['computername']);
	$smarty->assign("type", $pcupdate['type']);
	$smarty->assign("cpu_type", $pcupdate['cpu_type']);
	$smarty->assign("purchase_date", $pcupdate['purchase_date']);
	$smarty->assign("invoice_no", $pcupdate['invoice_no']);
	$smarty->assign("vendor", $pcupdate['vendor']);
	$smarty->assign("harddrive", $pcupdate['harddrive']);
	$smarty->assign("manufacturer", $pcupdate['manufacturer']);
	$smarty->assign("model", $pcupdate['model']);
	$smarty->assign("defaultprinter", $pcupdate['defaultprinter']);
	$smarty->assign("ipaddress", $pcupdate['ipaddress']);
	$smarty->assign("gateway", $pcupdate['gateway']);
	$smarty->assign("ram", $pcupdate['ram']);
	$smarty->assign("osname", $pcupdate['osname']);
	$smarty->assign("oskey", $pcupdate['oskey']);
	$smarty->assign("officename", $pcupdate['officename']);
	$smarty->assign("officekey", $pcupdate['officekey']);
	$smarty->assign("offemail", $pcupdate['offemail']);
	$smarty->assign("soft1", $pcupdate['soft1']);
	$smarty->assign("soft1key", $pcupdate['soft1key']);
	$smarty->assign("soft2", $pcupdate['soft2']);
	$smarty->assign("soft2key", $pcupdate['soft2key']);
	$smarty->assign("soft3", $pcupdate['soft3']);
	$smarty->assign("soft3key", $pcupdate['soft3key']);
	
//*********** USER INFO // *********************

	$smarty->assign("assetid", $pcupdate['assetid']);
	$smarty->assign("username", $pcupdate['username']);
	$smarty->assign("companyname", $pcupdate['companyname']);
	$smarty->assign("email", $pcupdate['email']);
	$smarty->assign("dept", $pcupdate['dept']);

	
	$smarty->assign("Company_list", $Company_list);
	
	$smarty->assign("users_list", $users_list);
	
	
	$smarty->assign("company", $company);
	
	$smarty->assign("assetid", $assetid);
	
	$smarty->assign("added", $added);
	
	$smarty->assign("updated", $updated);
	
	$smarty->assign("display_name", $_SESSION['display_name']);
	
	$smarty->display('addlicense.html');	

?>