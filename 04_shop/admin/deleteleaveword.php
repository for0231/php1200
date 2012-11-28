<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include("conn/conn.php");
while(list($name,$value)=each($_POST))
{
   mysql_query("delete from tb_leaveword where id='".$value."'",$conn);

}
header("location:lookleaveword.php");
?>