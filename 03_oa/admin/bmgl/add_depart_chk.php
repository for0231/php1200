<?
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start(); 
	include "../inc/chec.php";
	include "../conn/conn.php";
	include "../inc/func.php";
	//判断输入部门名称是否重复
	if(isbool($_POST[d_name])){
		echo "<script>alert('名称已存在，请重新输入!!');history.go(-1);</script>";
		exit();
	}
	//添加部门，确定上级部门和根部门
	if($_POST[u_id] != "0"){
		$sqlstr = "select top_depart from tb_depart where id = ".$_POST[u_id];
		$result = mysql_query($sqlstr,$conn);
		$rows = mysql_fetch_row($result);
		if ($rows[top_depart] != 0)
		$top_depart = $rows[top_depart];
	else
		$top_depart = $_POST[u_id];
	}
	else
		$top_depart = 0;
	$sqlstr = "insert into tb_depart values(null,'".$_POST[d_name]."',".$top_depart.",".$_POST[u_id].",'".$_POST[remark]."')";
	$result = mysql_query($sqlstr,$conn); 
	//调用输出函数
	re_message($result,"show_depart.php")
?>
