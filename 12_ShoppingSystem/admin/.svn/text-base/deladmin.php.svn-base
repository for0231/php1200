<?php
	include_once 'system/system.inc.php';
	$reback = '0';
	$id = (int)($_GET['id']);
	$sql = 'select * from tb_admin';
	$rst = $conn->execute($sql);
	if($rst->RecordCount() == 1){
		$reback = '2';
	}else{
		$sql = 'delete from tb_admin where id = '.$id;
		if(false == ($rst = $conn->execute($sql))){
			$reback = '3';
		}else{
			$reback = '1';
		}
	}
	echo $reback;
?>