<?php /* Smarty version 2.6.16, created on 2022-05-11 07:17:50
         compiled from export_iTicket.html */ ?>
<!DOCTYPE html>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>iTickets</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<?php echo '
<script type="text/javascript">
function validate()
{
	//var format = \'YYYY-MM-DD\';
	
	
	
	var todaydate = new Date();
	
	var fromdate_new  		= 		document.getElementById(\'fromdate\').value;
	var todate_new  		= 		document.getElementById(\'todate\').value;
	
	//alert(todaydate);
	
	if(document.exp_iticket.fromdate.value=="")
	{
		alert("Please make sure that From Date is not left blank.");
		document.exp_iticket.fromdate.focus();
		return false;
	}
	else if(document.exp_iticket.todate.value=="")
	{
		alert("Please make sure that To Date is not left blank.");
		document.exp_iticket.todate.focus();
		return false;
	}
	
	else if(document.getElementById(\'fromdate\').value > document.getElementById(\'todate\').value)
	{
            alert("From Date cannot be greater than To Date");
			document.exp_iticket.fromdate.focus();
			return false;
	}
	
	else if(document.getElementById(\'todate\').value <  document.getElementById(\'fromdate\').value)
	{
            alert("To Date cannot be Less than From Date");
			document.exp_iticket.todate.focus();
			return false;
	}
	
	else if(document.getElementById(\'fromdate\').value ==  document.getElementById(\'todate\').value)
	{
            alert("From & To Date Should\'nt be Same");
			document.exp_iticket.fromdate.focus();
			return false;
	}
	
	else if(new Date(fromdate_new).getTime() > new Date().getTime())
	{
			alert("From Date Cannot be Greater than Today\'s Date");
			document.exp_iticket.fromdate.focus();
			return false;
	}
	
	
	else
	{
			//alert("Inside Last else")
			document.exp_iTicket_action.submit();
			return true;
		
	}

}
</script>
'; ?>


</head>
<body>
<table width="1345"  align="center" cellpadding="0" cellspacing="0" class="tbl">
  <tr>
    <td height="75" colspan="3">
    <img src="images/header.gif" width="1345" height="125" />
    </td>
  </tr>
	
	<tr>
    	<td>
        <table width="1345">
                    	<tr>
           
           <td><a href="mainpage.php"><img src="images/itickets.gif" width="150" style="cursor:pointer"/></a></td>
           <td><a href="newiticket.php"><img src="images/new-iticket.gif" width="150" style="cursor:pointer"/></a></td>
           <td><a href="pclicenses.php"><img src="images/pclicenses.gif" width="150" style="cursor:pointer" /></a></td>
                  <td><a href="adduser.php"><img src="images/adduser.gif" width="150" style="cursor:pointer" /></a></td>
           <td><a href="viewusers.php"><img src="images/viewusers.gif" width="150" style="cursor:pointer" /></a></td>
           <td><a href="dashboard.php"><img src="images/dashboard.gif" width="150" style="cursor:pointer" /></a></td>
           <td width="100"><a href="export_iTicket.php"><img src="images/exp_iTickets.gif" width="150" style="cursor:pointer" /></a></td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
            <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
              <td width="100">&nbsp;</td>
              
         
          

           <td width="100" id="normal_text"><strong><font size=+1><?php echo $this->_tpl_vars['display_name']; ?>
</font></strong></td>
          				 	
            </tr>
           <tr> 	   
                   <td width="100">&nbsp;</td>
          		<td width="100">&nbsp;</td>
          	 	<td width="100">&nbsp;</td>
           		 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>
                        <td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>
                        <td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>

                <td width="75"><a href="changepass.php" style="cursor:pointer"><input type="button" class="button" value="Change Password"/></a></td>
            </tr>
            <tr>
            		<td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>
                  <td width="100">&nbsp;</td>
                   <td width="100">&nbsp;</td>
                    <td width="100">&nbsp;</td>
                     <td width="100">&nbsp;</td>
                     <td width="100">&nbsp;</td>
                    <td width="100" colspan="5">
       					 <a href="index.php?val=o"><input type="button" value="SIGN OUT" name="out" id="out" class="button" style="cursor:pointer"/></a>
       				 </td>
            </tr>
            
            
       </table>
             </td>
             </tr>
    <td width="900"><form id="exp_iticket" method="post" name="exp_iticket" onSubmit="return validate()" action="exp_iTicket_action.php" >
      <table width="700" height="236" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#F1F4FE" class="logintbl">
        <tr>
          <td height="30" colspan="2" bgcolor="#0390B8" id="heading">Export iTickets</td>
        </tr>
        <tr>
          <td width="101"><div align="right">From Date<span class="red">*</span></div></td>
          <td width="195"><input type="date" name="fromdate" id="fromdate" /></td>
        </tr>
        <tr>
          <td><div align="right">To Date<span class="red">*</span></div></td>
          <td><input type="date" name="todate" id="todate" /></td>
        </tr>

        <tr>
          <td colspan="2" height="60"  align="center"><input type="submit" value="EXPORT" class="button" style="cursor:pointer" /></td>
        </tr>
        <tr>
          <td colspan="2" height="40" align="center" class="red"></td>
        </tr>
      </table>
    </form></td>
    <td width="84">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <!--<tr><td>&nbsp;</td></tr>-->
  <tr>
    <td height="55">&nbsp;</td>
  </tr>
  <tr>
    <th colspan="3" bgcolor="#0390B8" height="25">Copyright � 2018 IT- DEPT/SSW GROUP. All rights reserved.</th>
  </tr>
  <!-- <tr>
      <td colspan="3" height="21">&nbsp;</td>
    </tr
  <tr>
 <td colspan="3" height="25">&nbsp;</td>
 </tr>-->
</table>
</body>
</html>