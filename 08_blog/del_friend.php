<?php     
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式    
	include "Conn/conn.php";
    $sql="delete from tb_friend where id=".$friend_id;
    $result=mysql_query($sql);
	if($result){
		echo "<script>alert('您的好友已被删除!');location='browse_fri.php';</script>";
	}
	else{	
		echo "<script>alert('删除操作失败!');history.go(-1);</script>";
	}	
?> 



