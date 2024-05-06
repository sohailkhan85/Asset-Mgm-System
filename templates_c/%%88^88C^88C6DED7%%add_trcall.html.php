<?php /* Smarty version 2.6.16, created on 2011-09-07 14:59:49
         compiled from add_trcall.html */ ?>
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
add_trcall.js"></script>


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

      			<tr>
       				 <td colspan="7">&nbsp;</td>
     			 </tr>
				
				<tr>
				  <td colspan="7">
						<table cellpadding="0" cellspacing="5" id="add_software" border="0" align="center" width="750" height="295">
			

						<tr>
							<td height="19" colspan="7" bgcolor="#0390B8" id="heading"><?php if ($this->_tpl_vars['trcall_id']): ?>Update<?php else: ?>Add<?php endif; ?> Trouble Call</td>
						</tr>
						<tr>
							<td colspan="7" align="left"><strong>Fields mark with red(<span class="red">*</span>) are mandatory fields.</strong></td>
						</tr>
						
						<!--<tr><td colspan="7">&nbsp;</td></tr>-->
						
						<form method="post" name="form" id="frm" action="add_trcall.php">
						<input type="hidden" name="trcall_id" value="<?php echo $this->_tpl_vars['trcall_id']; ?>
" />
						<tr>
							<td width="185" height="22">Select User (Caller)<span class="red">*</span></td>
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
							<td width="185" height="22">Call Date <span class="red">*</span></td>
							<td width="300" align="left">
								<input type="text" name="call_date" value="<?php echo $this->_tpl_vars['call_date']; ?>
"/>							</td>
						</tr>
						<tr>
							<td height="22">Assign To  <span class="red">*</span></td>
							<td align="left"><input type="text" name="assign_to" value="<?php echo $this->_tpl_vars['assign_to']; ?>
"/></td>
						</tr>
						<tr>
							<td height="22">Priority<span class="red">*</span></td>
							<td align="left">
							<select name="priority">
								<option value="h" <?php if ($this->_tpl_vars['priority'] == 'h'): ?> selected="selected" <?php endif; ?>>High</option>
								<option value="m" <?php if ($this->_tpl_vars['priority'] == 'm'): ?> selected="selected" <?php endif; ?>>Medium</option>
								<option value="l" <?php if ($this->_tpl_vars['priority'] == 'l'): ?> selected="selected" <?php endif; ?>>Low</option>
							</select>
							</td>
							
						</tr>
						<tr>
							<td height="35">Problem<span class="red">*</span></td>
							<td align="left"><textarea name="problem" rows="4" cols="35"><?php echo $this->_tpl_vars['problem']; ?>
</textarea></td>
							
						</tr>
							<td height="22">Status<span class="red">*</span></td>
							<td align="left"><input type="radio" name="status" id="status_p" value="p" <?php if (! $this->_tpl_vars['status']): ?>checked="checked" <?php else: ?> checked="checked" <?php endif; ?> onclick="pending()"/>
							<span>Pending</span>
							<input type="radio" name="status" id="status_c" value="c" <?php if ($this->_tpl_vars['status'] == 'c'): ?> checked="checked" <?php endif; ?> onclick="closed()" />
							<span>Closed</span>
							</td>
							
						</tr>
						
												<tr id="status_closed_resby">
													<td height="22">Resolved By<span class="red">*</span></td>
													<td align="left"><input type="text" name="resolved_by" value="<?php echo $this->_tpl_vars['resolved_by']; ?>
" /></td>
												</tr>
										
												<tr id="status_closed_resdate">
													<td height="22">Resolution Date<span class="red">*</span></td>
													<td align="left"><input type="text" name="resolution_date" value="<?php echo $this->_tpl_vars['resolution_date']; ?>
" /></td>
													
												</tr>
						
												<tr id="status_closed_resl">
													<td height="35">Resolution<span class="red">*</span></td>
													<td align="left"><textarea name="resolution" cols="35" rows="4"><?php echo $this->_tpl_vars['resolution']; ?>
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

	<tr><th colspan="7" bgcolor="#0390B8" height="25">Copyright © 2011 Assarain Group of Companies. All rights reserved.</th>
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