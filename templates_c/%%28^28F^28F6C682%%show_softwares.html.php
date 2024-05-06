<?php /* Smarty version 2.6.16, created on 2014-01-27 06:01:12
         compiled from show_softwares.html */ ?>
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
						<td colspan="3" width="20">Selected Software has been deleted successfully.<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/cross_image.png" id="cross_image" width="12" align="absmiddle" style="cursor:pointer" onclick="hideError()" /></span></td>
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
						<td colspan="3" width="20">Software has been <?php if ($this->_tpl_vars['added']): ?>Added<?php else: ?>Updatd<?php endif; ?> successfully.<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/cross_image.png" id="cross_image" width="12" align="absmiddle" style="cursor:pointer" onclick="hideError()" /></span></td>
					</tr>
					</div>
			  </tr>
   	  <?php endif; ?>
	   <tr><td colspan="10">&nbsp;</td></tr>
	   <tr>
	   <td>&nbsp;</td>
        <td colspan="2" align="left"><a href="add_software.php" class="button_add" style="cursor:pointer">ADD SOFTWARE</a></td>
		<td align="left"><a href="export_software.php" class="button_add" style="cursor:pointer">EXPORT</a></td>
      </tr>
  <tr>
    <td colspan="10">
		<table cellpadding="0" cellspacing="0"  id="user_record" border="0" align="center" width="750" height="292">
			 <tr bgcolor="#0390B8">
			<td width="150" height="25" align="center" bgcolor="#0390B8">Software Title </td>
			<td width="150" align="center">Version </td>
			<td width="250" align="center">Product Key</td>
			<td width="150" align="center">User</td>
			<td width="150" align="center">Department</td>

			<td colspan="2"align="center" width="150">ACTION</td>
		  </tr>
		  <form name="frm">
			<?php unset($this->_sections['s']);
$this->_sections['s']['name'] = 's';
$this->_sections['s']['loop'] = is_array($_loop=$this->_tpl_vars['soft']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<tr id="normal_text">
			  <td height="25" width="123" align="center"><?php echo $this->_tpl_vars['soft'][$this->_sections['s']['index']][0]; ?>
</td>
			  <td width="150" align="center"><?php echo $this->_tpl_vars['soft'][$this->_sections['s']['index']][1]; ?>
</td>
			  <td width="250" align="center"><?php echo $this->_tpl_vars['soft'][$this->_sections['s']['index']][2]; ?>
</td>
			  <td width="150" align="center"><?php echo $this->_tpl_vars['soft'][$this->_sections['s']['index']][3]; ?>
</td>
			  <td width="150" align="center"><?php echo $this->_tpl_vars['soft'][$this->_sections['s']['index']][4]; ?>
</td>

			  <td width="75" align="center"><a href="add_software.php?soft_id=<?php echo $this->_tpl_vars['soft'][$this->_sections['s']['index']][5]; ?>
" class="button" style="cursor:pointer">EDIT</a></td>
			  <td width="75" align="center"><a href="delete_software.php?soft_id=<?php echo $this->_tpl_vars['soft'][$this->_sections['s']['index']][5]; ?>
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