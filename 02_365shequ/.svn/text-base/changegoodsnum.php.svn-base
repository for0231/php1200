<?php
session_start();
$id=$_POST["id"];
$num=$_POST["goodsnum"];
if($num==""){
 echo "<script>alert('数量不能为空!');history.back();</script>";
 exit;
}elseif(!is_numeric($num)){
 echo "<script>alert('数量只能为数字!');history.back();</script>";
 exit;
}
$arrayid=explode("@",$_SESSION["goodsid"]);
$arraynum=explode("@",$_SESSION["goodsnum"]);
$key=array_search($id,$arrayid);
$arraynum[$key]=$num;
$_SESSION["goodsnum"]=implode("@",$arraynum);
echo "<script>window.location.href='shopping_cart.php';</script>";
?>