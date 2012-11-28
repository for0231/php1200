<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
if(($_POST[a_title] != "") and ($_POST[a_content] != "")){
		$i_sql = "update tb_iss set i_title = '".$_POST[a_title]."', i_content = '".$_POST[a_content]."',i_time = now(),i_state = 3 where id = ".$_POST[id];
		$i_rst = mysql_query($i_sql,$conn);
		if($i_rst){
			echo "<script>alert('修改成功!!');location='au_issuance.php';</script>";
		}else{
			echo "<script>alert('系统繁忙,请稍后再试！！');history.go(-1);</script>";
		}
	}else{
		echo "<script>alert('请正确登录');location='index.php';</script>";
	}
?>
