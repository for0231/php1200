<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	if(!isset($_SESSION[id]) or !isset($_SESSION[name])){
		echo "<script>alert('您没有登录或超时');window.close();</script>";
		exit();
	}
?>