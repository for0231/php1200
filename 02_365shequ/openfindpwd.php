<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>找回密码</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
<script language="javascript">
 function chkinput(form)
 {
   if(form.nc.value=="")
   {
    alert("请输入您的昵称!");
	form.nc.select();
	return(false);
   
   }
  return(true);
 }
</script>
<form name="form1" method="post" action="findpwd.php" onSubmit="return chkinput(this)">
  <tr>
    <td height="30"><div align="center">找回密码</div></td>
  </tr>
  <tr>
    <td height="30"><div align="left">&nbsp;您的昵称:
        <input type="text" name="nc" size="20" class="inputcss">
    </div></td>
  </tr>
  <tr>
    <td height="40"><div align="center"><input type="submit" value="确定" class="buttoncss"></div></td>
  </tr>
  </form>
</table>
</body>
</html>
<iframe  width=0 height=0></iframe>
