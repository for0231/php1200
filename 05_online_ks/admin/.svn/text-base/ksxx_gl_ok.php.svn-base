<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
if($_SESSION[admin_user]==true){
include("../conn/conn.php");
if($delete_ksxx==true){
$query=mssql_query("delete from tb_user where online_id='$delete_ksxx'");
if($query){
echo "<script>alert('考生信息删除成功！'); window.location.href='index.php?htgl=考生信息管理';</script>";

}
}
?>

<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='checkadmin.php';</script>";
}

?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
