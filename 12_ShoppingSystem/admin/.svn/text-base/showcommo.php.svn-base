<?php
	include_once 'system/system.inc.php';
	$sql = "select id,name,brand,area,model,stocks,sell,addtime from tb_commo order by sell";
	$rst = $conn->execute($sql);
	$arr = $rst->GetAssoc();
	$smarty->assign('commoarr',$arr);	
	$smarty->assign('title','查看商品');
	$smarty->display('showcommo.html');
?>