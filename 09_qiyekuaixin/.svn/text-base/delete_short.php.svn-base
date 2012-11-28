<?php  
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include("conn/conn.php");
   $sql='delete from tb_short where short_id='.$_GET[lmbes].'';
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,3,3);
echo "<script>alert('短信记录删除成功！');window.location.href='indexs.php?lmbs=连接短信&lmlb=短信记录管理'</script>";
?>