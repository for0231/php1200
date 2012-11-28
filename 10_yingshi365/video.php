<?php
	include "conn/conn.php";
	$v_sqlstr = "select * from tb_video order by downTime desc limit 0,5";
	$v_rst = $conn->execute($v_sqlstr);
	$vnum = 1;
?>
<table width="265" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td colspan="3" width="262" height="28" align="center" valign="middle" background="images/music_taxis.jpg">&nbsp;</td>
			</tr>
<?php
	while(!$v_rst->EOF){
?>
	<tr>
		<td width="25"  height="30" align="center" valign="middle" class="f_td"><?php echo $vnum; ?></td>
		<td width="215" align="center" valign="middle" class="f_td"><a href="#" onclick="javascript:Wopen=open('operation.php?action=v_intro&id=<?php echo $v_rst->fields[0]; ?>','','height=700,width=665,scrollbars=no');"><?php echo $v_rst->fields[1]; ?></td>
		<td width="25" align="center" valign="middle" class="f_td"><?php echo $v_rst->fields[19]; ?></td>
	</tr>
<?php
	$vnum++;
	$v_rst->MoveNext();
	}
?>
	</table>