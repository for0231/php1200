<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
?>
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100" height="25" align="center" valign="middle" scope="col">公告日期</td>
    <td width="400" align="center" valign="middle" scope="col">标题</td>
  </tr>
<?php
	$sqlstr = "select * from tb_person";
	$result = mysql_query($sqlstr,$conn);
	while($rows = mysql_fetch_row($result)){
		echo "<tr>";
		echo "<td>".$rows[3]."</td>";
		echo "<td><a href='show_message.php?id=".$rows[0]."' target='_blank'>".$rows[1]."</a></td>";
		echo "</tr";
	}
?>
</table>
