<?php
	include_once 'system/system.inc.php';
	$sql = "select id,name,pics,m_price,v_price from tb_commo where isnom = 1 order by id desc limit 4";
	$nomarr = $admindb->ExecSQL($sql,$conn);
	$smarty->assign('nomarr',$nomarr);
?>