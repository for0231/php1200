<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
 include("conn/conn.php");
 $title=$_POST[title];
 $content=$_POST[content];
 $time=date("Y-m-j");
 mysql_query("insert into tb_gonggao (title,content,time) values ('$title','$content','$time')",$conn);
 echo "<script>alert('公告添加成功!');history.back();</script>";
?>