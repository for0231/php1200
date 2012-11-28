<?php
	include_once 'system/system.inc.php';
	$sql = "select * from tb_public order by id desc limit 10";
	$arr = $admindb->ExecSQL($sql,$conn);
	$smarty->assign('title','全部公告');
	$smarty->assign('allpub',$arr);
?>