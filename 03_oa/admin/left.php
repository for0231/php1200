<?php
	session_start();
	include "inc/chec.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link href="css/style.css" rel="stylesheet" />
</head>
<script src="js/admin_js.js" language="javascript"></script>
<script language=JavaScript>document.onclick = clickList;</script>
<body>
<table width="216" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td height="533" background="images/left.jpg" align="center" valign="top">
<div id=div0 style="width:216; position:relative">
  <label id=div0 class=active style="cursor: hand; background:url(images/left_main.jpg); width:216; height:31; text-align:center; color:#f0f0f0; padding-top:12px">部门管理</span></label>
</div>  
  <div id=div0other style="display:None; width:216">
  <label style="background:url(images/left_part.jpg); width:216; height:24; padding-top:8px"><a href="bmgl/show_depart.php" target="mainFrame">
查看部门</a></label>
  <label style="background:url(images/left_part.jpg); width:216; height:24; padding-top:8px"><a href="bmgl/add_depart.php" target="mainFrame">添加部门</a></label>
</div>
	<div id=div1 style="position:relative; width:216;">
  <label id=div1 class=active style="cursor: hand; background:url(images/left_main.jpg); width:216; height:31; text-align:center; color:#F0F0F0;padding-top:12px">职员管理</label>
</div>
  <div id=div1other style="display:None; position:relative; width:216;">
<label style="background:url(images/left_part.jpg); width:216; height:24; padding-top:8px"><a href="zygl/show_staf.php" target="mainFrame">查看职员</a></label>
<label style="background:url(images/left_part.jpg); width:216; height:24; padding-top:8px"><a href="zygl/add_staf.php" target="mainFrame">添加职员</a></label>
</div>
<div id=div2 style="position:relative; width:216;">
  <label id=div2 class=active style="cursor: hand; background:url(images/left_main.jpg); width:216; height:31; text-align:center; color:#F0F0F0;padding-top:12px">权限管理</label>
</div>
  <div id=div2other style="display:None; position:relative; width:216;">
<label style="background:url(images/left_part.jpg); width:216; height:24; padding-top:8px"><a href="qxgl/accounts_purview.php" target="mainFrame" >账号权限</a></label>
<label style="background:url(images/left_part.jpg); width:216; height:24; padding-top:8px"><a href="qxgl/user_group.php" target="mainFrame">用户组设置</a></label>
<label style="background:url(images/left_part.jpg); width:216; height:24; padding-top:8px"><a href="qxgl/pur_assign.php" target="mainFrame">权限分配</a></label>

</div>
<div id=div3 style="position:relative; width:216;">
  <label id=div3 class=active style="cursor: hand; background:url(images/left_main.jpg); width:216; height:31; text-align:center; color:#F0F0F0;padding-top:12px">系统管理</label>
</div>
<div id=div3other style="display:None; position:relative; widows:216;">
<label style="background:url(images/left_part.jpg); width:216; height:24; padding-top:8px"><a href="xtgl/slog.php" target="mainFrame">系统日志</a></label>
<label style="background:url(images/left_part.jpg); width:216; height:24; padding-top:8px"><a href="xtgl/data_stock.php" target="mainFrame">数据备份</a></label>
<label style="background:url(images/left_part.jpg); width:216; height:24; padding-top:8px"><a href="xtgl/modify_pwd.php" target="mainFrame">修改密码</a></label>
</div>
	  </td>
	</tr>
</table>

</body>
</html>

