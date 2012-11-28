<?php
	include_once 'system/system.inc.php';
	$sql = 'select id,formid,vendee,taker,total,pay_method,del_method,state from tb_form';
	$rst = $admindb->ExecSQL($sql,$conn);
	$smarty->assign('formarr',$rst);
	$smarty->assign('title','²é¿´¶©µ¥');
	$smarty->display('showform.html');
?>