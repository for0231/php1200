<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include_once("conn/conn.php");
$sql=mysql_query("select top from tb_bbs where id='".$_GET["id"]."'",$conn);
$info=mysql_fetch_array($sql);
if($info[top]==1){
  mysql_query("update tb_bbs set top=0 where id='".$_GET["id"]."'",$conn);
}elseif($info[top]==0){
  mysql_query("update tb_bbs set top=1 where id='".$_GET["id"]."'",$conn);
}
echo "<script>alert('置上设置成功！');history.back();</script>";
?>
