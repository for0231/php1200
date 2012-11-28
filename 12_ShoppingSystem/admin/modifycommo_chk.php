<?php
include_once 'func/upfile.php';
include_once 'system/system.inc.php';
$sql = "select * from tb_commo where id = ".$_POST['id'];
$rst = $conn->execute($sql);
$mod = array();

$fileinfo = $_FILES['pics'];				//商品图片
if($_FILES['pics']['name'] != ""){
	/*  获取图片路径  */
	$reback = uppic($fileinfo);
	if($reback === false){
		echo '上传失败';
	}else{
		$mod['pics'] = $reback;
	}
}
/*****************/
$mod['info'] = $_POST['info'];									//商品介绍
$mod['area'] = $_POST['area'];									//商品产地
$mod['model'] = $_POST['model'];								//商品型号
$mod['class'] = $_POST['stype'];								//商品类别
$mod['brand'] = $_POST['brand'];								//商品品牌
$mod['stocks'] = $_POST['stocks'];								//商品数量
$mod['m_price'] = $_POST['m_price'];							//商品市场价格
$mod['v_price'] = (float)$_POST['m_price'] * (float)$_POST['fold'] / 10;
$mod['fold'] = $_POST['fold'];									//打折率
$mod['isnew'] = $_POST['isnew'];								//是否新品
$mod['isnom'] = $_POST['isnom'];								//是否推荐
$updatesql = $conn->GetUpdateSQL($rst,$mod);
if(!$conn->execute($updatesql)){
	echo $sql.'<p>';
	echo $updatesql.'<p>';
	echo $conn->errormsg();
}else{
	echo  "<script>top.opener.location.reload();alert('修改成功');window.close();</script>";
}
?>