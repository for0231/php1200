<?php
	include "conn/conn.php";
?>
<table width="265" border="0" cellpadding="0" cellspacing="0">
	<form id="found" name="found" method="post" action="show.php">
		<tr>
			<td height="30" colspan="2" align="center" valign="top" background="images/found.jpg">&nbsp;</td>
		</tr>
		<tr>
		  <td width="100" height="34" align="right" valign="middle" class="l_td">&nbsp;</td>
		  <td width="165" align="left" valign="middle" class="l_td">&nbsp;</td>
		</tr>
		<tr>
		  <td height="30" align="right" valign="middle" class="l_td"><strong>关键字：</strong></td>
		  <td height="30" align="left" valign="middle" class="l_td"><input type="text" name="k_word" id="k_word" class="mytext" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" /></td>
		</tr>
		<tr>
		  <td height="32" align="right" valign="middle" class="l_td"><strong>信息类别：</strong></td>
		  <td height="32" align="left" valign="middle" class="l_td">
		  <select name="m_type" class="mytext" style="width:80px;" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
		  	<option value="video" selected="selected">歌曲名称</option>
			<option value="audio">视频名称</option>
		  </select></td>
		</tr>
		<tr>
		  <td height="40" colspan="2" align="left" valign="middle" class="l_td">
		  <input type="hidden" name="action" value="l_found" />
		  <input type="submit" name="query" id="query" value="" />
		  <input type="button" name="h_query" id="h_query" value="" onclick="javascript:Wopen=open('operation.php?action=search','','height=700,width=665,scrollbars=no');"/>		  </td>
	  </tr>
		<tr>
		  <td colspan="2" align="center" valign="top" class="l_td">&nbsp;</td>
	  </tr>
	</form>
</table>
