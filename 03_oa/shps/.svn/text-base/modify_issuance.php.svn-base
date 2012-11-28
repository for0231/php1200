<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
$i_sql = "select * from tb_iss where id = ".$_GET[id];
	$i_rst = mysql_query($i_sql,$conn);
	$i_rows = mysql_fetch_array($i_rst);
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<table width="765" border="1" cellpadding="0" cellspacing="0" class="big_td">
	<tr>
		<td height="33" background="../images/list.jpg" id="list">发布审核</td>
	</tr>
</table>
<form name="form1" method="post" action="modify_issuance_chk.php">
<table border="0" cellspacing="0" cellpadding="0" bgcolor="#DEEBEF">
  <tr>
    <td width="100" height="30" align="right" valign="middle" scope="col">主题：</td>
    <td height="30" align="left" valign="middle" scope="col"><input type="text" name="a_title" value="<?php echo $i_rows[i_title]; ?>"></td>
  </tr>
  <tr>
    <td align="right" valign="middle">内容：</td>
    <td align="left" valign="middle"><textarea name="a_content" cols="30" rows="5"><?php echo $i_rows[i_content]; ?></textarea></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle">
	<input type="hidden" name="id" value="<?php echo $_GET[id]; ?>">
	<input type="submit" value="修改">
	<input type="reset" value="重置">
	</td>
  </tr>
</table>
</form>