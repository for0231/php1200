<?php
	session_start();
	include_once 'system/system.inc.php';
	$sql = 'select id,shopping from tb_user where id = '.(int)$_SESSION['id'];
	$fst = $_GET['fst'];
	$snd = $_GET['snd'];
	$reback = '0';
	$rst = $conn->execute($sql);
	$changecar = array();
	if($fst != '' and $snd != ''){
		$farr = explode(',',$fst);
		$sarr = explode(',',$snd);
		$upcar = array();
		for($i = 0; $i < count($farr); $i++){
			$upcar[$i] = $farr[$i].','.$sarr[$i];
		}
		if(count($farr) > 1){
			$changecar['shopping'] = implode('@',$upcar);
		}else{
			 $changecar['shopping'] = $upcar[0];
		}
			$UpdateSql = $conn->GetUpdateSQL($rst,$changecar,true);
			if(false == $conn->execute($UpdateSql)){
				$reback = '2';
			}else{
				$reback = '1';
			}
	}
	echo $reback;
?>