<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include_once("../conn/conn.php");
$bbname=$_POST[bbname];
$createtime=date("Y-m-j H:i:s");

$sql=mysql_query("select id from tb_bb where bbname='".$bbname."'",$conn);
$info=mysql_fetch_array($sql);
if($info!=false){
  echo "<script>alert('该版本已经添加！');history.back();</script>";
  exit;
}


if(mysql_query("insert into tb_bb(bbname,createtime) values('$bbname','$createtime')",$conn)){

   echo "<script>alert('版本添加成功！');history.back();</script>";

}else{

   echo "<script>alert('版本添加失败！');history.back();</script>";
}
?>