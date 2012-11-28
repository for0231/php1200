<?php
 include("top.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="229" height="438" align="center" valign="top" bgcolor="#F0F0F0"><div align="center">
      <?php include("left.php");?>
	
      </div></td>
    <td width="561" align="center" valign="top" bgcolor="#FFFFFF"><table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
      <table width="550" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="left">&nbsp;&nbsp;当前用户&nbsp;<span style="color: #0000FF">》&nbsp;</span><?php echo $_SESSION[username];?>&nbsp;<span style="color: #0000FF">》</span><a href="usercenter.php">修改个人信息</a>&nbsp;<span style="color: #0000FF">》</span><a href="userleaveword.php">用户留言</a>&nbsp;<span style="color: #0000FF">》</span><a href="changeuserpwd.php">修改密码</a>&nbsp;<span style="color: #0000FF">》</span><a href="logout.php">注销离开&nbsp;</a></div></td>
        </tr>
      </table>
      <table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="250" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" bgcolor="#FFEDBF"><div align="center" style="color: #760602">修改用户密码</div></td>
        </tr>
        <tr>
          <td height="80" bgcolor="#FFEDBF"><table width="250" height="80" border="0" align="center" cellpadding="0" cellspacing="1">
              <script language="javascript">
		  function chkinput1(form)
			  {
			    if(form.p1.value=="")
				{
				  alert("请输入原密码!");
				  form.p1.select();
				  return(false);
				}
				if(form.p2.value=="")
				{
				  alert("请输新密码!");
				  form.p2.select();
				  return(false);
				}      
			   if(form.p3.value=="")
				{
				  alert("请输确认密码!");
				  form.p3.select();
				  return(false);
				} 
				if(form.p2.value!=form.p3.value)
				{
				  alert("密码与确认密码不同!");
				  form.p2.select();
				  return(false);
				}
				if(form.p2.value.length<6)
				{
				  alert("新密码长度应大于6!");
				  form.p2.select();
				  return(false);
				}
				return(true);
			  }
		  </script>
              <form name="form1" method="post" action="savechangeuserpwd.php" onSubmit="return chkinput1(this)">
                <tr>
                  <td width="77" height="20" bgcolor="#FFFFFF"><div align="center">原密码：</div></td>
                  <td width="170" bgcolor="#FFFFFF"><div align="left">
                      <input type="password" name="p1" size="20" class="inputcss">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">新密码：</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="password" name="p2" size="20" class="inputcss">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">确认新密码：</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="password" name="p3" size="20" class="inputcss">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center">
                      <input name="submit2" type="submit" class="buttoncss" value="更改">
                  </div></td>
                </tr>
              </form>
          </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>