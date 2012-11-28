<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
if($_SESSION[username]=="")
 {
  echo "<script>alert('请先登录后才可以发送邮件!');history.back();</script>"; 
  exit;
 }
  $idss=strval($_GET[idss]);
 
	    
  $arrayss=explode("@",$_SESSION[producelistss]);
  for($i=0;$i<count($arrayss)-1;$i++)
    {
	 if($arrayss[$i]==$idss)
	  {
	     echo "<script>alert('该邮箱已经被选中!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION[producelistss]=$_SESSION[producelistss].$idss."@";
  $_SESSION[quatityss]=$_SESSION[quatityss]."1@";
  
  header("location:indexs.php?lmbs=发件箱");
?> 