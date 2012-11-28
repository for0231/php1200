<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>邮件接收系统</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(images/bg.gif);
}
-->
</style></head>
<script language="javascript">
  function chkinput(form){
    if(form.hostname.value==""){
	  alert("请输入服务器IP!");
	  form.hostname.select();
	  return(false);
	}
   if(form.username.value==""){
	  alert("请输入用户邮箱名称!");
	  form.username.select();
	  return(false);
	}
   if(form.userpwd.value==""){
	  alert("请输入用户邮箱密码!");
	  form.userpwd.select();
	  return(false);
	}
	return(true);
  }
</script>
<body>
<table width="99%" height="30" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="CCE6FE">
  <tr>
    <td bgcolor="#FFFFFF"><table width="99%" height="21" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="530" height="21" bgcolor="#F8F8F8">&nbsp;<img src="images/mail_1.gif" width="240" height="19"></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="580" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="361" height="271" border="0" align="center" cellpadding="0" cellspacing="0" background="images/mail_01.gif">
              <form action="mail_user.php" method="post" name="form1" id="form1" onSubmit="return chkinput(this)">
                <tr>
                  <td height="72">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="133" height="28"><div align="center"></div></td>
                  <td width="228"><div align="left">
                      <input name="hostname" type="text" class="inputcss" id="hostname" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="22" />
                  </div></td>
                </tr>
                <tr>
                  <td height="28">&nbsp;</td>
                  <td height="22"><div align="left">
                      <input name="username" type="text" class="inputcss" id="username" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="22" />
                  </div></td>
                </tr>
                <tr>
                  <td height="29">&nbsp;</td>
                  <td height="22"><div align="left">
                      <input name="userpwd" type="password" class="inputcss" id="userpwd" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="22" />
                  </div></td>
                </tr>
                
                <tr align="center">
                  <td height="114" colspan="2" valign="top"><div align="center">
                          &nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;
                          <input type="image" name="imageField" src="images/mail_01_3.jpg">
&nbsp;
<input type="image" name="imageField2" src="images/mail_01_5.jpg" onClick="form.reset();return false;">
                  </div></td>
                </tr>
              </form>
</table></td>
  </tr>
  <tr>
    <td height="15">&nbsp;</td>
  </tr>
</table>
</body>
</html>
