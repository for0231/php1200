<?php
	include_once 'system/system.inc.php';
	$newsql = "select id,name,pics,m_price,v_price from tb_commo where isnew = 1 order by id desc limit 4";
	$hotsql = "select id,name,pics,m_price,v_price from tb_commo order by sell,id desc limit 4";
	$newrst = $admindb->ExecSQL($newsql,$conn);
	$hotrst = $admindb->ExecSQL($hotsql,$conn);	
	$smarty->assign('newarr',$newrst);
	$smarty->assign('hotarr',$hotrst);
?>