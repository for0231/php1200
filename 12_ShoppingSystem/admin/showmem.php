<?php
	include_once 'system/system.inc.php';
	$id = (int)$_GET['key'];
	$sql = "select id,name,consume,realname,card,tel,phone,Email,QQ,code,address,isfreeze,addtime from tb_user where id = ".$id;
	if(false == $rst = $conn->execute($sql)){
		echo "<script>alert('查询错误!');window.close();</script>";
	}else if ($rst->recordCount() == 0){
		echo "<script>top.opener.location.reload();alert('会员不存在');window.close();</script>";
	}else{
		$rstarr = $rst->GetAssoc();
	}
	$smarty->assign('viparr',$rstarr[$id]);	
	$smarty->assign('id',$id);
	$smarty->assign('title','会员信息');
	$smarty->display('showmem.html');
?>