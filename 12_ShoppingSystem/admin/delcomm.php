<?php
	$reback = '1';
	include_once 'system/system.inc.php';
	$rd = $_GET['rd'];
	$arr = explode(",",$rd);
	for($i = 0; $i < count($arr); $i++){
		$sql = "delete from tb_commo where id = ".$arr[$i];
		if(false == ($rst = $conn->execute($sql))){
			$reback = '0';
			break;
		}
	}

	echo $reback;
?>