<?php

/*
 *判断文件后缀
 *$f_type：允许文件的后缀类型
 *$f_upfiles：上传文件名
 */
 
function f_postfix($f_type,$f_upfiles){
	$is_pass = false;
	$tmp_upfiles = split("\.",$f_upfiles);
	$tmp_num = count($tmp_upfiles);
	if(in_array(strtolower($tmp_upfiles[$tmp_num - 1]),$f_type))
		$is_pass = $tmp_upfiles[$tmp_num - 1];
	return $is_pass;
}
/*
 *	上传图片
 *	参数$fileinfo为上传图片信息
 *	$default_path为默认图片，当没有上传图片时使用
 *	$picture_path为上传的图片地址。要保存到数据库中的
 */
function uppic ($fileinfo){
	$p_type = array("jpg","jpeg","bmp","gif");
	$default_path = '../pics/null.jpg';
	$picture_path = '../pics/';
	$reback = false;
	if($fileinfo[size] > 0 and $fileinfo[size] < 700000){
		if(($postf = f_postfix($p_type,$fileinfo[name])) != false){
			$picture_path .= time().".".$postf;
			if($fileinfo[tmp_name]){
				move_uploaded_file($fileinfo[tmp_name],$picture_path);
				$reback = substr($picture_path,3,50);
			}
		}
	}else{
		$reback = substr($default_path,3,50);
	}
	return $reback;
}
?>