<?php 
	session_start(); 
	include_once 'system/system.inc.php';
	/*	查找用户资料	*/
	$sql = "select * from tb_user where name = '".$_SESSION['member']."'";
	$rst = $conn->execute($sql);
	$arr = $rst->GetArray();
	$smarty->assign('arr',$arr[0]);
?>