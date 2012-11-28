<?php
	//判断目录名是否重复
	//$f_fields：字段名
	//$tablename：数据表名
	//$f_str：要查找的字段
	function is_chk($f_fields,$tablename,$f_str){
		$conn = &ADONewConnection('mysql');						//建立mysql连接
		$conn->PConnect("localhost","root","root","db_online");	//连接"db_online"数据库
		$is_chk = true;
		$is_sqlstr = "select $f_fields from $tablename";
		$is_rst = $conn->execute($is_sqlstr);
		while(!$is_rst->EOF){
			if($f_str == $is_rst->fields[0]){
				$is_chk = false;
				break;
			}
			$is_rst->MoveNext();
		}
		return $is_chk;
	}
	//判断文件后缀
	//$f_type：允许文件的后缀类型
	//$f_upfiles：上传文件名
	function f_postfix($f_type,$f_upfiles){
		$is_pass = false;
		$tmp_upfiles = split("\.",$f_upfiles);
		$tmp_num = count($tmp_upfiles);
		for($num = 0; $num < count($f_type);$num++){
			if(strtolower($tmp_upfiles[$tmp_num - 1]) == $f_type[$num]){
				$is_pass = $f_type[$num];
			}
		}
		return $is_pass;
	}
?>