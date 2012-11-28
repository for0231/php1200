<?php
	include_once 'system/system.inc.php';
	$id = $_GET['fid'];
	$sql = "select * from tb_form where id = ".$id;
	$rst = $conn->execute($sql);
	
	$formarr=$rst->GetArray();
	$commname = explode(',',$formarr[0]['commo_name']);
	$commnumber = explode(',',$formarr[0]['commo_num']);
	$commagoprice = explode(',',$formarr[0]['agoprice']);
	$commfold = explode(',',$formarr[0]['fold']);
		
		
	$smarty->assign('formarr',$formarr[0]);
	$smarty->assign('commname',$commname);
	$smarty->assign('commnumber',$commnumber);
	$smarty->assign('commagoprice',$commagoprice);
	$smarty->assign('commfold',$commfold);
	$smarty->assign('title','查看订单信息');
	$smarty->display('forminfo.html');	
?>