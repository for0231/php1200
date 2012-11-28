<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start(); 
	include "../inc/chec.php";
	include "../conn/conn.php";
	include "../inc/func.php";
	//获取用户帐号
	$fields = read_field($conn,"tb_users","u_name",$_GET[id]);
	/*删除用户*/
	$sqlstr = "delete from tb_users where id = ".$_GET[id];
	$result = mysql_query($sqlstr,$conn);
	/*******************************/
	/*删除group组中相对应的用户*/
	$l_sqlstr = "select * from tb_group";
	$l_result = mysql_query($l_sqlstr,$conn);
	while($l_rows = mysql_fetch_row($l_result)){
		/* 生成用户组列表 */
		$l_list = split(",",$l_rows[2]);
			$new_fields = "";
			for($num = 0; $num < (count($l_list) -1); $num++){
				if($fields != $l_list[$num]){
					$new_fields .= $l_list[$num].",";
				}
			}
			$n_sqlstr = "update tb_group set u_member = '".$new_fields."' where id = ".$l_rows[0];
			mysql_query($n_sqlstr,$conn);
	}
	/******************************/
	if($result)
		echo "<script>alert('删除成功！');location='show_staf.php';</script>";
	else
		echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
?>