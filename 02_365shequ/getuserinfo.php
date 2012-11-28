<?php
include_once("top.php");
?>
<table width="870" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
  <tr>
    <td bgcolor="#FFFFFF" valign="top"><table width="850" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
     <table width="750" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr>
                  <td bgcolor="#FFFFFF" valign="top">
<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0" background="images/lt_15(2).jpg">
<tr><td height="2"></td></tr>
          <tr>
            <td width="740" class="a9"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户录入&nbsp;版块</div></td>
            <td width="160"></td>
          </tr>
</table>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><?php
							 $usernc=trim($_POST[usernc]);
							 if($usernc==""){
							 echo "<script>window.location.href='register.php';</script>";
							 exit;
							 }
                             $sql=mysql_query("select usernc from tb_user where usernc='".$usernc."'",$conn);
                             $info=mysql_fetch_array($sql);
                             if($info!=false){
                            ?>
                              <table width="600" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td><div align="center"><font color="#FF0000">对不起，您的用户名已被其他网友所占用，请重新选择！</font></div></td>
                                </tr>
                                <tr>
                                  <td><div align="center">
                                    <input name="button" type="button" onclick="window.location.href='register.php'" value="返回" />
                                  </div></td>
                                </tr>
                              </table>
                            <?php
							}else{
							?>
                              <table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
                                <script language="JavaScript" type="text/javascript">
		   function chkinput(form){
		    
		     if(form.truename.value==""){
			   alert("请填写您的真实姓名！");
			   form.truename.select();
			   return(false);
			 }
	
             if(form.sex.value==""){
			    alert("请选择您的性别！");
			    form.sex.focus();
			    return(false);
			  }
		     if(form.email.value=="")
	          {
	             alert("请输入E-mail地址!");
	             form.email.select();
	             return(false);
	            }
	        var i=form.email.value.indexOf("@");
	        var j=form.email.value.indexOf(".");
	       if((i<0)||(i-j>0)||(j<0))
	        {
              alert("请输入正确的E-mail地址!");
	          form.email.select();
	          return(false);
	        }
		   
		    if(form.tel.value==""){
			   alert("请填写联系电话！");
			   form.tel.select();
			   return(false);
			 }
		  
		   
		     if(form.yb.value==""){
			   alert("请填写邮编地址！");
			   form.yb.select();
			   return(false);
			 }
		    if(isNaN(form.yb.value)==true){
			
			   alert("邮编只能由数字组成！");
			   form.yb.select();
			   return(false);
			}
		   
		    if(form.yb.value.length!=6){
			
			   alert("邮编长度只能为6位！");
			   form.yb.select();
			   return(false);
			
			}
		   
		    if(form.qq.value==""){
			
			   alert("请填写您的QQ号码！");
			   form.qq.select();
			   return(false);
			
			}
		   
		     if(isNaN(form.qq.value)==true){
			
			   alert("QQ号只能由数字组成！");
			   form.qq.select();
			   return(false);
			}
			
			if(form.address.value==""){
			
			   alert("请填写您的联系地址！");
			   form.address.select();
			   return(false);
			}
		   
		    if(form.question.value==""){
			
			   alert("请选择找回密码问题！");
			   form.question.focus();
			   return(false);
			}
			if(form.answer.value==""){
			
			   alert("请填写找会密码答案！");
			   form.answer.select();
			   return(false);
			}
		    if(form.xym.value==""){
			   alert("请填写验证码！");
			   form.xym.select();
			   return(false);
			
			}
		    
			
		    return(true);
		   }
		 
		 </script>
                                <form action="savereginfo.php" method="post" name="form1" id="form1" onsubmit="return chkinput(this)">
                                  <tr>
                                    <td height="30" colspan="3"><div align="center"><font color="#FF0000"><br>您已经成功的申请了本站的用户名：</font>&nbsp;<font color="#0000FF"><?php echo $_POST["usernc"]?></font>&nbsp;<font color="#FF0000">如果注册为本站的用户，您还应该填写以下信息！</font><br><br><font color="#0000FF">注意：以下注册信息均为必添内容！</font></div></td>
                                  </tr>
                                  <tr>
                                    <td width="107" height="30"><div align="center">真实姓名：</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input type="text" name="truename" size="25" class="inputcss" />&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">性别：</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <select name="sex" class="inputcss">
                                          <option selected="selected" value="">请选择</option>
                                          <option value="男">男</option>
                                          <option value="女">女</option>
                                      </select></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">邮箱地址：</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input type="text" name="email" size="25" class="inputcss" />
                                      &nbsp;(为了便于工作人员与您联系，请填写正确的E-mail地址！)</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">联系电话：</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input type="text" name="tel" size="25" class="inputcss" /></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">邮编：</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input type="text" name="yb" size="25" class="inputcss" />
                                      &nbsp;(邮编只能由数字组成，并且为6位!)</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">QQ号码：</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input type="text" name="qq" size="25" class="inputcss" />
                                      &nbsp;(QQ号只能由数字组成!)</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">家庭住址：</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input type="text" name="address" size="35" class="inputcss" /></td>
                                  </tr>
								  
								  
								  
								  <tr>
          <td ><div align="center">头像选择： </div></td>
          <td width="100"  height="30">&nbsp;
		  <select name="photo" onchange="javascript:user_face.src=this.value">
                      <?php
					  for($i=0;$i<=11;$i++){
					  ?>
					   <option value="<?php echo "images/face/".$i.".gif"?>"><?php echo $i.".gif"?></option>
					  <?php
					  }
					  ?>
            </select></td>
     
          <td width="393"><img id=user_face src="images/face/0.gif" width="60" height="60"></td>
								  </tr>
								  
								  
								  
								  
								  
								  
                                  <tr>

                                    <td height="30"><div align="center">密码保护问题：</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <select name="question">
                                          <option value="" selected="selected">请选择一个问题</option>
                                          <option value="我就读的第一所学校的名称？">我就读的第一所学校的名称？</option>
                                          <option  value="我最喜欢的休闲运动是什么？">我最喜欢的休闲运动是什么？</option>
                                          <option value="我最喜欢的运动员是谁？">我最喜欢的运动员是谁？</option>
                                          <option value="我最喜欢的物品的名称？">我最喜欢的物品的名称？</option>
                                          <option value="我最喜欢的歌曲？">我最喜欢的歌曲？</option>
                                          <option value="我最喜欢的食物？">我最喜欢的食物？</option>
                                          <option value="我最爱的人的名字？">我最爱的人的名字？</option>
                                          <option value="我最爱的电影？">我最爱的电影？</option>
                                          <option value="我妈妈的生日？">我妈妈的生日？</option>
                                          <option value="我的初恋日期？">我的初恋日期？</option>
                                      </select></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">您的答案：</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input type="text" name="answer" size="35" class="inputcss" />
                                      &nbsp;(为了能够找回丢失的密码，请记住该答案！)</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">效验码：</div></td>
                                    <td height="30" colspan="2"><table width="400" height="30" border="0" align="left" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="162">&nbsp;
                                            <input type="text" name="xym" size="20" class="inputcss" /></td>
                                          <td width="238"><?php
							   $num=intval(mt_rand(1000,9999));
							   
							   for($i=0;$i<4;$i++)
							   {
							    echo "<img src=images/code/".substr(strval($num),$i,1).".gif>";
							   }
							?></td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td height="50" colspan="3"><div align="center">
                                        <input type="hidden" value="<?php echo $num;?>" name="num" />
                                        <input type="hidden" name="usernc" value="<?php echo $_POST["usernc"];?>" />
                                        <input type="hidden" name="pwd1" value="<?php echo $_POST["userpwd1"];?>" />
                                        <input type="submit" name="submit"  value="提交注册信息" />
                                      &nbsp;&nbsp;
                                      <input name="reset" type="reset"  value="重新填写注册信息" />
                                    </div></td>
                                  </tr>
                                </form>
                            </table>
                            <?php
							}
							?>
                          </td>
                        </tr>
                    </table></td>
                </tr>
            </table>
      <table id="showget_u_p" style="display:none" width="700" height="125" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="20">&nbsp;</td>
          </tr>
          <tr>
            <td height="120" bgcolor="#137CE6"><table width="700" height="120" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr>
                  <td bgcolor="#FFFFFF" valign="top"><table width="700" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="40"><img src="images/top.gif" width="40" height="30" /></td>
                        <td width="660" background="images/top_background.gif"><font color="#FFFFFF">登录信息录入</font></td>
                      </tr>
                    </table>
                      <table width="350" height="120" border="0" align="center" cellpadding="0" cellspacing="0">
                        <script language="JavaScript" type="text/javascript">
						  function chk_reg_input(form){
						    if(form.usernc.value==""){
							  alert("请输入用户名！");
							  form.usernc.select();
							  return(false);
							}
							 if(form.userpwd1.value==""){
							  alert("请输入登录密码！");
							  form.userpwd1.select();
							  return(false);
							}
							 if(form.userpwd2.value==""){
							  alert("请输入确认密码！");
							  form.userpwd2.select();
							  return(false);
							}
							 if(form.userpwd1.value!=form.userpwd1.value){
							  alert("登录密码与确认密码不同！");
							  form.userpwd1.select();
							  return(false);
							}
							if(form.userpwd1.value.length<6){
							  alert("登录密码应大于6位！");
							  form.userpwd1.select();
							  return(false);
							}
						  return(true);
						  }
						
						</script>
                        <script language="JavaScript" type="text/javascript">
                         function open_chknc(x)
                          {
                          window.open("chkusernc.php?nc="+x,"newframe","top=250,left=450,width=150,height=100,menubar=no,toobar=no,location=no,scrollbars=no,resizeable=no");
                          }
                      </script>
                        <form action="getuserinfo.php" method="post" name="from_reg" id="from_reg" onsubmit="return chk_reg_input(this)">
                          <tr>
                            <td width="81" height="30"><div align="center">用&nbsp;户&nbsp;名：</div></td>
                            <td width="184">&nbsp;
                                <input type="text" name="usernc" size="25" class="inputcss" maxlength="100" /></td>
                            <td width="85"><input name="button2" type="button" class="buttoncss" onclick="open_chknc(from_reg.usernc.value)" value="查看可用性" /></td>
                          </tr>
                          <tr>
                            <td height="30"><div align="center">登录密码：</div></td>
                            <td height="30" colspan="2">&nbsp;
                                <input type="text" name="userpwd1" size="25" class="inputcss" maxlength="100" /></td>
                          </tr>
                          <tr>
                            <td height="30"><div align="center">确认密码：</div></td>
                            <td height="30" colspan="2">&nbsp;
                                <input type="text" name="userpwd2" size="25" class="inputcss" maxlength="100" /></td>
                          </tr>
                          <tr>
                            <td height="30" colspan="3"><div align="center">
                              <input name="submit" type="submit" value="下一步" />
                              &nbsp;&nbsp;
                              <input name="reset" type="reset" value="重写" />
                            </div></td>
                          </tr>
                        </form>
                      </table></td>
                </tr>
            </table></td>
          </tr>
      </table>
      <table width="805" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td></td>
          </tr>
      </table></td>
  </tr>
</table>
<?php
include_once("bottom.php");
?>
