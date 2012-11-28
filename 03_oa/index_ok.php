<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include "conn/conn.php";
include "inc/func.php";
$sqlstr = "select id,u_name,u_depart,is_on from tb_users where u_user = '".$_POST[username]."' and u_pwd = '".$_POST[pwd]."'";
	$result = mysql_query($sqlstr,$conn);
	$record = mysql_fetch_row($result);
	if(($record != "") and ($record[3] == 1))
	{
		if(getGroup($conn,$record[1],$_POST[u_group])){
			$_SESSION["id"] = $record[0];
			$_SESSION["u_name"] = $_POST[username];
			$_SESSION["u_depart"] = read_field($conn,"tb_depart","d_name",$record[2]);
			$_SESSION["u_group"] = read_field($conn,"tb_group","u_group",$_POST[u_group]);
			w_log($_POST[action]);
			echo "<script>alert('欢迎光临');location='pub_main.php';</script>";
		}
		else
			echo "<script>alert('用户名或密码错误');history.go(-1);</script>";
	}
	else
		echo "<script>alert('用户名或密码错误');history.go(-1);</script>";
?>