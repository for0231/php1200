<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
$id=$_GET[id];
$hostname=$_SESSION[host];
$username=$_SESSION[user];
$userpwd=$_SESSION[pwd];
if(!$mbox=@imap_open("$hostname","$username","$userpwd")){
   echo "<script>alert('登录超时，请重新登录!');history.back();</script>";
   exit;
}
$structure= imap_fetchstructure($mbox,$id); 
$array=$structure->parts;

if(($array[1]->dparameters[0]->value)!=""){
  $filename=$array[1]->dparameters[0]->value;
}else{
  $filename=$array[1]->description;
}
if(strtolower(substr($filename,0,10))==strtolower("=?gb2312?B"))
   $filename=base64_decode(substr($filename,11,(strlen($filename)-13)));
header("Content-type:application/octet-stream");
header("Accept-ranges:bytes");
header("Accept-length:100");
header("Content-Disposition:attachment;filename=".$filename."");
$text=imap_fetchbody($mbox,$id,2);
echo imap_base64($text);
imap_close($mbox);
exit;
?>