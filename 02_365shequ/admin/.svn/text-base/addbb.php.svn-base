<?php
session_start();
if($_SESSION["admin_nc"]=="")
 {
  echo "<script>alert('禁止非法登录!');window.location.href='../index.php';</script>";
  exit;
 }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>BCTY365网上社区—后台管理</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
  <script language="javascript">
	     function chkinput(form){
		   if(form.bbname.value==""){
		     alert("请输入版本名称！");
		     form.bbname.focus();
			 return(false);
		   }
		   
	       return(true);
		 
		 
		 }
	  
	  
	  </script>
<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
<table width="565" height="44" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
       <form name="form1" method="post" action="savebb.php" onSubmit="return chkinput(this)"> 
		<tr>
		  <td colspan="2" align="center" class="a5"><?php echo $htgl;?></td>
	     </tr>
		<tr>
          <td width="130" bgcolor="#FFFFFF"><div align="center">版本名称：</div></td>
          <td width="467" bgcolor="#FFFFFF">&nbsp;<input type="text" name="bbname" size="25" class="txt_grey"></td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="添加" class="btn_grey">&nbsp;&nbsp;<input type="reset" value="重写" class="btn_grey"></div></td>
        </tr>
		</form>
      </table>
</body>
</html>
