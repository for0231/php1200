<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include_once("../conn/conn.php");
if(mysql_query("delete from tb_soft where id='".$_GET[id]."'",$conn)){
  
  echo "<script>alert('该下载软件删除成功!');history.back();</script>";

}else{

  echo "<script>alert('该下载软件删除失败!');history.back();</script>";
}


?>