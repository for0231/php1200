<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
</head>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
	<?php include("navigation.php");?>
	</td>
	</tr>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：读者管理 &gt; 读者类型管理 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
		<?php 
		include("conn/conn.php");
		$sql=mysql_query("select * from tb_readertype");
		$info=mysql_fetch_array($sql);
		if($info==false){
		?>
          <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center">暂无读者类型信息！</td>
            </tr>
          </table>
 <?php
}else{
 ?>
 <table width="91%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right">      
      <a href="#" onClick="window.open('readerType_add.php','','width=292,height=175')">添加读者类型信息</a> </td>
</tr>
</table>  
  <table width="91%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="35%">读者类型名称</td>
    <td width="35%">可借数量</td>
    <td width="14%">删除</td>
  </tr>
<?php 
do{
?> 
  <tr>
    <td style="padding:5px;">&nbsp;<?php echo $info[name];?></td>
    <td style="padding:5px;">&nbsp;<?php echo $info[number];?></td>
    <td align="center"><a href="readerType_del.php?id=<?php echo $info[id];?>">删除</a></td>
  </tr>
<?php
  }while($info=mysql_fetch_array($sql));
}
?>  
</table></td>
      </tr>
    </table>
</td>
  </tr>
</table><?php include("copyright.php");?></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
