<?php
	session_start();
	include "inc/chec.php";
	include "conn/conn.php";
?>
<script language="javascript">
function check(){
		var types=list.grade.value;
		if(types=="2"){
			list.father.disabled=false;
		}
		else{
			list.father.disabled=true;
		}	
	}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<table width="558" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
<form name="list" method="post" action="videolist_chk.php">
  <tr>
    <td width="567" height="26" align="center" valign="middle"><font style="font-size:13px; ">音 频 目 录 名 称 添 加</font></td>
  </tr>
  <tr>
    <td><table width="559" height="94" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="92"><table width="404" height="90" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="402" valign="top"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="15" colspan="2">&nbsp;</td>
                </tr>
              <tr>
                <td width="150" height="40" align="right" valign="middle">目 录 名 称：</td>
                <td width="250" height="40" align="left" valign="middle"><input name="names" type="text" id="names"></td>
              </tr>
              <tr>
                <td height="40" align="right" valign="middle">目 录 级 别：</td>
                <td height="40" align="left" valign="middle"><select name="grade" OnChange="check()">
                  <option value="1" selected>一级目录</option>
                  <option value="2">二级目录</option>
                </select></td>
              </tr>
              <tr>
                <td height="40" align="right" valign="middle">父 级 名 称：</td>
                <td height="40" align="left" valign="middle">
				<select name="father" disabled>
				<?php
					$l_sqlstr = "select * from tb_videolist where grade = '1'";
					$l_rst = $conn->execute($l_sqlstr);
					while(!$l_rst->EOF){
				?>	
				<option value="<?php echo $l_rst->fields[2]; ?>"><?php echo $l_rst->fields[2]; ?></option>
				<?php
						$l_rst->MoveNext();
					}
				?>
                </select></td>
              </tr>
              <tr>
                <td height="30" colspan="2" align="center" valign="middle">
                    <input name="Submit" type="submit" class="submit" value="添  加" onclick="return n_chk();">
                    <input name="Submit2" type="button" class="submit" value="返  回" onClick="javascript:top.window.close()"></td>
                </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
 </form>
</table>