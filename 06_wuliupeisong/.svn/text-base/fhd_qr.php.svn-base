<?php session_start(); include("conn/conn.php");
if($_SESSION[admin_user]==true){
if($_GET[fahuo_id]==true){
$query="delete from tb_car_log where fahuo_id='$fahuo_id'";
$result=mysql_query($query);

$query="update tb_shopping set fahuo_ys='1' where fahuo_id='$fahuo_id' ";
$result=mysql_query($query);

  echo "<script>alert('发货回执单处理成功!');window.location.href='indexs.php?lmbs=回执发货单确认';</script>"; 
}

if($delete==true){
$query="delete from tb_shopping where id='$delete'";
$result=mysql_query($query);
  echo "<script>alert('发货单删除成功!');window.location.href='indexs.php?lmbs=发货单查询';</script>"; 
}
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>