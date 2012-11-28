<?php session_start(); include("conn/conn.php");
if($_SESSION[admin_user]==true){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>物流配送信息网</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body><center>
<table border="0" cellpadding="0" cellspacing="0">
  <tr><td><img src="images/index_01_02.gif" width="935" height="24" border="0" usemap="#Map"></td>
</tr></table>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="935" height="196">
  <param name="movie" value="images/wuliu.swf">
  <param name="quality" value="high">
  <embed src="images/wuliu.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="935" height="196"></embed>
</object>

<table width="935" height="428" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="224" height="428" align="center" valign="top" bgcolor="#F5F5F5"><table width="224" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="26" colspan="2" align="center"><img src="images/index_05_01.gif" width="222" height="28"></td>
        </tr>
      <tr>
        <td width="31" height="26" align="center">&nbsp;</td>
        <td width="193" align="center">&nbsp;</td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=车源信息查询">车源信息查询</a></td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=发货单">发货单</a></td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=回执发货单确认">回执发货单确认</a></td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=发货单查询">发货单查询</a></td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=客户信息管理">客户信息管理</a></td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=车源信息管理">车源信息管理</a></td>
      </tr>
      
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=修改密码">修改密码</a></td>
      </tr>
      <tr>
        <td height="28" align="center">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="28" align="center">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="28" colspan="2" align="center"><img src="images/index_05_03.gif" width="222" height="169"></td>
        </tr>
    </table></td>
    <td width="5"></td>
    <td width="706" height="428" align="right" valign="top" bgcolor="#FFFFFF"><table width="700" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="25" bgcolor="#E5E5E5">&nbsp;</td>
        </tr>
      <tr>
        <td height="25">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top" bgcolor="#FFFFFF"><?php 
	switch($lmbs){
	case "车源信息查询":
	include("car_select.php");
	break;
	case "发货单":
	include("insert_dd.php");
	break;
	case "回执发货单确认":
	include("select_dhd.php");
	break;
	case "发货单查询":
	include("hwys.php");
	break;
	case "客户信息管理":
	include("customer.php");
	break;
	case "车源信息管理":
	include("car.php");
	break;
	case "修改密码":
	include("update_pass.php");
	break;
	case "":
	include("car_select.php");
	break;
	}
	?></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="935" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/index_07.gif" width="935" height="50"></td>
  </tr>
</table>
</center>

<map name="Map">
<area shape="rect" coords="860,5,923,18" href="tc_dl.php">
<area shape="rect" coords="768,6,832,22" href="#"></map></body>
</html>
<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>