<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
<style type="text/css">
<!--
.style12 {color: #FFFFCC}
.style13 {color: #FF8502}
-->
</style>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="2"><?php include("top.php");?></td>
  </tr>
  <tr>
    <td width="217" valign="top" background="Images/line2.gif"><?php include("left.php");?></td>
    <td width="586" valign="top" bgcolor="#FEFEF6">	<table width="563" height="587" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="563" height="587" valign="top" bgcolor="#FFFFFF"><table width="563" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="563" height="27" bgcolor="#3983B6">&nbsp;&nbsp;&nbsp;&nbsp;<span class="style12"><span class="style13">■</span>&nbsp;&nbsp;<strong>检索结果</strong></span></td>
            </tr>
            <tr>
              <td align="center" valign="top">
				<?php
				include("conn/conn.php");
				$type=$_POST[type];
				$content=$_POST[content];
				$sql1=mysql_query("select * from tb_leaguerinfo  where checkstate=1 and type='$type' and (content like'%$content%' or title like'%$content%' or linkman like'%$content%' or tel like'%$content%')");
				$info1=mysql_fetch_array($sql1);
				$sql=mysql_query("select * from tb_info  where checkstate=1 and type='$type' and (content like'%$content%' or title like'%$content%' or linkman like'%$content%' or tel like'%$content%')");
				$info=mysql_fetch_array($sql);
				?>
				<?php
				if($info1){
				do{
			   ?>
                  <table width="540" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="26">『<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info1[type]);?>』&nbsp;<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info1[title]);?>&nbsp;&nbsp;<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info1[edate]);?></td>
                    </tr>
                    <tr>
                      <td height="26">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info1[content]);?></td>
                    </tr>
                    <tr>
                      <td height="26">&nbsp;联系人：<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info1[linkman]);?>&nbsp;&nbsp;&nbsp;联系电话：<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info1[tel]);?></td>
                    </tr>
                    <tr>
                      <td height="3" background="Images/line1.gif"></td>
                    </tr>
                  </table>
                <?php
				}while($info1=mysql_fetch_array($sql1));
				?>
				</td>
            </tr>
            <tr>
              <td height="140" align="center" valign="top"> <br>
				<?php
					if($info){
					do{
				?>
                  <table width="540" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="26">『<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info[type]);?>』&nbsp;<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info[title]);?>&nbsp;&nbsp;<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info[edate]);?></td>
                    </tr>
                    <tr>
                      <td height="26">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info[content]);?></td>
                    </tr>
                    <tr>
                      <td height="26">&nbsp;联系人：<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info[linkman]);?>&nbsp;&nbsp;&nbsp;联系电话：<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info[tel]);?></td>
                    </tr>
                    <tr>
                      <td height="3" background="Images/line1.gif"></td>
                    </tr>
                  </table>
                  <?php
					} while($info=mysql_fetch_array($sql));
					}
				}else{
				?>
				<?php
					if($info){
					do{
				?>
                  <table width="540" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="26">『<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info[type]);?>』&nbsp;<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info[title]);?>&nbsp;&nbsp;<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info[edate]);?></td>
                    </tr>
                    <tr>
                      <td height="26">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info[content]);?></td>
                    </tr>
                    <tr>
                      <td height="26">&nbsp;联系人：<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info[linkman]);?>&nbsp;&nbsp;&nbsp;联系电话：<?php echo str_ireplace($content,"<font color='#FF0000'>".$content."</font>",$info[tel]);?></td>
                    </tr>
                    <tr>
                      <td height="3" background="Images/line1.gif"></td>
                    </tr>
                  </table>
                  <?php
					} while($info=mysql_fetch_array($sql));
				 }else{
				 ?>
        	     <table width="540" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="center">您检索的信息资源不存在！</td>
                    </tr>
                  </table>
				<?php
					}
				}
				  ?>
              </td>
            </tr>
          </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p></td>
      </tr>
    </table>	</td>
  </tr>
  <tr>
    <td colspan="2"><?php include("bottom.php");?></td>
  </tr>
</table>
