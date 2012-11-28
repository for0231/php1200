<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start(); include("conn/conn.php"); 
$sqls="select * from tb_user where username='".$username."' and userpwd='".$_POST[pwd]."'";
$res=new com("adodb.recordset");
$res->open($sqls,$conn,1,1);
if(!$res->eof){
   $sqls="update tb_user set userpwd='".$_POST[password]."'";
   $rs=new com("adodb.recordset");
   $rs->open($sqls,$conn,1,1);
   if(!$res->eof){
      echo "<script>alert('密码更新成功！');history.back();</script>";  
   }else{
      echo "<script>alert('密码更新失败！');history.back();</script>";  
   }
}else{
      echo "<script>alert('您输入的密码不正确！');history.back();</script>";  

}
?>
