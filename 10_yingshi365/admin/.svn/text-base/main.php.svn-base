<?php
	session_start();
	include "inc/chec.php";
	include "conn/conn.php";
?>
<link href="css/style.css" rel="stylesheet"/>
<script src="js/admin_js.js" language="javascript"></script>
<script type="text/JavaScript">
<!--
function MM_popupMsg(msg) { //v1.0
  if(confirm(msg))
     return true;
   else
     return false;
}
//-->
</script>
<center>
<table width="828" cellpadding="0" cellspacing="0">
<tr>
	<td height="12" background="images/side.jpg">&nbsp;</td>
</tr>
  <tr>
    <td height="96" colspan="2" scope="col" background="images/banner.jpg">&nbsp;</td>
  </tr>
<tr>
	<td height="12" background="images/side.jpg">&nbsp;</td>
</tr>
</table>

<table width="828" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="201" height="500" align="center" valign="top" bgcolor="#f0f0f0">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f0f0f0">
			<tr>
				<td height="33" background="images/menu.jpg">&nbsp;</td>
			</tr>
			<tr>
				<td>
<?php
	include "left.php";
?>	
				</td>
			</tr>
		</table>
	</td>
    <td align="center" valign="top" bgcolor="#f0f0f0">
	<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f0f0f0">
		<tr>
			<td height="34" align="right" valign="middle" background="images/line.jpg"> <a href="logout.php" onclick="return MM_popupMsg('ÊÇ·ñÒªÍË³öµÇÂ¼');">ÍË³öµÇÂ¼</a></td>
		</tr>
		<tr>
			<td height="15" bgcolor="#f0f0f0">&nbsp;</td>
		</tr>
		<tr>
			<td height="427" align="center" valign="top"  style="background-image:url(images/bg.jpg); background-repeat:no-repeat; background-position:center; background-attachment:fixed;">
<div style="height:35px;">&nbsp;</div>
<?php
	if(isset($_GET[action])){
		switch ($_GET[action]){
			case "audioList":
				include "a_list.php";
				break;
			case "videoList":
				include "v_list.php";
				break;
			case "audio":
				include "audio.php";
				break;
			case "video":
				include "video.php";
				break;
			case "grade":
				include "grade.php";
				break;
			case "member";
				include "member.php";
				break;
			case "log";
				include "log.php";
				break;
			case "manager";
				include "manager.php";
				break;
		}
	}
?>			</td>
		</tr>
		<tr>
			<td height="15" bgcolor="#f0f0f0">&nbsp;</td>
		</tr>
	</table>
	
	</td>
   </tr>
</table>
</center>