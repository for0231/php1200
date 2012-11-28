<?php include("navigation.php");?>
<html>
<head>
<title>图书馆管理系统</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：系统设置 &gt; 书架设置 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
<?php
include("conn/conn.php");       //连接数据源信息
$sql=mysql_query("select * from tb_bookcase order by id desc");      //查询图书书架信息表中的数据信息
$info=mysql_fetch_array($sql);      //执行SQL语句
if($info==false){      //如果图书书架信息表中为空值，则弹出“暂无书架信息”
?>
          <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center">暂无书架信息！</td>
            </tr>
          </table>
          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
      <a href="#" onClick="window.open('bookcase_add.jsp','','width=292,height=175')">添加书架信息</a> </td>
  </tr>
</table>
 <?
}else{   //否则输出书架信息
  ?>
 <table width="91%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="84%">&nbsp;      </td>
<td width="16%" align="right">
      <a href="#" onClick="window.open('bookcase_add.php','','width=292,height=175')">添加书架信息&nbsp;</a> </td>	  
  </tr>
</table>  
  <table width="91%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="84%">书架名称</td>
    <td width="16%">删除</td>
  </tr>
<?php
	do{    //应用do...while循环语句输出图书书架信息
?> 
  <tr>
    <td style="padding:5px;"><?php echo $info[name];?></td>
    <td align="center"><a href="bookcase_del.php?id=<?php echo $info[id];?>">删除</a></td>
  </tr>
<?
  }while($info=mysql_fetch_array($sql));          //do...while循环语句结束
}
?>  
</table></td>
      </tr>
    </table>
</td>
  </tr>
</table>
<?php include("copyright.php");?>
</td>
  </tr>
</table>
</body>
</html>
