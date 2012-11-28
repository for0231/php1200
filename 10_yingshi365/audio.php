<?php
	include "conn/conn.php";
	$t_sqlstr = "select * from tb_audio order by downTime desc limit 0,5";
	$t_rst = $conn->execute($t_sqlstr);
	$num = 1;
?>
<table width="265" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="262" height="28" colspan="3" align="center" valign="middle" background="images/file_taxis.jpg">&nbsp;</td>
	</tr>
<?php
	while(!$t_rst->EOF){
?>
	<tr>
		<td width="25"  height="30" align="center" valign="middle" class="f_td"><?php echo $num; ?></td>
		<td width="215" align="center" valign="middle" class="f_td"><a href="#" onclick="javascript:Wopen=open('operation.php?action=intro&id=<?php echo $t_rst->fields[0]; ?>','','height=700,width=665,scrollbars=no');"><?php echo $t_rst->fields[1]; ?></a></td>
		<td width="25" align="center" valign="middle" class="f_td"><?php echo $t_rst->fields[19]; ?></td>
	</tr>
<?php
	$num++;
	$t_rst->MoveNext();
	}
?>
</table>
