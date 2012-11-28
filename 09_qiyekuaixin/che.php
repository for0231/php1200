<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
if($_SESSION[username]=="")
 {
  echo "<script>alert('请先登录后才可以发送短信!');history.back();</script>"; 
  exit;
 }
  $id=strval($_GET[id]);
 
	    
  $array=explode("@",$_SESSION[producelist]);
  for($i=0;$i<count($array)-1;$i++)
    {
	 if($array[$i]==$id)
	  {
	     echo "<script>alert('该电话号码已经被选中!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION[producelist]=$_SESSION[producelist].$id."@";
  $_SESSION[quatity]=$_SESSION[quatity]."1@";
  
  header("location:indexs.php?lmbs=连接短信");
?> 