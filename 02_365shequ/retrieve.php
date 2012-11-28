<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
$title=$_POST[bbs_title];
$content=$_POST[content1];

if($title==""){
 echo "<script>alert('请输入帖子主题！');history.back();</script>";
 exit;
}

if($content==""){
 echo "<script>alert('请输入帖子内容！');history.back();</script>";
 exit;
}

include_once("conn/conn.php");
 $sql=mysql_query("select * from tb_user where usernc='".$_SESSION["unc"]."'",$conn);
 $info=mysql_fetch_array($sql);
 $userid=$info[id];
 $typeid=$_POST[bbs_type];
 $title=$_POST[bbs_title];
 $content=$_POST[content1];
 $head=$_POST[bbs_head];
 //date_default_timezone_set("Asia/Hong_Kong");
 $createtime=date("Y-m-j H:i:s");
 $lastreplytime=$createtime;
 $readtimes=0;
 $link=date("YmjHis");
if($_FILES['bbs_photo']["name"]==true){         //上传图片,判断文件是否存在
  $photo_name=strtolower(stristr($_FILES["bbs_photo"]["name"],"."));                  //获取图片的后缀名,并且将字符转换成小写
  if($photo_name!=".gif" & $photo_name!=".jpg" & $photo_name!=".jpeg" ){ //判断文件和图片的格式是否符合要求
    echo "<script>alert('您上传的图片格式不正确!');history.back();</script>";
  }else{
    $paths1=$link.mt_rand(1000000,9999999).$photo_name;                                //创建图片的名称     
    $photos="./upfile/".$paths1;                                                       //创建图片的存储路径
    move_uploaded_file($_FILES['bbs_photo']["tmp_name"],$photos);                      //将图片存储到指定的文件夹下
if(mysql_query("insert into tb_bbs(userid,typeid,title,content,createtime,lastreplytime,head,readtimes,top,photo) values ('".$userid."','".$typeid."','".$title."','".$content."','".$createtime."','".$lastreplytime."','".$head."','".$readtimes."','0','$photos')",$conn))
 {
 mysql_query("update tb_user set pubtimes=pubtimes+1",$conn);
 echo "<script>alert('新帖发表成功!');history.back();</script>";
 mysql_close($conn);
 }
 else
  {
   echo "<script>alert('新帖发表失败!');history.back();</script>";
   mysql_close($conn);
  }}
}else{
if(mysql_query("insert into tb_bbs(userid,typeid,title,content,createtime,lastreplytime,head,readtimes,top) values ('".$userid."','".$typeid."','".$title."','".$content."','".$createtime."','".$lastreplytime."','".$head."','".$readtimes."','0')",$conn))
 {
 mysql_query("update tb_user set pubtimes=pubtimes+1",$conn);
 echo "<script>alert('新帖发表成功!');history.back();</script>";
 mysql_close($conn);
 }
 else
  {
   echo "<script>alert('新帖发表失败!');history.back();</script>";
   mysql_close($conn);
  }

}
?>

