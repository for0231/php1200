<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include "Conn/conn.php";
$UserName=$_GET[x];
$sql=mysql_query("select * from tb_user where regname = '$UserName'");
$result=mysql_fetch_array($sql);
if ($result!=false){
	echo ("[<font color=red>".$UserName."</font>]已被注册！");
}
else{
	echo ("恭喜您!用户名[<font color=green>".$UserName."</font>]可以注册！");
}
?>
