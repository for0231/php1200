<?php
include_once("top.php");
include_once("bbs_top.php");
$sql1=mysql_query("select * from tb_user where usernc='".$_SESSION["unc"]."'",$conn);
$info1=mysql_fetch_array($sql1);
?>
<table width="920" height="3" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="870" border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
  <tr>
    <td bgcolor="#FFFFFF">
<table width="750"><tr><td></td></tr></table>
<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0" background="images/lt_15(2).jpg">
<tr>
    <td height="2"></td>
  </tr>  
<tr>
    <td class="a9">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ids;?></td>
  </tr>
</table>
<table width="750" height="300" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
      <tr>
        <td width="250" rowspan="3" bgcolor="#FFFFFF"><div align="center">
                    <table width="150" border="0" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td height="15">&nbsp;</td>
                      </tr>
                    </table>
                    <table width="150" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td>
						<div align="center"><img src="<?php if($info1[photo]!="") echo $info1[photo]; else echo "images/head/0.gif";?>" /></div></td>
                      </tr>
                    </table>
                    <table width="150" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td><div align="center">
						<?php 
						
						  echo "当前用户：&nbsp;".$info1[usernc]; 
						
						 ?></div></td>
                      </tr>
                    </table>
                    <table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td height="20"><div align="center"><img src="images/lt_15(6).jpg" width="42" height="16" alt="<?php echo $info1[email];?>"/><img src="images/lt_15(7).jpg" width="48" height="16" alt="<?php echo $info1[qq]; ?>"/><img src="images/lt_15(8).jpg" width="53" height="16" alt="<?php echo $info1[ip]; ?>"/></div></td>
                      </tr>
                    </table><table width="180" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="10">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="22">用户级别：<?php if($info1["usertype"]=="1") echo "管理员";else echo "普通会员";?></td>
                      </tr>
                      <tr>
                        <td height="22">发贴总数：<?php echo $info1["pubtimes"];?></td>
                      </tr>
                      <tr>
                        <td height="22">注册时间：<?php echo $info1["regtime"];?></td>
                      </tr>
                    </table>
          </div></td>
    
        <td width="530" rowspan="3" bgcolor="#FFFFFF">
		  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
              <form name="form_bbs" method="post" action="retrieve.php" enctype="multipart/form-data">
                <tr>
                  <td height="20" colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td width="84" height="30"><div align="right">所属版块：</div></td>
                  <td width="400"><div align="left">
                    <select name="bbs_type" class="inputcss" style="background-color:#6EBEC7">
                      <?php
	                            $sql=mysql_query("select * from tb_type_small order by createtime desc",$conn);
	                            $info=mysql_fetch_array($sql);
	                            if($info==false)
	                              {
	                                echo "<option>暂无讨论区</option>";
	                               }
	                            else
	                              { 
	                                 do
	                                  { 
						 ?>
                      <option value="<?php echo $info[id] ;?>"<?php if($_GET[id]==$info[id]){echo "selected=\"selected\"";}?>><?php echo $info[title];?></option>
				           <?php				   
	                                   }
	                                 while($info=mysql_fetch_array($sql));
	                                } 
	                          ?>
                    </select>
                  </div></td>
                </tr>
                <tr>
                  <td height="30"><div align="right">帖子主题：</div></td>
                  <td height="30"><div align="left">
                    <input type="text" name="bbs_title" size="55" class="inputcss" maxlength="50" style="background-color:#6EBEC7">
                  </div></td>
                </tr>


                <tr>
                  <td height="30" colspan="2">&nbsp;<img src="images/lt_15(12).jpg" width="20" height="18">&nbsp;&nbsp;您现在的心情如何?                </td>
                </tr>
                <tr>
                  <td height="100" colspan="2"><div align="center">
                      <table height="30" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <?php 
						  
							 for($i=1;$i<=24;$i++)
							 { 
							  
							   if($i%6==0)
							    {
							?>
                          <td width="40" height="30"><div align="center"><img src=<?php echo("images/bbsface/face".($i-1).".gif");?> width="20" height="20"></div></td>
                          <td width="40" height="30"><div align="center">
                              <input type="radio" name="bbs_head" value="<?php echo("images/bbsface/face".($i-1).".gif");?>">
                          </div></td>
                        </tr>
                        <?php
							      }
								  else
								  {
							?>
                        <td width="40" height="30"><div align="center"><img src=<?php echo("images/bbsface/face".($i-1).".gif");?> width="20" height="20"></div></td>
                <td width="40" height="30"><div align="center">
                    <input type="radio" name="bbs_head" value="<?php echo("images/bbsface/face".($i-1).".gif");?>" <?php if($i==1) { echo "checked";}?>>
                </div></td>
                          <?php	   
								   }
								
							  }	
							?>
                      </table>
                  </div></td>
                </tr>
				 <tr>
                  <td height="20" colspan="2">
                    <div align="center">图片：
                      <input name="bbs_photo" type="file" id="bbs_photo" size="24" class="inputcss" style="background-color:#6EBEC7" />
                    (*图片不能超过2MB,格式为.gif/.jpg)</div></td>
                </tr>
                <tr>
                  <td height="120" colspan="2"><div align="center">
                    <textarea name="content1" cols="60" rows="10" id="content1" class="inputcss" style="background-color:#6EBEC7"></textarea>
                  </div></td>
                </tr>
				<tr>
                  <td height="10" colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" colspan="2"><div align="center">
                    <INPUT name="Submit" type=submit id="Submit" value="提交"> 
	<INPUT type=reset value="重填"> 
	</div></td>
                </tr>
				<tr>
                  <td height="10" colspan="2">&nbsp;</td>
                </tr>
              </form>
            </table>
		
		</td>
      </tr>
    </table></td>
  </tr>
</table>

<?php
include_once("bottom.php");
?>