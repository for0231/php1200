<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "conn/conn.php";
	$a_sqlstr = "select * from tb_manager where name= '$_POST[manager]'";
	$a_rst = $conn->execute($a_sqlstr);
	if(!$a_rst->EOF){
		if($a_rst->fields[2] != $_POST[pwd]){
			echo "<script>alert('用户名或密码输入错误');history.go(-1);</script>";
			exit();
		}
		if($a_rst->fields[6] == "0"){
			echo "<script>alert('您所登录的用户被冻结，如果有疑问请拨打电话0431-1234****咨询详细信息');history.go(-1)</script>";
			exit();
		}
		$_SESSION[admin]=$a_rst->fields[1];
		$_SESSION[type]=$a_rst->fields[3];
		$_SESSION[m_id]=$a_rst->fields[0];
		echo "<script>alert('登陆成功');location='main.php';</script>";
	}
	else{
		echo "<script>alert('用户名或密码输入错误');history.go(-1);</script>";
	}
?>