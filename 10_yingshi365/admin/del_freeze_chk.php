<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	include "conn/conn.php";
	include "inc/chec.php";
	$d_sqlstr = "delete from tb_account where id = ".$_GET[id];
	if(!($d_rst = $conn->execute($d_sqlstr)) == false)
		echo "<script>alert('删除成功');location='main.php?action=member';</script>";
	else
		echo "<script>alert('删除失败');history.go(-1);</script>";
?>