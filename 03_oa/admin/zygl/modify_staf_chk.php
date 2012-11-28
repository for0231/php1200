<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start(); 
	include "../inc/chec.php";
	include "../conn/conn.php";
$sqlstr = "update tb_users set u_user='".$_POST[u_user]."',u_name='".$_POST[u_name]."',u_sex='".$_POST[u_sex]."',u_birth='".$_POST[u_birth]."',u_address = '".$_POST[u_address]."',u_tel = '".$_POST[u_tel]."',u_depart = '".$_POST[u_depart]."',u_email = '".$_POST[u_email]."' where id = ".$_POST[id];
	$result = mysql_query($sqlstr,$conn);
	if($result)
		echo "<script>alert('修改成功！');location='show_staf.php';</script>";
	else
		echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
?>