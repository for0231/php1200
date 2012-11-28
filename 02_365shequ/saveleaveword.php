<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();					//初始化一个session变量
$xym=$_POST[xym];						//获取$_POST提交的值
if($xym!=$_SESSION["autonum"]){			//判断验证码是否正确
	echo "<script>alert('效验码输入错误！');history.back();</script>";
 	exit;
}
$title=$_POST["title"];					//获取反馈信息的标题
$content=$_POST["content"];				//获取反馈信息的内容
$type=$_POST["type"];					//获取反馈信息的类型
include_once("conn/conn.php");			//与数据库建立连接
$sql=mysql_query("select id from tb_user where usernc='".$_SESSION["unc"]."'",$conn);	//读取数据库中数据
$info=mysql_fetch_array($sql);			//获取结果集中的数组
$userid=$info["id"];
//向数据库中添加数据
if(mysql_query("insert into tb_leaveword(userid,type,title,content,createtime) values('$userid','$type','$title','$content','".date("Y-m-j H:i:s")."')",$conn)){
	echo "<script>alert('留言发表成功！');history.back();</script>";
}else{
	echo "<script>alert('留言发表失败！');history.back();</script>";
}
?>
