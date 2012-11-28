<?php
include("conn/conn.php");
if($_POST[submit]!=""){
$name=$_POST[name];
$pwd=$_POST[pwd];
$sql=mysql_query("insert into tb_manager (name,pwd) values('$name','$pwd')");
if($sql==true){
echo "<script language=javascript>alert('管理员添加成功！');window.close();window.opener.location.reload();</script>";
}
else{
echo "<script language=javascript>alert('管理员添加失败！');window.close();window.opener.location.reload();</script>";
}
}
?>

