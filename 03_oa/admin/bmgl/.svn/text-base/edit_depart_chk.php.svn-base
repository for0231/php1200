<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start(); 
	include "../inc/chec.php";
	include "../conn/conn.php";
	include "../inc/func.php";
//修改部门，确定上级部门和根部门
if($_POST[u_id] != 0){
	$sqlstr = "select top_depart from tb_depart where id = ".$_POST[u_id];
	$result = mysql_query($sqlstr,$conn);
	$rows = mysql_fetch_array($result);
	if ($rows[top_depart] != 0)
		$top_depart = $rows[top_depart];
	else
		$top_depart = $_POST[u_id];
}
else
	$top_depart = 0;
	$sqlstr = "update tb_depart set d_name = '".$_POST[d_name]."',top_depart = ".$top_depart.", up_depart = ".$_POST[u_id].", remark = '".$_POST[remark]."' where id = ".$_POST[id];
	$result = mysql_query($sqlstr,$conn); 
	re_message($result,"show_depart.php");
?>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
