<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
$hostname=$_SESSION[host];
$username=$_SESSION[user];
$userpwd=$_SESSION[pwd];
if(!$mbox=@imap_open("$hostname","$username","$userpwd")){
   echo "<script>alert('登录超时，请重新登录!');history.back();</script>";
   exit;
} 
$i=0;
while(list($name,$value)=each($_POST)){
  if(is_numeric($value)==true){
        $i+=$value;
		if(!@imap_delete($mbox,$value)){
		
		  echo "<script>alert('删除失败!');history.back();</script>";
		  exit;
		 
		}
  }		
}
if($i==0){
 echo "<script>alert('请选择要删除的邮件!');history.back();</script>";
 imap_close($mbox);
 exit;
}else{
  imap_expunge($mbox);
  imap_close($mbox);
  echo "<script>window.location.href='indexs.php?lmbs=删除'</script>";
}
?>