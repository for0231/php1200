<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "conn/conn.php";
	if($_SESSION[fig] == 1){
		$dsql = "delete from tb_public where id = ".$_GET[id];
		$drst = mysql_query($dsql,$link);
		if($drst){
			echo "<script>alert('删除成功');location='managepub.php';</script>";
			exit();
		}else{
			echo "<script>alert('删除失败');history.go(-1);</script>";
			exit();
		}
	}else{
		echo "<script>alert('非法链接');window.close();</script>";
		exit();
	}
?>