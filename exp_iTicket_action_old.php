<?PHP
	
	//include("file:///E|/web-stuff/HAM/common.php");
	include_once("check.php");
	include_once("common.php");
	$smarty = new Smarty;
	$db		=	new Database;
	
		$fromdate 			= 	date_create($_POST['fromdate']);
		$todate 			= 	date_create($_POST['todate']);
		
		
		
		$from 	= 	date_format($fromdate,"Y/m/d h:i:s"); 
		$to 	= 	date_format($todate,"Y/m/d h:i:s");
  
  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // file name for download
  $filename = "Exp_iTickets" . date('Ymd') . ".xls";

   header("Content-Disposition: attachment; filename=\"$filename\"");
   header("Content-Type: application/vnd.ms-excel");

   // header("Content-Type: application/pdf");
   // readfile($filename);

  $flag = false;
  
  
  if($db->query("select l.display_name, i.Callername,i.companyname,i.iticket_cat,i.iticket_problem,i.solution,i.received_date,i.completed_date,i.status from login l, iticket_info i where l.user_id=i.user_id and received_date between '$from' and '$to' ORDER BY completed_date DESC ") && $db->rowCount() > 0 )
  {
  		$count = $db->rowCount();
		
		for($i=0; $i<$count; $i++)
		{
				//echo "Inside new for"; exit;
				$row = $db->fetchRow();
				
				if(!$flag) 
				{
					//echo "jjj"; exit;
				  // display field/column names as first row
				  echo implode("\t", array_keys($row)) . "\r\n";
				  $flag = true;
				}
				
				array_walk($row, 'cleanData');
				echo implode("\t", array_values($row)) . "\r\n";
		}
  }
  

?>