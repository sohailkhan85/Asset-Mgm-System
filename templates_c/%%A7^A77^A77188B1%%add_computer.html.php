<?php /* Smarty version 2.6.16, created on 2011-09-04 17:24:12
         compiled from add_computer.html */ ?>
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
add_computer.js"></script>


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
								<td colspan="3" width="20">Computer Label already exist, it should be unique.<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/cross_image.png" id="cross_image" width="12" align="absmiddle" style="cursor:pointer" onclick="hideError()" /></span></td>
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
							<td colspan="7" bgcolor="#0390B8" id="heading"><?php if ($this->_tpl_vars['comp_id']): ?>Edit<?php else: ?>Add<?php endif; ?> Computer </td>
						</tr>
						<tr>
							<td colspan="7" align="left"><strong>Fields mark with red(<span class="red">*</span>) are mandatory fields.</strong></td>
						</tr>
						
						<tr><td colspan="7">&nbsp;</td></tr>
						
						<form method="post" name="form" id="frm" action="add_computer.php">
						<input type="hidden" name="comp_id" value="<?php echo $this->_tpl_vars['comp_id']; ?>
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
							<td>Computer Label<span class="red">*</span></td>
							<td align="left"><input type="text" name="computer_label" value="<?php echo $this->_tpl_vars['computer_label']; ?>
"/></td>
						</tr>
						<tr>
							<td width="185">Manufacturer<span class="red">*</span></td>
							<td width="300" align="left">
								<select name="manufacturer">
							      
									  <option value="d" <?php if ($this->_tpl_vars['manufacturer'] == 'd'): ?> selected="selected" <?php endif; ?>>Dell</option>
									  <option value="a" <?php if ($this->_tpl_vars['manufacturer'] == 'a'): ?> selected="selected" <?php endif; ?>>Apple</option>
									  <option value="ac" <?php if ($this->_tpl_vars['manufacturer'] == 'ac'): ?> selected="selected" <?php endif; ?>>Acer</option>
						      
							    </select>							</td>
						</tr>
						<tr>
							<td width="185">Type<span class="red">*</span></td>
							<td width="300" align="left">
								<select name="type">
							      
									  <option value="d" <?php if ($this->_tpl_vars['type'] == 'd'): ?> selected="selected" <?php endif; ?>>Desktop</option>
									  <option value="l" <?php if ($this->_tpl_vars['type'] == 'l'): ?> selected="selected" <?php endif; ?>>Laptop</option>
									  
						      
							    </select>							</td>
						</tr>
						<tr>
							<td>Processor</td>
							<td align="left"><input type="text" name="processor" value="<?php echo $this->_tpl_vars['processor']; ?>
"/></td>
						</tr>
						<tr>
							<td>RAM<span class="red">*</span></td>
							<td align="left"><input type="text" name="ram" value="<?php echo $this->_tpl_vars['ram']; ?>
" /></td>
						</tr>
						<tr>
							<td>Hard Drive (GB)<span class="red">*</span></td>
							<td align="left"><input type="text" name="hard_drive" value="<?php echo $this->_tpl_vars['hard_drive']; ?>
" /></td>
						</tr>
						<tr>
							<td>Price (RO) 
						 </td>
							<td align="left"><input type="text" name="price" value="<?php echo $this->_tpl_vars['price']; ?>
" /></td>
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