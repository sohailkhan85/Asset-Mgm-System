<?php /* Smarty version 2.6.16, created on 2011-09-24 12:27:48
         compiled from add_software.html */ ?>
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
add_software.js"></script>


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
					<td colspan="4">
						<div id="msg" class="error_msg">
						<tr id="msgtr">
							<td colspan="2"></td>
						</tr>
						</div>
					</td>
				</tr>
			     
				<?php if ($this->_tpl_vars['unique']): ?> 
				  <tr>
       				 <td colspan="7">&nbsp;</td>
     			 </tr>

				 <tr>
							<td colspan="3">
							<div id="msg" class="error_msg">
							<tr id="msgtr" class="error_msg">
								<td colspan="3" width="20">Product Key already exist, it should be unique.<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/cross_image.png" id="cross_image" width="12" align="absmiddle" style="cursor:pointer" onclick="hideError()" /></span></td>
							</tr>
							</div>
				</tr>
				<?php endif; ?>
      			<tr>
       				 <td colspan="7">&nbsp;</td>
     			 </tr>
				
				<tr>
				  <td colspan="7">
						<table cellpadding="0" cellspacing="5" id="add_software" border="0" align="center" width="750" height="400">
			

						<tr>
							<td colspan="7" bgcolor="#0390B8" id="heading"><?php if ($this->_tpl_vars['soft_id']): ?>Edit<?php else: ?>Add<?php endif; ?> Software</td>
						</tr>
						<tr>
							<td colspan="7" align="left"><strong>Fields mark with red(<span class="red">*</span>) are mandatory fields.</strong></td>
						</tr>
						
						<tr><td colspan="7">&nbsp;</td></tr>
						
						<form method="post" name="form" id="frm" action="add_software.php">
						<input type="hidden" name="soft_id" value="<?php echo $this->_tpl_vars['soft_id']; ?>
" />
						<tr>
							<td width="185">Select User<span class="red">*</span></td>
							<td width="300" align="left">
								<select name="user">
									<?php unset($this->_sections['u']);
$this->_sections['u']['name'] = 'u';
$this->_sections['u']['loop'] = is_array($_loop=$this->_tpl_vars['users_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['u']['show'] = true;
$this->_sections['u']['max'] = $this->_sections['u']['loop'];
$this->_sections['u']['step'] = 1;
$this->_sections['u']['start'] = $this->_sections['u']['step'] > 0 ? 0 : $this->_sections['u']['loop']-1;
if ($this->_sections['u']['show']) {
    $this->_sections['u']['total'] = $this->_sections['u']['loop'];
    if ($this->_sections['u']['total'] == 0)
        $this->_sections['u']['show'] = false;
} else
    $this->_sections['u']['total'] = 0;
if ($this->_sections['u']['show']):

            for ($this->_sections['u']['index'] = $this->_sections['u']['start'], $this->_sections['u']['iteration'] = 1;
                 $this->_sections['u']['iteration'] <= $this->_sections['u']['total'];
                 $this->_sections['u']['index'] += $this->_sections['u']['step'], $this->_sections['u']['iteration']++):
$this->_sections['u']['rownum'] = $this->_sections['u']['iteration'];
$this->_sections['u']['index_prev'] = $this->_sections['u']['index'] - $this->_sections['u']['step'];
$this->_sections['u']['index_next'] = $this->_sections['u']['index'] + $this->_sections['u']['step'];
$this->_sections['u']['first']      = ($this->_sections['u']['iteration'] == 1);
$this->_sections['u']['last']       = ($this->_sections['u']['iteration'] == $this->_sections['u']['total']);
?>
										<option value="<?php echo $this->_tpl_vars['users_list'][$this->_sections['u']['index']][0]; ?>
" <?php if ($this->_tpl_vars['user_id'] == $this->_tpl_vars['users_list'][$this->_sections['u']['index']][0]): ?>selected="selected"<?php endif; ?>>
											<?php echo $this->_tpl_vars['users_list'][$this->_sections['u']['index']][1]; ?>

										</option>
									<?php endfor; endif; ?>
								</select>							
							</td>
						</tr>
						<tr>
							<td width="185">Software Title<span class="red">*</span></td>
							<td width="300" align="left">
								<input type="text" name="soft_title" value="<?php echo $this->_tpl_vars['soft_title']; ?>
"/>							</td>
						</tr>
						<tr>
							<td>Company</td>
							<td align="left"><input type="text" name="company" value="<?php echo $this->_tpl_vars['company']; ?>
"/></td>
						</tr>
						<tr>
							<td>Version<span class="red">*</span></td>
							<td align="left"><input type="text" name="version" value="<?php echo $this->_tpl_vars['version']; ?>
" /></td>
						</tr>
						<tr>
							<td>Product Website</td>
							<td align="left"><input type="text" name="prod_web" value="<?php echo $this->_tpl_vars['prod_web']; ?>
" /></td>
						</tr>
						<tr>
							<td>Price (RO) 
						 </td>
							<td align="left"><input type="text" name="price" value="<?php echo $this->_tpl_vars['price']; ?>
" /></td>
						</tr>
						<tr>
							<td>Support No<span class="red">*</span></td>
							<td align="left"><input type="text" name="support_no" value="<?php echo $this->_tpl_vars['support_no']; ?>
"/></td>
						</tr>
						<tr>
							<td>Support Email</td>
							<td align="left"><input type="text" name="support_email" value="<?php echo $this->_tpl_vars['support_email']; ?>
"/></td>
						</tr>
						<tr>
							<td>Product Key<span class="red">*</span></td>
							<td align="left">   <input type="text" name="product_key" value="<?php echo $this->_tpl_vars['product_key']; ?>
" size="50"/></td>
						</tr>


						<tr>
							<td>Serial No<span class="red">*</span></td>
							<td align="left"><input type="text" name="serial_no" value="<?php echo $this->_tpl_vars['serial_no']; ?>
" size="50" /></td>
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