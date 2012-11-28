<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
$title=$_POST[reply_title];
$content=$_POST[content1];
if($title==""){
 echo "<script>alert('请输入回复主题！');history.back();</script>";
 exit;
}

if($content==""){
 echo "<script>alert('请输入回复内容！');history.back();</script>";
 exit;
}


include_once("conn/conn.php");
$bbsid=$_POST[bbsid];
$sql0=mysql_query("select id from tb_user where usernc='".$_SESSION["unc"]."'",$conn);
$info0=mysql_fetch_array($sql0);
$userid=$info0[id];
$createtime=date("Y-m-j H:i:s");
 $link=date("YmjHis");
if($_FILES['bbs_photo']["name"]==true){         //上传图片,判断文件是否存在
  $photo_name=strtolower(stristr($_FILES["bbs_photo"]["name"],"."));                  //获取图片的后缀名,并且将字符转换成小写
  if($photo_name!=".gif" & $photo_name!=".jpg" & $photo_name!=".jpeg" ){ //判断文件和图片的格式是否符合要求
    echo "<script>alert('您上传的图片格式不正确!');history.back();</script>";
  }else{
    $paths1=$link.mt_rand(1000000,9999999).$photo_name;                                //创建图片的名称     
    $photos="./upfile/".$paths1;                                                       //创建图片的存储路径
    move_uploaded_file($_FILES['bbs_photo']["tmp_name"],$photos);                      //将图片存储到指定的文件夹下
if(mysql_query("insert into tb_reply(userid,bbsid,title,content,createtime,photo) values ('$userid','$bbsid','$title','$content','$createtime','$photos')",$conn))
		   {
		      mysql_query("update tb_bbs set lastreplytime='".$createtime."'",$conn);
			  echo "<script>alert('回复发表成功!');history.back();</script>";
              mysql_close($conn);
              exit;
		   } }
}else{
if(mysql_query("insert into tb_reply(userid,bbsid,title,content,createtime) values ('$userid','$bbsid','$title','$content','$createtime')",$conn))
		   {
		      mysql_query("update tb_bbs set lastreplytime='".$createtime."'",$conn);
			  echo "<script>alert('回复发表成功!');history.back();</script>";
              mysql_close($conn);
              exit;
		   } 


}
?>