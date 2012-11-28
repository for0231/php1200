<?php
	include "conn/conn.php";
	
switch ($_GET[action]){
	case "newlist":
?>
<table width="605" border="0" cellspacing="0" cellpadding="0" class="right_table">
        <tr>
          <td height="30" colspan="6" align="center" valign="middle" background="images/new_file_left.jpg"><div style="font-size:15px; color:#ffffff;">最新影视</div>
		  </td>
        </tr>
		<tr>
			<td width="100" height="25" align="center" valign="middle">类别</td>
			<td width="25%" align="center" valign="middle">名称</td>
			<td width="28%" align="center" valign="middle">主要演员</td>
			<td width="75" align="center" valign="middle">在线观看</td>
			<td width="75" align="center" valign="middle">下载</td>
			<td width="75" align="center" valign="middle">介绍</td> 
		</tr>
<?php
		$l_sqlstr = "select * from tb_audio where bool = '1' order by id";
		$l_rst = $conn->execute($l_sqlstr);
		while(!$l_rst->EOF){
?>
        <tr onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
			<td height="25" align="right" valign="middle" >【<?php echo $l_rst->fields[11]; ?>】</td>
			<td align="center" valign="middle"><?php echo $l_rst->fields[1]; ?></td>
			<td align="center" valign="middle"><?php echo $l_rst->fields[6]; ?></td>
			<td align="center" valign="middle"><img src="images/online_icon.jpg" width="21" height="20" border="0" alt="在线观看"></td>
			<td align="center" valign="middle"><img src="images/down.jpg" width="20" height="18" border="0" alt="下载"></td>
			<td align="center" valign="middle"><img src="images/show_icon.jpg" width="20" height="20" border="0" alt="介绍"></td>
		</tr>
<?php			
			$l_rst->movenext();
		}
?>
</table>

<?php
	break;
	case "":
	default:
?>
<table width="605" border="0" cellspacing="0" cellpadding="0" class="right_table">
        <tr>
          <td height="30" colspan="6" align="center" valign="middle" background="images/new_file_left.jpg"><div style="font-size:15px; color:#ffffff;">影视专区</div>
		  </td>
        </tr>
		<tr>
			<td width="100" height="25" align="center" valign="middle">类别</td>
			<td width="25%" align="center" valign="middle">名称</td>
			<td width="28%" align="center" valign="middle">主要演员</td>
			<td width="75" align="center" valign="middle">在线观看</td>
			<td width="75" align="center" valign="middle">下载</td>
			<td width="75" align="center" valign="middle">介绍</td> 
		</tr>
<?php
		$l_sqlstr = "select * from tb_audio where order by id";
		$l_rst = $conn->execute($l_sqlstr);
		while(!$l_rst->EOF){
?>
        <tr onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
			<td height="25" align="right" valign="middle" >【<?php echo $l_rst->fields[11]; ?>】</td>
			<td align="center" valign="middle"><?php echo $l_rst->fields[1]; ?></td>
			<td align="center" valign="middle"><?php echo $l_rst->fields[6]; ?></td>
			<td align="center" valign="middle"><img src="images/online_icon.jpg" width="21" height="20" border="0" alt="在线观看"></td>
			<td align="center" valign="middle"><img src="images/down.jpg" width="20" height="18" border="0" alt="下载"></td>
			<td align="center" valign="middle"><img src="images/show_icon.jpg" width="20" height="20" border="0" alt="介绍"></td>
		</tr>
<?php			
			$l_rst->movenext();
		}
?>
</table>
<?php
	break;
}
?>