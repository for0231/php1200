<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../conn/conn.php";
	$sqlstr = "select * from tb_plan where id=".$_GET[id];
	$result = mysql_query($sqlstr,$conn);
	$rows = mysql_fetch_row($result);
?>
<link rel="stylesheet" href="../css/style.css" />
<table border="1" cellpadding="0" cellspacing="0" class="big_td">
	<tr>
		<td width="300" align="center" valign="middle" height="25"><?php echo $rows[1]; ?></td>
	</tr>
</table>