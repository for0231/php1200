<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
if($_POST[submit]!=""){
$subject=$_POST[subject];
$mailbody=$_POST[mailbody];
$envelope["from"]=$_POST[fromuser];
$part1["type"] = TYPEMULTIPART;
$part1["subtype"] = "mixed";

$part2["type"] = TYPETEXT;
$part2["subtype"] = "plain";
$part2["encoding"] = ENCBINARY;
$part2["contents.data"] = "$mailbody\n\n\n\t";

$filename = $_FILES['upfile']['name'];
if($filename!=""){
$file=$_FILES['upfile']['tmp_name'];
$fp = @fopen($file, "r");
$contents = @fread($fp, @filesize($file));
@fclose($fp);

 if($_FILES['upfile']['type']){
    $mimeType = $_FILES['upfile']['type']; 
  }else{
    $mimeType ="application/unknown"; 
  }
  $part3["type"] = TYPEAPPLICATION;
  $part3["encoding"] = ENCBINARY;
  $part3["subtype"] = $mimeType;
  $part3["description"] = $filename;
  $part3["contents.data"] = $contents;
  }
 $body[1] = $part1;
 $body[2] = $part2;
 if($filename!=""){
   $body[3] = $part3;
 }
$message=imap_mail_compose($envelope, $body);
list($msgheader,$msgbody)=split("\r\n\r\n",$message,2);
  $data=trim($_POST[touser]);
  $datas=explode("*",$data);
$mail_date=date("Y-m-d H:i:s");            //获取时间
$ip=getenv('REMOTE_ADDR');            //获取IP地址
  while(list($name,$value)=each($datas)){
    $sendes=imap_mail($value,$subject,$msgbody,$msgheader);
include_once("conn/conn.php"); 
$sql="insert into tb_mail(mail_ip,mail_title,mail_formuser,mail_touser,mail_date)values('".$ip."','".$subject."','".$_POST[fromuser]."','".$value."','".$mail_date."')";
     $rs=new com("adodb.recordset");
     $rs->open($sql,$conn,3,1);




  }
if($sendes==true){
 echo "<script>alert('邮件发送成功!');history.back();</script>";
}else{
  echo "<script>alert('邮件发送失败!');history.back();</script>";
}

}
?> 



