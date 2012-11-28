<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>明日科技-编程者之家网站</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="870" align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
<?php
		
		if($_SESSION["unc"]==""){
		
		?>
<table align="center" width="870" height="30" border="0" cellpadding="0" cellspacing="0" background="images/bg_13(1).JPG">
<script language="JavaScript" type="text/javascript">
 function submitu(form){
   if(form.usernc.value==""){
     alert("请输入您的昵称");
	 form.usernc.select();
	 return(false);
	}
	if(form.userpwd.value==""){
     alert("请输入登录密码！");
	 form.userpwd.select();
	 return(false);
    }
	if(form.xym.value==""){
     alert("请输入验证码！");
	 form.xym.select();
	 return(false);
    }
   return(true);	 
 }
</script>
 <script language="JavaScript" type="text/javascript">
	function openfindpwd()
	{
	  window.open("openfindpwd.php","newframe","left=200,top=200,width=200,height=100,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");}
</script>
            <form action="dl.php" method="post" name="form1" id="form1" onSubmit="return submitu(this)">
  <tr>
    <td width="76" align="center"><span class="zhuce">用户名：</span></td>
    <td width="111"><input type="text" name="usernc" size="18" class="inputcss" /></td>
    <td width="56" align="center" class="zhuce">密码：</td>
    <td width="116"><input type="password" name="userpwd" size="18" class="inputcss" /></td>
    <td width="55" align="center" class="zhuce">验证码：</td>
    <td width="68"><input type="text" name="xym" size="10" class="inputcss" /></td>
    <td width="56" align="center"><img src="xym1.php"></td>
    <td width="66"><input type="image" name="imageField" src="images/bg_13(3).jpg"></td>
    <td width="119" align="center" class="zhuce2"><a href="register.php" class="a8">注册</a>|<a href="javascript:openfindpwd()" class="a8">找回密码</a></td>
    <td width="126" class="zhuce">今天是：<?php echo date("Y-m-d");?></td>
    <td width="21">&nbsp;</td>
  </tr>
</form>
</table>
<?php
		  }else{
		    $sqlu=mysql_query("select * from tb_user where usernc='".$_SESSION["unc"]."'",$conn);
			$infou=mysql_fetch_array($sqlu);
		  ?>
<table align="center" width="870" height="30" border="0" cellpadding="0" cellspacing="0" background="images/bg_13(1).JPG">

  <tr>
    <td width="274" align="center"><span class="zhuce">用户昵称：<?php echo $infou["usernc"];?></span></td>
    <td width="274" align="center"><a href="edituserinfo.php" class="a4">更改注册信息</a>&nbsp;</td>
    <td width="100"><a href="logout.php" class="a4">退出登录</a></td>
    <td width="206" class="zhuce">今天是：<?php echo date("Y-m-d");?></td>
    <td width="16">&nbsp;</td>
  </tr>
</table>
<?
}
?>
</td>
  </tr>
</table>
<table width="870" align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="images/bg_11(14).jpg" width="870" height="125"></td>
  </tr>
</table>
</body></html>