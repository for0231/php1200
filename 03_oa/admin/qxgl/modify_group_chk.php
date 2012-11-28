<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
$sqlstr = "update tb_group set u_group = '".$_POST[u_group]."', u_member = '".$_POST[g_list]."' where id = ".$_POST[id];
	$result = mysql_query($sqlstr,$conn);
	if($result)
		echo "<script>alert('操作成功！');location='user_group.php';</script>";
	else
		echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
?>