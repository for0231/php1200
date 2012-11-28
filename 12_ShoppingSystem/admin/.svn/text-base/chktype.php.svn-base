<?php
	include_once 'system/system.inc.php';
	$name = $_GET['name'];
	($_GET['supid'] == '')?($supid = 0):($supid = $_GET['supid']);
	$reback = '';
	$sql = "select * from tb_class where name = '$name'";
	$rst = $conn->execute($sql);
	if($rst->RecordCount() == 1){
		$reback = '1';
	}else{
		$ine = array();
		$ine["name"] = $name;
		$ine["supid"] = $supid;
		$intsql = $conn->GetInsertSQL($rst,$ine);
		if($conn->execute($intsql) == false){
			$reback = '2';
		}else{
			$reback = '3';
		}
	}
	echo $reback;
?>
