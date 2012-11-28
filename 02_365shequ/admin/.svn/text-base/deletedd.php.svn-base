<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
$id=$_GET[id];
include_once("../conn/conn.php");
if(mysql_query("delete from tb_dd where id='".$id."'",$conn)){
  
  echo "<script>alert('订单删除成功!');history.back();</script>";

}else{

  echo "<script>alert('订单删除失败!');history.back();</script>";
}


?>