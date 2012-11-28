<?php
include_once("top.php");
include_once("bbs_top.php");
?>
<?php
//根据$_GET传递的数据获取tb_bbs中的数据
$sqlb=mysql_query("select * from tb_bbs where id='".$_GET["id"]."'",$conn);
$infob=mysql_fetch_array($sqlb);
//根据$_GET传递的数据获取tb_user中的数据
$sql4=mysql_query("select * from tb_user where id='".$infob["userid"]."'",$conn);
$info4=mysql_fetch_array($sql4);
?>
<script language="javascript">
//设计回复帖子的文本框的输出方式
function show_reply(){
	if(reply_bbs1.style.display=="")
		{
			reply_bbs1.style.display="none" ;
			
			button_show_bbs.value="回复帖子";
		}
	else if(reply_bbs1.style.display=="none")
		{
			reply_bbs1.style.display="" ;
			
			button_show_bbs.value="关闭窗口";
		 }
				  
}
</script>
<table width="825" height="3" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>

<table width="870" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">  
  <tr>
    <td bgcolor="#FFFFFF">
<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0" background="images/lt_15(2).jpg">
<tr>
    <td height="2"></td>
  </tr>  
<tr>
    <td class="a9">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo unhtml($infob["title"]);?></td>
  </tr>
</table>
      <table width="750" height="200" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td width="200" valign="top" bgcolor="#FFFFFF"><div align="center"><table width="150" border="0" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td height="15">&nbsp;</td>
                      </tr>
                    </table>
                    <table width="150" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td><div align="center"><img src="<?php  echo $info4[photo];?>" /></div></td>
                      </tr>
                    </table>
                    <table width="150" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td><div align="center">发贴人：<?php echo $info4[usernc];?></div></td>
                      </tr>
                    </table>
                    <table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td height="20"><div align="center"><img src="images/lt_15(6).jpg" width="42" height="16" alt="<?php echo $info4[email];?>"/><img src="images/lt_15(7).jpg" width="48" height="16" alt="<?php echo $info4[qq];?>"/><img src="images/lt_15(8).jpg" width="53" height="16" alt="<?php echo $info4[ip];?>"/></div></td>
                      </tr>
                    </table>
                    <table width="180" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="22">用户级别：<?php if($info4["usertype"]=="1") echo "管理员";else echo "普通会员";?></td>
                      </tr>
                
                      <tr>
                        <td height="22">发贴总数：<?php echo $info4["pubtimes"];?></td>
                      </tr>
                      <tr>
                        <td height="22">注册时间：<?php echo $info4["regtime"];?></td>
                      </tr>
                    </table>
          </div></td>
          <td width="530" bgcolor="#FFFFFF" valign="top"><table width="500" height="200" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="35" height="20"><div align="center"><img src="images/lt_15(11).jpg" width="25" height="25"></div></td>
              <td><?php echo $infob["createtime"];?></td>
            </tr>
            <tr>
              <td height="150" colspan="2"><?php
                              if($infob[photo]!=""){
                                 $photos=substr($infob[photo],2,70);
echo (stripslashes($infob["content"]));                                 
                                 echo "<img src=\"$photos\">";
                               }else{
                                echo (stripslashes($infob["content"]));                               }
							  ?></td>
            </tr>
          </table>
		
            <table width="530" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="239" height="30">&nbsp;</td>
                <td width="291"><img src="images/lt_15(9).jpg" width="72" height="23" id="button_show_bbs"  style="cursor:hand" onClick="
				<?php
				 if($_SESSION["unc"]==""){
				   echo "javascript:alert('请先登录本站，然后回复帖子！');window.location.href='index.php';";
				 }else{
				?>
				  show_reply()
				<?php
				  }
				?>
				
				"/>&nbsp;&nbsp;<img src="images/lt_15(5).jpg" width="72" height="23" style="cursor:hand" onclick="
				<?php
				if($_SESSION["unc"]==""){
				   echo "javascript:alert('请先登录本站,然后进行此操作！');window.location.href='index.php';";
				}else{
				 $sqlu=mysql_query("select  usertype from tb_user where usernc='".$_SESSION["unc"]."'",$conn);
				 $infou=mysql_fetch_array($sqlu); 
				 if($infou["usertype"]==1){
				   echo "javascript:window.location.href='settop.php?id=".$infob["id"]."'";
				 }else{
				   echo "javascript:alert('对不起，您不具备该操作权限！');";
				 }
				} 
				?>
				
				"/>&nbsp;&nbsp;<?php
				 if($_SESSION["unc"]!=""){
				   $sqlu=mysql_query("select usertype from tb_user where usernc='".$_SESSION["unc"]."'",$conn);
				   $infou=mysql_fetch_array($sqlu);
				   if($infou["usertype"]==1){
				?><img src="images/lt_15(10).jpg" onclick="javascript:if(window.confirm('您确定删除该帖么？')==true){window.location.href='bbs_delete.php?id=<?php echo $infob["id"]?>';}" style="cursor:hand"/>
				<?php
				   }
				}
				?>				</td>
              </tr>
          </table></td>
        </tr>
		
		
		
		 <tr id="reply_bbs1" style="display:none">
          <td width="220" height="250" bgcolor="#FFFFFF" valign="top"><div align="center">
		  <?php
		  $sql2=mysql_query("select * from tb_user where usernc='".$_SESSION["unc"]."'",$conn);
		  $info2=mysql_fetch_array($sql2);
		  ?>
		  
		  <table width="150" border="0" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td height="15">&nbsp;</td>
                      </tr>
              </table>
                    <table width="150" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td><div align="center"><img src="<?php  echo $info2[photo];?>" /></div></td>
                      </tr>
                    </table>
                    <table width="150" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td><div align="center">发贴人：<?php echo $info2[usernc];?></div></td>
                      </tr>
                    </table>
                    <table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td height="20"><div align="center"><img src="images/lt_15(6).jpg" width="42" height="16" alt="<?php echo $info2[email];?>"/><img src="images/lt_15(7).jpg" width="48" height="16" alt="<?php echo $info2[qq];?>"/><img src="images/lt_15(8).jpg" width="53" height="16" alt="<?php echo $info2[ip];?>"/></div></td>
                      </tr>
                    </table><table width="180" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="10">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="22">用户级别：<?php if($info2["usertype"]=="1") echo "管理员";else echo "普通会员";?></td>
                      </tr>
                      <tr>
                        <td height="22">发贴总数：<?php echo $info2["pubtimes"];?></td>
                      </tr>
                      <tr>
                        <td height="22">注册时间：<?php echo $info2["regtime"];?></td>
                      </tr>
                    </table>
           </div></td>
          <td width="530" bgcolor="#FFFFFF">
<table width="530" border="0" align="center" cellpadding="0" cellspacing="0">
                               							
								<form name="form_reply" method="post" action="savereply.php" enctype="multipart/form-data">
                                  <tr> 
                                    <td height="15" colspan="2">&nbsp;</td>
                                  </tr>
                                  <tr> 
                                    <td width="95" height="25"><div align="right">回复主题：</div></td>
                                    <td height="25"><div align="left"> 
                                        <input name="reply_title" type="text" class="inputcss" id="reply_title" size="60" maxlength="200">
                                        <input type="hidden" name="bbsid" value="<?php echo $infob["id"];?>">
                                    </div></td>
                                  </tr>
                               
                                    <td height="25" colspan="2"> <div align="center">图片：
                                      <input name="bbs_photo" type="file" id="bbs_photo" size="24" class="inputcss" />
                    (*图片不能超过2MB,格式为.gif/.jpg)</div></td>
                                  </tr>
                                    <tr>
                                      <td height="25" colspan="2">&nbsp;</td>
                                    </tr>
                                  <tr> 
                                    <td height="120" colspan="2"><div align="center">
                                      <textarea name="content1" cols="60" rows="8" id="content1"></textarea>
                                    </div></td>
                                  </tr>
                                  <tr> 
                                    <td height="25" colspan="2"><div align="center"> 
                                         <INPUT type=submit value="提交"> 
	<INPUT type=reset value="重填">
                                      </div></td>
                                  </tr>
                                </form>
           </table></td>
		 </tr>
		
		
		
		<?php
		 $sqlr=mysql_query("select * from tb_reply where bbsid='".$infob["id"]."'",$conn);
		 $infor=mysql_fetch_array($sqlr);
		 if($infor!=false){
		   do{
		?>
		 <tr>
          <td width="220" bgcolor="#FFFFFF" valign="top"><div align="center">
		  <?php
		  $sql3=mysql_query("select * from tb_user where id='".$infor["userid"]."'",$conn);
		  $info3=mysql_fetch_array($sql3);
		  ?>
		  
		  <table width="150" border="0" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td height="15">&nbsp;</td>
                      </tr>
              </table>
                    <table width="150" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td><div align="center"><img src="<?php  echo $info3[photo];?>" /></div></td>
                      </tr>
                    </table>
                    <table width="150" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td><div align="center">发贴人：<?php echo $info3[usernc];?></div></td>
                      </tr>
                    </table>
                    <table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr> 
                        <td height="20"><div align="center"><img src="images/lt_15(6).jpg" width="42" height="16" alt="<?php echo $info3[email];?>"/><img src="images/lt_15(7).jpg" width="48" height="16" alt="<?php echo $info3[qq];?>"/><img src="images/lt_15(8).jpg" width="53" height="16" alt="<?php echo $info3[ip];?>"/></div></td>
                      </tr>
                    </table><table width="180" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="10">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="22">用户级别：<?php if($info3["usertype"]=="1") echo "管理员";else echo "普通会员";?></td>
                      </tr>
                      <tr>
                        <td height="22">发贴总数：<?php echo $info3["pubtimes"];?></td>
                      </tr>
                      <tr>
                        <td height="22">注册时间：<?php echo $info3["regtime"];?></td>
                      </tr>
                    </table>
           </div></td>
          <td width="530" bgcolor="#FFFFFF">
<table width="530" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="35" height="20"><div align="center"><img src="images/lt_15(11).jpg"></div></td>
              <td width="404" ><?php echo $infor["createtime"];?></td>
              <td width="91">

<?php 
	if($_SESSION["unc"]!=""){
      $sql4=mysql_query("select usertype from tb_user where usernc='".$_SESSION["unc"]."'",$conn);
				   $info4=mysql_fetch_array($sql4);
				   if($info4["usertype"]==1 ||$info4["usertype"]==2){
?>
<img src="images/lt_15(10).jpg" width="72" height="23" style="cursor:hand" onclick="javascript:if(window.confirm('您确定删除该条回复么？')==true){window.location.href='deletereply.php?id=<?php echo $infor["id"]?>';}"/>
<?php }}?>

</td>
            </tr>
            <tr>
              <td height="25" colspan="3">&nbsp;&nbsp;<font color="#336699">回复主题：</font><?php echo unhtml($infor["title"]);?></td>
            </tr>
            <tr>
              <td height="135" colspan="3">

<?php
                              if($infor[photo]!=""){
                                 $photos=substr($infor[photo],2,70);
echo (stripslashes($infor["content"]));                                 
                                 echo "<img src=\"$photos\">";
                               }else{
                                echo (stripslashes($infor["content"]));                               }
							  ?></td>
            </tr>
          </table></td>
        </tr>
		<?php
		  }while($infor=mysql_fetch_array($sqlr));
		}
		?>
      </table></td>
  </tr>
</table>
<?php
include_once("bottom.php");
?>