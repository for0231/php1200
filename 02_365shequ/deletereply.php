<?php
$id=$_GET[id];
include_once("conn/conn.php");
$query=mysql_query("select * from tb_reply where id='$id'",$conn);
$myrow=mysql_fetch_array($query);
if($myrow[photos]!=""){
   if(mysql_query("delete from tb_reply where id='".$id."'",$conn)){
        unlink(".$myrow[photos]"); 
	       echo "<script>history.back();</script>";
    } 
}else{


if(mysql_query("delete from tb_reply where id='".$id."'",$conn))
 {
   echo "<script>history.back();</script>";
 }}

?>

