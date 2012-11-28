<?php
	include_once 'system/system.inc.php';
	$name = $_GET['user'];
	$pwd = md5($_GET['pwd']);
	$reback = '';
	$sql = "select * from tb_admin where name = '$name' and pwd = '$pwd'";
	$rst = $conn->execute($sql);
	if($rst->RecordCount() == 1){
		$_SESSION['admin'] = $rst->fields['name'];
		$reback = '1';
	}else{
		$reback = '2';
		$reback = $sql;
	}
	
	echo $reback;
?>