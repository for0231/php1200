<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	include "../inc/chec.php";
	include "../inc/func.php";
	$filename = show_file();
	for($num = 2;$num < count($filename);$num++){
		unlink("../bak/".$filename[$num]);
	}
	echo "<script>alert('删除成功！');location='data_stock.php'</script>";
?>