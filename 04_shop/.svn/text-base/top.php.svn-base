<?php
   session_start();
   include("conn/conn.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>电子商务平台网</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body>
<table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#F1B000">
    <td colspan="3" valign="bottom"><table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="224" height="83" background="images/banner.gif">&nbsp;</td>
        <td align="right" bgcolor="#F1B000"><table border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="12" align="right">&nbsp;&nbsp;</td>
            </tr>
            <tr>
              <td><a href=# onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.mrbccd.com');">设为首页</a> | <a href="javascript:window.external.addFavorite('http://www.mrbccd.com/','荣欣电子商城');">加入收藏 </a><a href="mailto:mrbccd**@mrbccd**.com">| 联系站长</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
<table height="20" border="0" align="center" cellpadding="0" cellspacing="0">
              <form name="form" method="post" action="findsp.php">
                <tr>
                  <td width="81" height="30" align="right">&nbsp;</td>
                  <td width="500" height="30" valign="middle"><div align="left">&nbsp;<span class="style4"><img src="images/biao.gif" width="15" height="21">&nbsp;请输入产品名称：</span>
                          <input type="text" name="name" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <input type="hidden" name="jdcz" value="jdcz">
                          <input name="submit" type="submit" class="buttoncss" value="立即查找">
                          <input name="button" type="button" class="buttoncss" onClick="javascript:window.location='highfind.php';" value="高级查找">
</div></td>
                </tr>
              </form>
</table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="568" height="32" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">本站首页</a>&nbsp;| <a href="shownew.php">最新商品</a> | <a href="showtuijian.php">推荐商品</a> | <a href="showhot.php">热门商品</a>&nbsp;|&nbsp;<a href="showfenlei.php">商品分类</a>&nbsp;|&nbsp;<a href="usercenter.php">用户中心</a>&nbsp;|&nbsp;<a href="finddd.php">订单查询</a>&nbsp;|&nbsp;<a href="gouwu1.php">我的购物车</a></td>
    <td width="121" align="center" bgcolor="#FFFFFF">
      <?php
	  if($_SESSION[username]!=""){
	    echo "当前用户:$_SESSION[username]";
	  }
	?>
    </td>
    <td width="77" bgcolor="#FFFFFF"> 
	<?php
	if($_SESSION[username]!=""){
	    echo "<a href='logout.php'>注销离开</a>";
	  }
	?>
    </td>
  </tr>
  <tr>
    <td height="111" colspan="3" background="images/guanggao.gif">&nbsp;</td>
  </tr>
</table>	
