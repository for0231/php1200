<?php
	include_once 'system/system.inc.php';
	$id = $_GET['id'];
	$sql = "select * from tb_public where id = ".$_GET['id'];
	$arr = $admindb->ExecSQL($sql,$conn);
	$smarty->assign('title','查看公告');
	$smarty->assign('showpub',$arr);
	$smarty->display('showpub.html');
?>