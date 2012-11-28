<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include "Conn/conn.php";
if($_SESSION[fig] == 1){
$title=$_POST[txt_title];
$content=$_POST[file];
$now=date("Y-m-d");
$sql="Insert Into tb_public (title,content,pub_time) Values ('$title','$content','$now')";
$result=mysql_query($sql);
if($result){
	echo "<script>alert('恭喜您，你的公告发表成功!!!');window.location.href='managepub.php';</script>";
	exit();
}
else{
	echo "<script>alert('对不起，添加操作失败!!!');history.go(-1);</script>";
}
}
?>
