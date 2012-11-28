<?php
	include_once 'system/system.inc.php';
	$formid = $_GET['formid'];
	$state = $_GET['state'];
	$reback = '0';
	$arr = array();
	$sql = "select * from tb_form where formid = '".$formid."'";
	$rst = $conn->execute($sql);
	if($rst->RecordCount() != 1){
		$reback = '2';
	}else{
		$arr['state'] = $state;
		$UpdateSQL = $conn->GetUpdateSQL($rst, $arr);
		if(false == $conn->execute($UpdateSQL)){
			$reback = '3';
		}else{
			$reback = '1';
		}
	}
	echo $reback;
?>