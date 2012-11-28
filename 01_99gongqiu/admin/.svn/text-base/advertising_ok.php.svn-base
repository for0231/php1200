<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include("../conn/conn.php");
$title=$_POST[title];
$content=$_POST[content];
$flag=$_POST[flag];
if($flag!=1){
	$flag=0;
}
$fdate=date("Y-m-d h:i:s");
$sql=mysql_query("insert into tb_advertising(title,content,fdate,flag) values('$title','$content','$fdate',$flag)");
if($sql){
	echo "<script>alert('企业广告信息发布成功！');parent.mainFrame.location.href='advertising.php';</script>";
}else{
	echo "<script>alert('企业广告信息发布失败！');history.back();</script>";
}
?>
