
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>添加商品类别</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
 function chkinput(form)
 {
   if(form.leibie.value=="")
    {
	  alert('请输入新增商品类别名!');
	  form.leibie.select();
	  return(false);
	}
   return(true);
 }

</script>
<body leftmargin="0" bottommargin="0" topmargin="0">
<br>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
 <form name="form1" method="post" action="saveaddleibie.php" onSubmit="return chkinput(this);">
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">添加商品类别</div></td>
  </tr>
  <tr>
    <td height="25" bgcolor="#666666"><table width="400" height="25" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td width="90" bgcolor="#FFFFFF"><div align="center">类别名称：</div></td>
          <td width="307" bgcolor="#FFFFFF"><div align="left">
              &nbsp;
              <input type="text" name="leibie" class="inputcss" size="40">
          </div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="25"><div align="center">
        <input name="submit" type="submit" class="buttoncss" id="submit" value="添加">
    </div></td>
  </tr>
  </form>
</table>
</body>
</html>
