<?php
session_start();
include_once 'system/system.inc.php';
$reback = '0';
$sql = "select * from tb_user where name='".$_GET['user']."'";
$password = $_GET['password'];
if(!empty($password)){
	$sql .= " and password = '".md5($password)."'";
}
$rst = $conn->Execute($sql) or die('execute error');
if($rst->RecordCount() == 1){
	/*  ตวยผห๙ำร  */
	if($rst->fields['isfreeze'] != 0){
		$reback = '3';
	}else{
		$_SESSION['member'] = $rst->fields['name'];
		$_SESSION['id'] = $rst->fields['id'];
		$reback = '1';
	}
}else{
	$reback = '2';
}
echo $reback;
?>