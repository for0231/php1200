<?php
	include_once 'system/system.inc.php';
	$name = $_GET['name'];
	$pwd = md5($_GET['pwd']);
	$reback = '0';
	$sql = "select * from tb_admin where name = '".$name."'";
	$rst = $conn->execute($sql);
	if($rst->RecordCount() == 1){
		$reback = '2';
	}else{
		$arr = array();
		$arr['name'] = $name;
		$arr['pwd'] = $pwd;
		$insertSQL = $conn->GetInsertSQL($rst,$arr);
		if(false == ($conn->execute($insertSQL))){
			$reback = '3';
		}else{
			$reback = '1';
		}
	}
	echo $reback;
?>