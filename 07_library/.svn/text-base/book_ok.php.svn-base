<?php 
session_start();
include("Conn/conn.php");
$operator=$_SESSION[admin_name];
$barcode=$_POST[barcode];
$bookName=$_POST[bookName];
$typeid=$_POST[typeId];
$author=$_POST[author];
$translator=$_POST[translator];
$isbn=$_POST[isbn];
$price=$_POST[price];
$page=$_POST[page];
$bookcase=$_POST[bookcaseid];
$inTime=date("Y-m-d");
$sql=mysql_query("insert into tb_bookinfo(barcode,bookName,typeid,author,translator,ISBN,price,page,bookcase,inTime,operator )values('$barcode','$bookName','$typeid','$author','$translator','$isbn','$price','$page','$bookcaseid','$inTime','$operator')");
echo "<script language='javascript'>alert('图书信息添加成功!');history.back();</script>";
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

