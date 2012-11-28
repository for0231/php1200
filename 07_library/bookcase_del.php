<?php
include("conn/conn.php");
$id=$_GET[id];
$query=mysql_query("delete from tb_bookcase where id='$id'");
if($query){
	echo "<script language='javascript'>alert('成功删除书架名称！');history.go(-1);</script>";
}else{
	echo "<script language='javascript'>alert('书架名称删除操作失败！');history.go(-1);</script>";
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
