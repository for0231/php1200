<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "conn/conn.php";
	$s_sqlstr="select * from tb_register where toName='".$_SESSION[name]."' order by issueDate Desc";
	$s_rst = $conn->execute($s_sqlstr);
?>
<table width="558" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="567" height="26" align="center" valign="middle">点 歌 信 息 查 看 </td>
  </tr>
  <tr>
    <td><table width="559" height="320" align="center" cellpadding="0" cellspacing="0" bordercolor="#9caab5">
      <tr>
        <td height="318"><table width="404" height="330" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="402" height="312" valign="bottom"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="400" height="300" valign="top">
<?php
					  while(!$s_rst->EOF){
?>
					<table width="400" border="0" cellspacing="0" cellpadding="0">
                      <tr valign="top">
                        <td height="15" colspan="4">&nbsp;</td>
                        </tr>
<?php
						$s_sqlstr1="select * from tb_video where id=".$s_rst->fields[1];
						$s_rst1 = $conn->execute($s_sqlstr1);
						if(!$s_rst1->EOF){		
?>	
                      <tr valign="top">
                        <td width="100" height="23">歌曲名称：</td>
                        <td width="185" height="23"><a href="operation.php?action=dotlisten&id=<?php echo $s_rst->fields[0]; ?>&name=<?php echo $s_rst1->fields[16]; ?>"><?php echo $s_rst1->fields[1]; ?></a></td>
                        <td width="75" height="23">点歌人：</td>
                        <td width="103" height="23">
                          <?php echo $s_rst->fields[2]; ?></td>
                      </tr>
                      <tr valign="top">
                        <td width="100">祝语：</td>
                        <td height="55" colspan="3">
                              <textarea name="textarea" cols="40" rows="3" ><?php echo $s_rst->fields[4]; ?></textarea>
                        </td>
                        </tr>
                    </table>
					<?php 
						}
						$s_rst->movenext();
					}
					?></td>
                </tr>
              <tr>
                <td height="30"><div align="center">
                    <input name="Submit2" type="button" value="  返  回  " onClick="javascript:top.window.close()">
                </td>
                </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>