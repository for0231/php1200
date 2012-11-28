<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
if($_SESSION[username]==""){
	echo "<script>alert('对不起，本博客网站需要进行用户登录来验证您的真实身份!');window.location.href='index.php';</script>";
	exit();
}
?>
