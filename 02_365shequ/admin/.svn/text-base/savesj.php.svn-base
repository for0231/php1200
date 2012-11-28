<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
$name=$_POST[name];
$typeid=$_POST[typeid];
$content=$_POST[content];
$addtime=date("Y-m-j H:i:s");
$bbid=$_POST[bbid];
if(is_dir("./sjxz")==false)
 {
    mkdir("./sjxz");
 }
 
$link=date("YmjHis");
$path=$link.mt_rand(1000000,9999999).strstr($_FILES["address"]["name"],".");
$address="./sjxz/".$path;
move_uploaded_file($_FILES["address"]["tmp_name"],$address);
$address="./admin/sjxz/".$path;
include_once("../conn/conn.php");
$query=mysql_query("insert into tb_sjxz(name,typeid,content,addtime,address,bbid) values('$name','$typeid','$content','$addtime','$address','$bbid')",$conn);
if($query){
 echo "<script>alert('升级包添加成功！');history.back();</script>";
}else{
 echo "<script>alert('升级包添加失败！');history.back();</script>";
}



?>