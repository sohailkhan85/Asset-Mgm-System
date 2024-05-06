<?php 
/* 
* Smarty plugin 
* ------------------------------------------------------------- 
* File:     modifier.enc.php 
* Type:     modifier 
* Name:     enc 
* Purpose:  applies encryption to a parameter
* ------------------------------------------------------------- 
*/ 
function smarty_modifier_enc($para) 
{ 
	//return $para;
	global $gbencobj;
	return $gbencobj->encrypt(GBENCKEY, $para, strlen($para));
    //return $crypttext;
} 
?> 