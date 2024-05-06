<?php /* Smarty version 2.6.16, created on 2022-05-11 07:16:42
         compiled from newiticket.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>iTickets</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="datetime/jquery.datetimepicker.min.css" rel="stylesheet" type="text/css" />

<!--<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../common.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>-->
<!--<?php $this->assign('scriptpath', "JS/"); ?>-->

<script src="datetime/jquery.js"></script>
<script src="datetime/jquery.datetimepicker.full.js"></script>
 

<script type="text/javascript" src="<?php echo $this->_tpl_vars['scriptpath']; ?>
cal.js"></script>

<?php echo '
<script type="text/javascript">


function validate()
{
	
	//alert(document.iticket.reached.value);
	
	document.getElementById(\'company\').disabled= "";
	
	if(document.iticket.company.value=="")
	{
		alert("Please make sure that Company Name is not left blank.");
		document.iticket.company.focus();
		return false;
	}
	else if(document.iticket.callernameassetid.value=="")
	{
		alert("Please make sure that Caller Name is not left blank.");
		document.iticket.user.focus();
		return false;
	}
	
	else if(document.iticket.problem.value=="")
	{
		alert("Please make sure that Problem is not left blank.");
		document.iticket.problem.focus();
		return false;
	}
/*	else if(document.iticket.reached.value=="")
	{
		//alert ("Inside Reached ....");
		alert("Please make sure that Reached is not left blank.");
		document.iticket.reached.focus();
		return false;
	}
	
	else if(document.iticket.left.value=="")
	{
		alert("Please make sure that Left is not left blank.");
		document.iticket.left.focus();
		return false;
	}*/
	else
	{
		//alert("inside Submit");
		//document.getElementById(\'loginform\').submit();
		document.iticket.submit();
		return true;
	}

}


</script>
'; ?>


</head>
<body>
<table width="1345"  align="center" cellpadding="0" cellspacing="0"  bgcolor="F1F4FE" >
  <tr>
    <td height="75" colspan="2">
    <img src="images/header.gif" width="1345" height="125" />
    </td>
    </tr>

  <!--	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>-->
            <tr>
           		<td>
                	<table width="1345">
                    	<tr>
           
           <td><a href="mainpage.php"><img src="images/itickets.gif" width="150" style="cursor:pointer"/></a></td>
           <td><a href="newiticket.php"><img src="images/new-iticket.gif" width="150" style="cursor:pointer"/></a></td>
           <td><a href="pclicenses.php"><img src="images/pclicenses.gif" width="150" style="cursor:pointer" /></a></td>
           <td><a href="adduser.php"><img src="images/adduser.gif" width="150" style="cursor:pointer" /></a></td>
           <td><a href="viewusers.php"><img src="images/viewusers.gif" width="150" style="cursor:pointer" /></a></td>
           <td><a href="dashboard.php"><img src="images/dashboard.gif" width="150" style="cursor:pointer" /></a></td>
           <td width="100"><a href="export_iTicket.php"><img src="images/exp_iTickets.gif" width="150" style="cursor:pointer" /></a></td>
           <td width="100"><a href="exp_pclicenses.php.php"><img src="images/exp-licenses.gif" width="150" style="cursor:pointer" /></a></td>
<!--           <td width="100">&nbsp;</td>
            <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>-->
          
           <td width="100" id="normal_text"><strong><font size=+1><?php echo $this->_tpl_vars['display_name']; ?>
</font></strong></td>
          				 	
            </tr>
           <tr> 	   
                   <td width="100">&nbsp;</td>
          		<td width="100">&nbsp;</td>
          	 	<td width="100">&nbsp;</td>
           		 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
               
                 <!--<td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                	<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>-->
                <td width="75"><a href="changepass.php" style="cursor:pointer"><input type="button" class="button" value="Change Password"/></a></td>
            </tr>
            <tr>
            		<td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>
           		
<!--                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>-->
<!--                	<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                  <td width="100">&nbsp;</td>
                   <td width="100">&nbsp;</td>
-->                    <td width="100">
       					 <a href="index.php?val=o"><input type="button" value="SIGN OUT" name="out" id="out" class="button" style="cursor:pointer"/></a>
       				 </td>
            </tr>
            
            
             </table>
             </td>
           </tr>

    
    
  <tr>
 
    <td width="1250" bgcolor="F1F4FE"><form id="iticket" method="post" name="iticket" onsubmit="return validate()" action="newiticket.php" >
    <input type="hidden" name="itick_id" id="itick_id" value="<?php echo $this->_tpl_vars['itick_id']; ?>
" />
      <table width="800" height="487" border="0" cellpadding="0" cellspacing="0" align="center" class="tbl" >

        <tr>
          <td height="30" colspan="2" bgcolor="#0390B8" id="heading"><?php if ($this->_tpl_vars['itick_id']): ?>Update<?php else: ?>Add <?php endif; ?> iTicket</td>

          
        </tr>
        <tr>
        	<td colspan="2">
            <strong>Fields mark with red(<span class="red">*</span>) are mandatory fields.</strong>
            </td>
        </tr>
        <tr>
          <td width="251" height="43" id="normal_text">Company Name<span class="red">*</span></td>
          <td width="449">
          						<select name="company" id="company" onchange="document.getElementById('iticket').submit()" <?php if ($this->_tpl_vars['itick_id']): ?> disabled="disabled"<?php endif; ?> >
                                
                                <option value="" style="display:none;">Select Company</option>
                                
									<?php unset($this->_sections['c']);
$this->_sections['c']['name'] = 'c';
$this->_sections['c']['loop'] = is_array($_loop=$this->_tpl_vars['Company_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['c']['show'] = true;
$this->_sections['c']['max'] = $this->_sections['c']['loop'];
$this->_sections['c']['step'] = 1;
$this->_sections['c']['start'] = $this->_sections['c']['step'] > 0 ? 0 : $this->_sections['c']['loop']-1;
if ($this->_sections['c']['show']) {
    $this->_sections['c']['total'] = $this->_sections['c']['loop'];
    if ($this->_sections['c']['total'] == 0)
        $this->_sections['c']['show'] = false;
} else
    $this->_sections['c']['total'] = 0;
if ($this->_sections['c']['show']):

            for ($this->_sections['c']['index'] = $this->_sections['c']['start'], $this->_sections['c']['iteration'] = 1;
                 $this->_sections['c']['iteration'] <= $this->_sections['c']['total'];
                 $this->_sections['c']['index'] += $this->_sections['c']['step'], $this->_sections['c']['iteration']++):
$this->_sections['c']['rownum'] = $this->_sections['c']['iteration'];
$this->_sections['c']['index_prev'] = $this->_sections['c']['index'] - $this->_sections['c']['step'];
$this->_sections['c']['index_next'] = $this->_sections['c']['index'] + $this->_sections['c']['step'];
$this->_sections['c']['first']      = ($this->_sections['c']['iteration'] == 1);
$this->_sections['c']['last']       = ($this->_sections['c']['iteration'] == $this->_sections['c']['total']);
?>
										<!--<option value="<?php echo $this->_tpl_vars['Company_list'][$this->_sections['c']['index']][0]; ?>
"<?php if ($this->_tpl_vars['company'] == $this->_tpl_vars['Company_list'][$this->_sections['c']['index']][0]): ?> selected="selected"<?php endif; ?> >-->
                                       <option value="<?php echo $this->_tpl_vars['Company_list'][$this->_sections['c']['index']][0]; ?>
"<?php if ($this->_tpl_vars['company'] == $this->_tpl_vars['Company_list'][$this->_sections['c']['index']][0]): ?> selected="selected" <?php elseif ($this->_tpl_vars['Companyname'] == $this->_tpl_vars['Company_list'][$this->_sections['c']['index']][0]): ?> selected="selected" <?php endif; ?>>
											<?php echo $this->_tpl_vars['Company_list'][$this->_sections['c']['index']][0]; ?>

										</option>
									<?php endfor; endif; ?>
								</select>
          </td>
        </tr>
               <tr>
          <td width="251" height="43"  id="normal_text">Caller Name<span class="red">*</span></td>
          <td width="449">
      
          <select name="callernameassetid">
         <option value="" style="display:none;">Select Caller</option>
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
|<?php echo $this->_tpl_vars['users_list'][$this->_sections['u']['index']][1]; ?>
" <?php if ($this->_tpl_vars['assetid'] == $this->_tpl_vars['users_list'][$this->_sections['u']['index']][0]): ?> selected="selected" <?php endif; ?>>
                                       
							<?php echo $this->_tpl_vars['users_list'][$this->_sections['u']['index']][1]; ?>

					</option>
		<?php endfor; endif; ?>
          </select>
          </td>
        </tr>
        <tr>
          <td width="251" height="43"  id="normal_text">Problem Category<span class="red"> *</span></td>
          <td width="449">
          <select name="problem">
          <option value="" style="display:none;">Select Problem</option>
                    
          				<?php unset($this->_sections['p']);
$this->_sections['p']['name'] = 'p';
$this->_sections['p']['loop'] = is_array($_loop=$this->_tpl_vars['iTicket_Cat']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<option value="<?php echo $this->_tpl_vars['iTicket_Cat'][$this->_sections['p']['index']][1]; ?>
" <?php if ($this->_tpl_vars['iticket_cat'] == $this->_tpl_vars['iTicket_Cat'][$this->_sections['p']['index']][1]): ?> selected="selected" <?php endif; ?>>
                                       
								<?php echo $this->_tpl_vars['iTicket_Cat'][$this->_sections['p']['index']][1]; ?>

							</option>
						<?php endfor; endif; ?>
          </select>
          </select>
          </td>
        </tr>
         <tr>
          <td width="251" height="43"  id="normal_text">Reached/ Start</td>
          <td width="449"><input id="reach" name="reached" value="<?php echo $this->_tpl_vars['reached']; ?>
"  /><img src="images/icon_cal.png" /> </td>
        </tr>
         <tr>
          <td width="251" height="43"  id="normal_text">Left/ Finished</td>
          <td width="449"><input id="left" name="left" value="<?php echo $this->_tpl_vars['left']; ?>
" /><img src="images/icon_cal.png" /></td>
        </tr>
          <?php if ($this->_tpl_vars['display_name'] == 'Adnan'): ?>
          <tr>
          <td width="251" height="43"  id="normal_text">Assign To</td>
          <td width="449">
          <select name="assign_to">
          <option value="" style="display:none;">Select IT Person</option>
                    
          				<?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['it_emp']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
$this->_sections['a']['start'] = $this->_sections['a']['step'] > 0 ? 0 : $this->_sections['a']['loop']-1;
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = $this->_sections['a']['loop'];
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
							<option value="<?php echo $this->_tpl_vars['it_emp'][$this->_sections['a']['index']][0]; ?>
" <?php if ($this->_tpl_vars['it_emp'] == $this->_tpl_vars['it_emp'][$this->_sections['p']['index']][1]): ?> selected="selected" <?php endif; ?>>
                                       
								<?php echo $this->_tpl_vars['it_emp'][$this->_sections['a']['index']][1]; ?>

							</option>
						<?php endfor; endif; ?>
          </select>
          </select>
          </td>
          
        </tr>
        <?php endif; ?>
 
         <tr>
          <td width="251" height="43"  id="normal_text">Problem Detail</td>
          <td width="449"><textarea name="problem_detail" cols="50" rows="5"><?php echo $this->_tpl_vars['iticket_problem']; ?>
</textarea></td>
        </tr>
                 <tr>
          <td width="251" height="43"  id="normal_text">Solution</td>
          <td width="449"><textarea name="solution" cols="50" rows="5"><?php echo $this->_tpl_vars['solution']; ?>
</textarea></td>
        </tr>
        <tr>
          <td width="251" height="43"  id="normal_text">Status<span class="red">*</span></td>
          <td width="449">
          <input type="radio" name="status" id="status_p" value="p" <?php if ($this->_tpl_vars['status'] == 'p' || $this->_tpl_vars['itick_id'] == ''): ?>checked="checked" <?php endif; ?>/><span>Pending</span>
          <input type="radio" name="status" id="status_c" value="c" <?php if ($this->_tpl_vars['status'] == 'c'): ?> checked="checked" <?php endif; ?> /><span>Completed</span>
          </td>
        </tr>
        <tr>
        <td>&nbsp;</td>
          <td height="60"  align="left" width="50"><input type="submit" value=<?php if ($this->_tpl_vars['itick_id']): ?>"UPDATE"<?php else: ?>"ADD"<?php endif; ?>  style="cursor:pointer" /></td>
        </tr>
        <tr>
          <td colspan="2" height="80" align="center" class="red"><?php echo $this->_tpl_vars['display']; ?>
</td>
        </tr>
      </table>
    </form></td>
    <!--<td width="84">&nbsp;</td>-->
  </tr>

    <th colspan="3" bgcolor="#0390B8" height="25">Copyright © 2018 IT- DEPT/SSW GROUP. All rights reserved.</th>
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