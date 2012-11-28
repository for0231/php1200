<?php session_start();
include("conn/conn.php");
if($_SESSION[online_number]!=""){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
	color: #999999;
}
-->
</style></head>
<body>
<p>&nbsp;</p>
<table width="592" height="203" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#676767">

 <tr>
    <td align="right" bgcolor="#FFFFFF"><table width="98%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td scope="col">&nbsp;&nbsp;&nbsp;<span  >网络在线考试系统不允许对网页进行刷新、后退等操作，否则后果自负。如果在规定的考试</span></p>
      <p  >时间内没有交卷，系统将自动提交试卷。每位考生同一个课程只能考一次；系统会及时通知考</p>
      <p  >试的具体时间；请考生关注考试课程以及考试时间！</p>
      <p  ><br>
&nbsp;&nbsp;&nbsp;&nbsp;只有同意以上规则才可以进行考试。如果出现问题或者未找到相关的考试课程，请与管理</p>
    <p  >员联系。</td>
      </tr>
    </table></td>
  </tr>
</table>
<p align="center">
   <input type="submit" name="Submit" onClick="window.location.href='index.php?online=选择考题'" value="我同意">
  &nbsp;&nbsp;
  <input type="submit" name="Submit2" onClick="window.location.href='index.php?online=用户登录'"value="不同意">
</p>
</body>
</html>
<?php
}else{
echo "<script> alert('请您正确登录!'); window.location.href='index.php?online=用户登录';</script>";
}
?>