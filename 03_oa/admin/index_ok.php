<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include "conn/conn.php";
include "inc/func.php";
$sqlstr = "select * from tb_controller where manager = '".$_POST[username]."' and mana_pwd = '".$_POST[pwd]."'";
	$result = mysql_query($sqlstr,$conn);
	$record = mysql_fetch_row($result);
	if($record != "")
	{
		$_SESSION["m_id"] = $record[0];					//管理员id
		$_SESSION["controller"] = $_POST[username];		//管理员名称
		w_log($_POST[action],$_SESSION[controller]);	//添加日志
		echo "<script>alert('登录成功');location='admin_main.php';</script>";
	}
	else
		echo "<script>alert('用户名或密码错误');history.go(-1);</script>";
?>