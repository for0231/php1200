<?php
	include_once "system/system.inc.php";
	$sql = "select id,title from tb_public order by id limit 7";
	$arr = $admindb->ExecSQL($sql,$conn);
	$smarty->assign('public',$arr);
?>