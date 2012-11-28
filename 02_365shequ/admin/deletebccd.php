<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
$id=$_GET[id];
include("../conn/conn.php");
$sql=mysql_query("select * from tb_bccd where id='".$id."'",$conn);
$info=mysql_fetch_array($sql);
if(mysql_query("delete from tb_bccd where id='".$id."'",$conn))
{
 @unlink(".".substr($info[imageaddress],7,strlen($info[imageaddress])-7));
 
  echo "<script>window.location.href='default.php?htgl=编辑编程词典';</script>";

}
else
{
 echo "<script>alert('视频删除失败!');history.back();</script>";
}
?>