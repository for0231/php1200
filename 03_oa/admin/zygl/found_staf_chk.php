<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start(); 
	include "../inc/chec.php";
	include "../conn/conn.php";
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/admin_js.js"></script>
<table width="765" height="450" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #9CBED6; margin-top:15px;">
	<tr>
		<td align="center" valign="middle">
<form name="found" method="post" action="found_staf_chk.php">
	<table cellpadding="0" cellspacing="0" border = "0">
		<tr>
			<td width="80">查找员工：</td>
			<td width="37"><select name="u_field">
					<option value="id">ID</option>
					<option value="u_user">帐号</option>
					<option value="u_name">姓名</option>
					<option value="u_sex">性别</option>
					<option value="u_tel">电话</option>
					<option value="u_depart">部门</option>
		  </select>			</td>
		  <td width="140"><input type="text" name="u_key" size="20"/></td>
			<td width="42"><input type="submit" value="查找" onclick="return chk_null();" /></td>
		    <td width="65" align="center" valign="middle"><a href="show_staf.php">显示全部</a></td>
		</tr>
  </table>
</form>
<form name="form1" method="post" action="show_staf_chk.php">
<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="75" height="25" align="center" valign="middle" scope="col">姓名</td>
	<td width="125" height="25" align="center" valign="middle" scope="col">电话</td>
    <td width="75" height="25" align="center" valign="middle" scope="col">部门</td>
    <td width="75" height="25" align="center" valign="middle" scope="col">操作</td>
  </tr>
<?php
	$sqlstr = "select id,u_name,u_tel,u_depart from tb_users where ".$_POST[u_field]." like '%".$_POST[u_key]."%'";
	$result = mysql_query($sqlstr,$conn);
	while($rows = mysql_fetch_row($result)){
		echo "<tr>";
		for($i = 1; $i < count($rows); $i++){ 
			if ($rows[$i] == "")
				echo "<td height='30'>&nbsp;</td>";
    		else
				echo "<td height='30' align='center' valign='middle'>&nbsp;".$rows[$i]."&nbsp;</td>";
		}
		echo "<td><a href='modify_staf.php?id=".$rows[0]."'>修改</a>/<a href='del_staf_chk.php?id=".$rows[0]."'onclick='return del_chk();'>删除</a></td>";
		echo "</tr>";
	}
?>
</table>
</form>
</td></tr></table>
</center>