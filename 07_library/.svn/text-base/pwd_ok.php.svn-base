<?php
session_start();
$newpwd=$_POST[pwd];
include("conn/conn.php");
$sql=mysql_query("update tb_manager set pwd='$newpwd' where name='$_SESSION[admin_name]'");
?>
<script language="javascript">alert("口令更改成功!");window.location.href="pwd_modify.php";</script>		
