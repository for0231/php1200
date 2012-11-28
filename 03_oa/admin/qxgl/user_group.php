<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
?>
<script src="../js/admin_js.js"></script>
<link href="../css/style.css" rel="stylesheet">
<table width="765" height="450" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #9CBED6; margin-top:15px;">
<tr><td align="center" valign="middle">
如果想添加新组，请单击<a href="./add_group.php">这里</a>
<table border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="75" height="25" align="center" valign="middle">用户组</td>
		<td height="25" align="center" valign="middle">组成员</td>
		<td width="75" height="25" align="center" valign="middle">操作</td>
	</tr>
<?php
	$sqlstr =  "select * from tb_group";
	$result = mysql_query($sqlstr,$conn);
	while($rows = mysql_fetch_row($result)){
		echo "<tr>";
		echo "<td height=25>".$rows[1]."</td>";
		echo "<td><div>".$rows[2]."</div></td>";
		echo "<td align='center'><a href='modify_group.php?id=".$rows[0]."'>修改</a>/<a href='del_group_chk.php?id= ".$rows[0]."' onclick='return chk_del();'>删除</a></td></tr>";
	}
?>
</table>
</td></tr></table>