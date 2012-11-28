<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start(); 
	include "../inc/chec.php";
	include "../conn/conn.php";
	$sqlstr = "select * from tb_depart where up_depart != 0 group by up_depart";
	$result = mysql_query($sqlstr,$conn);
?>
<!--部门列表-->
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<table width="765" border="1" cellpadding="0" cellspacing="0" class="big_td">
	<tr>
		<td height="33" background="../images/list.jpg" id="list">质量绩效</td>
	</tr>
</table>
<table width="765" border="1" cellpadding="0" cellspacing="0" class="big_td">
<?php
	$i = 0;
		while($rows = mysql_fetch_row($result)){
			$a_id[$i] = $rows[2];
			$i++;
		}
		$sqlstr1 = "select id,d_name from tb_depart where id != 0 ";
		$name = "";
		for($j = 0; $j < count($a_id); $j++){
			$sqlstr1 = $sqlstr1." and id != ".$a_id[$j];
		}
		$result1 = mysql_query($sqlstr1,$conn);
?>
	<tr>
<?php
		$num = 0;
		while($rows1 = mysql_fetch_row($result1)){
			
			if($num < 10){
?>
				<td width="50" height="25" align="center" valign="middle"><a href="?d_id=<?php echo $rows1[0]?>"><?php echo $rows1[1]; ?></a></td>
<?php
			}else{
?>
  </tr><tr>
	<td width="50" height="25" align="center" valign="middle"><a href="?d_id=<?php echo $rows1[0]?>"><?php echo $rows1[1]; ?></a></td>
<?php
				$num = 0;
			}
			$num++;	
		}
?>
	</tr>
</table>
<!--部门员工-->
<table border="0" cellpadding="0" cellspacing="0"  bgcolor="#DEEBEF">
	<tr>
<?php
		$p_sql = "select id,u_name from tb_users where u_depart = '".$_GET[d_id]."'";
		$p_rst = mysql_query($p_sql,$conn);
		$num = 0;
		while($p_rows = mysql_fetch_row($p_rst)){
			
			if($num < 10){
?>
				<td width="50" height="25" align="center" valign="middle">
				<a href="#" onclick="javascript:openWin=open('show_performance.php?action=m&p_id=<?php echo $p_rows[0]; ?>' ,'','width=450,height=450,scrollbars=no');"><?php echo $p_rows[1]; ?></a>
				</td>
<?php
			}else{
?>
  </tr><tr>
	<td width="50" height="25" align="center" valign="middle"><a href="#" onclick="javascript:openWin=open('show_performance.php?action=m&p_id=<?php echo $p_rows[0]; ?>' ,'','width=450,height=450,scrollbars=no');"><?php echo $p_rows[1]; ?></a></td>
<?php
				$num = 0;
			}
			$num++;	
		}
?>
	</tr>
</table>