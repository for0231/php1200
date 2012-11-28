<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include("conn/conn.php");
$sql=mysql_query("select * from tb_user where name='".$_SESSION[username]."'",$conn);
$info=mysql_fetch_array($sql);
$dingdanhao=date("YmjHis").$info[id];
$spc=$_SESSION[producelist];
$slc= $_SESSION[quatity];
$shouhuoren=$_POST[name2];
$sex=$_POST[sex];
$dizhi=$_POST[dz];
$youbian=$_POST[yb];
$tel=$_POST[tel];
$email=$_POST[email];
$shff=$_POST[shff];
$zfff=$_POST[zfff];
if(trim($_POST[ly])==""){
   $leaveword="";
 }
 else{
   $leaveword=$_POST[ly];
 }
 $xiadanren=$_SESSION[username];
 $time=date("Y-m-j H:i:s");
 $zt="未作任何处理";
 $total=$_SESSION[total];
 mysql_query("insert into tb_dingdan(dingdanhao,spc,slc,shouhuoren,sex,dizhi,youbian,tel,email,shff,zfff,leaveword,time,xiadanren,zt,total) values ('$dingdanhao','$spc','$slc','$shouhuoren','$sex','$dizhi','$youbian','$tel','$email','$shff','$zfff','$leaveword','$time','$xiadanren','$zt','$total')",$conn); 
 header("location:gouwu2.php?dingdanhao=$dingdanhao");
?>
