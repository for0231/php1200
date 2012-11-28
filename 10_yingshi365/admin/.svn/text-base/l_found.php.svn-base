<?php
	session_start();
	include "inc/chec.php";
	include "conn/conn.php";
?>
<table width="558" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="50" align="center" valign="middle" ><font style="font-size:13px; ">日 志 查 询</font></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><table cellpadding="0" cellspacing="0">
      <tr>
        <td ><table border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td ><table border="0" align="center" cellpadding="0" cellspacing="0">
              <form name="list" method="post" action="l_found_chk.php">
              <tr>
                <td height="50" colspan="2" align="center" valign="middle">* 本系统只能查询当月的日志文件</td>
                </tr>
              <tr>
                <td width="125" height="50" align="right" valign="middle">文件类别：</td>
                <td width="200" height="50" align="left" valign="middle"><select name="style"  id="style">
                  <option value="audio" selected>视频文件</option>
                  <option value="video">音频文件</option>
				   <option value="all">全部</option>
                </select></td>
              </tr>
              <tr>
                <td height="50" align="right" valign="middle">日期：</td>
                <td height="50" align="left" valign="middle">
				<select name="days"  id="days">
<?PHP
				 $days=date("t");
				 for($i=1; $i <= $days;$i++){
?>
				 <option value="<?php echo $i; ?>" <?php if($i==date("d")) echo "selected"; ?> > <?php echo $i; ?> 号</option>
<?php
	}
?>
                </select></td>
              </tr>
              <tr>
                <td height="50" colspan="2" align="center" valign="middle">
                    <input name="Submit" type="submit" class="submit" value="  查  询  ">
                    <input name="Submit2" type="button" class="submit" value="  返  回  " onClick="javascript:top.window.close()"></td>
                </tr> </form>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
		