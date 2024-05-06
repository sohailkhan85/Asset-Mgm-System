<?php /* Smarty version 2.6.16, created on 2022-07-03 07:12:58
         compiled from adduser.html */ ?>
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
	
	if(document.adduser.company.value=="")
	{
		alert("Please make sure that Company Name is not left blank.");
		document.adduser.company.focus();
		return false;
	}
	else if(document.adduser.username.value=="")
	{
		alert("Please make sure that User Name is not left blank.");
		document.adduser.username.focus();
		return false;
	}
	
	
	else
	{
		//alert("inside Submit");
		//document.getElementById(\'loginform\').submit();
		document.adduser.submit();
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
 
    <td width="1345" bgcolor="F1F4FE"><form id="adduser" method="post" name="adduser" onsubmit="return validate()" action="adduser.php" >
    <input type="hidden" name="assetid" id="assetid" value="<?php echo $this->_tpl_vars['assetid']; ?>
" />
      <table width="800" height="373" border="0" cellpadding="0" cellspacing="0" align="center" class="tbl" >

        <tr>
          <td height="30" colspan="2" bgcolor="#0390B8" id="heading"><?php if ($this->_tpl_vars['assetid']): ?>Update User<?php else: ?>Add New User<?php endif; ?></td>

          
        </tr>
        <tr>
        	<td height="31" colspan="2">
            <strong>Fields mark with red(<span class="red">*</span>) are mandatory fields.</strong>
            </td>
        </tr>
        <tr>
          <td width="251" height="43" id="normal_text">Company Name<span class="red">*</span></td>
          <td width="449">
          						<select name="company" id="company">
                                
                                <option value="" style="display:none;">Select Company</option>
                                
									<?php unset($this->_sections['c']);
$this->_sections['c']['name'] = 'c';
$this->_sections['c']['loop'] = is_array($_loop=$this->_tpl_vars['Company_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['c']['show'] = true;
$this->_sections['c']['max'] = $this->_sections['c']['loop'];
$this->_sections['c']['step'] = 1;
$this->_sections['c']['start'] = $this->_sections['c']['step'] > 0 ? 0 : $this->_sections['c']['loop']-1;
if ($this->_sections['c']['show']) {
    $this->_sections['c']['total'] = $this->_sections['c']['loop'];
    if ($this->_sections['c']['total'] == 0)
        $this->_sections['c']['show'] = false;
} else
    $this->_sections['c']['total'] = 0;
if ($this->_sections['c']['show']):

            for ($this->_sections['c']['index'] = $this->_sections['c']['start'], $this->_sections['c']['iteration'] = 1;
                 $this->_sections['c']['iteration'] <= $this->_sections['c']['total'];
                 $this->_sections['c']['index'] += $this->_sections['c']['step'], $this->_sections['c']['iteration']++):
$this->_sections['c']['rownum'] = $this->_sections['c']['iteration'];
$this->_sections['c']['index_prev'] = $this->_sections['c']['index'] - $this->_sections['c']['step'];
$this->_sections['c']['index_next'] = $this->_sections['c']['index'] + $this->_sections['c']['step'];
$this->_sections['c']['first']      = ($this->_sections['c']['iteration'] == 1);
$this->_sections['c']['last']       = ($this->_sections['c']['iteration'] == $this->_sections['c']['total']);
?>
										<!--<option value="<?php echo $this->_tpl_vars['Company_list'][$this->_sections['c']['index']][0]; ?>
"<?php if ($this->_tpl_vars['company'] == $this->_tpl_vars['Company_list'][$this->_sections['c']['index']][0]): ?> selected="selected"<?php endif; ?> >-->
                                       <option value="<?php echo $this->_tpl_vars['Company_list'][$this->_sections['c']['index']][0]; ?>
"<?php if ($this->_tpl_vars['company'] == $this->_tpl_vars['Company_list'][$this->_sections['c']['index']][0]): ?> selected="selected" <?php elseif ($this->_tpl_vars['Companyname'] == $this->_tpl_vars['Company_list'][$this->_sections['c']['index']][0]): ?> selected="selected" <?php endif; ?>>
											<?php echo $this->_tpl_vars['Company_list'][$this->_sections['c']['index']][0]; ?>

										</option>
									<?php endfor; endif; ?>
								</select>
          </td>
        </tr>
               <tr>
          <td width="251" height="43"  id="normal_text">User Name<span class="red">*</span></td>
          <td width="449">
          <input type="text" name="username" value="<?php echo $this->_tpl_vars['username']; ?>
" />
          </td>
        </tr>
        <tr>
          <td width="251" height="43"  id="normal_text">Email</td>
          <td width="449">
			<input type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" />
          </td>
        </tr>
        
 
         <tr>
          <td width="251" height="43"  id="normal_text">Department</td>
          <td width="449"><input type="text" name="dept" value="<?php echo $this->_tpl_vars['dept']; ?>
" /></td>

        <tr>
          <td colspan="2" height="60"  align="center"><input type="submit" value="<?php if ($this->_tpl_vars['assetid']): ?>UPDATE<?php else: ?>ADD<?php endif; ?> USER" class="button" style="cursor:pointer" /></td>
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