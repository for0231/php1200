<?php
	include_once 'system/system.inc.php';

	$id = (int)$_GET['key'];
	$sql = "select id,name,pics,area,model,class,brand,stocks,m_price,fold,v_price,isnew,isnom,addtime,info from tb_commo where id = ".$id;
	if(false == $rst = $conn->execute($sql)){
		echo "<script>alert('查询错误!');window.close();</script>";
	}else if ($rst->recordCount() == 0){
		echo "<script>top.opener.location.reload();alert('当前商品不存在');window.close();</script>";
	}else{
		$rstarr = $rst->GetAssoc();
	}
	$smarty->assign('mcarr',$rstarr[$id]);	
	$smarty->assign('id',$id);
	$smarty->assign('title','修改商品');
	$smarty->display('modifycommo.html');
?>