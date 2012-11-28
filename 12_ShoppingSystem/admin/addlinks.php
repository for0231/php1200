<?php
	include_once 'system/system.inc.php';
	$name = $_POST['names'];
	$url = $_POST['url'];
	$sql = "select * from tb_links where id = -1";
	$rst = $conn->execute($sql); 
	$addarr = array();
	$addarr['name'] = $name;
	$addarr['url'] = $url;
	$insertSQL = $conn->GetInsertSQL($rst,$addarr);
	if(false == $conn->execute($insertSQL)){
		echo $rst;
		echo $insertSQL;
		echo $conn->errormsg();
	}else{
		echo "<script>alert('Ìí¼Ó³É¹¦');location=('showlinks.php');</script>";
	}
?>
