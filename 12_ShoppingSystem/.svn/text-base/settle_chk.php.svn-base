<?php
	include_once 'system/system.inc.php';
	$sql = "select * from tb_form where id = -1";
	$rst = $conn->execute($sql);
	$addform = array();
	$addform['vendee'] = $_POST['uid'];
	$addform['commo_id'] = $_POST['fst'];
	$addform['commo_num'] = $_POST['snd'];
	$addform['formid'] = time();
	$tmpid = explode(',',$addform['commo_id']);
	$tmpnm = explode(',',$addform['commo_num']);
	$number = count($tmpid);
	if($number >1){
		$tmpna = array();
		$tmpvp = array();
		$tmpfd = array();
		$tmptt = 0;
		for($i = 0; $i < $number; $i++){
		
			$tmpsql = "select name,v_price,fold from tb_commo where id = ".$tmpid[$i];
			$tmprst = $conn->execute($tmpsql);
			$tmpna[$i] = $tmprst->fields['name'];
			$tmpvp[$i] = $tmprst->fields['v_price'];
			$tmpfd[$i] = $tmprst->fields['fold'];
			$tmptt += $tmprst->fields['v_price'] * $tmpnm[$i];
			$tmpsell = $tmprst->fields['sell'] + 1;
			$addsql = "update tb_commo set sell = ".$tmpsell." where id = ".$tmpid[$i];
			$addrst = $conn->execute($addsql);
		}
		$addform['commo_name'] = implode(',',$tmpna);
		$addform['agoprice'] = implode(',',$tmpvp);
		$addform['fold'] = implode(',',$tmpfd);
		$addform['total'] = $tmptt; 
	}else if($number == 1){
		$tmpsql = "select name,v_price,fold from tb_commo where id = ".$tmpid[0];
		$tmprst = $conn->execute($tmpsql);
		
		$addform['commo_name'] = $tmprst->fields['name'];
		$addform['agoprice'] = $tmprst->fields['v_price'];
		$addform['fold'] = $tmprst->fields['fold'];
		$addform['total'] = $tmprst->fields['v_price'] * $tmpnm[0]; 
		$tmpsell = $tmprst->fields['sell'] + 1;
		$addsql = "update tb_commo set sell = ".$tmpsell." where id = ".$tmpid[0];
		$addrst = $conn->execute($addsql);
	}else{
		echo 'error';
		exit();
	}
	$addform['taker'] = $_POST['taker'];
	$addform['code'] = $_POST['code'];
	$addform['tel'] = $_POST['tel'];
	$addform['address'] = $_POST['address'];
	$addform['del_method'] = $_POST['del'];
	$addform['pay_method'] = $_POST['pay'];
	$addform['state']  = '0';

	$InsertSQL = $conn->GetInsertSQL($rst,$addform);
	if(false == $conn->execute($InsertSQL)){
		echo "<script>alert('¹ºÂòÊ§°Ü');history.back;</script>";
	}else{
		$updsql = "select * from tb_user where name = '".$_POST['uid']."'";
		$updrst = $conn->execute($updsql);
		$arr = array();
		$arr['consume'] = $addform['total'];
		$arr['shopping'] = '';
		$UpdateSQL = $conn->GetUpdateSQL($updrst,$arr);
		$conn->execute($UpdateSQL);
		$fid = $conn->Insert_ID();
		echo "<script>top.opener.location.reload();</script>";
		echo "<script>open('forminfo.php?fid=$fid','_blank','width=600 height=450',false);window.close();</script>";
	}
?>