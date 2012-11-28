<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
 $arraysp=explode("@",$_SESSION[producelist]);
 $arraysl=explode("@",$_SESSION[quatity]);
 $arraysp1=explode("@",$_SESSION[producelists]);
 $arrays2=explode("@",$_SESSION[quatitys]);

 $arraysp3=explode("@",$_SESSION[producelistss]);
 $arrays4=explode("@",$_SESSION[quatityss]);


for($i=0;$i<count($arraysp);$i++)
 {
	  $arraysp[$i]="";
	  $arraysl[$i]="";
 }
for($i=0;$i<count($arraysp1);$i++)
 {
	  $arraysp1[$i]="";
	  $arraysl2[$i]="";
 }

for($i=0;$i<count($arraysp3);$i++)
 {
	  $arraysp3[$i]="";
	  $arraysl4[$i]="";
 }


$_SESSION[producelist]=implode("@",$arraysp);
$_SESSION[quatity]=implode("@",$arraysl);

$_SESSION[producelists]=implode("@",$arraysp1);
$_SESSION[quatitys]=implode("@",$arrays2);

$_SESSION[producelistss]=implode("@",$arraysp3);
$_SESSION[quatityss]=implode("@",$arraysl4);

header("location:indexs.php?lmbs=连接短信");
?>
