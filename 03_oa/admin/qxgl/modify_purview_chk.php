<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
$sqlstr = "update tb_users set is_on = '".$_GET[is_on]."' where id = ".$_GET[id];
	$result = mysql_query($sqlstr,$conn);
	if($result)
		echo "<script>alert('修改成功！');location='accounts_purview.php';</script>";
	else
		echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
?>