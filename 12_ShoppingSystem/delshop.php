<?php
	session_start();
	/*	载入数据库文件	*/
		include_once 'system/system.inc.php';
	/*  xmlhttp返回参数  */				
	$reback = '0';
	/*	将传过来的变量以逗号分割	*/
	$commid = explode(',',$_GET['rd']);
	/*  更新数据库所需数组	*/
	$newshop = array();
	/*	查找当前用户	*/
	$sql = "select id,shopping from tb_user where id = ".(int)$_SESSION['id'];
	$rst = $conn->execute($sql);
	/*	如果当前用户为空，则返回2	*/
	if($rst->RecordCount() != 1){
		$reback = '2';
	}else{
		/*	将shopping字段用@分割	*/
		if(!empty($rst->fields['shopping'])){
			$tmpshop = array();
			$shopping = explode('@',$rst->fields['shopping']);
			foreach($shopping as $ky => $vl){
				$tmp = explode(',',$vl);
				$boo = false;
				foreach($commid as $value){
					if($value == $tmp[0]){
						$boo = true;
					}
				}
				if(!$boo){
					$tmpshop[$ky] = $vl;
				}
			}
			if(!empty($tmpshop)){
				$newshop['shopping'] = implode('@',$tmpshop);
			}else{
				$newshop['shopping'] = '';
			}
			$updateSQL = $conn->GetUpdateSQL($rst,$newshop);

			if(false == $conn->execute($updateSQL)){
				$reback = '3';
			}else{
				$reback = '1';
			}
		}
	}
	echo $reback;
?>