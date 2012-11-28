<?php  
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include("conn/conn.php");
if($Submit=="提交"){
  $sql="insert into tb_note(note_content,note_category)values('".$note_content."','".$note_category."')";
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,3,1);
echo "<script>alert('短语添加成功！');history.back();</script>";

 }
?>