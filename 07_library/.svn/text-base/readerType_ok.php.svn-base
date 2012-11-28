<?php
include("Conn/conn.php");
$name=$_POST[name];
$number=$_POST[number];
$query_ins=mysql_query("insert into tb_readertype(name,number) values('$name','$number')");
if($query_ins){
	echo "<script language='javascript'>alert('成功添加读者类型！');window.opener.location.reload();window.close();</script>";
}else{
	echo "<script language='javascript'>alert('读者类型添加操作失败！');window.opener.location.reload();window.close();</script>";
}
?>