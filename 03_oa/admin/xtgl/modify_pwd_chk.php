<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
$sqlstr = "select * from tb_controller where id = ".$_SESSION[id]." and mana_pwd = '".$_POST[old_pwd]."'";
	$result = mysql_query($sqlstr,$conn);
	if($rows = mysql_fetch_row($result)){
		$modsql = "update tb_controller set mana_pwd = '".$_POST[new_pwd]."' where id = ".$_SESSION[id];
		if(mysql_query($modsql,$conn))
			echo "<script>alert('密码修改成功');history.go(-1);</script>";
		else
			echo "<script>alert('密码修改失败');history.go(-1);</script>";
	}
	else{
		echo "<script>alert('密码错误，请重新输入！');history.go(-1);</script>";
	}
?>
