<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<script src="../js/riq.js"></script>
<table width="765" border="1" cellpadding="0" cellspacing="0" class="big_td">
	<tr>
		<td height="33" background="../images/list.jpg" id="list">
		<?php
		if($_GET[u_id] == 9)
			echo "企业公告";
		elseif($_GET[u_id] == 10)
			echo "活动安排";
		?>
		</td>
	</tr>
</table>
<table width="765" border="1" cellpadding="0" cellspacing="0" bgcolor="#DEEBEF" class="big_td">
	<tr>
		<td width="100" height="25" align="center" valign="middle">发布时间</td>
		<td align="center" valign="middle">标题</td>
	</tr>
<?php
	if(isset($_GET[u_id])){
		$sqlstr = "select * from tb_person where u_id = ".$_GET[u_id];
		$result = mysql_query($sqlstr,$conn);
		while($rows = mysql_fetch_row($result)){
?>
	<tr>
		<td height=30 align=center valign=middle><?php echo $rows[3]; ?></td>
		<td style='text-indent: 30px;'>
		<a href="#" onclick="javascript:openWin=open('show_message.php?id=<?php echo $rows[0]; ?>','','width=300,height=200,scrollbars=no');"><?php echo $rows[1]; ?></a>
		</td>
	</tr>
<?php
		}}
?>
</table>