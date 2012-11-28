<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
$sqlstr = "select * from tb_company where id = 1";
	$result = mysql_query($sqlstr,$conn);
	$rows = mysql_fetch_row($result);
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<table width="768" border="1" cellpadding="0" cellspacing="0" class="big_td">
	<tr>
		<td height="36" background="../images/list.jpg" id="list">公司简介</td>
	</tr>
	<tr>
		<td height="25" align="center" valign="top">
			<textarea cols="90" rows="25" readonly="readonly"><?php echo $rows[2]; ?></textarea></td>
	</tr>
</table>
