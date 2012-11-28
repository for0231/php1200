<?php session_start(); include_once("conn/conn.php");
if($username==true){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>企业快信</title>
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<style type="text/css">
<!--
body {
	background-color: #EBEBEB;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.STYLE1 {
	font-size: 12px;
	color: #575757;
}
.STYLE2 {
	color: #000000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<center>
<table width="780" height="90" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/bg_03.gif" width="780" height="90"></td>
  </tr>
</table>
<table width="780" height="34" border="0" cellpadding="0" cellspacing="0" background="images/bg_05.gif">
  <tr>
    <td width="237">&nbsp;</td>
    <td width="118"><span class="STYLE2"><?php echo $username;?></span></td>
    <td width="78" align="center"><a href="indexs.php?lmbs=连接短信" class="STYLE1">连接短信</a></td>
    <td width="75" align="center">
<a href="indexs.php?lmbs=连接邮件" class="STYLE1">连接邮件</a></td>
    <td width="77" align="center"><a href="#" class="STYLE1" onClick="MM_openBrWindow('update_pwd.php','','toolbar=yes,width=440,height=219')">修改密码</a></td>
    <td width="55" align="center"><a href="indexs.php?lmbs=帮助" class="STYLE1">帮 助</a></td>
    <td width="140" align="center"><a href="mail_short_note_logout.php" class="STYLE1">退出系统</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
</table>
<table width="780" border="0" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FCFEFD">
    <td height="8" align="center" valign="top" bgcolor="#FCFEFD">&nbsp;</td>
    <td width="9" rowspan="3" background="images/bg_08.gif" bgcolor="#FCFEFD">&nbsp;</td>
    <?php  if($lmbs=="连接短信" || $lmlb=="短信记录管理" || $lmlb=="常用短语管理" ||$lmbs==""){?>
    <td rowspan="4" align="center" valign="top" bgcolor="#D4EFFA">
      
        <?php include("select.php");?>  </td>
<?php }elseif($lmbs=="连接邮件" || $lmbs=="帮助"){?>
<td rowspan="4" align="center" valign="top" bgcolor="#D4EFFA"><?php include("help.php");?></td>
<?php }else{?>
<td rowspan="4" align="center" valign="top" bgcolor="#FCFEFD"><?php include("mail_select.php");?></td>
<?php }?>
  </tr>
  <tr>
    <td width="604" align="center" valign="top" bgcolor="#FCFEFD">
	
	<?php 
switch($lmbs){
     case "连接短信" :
	     include "short_note.php";

     break;
	 case "连接邮件": 	  
         include "mail.php";
     break;
	 case "登录": 	  
         include "lookmail.php";
     break;
case "发件箱": 	  
         include "sendmail.php";
     break;
case "收件箱": 	  
         include "lookmail.php";
     break;
case "查找邮件": 	  
         include "findmail.php";
     break;
case "查看邮件发送记录": 	  
         include "sendmail_select.php";
     break;
case "查看邮件": 	  
         include "lookmailinfo.php";
     break;

case "退出": 	  
         include "mail_logout.php";
     break;
 case "删除":
	     include "lookmail.php";
	  break;
case "查找":
	     include "findmail.php";
	  break;
case "帮助":
	     include "readme.php";
	  break;

	 case "":
	     include "short_note.php";
	  break;
}
?></td>
  </tr>
  <tr>
    <td height="15" align="center" valign="top" bgcolor="#FCFEFD"></td>
  </tr>
</table>
<table width="780" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/bg_22.gif" width="780" height="42"></td>
  </tr>
</table>
</center>
</body>
</html>
<?php }else{
echo "<script>alert('您没有正确登录！');window.location.href='index.php';</script>";
}
?>