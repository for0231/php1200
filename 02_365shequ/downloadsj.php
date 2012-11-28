<?php	include_once("conn/conn.php");
$xzid=$_POST[xzid];
$bbid=$_POST[bbid];
$pid=$_POST[pid];
$sid=$_POST[sid];
$xlh=$_POST[xlh];
$sql0=mysql_query("select * from tb_xlh where xlh='".$xlh."' and id='".$xzid."'",$conn);
$info0=mysql_fetch_array($sql0);
if($info0==false){
  echo"<script>alert('对不起，序列号输入错误!');window.location.href='sjxz.php?id=".$pid."';</script>";
  exit;
}

if((time()-$info0[lastdowntime])<259200){
  echo"<script>alert('对不起，您已于".date("Y-m-d H:i:s",$info0[lastdowntime])."日对该编程词典进行了升级，请于该时间起3日后再下载升级包！');window.location.href='sjxz.php?id=".$pid."';</script>";
  exit;
  
}



$sql=mysql_query("select * from tb_sjxz where id='".$sid."'",$conn);
$info=mysql_fetch_array($sql);
$path=$info[address];
if(file_exists($path)==false)
{
 echo "<script>alert('对不起，本站暂时停止提供该升级包下载!');window.location.href='sjxz.php?id=".$pid."';</script>";
 exit;
}
mysql_query("update tb_sjxz set click=click+1 where id='".$sid."'",$conn);
mysql_query("update tb_xlh set lastdowntime='".time()."' where id='".$xzid."'");
$filename=basename($path);
$file=fopen($path,"r");
header("Content-type:application/octet-stream");
header("Accept-ranges:bytes");
header("Accept-length:".filesize($path));
header("Content-Disposition:attachment;filename=".$filename);
echo fread($file,filesize($path));
fclose($file);
exit;
?>