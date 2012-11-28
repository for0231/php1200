<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include("../conn/conn.php");
$id=$_GET[id];
$type=$_GET[type];
$state=$_GET[state];
$sql=mysql_query("update tb_info set checkstate=1 where id=$id");
if($sql){
	echo "<script>alert('该信息已经通过审核！');window.location.href='find_mianfei.php?type=$type&state=$state';</script>";
}
else{
	echo "<script>alert('该信息审核操作失败！');history.back();</script>";
}
?>