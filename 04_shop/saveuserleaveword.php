<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
$title=$_POST[title];
$content=$_POST[content];
$time=date("Y-m-j");
include("conn/conn.php");

$sql=mysql_query("select * from tb_user where name='".$_SESSION[username]."'",$conn);
$info=mysql_fetch_array($sql);
$userid=$info[id];
mysql_query("insert into tb_leaveword (title,content,time,userid) values ('$title','$content','$time','$userid')",$conn);
header("location:userleaveword.php");
?>