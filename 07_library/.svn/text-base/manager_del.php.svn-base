<?php
include("conn/conn.php");
$id=$_GET[id];
$sql=mysql_query("delete from tb_manager where id='$id'");
$query=mysql_query("delete from tb_purview where id='$id'");
if($sql==true and $query==true ){
echo "<script language=javascript>alert('管理员删除成功！');history.back();</script>";
}
else{
echo "<script language=javascript>alert('管理员删除失败！');history.back();</script>";
}
?>

