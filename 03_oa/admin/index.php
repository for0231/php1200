<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>管理员登录</title>
<script language="javascript" src="js/admin_js.js"></script>
<link href="css/style.css" rel="stylesheet" />
</head>
<body onload="login.username.focus();">
<center>
<table width="100%" height="620" border="0" cellpadding="0" cellspacing="0" background="images/login_bg.jpg">
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td></td>
	<td align="center" valign="middle" width="544" height="293">
	<form id="login" name="login" method="post" action="index_ok.php">
	<table width="544" height="293" border="0" cellpadding="0" cellspacing="0" background="images/login_center.jpg">
      <tr>
        <td colspan="4" height="211">&nbsp;</td>
      </tr>
      <tr>
        <td width="140" height="82" align="center" valign="middle"></td>
        <td width="147" align="center" valign="middle">
		<span id="txt">用户名：</span><input type="text" name="username" id="username" size="8" />
		</td>
        <td width="147" align="center" valign="middle">
		<span id="txt">密码：</span><input type="password" name="pwd" id="pwd" size="10" />
		</td>
        <td width="110" align="center" valign="middle">
		<input type="hidden" name="action" value="login" />
		<input type="submit" name="login" id="login" value="" onclick="return check();"/> 
		</td>
      </tr>
    </table>	
	</form>
	</td>
	<td></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
</table>
</center>
</body>
</html>
