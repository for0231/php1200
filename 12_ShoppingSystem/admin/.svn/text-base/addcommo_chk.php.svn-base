<?php
include_once 'func/upfile.php';
include_once 'system/system.inc.php';
$sql = "select * from tb_commo where id = -1";
$rst = $conn->execute($sql);
$add = array();

$add['name'] = $_POST['name'];				//商品名称

$fileinfo = $_FILES['pics'];				//商品图片
/*  获取图片路径  */
$reback = uppic($fileinfo);
if($reback === false){
	echo '上传失败，类型错误，或超出大小';
	exit();
}else{
	$add['pics'] = $reback;
}
/*****************/
$add['info'] = $_POST['info'];									//商品介绍
$add['addtime'] = $conn->DBDate(time());						//添加时间
$add['area'] = $_POST['area'];									//商品产地
$add['model'] = $_POST['model'];								//商品型号
$add['class'] = $_POST['stype'];								//商品类别
$add['brand'] = $_POST['brand'];								//商品品牌
$add['stocks'] = $_POST['stocks'];								//商品数量
$add['m_price'] = (float)$_POST['m_price'];						//商品市场价格
$add['v_price'] = (float)$_POST['m_price'] * (float)$_POST['fold'] / 10;
$add['fold'] = (float)$_POST['fold'];							//打折率
$add['isnew'] = $_POST['isnew'];								//是否新品
$add['isnom'] = $_POST['isnom'];								//是否推荐



$insesql = $conn->GetInsertSQL($rst,$add);
if(!$conn->execute($insesql)){
	echo $insesql.'<p>';
	echo $conn->errormsg();
}else{
	echo '<script>alert(\'添加成功\');location=(\'addcommo.php\');</script>';
}
?>