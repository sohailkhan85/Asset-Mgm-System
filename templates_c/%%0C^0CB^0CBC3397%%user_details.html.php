<?php /* Smarty version 2.6.16, created on 2011-09-04 16:56:07
         compiled from user_details.html */ ?>
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
user_details.js"></script>


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
       				 <td colspan="7">&nbsp;</td>
     			 </tr>
				
				<tr>
				  <td colspan="7">
				  
				  		<form name="form" id="frm" method="post">
						<table cellpadding="0" cellspacing="0" id="add_software" border="0" align="center" width="750" height="400">
								<tr>
									<td height="19" colspan="7" bgcolor="#0390B8" id="heading"><?php echo $this->_tpl_vars['first_name']; ?>
's Detail</td>
									
								</tr>
								
								<tr>
									<td height="25" colspan="6" align="left"><input type="radio" name="choice" value="s" id="software" checked="checked" onclick="show_soft()" /><strong>View Softwares</strong></td>
									<td width="588" height="25" align="left"><input type="radio" name="choice" value="p" id="peri" onclick="show_peri()"/><strong>View Peripherals</strong></td>
								</tr>
								
								
								<tr>
									<td colspan="7" align="center">
										
										<table  width="600" id="user_detail" cellpadding="0" cellspacing="0">
											<tr bgcolor="#0390B8" id="sub-heading">
												<td width="100" height="23">First Name</td>
												<td width="100">Job Title</td>
												<td width="100">Department</td>
												<td width="225">Softwares/Peripheral Installed</td>
											</tr>
											
											<tr id="soft">
												<td><?php echo $this->_tpl_vars['first_name']; ?>
</td>
												<td><?php echo $this->_tpl_vars['job_title']; ?>
</td>
												<td><?php echo $this->_tpl_vars['department']; ?>
</td>
												<td>
												<?php unset($this->_sections['s']);
$this->_sections['s']['name'] = 's';
$this->_sections['s']['loop'] = is_array($_loop=$this->_tpl_vars['software']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['s']['show'] = true;
$this->_sections['s']['max'] = $this->_sections['s']['loop'];
$this->_sections['s']['step'] = 1;
$this->_sections['s']['start'] = $this->_sections['s']['step'] > 0 ? 0 : $this->_sections['s']['loop']-1;
if ($this->_sections['s']['show']) {
    $this->_sections['s']['total'] = $this->_sections['s']['loop'];
    if ($this->_sections['s']['total'] == 0)
        $this->_sections['s']['show'] = false;
} else
    $this->_sections['s']['total'] = 0;
if ($this->_sections['s']['show']):

            for ($this->_sections['s']['index'] = $this->_sections['s']['start'], $this->_sections['s']['iteration'] = 1;
                 $this->_sections['s']['iteration'] <= $this->_sections['s']['total'];
                 $this->_sections['s']['index'] += $this->_sections['s']['step'], $this->_sections['s']['iteration']++):
$this->_sections['s']['rownum'] = $this->_sections['s']['iteration'];
$this->_sections['s']['index_prev'] = $this->_sections['s']['index'] - $this->_sections['s']['step'];
$this->_sections['s']['index_next'] = $this->_sections['s']['index'] + $this->_sections['s']['step'];
$this->_sections['s']['first']      = ($this->_sections['s']['iteration'] == 1);
$this->_sections['s']['last']       = ($this->_sections['s']['iteration'] == $this->_sections['s']['total']);
?>
													<?php echo $this->_tpl_vars['software'][$this->_sections['s']['index']][0]; ?>
 , 
												<?php endfor; endif; ?>
												</td>
											</tr>
											
											<tr id="per">
												<td><?php echo $this->_tpl_vars['first_name']; ?>
</td>
												<td><?php echo $this->_tpl_vars['job_title']; ?>
</td>
												<td><?php echo $this->_tpl_vars['department']; ?>
</td>
												<td>
												<?php unset($this->_sections['p']);
$this->_sections['p']['name'] = 'p';
$this->_sections['p']['loop'] = is_array($_loop=$this->_tpl_vars['peripheral']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['p']['show'] = true;
$this->_sections['p']['max'] = $this->_sections['p']['loop'];
$this->_sections['p']['step'] = 1;
$this->_sections['p']['start'] = $this->_sections['p']['step'] > 0 ? 0 : $this->_sections['p']['loop']-1;
if ($this->_sections['p']['show']) {
    $this->_sections['p']['total'] = $this->_sections['p']['loop'];
    if ($this->_sections['p']['total'] == 0)
        $this->_sections['p']['show'] = false;
} else
    $this->_sections['p']['total'] = 0;
if ($this->_sections['p']['show']):

            for ($this->_sections['p']['index'] = $this->_sections['p']['start'], $this->_sections['p']['iteration'] = 1;
                 $this->_sections['p']['iteration'] <= $this->_sections['p']['total'];
                 $this->_sections['p']['index'] += $this->_sections['p']['step'], $this->_sections['p']['iteration']++):
$this->_sections['p']['rownum'] = $this->_sections['p']['iteration'];
$this->_sections['p']['index_prev'] = $this->_sections['p']['index'] - $this->_sections['p']['step'];
$this->_sections['p']['index_next'] = $this->_sections['p']['index'] + $this->_sections['p']['step'];
$this->_sections['p']['first']      = ($this->_sections['p']['iteration'] == 1);
$this->_sections['p']['last']       = ($this->_sections['p']['iteration'] == $this->_sections['p']['total']);
?>
													<?php echo $this->_tpl_vars['peripheral'][$this->_sections['p']['index']][0]; ?>
 , 
												<?php endfor; endif; ?>
												</td>
											</tr>
											
									  </table>
									 

									    <tr><td colspan="7">&nbsp;</td></tr>
										<tr><td colspan="7">&nbsp;</td></tr>
									   <tr><td colspan="7">&nbsp;</td></tr>
									    <tr><td colspan="7">&nbsp;</td></tr>
										
									
									</td>
								</tr>
				    	</table>
						</form>	
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