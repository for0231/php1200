<?php
include_once 'system/system.inc.php';
$reback = '0';
$names = $_GET['names'];
$wurl = $_GET['wurl'];
$id = (int)$_GET['id'];
$sql = "select * from tb_links where id = ".$id;
$rst = $conn->execute($sql);
if($rst->RecordCount() == 1){
	$upd = array();
	$upd["name"] = $names;
	$upd["url"] = $wurl;
	$updateSQL = $conn->GetUpdateSQL($rst,$upd);
	if($conn->execute($updateSQL) == false){
		$reback = '2';
	}else{
		$reback = '1';
	}
}else{
	$reback = $sql;
}
echo $reback;
?>