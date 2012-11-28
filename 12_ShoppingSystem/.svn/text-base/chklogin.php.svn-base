<?php
	session_start();
	/**
	  *  1表示添加成功
	  *  2表示用户没有登录
	  *  3表示商品已添加过
	  *  4表示添加时出现错误
	  *  5表示没有商品添加
	  */
	include_once 'system/system.inc.php';
	$reback = '0';
	if(empty($_SESSION['member'])){
		$reback = '2';
	}else{
		$key = $_GET['key'];
		if($key == ''){
			$reback = '5';
		}else{	
			$id = (int)$_SESSION['id'];
			$boo = false;
			$addshop = array();
			$sql = "select id,shopping from tb_user where id = ".$id;
			$rst = $conn->execute($sql);
			$shopcont = $rst->fields['shopping'];
			if(!empty($shopcont)){
				$arr = explode('@',$shopcont);
				foreach($arr as $value){
					$arrtmp = explode(',',$value);			
					if($key == $arrtmp[0]){
						$reback = '3';
						$boo = true;
						break;
					}
				}
				if($boo == false){
					$shopcont .= '@'.$key.',1'; 
					$addshop['shopping'] = $shopcont;
					$updateSQL = $conn->GetUpdateSQL($rst,$addshop);
					if(false == $conn->execute($updateSQL)){
						$reback = '4';
					}else{
						$reback = '1';
					}
				}
			}else{
				$tmparr = $key.",1";
				$addshop['shopping'] = $tmparr;
				$updateSQL = $conn->GetUpdateSQL($rst,$addshop);
				if(false == $conn->execute($updateSQL)){
					$reback = '4';
				}else{
					$reback = '1';
				}
			}
		}
	}
	echo $reback;
?>