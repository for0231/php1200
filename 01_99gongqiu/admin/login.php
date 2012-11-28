<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/style.css" rel="stylesheet">
<style type="text/css">
<!--
body {
	background-color: #E7ECF0;
}
-->
</style></head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<script language="javascript">
	  function chkinput(form){
	    if(form.name.value==""){
		  alert("请输入用户名!");
		  form.name.select();
		  return(false);
		}
		if(form.pwd.value==""){
		  alert("请输入用户密码!");
		  form.pwd.select();
		  return(false);
		}
		return(true);
	  }
	</script>
<form name="form1" method="post" action="chkadmin.php" onSubmit="return chkinput(this)">
  <table width="560" height="285" border="0" align="center" cellpadding="0" cellspacing="0" background="images/login.gif" id="__01">
	<tr>
		<td height="94">&nbsp;</td>
	</tr>
	<tr>
		<td height="160" align="center" valign="middle"><table width="83%" height="150"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="30" align="right">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="39%" height="30" align="right">管理员名称：&nbsp;</td>
            <td width="61%" align="left">&nbsp;<input name="name" type="text" id="name"></td>
          </tr>
          <tr>
            <td height="30" align="right">管理员密码：&nbsp;</td>
            <td align="left">&nbsp;<input name="pwd" type="text" id="pwd"></td>
          </tr>
          <tr align="center">
            <td height="60" colspan="2"><input name="imageField" type="image" src="images/btn1.gif" width="79" height="37" class="input1">
            &nbsp;&nbsp;&nbsp;
            <input name="imageField2" type="image" src="images/btn2.gif" width="79" height="37" onClick="form.reset();return false;" class="input1">            </td>
          </tr>
      </table></td>
	</tr>
	<tr>
		<td height="23"></td>
	</tr>
</table>
</form>
</body>
</html>