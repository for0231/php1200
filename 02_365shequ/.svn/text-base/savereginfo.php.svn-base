<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include_once("conn/conn.php");
$usernc=trim($_POST[usernc]);
$sql=mysql_query("select usernc from tb_user where usernc='".$usernc."'",$conn);
$info=mysql_fetch_array($sql);
if($info!=false)
 {
  echo "<script language='javascript'>alert('对不起，该昵称已被其他用户使用!');history.back();</script>"; 
  exit; 
 }
 
$xym=trim($_POST[xym]);
$num=$_POST[num];
if(strval($xym)!=strval($num))
 {
  echo "<script>alert('验证码输入错误!');window.location.href='register.php';</script>";
  exit;
 }
$truepwd=trim($_POST[pwd1]);
$pwd=md5($truepwd);
$truename=trim($_POST[truename]);
$email=trim($_POST[email]);
$sex=$_POST[sex];
$tel=trim($_POST[tel]);
$yb=trim($_POST[yb]);
$qq=trim($_POST[qq]);
$address=trim($_POST[address]);
$question=trim($_POST[question]);
$answer=trim($_POST[answer]);
$ip=getenv("REMOTE_ADDR");
$logintimes=1;
$regtime=date("Y-m-j H:i:s");
$lastlogintime=$regtime;
$usertype=0;
$photo=$_POST["photo"];
if(mysql_query("insert into tb_user(usernc,truename,pwd,email,sex,tel,qq,address,logintimes,regtime,lastlogintime,ip,usertype,yb,question,answer,truepwd,photo) values('$usernc','$truename','$pwd','$email','$sex','$tel','$qq','$address','$logintimes','$regtime','$lastlogintime','$ip','$usertype','$yb','$question','$answer','$truepwd','$photo')",$conn))
{
  session_register("unc");
  $_SESSION["unc"]=$usernc;  
  echo "<script>alert('注册成功!');window.location.href='index.php';</script>";
}else{
  echo "<script language='javascript'>alert('对不起,注册失败!');history.back();</script>"; 
  exit;
}

?>