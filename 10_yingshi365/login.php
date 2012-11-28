<table width="265" border="0" cellspacing="0" cellpadding="0">
	<form name="login" id="login" action="login_chk.php" method="post">
      <tr>
        <td height="30" colspan="2" align="center" valign="top" background="images/login.jpg">&nbsp;</td>
        </tr>
		<tr>
		  <td height="20" colspan="2" align="center" valign="middle" class="l_td">&nbsp;</td>
		  </tr>
      <tr>
        <td width="93" height="35" align="right" valign="middle" class="l_td"><strong>用户名：</strong></td>
        <td width="180" height="35" align="left" valign="middle" class="l_td"><input type="text" id="name" name="name" size="15" class="mytext" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" /></td>
      </tr>
      <tr>
        <td height="35" align="right" valign="middle" class="l_td"><strong>密 &nbsp;码：</strong></td>
        <td height="35" align="left" valign="middle" class="l_td"><input type="password" id="password" name="password"  size="15" class="mytext" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/></td>
      </tr>
      <tr>
        <td height="40" colspan="2" align="left" valign="middle" class="l_td">
		<input type="submit" name="login" id="login" value="" onclick="return chk_log();"/><input type="button" name="reg" id="reg" value="" onclick="javacript:Wopen=open('operation.php?action=reg','用户注册','height=600,width=665,scrollbars=no');" /></td>
        </tr>
		<tr>
			<td height="25" colspan="2" align="left" valign="top" class="l_td"><a href="#" id="dw" class="b" onclick="javascript:Wopen=open('operation.php?action=found','found_pwd','width=665,height=300,scrollbars=no')">[忘记密码]</a></td>
		</tr>
		<tr>
		  <td height="20" colspan="2" align="center" valign="middle" class="l_td">&nbsp;</td>
		  </tr>
		</form>
    </table>