<?php
	session_start();
	include_once 'system/system.inc.php';
	$sql = 'select * from tb_user where id = '.$_SESSION['id'];
	$rst = $conn->execute($sql);
	$mod = array();
	$mod['realname'] = $_POST['realname'];
	$mod['card'] = $_POST['card'];
	$mod['tel'] = $_POST['tel'];
	$mod['phone'] = $_POST['phone'];
	$mod['Email'] = $_POST['email'];
	$mod['QQ'] = $_POST['qq'];
	$mod['code'] = $_POST['code'];
	$mod['address'] = $_POST['address'];
	$updateSQL = $conn->GetUpdateSQL($rst,$mod);
	if($conn->execute($updateSQL))
		echo "<script>alert('修改成功');location=('index.php');</script>"; 
	else
		echo "<script>alert('修改失败');history.go(-1);</script>";
?>