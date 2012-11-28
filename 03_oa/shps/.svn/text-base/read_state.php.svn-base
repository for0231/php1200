<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include "../conn/conn.php";
$i_sql = "select * from tb_iss where id = ".$_GET[id];
$i_rst = mysql_query($i_sql,$conn);
$i_rows = mysql_fetch_array($i_rst);
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js" language="javascript"></script>
<table border="0" cellspacing="0" cellpadding="0">
<form name="form1" method="post" action="read_state_chk.php">
  <tr>
    <td width="100" height="30" align="right" valign="middle" scope="col">主题：</td>
    <td height="30" align="left" valign="middle" scope="col"><input type="text" name="a_title" value="<?php echo $i_rows[i_title]; ?>" readonly="readonly"></td>
  </tr>
  <tr>
    <td align="right" valign="middle">内容：</td>
    <td align="left" valign="middle"><textarea name="a_content" cols="30" rows="5" readonly="readonly"><?php echo $i_rows[i_content]; ?></textarea></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle">
	<input type="hidden" name="id" value="<?php echo $_GET[id]; ?>">
	<input type="radio" name="a_state" value="0"/>通过审核
	<input type="radio" name="a_state" value="1"/>未通过审核
	</td>
  </tr>
  <tr>
  	<td height="30" colspan="2" align="center" valign="middle">
	<input type="submit" value="提交" />
	</td>
  </tr>
  </form>
</table>
