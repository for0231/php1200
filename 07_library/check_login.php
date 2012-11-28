<?php
session_start();
if($_SESSION[admin_name]==""){
	echo "<script>alert('对不起，请通过正确的途径登录博考图书馆管理系统!');window.location.href='login.php';</script>";
}
?>
