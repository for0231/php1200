<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "inc/chec.php";
	include "conn/conn.php";
	if($_GET[action] == "audiolist")
		$t_name = "tb_audiolist";
	else if($_GET[action] == "videolist")
		$t_name = "tb_videolist";
	$sqlstr = "delete from ".$t_name." where id =".$_GET[id];
	if($rst = $conn->execute($sqlstr) == false){
		echo "<script>alert('删除错误！".$sqlstr."');history.go(-1);</script>";
	}else
		echo "<script>alert('删除成功');location='".$_SERVER['HTTP_REFERER']."';</script>";
?>