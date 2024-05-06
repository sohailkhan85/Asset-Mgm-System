<?php /* Smarty version 2.6.16, created on 2022-07-21 07:53:12
         compiled from pclicenses.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iTickets</title>
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
    <form name="srcfrm" id="srcfrm" method="post" action="pclicenses.php" onsubmit="validate()">
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
           <td width="100"><a href="exp_pclicenses.php.php"><img src="images/exp-licenses.gif" width="150" style="cursor:pointer" /></a></td>
  
           

           
          
           <td width="100" id="normal_text"><strong><font size=+1><?php echo $this->_tpl_vars['display_name']; ?>
</font></strong></td>
           
           
           </tr>
           		
             
            <tr>
                    	<td>&nbsp;</td>
                   	 	
                    	<td colspan="2">&nbsp;</td>
                        
                <td width="100">&nbsp;</td>
          		<td width="100">&nbsp;</td>
          	 	<td width="100">&nbsp;</td>
           		 <td width="100">&nbsp;</td>
           		<td width="100">&nbsp;</td>

                
              
  
                <td width="100"><a href="changepass.php" style="cursor:pointer"><input type="button" class="button" value="Change Password"/></a></td>
               
            </tr>
            </table>
            </td>

      </tr>
      
   <tr><td colspan="10">&nbsp;</td></tr>   
   
      <tr>
        <td width="75" id="normal_text"><?php if ($this->_tpl_vars['pclicenses'] || $this->_tpl_vars['search']): ?><strong>SEARCH</strong><?php endif; ?></td>
        <td width="100"><input name="src" type="text" size="50" value="<?php echo $this->_tpl_vars['search']; ?>
" /></td>
        <td width="100"><input type="submit" value="GO" style="cursor:pointer" class="button" /></td>
  		 <?php if ($this->_tpl_vars['pclicenses']): ?>
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
	   <tr><td colspan="10" class="red"><strong><font size="+2"> <?php if ($this->_tpl_vars['added']): ?>License Added Successfully.<?php elseif ($this->_tpl_vars['updated']): ?>License Updated Successfully.<?php endif; ?></font></strong></td></tr>
       <?php if ($this->_tpl_vars['no_result'] == 1 || $this->_tpl_vars['no_ticket'] == 1): ?>
       
        	<tr>
            <td colspan="10" class="red"><strong><font size="+1"> No Record Found.<?php if ($this->_tpl_vars['no_result']): ?><a href="pclicenses.php">ClICK HERE</a> to go back to main screen.<?php endif; ?></strong></font>
            </td>
           
            </tr>
       <?php endif; ?>
       

  <tr>
    <td colspan="10">
		<table cellpadding="0" cellspacing="0" border="1"  id="user_record"  align="center" width="1345" height="326" bgcolor="F1F4FE">
        
        <?php if ($this->_tpl_vars['pclicenses']): ?> 
		<tr bgcolor="#0390B8" height="40">
             
             <td width="65" align="center" bgcolor="#0390B8">User </td>
			<td width="65" align="center" bgcolor="#0390B8">Company</td>
			
			
            <td width="200" align="center">OS Name</td>
			<td width="200"align="center">OS Product Key</td>
            <td width="200" align="center">Office Name</td>
            <td width="200" align="center">Office Product Key</td>
            
            <td width="50" align="center">Action</td>
  

		  </tr>
		<?php endif; ?>	
        
       
        <form id="mainpage" name="mainpage" >
         	
			<?php unset($this->_sections['p']);
$this->_sections['p']['name'] = 'p';
$this->_sections['p']['loop'] = is_array($_loop=$this->_tpl_vars['pclicenses']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                
                <td  width="65" align="center"><?php echo $this->_tpl_vars['pclicenses'][$this->_sections['p']['index']][1]; ?>
</td>
                 <td  width="65" align="center"><?php echo $this->_tpl_vars['pclicenses'][$this->_sections['p']['index']][2]; ?>
</td>
			  	
			  	
		
			  	<td width="149" align="center"><?php echo $this->_tpl_vars['pclicenses'][$this->_sections['p']['index']][5]; ?>
</td>
              	
              	<td width="144" align="center"><?php echo $this->_tpl_vars['pclicenses'][$this->_sections['p']['index']][6]; ?>
</td>
             
           
               <td width="100" align="center"><?php echo $this->_tpl_vars['pclicenses'][$this->_sections['p']['index']][7]; ?>
</td>
                <td width="100" align="center"><?php echo $this->_tpl_vars['pclicenses'][$this->_sections['p']['index']][8]; ?>
</td>
                
               
              
               <td width="50" align="center">
				<a href="viewpc.php?assetid=<?php echo $this->_tpl_vars['pclicenses'][$this->_sections['p']['index']][0]; ?>
"><input type="button" name="button" class="button" value="VIEW" style="cursor:pointer" /></a>
               </td>
            
		  </form>
			</tr>
           
			 <?php endfor; endif; ?>  

         
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