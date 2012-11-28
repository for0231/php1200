<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
	$sqlstr = "select * from tb_superson";
	$result = mysql_query($sqlstr,$conn);
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<table width="765" border="1" cellpadding="0" cellspacing="0" class="big_td">
	<tr>
		<td height="33" background="../images/list.jpg" id="list">优秀员工</td>
	</tr>
</table>
<table width="765" border="1" cellpadding="0" cellspacing="0" class="big_td">
<?php 
	while($rows = mysql_fetch_row($result)){
?>
	<tr>
		<td height="25" width="300"><a href="?cont=<?php echo $rows[3]; ?>"><?php echo $rows[1]; ?> 到 <?php echo $rows[2]; ?>优秀员工</a></td>
		<td width="25" align="center" valign="middle"><a href="del_exc_chk.php?id=<?php echo $rows[0] ?>">删除</a></td>
	</tr>
<?php
	}
?>
<tr>
	<td colspan="2" height="200" align="center" valign="middle">
	<?php
		echo $_GET[cont];
	?>
	</td>
</tr>
</table>