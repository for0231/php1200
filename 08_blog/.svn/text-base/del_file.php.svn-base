<?php   
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();      
	include "check_login.php";
	include "Conn/conn.php";
    $sql="delete from tb_article where id=".$file_id;
    $result=mysql_query($sql,$link);
	if($result){
		$sql1 = "delete from tb_filecomment where fileid = ".$file_id;
		$rst1 = mysql_query($sql1,$link);
		if($rst1)
			echo "<script>alert('博客文章已被删除!');location='$_SERVER[HTTP_REFERER]';</script>";
		else
			echo "<script>alert('删除失败!');history.go(-1);</script>";
	}
	else{	
		echo "<script>alert('博客文章删除操作失败!');history.go(-1);</script>";
	}	
?> 



