<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
$author=$_POST[author];
$question=$_POST[question];
$answer=$_POST[answer];
$createtime=date("Y-m-j H:i:s");
include_once("../conn/conn.php");
if(mysql_query("insert into tb_cjwt(author,question,answer,createtime) values('$author','$question','$answer','$createtime')",$conn)){
 
  echo "<script>alert('常见问题添加成功！');history.back();</script>";
  
}else{

 echo "<script>alert('常见问题添加失败！');history.back();</script>";

}




?>
