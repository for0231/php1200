<?php  
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include("conn/conn.php");
if($Submit=="提交"){
   if(preg_match("/^(\d{11})$/",$colleague_tel,$counts)){ 
     if(preg_match("/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/",$colleague_mail,$counts)){   
$sql="insert into tb_colleague(colleague_name,colleague_tel,colleague_mail,colleague_address,colleague_category,colleague_birthday)values('".$colleague_name."','".$colleague_tel."','".$colleague_mail."','".$colleague_address."','".$colleague_category."','".$colleague_birthday."')";
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,3,1);
echo "<script>alert('同事添加成功！');history.back();</script>";

 }else{
         echo "<script>alert('您输入的邮箱地址的格式不正确!!');history.back()</script>";

}}else{
         echo "<script>alert('您输入的电话号码的格式不正确!!');history.back()</script>";
}}
?>