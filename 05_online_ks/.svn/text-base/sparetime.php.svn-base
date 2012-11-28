<?php 
session_start();
//创建一个XML格式输出
header('Content-Type: text/xml');
//创建XML头
	$dates=$_SESSION[dates];
    $dates1=$dates+20*60;

	$dates2=mktime();
    $dates3=$dates1-$dates2;
	echo date("i:s",$dates3);
	//关闭<response>元素

?>