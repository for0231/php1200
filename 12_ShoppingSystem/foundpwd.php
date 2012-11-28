<?php
	include_once 'system/system.inc.php';
	$name= $_GET['user'];
	$answer = $_GET['answer'];
	$password = $_GET['password'];
	$reback = '0';
	if(empty($answer) && empty($password)){
		$namesql = "select * from tb_user where name = '".$name."'";
		$namerst = $conn->execute($namesql);
		if($namerst->recordCount() == 1){
			$question = $namerst->fields['question'];
			$reback = iconv("gb2312","utf-8",$question);
		}
	}else if(!empty($answer)){
		$answersql = "select * from tb_user where name = '".$name."' and answer = '".$answer."'";
		$answerrst = $conn->execute($answersql);
		if($answerrst->recordCount() == 1){
			$reback = '1';
		}
	}else if(!empty($password)){
		$sql = "select * from tb_user where name = '".$name."'";
		$arr = array();
		$rst = $conn->execute($sql);
		if($rst->RecordCount() == 1){
			$arr['password'] = md5($password);
			$updateSQL = $conn->GetUpdateSQL($rst,$arr,true);
			$conn->execute($updateSQL);
			$reback = '1';
		}
	}
	echo $reback;

?>