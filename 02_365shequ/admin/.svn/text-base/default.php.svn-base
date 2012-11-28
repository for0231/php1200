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

<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
<table width="830" align="center"><tr><td><img src="images/bg_16_2.jpg" width="830" height="139" border="0" usemap="#Map"></td>
</tr></table>
<table width="830" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="180" align="right" valign="top" bgcolor="#F0F0F0"><?php include_once("menu.php");?></td>
    <td width="630" valign="top">
<table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="33" colspan="3" background="images/bg_16_6.jpg">
<table width="625" height="30" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="130" rowspan="2">&nbsp;</td>
            <td width="495"></td>
          </tr>
          <tr>
            <td height="20"><?php echo $_GET['htgl'];?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="3"><img src="images/bg_16_8.jpg" width="629" height="35"></td>
        </tr>
      <tr>
        <td width="25" background="images/bg_16_12.jpg">&nbsp;</td>
        <td width="580" height="450" align="center" valign="top">
<?php include("wzdh.php");?>
</td>
        <td width="25" background="images/bg_16_14.jpg">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><img src="images/bg_16_28.jpg" width="629" height="42"></td>
        </tr>
    </table></td>
  </tr>
</table>
<table width="830" align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><img src="images/bg_16_29.jpg" width="828" height="35"></td>
  </tr>
</table>

<map name="Map"><area shape="rect" coords="732,114,808,136" href="logout.php">
</map></body>
</html>
