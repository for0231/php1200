<?php session_start();

include("conn/conn.php");
if($_SESSION[online_number]!=""){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12}
-->
</style>
</head>
<body>
<table width="592" height="103" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#676767">
 <form name="form1" method="post" action="index.php?online=成绩查询" >
 <tr>
    <td width="165" bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" align="center" bgcolor="#FFFFFF"><span class="STYLE1">考试科目：
        <select name="select">
          <?php $querys=mssql_query("select * from tb_ktlb");
	  while($myrows=mssql_fetch_array($querys)){
	  ?>
          <option value="<?php echo $myrows[online_ktlb];?>"><?php echo $myrows[online_ktlb];?></option>
          <?php  } ?>
          </select>
    </span></td>
    <td width="203" bgcolor="#FFFFFF"><input name="Submit" type="submit" value="提交" /></td>
  </tr>
  </form>
  <tr>
    <td align="center" bgcolor="#EEEEEE"><span class="STYLE1">准考证号</span></td>
    <td width="76" align="center" bgcolor="#EEEEEE"><span class="STYLE1">考试科目</span></td>
    <td width="120" align="center" bgcolor="#EEEEEE"><span class="STYLE1">考试时间</span></td>
    <td align="center" bgcolor="#EEEEEE"><span class="STYLE1">考试分数</span></td>
  </tr>
 <?php $query=mssql_query("select * from tb_user where online_number='".$_SESSION[online_number]."' and online_subject='$select'");
 if(mssql_num_rows($query)<1){
 echo "<span class='STYLE1'>您没有该科目的成绩！</span>";
 }else{
 while($myrow=mssql_fetch_array($query)){
 ?>
  <tr>
    <td bgcolor="#FFFFFF"><span class="STYLE1"><?php echo $myrow[online_number];?></span></td>
    <td bgcolor="#FFFFFF"><span class="STYLE1"><?php echo $myrow[online_subject];?></span></td>
    <td bgcolor="#FFFFFF"><span class="STYLE1"><?php echo $myrow[online_date];?></span></td>
    <td bgcolor="#FFFFFF"><span class="STYLE1"><?php echo $myrow[online_grade];?></span></td>
  </tr>
<?php }}?>
</table>
</body>
</html>
<?php
}else{
echo "<script> alert('请您正确登录!'); window.location.href='index.php?online=用户登录';</script>";
}
?>