<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start(); 
	include "../inc/chec.php";
	include "../conn/conn.php";
	include "../inc/func.php";
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/admin_js.js"></script>
<table width="765" height="450" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #9CBED6; margin-top:15px;">
	<tr>
		<td align="center" valign="middle">
<form name="found" method="post" action="found_staf_chk.php">
	<table borde = "1" cellpadding="0" cellspacing="0">
		<tr>
			<td width="80">查找员工：</td>
			<td><select name="u_field">
					<option value="id">ID</option>
					<option value="u_user">帐号</option>
					<option value="u_name">姓名</option>
					<option value="u_sex">性别</option>
					<option value="u_tel">电话</option>
					<option value="u_depart">部门</option>
				</select>
			</td>
			<td><input type="text" name="u_key" size="20"/></td>
			<td><input type="submit" value="查找" onclick="return chk_null();" /></td>
		</tr>
		
	</table>
</form>
<form name="form1" method="post" aciton="">
<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="75" height="25" align="center" valign="middle" scope="col">姓名</td>
	<td width="125" height="25" align="center" valign="middle" scope="col">电话</td>
    <td width="75" height="25" align="center" valign="middle" scope="col">部门</td>
    <td width="75" height="25" align="center" valign="middle" scope="col">操作</td>
  </tr>
<?php
	$sqlstr = "select id,u_name,u_tel,u_depart from tb_users";
	$result = mysql_query($sqlstr,$conn);
	while($rows = mysql_fetch_row($result)){
?>
	<tr>
		<td height="30" align="center" valign="middle"><?php echo $rows[1]; ?></td>
		<td height="30" align="center" valign="middle"><?php echo $rows[2]; ?></td>
		<td height="30" align="center" valign="middle"><?php echo read_field($conn,"tb_depart","d_name",$rows[3]); ?></td>
		<td align="center" valign="middle"><a href="modify_staf.php?id=<?php echo $rows[0]; ?>">修改</a>/<a href="del_staf_chk.php?id=<?php echo $rows[0]; ?>" onclick="return del_chk();">删除</a></td>
	</tr>
<?php
	}
?>
</table>
</form>
</td></tr></table>