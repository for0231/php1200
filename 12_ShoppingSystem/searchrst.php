<?php
	include_once 'inc/char.php';
	include_once 'system/system.inc.php';
	
	$act = $_GET['act'];
	if($act == "simple"){
		$cont = $_GET['cont'];
		if(!empty($_GET['cont'])){
			$sql = "select * from tb_commo where name like '%".$cont."%'";
		}
	}else{
		$name = $_GET['name'];
		$model = $_GET['model'];
		$class = $_GET['stype'];
		$sql = "select * from tb_commo where name like '%".$name."%' and model like '%".$model."%' and class like '%".$class."%' ";
	}
		$rst = $admindb->ExecSQL($sql,$conn);
	if($rst){
		$smarty->assign('search',"T");
		$smarty->assign('searcharr',$rst);
	}
		$smarty->assign('title','²éÑ¯½á¹û');
		$smarty->display('searchrst.html');

?>