<?php /* Smarty version 2.6.16, created on 2022-07-24 07:43:22
         compiled from mainpage.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'mainpage.html', 188, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iTickets</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<?php echo '
<script type="text/javascript">
function validate()
{
	if(document.srcfrm.src.value=="")
	{
		alert("Please make sure that Search Field is not empty.");
		document.srcfrm.src.focus();
		return false;

	}
	else
	{
		//alert("inside Submit");
		document.srcfrm.submit();
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
<table width="1345" height="551"  align="center" cellpadding="0" cellspacing="0" class="tbl" bgcolor="F1F4FE">
 <tr>
    <td height="75" colspan="10">
		<img src="images/header.gif" width="1345" height="125" />
        </td>
	</tr>

  <tr>
   	<td height="455">
    <form name="srcfrm" id="srcfrm" method="post" action="mainpage.php" onsubmit="validate()">
	<table width="1345"  border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#F1F4FE">

      
      <tr>
            <td colspan="10">
            <table>
           <tr>
           <td><a href="mainpage.php"><img src="images/itickets.gif" width="150" style="cursor:pointer"/></a></td>
           <td><a href="newiticket.php"><img src="images/new-iticket.gif" width="150" style="cursor:pointer"/></a></td>
           <td><a href="pclicenses.php"><img src="images/pclicenses.gif" width="150" style="cursor:pointer" /></a></td>
           <td><a href="adduser.php"><img src="images/adduser.gif" width="150" style="cursor:pointer" /></a></td>
           <td><a href="viewusers.php"><img src="images/viewusers.gif" width="150" style="cursor:pointer" /></a></td>
           <td><a href="dashboard.php"><img src="images/dashboard.gif" width="150" style="cursor:pointer" /></a></td>
           <td width="100"><a href="export_iTicket.php"><img src="images/exp_iTickets.gif" width="150" style="cursor:pointer" /></a></td>
           <td width="100"><a href="exp_pclicenses.php"><img src="images/exp-licenses.gif" width="150" style="cursor:pointer" /></a></td>
<!--           <td width="100">&nbsp;</td>
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
                    	<td> <input type="radio" name="rad" id="itic" value="p" <?php if ($this->_tpl_vars['status'] == 'p'): ?>checked="checked"<?php endif; ?> onclick="document.getElementById('srcfrm').submit();" /><strong>Pending</strong></td>
                   	 	<!--<td  id="normal_text"><strong>Pending</strong></td>-->
                    	<td colspan="2"><input type="radio" name="rad" id="pc" value="c" <?php if ($this->_tpl_vars['status'] == 'c'): ?> checked="checked" <?php endif; ?> onclick="document.getElementById('srcfrm').submit();"/><strong>Completed</strong></td>
                        
                    	<!--<td id="normal_text"><strong>Completed</strong></td>-->
                       
                <td width="100">&nbsp;</td>
          		<td width="100">&nbsp;</td>
          	 	<td width="100">&nbsp;</td>
           		 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
<!--                 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>-->
                <td width="75"><a href="changepass.php"><input type="button" class="button" value="Change Password" style="cursor:pointer"/></a></td>
               
            </tr>
            </table>
            </td>

      </tr>
      
   <tr>
   <td colspan="10">&nbsp;</td>
   </tr>   
   
      <tr>
        <td width="75" id="normal_text"><?php if ($this->_tpl_vars['iTicket'] || $this->_tpl_vars['search']): ?><strong>SEARCH</strong><?php endif; ?></td>
        <td width="100"><?php if ($this->_tpl_vars['iTicket'] || $this->_tpl_vars['search']): ?><input name="src" type="text" size="50" value="<?php echo $this->_tpl_vars['search']; ?>
" /><?php endif; ?></td>
        <td width="100"><?php if ($this->_tpl_vars['iTicket'] || $this->_tpl_vars['search']): ?><input type="submit" value="GO" style="cursor:pointer" class="button" /><?php endif; ?></td>
  		 <?php if ($this->_tpl_vars['iTicket']): ?>
         <td width="150" id="normal_text">
         <strong>Total Records = <?php if ($this->_tpl_vars['total_records']):  echo $this->_tpl_vars['total_records'];  endif; ?>
         </strong>
         </td>			         
         <?php endif; ?>
                <?php if ($this->_tpl_vars['no_ticket'] || $this->_tpl_vars['no_result']): ?>
                <td width="200">&nbsp;</td>
           		<td width="230">&nbsp;</td>
                
              
                <?php endif; ?>
                
                <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="120">&nbsp;</td>
                <td width="105">&nbsp;</td>
                
        <td width="100" colspan="5">
        <a href="index.php?val=o" style="cursor:pointer"><input type="button" value="SIGN OUT" name="out" id="out" class="button" style="cursor:pointer"/></a>
        </td>

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
	   <tr><td colspan="10" class="red"><strong><font size="+2"> <?php if ($this->_tpl_vars['added']): ?>Ticket Added Successfully.<?php elseif ($this->_tpl_vars['updated']): ?>Ticket Updated Successfully.<?php elseif ($this->_tpl_vars['assigned']): ?>Ticket Assigned Successfully.<?php elseif ($this->_tpl_vars['deleted']): ?>Ticket Deleted Successfully.<?php endif;  if ($this->_tpl_vars['unread']): ?>IT Manager has assigned new iTicket to you.<?php endif; ?></font></strong></td></tr>
       <?php if ($this->_tpl_vars['no_result'] == 1 || $this->_tpl_vars['no_ticket'] == 1): ?>
       
        	<tr>
            <td colspan="10" class="red"><strong><font size="+1"> No Record Found.<?php if ($this->_tpl_vars['no_result']): ?><a href="mainpage.php">ClICK HERE</a> to go back to main screen.</strong></font><?php endif; ?>
            </td>
           
            </tr>
       <?php endif; ?>
       

  <tr>
    <td colspan="10">
		<table cellpadding="0" cellspacing="0" border="1"  id="user_record"  align="center" width="1345" height="326" bgcolor="F1F4FE">
        
        <?php if ($this->_tpl_vars['iTicket']): ?> 
		<tr bgcolor="#0390B8" height="40">
             <td width="50" align="center" bgcolor="#0390B8">Serial No </td>
			<td width="109" align="center" bgcolor="#0390B8">Caller Name </td>
			<td width="107" align="center">Company Name</td>
			<td width="135" align="center">iTicket Catergory</td>
            <td width="149" align="center">iTicket Problem</td>
         	 <!--<td width="146" align="center">Solution</td>-->
            <td width="144" align="center">Reached/ Start </td>
            <td width="144" align="center">Left/ Finish</td>
		
			<td width="100"align="center">Status</td>
           <?php if ($this->_tpl_vars['display_name'] == 'Administrator'): ?> <td width="100"align="center">Done By</td><?php endif; ?>
           <?php if ($this->_tpl_vars['display_name'] != 'Administrator'): ?> <td width="100" align="center">Action </td><?php endif; ?>
  

		  </tr>
		<?php endif; ?>	
        
       
        <form id="mainpage" name="mainpage" >
         	<?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

			<?php unset($this->_sections['t']);
$this->_sections['t']['name'] = 't';
$this->_sections['t']['loop'] = is_array($_loop=$this->_tpl_vars['iTicket']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['t']['show'] = true;
$this->_sections['t']['max'] = $this->_sections['t']['loop'];
$this->_sections['t']['step'] = 1;
$this->_sections['t']['start'] = $this->_sections['t']['step'] > 0 ? 0 : $this->_sections['t']['loop']-1;
if ($this->_sections['t']['show']) {
    $this->_sections['t']['total'] = $this->_sections['t']['loop'];
    if ($this->_sections['t']['total'] == 0)
        $this->_sections['t']['show'] = false;
} else
    $this->_sections['t']['total'] = 0;
if ($this->_sections['t']['show']):

            for ($this->_sections['t']['index'] = $this->_sections['t']['start'], $this->_sections['t']['iteration'] = 1;
                 $this->_sections['t']['iteration'] <= $this->_sections['t']['total'];
                 $this->_sections['t']['index'] += $this->_sections['t']['step'], $this->_sections['t']['iteration']++):
$this->_sections['t']['rownum'] = $this->_sections['t']['iteration'];
$this->_sections['t']['index_prev'] = $this->_sections['t']['index'] - $this->_sections['t']['step'];
$this->_sections['t']['index_next'] = $this->_sections['t']['index'] + $this->_sections['t']['step'];
$this->_sections['t']['first']      = ($this->_sections['t']['iteration'] == 1);
$this->_sections['t']['last']       = ($this->_sections['t']['iteration'] == $this->_sections['t']['total']);
?>
           

            <tr id="normal_text">
        
                <td height="26" width="50" align="center"><?php echo smarty_function_counter(array(), $this);?>
</td>
                <td height="26" width="109" align="center" ><a href="viewpc.php?assetid=<?php echo $this->_tpl_vars['iTicket'][$this->_sections['t']['index']][9]; ?>
"><?php echo $this->_tpl_vars['iTicket'][$this->_sections['t']['index']][1]; ?>
</a></td>
			  	<td width="107" align="center"><?php echo $this->_tpl_vars['iTicket'][$this->_sections['t']['index']][2]; ?>
</td>
			  	<td width="135" align="center"><?php echo $this->_tpl_vars['iTicket'][$this->_sections['t']['index']][3]; ?>
</td>
		
			  	<td width="149" align="center"><?php echo $this->_tpl_vars['iTicket'][$this->_sections['t']['index']][4]; ?>
</td>
              	<!--<td width="146" align="center"><?php if ($this->_tpl_vars['iTicket'][$this->_sections['t']['index']][7] == 'p'): ?>Job is Pending<?php else:  echo $this->_tpl_vars['iTicket'][$this->_sections['t']['index']][5];  endif; ?></td>-->
              	<td width="144" align="center"><?php echo $this->_tpl_vars['iTicket'][$this->_sections['t']['index']][6]; ?>
</td>
                <!--<td width="144" align="center"><?php if ($this->_tpl_vars['iTicket'][$this->_sections['t']['index']][7] == 'p'): ?>Pending<?php else:  echo $this->_tpl_vars['iTicket'][$this->_sections['t']['index']][10];  endif; ?></td>-->
                <td width="144" align="center"><?php echo $this->_tpl_vars['iTicket'][$this->_sections['t']['index']][10]; ?>
</td>
             
           
               <td width="100" align="center"><?php if ($this->_tpl_vars['iTicket'][$this->_sections['t']['index']][7] == 'p'): ?> Pending<?php elseif ($this->_tpl_vars['iTicket'][$this->_sections['t']['index']][7] == 'c'): ?>Completed<?php endif; ?></td>
               
               <?php if ($this->_tpl_vars['display_name'] == 'Administrator'): ?><td width="144" align="center"><?php echo $this->_tpl_vars['iTicket'][$this->_sections['t']['index']][12]; ?>
</td><?php endif; ?>
               
              
               <?php if ($this->_tpl_vars['display_name'] != 'Administrator'): ?><td width="140" align="center">
				<a href="newiticket.php?itick_id=<?php echo $this->_tpl_vars['iTicket'][$this->_sections['t']['index']][0]; ?>
&company=<?php echo $this->_tpl_vars['iTicket'][$this->_sections['t']['index']][2]; ?>
&assetid=<?php echo $this->_tpl_vars['iTicket'][$this->_sections['t']['index']][9]; ?>
"><input type="button" name="button" class="button" value="VIEW/UPDATE" style="cursor:pointer" /></a>
                <a onClick="return confirm('Are you sure to Delete Ticket ?')" href="delete.php?itick_id=<?php echo $this->_tpl_vars['iTicket'][$this->_sections['t']['index']][0]; ?>
"><input type="button" name="button" class="button" value="DELETE" style="cursor:pointer" /></a>
               </td><?php endif; ?>
            
		  </form>
			</tr>
           
			 <?php endfor; endif; ?>  

          <!--<tr><td>&nbsp;</td></tr>-->
          
		  <tr id="paging_text">
			<td colspan="10" align="center"><?php echo $this->_tpl_vars['page_numbering']; ?>
</td>
		  </tr>
		 <?php if (! $this->_tpl_vars['iTicket']): ?>
          <tr>
			<td colspan="10" align="center"></td>
		  </tr>
		  <tr>
			<td colspan="10" align="center">&nbsp;</td>
		  </tr>
         <?php endif; ?>
        
    </table>
	</td>
  </tr>
  
 

	<tr><th colspan="10" bgcolor="#0390B8" height="19">Copyright © 2018 IT- DEPT/SSW GROUP. All rights reserved.</th>
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