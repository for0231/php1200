<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "conn/conn.php";
	include "inc/chec.php";
	
	if($_POST[whether] == "1")
		$wt = "0";
	else if($_POST[whether] == "0")
		$wt = "1";
	else{
		echo "<script>alert('非法操作!');history.go(-1);</script>";
		exit();
	}
	$o_sqlstr = "update tb_manager set whether = '".$wt."' where id = ".$_POST[id];
	$o_rst = $conn->execute($o_sqlstr);
	if(!($o_rst == false)){
		echo "<script>alert('操作成功');location='main.php?action=manager';</script>";
	}
?>