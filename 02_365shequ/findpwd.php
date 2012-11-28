<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>找回密码</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
 include("conn/conn.php");
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
 <script language="javascript">
   function chkinput(form)
   {
     if(form.da.value=="")
	 {
	  alert('请输入密码提示答案!');
	  form.da.select();
	  return(false);
	 }
	  return(true);
   }
 </script>
  <form name="form1" method="post" action="showpwd.php" onSubmit="return chkinput(this)">
  <tr>
    <td height="25" colspan="2"><div align="center">找回密码</div></td>
  </tr>
  <tr>
    <td width="60" height="25"><div align="center">密码提示：</div></td>
    <td width="140"><div align="left">
	<?php
	  $nc=$_POST[nc];
	  $sql=mysql_query("select * from tb_user where usernc='".$nc."'",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info==false)
	   {
	     echo "<script>alert('无此用户!');history.back();</script>";
		 exit;
	   }
	   else
	   {
	     echo $info[question];
	   }
	   
	?>
	</div></td>
  </tr>
  <tr>
    <td height="25"><div align="center">提示答案：</div></td>
    <td height="25"><div align="left"><input type="text" name="da" class="inputcss" size="20">
	  <input type="hidden" name="nc" value="<?php echo $nc;?>">
	</div></td>
  </tr>
  <tr>
    <td height="25" colspan="2"><div align="center"><input type="submit" value="确定" class="buttoncss"></div></td>
  </tr>
  </form>
</table>
</body>
</html>
