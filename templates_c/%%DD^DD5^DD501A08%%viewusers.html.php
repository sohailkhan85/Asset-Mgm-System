<?php /* Smarty version 2.6.16, created on 2022-07-24 07:43:27
         compiled from viewusers.html */ ?>
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
    <form name="srcfrm" id="srcfrm" method="post" action="viewusers.php" onsubmit="validate()">
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
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
            <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
           <td width="100">&nbsp;</td>
          
           <td width="100" id="normal_text"><strong><font size=+1><?php echo $this->_tpl_vars['display_name']; ?>
</font></strong></td>
           
           
           </tr>
           		
             
            <tr>
                    	<td>&nbsp;</td>
                   	 	<!--<td  id="normal_text"><strong>Pending</strong></td>-->
                    	<td colspan="2">&nbsp;</td>
                        
                    	<!--<td id="normal_text"><strong>Completed</strong></td>-->
                       
                <td width="100">&nbsp;</td>
          		<td width="100">&nbsp;</td>
          	 	<td width="100">&nbsp;</td>
           		 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="75"><a href="changepass.php"><input type="button" class="button" value="Change Password" style="cursor:pointer"/></a></td>
               
            </tr>
            </table>
            </td>

      </tr>
      
   <tr><td colspan="10">&nbsp;</td></tr>   
   
      <tr>
        <td width="75" id="normal_text"><?php if ($this->_tpl_vars['viewusers']): ?><strong>SEARCH</strong><?php endif; ?></td>
        <td width="100"><?php if ($this->_tpl_vars['viewusers'] || $this->_tpl_vars['search']): ?><input name="src" type="text" size="50" value="<?php echo $this->_tpl_vars['search']; ?>
" /><?php endif; ?></td>
        <td width="100"><?php if ($this->_tpl_vars['viewusers'] || $this->_tpl_vars['search']): ?><input type="submit" value="GO" style="cursor:pointer" class="button" /><?php endif; ?></td>
  		 <?php if ($this->_tpl_vars['viewusers']): ?>
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
                <td width="120">&nbsp;</td>
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
	   <tr><td colspan="10" class="red"><strong><font size="+2"> <?php if ($this->_tpl_vars['added']): ?>User Added Successfully.<?php elseif ($this->_tpl_vars['updated']): ?>User Updated Successfully.<?php endif; ?></font></strong></td></tr>
       <?php if ($this->_tpl_vars['no_result'] == 1 || $this->_tpl_vars['no_ticket'] == 1): ?>
       
        	<tr>
            <td colspan="10" class="red"><strong><font size="+1"> No Record Found.<?php if ($this->_tpl_vars['no_result']): ?><a href="viewusers.php">ClICK HERE</a> to go back to main screen.<?php endif; ?></strong></font>
            </td>
           
            </tr>
       <?php endif; ?>
       

  <tr>
    <td colspan="10">
		<table cellpadding="0" cellspacing="0" border="1"  id="user_record"  align="center" width="1345" height="326" bgcolor="F1F4FE">
        
        <?php if ($this->_tpl_vars['viewusers']): ?> 
		<tr bgcolor="#0390B8" height="40">
             <td width="96" align="center" bgcolor="#0390B8">User Name</td>
			<td width="109" align="center" bgcolor="#0390B8">Company Name </td>
			<td width="107" align="center">Email</td>
			<td width="135" align="center">Department</td>

            <td width="149" align="center">Action </td>
  

		  </tr>
		<?php endif; ?>	
        
       
        <form id="viewusers" name="viewusers" >
         	
			<?php unset($this->_sections['u']);
$this->_sections['u']['name'] = 'u';
$this->_sections['u']['loop'] = is_array($_loop=$this->_tpl_vars['viewusers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
           
            <tr id="normal_text">
                <td height="26" width="96" align="center"><?php echo $this->_tpl_vars['viewusers'][$this->_sections['u']['index']][1]; ?>
</td>
                <td height="26" width="109" align="center" ><?php echo $this->_tpl_vars['viewusers'][$this->_sections['u']['index']][2]; ?>
</td>
			  	<td width="107" align="center"><?php echo $this->_tpl_vars['viewusers'][$this->_sections['u']['index']][3]; ?>
</td>
			  	<td width="135" align="center"><?php echo $this->_tpl_vars['viewusers'][$this->_sections['u']['index']][4]; ?>
</td>

               <td width="149" align="center">
				<a href="addlicense.php?assetid=<?php echo $this->_tpl_vars['viewusers'][$this->_sections['u']['index']][0]; ?>
"><input type="button" name="button" class="button" value="ADD/UPDATE LICENSE" style="cursor:pointer" /></a><a href="adduser.php?assetid=<?php echo $this->_tpl_vars['viewusers'][$this->_sections['u']['index']][0]; ?>
"><input type="button" name="button" class="button" value="UPDATE USER" style="cursor:pointer" /></a>
                <!--<?php if ($this->_tpl_vars['display_name'] == 'Sohail'): ?><a href="delete_user.php"><input type="button" name="button" class="button" value="DELETE USER" style="cursor:pointer" /></a><?php endif; ?>-->
               </td>
               
            
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