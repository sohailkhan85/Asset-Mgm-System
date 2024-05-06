<?php /* Smarty version 2.6.16, created on 2014-01-27 06:01:39
         compiled from show_peripherals.html */ ?>
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
<script type="text/javascript" src="<?php echo $this->_tpl_vars['scriptpath']; ?>
mainpage.js"></script>



</head>

<body>
<table width="900"  align="center" cellpadding="0" cellspacing="0" class="tbl">
  <tr>
    <td height="75" colspan="10">
		<img src="images/hamheader1.gif" width="900" height="75" /></td>
	</tr>

  <tr>
   	<td>
	<table width="750"  border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#e0eef2">
      <!--				<tr>
					<td height="1" colspan="5">&nbsp;</td>
				</tr>-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "buttons_page.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <tr>
        <td colspan="10">&nbsp;</td>
      </tr>
   	  <?php if ($this->_tpl_vars['msg_del']): ?>
			  <tr>
			  
				<td colspan="3">
					<div id="msg" class="error_msg">
					<tr id="msgtr" class="error_msg">
						<td colspan="3" width="20">Selected Peripheral has been deleted successfully.<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/cross_image.png" id="cross_image" width="12" align="absmiddle" style="cursor:pointer" onclick="hideError()" /></span></td>
					</tr>
					</div>
			  </tr>
   	  <?php endif; ?>
   	  
   	  <?php if ($this->_tpl_vars['added'] || $this->_tpl_vars['updated']): ?>
		  <tr>
			   <td>&nbsp;</td>
				<td colspan="3">
					<div id="msg" class="error_msg">
					<tr id="msgtr" class="error_msg">
						<td colspan="3" width="20">Peripheral has been <?php if ($this->_tpl_vars['added']): ?>Added<?php else: ?>Updatd<?php endif; ?> successfully.<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/cross_image.png" id="cross_image" width="12" align="absmiddle" style="cursor:pointer" onclick="hideError()" /></span></td>
					</tr>
					</div>
			  </tr>
   	  <?php endif; ?>
	   <tr><td colspan="10">&nbsp;</td></tr>
	   <tr>
	   <td>&nbsp;</td>
        <td colspan="2" align="left"><a href="add_peripheral.php" class="button_add" style="cursor:pointer">ADD PERIPHERAL</a></td>
		<td align="left"><a href="export_peripheral.php" class="button_add" style="cursor:pointer">EXPORT</a></td>
      </tr>
  <tr>
    <td colspan="10">
		<table cellpadding="0" cellspacing="0"  id="user_record" border="0" align="center" width="750" height="292">
			 <tr bgcolor="#0390B8">
			<td width="125" height="25" align="center" bgcolor="#0390B8">Type </td>
			<td width="125" align="center">Model </td>
			<td width="125" align="center">Manufacturer</td>
			<td width="125" align="center">User</td>
			<td width="125" align="center">Department</td>

			<td colspan="2"align="center" width="150">ACTION</td>
		  </tr>
		  <form name="frm">
			<?php unset($this->_sections['p']);
$this->_sections['p']['name'] = 'p';
$this->_sections['p']['loop'] = is_array($_loop=$this->_tpl_vars['per']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<tr id="normal_text">
			  <td height="25" width="125" align="center"><?php echo $this->_tpl_vars['per'][$this->_sections['p']['index']][0]; ?>
</td>
			  <td width="125" align="center"><?php echo $this->_tpl_vars['per'][$this->_sections['p']['index']][1]; ?>
</td>
			  <td width="125" align="center"><?php echo $this->_tpl_vars['per'][$this->_sections['p']['index']][2]; ?>
</td>
			  <td width="125" align="center"><?php echo $this->_tpl_vars['per'][$this->_sections['p']['index']][3]; ?>
</td>
			  <td width="125" align="center"><?php echo $this->_tpl_vars['per'][$this->_sections['p']['index']][4]; ?>
</td>

			  <td width="60" align="center"><a href="add_peripheral.php?per_id=<?php echo $this->_tpl_vars['per'][$this->_sections['p']['index']][5]; ?>
" class="button" style="cursor:pointer">EDIT</a></td>
			  <td width="60" align="center"><a href="delete_peripheral.php?per_id=<?php echo $this->_tpl_vars['per'][$this->_sections['p']['index']][5]; ?>
" class="button" style="cursor:pointer">DELETE</a></td>
			  
			</tr>
			<?php endfor; endif; ?>
		  </form>
		  <tr id="paging_text">
			<td colspan="10" align="center"><?php echo $this->_tpl_vars['page_numbering']; ?>
</td>
		  </tr>
		  <tr>
			<td colspan="10" align="center"></td>
		  </tr>
		  <tr>
			<td colspan="10" align="center">&nbsp;</td>
		  </tr>
    </table>
	</td>
  </tr>
    </table></td>
  </tr> 

	<tr><th colspan="10" bgcolor="#0390B8" height="25">Copyright @ 2011 Assarain Group of Companies. All rights reserved.</th>
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