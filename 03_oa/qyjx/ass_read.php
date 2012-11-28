<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
$sqlstr = "select id,u_name from tb_users";
	$result = mysql_query($sqlstr,$conn);
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<script src="../js/riq.js"></script>
<table width="765" border="1" cellpadding="0" cellspacing="0" class="big_td">
	<tr>
		<td height="33" background="../images/list.jpg" id="list">绩效评比</td>
	</tr>
</table>
<form name="form1" method="post" action="ass_read_chk.php">
<table width="450" border="0" cellpadding="0" cellspacing="0" bgcolor="#DEEBEF">
  <tr>
    <td height="25" colspan="3" align="center" valign="middle" scope="col">从
	  <input type="text" name="s_fdate" size=15 readonly="readonly" /><input type="button" onClick="loadCalendar(form1.s_fdate)">
	到
	<input type="text" name="s_ldate" size="15" readonly="readonly">	<input type="button" onClick="loadCalendar(form1.s_ldate)">	</td>
    </tr>
  <tr>
    <td width="189" align="right" valign="middle">
	<SELECT name="left" size="10" multiple style="width:100px; ">
     <?php
	 	while($rows = mysql_fetch_row($result)){
			echo "<option value='".$rows[1]."'>".$rows[1]."</option>";		
		}
	 ?>
   </SELECT>   </td>
    <td width="96" align="center" valign="middle">
   <a href="#" onClick="moveSelected(document.form1.left,document.form1.right)">优秀员工&gt;&gt;</a><br>
   <br>
    <a href="#" onClick="moveSelected(document.form1.right,document.form1.left)">&lt;&lt;删除员工</a></td>
    <td align="left" valign="middle"><select name="right" size="10" multiple style="width:100px; ">
   </select></td>
  </tr>
  <tr>
    <td height="30" colspan="3" align="center" valign="middle">
	  <input type="hidden" name="g_list" />
	  <input type="submit" value="添加" onclick="return glist()" /><input type="reset" value="重置" />	</td>
  </tr>
</table>
</form>