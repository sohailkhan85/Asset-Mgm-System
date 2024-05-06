<?php 
/* 
* Smarty plugin 
* ------------------------------------------------------------- 
* File:     modifier.catstatus.php 
* Type:     modifier 
* Name:     gbdate 
* Purpose:  applies formating to a date
* ------------------------------------------------------------- 
*/ 
function smarty_modifier_catstatus($status) 
{ 
	if(trim($status) == 'v')
		return 'Visible';
	else 
		return 'Not Visible';
	
} 
?> 