<?php
	session_start();
	
	include "conn/conn.php";
	$l_sqlstr = "select * from tb_audio where bool = '1' order by id desc limit 0,4";
	$l_sqlstr1 = "select * from tb_audio order by id desc limit 0,15";
	$l_sqlstr2 = "select * from tb_video order by id desc limit 0,15";
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<!--最新影视-->

      <table width="605" border="0" cellspacing="0" cellpadding="0" class="right_table">
        <tr>
          <td height="30" colspan="2" align="center" valign="middle" background="images/new_file.jpg">
		  <div align="right"><a href="list.php?action=audio&style=new" style="font-family:'宋体'; color:#FFFFFF;">>>>更多</a></div>
		  </td>
        </tr>
<?php
		$l_rst = $conn->execute($l_sqlstr);
		$number = 0;
		while(!$l_rst->EOF){
			if(($number % 2) == 0){
?>
        <tr>
<?php
			}
?>
          <td align="center" valign="middle" width="50%">
		  <!--显示影视资料 -->
		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		  	<tr>
				<td width="150" align="center" valign="middle"><img name="news" src="<?php echo "upfiles/audio/".$l_rst->fields[2]; ?>" width="130" height="150" alt="" border="3" style=" border-color:#CCCCCC; margin-top:15px; margin-left:15px; margin-bottom:15px; margin-right:15px;" /></td>
				<td align="center" valign="middle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="25" colspan="2"><?php echo $l_rst->fields[1]; ?></td>
                  </tr>
                  <tr>
                    <td width="40%" height="25" align="right" valign="middle">类型：</td>
                    <td width="62%"><div><?php echo $l_rst->fields[11]; ?></div></td>
                  </tr>
                  <tr>
                    <td height="25" align="right" valign="middle">主演：</td>
                    <td><div style=" width:50px; height:12px; "><?php echo $l_rst->fields[6]; ?></div></td>
                  </tr>
                  <tr>
                    <td height="25" align="right" valign="middle">导演：</td>
                    <td><?php echo $l_rst->fields[7]; ?></td>
                  </tr>
                  <tr>
                    <td height="25" align="right" valign="middle">制片：</td>
                    <td><?php echo $l_rst->fields[8]; ?></td>
                  </tr>
                  <tr>
                    <td height="25" colspan="2" align="center" valign="middle">
<?php if($_SESSION[name]<>""){ ?><a href="#" onclick="javascript:Wopen=open('operation.php?action=see&id=<?php echo $l_rst->fields[16]; ?>','','height=700,width=665,scrollbars=no');"><img src="images/online_icon.jpg" width="21" height="20" border="0" alt="在线观看" /></a>

<?php }if($_SESSION[name]<>"" and $_SESSION[grades]=="高级会员") { ?><a href="download.php?id=<?php echo $l_rst->fields[16] ?>&action=audio"><img src="images/down.jpg" width="20" height="18" border=0 alt="下载" /></a><?php  } ?>&nbsp;<a href="#" onclick="javascript:Wopen=open('operation.php?action=intro&id=<?php echo $l_rst->fields[0]; ?>','','height=700,width=665,scrollbars=no');"><img src="images/show_icon.jpg" width="20" height="20" alt="介绍" border="0" /></a></td>
                  </tr>
                </table></td>
			</tr>
		  </table>
		  </td>
<?php
			if(($number %2) != 0){
?>
			</tr>
<?php			
			}
			$l_rst->movenext();
			$number++;
		}
?>
      </table>
      <table width="608" height="197" border="0" cellpadding="0" cellspacing="0" class="right_table">
        <tr>
          <td width="295" align="left" valign="top">
		  <!--影视大棚-->
		  	<table width="295" border="0" cellpadding="0" cellspacing="0">
		  		<tr>
					<td colspan="2" height="30" background="images/file_show.jpg"><div align="right"><a href="list.php?action=audio" style="font-family:'宋体'; color:#FFFFFF;" >>>>更多</a></div></td>
				</tr>
<?php
	$l_rst1 = $conn->execute($l_sqlstr1);
	while(!$l_rst1->EOF){
?>			
				<tr>
					<td width="25%" align="right" valign="middle"><a href="list.php?action=audio&style=<?php echo urlencode($l_rst1->fields[11]); ?>">【<?php echo $l_rst1->fields[11]; ?>】</a></td>
					<td width="75%" align="left" valign="middle" style=" text-indent:20px; "><a href="#" onclick="javascript:Wopen=open('operation.php?action=intro&id=<?php echo $l_rst1->fields[0]; ?>','','height=700,width=665,scrollbars=no');"><?php echo $l_rst1->fields[1]; ?></a></td>
				</tr>
<?php
	$l_rst1->movenext();
	}
?>
	 	    </table>
		   <!--------------------->
		  </td>
          <td width="18" align="left" valign="top">&nbsp;</td>
          <td width="295" align="center" valign="top">
		  <!-- 音乐特区 -->
		  <table width="295" border="0" cellpadding="0" cellspacing="0">
		  	<tr>
				<td height="30" colspan="2" background="images/music_show.jpg"><div align="right"><a href="" style="font-family:'宋体'; color:#FFFFFF;">>>>更多</a></div></td>
			</tr>
<?php
			$l_rst2 = $conn->execute($l_sqlstr2);
			while(!$l_rst2->EOF){
?>
			<tr>
				<td width="25%" align="right" valign="middle"><a href="list.php?action=video&style=<?php echo urlencode($l_rst2->fields[7]); ?>">【<?php echo $l_rst2->fields[7]; ?>】</a></td>
				<td width="75%" align="left" valign="middle"><a href="#" onclick="javascript:Wopen=open('operation.php?action=v_intro&id=<?php echo $l_rst2->fields[0]; ?>','','height=700,width=665,scrollbars=no');"><?php echo $l_rst2->fields[1]; ?></a></td>
			</tr>
<?php
	$l_rst2->movenext();
			}
?>
		  </table>	
		  <!----------------------------->
		  </td>
        </tr>
</table>
</body>
</html>
