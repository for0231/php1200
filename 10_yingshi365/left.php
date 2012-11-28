<?php
	session_start();
?>
<!--µÇÂ¼¿ò -->
<table width="265" border="0" cellpadding="0" cellspacing="0" class="left_table"> 
	<tr><td align="center" valign="top">
<?php
	if(isset($_SESSION[id]) and isset($_SESSION[name]))
		include "message.php";
	else
		include "login.php";
?>
</td></tr></table>
	<!-------------------µÇÂ¼¿ò½áÊø----------------------->
	<!--ËÑË÷¿ò.php-->
<table width="265" border="0" cellpadding="0" cellspacing="0" class="left_table"> 
	<tr><td align="center" valign="top">
	<?php include "found.php"; ?>
</td></tr></table>
	<!-- ------------------ -->
	<!--Ó°ÊÓÅÅÐÐ -->
	<table width="265" border="0" cellpadding="0" cellspacing="0" class="left_table"> 
		<tr><td align="center" valign="top">
	<?php include "audio.php"; ?>
	</td></tr></table>
	<!-- ------------------ -->
	<!-- ÒôÀÖÅÅÐÐ -->
	<table width="265" border="0" cellpadding="0" cellspacing="0" class="left_table"> 
		<tr><td align="center" valign="top">
	<?php include "video.php"; ?>
	</td></tr></table>
	<!-- ------------------ -->