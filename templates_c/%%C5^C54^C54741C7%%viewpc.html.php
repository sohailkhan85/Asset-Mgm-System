<?php /* Smarty version 2.6.16, created on 2022-06-29 12:47:33
         compiled from viewpc.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>iTickets</title>
<link href="style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<table width="1345"  align="center" cellpadding="0" cellspacing="0"  bgcolor="F1F4FE" >
  <tr>
    <td height="75" colspan="2">
    <img src="images/header.gif" width="1345" height="125" />
    </td>
    </tr>

  <!--	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>-->
            <tr>
           		<td>
                	<table>
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
                    <td width="100" colspan="5">
       					 <a href="index.php?val=o"><input type="button" value="SIGN OUT" name="out" id="out" class="button" style="cursor:pointer"/></a>
       				 </td>
            </tr>
            
            
             </table>
             </td>
           </tr>

    
    
  <tr>
 
    <td width="1345" bgcolor="F1F4FE"><form id="iticket" method="post" name="iticket" onsubmit="return validate()" action="newiticket.php" >
    <input type="hidden" name="itick_id" id="itick_id" value="<?php echo $this->_tpl_vars['itick_id']; ?>
" />
      <table width="850" height="766" border="1" cellpadding="0" cellspacing="0" align="center" class="tbl" >

        <tr>
          <td height="31" colspan="2" bgcolor="#0390B8" id="heading"><?php echo $this->_tpl_vars['username']; ?>
 / <?php echo $this->_tpl_vars['companyname']; ?>
</td>

          
        </tr>

        <tr>
          <td width="319" height="43" id="normal_text"><font size="+1"><strong>Asset ID</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['assetid']; ?>
</font>

          </td>
        </tr>
               <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>User Name</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['username']; ?>
</font>


          </td>
        </tr>
        <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Company</strong></font></td>
          <td width="381">
			&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['companyname']; ?>
</font>
         
          </td>
        </tr>
         <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Email</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['Email']; ?>
</font></td>
        </tr>
 
         <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Operating System</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['osname']; ?>
</font></td>
        </tr>
                 <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Operating System - Product Key</strong></font></td>
          <td width="381">
          &nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['oskey']; ?>
</font>
          </td>
        </tr>
        <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Office Name</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['officename']; ?>
</font>
    
          </td>
                  <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Office Product Key</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['officekey']; ?>
</font>
    
          </td>
          <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Office-Registered-Email</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['offemail']; ?>
</font>
    
          </td>
                  <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>IP Address</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['ipaddress']; ?>
</font>
          </td>
            <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Gateway</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['gateway']; ?>
</font>
    
          </td>
             <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Type</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['type']; ?>
</font>
          </td>
                  <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>CPU Type</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['cpu_type']; ?>
</font>
    
          </td>
                            <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Hard Drive</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['harddrive']; ?>
</font>
    
          </td>
                                      <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>RAM</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['ram']; ?>
</font>
    
          </td>
             <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Model</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['model']; ?>
</font>
    
          </td>
            <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Manufacturer</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['manufacturer']; ?>
</font>
    
          </td>
           <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Vendor</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['vendor']; ?>
</font>
    
          </td>
            <tr>
            
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Purchase Date</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['purchase_date']; ?>
</font>
    
          </td>
           <tr>
          <td width="319" height="43"  id="normal_text"><font size="+1"><strong>Invoice No</strong></font></td>
          <td width="381">&nbsp;&nbsp;<font size="+1"><?php echo $this->_tpl_vars['invoice_no']; ?>
</font>
    
          </td>
        </tr>

      </table>
    </form></td>
    <!--<td width="84">&nbsp;</td>-->
  </tr>

    <th colspan="3" bgcolor="#0390B8" height="25">Copyright © 2018 IT- DEPT/SSW GROUP. All rights reserved.</th>
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