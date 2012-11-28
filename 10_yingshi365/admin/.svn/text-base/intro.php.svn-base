<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "conn/conn.php";
	include "inc/chec.php";
?>
<link rel="stylesheet" href="css/style.css">
<body>
<table width="558" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="567" height="26" align="center" valign="middle"><font style="font-size:13px; ">视 频 数 据 详 细 内 容</font></td>
  </tr>
  <tr>
    <td><table width="559" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="92">
		<table width="404" height="90" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="402" align="center" valign="middle">
<?php	$sql="select * from tb_audio where id=".$_GET[id];
		  $rst = $conn->execute($sql);
			if(!$rst->EOF){
?>
		<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="15" colspan="2">&nbsp;</td>
                </tr>
              <tr>
                <td width="131" height="20" align="right" valign="middle">名称：</td>
                <td width="269" height="20"><?php echo $rst->fields[1]; ?></td>
              </tr>
              <tr>
                <td height="20" align="right" valign="middle">大小：</td>
                <td height="20"><?php echo $rst->fields[3]; ?></td>
              </tr>
			  <tr>
                <td height="20" align="right" valign="middle">等级：</td>
                <td height="20"><?php echo $rst->fields[4]; ?></td>
              </tr>
			  <tr>
                <td height="20" align="right" valign="middle">发行商：</td>
                <td height="20"><?php echo $rst->fields[5]; ?></td>
              </tr>
			  <tr>
                <td height="20" align="right" valign="middle">主要演员：</td>
                <td height="20"><?php echo $rst->fields[6]; ?></td>
              </tr>
			  <tr>
                <td height="20" align="right" valign="middle">导演：</td>
                <td height="20"><?php echo $rst->fields[7]; ?></td>
              </tr>
			  <tr>
                <td height="20" align="right" valign="middle">制片人：</td>
                <td height="20"><?php echo $rst->fields[8]; ?></td>
              </tr>
			  <tr>
                <td height="20" align="right" valign="middle">语言：</td>
                <td height="20"><?php echo $rst->fields[9]; ?></td>
              </tr>
			  <tr>
                <td height="20" align="right" valign="middle">类别：</td>
                <td height="20"><?php echo $rst->fields[11]; ?></td>
              </tr>
			  <tr>
                <td height="20" align="right" valign="middle">发行国家：</td>
                <td height="20"><?php echo $rst->fields[12]; ?></td>
              </tr>
			  <tr>
			    <td height="20" align="right" valign="middle">发行时间：</td>
			    <td height="20"><?php echo $rst->fields[13]; ?></td>
			    </tr>
			  <tr>
			    <td height="20" align="right" valign="middle">新品：</td>
			    <td height="20"><?php echo $rst->fields[22]; ?></td>
			    </tr>
			  <tr>
			    <td height="20" align="right" valign="middle">简要介绍：</td>
			    <td height="20">
			      <textarea name="textarea" cols="40" rows="5" readonly="readonly"><?php echo $rst->fields[14]; ?></textarea>			    </td>
			  </tr>
			  
              <tr>
                <td height="30" colspan="2" align="center" valign="middle">
				<input name="Submit" type="submit" value="  播  放  "
				onclick="javascript:Wopen=open('operation.php?action=see&id=<?php echo $rst->fields[16]; ?>','','height=700,width=665,scrollbars=no');">
				<input name="Submit" type="button" value="  下  载  " onClick="javascript:Wopen=location='download.php?action=audio&id=<?php echo $rst->fields[16]; ?>';">			                    
                <input name="Submit2" type="button" value="  返  回  " class="submit" onClick="javascript:top.window.close();"></td>
                </tr> 
            </table><?php } ?></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>