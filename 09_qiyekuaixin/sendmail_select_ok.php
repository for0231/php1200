<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start(); include("conn/conn.php");
if($check==""){
 echo "<script>alert('请选择要删除的邮件!');history.back();</script>";
}else{
 $ress=new com("adodb.recordset");
while(list($name,$value)=each($_POST[check])){
   $sql='delete from tb_mail where mail_id='.$value.'';
	  	   $ress->open($sql,$conn,3,1);
}
  echo "<script>alert('邮件发送记录删除成功!');window.location.href='indexs.php?lmbs=查看邮件发送记录'</script>";
}
?>