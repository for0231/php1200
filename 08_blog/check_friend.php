<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include "Conn/conn.php";
if($_POST["regsubmit"]<>""){
$name=$_POST[txt_name];
$sex=$_POST[txt_sex];
$bir=$_POST[txt_bir];
$city=$_POST[txt_province].$_POST[txt_city];
$address=$_POST[txt_address];
$postcode=$_POST[txt_postcode];
$email=$_POST[txt_email];
$tel=$_POST[txt_tel];
$handset=$_POST[txt_handset];
$QQ=$_POST[txt_QQ];
$username=$_SESSION[username];
$INS="Insert Into tb_friend (name,sex,bir,city,address,postcode,email,tel,handset,QQ,username) Values ('$name','$sex','$bir','$city','$address','$postcode','$email','$tel','$handset','$QQ','$username')";
$result=mysql_query($INS);
if($result){
	echo "<script> alert('该信息添加成功！');</script>";
	echo "<script> window.location='friend.php';</script>";
}
else{
	echo "<script> alert('添加操作失败！');</script>";
	echo "<script> window.location='friend.php';</script>";
}
}
?>
