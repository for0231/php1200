<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
$sqlstr = "update tb_list set o_group = '".$_POST[g_list]."' where id = ".$_POST[id];
	$result = mysql_query($sqlstr,$conn);
	if($result)
		echo "<script>alert('操作成功！');location='pur_assign.php';</script>";
	else
		echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
?>