<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>影视365后台登录界面</title>
<link rel="stylesheet" href="css/style.css" />
<script src="js/admin_js.js" language="javascript"></script>
</head>
<body onload="document.a_login.manager.focus();" background="images/l_bg.jpg">
<center>
<table border="0" cellpadding="0" cellspacing="0">
<tr>
	<td colspan="2" height="100">&nbsp;</td>
</tr>
<tr>
	<td colspan="2" height="12" background="images/side.jpg">&nbsp;</td>
</tr>
<tr>
	<td valign="middle" align="center">
		<table border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
<form name="a_login" id="a_login" method="post" action="index_ok.php">
  <tr>
    <td width="344" height="186" rowspan="4" align="center" valign="middle" scope="col" background="images/left.jpg">&nbsp;</td>
    <td height="30" colspan="2" align="center" valign="middle" scope="col">&nbsp;</td>
    </tr>
  <tr>
    <td width="75" align="right" valign="middle"><strong>用户名：</strong></td>
    <td width="150" height="30" align="left" valign="middle">
	<input type="text" name="manager" id="manager" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/>	</td>
  </tr>
  <tr>
    <td width="75" height="30" align="right" valign="middle"><strong>密 码：</strong></td>
    <td width="150" height="30" align="left" valign="middle">
	<input type="password" name="pwd" id="pwd" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/>	</td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle"><input type="submit" name="lg" id="lg" value="" onclick="return l_chk();" />      <input type="button" name="rt" id="rt" value="" /></td>
    </tr>
</form>
</table>
	</td>
</tr>
<tr>
	<td colspan="2" height="12" background="images/side.jpg">&nbsp;</td>
</tr>
</table>

</center>
</body>
</html>
