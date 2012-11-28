<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include("conn/conn.php");
mysql_query("delete from tb_ip",$conn);
echo "<script>alert('访客记录清除成功!');history.back();</script>";
?>