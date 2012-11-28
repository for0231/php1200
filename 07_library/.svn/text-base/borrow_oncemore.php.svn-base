<?php
session_start();
include("conn/conn.php");
$barcode=$_GET[barcode];
$new=$_GET[backTime];
$newbackTime=date("Y-m-d",(mktime(0, 0, 0, substr($new,5,2), substr($new,8,2), substr($new,0,4))+3600*24*30));   //更新续借期，将动态获取的还书期日转化为时间截，然后再求出续借后的还书日期
$borrid=$_GET[borrid];
mysql_query("update tb_borrow set backTime='$newbackTime',ifback=0,operator='$_SESSION[admin_name]' where id=$borrid");
echo "<script language='javascript'>alert('图书续借操作成功！');window.location.href='bookRenew.php?barcode=$barcode';</script>";
?>