<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../conn/conn.php";
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<form name="form1" method="post" action="set_time_chk.php">
<table border="0" cellspacing="0" cellpadding="0" background="../images/bg.jpg">
  <tr>
    <td width="150" height="25" align="center" valign="middle">上班签到</td>
    <td width="150" height="25" align="center" valign="middle">下班签退</td>
    <td width="150" height="25" align="center" valign="middle">加班签到</td>
	<td width="150" height="25" align="center" valign="middle">加班签退</td>
  </tr>
<?php
	$sqlstr = "select * from tb_setup";
	$result = mysql_query($sqlstr,$conn);
	$num = 0;
?>
  <tr>
<?php
	while($rows = mysql_fetch_row($result)){
?>
    <td height="30" align="center" valign="middle">
	<input type="text" name="l_time<?php echo $num;?>" value="<?php echo $rows[2]; ?>" size=15></td>
<?php
	$num++;
	}
?>
  </tr>
  <tr>
    <td height="30" align="center" valign="middle"><input type="submit" name="u_logo" value="设置"></td>
    <td height="30" align="center" valign="middle"><input type="submit" name="d_logo" value="设置"></td>
    <td height="30" align="center" valign="middle"><input type="submit" name="a_logo" value="设置"></td>
    <td height="30" align="center" valign="middle"><input type="submit" name="q_logo" value="设置"></td>
  </tr>
</table>
</form>