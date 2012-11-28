<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
	include "../inc/func.php";
$sqlstr = "update tb_person set p_title = '".$_POST[p_title]."',p_content = '".$_POST[p_content]."',p_time = now(),u_id = ".$_POST[p_type]." where id = ".$_POST[id];
	$result = mysql_query($sqlstr,$conn);
	re_message($result,"p_manage.php");
?>