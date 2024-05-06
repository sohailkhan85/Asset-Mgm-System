<?php /* Smarty version 2.6.16, created on 2011-09-21 15:19:00
         compiled from add_user.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HAM</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../common.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--<?php $this->assign('scriptpath', "JS/"); ?>-->
 

<script type="text/javascript" src="<?php echo $this->_tpl_vars['scriptpath']; ?>
user.js"></script>


</head>
<body>
<table width="900"  align="center" cellpadding="0" cellspacing="0" class="tbl">
  <tr>
    <td height="75" colspan="7">
		<img src="images/hamheader1.gif" width="900" height="75" /></td>
	</tr>

  <tr>
    	<td>
			<table width="306"  border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#e0eef2">

			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "buttons_page.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<tr>
					<td colspan="3">
						<div id="msg" class="error_msg">
						<tr id="msgtr">
							<td colspan="2"></td>
						</tr>
						</div>
					</td>
				</tr>
				
      			<tr>
       				 <td colspan="7">&nbsp;</td>
     			 </tr>
				
				<tr>
				  <td colspan="7">
						<table cellpadding="0" cellspacing="5" id="add_software" border="0" align="center" width="750" height="400">
			

						<tr>
							<td colspan="7" bgcolor="#0390B8" id="heading"><?php if ($this->_tpl_vars['user_id']): ?>Edit<?php else: ?>Add<?php endif; ?> User</td>
							
						</tr>
						<tr>
							<td colspan="7" align="left"><strong>Fields mark with red(<span class="red">*</span>) are mandatory fields.</strong></td>
						</tr>
						
						<tr><td colspan="7">&nbsp;</td></tr>
						
						<form method="post" name="form" id="frm" action="add_user.php" class="textbox">
						<input type="hidden" name="user_id" value="<?php echo $this->_tpl_vars['user_id']; ?>
" />
						<tr>
							<td width="185">First Name<span class="red">*</span></td>
							<td width="300" align="left">
								<input type="text" name="first_name" value="<?php echo $this->_tpl_vars['first_name']; ?>
" class="textbox"/>
							</td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td align="left"><input type="text" name="last_name" value="<?php echo $this->_tpl_vars['last_name']; ?>
" class="textbox"/></td>
							
						</tr>
						<tr>
							<td>Job Title<span class="red">*</span></td>
							<td align="left"><input type="text" name="job_title" value="<?php echo $this->_tpl_vars['job_title']; ?>
" class="textbox" /></td>
							
						</tr>
						<tr>
							<td>Employee No<span class="red">*</span></td>
							<td align="left"><input type="text" name="employee_no" value="<?php echo $this->_tpl_vars['employee_no']; ?>
" class="textbox"/></td>
							
						</tr>
						<tr>
							<td>Email </td>
							<td align="left"><input type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" class="textbox"/></td>
						</tr>
						<tr>
							<td>Department<span class="red">*</span></td>
							<td align="left"><input type="text" name="department" value="<?php echo $this->_tpl_vars['department']; ?>
" class="textbox"/></td>
							  
						</tr>
						<tr>
							<td>Cell</td>
							<td align="left"><input type="text" name="cell" value="<?php echo $this->_tpl_vars['cell']; ?>
" class="textbox"/></td>
							
						</tr>
																		<tr>
							<td>Phone<span class="red">*</span></td>
							<td align="left"><input type="text" name="phone" value="<?php echo $this->_tpl_vars['phone']; ?>
" class="textbox"/></td>
							
						</tr>



						<tr>
							<td>Address</td>
							<td align="left"><textarea name="address" rows="6" cols="25" class="textbox"><?php echo $this->_tpl_vars['address']; ?>
</textarea></td>
							
						</tr>

						<tr>
							<td colspan="7" align="center">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="7" align="center"><a href="javascript:ajax_submit()"><img src="images/submit.gif" width="86" border="0" style="cursor:pointer"/></a></td>
						</tr>
						<tr>
							<td colspan="7" align="center">&nbsp;</td>
						</tr>
						</form>
					  </table>	
					  		  </td> 
				</tr>
			</table>
			
		</td>
	</tr> 

	<tr><th colspan="6" bgcolor="#0390B8" height="25">Copyright © 2011 Assarain Group of Companies. All rights reserved.</th>
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