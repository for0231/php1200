<?php
include_once("conn/conn.php");
include_once("top.php");
?>
<table width="870" height="30" align="center" background="images/bg_14(1).jpg"><tr><td width="129" rowspan="2">&nbsp;</td>
    <td width="729"></td>
</tr>
  <tr>
    <td><span class="a9"><a href="rjxz.php" class="a2">软件下载</a></span></td>
  </tr>
</table>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">


<?php
$sqlxs=mysql_query("select * from tb_soft where id='".$_GET[id]."'",$conn);
$infoxs=mysql_fetch_array($sqlxs);
?>
<table width="685" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="550" valign="top">
			  <br>
			  <table width="480" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                <tr>
                  <td width="87" height="22" bgcolor="#FFFFFF"><div align="center">&nbsp;&nbsp;软件名称：</div></td>
                  <td width="330" bgcolor="#FFFFFF">&nbsp;&nbsp;<?php echo $infoxs[softname];?></td>
                </tr>
                <tr>
                  <td height="22" bgcolor="#FFFFFF"><div align="center">添加时间：</div></td>
                  <td height="22" bgcolor="#FFFFFF">&nbsp;&nbsp;<?php echo $infoxs[addtime];?></td>
                </tr>
                <tr>
                  <td height="22" bgcolor="#FFFFFF"><div align="center">下载次数：</div></td>
                  <td height="22" bgcolor="#FFFFFF">&nbsp;&nbsp;<?php echo $infoxs[click];?>&nbsp;次</td>
                </tr>
                <tr>
                  <td height="22" bgcolor="#FFFFFF"><div align="center">立即下载：</div></td>
                  <td height="22" bgcolor="#FFFFFF">&nbsp;<a href="downloadsoft.php?id=<?php echo $infoxs[id];?>"><img src="images/bg_14(5).jpg" border="0"/></a></td>
                </tr>
              </table>
              <br><table width="480" height="150" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
    <td bgcolor="#FFFFFF"><?php echo unhtml($infoxs[content]);?></td>
  </tr>
</table>

<br>
</td>
              <td width="200" valign="top"><br><div align="center"><img src="images/bg_14(6).jpg" width="137" height="163" /></div><br><br>
                <div align="center"><strong><font color="#666666"><img src="images/menubar_left[1].gif" />&nbsp;软件说明</font></strong></div></td>
            </tr>
            
</table>


</td>
        </tr></table>
<?php
include_once("bottom.php");
?>