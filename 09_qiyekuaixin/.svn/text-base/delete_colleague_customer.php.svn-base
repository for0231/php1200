<?php  
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include("conn/conn.php");
if($colleague==true){
   $sql='delete from tb_colleague where colleague_id='.$colleague.'';
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,3,3);
echo "<script>alert('同事信息删除成功！');window.location.href='indexs.php?lmbs=$_GET[lmbs]&lmlb=同事信息管理';</script>";
}

if($customer==true){
   $sql='delete from tb_customer where customer_id='.$customer.'';
	   $res=new com("adodb.recordset");
	   $res->open($sql,$conn,3,3);
echo "<script>alert('客户信息删除成功！');window.location.href='indexs.php?lmbs=$_GET[lmbs]&lmlb=客户信息管理';</script>";
}

if($note==true){
   $sql='delete from tb_note where note_id='.$note.'';
	   $ress=new com("adodb.recordset");
	   $ress->open($sql,$conn,3,3);
echo "<script>alert('短语信息删除成功！');window.location.href='indexs.php?lmbs=$_GET[lmbs]&lmlb=常用短语管理';</script>";
}


?>