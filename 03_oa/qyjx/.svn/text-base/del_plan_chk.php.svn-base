<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start(); 
	if(isset($_SESSION[id])){
		include "../conn/conn.php";
		include "../inc/func.php";
		$sqlstr = "delete from tb_plan where id = ".$_GET[id];
		$result = mysql_query($sqlstr,$conn);
		echo "<script>alert('删除成功');window.close();</script>";
	}
	else{
		echo "<script>alert('非法链接,页面将关闭');window.close();</script>";
	}
		