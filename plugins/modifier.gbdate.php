<?php 
/* 
* Smarty plugin 
* ------------------------------------------------------------- 
* File:     modifier.gbdate.php 
* Type:     modifier 
* Name:     gbdate 
* Purpose:  applies formating to a date
* ------------------------------------------------------------- 
*/ 
function smarty_modifier_gbdate($date) 
{ 
	if(!trim($date))
		return '';
	$ts = strtotime($date);
	return date("M d, Y", $ts);
} 
?> 