<?php session_start();?>
<head>
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
    <td height="510" align="center" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：读者管理 &gt; 读者档案管理 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
<?php 
include("conn/conn.php");
$sql=mysql_query("select r.id,r.barcode,r.name,t.name as typename,r.paperType,r.paperNO,r.tel,r.email from tb_reader as r join (select * from tb_readertype) as t on r.typeid=t.id");
$info=mysql_fetch_array($sql);
if($info==false){
?> <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center">暂无读者信息！</td>
            </tr>
          </table>
          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
      <a href="reader_add.php">添加读者信息</a> </td>
  </tr>
</table>
 <?php 
}else{
  ?> <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="87%">&nbsp;      </td>
<td width="13%">
      <a href="reader_add.php">添加读者信息</a></td>	  
  </tr>
</table>  
  <table width="96%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="13%">条形码</td>  
    <td width="10%">姓名</td>
    <td width="8%">读者类型</td>
    <td width="10%">证件类型</td>
    <td width="18%">证件号码</td>
    <td width="15%">电话</td>
    <td width="15%">E-mail</td>
    <td colspan="2">操作</td>
  </tr>
<?php 
do{
	?> <tr>
    <td style="padding:5px;"><?php echo $info[barcode];?> </td>  
    <td style="padding:5px;"><a href="reader_info.php?id=<?php echo $info[id]; ?> "><?php echo $info[name];?> </a></td>
    <td style="padding:5px;"><?php echo $info[typename];?> </td>
    <td align="center"><?php echo $info[paperType];?> </td>
    <td align="center"><?php echo $info[paperNO];?> </td>
    <td>&nbsp;<?php echo $info[tel];?> </td>
    <td align="left">&nbsp;<?php echo $info[email];?> </td>
    <td width="6%" align="center"><a href="reader_modify.php?id=<?php echo $info[id];?>">修改</a></td>
    <td width="5%" align="center"><a href="reader_del.php?id=<?php echo $info[id];?> ">删除</a></td>
  </tr>
<?php 
  }while($info=mysql_fetch_array($sql));
}
?> </table></td>
      </tr>
    </table></td>
  </tr>
</table><?php include("copyright.php");?></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
