<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<table width="765" border="0" cellpadding="0" cellspacing="0" class="big_td">
	<tr>
		<td height="33" background="../images/list.jpg" id="list">消息管理
		</td>
	</tr>
</table>
<table width="765" border="0" cellspacing="0" cellpadding="0" bgcolor="#DEEBEF" class="big_td">
  <tr>
    <td width="100" height="25" align="center" valign="middle" scope="col">发布时间</td>
    <td height="25" align="center" valign="middle" scope="col">标题</td>
	<td width="150" height="25" align="center" valign="middle" scope="col">操作</td>
  </tr>
<?php
	$sqlstr = "select id,p_time,p_title from tb_person";
	$result = mysql_query($sqlstr,$conn);
	while($rows = mysql_fetch_row($result)){
		echo "<tr>";
		for($i=1;$i<count($rows);$i++){
			echo "<td height=30 style='text-indent: 30px;'>".$rows[$i]."</td>";
		}
		echo "<td><a href='m_message.php?id=".$rows[0]."'>修改</a>/<a href='d_message_chk.php?id=".$rows[0]."' onclick='return del_mess();'>删除</a></td>";
		echo "</tr>";
	}
?>
<tr>
	<td height="30" align="right" valign="middle" colspan="3"><a href='add_manage.php' target="mainFrame">发布新消息</a></td>
</tr>
</table>
</center>