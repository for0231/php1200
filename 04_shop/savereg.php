<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include("conn/conn.php");
$name=$_POST[usernc];
$pwd1=$_POST[p1];
$pwd=md5($_POST[p1]);
$email=$_POST[email];
$truename=$_POST[truename];
$sfzh=$_POST[sfzh];
$tel=$_POST[tel];
$qq=$_POST[qq];
if($_POST[ts1]==1)
  {
  $tishi=$_POST[ts2];
  }
else 
 {
 $tishi=$_POST[ts1];
 } 
$huida=$_POST[tsda];
$dizhi=$_POST[dizhi];
$youbian=$_POST[yb];
$regtime=date("Y-m-j");
$dongjie=0;
$sql=mysql_query("select * from tb_user where name='".$name."'",$conn);
$info=mysql_fetch_array($sql);
if($info==true)
 {
   echo "<script>alert('该昵称已经存在!');history.back();</script>";
   exit;
 }
 else
 {  
    mysql_query("insert into tb_user (name,pwd,dongjie,email,truename,sfzh,tel,qq,tishi,huida,dizhi,youbian,regtime,pwd1) values ('$name','$pwd','$dongjie','$email','$truename','$sfzh','$tel','$qq','$tishi','$huida','$dizhi','$youbian','$regtime','$pwd1')",$conn);
	session_register("username");
	$username=$name;
        session_register("producelist");
	$producelist="";
	session_register("quatity");
	$quatity="";
    echo "<script>alert('恭喜，注册成功!');window.location='index.php';</script>";
 }
?>
