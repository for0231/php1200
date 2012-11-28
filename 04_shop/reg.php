<?php
 include("top.php");
?>
<script language="javascript">
  function chknc(nc)
  {
    window.open("chkusernc.php?nc="+nc,"newframe","width=200,height=10,left=500,top=200,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
  }
</script>
<script language="javascript">
  function chkinput(form)
  {
    if(form.usernc.value=="")
	{
	 alert("请输入昵称!");
	 form.usernc.select();
	 return(false);
	}
	if(form.p1.value=="")
	{
	 alert("请输入注册密码!");
	 form.p1.select();
	 return(false);
	}
    if(form.p2.value=="")
	{
	 alert("请输入确认密码!");
	 form.p2.select();
	 return(false);
	 }	
	if(form.p1.value.length<6)
	 {
	 alert("注册密码长度应大于6!");
	 form.p1.select();
	 return(false);
	 }	
	if(form.p1.value!=form.p2.value)
	 {
	 alert("密码与重复密码不同!");
	 form.p1.select();
	 return(false);
	 }
   if(form.email.value=="")
	{
	 alert("请输入电子邮箱地址!");
	 form.email.select();
	 return(false);
	 }
	if(form.email.value.indexOf('@')<0)
	{
	 alert("请输入正确的电子邮箱地址!");
	 form.email.select();
	 return(false);
	 }
   if(form.tel.value=="")
	{
	 alert("请输入联系电话!");
	 form.tel.select();
	 return(false);
	 }
  if(form.truename.value=="")
	{
	 alert("请输入真实姓名!");
	 form.truename.select();
	 return(false);
	 }
  if(form.sfzh.value=="")
	{
	 alert("请输入身份证号!");
	 form.sfzh.select();
	 return(false);
	 }
  if(form.dizhi.value=="")
	{
	 alert("请输入家庭住址!");
	 form.dizhi.select();
	 return(false);
	 }
  if(form.tsda.value=="")
	{
	 alert("请输密码提示答案!");
	 form.tsda.select();
	 return(false);
	 }
   if((form.ts1.value==1)&&(form.ts2.value==""))	
     {
	 alert("请选择或输入密码提示答案!");
	 form.ts2.select();
	 return(false);
	 }
   return(true);
  }
</script>
<table width="766" height="350" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="229" height="350" align="center" valign="top" bgcolor="#F0F0F0"><?php include("left.php");?></td>
    <td width="561" align="center" valign="top" bgcolor="#FFFFFF"><table width="557"  height="15" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="500"><table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="557" height="46" background="images/user.gif"><div align="center" style="color: #FFFFFF"></div></td>
            </tr>
            <tr>
              <td  bgcolor="#555555"><table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
                  <form name="form1" method="post" action="savereg.php" onSubmit="return chkinput(this)">
                    <tr>
                      <td width="100" height="20" bgcolor="#FFFFFF"><div align="center">&nbsp;&nbsp;用户昵称：</div></td>
                      <td width="397" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="usernc" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">&nbsp;*</span>&nbsp;
                          <input name="button2" type="button" class="buttoncss" onclick="chknc(form1.usernc.value)" value="查看昵称是否已用">
                      </div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">注册密码：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="password" name="p1" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">确认密码：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="password" name="p2" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">E-mail：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="email" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">QQ&nbsp;号码：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="qq" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                      </div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">邮政编码：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="yb" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                      </div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">联系电话：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="tel" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">(手机号)*</span></div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">真实姓名：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="truename" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span> </div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">身份证号：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="sfzh" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">家庭住址：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="dizhi" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">密码提示：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <select name="ts1" class="inputcss">
                            <option selected value=1>请选择问题</option>
                            <option value="您的生日">您的生日</option>
                            <option value="你的爱好">你的爱好</option>
                            <option value="您母亲的名字">您母亲的名字</option>
                            <option value="您父亲的名字">您父亲的名字</option>
                            <option value="您最喜欢的花">您最喜欢的花</option>
                          </select>
&nbsp;&nbsp;其他:&nbsp;&nbsp;
                      <input type="text" name="ts2" class="inputcss" size="15" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                      <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">提示答案：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="tsda" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center">
                          <input name="submit2" type="submit" class="buttoncss" value="提交">
&nbsp;&nbsp;
                      <input name="reset" type="reset" class="buttoncss" value="重写">
                      </div></td>
                    </tr>
                  </form>
              </table></td>
            </tr>
          </table>
            <table width="557" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="547"><div align="center" style="color: #FF0000">注意：带*为必添内容!</div></td>
              </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>