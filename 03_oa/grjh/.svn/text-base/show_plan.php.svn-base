<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
	$sqlstr = "select * from tb_plan where id=".$_GET[id];
	$result = mysql_query($sqlstr,$conn);
	$rows = mysql_fetch_row($result);
?>
<link href="../css/style.css" rel="stylesheet" />
<center>
<table border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td height="25"></td>
	</tr>
	<tr>
		<td width="300" align="center" valign="middle"><pre><?php echo $rows[1]; ?></pre></td>
	</tr>
</table>
</center>