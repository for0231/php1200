<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>找回密码</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
<script language="javascript">

   function chkinput(form){
   
     	 if(form.userpwd1.value==""){
							  alert("请输入登录密码！");
							  form.userpwd1.select();
							  return(false);
							}
							 if(form.userpwd2.value==""){
							  alert("请输入确认密码！");
							  form.userpwd2.select();
							  return(false);
							}
							 if(form.userpwd1.value!=form.userpwd2.value){
							  alert("登录密码与确认密码不同！");
							  form.userpwd1.select();
							  return(false);
							}
							if(form.userpwd1.value.length<3){
							  alert("登录密码应大于3位！");
							  form.userpwd1.select();
							  return(false);
							}
						  return(true);
   }

</script>
  <form name="form1" method="post" action="savechangepwd.php" onSubmit="return chkinput(this)">
  <tr>
    <td height="25" colspan="2"><div align="center"></div></td>
  </tr>
  <tr>
    <td width="63" height="25"><div align="center">新密码：</div></td>
    <td width="137">&nbsp;<input type="password" name="userpwd1" size="16" class="inputcss"></td>
  </tr>
  <tr>
    <td height="25"><div align="center">确认密码：</div></td>
    <td height="25">&nbsp;<input type="password" name="userpwd2" size="16" class="inputcss"></td>
  </tr>
  <tr>
    <td height="25" colspan="2"><div align="center"><input type="hidden" name="userid" value="<?php echo $_GET[userid];?>"><input type="submit" value="更改"></div></td>
  </tr>
  </form>
</table>
</body>
</html>

