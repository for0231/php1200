<?php
session_start();
$id=$_GET["id"];
$arrayid=explode("@",$_SESSION["goodsid"]);
$arraynum=explode("@",$_SESSION["goodsnum"]);
$key=array_search($id,$arrayid);
$arrayid[$key]="";
$arraynum[$key]="";
$_SESSION["goodsid"]=implode("@",$arrayid);
$_SESSION["goodsnum"]=implode("@",$arraynum);
echo "<script>window.location.href='shopping_cart.php';</script>";
?>