<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include("conn/conn.php");
while(list($name,$value)=each($_POST))
 {
     $id=$value;
     mysql_query("delete from tb_pingjia where id=".$id."",$conn);
 
 }
header("location:editpinglun.php");
?>