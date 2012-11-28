<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
$ddnumber=base64_decode($_GET["ddno"]);
include_once("conn/conn.php");
if(mysql_query("delete from tb_dd where ddnumber='".$ddnumber."'",$conn)){
  echo "<script>window.location.href='index.php';</script>";
}else{
  echo "<script>alert('订单删除失败,请重试！');history.back();</script>";
}
?>