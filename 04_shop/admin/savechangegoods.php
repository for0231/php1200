<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include("conn/conn.php");
$mingcheng=$_POST[mingcheng];
$nian=$_POST[nian];
$yue=$_POST[yue];
$ri=$_POST[ri];
$shichangjia=$_POST[shichangjia];
$huiyuanjia=$_POST[huiyuanjia];
$typeid=$_POST[typeid];
$dengji=$_POST[dengji];
$xinghao=$_POST[xinghao];
$pinpai=$_POST[pinpai];
$tuijian=$_POST[tuijian];
$shuliang=$_POST[shuliang];
//$upfile=$_POST[upfile];

 if(ceil(($huiyuanjia/$shichangjia)*100)<=80)
 {
 
    $tejia=1;
 }
 else
 {
    $tejia=0;
 }
if($upfile!="")
{
$sql=mysql_query("select * from tb_shangpin where id=".$_GET[id]."",$conn);
$info=mysql_fetch_array($sql);
@unlink(substr($info[tupian],6,(strlen($info[tupian])-6)));
}

function getname($exname){
   $dir = "upimages/";
   $i=1;
   if(!is_dir($dir)){
      mkdir($dir,0777);
   }
   
   while(true){
       if(!is_file($dir.$i.".".$exname)){
	       $name=$i.".".$exname;
	       break;
	   }
	   $i++;
	 }

   return $dir.$name;
}

$exname=strtolower(substr($_FILES['upfile']['name'],(strrpos($_FILES['upfile']['name'],'.')+1)));
$uploadfile = getname($exname);

move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile);

$uploadfile="admin/".$uploadfile;

$jianjie=$_POST[jianjie];
$addtime=$nian."-".$yue."-".$ri;

mysql_query("update tb_shangpin set mingcheng='$mingcheng',jianjie='$jianjie',addtime='$addtime',dengji='$dengji',xinghao='$xinghao',tupian='$uploadfile',typeid='$typeid',shichangjia='$shichangjia',huiyuanjia='$huiyuanjia',pinpai='$pinpai',tuijian='$tuijian',shuliang='$shuliang' where id=".$_GET[id]."",$conn);
echo "<script>alert('商品".$mingcheng."修改成功!');history.back();;</script>";
?>