<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "conn/conn.php";
	if((trim($_POST[name]) == "") or (trim($_POST[password]) == "")){
		echo "<script>alert('帐号或密码错误');history.go(-1);</script>";
		exit();
	}
	$sqlstr = "select * from tb_account where name = '".$_POST[name]."' and password = '".$_POST[password]."'";
	$u_rst = $conn->execute($sqlstr);
	if(!$u_rst->EOF){
		if($u_rst->fields[17] == "0")
			echo "<script>alert('该帐号被冻结，有疑问请拨打电话0431-XXXXXXXX咨询');history.go(-1);</script>";
		else{
		$g_rst = $conn->execute("select * from tb_grade");
			if($u_rst->fields[15] >= (int)$g_rst->fields[2]){
				$grade = array();
				$grade["grade"] = "高级会员";
				$updata = $conn->getupdateSql($u_rst,$grade);
				$conn->execute($updata);
			}
			$_SESSION[name]=$u_rst->fields[1];
			$_SESSION[id]=$u_rst->fields[0];
			$_SESSION[grades]=$u_rst->fields[16];
			$_SESSION[counts]=$u_rst->fields[15];
			echo "<script>alert('用户登录成功!');location='index.php';</script>";
		}
	}
	else{
		echo "<script>alert('用户名或密码错误，请重新登录。');history.go(-1);</script>";
	}
?>