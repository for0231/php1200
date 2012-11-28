<?php
	session_start();
	include_once 'system/system.inc.php';
	$name = $_POST['name'];
	$password = md5($_POST['pwd1']);
	$question = $_POST['question'];	
	$answer = $_POST['answer'];
	$realname = $_POST['realname'];
	$card = $_POST['card'];
	$tel = $_POST['tel'];
	$phone = $_POST['phone'];
	$Email = $_POST['email'];
	$QQ = $_POST['qq'];
	$code = $_POST['code'];
	$address = $_POST['address'];
	$addtime = date("Y-m-d");
	$sql = "insert into tb_user(name,password,question,answer,realname,card,tel,phone,Email,QQ,code,address,addtime,isfreeze,shopping)" ;
	$sql .= " values ('$name', '$password', '$question', '$answer', '$realname', '$card', '$tel', '$phone', '$Email', '$QQ', '$code', '$address','$addtime','','')";
	$rst = $conn->execute($sql);
	if($rst == false){
		echo '<script>alert(\'Ìí¼ÓÊ§°Ü\');history.back;</script>';
	}else{
		$_SESSION['member'] = $name;
		$_SESSION['id'] = $conn->Insert_ID();
		echo "<script>top.opener.location.reload();alert('×¢²á³É¹¦');window.close();</script>";
	}
?>