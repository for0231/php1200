<?php 
session_start();
include("Conn/conn.php");
$bid=$_POST[bid];
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
$query=mysql_query("update tb_bookinfo set barcode='$barcode', bookName='$bookName' , typeid='$typeid', author='$author', translator='$translator', ISBN='$isbn' , price='$price' , page='$page' , bookcase='$bookcaseid', inTime='$inTime', operator='$operator' where id=$bid");
echo "<script language='javascript'>alert('图书信息修改成功!');history.back();</script>";
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
