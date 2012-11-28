<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>物流配送信息网</title>
</head>
<script language="JavaScript" type="text/javascript">
 function submitu(form1){
   if(form1.admin_user.value==""){
     alert("请输入管理员名称！");
	 form1.admin_user.select();
	 return(false);
	}
	if(form1.admin_pass.value==""){
     alert("请输入管理员密码！");
	 form1.admin_pass.select();
	 return(false);
	}
	if(form1.admin_new_pass.value==""){
     alert("请输入新密码！");
	 form1.admin_new_pass.select();
	 return(false);
	}
	if(form1.admin_new_pass2.value==""){
     alert("请输入确认密码！");
	 form1.admin_new_pass2.select();
	 return(false);
	}
	if(form1.admin_new_pass.value!=form1.admin_new_pass2.value){
     alert("您输入的新密码和确认密码不符！");
	 form1.admin_new_pass2.select();
	 return(false);
	}
	if(form1.yzm.value==""){
     alert("请输入验证码！");
	 form1.yzm.select();
	 return(false);
    }
   return(true);	 
 }
</script>

<body>
   <form id="form1" name="form1" method="post" action="update_pass_ok.php" onSubmit="return submitu(this)">
<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  <tr>
    <td height="26" colspan="2" align="center" bgcolor="#FFFFFF">修改管理员密码</td>
    </tr>
  <tr>
    <td width="105" height="26" align="center" bgcolor="#FFFFFF">管理员</td>
    <td width="567" bgcolor="#FFFFFF"><input name="admin_user" type="text" id="admin_user" /></td>
  </tr>
  <tr>
    <td height="26" align="center" bgcolor="#FFFFFF">密码</td>
    <td bgcolor="#FFFFFF"><input name="admin_pass" type="password" id="admin_pass" /></td>
  </tr>
  <tr>
    <td height="26" align="center" bgcolor="#FFFFFF">新密码</td>
    <td bgcolor="#FFFFFF"><input name="admin_new_pass" type="password" id="admin_new_pass" /></td>
  </tr>
  <tr>
    <td height="26" align="center" bgcolor="#FFFFFF">确认密码</td>
    <td bgcolor="#FFFFFF"><input name="admin_new_pass2" type="password" id="admin_new_pass2" /></td>
  </tr>
  <tr>
    <td height="26" align="center" bgcolor="#FFFFFF">验证码</td>
    <td bgcolor="#FFFFFF"><input name="yzm" type="password" id="yzm" />
      <img src="xym1.php"></td>
  </tr>
  <tr>
    <td height="26" align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><input type="submit" name="Submit" value="提交" />    </td>
  </tr>
</table>

</form>
</body>
</html>
