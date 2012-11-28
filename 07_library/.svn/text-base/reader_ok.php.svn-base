<?php
include("conn/conn.php");
if($_POST[Submit]!=""){
$name=$_POST[name];
$sex=$_POST[sex];
$barcode=$_POST[barcode];
$typeid=$_POST[typeid];
$vocation=$_POST[vocation];
$birthday=$_POST[birthday];
$paperType=$_POST[paperType];
$paperNO=$_POST[paperNO];
$tel=$_POST[tel];
$email=$_POST[email];
$createDate=date("Y-m-d");
$operator=$_POST[operator];
$remark=$_POST[remark];
$sql=mysql_query("insert into tb_reader (name,sex,barcode,typeid,vocation,birthday,paperType,paperNO,tel,email,createDate,operator,remark) values('$name','$sex','$barcode','$typeid','$vocation','$birthday','$paperType','$paperNO','$tel','$email','$createDate','$operator','$remark')");
if($sql==true){
echo "<script language=javascript>alert('读者信息添加成功！');history.back();location.href='reader.php';</script>";
}
else{
echo "<script language=javascript>alert('读者信息添加失败！');history.back();window.opener.location.reload();</script>";
}
}
?>
