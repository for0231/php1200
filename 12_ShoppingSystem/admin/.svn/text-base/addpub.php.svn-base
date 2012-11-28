<?php
	include_once 'system/system.inc.php';
	$title = $_GET['title'];
	$content = $_GET['content'];
	$reback = '0';
	$addarr = array();
	$sql = "select * from tb_public where id = -1";
	$rst = $conn->execute($sql);
	$addarr['title'] = $title;
	$addarr['content'] = $content;
	$addarr['addtime'] = $conn->DBDate(time());
	$insertSQL = $conn->GetInsertSQL($rst,$addarr);
	if(false == $conn->execute($insertSQL)){
		$reback = '2';
	}else{
		$reback = '1';
	}
	echo $reback;
?>
