<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
  $title=$_POST[title];
  $content=$_POST[content];
  include("conn/conn.php");
  mysql_query("update tb_gonggao set title='$title',content='$content' where id='".$_POST[id]."'",$conn);
  echo "<script>alert('公告修改成功!');history.back();</script>";
?>