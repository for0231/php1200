<?php
	session_start();
	include_once 'system/system.inc.php';
	$oldpwd = md5($_POST['old']);
	$sql = 'select * from tb_user where id = '.$_SESSION['id'].' and password = \''.$oldpwd.'\'';
	$rst = $conn->execute($sql);
	$mod = array();
	$mod['password'] = md5($_POST['new1']);
	$updateSQL = $conn->GetUpdateSQL($rst,$mod);
	if($conn->execute($updateSQL))
		echo "<script>alert('修改成功');location=('index.php');</script>"; 
	else
		echo "<script>alert('修改失败');history.go(-1);</script>";
?>
