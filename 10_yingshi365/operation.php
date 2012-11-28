<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link rel="stylesheet" href="css/reg.css"/>
<link rel="stylesheet" href="css/style.css"/>
</head>
<script src="js/chk.js"></script>
<body>
<table>
	<tr>
		<td width="665" height="164" background="images/ball.jpg">&nbsp;</td>
	</tr>
</table>
<?php
/*  动作类别  */
	switch($_GET[action]){
		case "reg":					//注册
			include "register.php";
			break;
		case "s_music":				//查看点歌系统
			include "s_music.php";
			break;
		case "mod_vip":				//修改资料
			include "mod_vip.php";	
			break;
		case "intro":				//视频介绍
?>
			<iframe src="intro.php?id=<?php echo $_GET[id]; ?>" width="665" height="700" scrolling="no"></iframe>
<?php
			break;
		case "v_intro":				//音频介绍
?>
			<iframe src="v_intro.php?id=<?php echo $_GET[id]; ?>" width="665" height="700" scrolling="no"></iframe>
<?php
			break;
		case "call":
			include "call.php";
			break;
		case "trans":
			include "trans.php";
			break;
		case "found":
			include "found_pwd.php";
			break;
		case "search":
			include "high.php";
			break;
		case "see":
?>
			<iframe src="see.php?id=<?php echo $_GET[id]; ?>" width="665" height="530" scrolling="no" frameborder="0" align="middle"></iframe>
<?php
			break;
		case "listen":
?>
			<iframe src="listen.php?id=<?php echo $_GET[id]; ?>" width="665" height="530" scrolling="no" frameborder="0" align="middle"></iframe>
<?php
			break;
		case "give":
?>
			<iframe src="give.php?id=<?php echo $_GET[id]; ?>" width="665" height="530" scrolling="no" frameborder="0" align="middle"></iframe>
<?php
			break;
		case "dotlisten":
?>
			<iframe src="dotlisten.php?id=<?php echo $_GET[id]; ?>&name=<?php echo $_GET[name]; ?>" width="665" height="530" scrolling="no" frameborder="0" align="middle"></iframe>
<?php
		default:
			break;
	}
/**************/
?>
</body>
</html>
