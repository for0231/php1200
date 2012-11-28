<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	include "conn/conn.php";
	if(!isset($_GET[name]) or $_GET[name] == ""){
		echo "<font color='red'>非法用户名!</font>";
		exit();
	}
	$c_sql = "select * from tb_account where name='".$_GET[name]."'";
	$c_rst = $conn->execute($c_sql);
	if($c_rst){
		if(!$c_rst->EOF){
			echo "<font color='red'>用户名被占用!</font>";
			exit();
		}else{
			echo "<font color='green'>恭喜您：该用户名可用!</font>";
			exit();
		}}
?>
