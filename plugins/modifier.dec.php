<?php 
/* 
* Smarty plugin 
* ------------------------------------------------------------- 
* File:     modifier.enc.php 
* Type:     modifier 
* Name:     dec 
* Purpose:  decrypts a parameter
* ------------------------------------------------------------- 
*/ 
function smarty_modifier_dec($para) 
{ 
	//return $para;
	global $gbencobj;
	return $gbencobj->decrypt(GBENCKEY, $para);
    //return $crypttext;
} 
?> 