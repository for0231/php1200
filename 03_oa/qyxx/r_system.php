<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
	$sqlstr = "select * from tb_company where id != 1";
	$result = mysql_query($sqlstr,$conn);
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<table width="765" border="1" cellpadding="0" cellspacing="0" style="border: 1px solid #9CBED6; margin-top:15px; background-color:#CCCCCC;">
	<tr>
		<td height="36" background="../images/list.jpg" id="list">规章制度</td>
	</tr>
</table>
<table width="768" border="1" cellpadding="0" cellspacing="0" bgcolor="#DEEBEF" class="big_td">
	<tr>
<?php
	$num = 0;
	while($rows = mysql_fetch_row($result)){
		if($num < 6)
			echo "<td height=25 align=center valign=middle><a href='?id=".$rows[0]."'>".$rows[1]."</a></td>";
		else{
			echo "<tr>";
			echo "<td height=25 align=center valign=middle><a href='?id=".$rows[0]."'>".$rows[1]."</a></td>";
		}
		$num++;
	}
?>
	</tr>
</table>
<table width="768" border="0" cellpadding="0" cellspacing="0" bgcolor="#DEEBEF">
	<tr>
		<td align="center" valign="top">
		<?php
		if(isset($_GET[id])){
			$f_sql = "select * from tb_company where id = ".$_GET[id];
			$f_rst = mysql_query($f_sql,$conn);
			$f_rows = mysql_fetch_row($f_rst);
			echo "<textarea readonly='readonly' cols=90 rows=25>".$f_rows[2]."</textarea>";
		}
		?></td>
	</tr>
</table>