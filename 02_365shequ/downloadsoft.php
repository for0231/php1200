<?php
$id=$_GET[id];
include_once("conn/conn.php");
$sql=mysql_query("select * from tb_soft where id='".$id."'",$conn);
$info=mysql_fetch_array($sql);
$path=$info[address];
if(file_exists($path)==false)
{
 echo "<script>alert('对不起，本站暂时停止提供该软件下载!');history.back();</script>";
 exit;
}else{
mysql_query("update tb_soft set click=click+1 where id='".$id."'",$conn);
echo mysql_error();
$filename=basename($path);
$file=fopen($path,"r");
header("Content-type:application/octet-stream");
header("Accept-ranges:bytes");
header("Accept-length:".filesize($path));
header("Content-Disposition:attachment;filename=".$filename);
echo fread($file,filesize($path));
fclose($file);
exit;}
?>