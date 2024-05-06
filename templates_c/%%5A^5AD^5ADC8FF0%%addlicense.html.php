<?php /* Smarty version 2.6.16, created on 2022-07-24 07:43:48
         compiled from addlicense.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>iTickets</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<?php echo '
<script type="text/javascript">
function validate()
{
	
	//alert("Inside Validate");
	//document.getElementById(\'company\').disabled= "";
	
	if(document.addlicense.type.value=="")
	{
		alert("Please make sure that Type is not left blank.");
		document.addlicense.type.focus();
		return false;
	}
	else if(document.addlicense.cpu_type.value=="")
	{
		alert("Please make sure that CPU TYPE is not left blank.");
		document.addlicense.cpu_type.focus();
		return false;
	}
		else if(document.addlicense.cpu_type.value=="")
	{
		alert("Please make sure that CPU TYPE is not left blank.");
		document.addlicense.cpu_type.focus();
		return false;
	}
		else if(document.addlicense.harddrive.value=="")
	{
		alert("Please make sure that HARDDRIVE is not left blank.");
		document.addlicense.harddrive.focus();
		return false;
	}
		else if(document.addlicense.ram.value=="")
	{
		alert("Please make sure that RAM is not left blank.");
		document.addlicense.ram.focus();
		return false;
	}
		else if(document.addlicense.osname.value=="")
	{
		alert("Please make sure that Operating System Name is not left blank.");
		document.addlicense.osname.focus();
		return false;
	}
			else if(document.addlicense.oskey.value=="")
	{
		alert("Please make sure that Operating System Key is not left blank.");
		document.addlicense.oskey.focus();
		return false;
	}
		else if(document.addlicense.officename.value=="")
	{
		alert("Please make sure that Office Name is not left blank.");
		document.addlicense.officename.focus();
		return false;
	}
	
	else if(document.addlicense.officekey.value=="")
	{
		alert("Please make sure that Office Name is not left blank.");
		document.addlicense.officekey.focus();
		return false;
	}
	
	else
	{
		//alert("inside Submit");
		//document.getElementById(\'loginform\').submit();
		document.addlicense.submit();
		return true;
	}

}


</script>
'; ?>


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
           <td width="100"><a href="export_licenses.php"><img src="images/exp-licenses.gif" width="150" style="cursor:pointer" /></a></td>
<!--           <td width="100">&nbsp;</td>
            <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>-->
 
          
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
<!--                 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
<!--                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>-->

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
<!--           		<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>-->
                    <td width="100">
       					 <a href="index.php?val=o"><input type="button" value="SIGN OUT" name="out" id="out" class="button" style="cursor:pointer"/></a>
       				 </td>
            </tr>
            
            
             </table>
             </td>
           </tr>


    
  <tr>
 
    <td width="1345" bgcolor="F1F4FE"><form id="addlicense" method="post" name="addlicense" onsubmit="return validate()" action="addlicense.php" >

    <input type="hidden" name="assetid" id="assetid" value="<?php echo $this->_tpl_vars['assetid']; ?>
" />
      <table width="800" height="373" border="0" cellpadding="0" cellspacing="0" align="center" class="tbl" >
		    		<!--<tr><td colspan="10">&nbsp;</td></tr>-->
	    	   <tr><td colspan="10" class="red"><strong><font size="+2"> <?php if ($this->_tpl_vars['added']): ?>License Added Successfully.<?php elseif ($this->_tpl_vars['updated']): ?>License Updated Successfully.<?php endif; ?></font></strong></td></tr>
        <tr>
          <td height="30" colspan="2" bgcolor="#0390B8" id="heading"><?php if ($this->_tpl_vars['assetid']):  echo $this->_tpl_vars['username'];  else: ?>Add New User<?php endif; ?></td>

          
        </tr>
        <tr>
        	<td height="31" colspan="2">
            <strong>Fields mark with red(<span class="red">*</span>) are mandatory fields.</strong>
            </td>
        </tr>
        <tr>
          <td width="251" height="43" id="normal_text">Company Name<span class="red">*</span></td>
          <td width="449">
          						<select name="company">
                                
                                <option><?php echo $this->_tpl_vars['companyname']; ?>
</option>
                                

								</select>
          </td>
        </tr>
               <tr>
          <td width="251" height="43"  id="normal_text">User Name<span class="red">*</span></td>
          <td width="449">
          <input type="text" name="username" value="<?php echo $this->_tpl_vars['username']; ?>
" disabled="disabled" />
          </td>
        </tr>
        <tr>
          <td width="251" height="43"  id="normal_text">Email</td>
          <td width="449">
			<input type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" disabled="disabled"/>
          </td>
        </tr>
        
 
         <tr>
          <td width="251" height="43"  id="normal_text">Department</td>
          <td width="449"><input type="text" name="dept" value="<?php echo $this->_tpl_vars['dept']; ?>
" disabled="disabled" /></td>
          </tr>
           <tr>
          <td height="30" colspan="2" bgcolor="#0390B8" id="heading">PC INFO</td>
         
          </tr>
          
           <tr>
          <td width="251" height="43"  id="normal_text">Computer Name</td>
          <td width="449"><input type="text" name="computername" value="<?php echo $this->_tpl_vars['computername']; ?>
"  /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Type<span class="red">*</span></td>
          <td width="449">
          <select name="type">
          <option value="" style="display:none">Select Type</option>
          <option value="desktop" <?php if ($this->_tpl_vars['type'] == 'desktop'): ?> selected="selected"<?php endif; ?>>Desktop</option>
          <option value="laptop" <?php if ($this->_tpl_vars['type'] == 'laptop'): ?> selected="selected"<?php endif; ?>>Laptop</option>
          <option value="server" <?php if ($this->_tpl_vars['type'] == 'server'): ?> selected="selected"<?php endif; ?>>Server</option>
          </select>
          </td>
          </tr>
          
           <tr>
          <td width="251" height="43"  id="normal_text">Purchase Date</td>
          <td width="195"><input type="date" name="purchase_date" id="purchase_date" value="<?php echo $this->_tpl_vars['purchase_date']; ?>
" /></td>
          </tr>
                     <tr>
          <td width="251" height="43"  id="normal_text">Invoice No</td>
          <td width="195"><input type="text" name="invoice_no" id="invoice_no" value="<?php echo $this->_tpl_vars['invoice_no']; ?>
" /></td>
          </tr>
           <tr>
          <td width="251" height="43"  id="normal_text">Vendor</td>
          <td width="300"><input type="text" name="vendor" id="vendor" value="<?php echo $this->_tpl_vars['vendor']; ?>
" size="50" /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">CPU Type<span class="red">*</span></td>
          <td width="449"><input type="text" name="cpu_type" value="<?php echo $this->_tpl_vars['cpu_type']; ?>
"  /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Hard Drive<span class="red">*</span></td>
          <td width="449"><input type="text" name="harddrive" value="<?php echo $this->_tpl_vars['harddrive']; ?>
"  /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Manufacturer</td>
          <td width="449"><input type="text" name="manufacturer" value="<?php echo $this->_tpl_vars['manufacturer']; ?>
"  /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Model</td>
          <td width="449"><input type="text" name="model" value="<?php echo $this->_tpl_vars['model']; ?>
"  /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Default Printer</td>
          <td width="449"><input type="text" name="default_printer" value="<?php echo $this->_tpl_vars['default_printer']; ?>
"  /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Gateway</td>
          <td width="449"><input type="text" name="gateway" value="<?php echo $this->_tpl_vars['gateway']; ?>
"  /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">IP Address</td>
          <td width="449"><input type="text" name="ipaddress" value="<?php echo $this->_tpl_vars['ipaddress']; ?>
"  /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">RAM<span class="red">*</span></td>
          <td width="449"><input type="text" name="ram" value="<?php echo $this->_tpl_vars['ram']; ?>
"  /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Operating System Name<span class="red">*</span></td>
          <td width="449">
          <select name="osname">
           <option value="" style="display:none;">Select Operating System</option>
            <option value="WIN 11 PRO 64 BIT"<?php if ($this->_tpl_vars['osname'] == 'WIN 11 PRO 64 BIT'): ?> selected="selected"<?php endif; ?>>WIN 11 PRO 64 BIT</option>
           <option value="WIN 10 HOME SINGLE 64 BIT"<?php if ($this->_tpl_vars['osname'] == 'WIN 10 HOME SINGLE 64 BIT'): ?> selected="selected"<?php endif; ?>>WIN 10 HOME SINGLE 64 BIT</option>
          <option value="WIN 10 PRO 64 BIT"<?php if ($this->_tpl_vars['osname'] == 'WIN 10 PRO 64 BIT'): ?> selected="selected"<?php endif; ?>>WIN 10 PRO 64 BIT</option>
           <option value="WIN 10 PRO 32 BIT" <?php if ($this->_tpl_vars['osname'] == 'WIN 10 PRO 32 BIT'): ?> selected="selected"<?php endif; ?>>WIN 10 PRO 32 BIT</option>
            <option value="WIN 7 PRO 64 BIT" <?php if ($this->_tpl_vars['osname'] == 'WIN 7 PRO 64 BIT'): ?> selected="selected"<?php endif; ?>>WIN 7 PRO 64 BIT</option>
             <option value="WIN 7 PRO 32 BIT" <?php if ($this->_tpl_vars['osname'] == 'WIN 7 PRO 32 BIT'): ?> selected="selected"<?php endif; ?>>WIN 7 PRO 32 BIT</option>
              <option value="WIN 8 PRO 64 BIT" <?php if ($this->_tpl_vars['osname'] == 'WIN 8 PRO 64 BIT'): ?> selected="selected"<?php endif; ?>>WIN 8 PRO 64 BIT</option>
              <option value="WIN 8 PRO 32 BIT" <?php if ($this->_tpl_vars['osname'] == 'WIN 8 PRO 32 BIT'): ?> selected="selected"<?php endif; ?>>WIN 8 PRO 32 BIT</option>
              <option value="WIN VISTA BUS 32 BIT" <?php if ($this->_tpl_vars['osname'] == 'WIN VISTA BUS 32 BIT'): ?> selected="selected"<?php endif; ?>>WIN VISTA BUS 32 BIT</option>
              <option value="WIN VISTA HOME 32 BIT" <?php if ($this->_tpl_vars['osname'] == 'WIN VISTA HOME 32 BIT'): ?> selected="selected"<?php endif; ?>>WIN VISTA HOME 32 BIT</option>
              <option value="WIN XP PRO 32 BIT" <?php if ($this->_tpl_vars['osname'] == 'WIN XP PRO 32 BIT'): ?> selected="selected"<?php endif; ?>>WIN XP PRO 32 BIT</option>
              <option value="WIN XP HOME 32 BIT" <?php if ($this->_tpl_vars['osname'] == 'WIN XP PRO 32 BIT'): ?> selected="selected"<?php endif; ?>>WIN XP HOME 32 BIT</option>
                <option value="WIN SERVER 2016 STD MAK B" <?php if ($this->_tpl_vars['osname'] == 'WIN SERVER 2016 STD MAK B'): ?> selected="selected"<?php endif; ?>>WIN SERVER 2016 STD MAK B</option>
              <option value="WIN SERVER 2019 STD" <?php if ($this->_tpl_vars['osname'] == 'WIN SERVER 2019 STD'): ?> selected="selected"<?php endif; ?>>WIN SERVER 2019 STD</option>
               <option value="WIN SERVER 2012 R2 STD" <?php if ($this->_tpl_vars['osname'] == 'WIN SERVER 2012 R2 STD'): ?> selected="selected"<?php endif; ?>>WIN SERVER 2012 R2 STD</option>
                <option value="WIN SERVER 2011 STD" <?php if ($this->_tpl_vars['osname'] == 'WIN SERVER 2011 STD'): ?> selected="selected"<?php endif; ?>>WIN SERVER 2011 STD</option>
               <option value="WIN SERVER 2008" <?php if ($this->_tpl_vars['osname'] == 'WIN SERVER 2008'): ?> selected="selected"<?php endif; ?>>WIN SERVER 2008</option>

          </select>
          </td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Operating System-Key<span class="red">*</span></td>
          <td width="449"><input type="text" name="oskey" value="<?php echo $this->_tpl_vars['oskey']; ?>
" size="50"  /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Office Name<span class="red">*</span></td>
          <td width="449">
                    <select name="officename">
                    
           <option value="" style="display:none;">Select MS OFFICE</option>
           <option value="MS OFFICE HOME & BUSINESS 2021" <?php if ($this->_tpl_vars['officename'] == 'MS OFFICE HOME & BUSINESS 2021'): ?> selected="selected"<?php endif; ?>>MS OFFICE HOME & BUSINESS 2021</option>
           <option value="NO OFFICE FOR SERVER" <?php if ($this->_tpl_vars['officename'] == 'NO OFFICE FOR SERVER'): ?> selected="selected"<?php endif; ?>>NO OFFICE FOR SERVER</option>
             <option value="MS OFFICE HOME & BUSINESS 2019" <?php if ($this->_tpl_vars['officename'] == 'MS OFFICE HOME & BUSINESS 2019'): ?> selected="selected"<?php endif; ?>>MS OFFICE HOME & BUSINESS 2019</option>
           <option value="MS OFFICE 365" <?php if ($this->_tpl_vars['officename'] == 'MS OFFICE 365'): ?> selected="selected"<?php endif; ?>>MS OFFICE 365</option>
         
          <option value="MS OFFICE HOME & BUSINESS 2016" <?php if ($this->_tpl_vars['officename'] == 'MS OFFICE HOME & BUSINESS 2016'): ?> selected="selected"<?php endif; ?>>MS OFFICE HOME & BUSINESS 2016</option>
           <option value="MS OFFICE HOME & BUSINESS 2013" <?php if ($this->_tpl_vars['officename'] == 'MS OFFICE HOME & BUSINESS 2013'): ?> selected="selected"<?php endif; ?>>MS OFFICE HOME & BUSINESS 2013</option>
            <option value="MS OFFICE HOME & BUSINESS 2010" <?php if ($this->_tpl_vars['officename'] == 'MS OFFICE HOME & BUSINESS 2010'): ?> selected="selected"<?php endif; ?>>MS OFFICE HOME & BUSINESS 2010</option>
             <option value="MS OFFICE 2007" <?php if ($this->_tpl_vars['officename'] == 'MS OFFICE 2007'): ?> selected="selected"<?php endif; ?>>MS OFFICE 2007</option>
              <option value="OFIFCE 365 BASIC" <?php if ($this->_tpl_vars['officename'] == 'OFIFCE 365 BASIC'): ?> selected="selected"<?php endif; ?>>OFIFCE 365 BASIC</option>
               <option value="OFIFCE 365 E3" <?php if ($this->_tpl_vars['officename'] == 'OFIFCE 365 E3'): ?> selected="selected"<?php endif; ?>>OFIFCE 365 E3</option>

          </select>
          </td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Office Key<span class="red">*</span></td>
          <td width="449"><input type="text" name="officekey" value="<?php echo $this->_tpl_vars['officekey']; ?>
" size="50"  /></td>
          </tr>
          
          <tr>
          <td width="251" height="43"  id="normal_text">Office-Registered-Email</td>
          <td width="449"><input type="text" name="offemail" value="<?php echo $this->_tpl_vars['offemail']; ?>
" size="25"  /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Software 1</td>
          <td width="449"><input type="text" name="sof1" value="<?php echo $this->_tpl_vars['sof1']; ?>
" /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Software 1-Key</td>
          <td width="449"><input type="text" name="soft1key" value="<?php echo $this->_tpl_vars['soft1key']; ?>
"  /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Software 2</td>
          <td width="449"><input type="text" name="soft2" value="<?php echo $this->_tpl_vars['soft2']; ?>
" /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Software 2-Key</td>
          <td width="449"><input type="text" name="soft2key" value="<?php echo $this->_tpl_vars['soft2key']; ?>
"  /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Software 3</td>
          <td width="449"><input type="text" name="soft3" value="<?php echo $this->_tpl_vars['soft3']; ?>
"  /></td>
          </tr>
                   <tr>
          <td width="251" height="43"  id="normal_text">Software 3-Key</td>
          <td width="449"><input type="text" name="soft3key" value="<?php echo $this->_tpl_vars['soft3key']; ?>
"  /></td>
          </tr>
          

        <tr>
          <td colspan="2" height="60"  align="center"><input type="submit" value="<?php if ($this->_tpl_vars['username']): ?>UPDATE<?php else: ?>ADD<?php endif; ?> LICENSE" class="button" style="cursor:pointer" /></td>
        </tr>
        <tr>
          <td colspan="2" height="80" align="center" class="red"><?php echo $this->_tpl_vars['display']; ?>
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