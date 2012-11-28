<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include "Conn/conn.php";
$UserName=$_POST[txt_regname];
$sql=mysql_query("select * from tb_user where regname = '$UserName'");
$result=mysql_fetch_array($sql);
if ($result!=false){
	echo ("<script>alert('用户名已被注册！');history.go(-1);</script>");
	exit();
}

$_SESSION[username]=$_POST[txt_regname];
$regname=$_POST[txt_regname];
$regrealname=$_POST[txt_regrealname];
$regpwd=$_POST[txt_regpwd];
$regbirthday=$_POST[txt_birthday];
$regemail=$_POST[txt_regemail];
$regcity=$_POST[txt_province].$_POST[txt_city];
$regico=$_POST[txt_ico];
$regsex=$_POST[txt_regsex];
$regqq=$_POST[txt_regqq];
$reghomepage=$_POST[txt_reghomepage];
$regsign=$_POST[txt_regsign];
$regintroduce=$_POST[txt_regintroduce];
$ip=getenv(REMOTE_ADDR);
	$INS=mysql_query("Insert Into tb_user (regname,regrealname,regpwd,regbirthday,regemail,regcity,regico,regsex,regqq,reghomepage,regsign,regintroduce,ip,fig) Values ('$regname','$regrealname','$regpwd','$regbirthday','$regemail','$regcity','$regico','$regsex','$regqq','$reghomepage','$regsign','$regintroduce','$ip',0)");
	echo "<script> alert('用户注册成功！');</script>";
	echo "<script> window.location='file.php';</script>";
?>
