<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../inc/func.php";
	c_log();
	echo "<script>alert('删除成功！');lcation='data_stock.php';</script>";
?>