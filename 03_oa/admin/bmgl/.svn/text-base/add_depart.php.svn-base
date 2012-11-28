<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式 
	session_start(); 
	include "../inc/chec.php";
	include "../conn/conn.php";
	$sqlstr = "select * from tb_depart";
	$result1 = mysql_query($sqlstr,$conn);
?>
<script src="../js/admin_js.js"></script>
<link href="../css/style.css" rel="stylesheet">
<table width="765" height="450" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #9CBED6; margin-top:15px;">
	<tr>
		<td align="center" valign="middle">
	<form name="a_depart" id="a_depart" method="post" action="add_depart_chk.php">
 	 <table width="412" height="192" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <th colspan="3" align="center" valign="middle" scope="col">部门名称：
        <input name="d_name" type="text" id="d_name" size="20"></th>
      </tr>
    <tr>
      <td colspan="3" align="center" valign="middle">上级部门：
	    <select name="u_id">
	      <option value="0" selected="selected">无</option>
<?php
	while($rows = mysql_fetch_row($result1)){
		echo "<option value='".$rows[0]."'>".$rows[1]."</option>";
	}
?>
          </select></td>
      </tr>
    <tr>
      <td width="80" height="105" align="right" valign="middle">备注：</td>
      <td colspan="2"><textarea name="remark" cols="40" rows="5" id="remark"></textarea></td>
    </tr>
    <tr>
      <td colspan="3" align="center" valign="middle"><input type="submit" name="Submit" value="添加" onclick="return a_check();"></td>
    </tr>
  </table>
</form>
		</td>
	</tr>
</table>