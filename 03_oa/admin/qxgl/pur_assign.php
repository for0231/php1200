<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
	$sqlstr = "select id,f_name,o_group from tb_list";
?>
<script src="../js/admin_js.js"></script>
<link href="../css/style.css" rel="stylesheet">
<table width="765" height="450" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #9CBED6; margin-top:15px;">
<tr><td align="center" valign="middle">
<table border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="75" height="20" align="center" valign="middle">功能</td>
		<td width="75" height="20" align="center" valign="middle">开放组</td>
		<td width="75" height="20" align="center" valign="middle">操作</td>
	</tr>
<?php
	$result = mysql_query($sqlstr,$conn);
	while($rows = mysql_fetch_row($result)){
		echo "<tr>";
		for($i = 1;$i < count($rows); $i++){
			echo "<td align=center valign=middle>".$rows[$i]."</td>";
		}
		echo "<td align=center valign=middle><a href='modify_assign.php?id=".$rows[0]."'>修改</a></td>";
		echo "</tr>";
	}
?>
</table>
</td></tr></table>