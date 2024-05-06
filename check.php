<?php
/*if(!isset($_SERVER['HTTP_REFERER']))
{     
	echo "Unuthorized Access to this Website.";
	exit;
}*/

@session_start();

if(!isset($_SESSION['userid']))
{

	echo "'<strong>'Unuthorized Access to this Website'</strong>' ";
	exit;
}

?>