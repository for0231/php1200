<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
	$sqlstr = "select * from tb_list where id = ".$_GET[id];
	$result = mysql_query($sqlstr,$conn);
	$rows = mysql_fetch_row($result);
	$sqlstr1 = "select id,u_group from tb_group";
	$result1 = mysql_query($sqlstr1,$conn);
	//if($rows[4] != 0)
	//$list = split(",",$rows[4]);
?>
<script src="../js/admin_js.js"></script>
<link href="../css/style.css" rel="stylesheet">
<table width="765" height="450" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #9CBED6; margin-top:15px;">
<tr><td align="center" valign="middle">
<form name="form1" method="post" action="modify_assign_chk.php">
<table width="450" border="0" cellpadding="0" cellspacing="0">
  <tr>
  	<td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" scope="col">拒绝访问组</td>
    <td height="25" align="center" valign="middle" scope="col">更改所在组 </td>
    <td height="25" align="center" valign="middle" scope="col">允许访问组</td>
  </tr>
  <tr>
    <td width="186" align="center" valign="middle">
	<SELECT name="left" size="10" multiple style="width:100px; ">
     <?php
	 	if($rows[4] != "0"){
			$list = split(",",$rows[4]);
	 		while($rows1 = mysql_fetch_row($result1)){
				$bool = true;
				for($num = 0; $num < count($list); $num++){
					if($rows1[1] == $list[$num]){
						$bool = false;
						break;
					}
				}
			if($bool == true)	
				echo "<option value='".$rows1[1]."'>".$rows1[1]."</option>";
			}		
		}
	 ?>
   </SELECT>   </td>
    <td width="94" align="center" valign="middle">
   <a href="#" onClick="moveSelected(document.form1.left,document.form1.right)">添加组&gt;&gt;</a><br>
   <br>
    <a href="#" onClick="moveSelected(document.form1.right,document.form1.left)">&lt;&lt;删除组</a></td>
    <td align="center" valign="middle"><select name="right" size="10" multiple style="width:100px; ">
	<?php
		if($rows[4] != "0"){
			$list = split(",",$rows[4]);
			for($i = 0; $i < count($list) - 1; $i++){
				echo "<option value='".$list[$i]."'>".$list[$i]."</option>";
			}
		}
		else
		{
			while($rows1 = mysql_fetch_row($result1)){
				echo "<option value='".$rows1[0]."'>".$rows1[1]."</option>";
			}
		}
	?>
   </select></td>
  </tr>
  <tr>
    <td height="30" colspan="3" align="center" valign="middle">
	  <input type="hidden" name="g_list" />
	  <input type="hidden" name="id" value="<?php echo $_GET[id]; ?>">
	  <input type="submit" value="修改" onclick="return glist1()" />	</td>
  </tr>
</table>
</form>
</td></tr></table>