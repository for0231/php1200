<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<?php
include("conn/conn.php");
$id=$_GET[id];
$sql=mysql_query("select borr.*,reader.*,rt.* from tb_borrow as borr join tb_reader as reader on borr.readerid=reader.typeid join tb_readertype as rt on reader.typeid=rt.id where rt.id='$id'");
$info=mysql_fetch_array($sql);
if($info==false){
	$query=mysql_query("delete from tb_readerType where id='".$_GET[id]."'");
	echo "<script language='javascript'>alert('读者类型删除成功！');history.go(-1);</script>";
}else{
	echo "<script language='javascript'>alert('读者类型删除操作失败！');history.go(-1);</script>";
}
?>
