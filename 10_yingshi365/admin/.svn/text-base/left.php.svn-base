<?php
	session_start();
	include "conn/conn.php";
	include "inc/chec.php";
?>
<table width="201" border="0" cellspacing="0" cellpadding="0" bgcolor="#f0f0f0">
  <tr>
    <td colspan="2" height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" class="menu_td"><div align="center">
<?php
	if(($_SESSION[type] == "super") or ($_SESSION[type] == "视频目录管理员")){
		echo "<img src='images/unlock.png' width='11' height='13' />";
	}else{
		echo "<img src='images/lock.png' width='11' height='13' />";
	}
?>

	</td>
    <td height="25" class="menu_td"><div align="left"><a <?php if(($_SESSION[type]=="super") or ($_SESSION[type]=="视频目录管理员")) echo "href='main.php?action=audioList'"; ?>>视频目录管理</a></div></td>
  </tr>
  <tr>
    <td height="25" class="menu_td"><div align="center">
      <?php
	if(($_SESSION[type] == "super") or ($_SESSION[type] == "音频目录管理员"))
		echo "<img src='images/unlock.png' width='11' height='13' />";
	else
		echo "<img src='images/lock.png' width='11' height='13' />";
?>
    </td>
    <td height="25" class="menu_td"><div align="left"><a <?php if(($_SESSION[type]=="super") or ($_SESSION[type]=="音频目录管理员")) echo "href='main.php?action=videoList'"; ?>>音频目录管理</a></div></td>
  </tr>
  <tr>
    <td height="25" class="menu_td"><div align="center">
      <?php
	if(($_SESSION[type] == "super") or ($_SESSION[type] == "视频数据管理员"))
		echo "<img src='images/unlock.png' width='11' height='13' />";
	else
		echo "<img src='images/lock.png' width='11' height='13' />";
?>
    </td>
    <td height="25" class="menu_td"><div align="left"><a <?php if(($_SESSION[type]=="super") or ($_SESSION[type]=="视频数据管理员")) echo "href='main.php?action=audio'";  ?>>视频数据管理</a></div></td>
  </tr>
  <tr>
    <td height="25" class="menu_td"><div align="center">
      <?php
	if(($_SESSION[type] == "super") or ($_SESSION[type] == "音频数据管理员"))
		echo "<img src='images/unlock.png' width='11' height='13' />";
	else
		echo "<img src='images/lock.png' width='11' height='13' />";
?>
    </td>
    <td height="25" class="menu_td"><div align="left"><a  <?php if (($_SESSION[type]=="super") or ($_SESSION[type]=="音频数据管理员")) echo "href='main.php?action=video'";  ?>>音乐数据管理</a></div></td>
  </tr>
  <tr>
    <td height="25" class="menu_td"><div align="center">
      <?php
	if(($_SESSION[type] == "super") or ($_SESSION[type] == "会员等级管理员"))
		echo "<img src='images/unlock.png' width='11' height='13' />";
	else
		echo "<img src='images/lock.png' width='11' height='13' />";
?>
    </td>
    <td height="25" class="menu_td"><div align="left"><a  <?php if(($_SESSION[type]=="super") or ($_SESSION[type]=="会员等级管理员")) echo "href='main.php?action=grade'"; ?>>会员等级设置</a></div></td>
  </tr>
  <tr>
    <td height="25" class="menu_td"><div align="center">
      <?php
	if(($_SESSION[type] == "super") or ($_SESSION[type] == "会员数据管理员"))
		echo "<img src='images/unlock.png' width='11' height='13' />";
	else
		echo "<img src='images/lock.png' width='11' height='13' />";
?>
    </td>
    <td height="25" class="menu_td"><div align="left"><a  <?php if(($_SESSION[type]=="super") or ($_SESSION[type]=="会员数据管理员")) echo "href='main.php?action=member'"; ?>>会员数据管理</a></div></td>
  </tr>
  <tr>
    <td height="25" class="menu_td"><div align="center">
      <?php
	if($_SESSION[type] == "super")
		echo "<img src='images/unlock.png' width='11' height='13' />";
	else
		echo "<img src='images/lock.png' width='11' height='13' />";
?>
    </td>
    <td height="25" class="menu_td"><div align="left"><a  <?php if($_SESSION[type]=="super") echo "href='main.php?action=log'";  ?>>上传日志管理</a></div></td>
  </tr>
  <tr>
    <td height="25" class="menu_td"><div align="center">
      <?php
	if($_SESSION[type] == "super")
		echo "<img src='images/unlock.png' width='11' height='13' />";
	else
		echo "<img src='images/lock.png' width='11' height='13' />";
?>
    </td>
    <td height="25" class="menu_td"><div align="left"><a  <?php if($_SESSION[type]=="super") echo "href='main.php?action=manager'";  ?>>管理员设置</a></div></td>
  </tr>
  <tr>
  	<td colspan="2" height="20">&nbsp;</td>
  </tr>
  <tr>
  	<td colspan="2"><img src="images/bottom.jpg" width="185" height="50" /></td>
  </tr>
</table>
