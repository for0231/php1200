<?php
	session_start();
	include "inc/chec.php";
?>
<link href="css/style.css" rel="stylesheet"/>
<script src="js/admin_js.js" language="javascript"></script>
<center>
<table>
	<tr>
		<td width="665" height="164" background="images/ball.jpg">&nbsp;</td>
	</tr>
</table>
<?php
	switch ($_GET[action]){
		case "audiolist":					//添加视频目录
			include "audiolist.php";
			break;
		case "videolist":					//添加音频目录
			include "videolist.php";
			break;
		case "audioadd":					//添加视频
			include "audioadd.php";
			break;
		case "videoadd":					//添加音频
			include "videoadd.php";
			break;
		case "v_grade":						//会员参数更新
			include "v_grade.php";
			break;
		case "v_found":						//会员查询
			include "v_found.php";
			break;
		case "freeze":						//冻结帐号
			include "freeze.php";
			break;
		case "l_found":						//查询日志
			include "l_found.php";
			break;
		case "addmanager":					//添加管理员
			include "addmanager.php";		 
			break;
		case "audio":						//视频介绍
?>
		<iframe src="intro.php?id=<?php echo $_GET[id]; ?>" width="665" height="700" scrolling="no"></iframe>
<?php
		break;
	case "video":							//音频介绍
?>
		<iframe src="v_intro.php?id=<?php echo $_GET[id]; ?>" width="665" height="700" scrolling="no"></iframe>
<?php
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
}
?>
</center>