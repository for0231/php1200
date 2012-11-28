<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "conn/conn.php";
		$password = $_POST[password];
		$realname = $_POST[realname];
		$sex = $_POST[sex];
		$age = $_POST[age];
		$numbers = $_POST[numbers];
		$job = $_POST[job];
		$email = $_POST[email];
		$address = $_POST[address];
		$qq = $_POST[qq];
		$http = $_POST[http];
		$up_sqlstr = "update tb_account set password = '$password',realName = '$realname',sex='$sex',age=$age ,numbers='$numbers',job='$job',email='$email',address='$address',qq='$qq',http='$http' where id = ".$_POST[id];
	if($conn->Execute($up_sqlstr) == false){
		echo "<script>alert('修改错误：".$conn->Errormsg()."');history.go(-1);</script>";
	}
	else{
		echo "<script>alert('信息修改成功!');window.close();</script>";
	}
?>