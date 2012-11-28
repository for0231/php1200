<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	include "inc/chec.php";
	include "conn/conn.php";
	include "inc/func.php";
	if(is_chk("name","tb_audiolist",$_POST[names]) == false){
		echo "<script>alert('名称重复');history.go(-1);</script>";
		exit();
	}
		
	$a_sqlstr = "insert into tb_audiolist (grade,name,father,userName,issueDate) values('$_POST[grade]','$_POST[names]','$_POST[father]','$_SESSION[admin]','".date("Y-m-d H:i:s")."')";
	if($conn->execute($a_sqlstr) == false)
		echo "<script>alert('添加失败');history.go(-1);</script>";
	else
		echo "<script>top.opener.location.reload();alert('添加成功');window.close();</script>";
	
?>
