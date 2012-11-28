<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include_once("../conn/conn.php");
$bccdid=$_POST[typeid];
$bbid=$_POST[bbid];
$xlh=$_POST[xlh];
$sql0=mysql_query("select * from tb_xlh where xlh='".$xlh."' and bccdid='".$bccdid."' and bbid='".$bbid."'",$conn);
$info0=mysql_fetch_array($sql0);
if($info0!=false){
 
 echo "<script>alert('该序列号已经添加！');history.back();</script>";

 exit;
}


$query=mysql_query("insert into tb_xlh(bccdid,bbid,xlh) values('$bccdid','$bbid','$xlh')",$conn);
if($query){
 echo "<script>alert('编程词典序列号添加成功！');history.back();</script>";
}else{
echo "<script>alert('编程词典序列号添加失败！');history.back();</script>";

}

?>