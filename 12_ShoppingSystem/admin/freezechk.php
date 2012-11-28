<?php
	header("CACHE-CONTROL:NO-CACHE");
    include_once 'system/system.inc.php';
	$id = (int)$_GET['key'];	
	$reback = '5';
	$sql = 'select id,isfreeze from tb_user where id = '.$id;
	$rst = $conn->execute($sql);
	if($rst->RecordCount() != 1){
		$reback = '2';
	}else{
		$isfreeze = $_GET['state'];
		$arr = array();
		$arr['isfreeze'] = $isfreeze;
		$updateSQL = $conn->GetUpdateSQL($rst,$arr,true);
		if($conn->execute($updateSQL) == false){
			$reback = '3';
		}else{
			$reback = '1';
		}
	}
	echo $reback;
?>