<?php /* Smarty version 2.6.16, created on 2011-09-25 15:45:17
         compiled from test_mail.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HAM</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<!--<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../common.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>-->
 



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

       				 <td colspan="7">&nbsp;</td>
     			 </tr>
				
				<tr>
				  <td colspan="7">
						<table cellpadding="0" cellspacing="5" id="add_software" border="0" align="center" width="750" height="400">
			

						<tr>
							<td colspan="7" bgcolor="#0390B8" id="heading">Test Mail</td>
						</tr>
						<tr>
							<td colspan="7" align="left"><strong>Fields mark with red(<span class="red">*</span>) are mandatory fields.</strong></td>
						</tr>
						
						<tr><td colspan="7">&nbsp;</td></tr>
						
						<form method="post" name="form" id="frm" action="test_mail1.php">
						<tr>
							
						</tr>
						<tr>
							<td width="81">To<span class="red">*</span></td>
							<td width="654" align="left">   <input type="text" name="to"  size="50"/></td>
						</tr>


						<tr>
							<td>Subject<span class="red">*</span></td>
							<td align="left"><input type="text" name="subject"  size="50" /></td>
						</tr>
						<tr>
							<td>Message<span class="red">*</span></td>
							<td align="left"><input type="text" name="message" size="50" /></td>
						</tr>
						
						<tr>
							<td colspan="7" align="center">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="7" align="center"><input type="submit" name="submit" value="Send" /></td>
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