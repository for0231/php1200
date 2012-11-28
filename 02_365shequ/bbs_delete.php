<?php
$id=$_GET[id];
include_once("conn/conn.php"); 
$query=mysql_query("select * from tb_reply where id='$id'",$conn);
$myrows=mysql_fetch_array($query);

$query=mysql_query("select * from tb_reply where bbsid='$id'",$conn);
$myrow=mysql_fetch_array($query);

if($myrows[photos]!=""){
  if(mysql_query("delete from tb_bbs where id='".$id."'",$conn)){
     unlink(".$myrows[photos]");
     
     if($myrow[photos]!=""){
        if(mysql_query("delete from tb_reply where bbsid='".$id."'",$conn)){
           unlink(".$myrow[photos]"); 
	       echo "<script>window.location.href='bbs_index.php';</script>";
        } 
      }else{
        if(mysql_query("delete from tb_reply where bbsid='".$id."'",$conn)){
	       echo "<script>window.location.href='bbs_index.php';</script>";
        } 
      }
}
}else{
 if(mysql_query("delete from tb_bbs where id='".$id."'",$conn)){
      if($myrow[photos]!=""){
         if(mysql_query("delete from tb_reply where bbsid='".$id."'",$conn)){
            unlink(".$myrow[photos]"); 
	       echo "<script>window.location.href='bbs_index.php';</script>";
           } 
      }else{
          if(mysql_query("delete from tb_reply where bbsid='".$id."'",$conn)){
	         echo "<script>window.location.href='bbs_index.php';</script>";
          } 
      }

}
}






?>