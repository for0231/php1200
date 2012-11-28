<?php 
session_start();
include("conn/conn.php");
$id=$_POST[readerid];
$name=$_POST[name];
$sex=$_POST[sex];
$barcode=$_POST[barcode];
$vocation=$_POST[vocation];
$birthday=$_POST[birthday];
$paperType=$_POST[paperType];
$paperNO=$_POST[paperNO];
$tel=$_POST[tel];
$email=$_POST[email];
$remark=$_POST[remark];
$typeid=$_POST[typeid];
mysql_query("update tb_reader set name='$name',sex='$sex',barcode='$barcode',vocation='$vocation',birthday='$birthday',paperType='$paperType',paperNO='$paperNO',tel='$tel',email='$email',remark='$remark',typeid='$typeid' where id='$id'");
echo "<script language='javascript'>alert('读者信息修改成功!');window.location.href='reader.php';</script>";
?>
       
