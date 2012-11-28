<?php session_start();include_once("conn/conn.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {font-size: 12px}
-->
</style></head>

<body>
<form name="form1" method="post" action="update_pwd_ok.php">
<table width="440" align="center" height="185" border="0" cellpadding="0" cellspacing="0" background="images/bg_35.gif">
  <tr>
    <td width="96" height="60">&nbsp;</td>
    <td width="208">&nbsp;</td>
    <td width="92">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td><span class="STYLE1"><?php echo $username;?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="45">&nbsp;</td>
    <td valign="middle"><input name="pwd" type="password" id="pwd" class="inputcss"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td><input name="password" type="password" id="password" class="inputcss"></td>
    <td><input type="submit" name="Submit" value="提交"></td>
  </tr>
  <tr>
    <td height="64">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</form>
<p>&nbsp;</p>
</body>
</html>
