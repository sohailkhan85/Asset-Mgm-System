<?php
/*//error handler function
function customError($errno, $errstr)
  {
  echo "<b>Error:</b> [$errno] $errstr";
  }

//set error handler
set_error_handler("customError");

//trigger error
trigger_error("Error", E_USER_ERROR );*/
error_reporting(E_USER_ERROR);
ini_set('display_errors','On');
?>
