<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
if($_SESSION[username]=="")
 {
  echo "<script>alert('请先登录后才可以发送短信!');history.back();</script>"; 
  exit;
 }
  $ids=strval($_POST[new_tel]);
 
if(preg_match("/^(\d{11})$/",$new_tel,$counts)){ 
    
  $arrays=explode("@",$_SESSION[producelists]);
  for($i=0;$i<count($arrays)-1;$i++)
    {
	 if($arrays[$i]==$ids)
	  {
	     echo "<script>alert('该电话号码已经被选中!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION[producelists]=$_SESSION[producelists].$ids."@";
  $_SESSION[quatitys]=$_SESSION[quatitys]."1@";
  
  header("location:indexs.php?lmbs=连接短信");
}else{
         echo "<script>alert('您输入的电话号码的格式不正确!!');history.back()</script>";
}
?> 