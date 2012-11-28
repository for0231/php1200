<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include "../conn/conn.php";
include "../inc/chec.php";
include "../inc/func.php";
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<table width="765" border="0" cellspacing="0" cellpadding="0" class="big_td">
<form action="t_back_chk.php" method="post" name="tback" id="tback">
  <tr>
    <td width="100" height="25" align="right" valign="middle" scope="col">回复主题：</td>
    <td height="25" align="left" valign="middle" scope="col">
	<input type="text" name="t_title" id="t_title" value="<?php echo read_field($conn,"tb_lyb","l_title",$_GET[id]); ?>" readonly="readonly" >
	</td>
  </tr>
  <tr>
    <td align="right" valign="middle">回复内容</td>
    <td align="left" valign="middle">
	<textarea name="r_back" id="r_back" cols="75" rows="10"></textarea>
	</td>
  </tr>
  <tr>
  	<td colspan="2" align="center">
	<input type="hidden" name="id" value="<?php echo $_GET[id]; ?>">
	<input type="submit" value="回复" onClick="return re_back();"></td>
  </tr>
</form>
</table>