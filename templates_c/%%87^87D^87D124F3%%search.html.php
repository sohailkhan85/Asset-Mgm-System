<?php /* Smarty version 2.6.16, created on 2014-01-29 06:10:38
         compiled from search.html */ ?>
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
search.js"></script>


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
				 
				 <?php if ($this->_tpl_vars['no_record']): ?>
				
      			<tr>
       				 <td colspan="7">&nbsp;</td>
     			 </tr>
				 <tr>
       				 <td colspan="3" class="error_msg">No Record Found.</td>
     			 </tr>
				
				<?php endif; ?>
      			<tr>
       				 <td colspan="7">&nbsp;</td>
     			 </tr>
				
				<tr>
				  <td colspan="7">
						<table cellpadding="0" cellspacing="5" id="add_software" border="0" align="center" width="750" height="394">
			

						<tr>
							<td height="20" colspan="7" bgcolor="#0390B8" id="heading">Search</td>
						</tr>
						<tr>
							<td colspan="7" align="left"><strong>Select category for search.</strong></td>
						</tr>
						
						
						<form method="post" name="form" id="frm" action="search_softwares.php">
						
						<tr>
							<td width="174"><input type="radio" name="search_choice"  value="soft" checked="checked" /></td>
							<td width="561" align="left">
							Software
							</td>
						</tr>
						<tr>
							<td><input type="radio" name="search_choice" value="comp" /></td>
							<td align="left">Computer</td>
						</tr>
						<tr>
							<td><input type="radio" name="search_choice" value="user" /></td>
							<td align="left">User</td>
						</tr>
						<tr>
							<td><input type="radio" name="search_choice" value="peri" /></td>
							<td align="left">Peripheral</td>
						</tr>
						<tr>
							<td>Enter Keywords</td>
							<td align="left"><input type="text" name="keywords" size="50" id="keywords" /></td>
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