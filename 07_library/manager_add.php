<html>
<head>
<title>添加管理员信息</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
</head>
<script language="javascript">
function check(form1){
	if(form1.name.value==""){
		alert("请输入管理员名称!");form1.name.focus();return false;
	}
	if(form1.pwd.value==""){
		alert("请输入管理员密码!");form1.pwd.focus();return false;
	}
	if(form1.pwd1.value==""){
		alert("请确认管理员密码!");form1.pwd1.focus();return false;
	}		
	if(form1.pwd.value!=form1.pwd1.value){
		alert("您两次输入的管理员密码不一致，请重新输入!");form1.pwd1.focus();return false;
	}
}
</script>
<body>
<table width="292" height="175" border="0" cellpadding="0" cellspacing="0" background="Images/subBG.jpg">
  <tr>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="3%" height="25">&nbsp;</td>
        <td width="94%">&nbsp;</td>
        <td width="3%">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><table width="100%" height="131"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" valign="top">	<form name="form1" method="post" action="manager_ok.php">
	<table height="123"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="97" height="30" align="center">管理员名称：</td>
        <td width="178">
          <input name="name" type="text">        </td>
      </tr>
      <tr>
        <td height="28" align="center">管理员密码：</td>
        <td><input name="pwd" type="password" id="pwd"></td>
      </tr>
      <tr>
        <td height="28" align="center">确认密码：</td>
        <td><input name="pwd1" type="password" id="pwd1"></td>
      </tr>
      <tr>
        <td height="37" align="center">&nbsp;</td>
        <td><input name="submit" type="submit" class="btn_grey" value="保存" onClick="check(form1)">
&nbsp;
<input name="submit2" type="button" class="btn_grey" value="关闭" onClick="window.close();"></td>
      </tr>
    </table>
	</form></td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
