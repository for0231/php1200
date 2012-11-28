<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
	include "../inc/func.php";
	$sqlstr = "select * from tb_company";
	$result = mysql_query($sqlstr,$conn);
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<table width="765" border="1" cellpadding="0" cellspacing="0" class="big_td">
	<tr>
		<td height="33" background="../images/list.jpg" id="list">企业管理</td>
	</tr>
</table>
<table width="768" height="200" border="1" cellpadding="0" cellspacing="0" bgcolor="#DEEBEF" class="big_td">
  <tr>
    <td width="100" align="center" valign="top">
	<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
<?php
	while($rows = mysql_fetch_row($result)){
		echo "<tr>";
		echo "<td height=30 align=center valign=middle><a href='?id=".$rows[0]."'>".$rows[1]."</a></td>";
		echo "</tr>";
	}
?>
	</table>	</td>
    <th rowspan="2" align="center" valign="top">
	<?php
		if(!isset($_GET[id])){
	?>
	<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
	<form name="r_add" id="r_add" action="c_manage_chk.php" method="post">
	<tr>
		<td width="75" height="25">标题：</td>
		<td><input type="text" name="u_title" id="u_title"></td>
	</tr>
	<tr>
		<td>内容：</td>
		<td><textarea name="u_content" cols="60" rows="23"></textarea></td>
	</tr>
	<tr>
		<td colspan="2" align="center" valign="middle">
		<input type="hidden" name="action" value="add" />
		<input name="add" type="submit" id="add" value="添加" onclick="return add_rule();">&nbsp;
		<input name="reset" type="reset" id="reset" value="重置"></td>
	</tr>
	</form>
	</table>
	<?php
		}else{
		$f_sql = "select * from tb_company where id = ".$_GET[id];
		$f_rst = mysql_query($f_sql,$conn);
		$f_rows = mysql_fetch_row($f_rst);
		?>
		<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
	<form name="r_add" id="r_add" action="c_manage_chk.php" method="post">
	<tr>
		<td height="25">标题：</td>
		<td><input type="text" name="u_title" value=<?php echo $f_rows[1]; ?>>
		</td>
	</tr>
	<tr>
		<td>内容：</td>
		<td>
		<textarea name="u_content" cols="60" rows="23"><?php echo $f_rows[2]; ?></textarea>		</td>
	</tr>
	<tr>
		<td colspan="2" align="center" valign="middle">
		<input type="hidden" name="action" value="modify" />
		<input type="hidden" name="id" value="<?php echo $f_rows[0]; ?>" />
		<input name="add" type="submit" id="add" value="修改" onclick="return add_rule();">&nbsp;
		<input name="reset" type="reset" id="reset" value="重置">&nbsp;
		<label id="s_del"><a href="c_manage_chk.php?action=del&id=<?php echo $f_rows[0]; ?>" class="tmpa" onclick="return del_mess();">删除</a></label>
		</td>
	</tr>
	</form>
	</table>
		
	<?php
		}
	?>	</th>
  </tr>
  <tr>
  	<td height="25" align="center" valign="bottom"><a href="?">添加新制度</a></td>
  </tr>
</table>
