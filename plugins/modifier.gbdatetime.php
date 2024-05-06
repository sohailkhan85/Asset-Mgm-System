<?php 
/* 
* Smarty plugin 
* ------------------------------------------------------------- 
* File:     modifier.gbdatetime.php 
* Type:     modifier 
* Name:     gbdatetime 
* Purpose:  applies formating to a date
* ------------------------------------------------------------- 
*/ 
function smarty_modifier_gbdatetime($date) 
{ 
	if(!trim($date))
		return '';
	$ts = strtotime($date);
	return date("M d Y H:i:s", $ts);
} 
?> 