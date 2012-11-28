<?php include("conn/conn.php");		//连接数据库
	if($delete==true){					//判断提交的变量值是否为真
		//根据$_GET获取的变量值为依据，执行删除语句
		$query=mysql_query("delete from tb_customer  where customer_id='$_GET[delete]'");
		if($query){
			echo "<script> alert('客户信息删除成功');window.location.href='indexs.php?lmbs=客户信息管理';</script>";
		}
	}
?>