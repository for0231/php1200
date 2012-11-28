<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include "../conn/conn.php";
include "../inc/chec.php";
include "../inc/func.php";
//1 迟到
//0 正点
//取出正点上班时间
//根据u_type判断上、下、加班
if(($_POST[r_id] == "14") or ($_POST[r_id] == "16")){
	if($_POST[u_type] == 0)
		$t_sql = "select * from tb_setup where id = 2";
	else if($_POST[u_type] == 1)
		$t_sql = "select * from tb_setup where id = 1";
	else if($_POST[u_type] == 2)
		$t_sql = "select * from tb_setup where id = 3";
	else if($_POST[u_type] == 3)
		$t_sql = "select * from tb_setup where id = 4";	
	$t_rst = mysql_query($t_sql,$conn);
	$t_rows = mysql_fetch_row($t_rst);
	$s_time = $t_rows[2];//正点时间
	$now_time = date("h:i:s");//当前登记时间 
	$l_sql = "insert into tb_register (r_date,r_time,r_type,r_state,r_remark,r_id,p_id) values('".date("Y-m-d")."','".date("H:i:s")."',".$_POST[u_type].",".((strtotime($now_time) - strtotime($s_time) > 0)?1:0).",'".$_POST[r_remark]."',".$_POST[r_id].",".$_SESSION[id].")";
}else if($_POST[r_id] == "15")
	$l_sql = "insert into tb_register (r_date,r_time,r_type,r_state,r_remark,r_id,p_id) values('".date("Y-m-d")."','".date("H:i:s")."','".$_POST[u_type]."','3','".$_POST[r_remark]."',".$_POST[r_id].",".$_SESSION[id].")";
$l_rst = mysql_query($l_sql,$conn);
echo mysql_error();

if($l_rst)
	echo "<script>alert('登记完成');window.close();</script>";
else
	echo "<script>alert('错误');history.go(-1);</script>";
?>