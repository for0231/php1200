<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
if ($_POST[submit] == '添加'){
		$sqlstr = "insert into tb_purview values(null,'".$_POST[add_purview]."')";
		$result = mysql_query($sqlstr,$conn);
		if($result)
			echo "<script>alert('添加成功！');location='accounts_purview.php';</script>";
		else
			echo "<script>alert('系统繁忙，请稍后添加');history.go(-1);</script>";
	}else if($_POST[submit] == '修改'){
		$sqlstr = "update tb_purview set u_level = '".$_POST[m_purview]."' where id = ".$_POST[id];
		$result = mysql_query($sqlstr,$conn);
		if($result)
			echo "<script>alert('修改成功成功！');location='accounts_purview.php';</script>";
		else
			echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
	}
	else
		echo "<script>alert('请输入正确参数');history.go(-1);</script>";
?>
