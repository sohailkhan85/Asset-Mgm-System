<?php /* Smarty version 2.6.16, created on 2022-07-24 07:43:15
         compiled from loginpage.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>iTickets</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<?php echo '
<script type="text/javascript">
function validate()
{
	if(document.loginform.uname.value=="")
	{
		alert("Please make sure that User name is not left blank.");
		document.loginform.uname.focus();
		return false;
	}
	else if(document.loginform.password.value=="")
	{
		alert("Please make sure that Password is not left blank.");
		document.loginform.password.focus();
		return false;
	}
	
	else
	{
		//alert("inside Submit");
		//document.getElementById(\'loginform\').submit();
		document.loginform.submit();
		return true;
	}

}

window.onload = function() 
{
  document.getElementById("uname").focus();
};
</script>
'; ?>


</head>
<body>
<table width="1250"  align="center" cellpadding="0" cellspacing="0" class="tbl">
  <tr>
    <td height="75" colspan="3">
    <img src="images/header.gif" width="1250" height="125" />
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <!--	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>-->
  <tr>
    <td width="100" height="289">&nbsp;</td>
    <td width="500"><form id="loginform" method="post" name="loginform" onsubmit="return validate()" action="loginaction.php" >
      <table width="500" height="236" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#F1F4FE" class="logintbl">
        <tr>
          <td height="30" colspan="2" bgcolor="#0390B8" id="heading">Login</td>
        </tr>
        <tr>
          <td width="101" height="43"><div align="right">Username</div></td>
          <td width="195"><input type="text" name="uname" id="uname" class="textbox" /></td>
        </tr>
        <tr>
          <td><div align="right">Password</div></td>
          <td><input type="password" name="password" class="textbox" /></td>
        </tr>
        <tr>
          <td colspan="2" height="60" align="center"><input type="submit" value="SIGN IN" class="button" style="cursor:pointer" /></td>
        </tr>
        <tr>
          <td colspan="2" height="80" align="center" class="red"><strong><?php echo $this->_tpl_vars['display']; ?>
</strong></td>
        </tr>
      </table>
    </form></td>
    <td width="84">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <!--<tr><td>&nbsp;</td></tr>-->
  <tr>
    <td height="55">&nbsp;</td>
  </tr>
  <tr>
    <th colspan="3" bgcolor="#0390B8" height="25">Copyright � 2018 IT- DEPT/SSW GROUP. All rights reserved.</th>
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