<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include "../conn/conn.php";
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<form id="pl" name="pl" method="post" action="p_login_chk.php">
<table background="../images/bg.jpg"  width="420" height="260" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td height="50" align="right" valign="middle">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	  <td height="25" align="right" valign="middle" headers="25">姓名：</td>
      <td height="30"><input type="text" name="u_name" value="<?php echo $_SESSION[u_name]; ?>" readonly="readonly" /></td>
	</tr>
	<tr>
		<td align="right" valign="middle">登记类型：</td>
		<td height="30">
		<select name="u_type">
<?php
		if($_GET[r_id] == 14){
?>
			<option value="1">上班</option>
			<option value="0">下班</option>
<?php
		}else if($_GET[r_id] == 15){
?>
			<option value="4">病假</option>
			<option value="5">事假</option>
<?php
		}else if($_GET[r_id] == 16){
?>
			<option value="2">加班签到</option>
			<option value="3">加班签退</option>
<?php
		}
?>
	</select>		</td>
	</tr>
	<tr>
		<td align="right" valign="middle">备注：</td>
		<td><textarea name="r_remark" rows="5"></textarea></td>
	</tr>
	<tr>
		<td height="30" colspan="2" align="center" valign="middle">
		<input type="hidden" name="r_id" value="<?php echo $_GET[r_id]; ?>" />
		<input type="submit" value="登记"></td>
	</tr>
</table>
</form>