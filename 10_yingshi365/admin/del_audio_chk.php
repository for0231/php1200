<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "conn/conn.php";
	include "inc/chec.php";
	$file_path = "../upfiles/audio/";
	$s_sqlstr = "select * from tb_audio where id = ".$_GET[id];
	$s_rst = $conn->execute($s_sqlstr);
	if(!($s_rst == false)){	
		if(file_exists($file_path.$s_rst->fields[16])){
			if(unlink($file_path.$s_rst->fields[16]) and unlink($file_path.$s_rst->fields[2])){
				$d_sqlstr = "delete from tb_audio where id = ".$_GET[id];
				$d_rst = $conn->execute($d_sqlstr);
				if(!($d_rst == false)){
					echo "<script>alert('删除成功');location='main.php?action=audio';</script>";
					exit();
				}else{
					echo "<script>alert('删除失败');history.go(-1);</script>";
					exit();
				}
			}
		}else{
			$d_sqlstr = "delete from tb_audio where id = ".$_GET[id];
			$d_rst = $conn->execute($d_sqlstr);
			if(!($d_rst == false)){
				echo "<script>alert('此文件已删除~');location='main.php?action=audio';</script>";
				exit();
			}else{
				echo "<script>alert('删除失败');history.go(-1);</script>";
				exit();
			}
		}
	}
	else
		echo "<script>alert('删除失败');history.go(-1);</script>";
?>