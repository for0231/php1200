<?php
	include_once 'system/system.inc.php';
	$sql = 'select * from tb_links';
	$rst = $conn->execute($sql);
	$linkarr = $rst->GetArray();
	$smarty->assign('title','²é¿´Á´½Ó');
	$smarty->assign('linkarr',$linkarr);
	$smarty->display('showlinks.html');
?>