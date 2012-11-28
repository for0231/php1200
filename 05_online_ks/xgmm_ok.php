<?php session_start(); include("conn/conn.php");
if($_SESSION[online_number]==true){

$number=$_POST[online_number];
$pass=$_POST[online_pass];
$passes=$_POST[online_pass2];
	$query=mssql_query("select * from tb_user where online_number='$number' and online_pass='$pass'");
	if(mssql_num_rows($query)<1){
		echo "<script>alert('您输入的准考证号码和密码不符，请重新输入！'); window.location.href='index.php?online=修改密码';</script>";
	}else{
		$querys=mssql_query("update tb_user set online_pass='$passes' where online_number='$number'");
		if($querys){
			echo "<script>alert('密码更新成功！'); window.location.href='index.php?online=修改密码';</script>";
		}
}

}else{
echo "<script> alert('请您正确登录!'); window.location.href='index.php?online=用户登录';</script>";
}
?>