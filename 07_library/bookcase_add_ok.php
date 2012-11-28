<?php
include("Conn/conn.php");
$casename=$_POST[name];
$query_ins=mysql_query("insert into tb_bookcase(name) values('$casename')");
if($query_ins){
	echo "<script language='javascript'>alert('成功添加书架名称！');window.opener.location.reload();window.close();</script>";
}else{
	echo "<script language='javascript'>alert('书架名称添加操作失败！');window.opener.location.reload();window.close();</script>";
}
?>