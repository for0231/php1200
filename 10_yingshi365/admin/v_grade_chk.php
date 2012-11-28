<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "conn/conn.php";
	include "inc/chec.php";
	$v_sqlstr = "update tb_grade set price = '".$_POST[price]."' where id = ".$_POST[name];
	$v_rst = $conn->execute($v_sqlstr);
	if(!($v_rst == false))
		echo "<script>alert('修改成功');top.opener.location.reload();window.close();</script>";
	else
		echo "<script>alert('修改失败');history.go(-1);</script>";
?>