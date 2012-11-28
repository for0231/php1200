<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
$i_sql = "delete from tb_iss where id = ".$_GET[id];
		$i_rst = mysql_query($i_sql,$conn);
		if($i_rst){
			echo "<script>alert('删除成功!!');location='au_issuance.php';</script>";
		}else{
			echo "<script>alert('系统繁忙,请稍后再试！！');history.go(-1);</script>";
		}
?>
