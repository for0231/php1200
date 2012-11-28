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
	<td bgcolor="#FFFFFF">
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：系统设置 &gt; 参数设置 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="84%">&nbsp;      </td>
</tr>
</table>  <form name="form1" method="post" action="parameterModify_ok.php">
<?php
include("conn/conn.php");
$sql=mysql_query("select * from tb_parameter");
$info=mysql_fetch_object($sql);
?>
  <table width="43%"  border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center">
    <td width="24%" align="left" style="padding:5px;">办证费：</td>
    <td width="76%" align="left">
      <input name="cost" type="text" id="cost" value="<?php echo $info->cost; ?>" size="30">
      (元)    </td>
    <tr>
    <td align="left" style="padding:5px;">有效期限：</td>
    <td align="left"><input name="validity" type="text" id="validity" size="30" value="<?php echo $info->validity; ?>" >
      (月)</td>
    </tr>
    <tr>
      <td height="65" align="left" style="padding:5px;">&nbsp;</td>
      <td><input name="Submit" type="submit" class="btn_grey" value="保存">
        &nbsp;
        <input name="Submit2" type="reset" class="btn_grey" value="取消"></td>
    </tr>
</table>
</form></td>
      </tr>
    </table>
</td>
  </tr>
</table></td>
  </tr>
</table><?php include("copyright.php");?></td>
  </tr>
</table>
</body>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
