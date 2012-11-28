<?php
 include("top.php");
?>
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="209" height="438" valign="top" bgcolor="#F0F0F0"><?php include("left.php");?></td>
    <td width="581" align="center" valign="top" bgcolor="#FFFFFF"><table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="557" height="46" background="images/gg.gif"><div align="center" style="color: #FFFFFF"></div></td>
        </tr>
        <tr>
          <td height="150"><table width="530"  border="0" align="center" cellpadding="0" cellspacing="1">
              <?php
		     
		     $id=$_GET[id];
			 $sql=mysql_query("select * from tb_gonggao where id='".$id."'",$conn);
			 $info=mysql_fetch_array($sql);
		     include("function.php");
		   
		   ?>
              <tr>
                <td width="68" height="25" bgcolor="#FFFFFF"><div align="center">公告主题：</div></td>
                <td width="252" bgcolor="#FFFFFF"><div align="left"><?php echo unhtml($info[title]);?></div></td>
                <td width="63" bgcolor="#FFFFFF"><div align="center">发布时间：</div></td>
                <td width="112" bgcolor="#FFFFFF"><div align="left"><?php echo $info[time];?></div></td>
              </tr>
              <tr>
                <td height="125" bgcolor="#FFFFFF"><div align="center">公告内容：</div></td>
                <td height="125" colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo unhtml($info[content]);?></div></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="530" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="right"><a href="showgonggao.php">继续查看</a></div></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>