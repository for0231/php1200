<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>BCTY365网上社区</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body background="#D9D8D8">
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<script language="javascript">
 function chkinput(form){
   if(form.username.value==""){
   
      alert("请输入管理员姓名!");
      form.username.focus();
      return(false); 
   }
    if(form.userpwd.value==""){
   
      alert("请输入管理员密码!");
      form.userpwd.focus();
      return(false); 
   }
   return(true);
 
 }
</script>
<table width="521" height="378" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/bg_16(1).jpg"><table width="440" height="280" border="0" align="center" cellpadding="0" cellspacing="0">
      <form name="form1" method="post" action="chkadmin.php" onSubmit="return chkinput(this)">
        <tr>
          <td height="80" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="226" rowspan="3">&nbsp;</td>
          <td width="214" height="40">&nbsp;用户名:
              <input type="text" name="username" size="18" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="40">&nbsp;密&nbsp;&nbsp;码:
              <input type="password" name="userpwd" size="18" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="40"><div align="center">
            <input type="image" name="imageField2" src="images/bg_16(3).jpg">
            &nbsp;&nbsp;
            <input type="image" name="imageField" src="images/bg_16(2).jpg">
          </div></td>
        </tr>
        <tr>
          <td height="80" colspan="2">&nbsp;</td>
        </tr>
      </form>
    </table></td>
  </tr>
</table>
</body>
</html>
