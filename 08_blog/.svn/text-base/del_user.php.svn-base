<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "Conn/conn.php";
	$f_sql = "select * from tb_user where id = ".$user_id;
	$f_rst = mysql_query($f_sql,$link);
	$rows = mysql_fetch_array($f_rst);
	if($rows[fig] == 1){
		echo "<script>alert('不允许删除管理员');history.go(-1)</script>";
		exit();
	}
    $sql="delete from tb_user where id=".$user_id;
    $result=mysql_query($sql);
	if($result){
		$sql1 = "delete from tb_friend where username = '".$rows[regname]."'";
		$result1 = mysql_query($sql1);
			if($result1)
				echo "<script>alert('该用户已被删除!');location='browseuser.php';</script>";
			else
				echo "<script>alert('删除操作失败1');history.go(-1);</script>";
	}
	else{	
		echo "<script>alert('删除操作失败!');history.go(-1);</script>";
	}	
?> 



