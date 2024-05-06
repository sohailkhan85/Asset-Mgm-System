<?php /* Smarty version 2.6.16, created on 2014-04-23 08:24:04
         compiled from buildings.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HAY AL RAHBAH</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../common.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--<script type="text/javascript" src="<?php echo $this->_tpl_vars['scriptpath']; ?>
mainpage.js"></script>-->
<script type="text/javascript" src="JS/mainpage.js"></script>
<?php echo '
<script type="text/javascript">
function validate()
{
	if(document.pms.src.value=="")
	{
		alert("Please make sure that Search Field is not empty.");
		document.pms.src.focus();
		return false;

	}
	else
	{
		//alert("inside Submit");
		document.pms.submit();
		return true;
	}

}

/*function signout()
{
	//alert(\'Inside SignOut\');
	window.location.href = \'index.php\';
}*/
</script>
'; ?>



</head>

<body>
<table width="1250" height="551"  align="center" cellpadding="0" cellspacing="0" class="tbl">
  <tr>
    <td height="75" colspan="10">
		<img src="images/har.gif" width="1250" height="125" /></td>
	</tr>

  <tr>
   	<td height="455">
	<table width="1250"  border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#e0eef2">
      <!--				<tr>
					<td height="1" colspan="5">&nbsp;</td>
				</tr>-->
      <form name="pms" id="pms" method="post" action="buildings.php" onsubmit="validate()">
      <tr>
            <td colspan="10">
            <table>
           
            <tr>
            		
                    <td> <input type="radio" name="rad" id="vac" value="v" /></td>
                    <td  id="normal_text"><strong>Vacant List</strong></td>
                    <td ><input type="radio" name="rad" id="build" value="b" checked="checked"  /></td>
                    <td id="normal_text"><strong>Building Details</strong></td>
            </tr>
            </table>
            </td>

      </tr>
      
   <tr><td colspan="10">&nbsp;</td></tr>   
   
      <tr>
        <td width="75" id="normal_text"><strong>SEARCH</strong></td>
        <td width="100"><input name="src" type="text" size="50" value="<?php echo $this->_tpl_vars['search']; ?>
" /></td>
        <td width="100"><input type="submit" value="GO" style="cursor:pointer" class="button"/></td>
        <?php if ($this->_tpl_vars['build']): ?><td width="150" id="normal_text"><strong>Total Records = <?php if ($this->_tpl_vars['total_records_search']):  echo $this->_tpl_vars['total_records_search']; ?>

         <?php else:  echo $this->_tpl_vars['total_records_main'];  endif; ?></strong></td><?php endif; ?>
         <td width="370" colspan="7" align="right"><input type="button" value="SIGN OUT" name="out" id="out" style="cursor:pointer" onclick="signout()" class="button" /></td>

      </tr>
        </form>
      			<tr>
					<td colspan="3">
						<div id="msg" class="error_msg">
						<tr id="msgtr">
							<td colspan="2"></td>
						</tr>
						</div>
					</td>
				</tr>
   	

	   <tr><td colspan="10">&nbsp;</td></tr>
       <?php if ($this->_tpl_vars['no_result'] == 1): ?>
       
        	<tr><td colspan="10" class="red"><strong>No Record Found. </strong><a href="buildings.php"><strong>ClICK HERE</a> to go back to main screen.</strong></tr>
       <?php endif; ?>
       

  <tr>
    <td colspan="10">
		<table cellpadding="0" cellspacing="0"  id="user_record" border="1" align="center" width="1250" height="325">
        <?php if ($this->_tpl_vars['build']): ?> 
			 <tr bgcolor="#0390B8">
			<td width="96" height="25" align="center" bgcolor="#0390B8">Building </td>
			<td width="96" align="center">Unit</td>
			<td width="128" align="center">Contract Period</td>
            <td width="88" align="center">Status </td>
			<td width="274" align="center">Tenant Name </td>
            <td width="96" align="center">Rent </td>
			<td width="96" align="center">Terms</td>
			<td width="88"align="center">Unit Type</td>
            <td width="96"align="center">Buiding No</td>
            <td width="170"align="center">Owner</td>

		  </tr>
		<?php endif; ?>	
			<?php unset($this->_sections['b']);
$this->_sections['b']['name'] = 'b';
$this->_sections['b']['loop'] = is_array($_loop=$this->_tpl_vars['build']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['b']['show'] = true;
$this->_sections['b']['max'] = $this->_sections['b']['loop'];
$this->_sections['b']['step'] = 1;
$this->_sections['b']['start'] = $this->_sections['b']['step'] > 0 ? 0 : $this->_sections['b']['loop']-1;
if ($this->_sections['b']['show']) {
    $this->_sections['b']['total'] = $this->_sections['b']['loop'];
    if ($this->_sections['b']['total'] == 0)
        $this->_sections['b']['show'] = false;
} else
    $this->_sections['b']['total'] = 0;
if ($this->_sections['b']['show']):

            for ($this->_sections['b']['index'] = $this->_sections['b']['start'], $this->_sections['b']['iteration'] = 1;
                 $this->_sections['b']['iteration'] <= $this->_sections['b']['total'];
                 $this->_sections['b']['index'] += $this->_sections['b']['step'], $this->_sections['b']['iteration']++):
$this->_sections['b']['rownum'] = $this->_sections['b']['iteration'];
$this->_sections['b']['index_prev'] = $this->_sections['b']['index'] - $this->_sections['b']['step'];
$this->_sections['b']['index_next'] = $this->_sections['b']['index'] + $this->_sections['b']['step'];
$this->_sections['b']['first']      = ($this->_sections['b']['iteration'] == 1);
$this->_sections['b']['last']       = ($this->_sections['b']['iteration'] == $this->_sections['b']['total']);
?>
			<tr id="normal_text">
				  <td height="25" width="96" align="center"><?php echo $this->_tpl_vars['build'][$this->_sections['b']['index']][3]; ?>
-<?php echo $this->_tpl_vars['build'][$this->_sections['b']['index']][4]; ?>
</td>
			  <td width="96" align="center"><?php echo $this->_tpl_vars['build'][$this->_sections['b']['index']][7]; ?>
-<?php echo $this->_tpl_vars['build'][$this->_sections['b']['index']][8]; ?>
</td>
			  <td width="128" align="center"><?php echo $this->_tpl_vars['build'][$this->_sections['b']['index']][15]; ?>
-<?php echo $this->_tpl_vars['build'][$this->_sections['b']['index']][16]; ?>
</td>
              <td width="88" align="center"><?php echo $this->_tpl_vars['build'][$this->_sections['b']['index']][9]; ?>
</td>
			  <td width="274" align="center"><?php echo $this->_tpl_vars['build'][$this->_sections['b']['index']][13]; ?>
</td>
			  <td width="96" align="center"><?php echo $this->_tpl_vars['build'][$this->_sections['b']['index']][14]; ?>
</td>
               <td width="96" align="center"><?php echo $this->_tpl_vars['build'][$this->_sections['b']['index']][18]; ?>
</td>
                <td width="88" align="center"><?php echo $this->_tpl_vars['build'][$this->_sections['b']['index']][6]; ?>
</td>
                
                <td width="96" align="center"><?php echo $this->_tpl_vars['build'][$this->_sections['b']['index']][12]; ?>
</td>
                
                   <td width="170" align="center"><?php echo $this->_tpl_vars['build'][$this->_sections['b']['index']][2]; ?>
</td>
         
		
			</tr>
			<?php endfor; endif; ?>

          
          <tr><td>&nbsp;</td></tr>
          
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

	<tr><th colspan="10" bgcolor="#0390B8" height="19">Copyright © 2014 Hay Al Rahba. All rights reserved.</th>
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