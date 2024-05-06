<?php
	ob_start();
	
	include_once("check.php");
	
	
	@session_start();
	include_once("common.php");
	//include_once("page.inc.php");
	$smarty = new Smarty;
	$db_main		=	new Database;
	$db_search		=	new Database;
	

	
	$added 		= 	$_GET['added'];
	$updated 	= 	$_GET['updated'];
	$assigned 	= 	$_GET['assigned'];
	$deleted 	= 	$_GET['deleted'];
	
	$status 	= 	$_GET['status'];
	
	$display_name 	= 	$_GET['display_name'];
	$user_id 		= 	$_GET['user_id'];
	
	$userid 		= 	$_SESSION['userid'];     /*   userid & Display Names of IT users   */
	$display_name 	= 	$_SESSION['display_name'];
	
	//$itick_id = $_REQUEST['itick_id'];
	
	//echo $itick_id.'____';
	//exit;
	
	$iTicket = array();
	
	// **************** FOR PAGING ****************
	
if($_REQUEST['rad']=='p' && $_REQUEST['src']=="")
{
	//echo "Inside Pending ..." ; exit;
	
	if($display_name=='Administrator')
		$db_main->query("select itick_id, Callername, Companyname from iticket_info where status='p' ");
	else
		$db_main->query("select itick_id, Callername, Companyname from iticket_info where status='p' && user_id = '$userid' ");
	$total_records = $db_main->rowCount();
}

else if($_REQUEST['rad']=='c' && $_REQUEST['src']=="")
{
	//echo "Inside completed ..." ; exit;
	
	if($display_name=='Administrator')
		$db_main->query("select itick_id, Callername, Companyname from iticket_info where status='c' ");
	else
		$db_main->query("select itick_id, Callername, Companyname from iticket_info where status='c' && user_id = '$userid' ");
	$total_records =  $db_main->rowCount();
}

elseif ($status=='c') 
{
	if($display_name=='Administrator')
		$db_main->query("select itick_id, Callername, Companyname from iticket_info where status='c' ");
	else
		$db_main->query("select itick_id, Callername, Companyname from iticket_info where status='c' && user_id = '$userid' ");
	$total_records = $db_main->rowCount();
	
}

elseif ($status=='p') // 1st page load - as per logic status will be pending
{
	
	if($display_name=='Administrator')
		$db_main->query("select itick_id, Callername, Companyname from iticket_info where status='p' ");
	else
		$db_main->query("select itick_id, Callername, Companyname from iticket_info where status='p' && user_id = '$userid' ");
	$total_records = $db_main->rowCount();
	
}
else // for all Records (Pending & Completed)
{
		if($display_name=='Administrator')
			$db_main->query("select itick_id, Callername, Companyname from iticket_info");
		else
		{
			$db_main->query("select itick_id, Callername, Companyname from iticket_info where user_id = '$userid' ");
		}
		$total_records = $db_main->rowCount();
}
	
	  // echo $total_records_pending.'-----'; exit;
	  
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
		$radio = $_REQUEST['rad'];
		
		$status = $_REQUEST['rad'];
		
		if($_REQUEST['rad'] == 'p')
		{
	/*		
				if($display_name=='Administrator')
				{
				
						if($db_search->query("select  i.*,l.display_name from login l, iticket_info i where Callername like '%$search%' && status='p' && l.user_id=i.user_id  or Companyname like '%$search%' && status='p' && l.user_id=i.user_id order by itick_id ASC $limit_main ") && $db_search->rowCount() > 0)
					{
			
						$cnt = $db_search->rowCount();
						$total_records = $db_search->rowCount();
						//echo $cnt.'-----------';exit;
						for($i=0;$i<$cnt;$i++)
						{
							//echo 'Hii';exit;
							$result = $db_search->fetchNumericRow();
							array_push($iTicket,$result);
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
						if($db_search->query("select * from iticket_info where Callername like '%$search%' && status='p' && user_id = '$userid'  or Companyname like '%$search%' && status='p' && user_id = '$userid' order by itick_id ASC $limit_main ") && $db_search->rowCount() > 0)
					{
			
						$cnt = $db_search->rowCount();
						$total_records = $db_search->rowCount();
						//echo $cnt.'-----------';exit;
						for($i=0;$i<$cnt;$i++)
						{
							//echo 'Hii';exit;
							$result = $db_search->fetchNumericRow();
							array_push($iTicket,$result);
						}
					}
			
					else
					{
						$no_result = 1;
						// echo $no_result.'-------'; exit;
					}
				}
		}
		else
		{
			*/
				if($display_name=='Administrator')
				{
						if($db_search->query("select  i.*,l.display_name from login l, iticket_info i  where Callername like '%$search%' && status='p' && l.user_id=i.user_id  or Companyname like '%$search%' && status='p' && l.user_id=i.user_id order by reached DESC $limit_main ") && $db_search->rowCount() > 0)
						{
			
							$cnt = $db_search->rowCount();
							$total_records = $db_search->rowCount();
							//echo $cnt.'-----------';exit;
							for($i=0;$i<$cnt;$i++)
							{
								//echo 'Hii';exit;
								$result = $db_search->fetchNumericRow();
								array_push($iTicket,$result);
							}
						}
			
						else
						{
							$no_result = 1;
							// echo $no_result.'-------'; exit;
						}
				}
				
				//}
				else
				{
						if($db_search->query("select * from iticket_info where Callername like '%$search%' && status='p' && user_id = '$userid'  or Companyname like '%$search%' && status='p' && user_id = '$userid' order by itick_id ASC $limit_main ") && $db_search->rowCount() > 0)
						{
			
							$cnt = $db_search->rowCount();
							$total_records = $db_search->rowCount();
							//echo $cnt.'-----------';exit;
							for($i=0;$i<$cnt;$i++)
							{
								//echo 'Hii';exit;
								$result = $db_search->fetchNumericRow();
								array_push($iTicket,$result);
							}
						}
			
						else
						{
							$no_result = 1;
							// echo $no_result.'-------'; exit;
						}
				}
		}
		
		//}
		
		else if($_REQUEST['rad'] == 'c')
		{
			if($display_name=='Administrator')
			{
					if($db_search->query("select  i.*,l.display_name from login l, iticket_info i  where Callername like '%$search%' && status='c' && l.user_id=i.user_id or Companyname like '%$search%' && status='c' && l.user_id=i.user_id  order by reached DESC $limit_main ") && $db_search->rowCount() > 0)
					{
			
						$cnt = $db_search->rowCount();
						//echo $cnt.'-----------';exit;
						$total_records = $db_search->rowCount();
						$status = $_REQUEST['rad'];
					
						for($i=0;$i<$cnt;$i++)
						{
							//echo 'Hii';exit;
							$result = $db_search->fetchNumericRow();
							array_push($iTicket,$result);
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
					if($db_search->query("select * from iticket_info where Callername like '%$search%' && status='c' && user_id = '$userid'  or Companyname like '%$search%' && status='c' && user_id = '$userid'  order by itick_id DESC $limit_main ") && $db_search->rowCount() > 0)
					{
			
						$cnt = $db_search->rowCount();
						//echo $cnt.'-----------';exit;
						$total_records = $db_search->rowCount();
						$status = $_REQUEST['rad'];
					
						for($i=0;$i<$cnt;$i++)
						{
							//echo 'Hii';exit;
							$result = $db_search->fetchNumericRow();
							array_push($iTicket,$result);
						}
					}
			
					else
					{
						$no_result = 1;
						// echo $no_result.'-------'; exit;
					}
			}
			
		}
		else
		{
			if($display_name=='Administrator')
			{
					if($db_search->query("select  i.*,l.display_name from login l, iticket_info i   where Callername like '%$search%' and l.user_id =i.user_id  or Companyname like '%$search%' and l.user_id =i.user_id  order by reached DESC $limit_main ") && $db_search->rowCount() > 0)
					{
			
						$cnt = $db_search->rowCount();
						//echo $cnt.'-----------';exit;
						$total_records = $db_search->rowCount();
						$status = $_REQUEST['rad'];
					
						for($i=0;$i<$cnt;$i++)
						{
							//echo 'Hii';exit;
							$result = $db_search->fetchNumericRow();
							array_push($iTicket,$result);
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
					if($db_search->query("select * from iticket_info where Callername like '%$search%' && user_id = '$userid'  or Companyname like '%$search%'  && user_id = '$userid'  order by itick_id DESC $limit_main ") && $db_search->rowCount() > 0)
					{
			
						$cnt = $db_search->rowCount();
						//echo $cnt.'-----------';exit;
						$total_records = $db_search->rowCount();
						$status = $_REQUEST['rad'];
					
						for($i=0;$i<$cnt;$i++)
						{
							//echo 'Hii';exit;
							$result = $db_search->fetchNumericRow();
							array_push($iTicket,$result);
						}
					}
			
					else
					{
						$no_result = 1;
						// echo $no_result.'-------'; exit;
					}
			}
		}
		
		
		
		$page_main->set_page_data($_SERVER['PHP_SELF'],$total_records,$record_per_page,$scroll,true,true,true);		
		
		
}
		


else
{
	

	if($_REQUEST['rad']=='c' || $status=='c')
	{
		if($display_name=='Administrator')
		{
			if($db_main->query("select  i.*,l.display_name from login l, iticket_info i where l.user_id = i.user_id and status='c' order by reached DESC $limit_main ") && $db_main->rowCount() > 0)
			{
		 		// echo "Inside"; exit;
				$cnt = $db_main->rowCount();
			//echo $cnt.'-----------';exit;
			
				$total_records_completed = $db_main->rowCount(); 
			
				$status='c'; // INSIDE condition if,, status will remain c.

				for($i=0;$i<$cnt;$i++)
				{
					//echo 'Hii';exit;
					$result = $db_main->fetchNumericRow();
					array_push($iTicket,$result);
				}
			}
		}
		else
		{
			if($db_main->query("select * from iticket_info where status='c' && user_id = '$userid'  order by itick_id DESC $limit_main ") && $db_main->rowCount() > 0)
			{
		 	// echo "Inside"; exit;
				$cnt = $db_main->rowCount();
			//echo $cnt.'-----------';exit;
			
				$total_records_completed = $db_main->rowCount(); 
			
				$status='c'; // INSIDE condition if,, status will remain c.

				for($i=0;$i<$cnt;$i++)
				{
					//echo 'Hii';exit;
					$result = $db_main->fetchNumericRow();
					array_push($iTicket,$result);
				}
			}
		}
	}
	
	else if($_REQUEST['rad']=='p' || $status=='p')
	{
		
		if($display_name=='Administrator')
		{
			if($db_main->query("select  i.*,l.display_name from login l, iticket_info i where l.user_id =i.user_id and status='p' order by reached DESC $limit_main ") && $db_main->rowCount() > 0)
			{
		 	 //echo "select  i.*,l.display_name from login l, iticket_info i where l.user_id =i.user_id and status='p' order by received_date DESC $limit_main";
				$cnt = $db_main->rowCount();
			
				$status='p'; // INSIDE condition if,, status will remain p
			
				for($i=0;$i<$cnt;$i++)
			
				{
					//echo 'Hii';exit;
					$result = $db_main->fetchNumericRow();
					array_push($iTicket,$result);
				}
			}
		
			else
			{
				$no_ticket=1;
				$status='p';
			}
		}
		else
		{
			//echo "Inside";
			if($db_main->query("select * from iticket_info where user_id = '$userid' and status='p' order by itick_id DESC $limit_main ") && $db_main->rowCount() > 0)
			{
		 	 	//echo "Inside";
				$cnt = $db_main->rowCount();
			
				$status='p'; // INSIDE condition if,, status will remain p
			
				for($i=0;$i<$cnt;$i++)
			
				{
					//echo 'Hii';exit;
					$result = $db_main->fetchNumericRow();
					array_push($iTicket,$result);
				}
			}
		
			else
			{
				$no_ticket=1;
				$status='p';
			}
		}
		
		
	}
	else  // Main Page - 1st Load
	{
		
		if($display_name=='Administrator')
		{
			 
			//echo "select  i.*,l.display_name from login l, iticket_info i where l.user_id =i.user_id order by reached DESC Group by l.display_name $limit_main ";exit;
			
			if($db_main->query("select  i.*,l.display_name from login l, iticket_info i where l.user_id =i.user_id order by i.reached DESC $limit_main ") && $db_main->rowCount() > 0)
			{
		 	 	//echo "select  i.*,l.display_name from login l, iticket_info i where l.user_id =i.user_id order by reached DESC $limit_main";exit;
				$cnt = $db_main->rowCount();
			
				//$status='p'; // INSIDE condition if,, status will remain p
			
				for($i=0;$i<$cnt;$i++)
			
				{
					//echo 'Hii';exit;
					$result = $db_main->fetchNumericRow();
					array_push($iTicket,$result);
				}
			}
		
			else
			{
				$no_ticket=1;
			}
		}
		else 
		{
			
			
			/* To Check Assigned Ticket from IT Manager...... */
			
			if($db_main->query("select * from iticket_info where  user_id = '$userid' && assign = '1' ") && $db_main->rowCount() > 0)
			{
				$unread='1';
				$db_main->query("update  iticket_info set assign = '0' where user_id = '$userid' " );
				
				//echo "$unread";exit;
				
			}
			/* End of - To Check Assigned Ticket from IT Manager ....... */
			
			
			
			if($db_main->query("select * from iticket_info where user_id = '$userid' order by itick_id DESC $limit_main ") && $db_main->rowCount() > 0)
			{
		 	 	//echo "select * from iticket_info where status='p' && user_id = '$userid'  order by itick_id ASC $limit_main "; exit;
				$cnt = $db_main->rowCount();
			
				//$status='p'; // INSIDE condition if,, status will remain p
			
				for($i=0;$i<$cnt;$i++)
				{
					//echo 'Hii';exit;
					$result = $db_main->fetchNumericRow();
					array_push($iTicket,$result);
				}
			}
		
			else
			{
				$no_ticket=1;
			}
			
		}
			
		
		
		
	}

	
} // end of else




	$smarty->assign_by_ref("page_numbering", $page_main->get_page_nav());
	$smarty->assign("iTicket", $iTicket);
	$smarty->assign("status", $status);
	$smarty->assign("no_result", $no_result);
	$smarty->assign("no_ticket", $no_ticket);
	$smarty->assign("search", $search);
	$smarty->assign("total_records", $total_records);
	$smarty->assign("added", $added);
	$smarty->assign("updated", $updated);
	$smarty->assign("assigned", $assigned);
	$smarty->assign("deleted", $deleted);
	$smarty->assign("display_name", $display_name);
	$smarty->assign("user_id", $user_id);
	$smarty->assign("unread", $unread);
	$smarty->assign("display_name", $_SESSION['display_name']);
/*	
	$smarty->assign("total_records_pending", $total_records_pending);
	$smarty->assign("total_records_completed", $total_records_completed);
	
	$smarty->assign("total_records_search", $total_records_search);*/

	
	$smarty->display("mainpage.html");
	
	ob_end_flush();
?>