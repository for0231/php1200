<?php 
include("Conn/conn.php");?>
<table width="209" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="153" background="images/dl.gif"><table width="209" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="33" colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td width="15">&nbsp;</td>
              <td width="177"><table width="180" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td valign="top"><table width="100%" height="100" border="0" align="center" cellpadding="0" cellspacing="1">
                      <tr>
                        <td><table width="180" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td><table width="180" border="0" cellpadding="0" cellspacing="0">
                           <script language="javascript">
							 function chkuserinput(form){
							   if(form.username.value==""){
								  alert("请输入用户名!");
								  form.username.select();
								  return(false);
								}		
								if(form.userpwd.value==""){
								  alert("请输入用户密码!");
								  form.userpwd.select();
								  return(false);
								}	
								if(form.yz.value==""){
								  alert("请输入验证码!");
								  form.yz.select();
								  return(false);
								}	
							   return(true);				 
							 }
						  </script>
                                  <script language="javascript">
						    function openfindpwd(){
							window.open("openfindpwd.php","newframe","left=200,top=200,width=200,height=100,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
							   }
						</script>
                                  <form name="form2" method="post" action="chkuser.php" onSubmit="return chkuserinput(this)">
                                    <tr>
                                      <td height="10" colspan="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td width="50" height="20"><div align="right">用户：</div></td>
                                      <td height="20" colspan="2"><div align="left">
                                          <input type="text" name="username" size="19" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td height="20"><div align="right">密码：</div></td>
                                      <td colspan="2"><div align="left">
                                          <input type="password" name="userpwd" size="19" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td height="20"><div align="right">验证：</div></td>
                                      <td width="66" height="20"><div align="left">
                                          <input type="text" name="yz" size="10" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                      </div></td>
                                      <td width="64"><div align="left"> &nbsp;
                                              <?php
									   $num=intval(mt_rand(1000,9999));
									   for($i=0;$i<4;$i++){
										echo "<img src=images/code/".substr(strval($num),$i,1).".gif>";
									   }
									?>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td height="20" colspan="3">                                        <div align="right">
                                          <input type="hidden" value="<?php echo $num;?>" name="num">
                                          <input name="submit" type="submit" class="buttoncss" value="提 交">
<a href="agreereg.php">注册</a>&nbsp;<a href="javascript:openfindpwd()">找回密码</a>&nbsp;</div></td>
                                    </tr>
                                  </form>
                              </table></td>
                            </tr>
                        </table></td>
                      </tr>
                  </table></td>
                </tr>
              </table></td>
              <td width="17">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="39"><img src="images/gonggao.gif" width="209" height="39" border="0" usemap="#Map"></td>
        </tr>
        <tr>
          <td height="40" background="images/line3.gif"><table width="180"  border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><table width="180"  border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5"></td>
                  </tr>
                  <?php
								 $sql=mysql_query("select * from tb_gonggao order by time desc limit 0,5",$conn);
								 $info=mysql_fetch_array($sql);
								 if($info==false){
				  ?>
                  <tr>
                    <td height="20" align="center">本站暂无公告!</td>
                  </tr>
                  <?php
								 }
								 else{
								   do{
				  ?>
                  <tr>
                    <td height="20"><div align="center">
                      <table width="180"  border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="16" height="5"><div align="center"><img src="images/xing.gif" width="9" height="9"></div></td>
                          <td width="164" height="24"><div align="left"> <a href="showgg.php?id=<?php echo $info[id];?>">
                              <?php 
								 echo substr($info[title],0,24);
								  if(strlen($info[title])>24){
									echo "...";
								  } 
							   ?>
                          </a> </div></td>
                        </tr>
                      </table> 
                      </div></td>
                  </tr>
                  <?php
									 }
								   while($info=mysql_fetch_array($sql));
								 }
								?>
              </table></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="6" background="images/bline.gif"></td>
        </tr>
        <tr>
          <td height="40" background="images/link.gif">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top" background="images/line3.gif">
            <table width="180"  border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><table width="180"  border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5"></td>
                    </tr>
                    <?php
								 $sql=mysql_query("select * from tb_links order by id desc limit 0,5",$conn);
								 $info=mysql_fetch_array($sql);
								 if($info==false){
								?>
                    <tr>
                      <td height="20" align="center">本站暂无友情链接!</td>
                    </tr>
                    <?php
								 }
								 else{
								   do{
								?>
                    <tr>
                      <td height="20"><div align="center">
                          <table width="180"  border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="20" height="5"><div align="center"><img src="images/circle.gif" width="10" height="10"></div></td>
                              <td width="160" height="24"><div align="left"> <a href="<?php echo $info[linkurl];?>" target="_blank">
                                  <?php 
								 echo substr($info[linkname],0,24);
								  if(strlen($info[linkname])>24){
									echo "...";
								  } 
							   ?>
                              </a> </div></td>
                            </tr>
                          </table>
                      </div></td>
                    </tr>
                    <?php
									 }
								   while($info=mysql_fetch_array($sql));
								 }
								?>
                </table></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="6" background="images/bline.gif"></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <map name="Map">
        <area shape="rect" coords="159,15,195,29" href="showgonggao.php">
      </map>
      