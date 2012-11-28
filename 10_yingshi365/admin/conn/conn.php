<?php
include "../ado/adodb.inc.php";								//载入adodb
$conn = &ADONewConnection('mysql');							//建立mysql连接
$conn->PConnect("localhost","root","root","db_online");		//连接"db_online"数据库
$conn->execute("set names gb2312");
?>