<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
  $page=intval($_POST[page_id]);
  include("conn/conn.php");
  while(list($value,$name)=each($_POST))
   {  
     mysql_query("delete from tb_dingdan where id='".$value."'",$conn);
   }
 header("location:lookdd.php?page=".$page."");
?>