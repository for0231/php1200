<?php session_start(); include_once("conn/conn.php"); include_once("function.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>BCTY365网上社区</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="870" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="80" ><img src="images/bg_13(2).jpg" width="870" height="80" border="0" usemap="#Map"></td>
  </tr>
</table>
<?php include_once("zhuce_jm.php"); //获取注册和登录文件 ?>
<map name="Map"><area shape="rect" coords="189,38,224,56" href="index.php">
<area shape="rect" coords="254,38,319,59" href="jszc.php"><area shape="rect" coords="347,38,411,57" href="morebccd.php"><area shape="rect" coords="435,38,499,57" href="sjxz.php"><area shape="rect" coords="524,38,593,60" href="bbs_index.php"><area shape="rect" coords="616,38,679,58" href="gmxz.php"><area shape="rect" coords="706,38,768,57" href="rjxz.php"><area shape="rect" coords="794,39,858,58" href="jszc.php?jszc=联系方式"></map>
</body>
</html>