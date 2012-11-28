<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "conn/conn.php";
	$pubsql = "select * from tb_public where id= ".$_GET[id];
	$pubrst = mysql_query($pubsql,$link);
	$pubrow = mysql_fetch_row($pubrst);
	echo "<pre>".$pubrow[2]."</pre>";
?>