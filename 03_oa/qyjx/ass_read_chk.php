<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
	$u_level = $_POST[g_list];
	
	$sqlstr = "insert into tb_superson values(null,'".$_POST[s_fdate]."','".$_POST[s_ldate]."','".$u_level."')";
	$result = mysql_query($sqlstr,$conn);
	if($result)
		echo "<script>alert('操作成功！');location='exc_staf.php';</script>";
	else
		echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
?>