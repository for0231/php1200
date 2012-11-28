<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
if($_SESSION[admin_user]==true){
include("../conn/conn.php");
if($Submit2=="提交考题"){
	$queryes=mssql_query("insert into tb_kt (kt_lb,kt_lx,kt_fs,kt_nr,kt_daan,kt_zqdaan,kt_small_lb)values('$kt_lb','$kt_lx','$kt_fs','$kt_nr','$kt_daan','$kt_zqdaan','$kt_small_lb')");
	if($queryes){
			echo "<script>alert('考题添加成功！'); window.location.href='index.php?htgl=考题信息添加';</script>";
		}
}
?>

<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='checkadmin.php';</script>";
}

?>
