<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include "../conn/conn.php";
include "../inc/chec.php";
include "../inc/func.php";
$sqlstr = "update tb_lyb set r_back='".$_POST[r_back]."',is_reply = 1  where id = ".$_POST[id];
$result = mysql_query($sqlstr,$conn);
re_message($result,"lyb.php?u_id=24");
?>
