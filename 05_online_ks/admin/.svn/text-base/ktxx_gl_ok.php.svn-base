<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
if($_SESSION[admin_user]==true){
include("../conn/conn.php");
if($Submit2==true){
$querys=mssql_query("update tb_kt set kt_lb='$kt_lb',kt_lx='$kt_lx',kt_fs='$kt_fs',kt_nr='$kt_nr',kt_daan='$kt_daan',kt_zqdaan='$kt_zqdaan' where kt_id='$kt_id'");
if($querys){
echo "<script>alert('考题更新成功！'); window.location.href='index.php?htgl=考题信息管理';</script>";
}
}
if($Submit3==true){
$query=mssql_query("delete from tb_kt where kt_id='$kt_id'");
if($query){
echo "<script>alert('考题信息删除成功！'); window.location.href='index.php?htgl=考题信息管理';</script>";
}
}
?>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='checkadmin.php';</script>";
}

?>