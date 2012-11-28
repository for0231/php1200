<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
 include_once("conn/conn.php");
 $truepwd=$_POST[userpwd1];
 $pwd=md5($truepwd);
 if(mysql_query("update tb_user set pwd='$pwd' where id='$userid'",$conn)){
    echo "<script>alert('密码更改成功!');history.back();</script>";
  }else{
    echo "<script>alert('密码更改失败!');history.back();</script>";
  }
 mysql_close($conn);
?>