<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
$bccdid=$_POST[bccdid];
$bbid=$_POST[bbid];
$price=$_POST[price];
$content=$_POST[content];
$gn=$_POST[gn];
$fw=$_POST[fw];
include_once("../conn/conn.php");
$sql=mysql_query("select id from tb_bbqb where bccdid='".$bccdid."'",$conn);
$info=mysql_fetch_array($sql);
if($info!=false){
  
  echo "<script>alert('该版编程词典已经添加！');history.back();</script>";
  exit;

}

$query=mysql_query("insert into tb_bbqb(bccdid,bbid,price,content,gn,fw) values('$bccdid','$bbid','$price','$content','$gn','$fw')",$conn);
$querys=mysql_query("update tb_bccd set bbid='$bbid',price='$price' where id='".$bccdid."'");
echo mysql_error();
if($query==true and $querys==true){
  echo "<script>alert('版本信息添加成功！');history.back();</script>";
}else{
echo "<script>alert('版本信息添加失败！');history.back();</script>";
}


?>