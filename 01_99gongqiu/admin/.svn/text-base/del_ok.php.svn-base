<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include("../conn/conn.php");
$id=$_GET[id];
$flag=$_GET[flag];
$sql=mysql_query("delete from tb_advertising where id=$id");
if($sql){
	echo "<script>alert('该信息已经删除！');window.location.href='find_gg.php?flag=$flag';</script>";
}
else{
	echo "<script>alert('该信息删除操作失败！');history.back();</script>";
}
?>
