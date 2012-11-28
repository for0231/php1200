<?php session_start();?>
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
        <td height="22" valign="top" class="word_orange">当前位置：系统设置 &gt; 管理员设置 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
<?php
include("conn/conn.php");
$sql=mysql_query("select m.id,m.name,p.sysset,p.readerset,p.bookset,p.borrowback,p.sysquery from tb_manager as m left join (select * from tb_purview)as p on m.id=p.id");
$info=mysql_fetch_array($sql);
if($info==false){
?>
          <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center">暂无管理员信息！</td>
            </tr>
          </table>
          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
      <a href="#" onClick="window.open('manager_add.php','','width=292,height=175')">添加管理员信息</a> </td>
  </tr>
</table>
 <?php
}else{
 ?>
 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="84%">&nbsp;      </td>
<td width="16%">
      <a href="#" onClick="window.open('manager_add.php','','width=292,height=175')">添加管理员信息</a> </td>	  
  </tr>
</table>  
  <table width="91%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="26%">管理员名称</td>
    <td width="12%">系统设置</td>
    <td width="12%">读者管理</td>
    <td width="12%">图书档案管理</td>
    <td width="11%">图书借还</td>
    <td width="11%">系统查询</td>
    <td width="8%">权限设置</td>
    <td width="8%">操作</td>
  </tr>
<?php do{?> 
  <tr>
    <td style="padding:5px;"><?php echo $info[name];?></td>
    <td align="center"><input name="checkbox" type="checkbox" class="noborder" value="checkbox" disabled="disabled" <?php if($info[sysset]==1){echo ("checked");}?>></td>
    <td align="center"><input name="checkbox" type="checkbox" class="noborder" value="checkbox" disabled="disabled" <?php if($info[readerset]==1){echo("checked");}?>></td>
    <td align="center"><input name="checkbox" type="checkbox" class="noborder" value="checkbox" disabled <?php if($info[bookset]==1){echo("checked");}?>></td>
    <td align="center"><input name="checkbox" type="checkbox" class="noborder" value="checkbox" disabled <?php if($info[borrowback]==1){echo("checked");}?>></td>
    <td align="center"><input name="checkbox" type="checkbox" class="noborder" value="checkbox" disabled <?php if($info[sysquery]==1){echo("checked");}?>></td>
    <td align="center"><a href="#" onClick="window.open('manager_modify.php?id=<?php echo $info[id]; ?>','','width=292,height=175')">权限设置</a></td>
    <td align="center"><a href="manager_del.php?id=<?php echo $info[id];?>">删除</a></td>
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
