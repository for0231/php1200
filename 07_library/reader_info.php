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
        <td height="22" valign="top" class="word_orange">当前位置：读者管理 &gt; 读者档案管理 &gt; 查看读者信息 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="100%" height="493"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top">
<?php
	include("conn/conn.php");
	$sql=mysql_query("select r.id,r.barcode,r.name,t.name as typename,r.vocation,r.birthday,r.paperType,r.paperNO,r.tel,r.email,r.remark  from tb_reader as r join (select * from tb_readertype) as t on r.typeid=t.id where r.id='$_GET[id]'");
	$info=mysql_fetch_array($sql);
?>
	<table width="600" height="432"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="173" align="center">姓名：</td>
        <td width="427" height="39">
          <input name="name" type="text" value="<?php echo $info[name];?>"> 
         </td>
      </tr>
      <tr>
        <td width="173" align="center">性别：</td>
        <td height="35">
<?php 
if($info[sex]=="男"){
?>
		  <input name="sex" type="radio" class="noborder" id="radiobutton"  value="男" checked>男
<?php 
}else{
?>
          <input name="sex" type="radio" class="noborder" value="女" checked>女
<?php }?>
          </td>
      </tr>
      <tr>
        <td align="center">条形码：</td>
        <td><input name="barcode" type="text" id="barcode" value="<?php echo $info[barcode];?>">
 </td>
      </tr>
      <tr>
        <td align="center">读者类型：</td>
        <td><input name="typename" type="text" id="typename" value="<?php echo $info[typename];?>"></td>
      </tr>
      <tr>
        <td align="center">职业：</td>
        <td><input name="vocation" type="text" id="vocation" value="<?php echo $info[vocation];?>"></td>
      </tr>
      <tr>
        <td align="center">出生日期：</td>
        <td><input name="birthday" type="text" id="birthday" value="<?php echo $info[birthday];?>"></td>
      </tr>
      <tr>
        <td align="center">有效证件：</td>
        <td><input name="paperType" type="text" id="paperType" value="<?php echo $info[paperType];?>"></td>
      </tr>
      <tr>
        <td align="center">证件号码：</td>
        <td><input name="paperNO" type="text" id="paperNO" value="<?php echo $info[paperNO];?>"> 
           </td>
      </tr>
      <tr>
        <td align="center">电话：</td>
        <td><input name="tel" type="text" id="tel" value="<?php echo $info[tel];?>"></td>
      </tr>
      <tr>
        <td align="center">E-mail：</td>
        <td><input name="email" type="text" id="email" value="<?php echo $info[email];?>" size="50">
          </td>
      </tr>
      <tr>
        <td align="center">备注：</td>
        <td><textarea name="remark" cols="60" rows="6" class="wenbenkuang" id="remark"><?php echo $info[remark];?></textarea></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td>
  <input name="Submit2" type="button" class="btn_grey" value="返回" onClick="history.back()"></td></tr>
    </table>
	</td>
  </tr>
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
