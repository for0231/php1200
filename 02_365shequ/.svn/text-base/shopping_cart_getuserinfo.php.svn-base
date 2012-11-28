<?php
include_once("conn/conn.php");
include_once("top.php");
?>
<table width="870" height="30" align="center" background="images/bg_14(1).jpg"><tr><td width="129" rowspan="2">&nbsp;</td>
    <td width="729"></td>
</tr>
  <tr>
    <td><span class="a9">购物结算</span></td>
  </tr>
</table>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF"> <form name="form11" method="post" action="savebuyuser.php" onsubmit="return(chkinput(this))"> 	


<table width="750" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><br>
		  
		  
		  <table width="680" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
           
		   
		   
		    <script language="javascript">
			    function chkinput(form){
				 if(form.recuser.value==""){
				   alert('请输入收货人姓名！');
				   form.recuser.focus();
				   return(false);
				 }
				 
				 if(form.sex.value==""){
				   alert('请选择收货人性别！');
				   form.sex.focus();
				   return(false);
				 }
				 
				  if(form.city.value==""){
				   alert('请选择收货人所在城市！');
				   form.city.focus();
				   return(false);
				 }
				 
				 if(form.address.value==""){
				   alert('请输入收货人联系地址！');
				   form.address.focus();
				   return(false);
				 }
				  
				 if(form.yb.value==""){
				   alert('请输入收货人邮编！');
				   form.yb.focus();
				   return(false);
				 }
				 
				 if(isNaN(form.yb.value)){
				   alert('邮编只能由数字组成！');
				   form.yb.focus();
				   return(false);
				 }
				 
				 if(form.yb.value.length!=6){
				   alert('邮编号由6位组成！');
				   form.yb.focus();
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
				
				
				
				 if(form.mtel.value==""){
				   alert('请输入移动电话号码！');
				   form.mtel.focus();
				   return(false);
				 }
				 
			  	 if(form.gtel.value==""){
				   alert('请输入固定电话号码！');
				   form.gtel.focus();
				   return(false);
				 }
	 
				 
			  return(true);
				
			}
			  
			  </script>
			  
            	   
		   
		    <tr>
              <td bgcolor="#FFFFFF">
 <table width="680" border="0" align="center" cellpadding="0" cellspacing="0">
			
			   
			    <tr>
                  <td height="40"><table width="80" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td bgcolor="#CCCCCC"><div align="center">收货人信息</div></td>
                    </tr>
                  </table></td>
                  <td colspan="3">&nbsp;<font color="#FF0000">*</font>&nbsp;<font color="#999999">请务必正确填写您的个人详细信息！</font></td>
                  </tr>
                <tr>
                  <td width="120" height="30"><div align="right">收货人：</div></td>
                  <td colspan="3">&nbsp;<input type="text" name="recuser" size="20" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30"><div align="right">性别：</div></td>
                  <td height="30" colspan="3">&nbsp;<select name="sex">
                      <option value="" selected="selected">-请选择-</option>
                      <option value="男">--男--</option>
                      <option value="女">--女--</option>
                    </select>                  </td>
                </tr>
				
				  <tr>
                  <td height="30"><div align="right">所在城市：</div></td>
                  <td height="30" colspan="3">&nbsp;<select name="city">
                      <option value="" selected="selected">-请选择-</option>
                       <?php
					     $sql=mysql_query("select city,id from tb_city order by addtime desc",$conn);
						 $info=mysql_fetch_array($sql);
						 if($info==false){
						   echo " <option >-暂无城市信息-</option>";
						 
						 }else{
					       do{
					   ?>
					  
					    <option value="<?php echo $info[id];?>"><?php echo $info[city];?></option>
                       <?php
					     }while($info=mysql_fetch_array($sql)); 
					   }
					   ?>
                    </select>                 
					
					 </td>
                </tr>
				
                <tr>
                  <td height="30"><div align="right">详细联系地址：</div></td>
                  <td height="30" colspan="3">&nbsp;<input type="text" name="address" size="60" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30"><div align="right">邮政编码：</div></td>
                  <td height="30" colspan="3">&nbsp;<input type="text" name="yb" size="20" class="inputcss"></td>
                </tr>
				<tr>
                  <td height="30"><div align="right">QQ号码：</div></td>
                  <td height="30" colspan="3">&nbsp;<input type="text" name="qq" size="20" class="inputcss"></td>
                </tr>
				<tr>
                  <td height="30"><div align="right">E-mail：</div></td>
                  <td height="30" colspan="3">&nbsp;<input type="text" name="email" size="20" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30">&nbsp;</td>
                  <td height="30" colspan="3">&nbsp;<font color="#FF0000">*</font>&nbsp;<font color="#999999">请务必正确填写您的联系地址和邮编，以确保订单和货物顺利达到！</font></td>
                  </tr>
                <tr>
                  <td height="30"><div align="right">移动电话：</div></td>
                  <td width="150" height="30">&nbsp;<input type="text" name="mtel" size="20" class="inputcss"></td>
                  <td width="67"><div align="right">固定电话：</div></td>
                  <td width="343">&nbsp;<input type="text" name="gtel" size="20" class="inputcss"></td>
                </tr>
                
               
				
				
              </table></td>
            </tr>
          </table><br>
		  <table width="680" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
  <tr>
    <td bgcolor="#FFFFFF"><table width="680" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="120" height="40"><table width="80" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#CCCCCC"><div align="center">邮递方式</div></td>
          </tr>
        </table></td>
        <td width="560">&nbsp;<font color="#FF0000">*</font>&nbsp;<font color="#999999">请选择送货方式！</font></td>
      </tr>
      
      <tr>
        <td height="30">&nbsp;</td>
        <td height="30">
        
          <input type="radio" name="shfs" value="1" checked="checked"/>
          普通邮递<br><br>
          <input type="radio" name="shfs" value="2" />
         邮政特快专递&nbsp;EMS
    
        </td>
      </tr>
	  
	  <tr>
        <td height="10"></td>
        <td height="10">
        
    
        </td>
      </tr>
    </table></td>
  </tr>
</table>

		  
		  <br><table width="680" height="40" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
  <tr>
    <td bgcolor="#FFFFFF"><table width="680" height="40" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="120"><table width="80" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#CCCCCC"><div align="center">生成订单</div></td>
          </tr>
        </table></td>
        <td width="558">
      <input type="image"  src="images/bg_14(9).jpg">
    &nbsp;&nbsp;<img src="images/bg_14(13).jpg" width="69" height="20" onclick="form11.reset()" style="cursor:hand"/></td>
      </tr>
    </table></td>
    </tr>
</table>



</td>
        </tr>
      </table></form>
</td>
        </tr></table>
<?php
include_once("bottom.php");
?>