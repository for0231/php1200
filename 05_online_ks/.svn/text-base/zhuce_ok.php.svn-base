<?php 
//创建一个XML格式输出
header('Content-Type: text/xml');
//创建XML头
echo '<?xml version="1.0" encoding="gb2312" standalone="yes" ?>';
//创建<response>元素
echo '<response>';
//获取用户姓名

$online_tel=$_GET[online_tel];
$online_address=$_GET[online_address];
$online_number=substr(mt_rand(100000,999999),0,6);
$online_pass=substr(mt_rand(100000,999999),0,6);
//根据从客户端获取的用户创建输出
include("conn/conn.php");
$query=mssql_query("insert into tb_user(online_user,online_tel,online_address,online_number,online_pass) values('$online_user','$online_tel','$online_address','$online_number','$online_pass')");
if($query==true){
echo $online_user=$_GET[online_user];
	echo "用户注册成功，这是您的准考证号码$online_number.和密码$online_pass.";
}
	//关闭<response>元素
	echo '</response>';
?>
