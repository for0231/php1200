<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
	$sqlstr = "select id,u_name from tb_users";
	$result = mysql_query($sqlstr,$conn);
?>
<script src="../js/admin_js.js"></script>
<link href="../css/style.css" rel="stylesheet">
<table width="765" height="450" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #9CBED6; margin-top:15px;">
<tr><td align="center" valign="middle">
<form name="form1" method="post" action="add_group_chk.php">
<table width="450" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" scope="col">用户组：
	  <input type="text" name="u_group" />		</td>
    </tr>
  <tr>
    <td width="189" align="center" valign="middle">
	<SELECT name="left" size="10" multiple style="width:100px; ">
     <?php
	 	while($rows = mysql_fetch_row($result)){
			echo "<option value='".$rows[1]."'>".$rows[1]."</option>";		
		}
	 ?>
   </SELECT>   </td>
    <td width="96" align="center" valign="middle">
   <a href="#" onClick="moveSelected(document.form1.left,document.form1.right)">添加组员&gt;&gt;</a><br>
   <br>
    <a href="#" onClick="moveSelected(document.form1.right,document.form1.left)">&lt;&lt;删除组员</a></td>
    <td colspan="2" align="center" valign="middle"><select name="right" size="10" multiple style="width:100px; ">
   </select></td>
  </tr>
  <tr>
    <td height="30" colspan="4" align="center" valign="middle">
	  <input type="hidden" name="g_list" />
	  <input type="submit" value="添加" onclick="return glist()" /><input type="reset" value="重置" />	</td>
  </tr>
</table>
</form>
</td></tr></table>