<?php session_start();
if($_SESSION[admin_user]==true){
include("../conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
-->
</style>
</head>
<body>
<form name="form1" method="post" action="ktlb_gl_ok.php" >
<table width="592" height="41" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#676767">
  
  <tr bgcolor="#EEEEEE">
    <td width="168" align="right"><span class="STYLE1">添加考题类别:</span></td>
    <td width="142"><input name="online_ktlb" type="text" id="online_ktlb" size="20" /></td>
    <td width="264"><input name="Submit" type="submit" value="考题类别" /></td>
    </tr>
</table>
</form>
<table width="594" height="49" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#676767">
  <tr bgcolor="#EEEEEE">
    <td width="158" align="center" class="STYLE1">类别标识</td>
    <td width="311" align="center" class="STYLE1">类别名称</td>
    <td width="103" align="center" class="STYLE1">操作</td>
  </tr>
  <?php $query=mssql_query("select * from tb_ktlb");
			while($myrow=mssql_fetch_array($query)){  
  ?>
  <tr bgcolor="#FFFFFF">
    <td align="center" class="STYLE1"><?php echo $myrow[ktlb_id]?></td>
    <td align="center" class="STYLE1"><?php echo $myrow[online_ktlb];?></td>
    <td align="center" class="STYLE1"><a href="ktlb_gl_ok.php?delete_ktlb=<?php echo $myrow[ktlb_id]?>">删除</a></td>
  </tr>
  <?php }?>
</table>
</body>
</html>

<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='checkadmin.php';</script>";
}

?>