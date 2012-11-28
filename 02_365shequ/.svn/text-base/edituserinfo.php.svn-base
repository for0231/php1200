<?php
include_once("top.php");
?>
<table width="870" height="30" align="center" background="images/bg_14(1).jpg"><tr><td width="129" rowspan="2">&nbsp;</td>
    <td width="729"></td>
</tr>
  <tr>
    <td><span class="a9">更改用户注册信息</span></td>
  </tr>
</table>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">
<?php
		$usernc=$_SESSION["unc"];
		if($usernc==""){
			echo "<script>window.location.href='register.php';</script>";
			exit;
		}
        $sql=mysql_query("select * from tb_user where usernc='".$usernc."'",$conn);
        $info=mysql_fetch_array($sql);
        ?>
                              <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
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
		 
		    
			
		    return(true);
		   }
		 
		 </script>
                                <form action="saveedituserinfo.php" method="post" name="form1" id="form1" onsubmit="return chkinput(this)">
                                  <tr>
                                    <td width="101" height="30"><div align="center">用户名：</div></td>
                                    <td width="499">&nbsp;<?php echo $_SESSION["unc"];?></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">真实姓名：</div></td>
                                    <td height="30">&nbsp;
                                        <input type="text" name="truename" size="25" class="inputcss" value="<?php echo $info[truename];?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">性别：</div></td>
                                    <td height="30">&nbsp;
                                        <select name="sex" class="inputcss">
                                          <option selected="selected" value="">请选择</option>
                                          <option value="男" <?php if($info[sex]=="男") echo "selected=selected"?>>男</option>
                                          <option value="女" <?php if($info[sex]=="女") echo "selected=selected"?>>女</option>
                                      </select></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">邮箱地址：</div></td>
                                    <td height="30">&nbsp;
                                        <input type="text" name="email" size="25" class="inputcss" value="<?php echo $info[email];?>" />
                                      &nbsp;(为了便于工作人员与您联系，请填写正确的E-mail地址！)</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">联系电话：</div></td>
                                    <td height="30">&nbsp;
                                        <input type="text" name="tel" size="25" class="inputcss" value="<?php echo $info[tel];?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">邮编：</div></td>
                                    <td height="30">&nbsp;
                                        <input type="text" name="yb" size="25" class="inputcss" value="<?php echo $info[yb];?>" />
                                      &nbsp;(邮编只能由数字组成，并且为6位!)</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">QQ号码：</div></td>
                                    <td height="30">&nbsp;
                                        <input type="text" name="qq" size="25" class="inputcss" value="<?php echo $info[qq];?>" />
                                      &nbsp;(QQ号只能由数字组成!)</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">家庭住址：</div></td>
                                    <td height="30">&nbsp;
                                        <input type="text" name="address" size="35" class="inputcss" value="<?php echo $info[address];?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">密码保护问题：</div></td>
                                    <td height="30">&nbsp;
                                        <select name="question">
                                          <option value="">请选择一个问题</option>
                                          <option value="我就读的第一所学校的名称？" <?php if($info[question]=="我就读的第一所学校的名称？") echo "selected=selected"?>>我就读的第一所学校的名称？</option>
                                          <option  value="我最喜欢的休闲运动是什么？"<?php if($info[question]=="我最喜欢的休闲运动是什么？") echo "selected=selected"?>>我最喜欢的休闲运动是什么？</option>
                                          <option value="我最喜欢的运动员是谁？" <?php if($info[question]=="我最喜欢的运动员是谁？") echo "selected=selected"?>>我最喜欢的运动员是谁？</option>
                                          <option value="我最喜欢的物品的名称？" <?php if($info[question]=="我最喜欢的物品的名称？") echo "selected=selected"?>>我最喜欢的物品的名称？</option>
                                          <option value="我最喜欢的歌曲？" <?php if($info[question]=="我最喜欢的歌曲？") echo "selected=selected"?>>我最喜欢的歌曲？</option>
                                          <option value="我最喜欢的食物？" <?php if($info[question]=="我最喜欢的食物？") echo "selected=selected"?>>我最喜欢的食物？</option>
                                          <option value="我最爱的人的名字？" <?php if($info[question]=="我最爱的人的名字？") echo "selected=selected"?>>我最爱的人的名字？</option>
                                          <option value="我最爱的电影？" <?php if($info[question]=="我最爱的电影？") echo "selected=selected"?>>我最爱的电影？</option>
                                          <option value="我妈妈的生日？" <?php if($info[question]=="我妈妈的生日？") echo "selected=selected"?>>我妈妈的生日？</option>
                                          <option value="我的初恋日期？" <?php if($info[question]=="我的初恋日期？") echo "selected=selected"?>>我的初恋日期？</option>
                                      </select></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">您的答案：</div></td>
                                    <td height="30">&nbsp;
                                        <input type="text" name="answer" size="35" class="inputcss"  value="<?php echo $info[answer];?>" />
                                      &nbsp;(为了能够找回丢失的密码，请记住该答案！)</td>
                                  </tr>
                                  <tr>
                                    <td height="50" colspan="2"><div align="center">
                                        <input type="hidden" name="usernc" value="<?php echo $_SESSION["unc"];?>" />
                                        <input type="submit" name="submit"   value="更改注册信息" />
                                      &nbsp;&nbsp;
                                      <input name="reset" type="reset"  value="取消更改" />
                                    </div></td>
                                  </tr>
                                </form>
                              </table>
</td></tr></table>
<?php
include_once("bottom.php");
?>
