<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
	include "../inc/func.php";
?>
<script src="../js/admin_js.js"></script>
<link href="../css/style.css" rel="stylesheet">
<table width="765" height="450" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #9CBED6; margin-top:15px;">
<tr><td align="center" valign="middle">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="20" align="center" valign="middle">序号</td>
    <td height="20" align="center" valign="middle">账号</td>
    <td height="20" align="center" valign="middle">姓名</td>
    <td height="20" align="center" valign="middle">部门</td>
    <td height="20" align="center" valign="middle">禁用</td>
    <td height="20" align="center" valign="middle">开启</td>
  </tr>
<?php
	$sqlstr = "select id,u_user,u_name,u_depart,is_on from tb_users";
	$result = mysql_query($sqlstr,$conn);
	while($rows = mysql_fetch_row($result)){
?>

	<tr>
		<td height="25" align="center" valign="middle"><?php echo $rows[0]; ?></td>
		<td align="center" valign="middle"><?php echo $rows[1]; ?></td>
		<td align="center" valign="middle"><?php echo $rows[2]; ?></td>
		<td align="center" valign="middle"><?php echo read_field($conn,"tb_depart","d_name",$rows[3]); ?></td>
<?php if($rows[4] == 1){ ?>
		<td align="center" valign="middle"><a href="modify_purview_chk.php?id=<?php echo $rows[0]; ?>&is_on=0">禁用</a></td>
		<td align="center" valign="middle">开启</td>
<?php }else{ ?>
		<td align="center" valign="middle">禁用</td>
		<td align="center" valign="middle"><a href="modify_purview_chk.php?id=<?php echo $rows[0]; ?>&is_on=1">开启</a></td>
<?php } ?>
	</tr>
<?php } ?>
</table>
</td></tr></table>