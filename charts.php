<?php

	include_once("check.php");
	@session_start();

	include_once("common.php");
	$smarty = new Smarty;
	$db		=	new Database;
	
		$userid 		= 	$_SESSION['userid'];     /*   userid & Display Names of IT users   */
		$display_name 	= 	$_SESSION['display_name'];
	
		$fromdate 			= 	date_create($_POST['fromdate']);
		$todate 			= 	date_create($_POST['todate']);
		
		
		
		$from 	= 	date_format($fromdate,"Y/m/d h:i:s"); 
		$to 	= 	date_format($todate,"Y/m/d h:i:s");
		
		$from_display 	= 	date_format($fromdate,"d-M-Y");  // For Display
		$to_display 	= 	date_format($todate,"d-M-Y");	   // For Display
		
		
		
	 $connect = mysqli_connect("localhost", "root", "root", "asset");  
	 
	 if($display_name=='Administrator')
	 {
		  $queryPie = "select IF(status='c', 'Completed', 'Pending') As Status, count(*) as Total from iticket_info where reached between '$from' and '$to' group by status";  
		 // echo "select IF(status='c', 'Completed', 'Pending') As Status, count(*) as Total from iticket_info where reached between '$from' and '$to' group by status";exit;
	 	$resultPie = mysqli_query($connect, $queryPie); 
	 }
	 
	 else
	 {
		 $queryPie = "select IF(status='c', 'Completed', 'Pending') As Status, count(*) as Total from iticket_info where user_id = '$userid' and reached between '$from' and '$to' group by status";  
	 	$resultPie = mysqli_query($connect, $queryPie); 
	 }
	 
	
	
	if($display_name=='Administrator')
	{
		echo "Inside Administrator";
		$queryBarAgent = "SELECT SUM( i.status = 'c' ) AS Completed, SUM( i.status = 'p' ) AS Pending, l.display_name AS Agent
					FROM login l, iticket_info i
						WHERE i.user_id = l.user_id AND reached between '$from' and '$to'
							GROUP BY Agent ";
		$resultBarAgent = mysqli_query($connect, $queryBarAgent);
	}
	else
	{
		//echo "Not inside Administrator";
		$queryBarAgent = "SELECT SUM( i.status = 'c' ) AS Completed, SUM( i.status = 'p' ) AS Pending
					FROM login l, iticket_info i
						WHERE i.user_id='$userid' and reached between '$from' and '$to' ";
			
		$resultBarAgent = mysqli_query($connect, $queryBarAgent);
	}
	
	if($display_name=='Administrator')
	{
		$queryBarCompany = "SELECT SUM( status = 'c' ) AS Completed, SUM( status = 'p' ) AS Pending, companyname
					FROM iticket_info where  reached between '$from' and '$to' GROUP BY companyname ";
		$resultBarCompany = mysqli_query($connect, $queryBarCompany);
	}
	else
	{
		$queryBarCompany = "SELECT SUM( status = 'c' ) AS Completed, SUM( status = 'p' ) AS Pending, companyname
					FROM iticket_info where user_id = '$userid' and reached between '$from' and '$to' GROUP BY companyname ";
		$resultBarCompany = mysqli_query($connect, $queryBarCompany);
	}
	
	if($display_name=='Administrator')
	{
		$queryBarpbcat = "select iticket_cat, count(*) as Number from iticket_info where  reached between '$from' and '$to' group by iticket_cat";
		$resultpbcat = mysqli_query($connect, $queryBarpbcat);
	}
	else
	{
		$queryBarpbcat = "select iticket_cat, count(*) as Number from iticket_info where user_id = '$userid' and reached between '$from' and '$to' group by iticket_cat";
		$resultpbcat = mysqli_query($connect, $queryBarpbcat);
	}
	
	
	
	//echo $result;
	
	//print_r($resultHisto);
 
 
?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           <link href="style.css" rel="stylesheet" type="text/css" />
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
		   
            //google.charts.load('current', {'packages':['corechart']});
		   	//google.charts.load('current', {'packages':['bar']});
		   
		     google.charts.load('current', {packages: ['corechart', 'bar']});
		   
           google.charts.setOnLoadCallback(drawPieChart); 
		   google.charts.setOnLoadCallback(drawBarChartAgent);
		   google.charts.setOnLoadCallback(drawBarChartCompany);
		   google.charts.setOnLoadCallback(drawBarChartpbcat);
		   
           function drawPieChart()  
           {  
               //alert("Inside");
			   var datapie = google.visualization.arrayToDataTable([  
                          ['Status', 'Total'],  
                          <?php  
                          while($row = mysqli_fetch_array($resultPie))  
                          {  
							    echo "['".$row["Status"]."', ".$row["Total"]."],";  
							   //echo "[".$row["Completed"].", ".$row["Pending"]."],";
                          }  
                          ?>  
                     ]);  
			   
                var options = {  
                      title: 'Total No of Tickets (Completed/Pending)', 
					   //subtitle: '% of Pending & Completed Tickets',
                      //is3D:true,  
                      pieHole: 0.4  
                     }; 
					 
                var Piechart = new google.visualization.PieChart(document.getElementById('piechart'));  
                Piechart.draw(datapie, options);  
           }  
		   
		  function drawBarChartAgent()  
           {  
               //alert("Inside Histo");
			   var databaragent = google.visualization.arrayToDataTable([  
                          ['Agent', 'Completed', 'Pending'],  
                          <?php  
                          while($row = mysqli_fetch_array($resultBarAgent))  
                          {  
                              // echo "Inside Bar Chart"; exit;
							   
							   echo "['".$row["Agent"]."', ".$row["Completed"].", ".$row["Pending"]."],"; 
							    //echo "['".$row["Agent"]."', '".$row["Number"]."'],"; 
                          }  
                          ?>  
                     ]); 

        			var options = {
         			
           			  title: 'IT-Agent-wise Tickets',
					hAxis: {
						
          			title: 'IT Agents',	       
         			slantedText:true,
          			slantedTextAngle:45,
					color: 'black', 
    				fontName: 'Arial', 
    				fontSize: 18

        			},
							
					// bars: 'horizontal'
					
					theme: 'material'
					
       				 };

					 var barchartagent = new google.visualization.ColumnChart(document.getElementById('barchart'));
					  //barchartagent.draw(databaragent, google.charts.Bar.convertOptions(options));
					  barchartagent.draw(databaragent, options);
           } 
		   
		   function drawBarChartCompany()  
           {  
               //alert("Inside Histo");
			   var databarcompany = google.visualization.arrayToDataTable([  
                          ['Company', 'Completed', 'Pending'],  
                          <?php  
                          while($row = mysqli_fetch_array($resultBarCompany))  
                          {  
                              // echo "Inside Bar Chart"; exit;
							   
							   echo "['".$row["companyname"]."', ".$row["Completed"].", ".$row["Pending"]."],"; 
							    //echo "['".$row["Agent"]."', '".$row["Number"]."'],"; 
                          }  
                          ?>  
                     ]); 

        			var options = {
         			 /*chart: {
           			 title: 'Bar Chart',
            		subtitle: 'Company wise Tickets',
					 },
					 */
					 title: 'Company-wise Tickets',

					hAxis: {
						
          			title: 'Companies',	       
         			slantedText:true,
          			slantedTextAngle:45,
					color: 'black', 
    				fontName: 'Arial', 
    				fontSize: 15

        			},
							
					// bars: 'horizontal'
					
					theme: 'material'

       				 };

					 //var barchartcompany = new google.charts.Bar(document.getElementById('barchartcompany'));
					  //barchartcompany.draw(databarcompany, google.charts.Bar.convertOptions(options));
					  var barchartcompany = new google.visualization.ColumnChart(document.getElementById('barchartcompany'));
					  barchartcompany.draw(databarcompany, options);
           }
		   
		   function drawBarChartpbcat()  
           {  
               //alert("Inside Histo");
			   var databarpbcat = google.visualization.arrayToDataTable([  
                          ['Problem Category', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($resultpbcat))  
                          {  
                              // echo "Inside Bar Chart"; exit;
							   
							   echo "['".$row["iticket_cat"]."', ".$row["Number"]."],"; 
							    //echo "['".$row["Agent"]."', '".$row["Number"]."'],"; 
                          }  
                          ?>  
                     ]); 

        			var options = {
         			 /*chart: {
           			 title: 'Bar Chart',
            		subtitle: 'Company wise Tickets',
					 },
					 */
					 title: 'Problem Category-wise Tickets',

					hAxis: {
						
          			title: 'Problem Categories',	       
         			slantedText:true,
          			slantedTextAngle:45,

        			},
							
					// bars: 'horizontal'
					
					theme: 'material'

       				 };

					// var barchartpbcat = new google.charts.Bar(document.getElementById('barchartpbcat'));
					 // barchartpbcat.draw(databarpbcat, google.charts.Bar.convertOptions(options));
					//  barchartpbcat.draw(databarpbcat, options);
					 var barchartpbcat = new google.visualization.ColumnChart(document.getElementById('barchartpbcat'));
					  barchartpbcat.draw(databarpbcat, options);
           }
           </script>  
      </head>  
      <body>  
      
            <div>&nbsp;</div>           
          <div id="display" align="center">
          <strong><font size="+1" style="border-bottom-style:solid"> From: <?php echo $from_display?> To: <?php echo $to_display?> </font></strong>
          </div>
           <div style="width:2500px;">  
                <div id="piechart"></div>  
               <strong> <div id="barchart"></div>  </strong>
           </div>
          
          
          <div style="width:2500px;">  
                <strong><div id="barchartcompany"></div> </strong> 
           </div>  
           
           <div style="width:2500px;">  
               <strong> <div id="barchartpbcat"></div>  </strong>
           </div>
           
<!--          <div style="width:1000px;">  
                
                <div id="hist" style="width: 700px; height: 500px;" align="right"></div>  
                
           </div>-->
           
      </body>  
 </html>  


