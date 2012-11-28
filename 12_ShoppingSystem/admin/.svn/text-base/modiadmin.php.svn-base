<?php
	include_once 'system/system.inc.php';
	$id = (int)$_GET['id'];
	$old = md5($_GET['old']);
	$new = md5($_GET['new']);
	$reback = '0';
	$sql = "select * from tb_admin where id = ".$id." and pwd = '".$old."'";
	$rst = $conn->execute($sql);
	if($rst->RecordCount() == 1){
		$mod = array();
		$mod['pwd'] = $new;
		$updateSQL = $conn->GetUpdateSQL($rst,$mod);
		if( $conn->execute($updateSQL) == false){
			$reback = '2';
		}else{
			$reback = '1';
		}
	}else{
		$reback = $conn->errormsg();
	}
	echo $reback;
?>