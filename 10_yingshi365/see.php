<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
?>
<body leftmargin="0" topmargin="0">
<center>
<object classid="clsid:22D6F312-B0F6-11D0-94AB-0080C74C7E95" width="665" height="500" id="MediaPlayer1" >
  <param name="AutoStart" value="-1">
  <param name="ShowStatusBar" value="-1">
  <param name="Filename" value="upfiles/audio/<?php echo $_GET[id];  ?>">
</object>
</center>
</body>