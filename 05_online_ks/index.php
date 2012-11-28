<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>在线考试系统</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style6 {color: #FFFFFF}
.STYLE7 {color: #FFFFFF; font-size: 12px; }
-->
</style></head>
<body>
<table width="1002" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="images/bg_1.jpg" width="1002" height="72" border="0" usemap="#Map"></td>
  </tr>
</table>
<table width="1002" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="images/bg_2.jpg" width="1002" height="142"></td>
  </tr>
</table>
<table width="1002" height="143" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="111" valign="top" bgcolor="#F0EFEB">&nbsp;</td>
    <td width="778" valign="top" bgcolor="#F0EFEB"><table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="26" background="images/bg_4.jpg"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="30%">&nbsp;</td>
            <td width="70%" height="26"><span class="STYLE7">当前位置：在线考试系统 &gt; <?php echo $online;?></span></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="350" align="center" valign="top" bgcolor="#FFFFFF"><?php 
switch($online){
	case "用户注册":
		include("zhuce.php");
	break;
	case "用户登录":
		include("denglu.php");
	break;
	case "修改密码":
		include("xgmm.php");
	break;
	case "成绩查询":
		include("cjcx.php");
	break;
	case "进入考场":
		include("ksgz.php");
	break;
	case "选择考题":
		include("jrkc.php");
	break;
	case "开始考试":
		include("ksks.php");
	break;

	case "":
		include("denglu.php");
	break;

}

?></td>
      </tr>
      <tr>
        <td><img src="images/bg_7.jpg" width="778" height="24"></td>
      </tr>
    </table></td>
    <td width="113" valign="top" bgcolor="#F0EFEB">&nbsp;</td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="356,30,419,52" href="index.php?online=用户注册">
<area shape="rect" coords="443,30,508,50" href="index.php?online=用户登录">
<area shape="rect" coords="529,31,599,52" href="index.php?online=修改密码">
<area shape="rect" coords="618,29,680,53" href="index.php?online=成绩查询">
<area shape="rect" coords="706,29,773,53" href="index.php?online=进入考场">
<area shape="rect" coords="795,29,853,52" href="tc_dl.php">
</map></body>
</html>
