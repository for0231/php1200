<?php
//函数功能：记录后台管理信息
//记录管理员的操作
//登录、登出、添加、删除等
//参数$action为操作动作
session_start();
function w_log($act){
	$filename = "./admin/log.txt";
	$f_open = fopen($filename,"a+");
	$str = $_SESSION['u_name'].",".date("Y-m-d H:i:s").",".$_SERVER['REMOTE_ADDR'].",".$act."\n";
	fwrite($f_open,$str);
	fclose($f_open);
}
//根据用户姓名取得所在组
//$conn：数据库资源
//$unmae：登录用户
//$ugroup：用户所在组
function getGroup($conn,$uname,$ugroup){
	$sqlstr = "select u_member from tb_group where id = ".$ugroup;
	$result = mysql_query($sqlstr,$conn);
	$rows = mysql_fetch_row($result);
	$num = split(",",$rows[0]);
	$bool = false;
	for($i = 0;$i < count($num);$i++){
		if($uname == $num[$i])
			$bool = true;	
	}
	return $bool;
}
//判断是否包含关键字
//keyworld：要查找得关键字
function get_tp($conn){
	$sqlstr = "select f_type from tb_list group by f_type order by id";
	$result = mysql_query($sqlstr,$conn);
	return $result;
}
//读取字段
//$conn,数据库链接
//$dataname：数据表名称
//$fieldname：要查找字段
//$n_id：数据id号
function read_field($conn,$tablename,$fieldname,$n_id){
	$sqlstr = "select ".$fieldname." from ".$tablename." where id = ".$n_id;
	$result = mysql_query($sqlstr,$conn);
	$rows = mysql_fetch_row($result);
	return $rows[0];
}
//返回处理消息
//$l_address：跳转地址
function re_message($result,$l_address){
	if($result)
		echo "<script>alert('操作成功！');location='".$l_address."';</script>";
	else
		echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
}
?>