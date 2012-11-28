<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include_once("../conn/conn.php");
$id=$_GET[id];
if(mysql_query("delete from tb_bb where id='".$id."'",$conn)){
  echo "<script>alert('编程词典版本删除成功！');history.back();</script>";
}else{
 echo "<script>alert('编程词典版本删除失败');history.back();</script>";
}


?>