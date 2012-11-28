<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
if($_SESSION[username]=="")
 {
  echo "<script>alert('请先登录后才可以发送短信!');history.back();</script>"; 
  exit;
 }
  $ides=strval($_GET[ides]);
 
	    
  $arrayes=explode("@",$_SESSION[producelistes]);
  for($i=0;$i<count($arrayes)-1;$i++)
    {
	 if($arrayes[$i]==$ides)
	  {
	     echo "<script>alert('该电话号码已经被选中!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION[producelistes]=$_SESSION[producelistes].$ides."@";
  $_SESSION[quatityes]=$_SESSION[quatityes]."1@";
  
  header("location:indexs.php?lmbs=连接短信");
?> 