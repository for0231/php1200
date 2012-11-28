<?php include("conn/conn.php");
if($_SESSION[online_number]!=""){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>在线考试系统</title>
<style type="text/css">
<!--
.STYLE2 {font-size: 12px}
-->
</style>
</head>
<body>
<form name="form2" method="post" action="index.php?online=开始考试">
<table width="592" height="30" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  
  <tr>
    <td width="592" align="right" bgcolor="#FFFFFF"><span class="STYLE2">考题类别
        <select name="kt_lbes" id="kt_lbes">
          <option selected="selected">选择考题类别</option>
          <?php  $query=mssql_query("select * from tb_ktlb");
	while($myrow=mssql_fetch_array($query)){
	?>
          <option value="<?php echo $myrow[online_ktlb];?>"><?php echo $myrow[online_ktlb];?></option>
          <?php }?>
          </select>
    </span></td>
    <td width="592" align="center" bgcolor="#FFFFFF"><span class="STYLE2">选择套题
        <select name="kt_small_lb" id="kt_small_lb">
          <option selected="selected">请选择套题</option>
          <option value="第一套题">第一套题</option>
          <option value="第二套题">第二套题</option>
          <option value="第三套题">第三套题</option>
          <option value="第四套题">第四套题</option>
          </select>
      </span></td>
    <td width="592" bgcolor="#FFFFFF"><span class="STYLE2">
      <input type="submit" name="Submit" value="开始考试" />

      <?php 
$dates=mktime();
session_register("dates")==$dates;
?>
    </span></td>
  </tr>
</table>
</form>
</body>
</html>
<?php
}else{
echo "<script> alert('请您正确登录!'); window.location.href='index.php?online=用户登录';</script>";
}
?>