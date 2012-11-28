<?php
	include_once 'system/system.inc.php';
	$sql = "select name,id from tb_class where supid = 0";
	$rst = $conn->execute($sql);
	$smarty->assign('op',$rst->GetMenu2("supid",'',$blank = false,'','','class="txt"'));
	$smarty->display('addtype.html');
?>