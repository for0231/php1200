<?php 
	session_start(); 
	include "Conn/conn.php"; 
	$file_id1=$_GET[file_id];
	$bool = false;
$str=array("大","更","创","天","科","客","博","技","立","新");
$word=strlen($str);
for($i=0;$i<4;$i++){
	$num=rand(0,$word*2-1);      //$word=$word*2-1
	$img=$img."<img src=' images/checkcode/".$num.".gif' width='16' height='16'>";    //显示随机图片
	$pic=$pic.$str[$num];    //将图片转换成数组中的文字
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css"  rel="stylesheet">
<title>浏览博客文章及评论</title>
<script src="JS/check.js" language="javascript">
</script>
<script language="javascript">
function r_check(){
if (document.myform.txt_content.value==""){
	alert("评论内容不能为空!");myform.txt_content.focus();return false;
}
}
function d_chk(urlstr){
	if(confirm("确定要删除选中的项目吗？一旦删除将不能恢复！")){
		return true;
	}
	else
		return false;   
}
function fri_chk(){
if(confirm("确定要删除选中的项目吗？一旦删除将不能恢复！")){
		return true;
	}
	else
		return false;   
}
</script>
</head>
<body style="MARGIN-TOP: 0px; VERTICAL-ALIGN: top; PADDING-TOP: 0px; TEXT-ALIGN: center"> 
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px"> 
  <TBODY> 
    <TR> 
      <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3>
	  <table width="100%" height="149"  border="0" cellpadding="0" cellspacing="0" background="images/F_head.jpg">
        <tr>
          <td height="51" align="right">
		  <br>
		  <table width="262" border="0" cellspacing="0" cellpadding="0">
            <tr align="left">
              <td width="26" height="20"><a href="index.php"></a></td>
              <td width="71" class="word_white"><a href="index.php"><span style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none">首  页</span></a></td>
              <td width="87"><a href="file.php"><span  style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none">我的博客</span></a></td>
              <td width="55"><a href="<?php echo (!isset($_SESSION[username])?'Regpro.php':'safe.php'); ?>"><span style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none"><?php echo (!isset($_SESSION[username])?"博客注册":"安全退出"); ?></span></a></td>
              <td width="23">&nbsp;</td>
            </tr>
          </table>
		  <br></td>
        </tr>
        <tr>
          <td height="66" align="right"><p>&nbsp;</p></td>
        </tr>
        <tr>
		<form name="form" method="post" action="checkuser.php">
          <td height="20" valign="baseline">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="20" align="left" valign="baseline" style=" text-indent:50px;"> 
				<?php
		  	if(!isset($_SESSION[username])){
		  ?>
				用户名:
                  <input  name=txt_user size="10">
密码:
<input  name=txt_pwd type=password style="FONT-SIZE: 9pt; WIDTH: 65px" size="6">
验证码:
<input name="txt_yan" style="FONT-SIZE: 9pt; WIDTH: 65px" size="8">
<input type="hidden" name="txt_hyan" id="txt_hyan" value="<?php echo $pic;?>">
<?php echo $img; ?> &nbsp;
<input style="FONT-SIZE: 9pt"  type=submit value=登录 name=sub_dl onClick="return f_check(form)">
&nbsp; 
<?php
				}else{
			?>
				<font color="red"><?php echo $_SESSION[username]; ?></font>&nbsp;&nbsp;博客天空网站欢迎您的光临！！！当前时间：<font color="red"><?php echo date("Y-m-d l"); ?>
</font>
			    <?
				}
			?></td>
                <td width="1%" align="center" valign="baseline">&nbsp;</td>
              </tr>
            </table> 
			</td>
		  </form>
        </tr>
      </table>
	  
		</TD> 
    </TR> 
    <TR> 
      <TD colSpan=3 valign="baseline" style="BACKGROUND-IMAGE: url( images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center"><br> 
        <br> 
        <table width="600" height="100%"  border="0" cellpadding="0" cellspacing="0"> 
          <tr> 
            <td height="130" align="center" valign="middle"><table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF"> 
                <tr align="left" colspan="2" > 
                  <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE">&nbsp;<span class="tableBorder_LTR"> 博客文章</span> </td> 
                </tr> 
                <td align="center" valign="top" ><table width="480" border="0" cellpadding="0" cellspacing="0"> 
                      <tr> 
                        <td> <?php 
						$sql=mysql_query("select * from tb_article where id = ".$file_id1);
						$result=mysql_fetch_array($sql);
				  ?> 
                          <table width="100%"  border="1" cellpadding="1" cellspacing="1" bordercolor="#D6E7A5" bgcolor="#FFFFFF" class="i_table"> 
                            <tr bgcolor="#FFFFFF"> 
                              <td width="14%" align="center">博客ID号</td> 
                              <td width="15%"><?php echo $result[id]; ?></td> 
                              <td width="11%" align="center">作
                                者</td> 
                              <td width="18%"><?php echo $result[author]; ?></td> 
                              <td width="12%" align="center">发表时间</td> 
                              <td width="30%"><?php echo $result[now]; ?></td> 
                            </tr> 
                            <tr bgcolor="#FFFFFF"> 
                              <td align="center">博客主题</td> 
                              <td colspan="5">&nbsp;&nbsp;<?php echo $result[title]; ?></td> 
                            </tr> 
                            <tr bgcolor="#FFFFFF"> 
                              <td align="center">文章内容</td> 
                              <td colspan="4"><?php echo $result[content]; ?></td> 
                              <td><?php 
									  if($_SESSION[fig]==1 or ($_SESSION[username] == $result[author])){
									  $bool = true;
									?> 
                                      <a href="del_file.php?file_id=<?php echo $result[id];?>"><img src="images/A_delete.gif" width="52" height="16" alt="删除博客文章" onClick="return fri_chk();"></a> 
                                      <?php
										}
									 ?>
									 </td>
                            </tr> 
                          </table></td> 
                      </tr> 
                    </table></td> 
              </table></td> 
          </tr> 
          <tr> 
            <td height="106" align="center" valign="top"><?php if ($page=="") {$page=1;}; ?> 
              <table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF"> 
                <tr align="left" colspan="2" > 
                  <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE">&nbsp;<span class="tableBorder_LTR"> 查看相关评论</span> </td> 
                </tr> 
                <?php
						if ($page){
						   $page_size=4;     //每页显示4条记录
						   $query="select count(*) as total from tb_filecomment where fileid='  ,m ,' order by id desc";   
							$result=mysql_query($query);       //查询总的记录条数
							$message_count=mysql_result($result,0,"total");       //为变量赋值
							$page_count=ceil($message_count/$page_size);	  //根据记录总数除以每页显示的记录数求出所分的页数
							$offset=($page-1)*$page_size;			//计算下一页从第几条数据开始循环  
							for ($i=1; $i<2; $i++) {         //计算每页显示几行记录信息
							if ($i==1) {
								$sql=mysql_query("select * from tb_filecomment where fileid='$file_id1' order by id desc limit $offset, $page_size");			
								$result=mysql_fetch_array($sql);
								}
							if($result==false){
								echo "<font color=#ff0000>对不起，没有相关评论!</font>";
							}
							else{
								do{
							?> 
                <tr> 
                  <td height="57" align="center" valign="top" ><table width="480"  border="1" cellpadding="1" cellspacing="1" bordercolor="#D6E7A5" bgcolor="#FFFFFF" class="i_table"> 
                      <tr bgcolor="#FFFFFF"> 
                        <td width="14%" align="center">评论ID号</td> 
                        <td width="15%"><?php echo $result[id]; ?></td> 
                        <td width="11%" align="center">评论人</td> 
                        <td width="18%"><?php echo $result[username]; ?></td> 
                        <td width="12%" align="center">评论时间</td> 
                        <td width="30%"><?php echo $result[datetime]; ?></td> 
                      </tr> 
                      <tr bgcolor="#FFFFFF"> 
                        <td align="center">评论内容</td> 
                        <td colspan="4"><?php echo $result[content]; ?></td> 
                        <td>
						<?php 
									if ($bool){
								?>
                                <a href="del_comment.php?comment_id=<?php echo $result[id]?>"><img src="images/A_delete.gif" width="52" height="16" alt="删除博客文章评论" onClick="return d_chk();"></a>
                                <?php
									}
								?>						</td>
                      </tr> 
                    </table></td> 
                </tr> 
                <?php
								}while($result=mysql_fetch_array($sql));
								}
							?> 
              </table> 
              <table width="560" border="0" align="center" cellpadding="0" cellspacing="0"> 
                <tr bgcolor="#EFF7DE"> 
                  <td width="52%">&nbsp;&nbsp;页次：<?php echo $page;?>/<?php echo $page_count;?>页
                    记录：<?php echo $message_count;?> 条&nbsp;</td> 
                  <td align="right" class="hongse01">
				  <?php
				  if($page!=1)
				   {
				     echo  "<a href=article.php?page=1&file_id=".$file_id.">首页</a>&nbsp;";
					 echo "<a href=article.php?page=".($page-1)."&file_id=".$file_id.">上一页</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=article.php?page=".($page+1)."&file_id=".$file_id.">下一页</a>&nbsp;";
				        echo  "<a href=article.php?page=".$page_count."&file_id=".$file_id.">尾页</a>";
				   }
				 } 
				 }
				?> </td> 
                </tr> 
              </table></td> 
          </tr>
          <tr>
            <td height="107" align="center" valign="top">
			<!--  发表评论  -->
			<form name="myform" method="post" action="check_comment.php">
 				   <table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                      <tr align="left" colspan="2" >
                        <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="right_head"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"></SPAN></span><span class="tableBorder_LTR"> 发表评论</span> </td>
                      </tr>
 				   <td height="112" align="center" valign="top" >
       			     <input name="htxt_fileid" type="hidden" value="<?php echo $_GET[file_id];?>">
       			     <table width="500"  border="1" cellpadding="1" cellspacing="0" bordercolor="#D6E7A5" bgcolor="#FFFFFF">
				    <tr>
					  <td align="center">我要评论</td>
					  <td width="410"><textarea name="txt_content" cols="66" rows="8" id="txt_content" ></textarea></td>
				    </tr>
				    <tr align="center">
					  <td colspan="2"><input type="submit" name="submit" value="提交" onClick="return r_check();">
					    &nbsp;
					    <input type="reset" name="submit2" value="重置"></td>
				    </tr>
				  </table>			    </td>
              </table>
			  </form>
			<!-------------->
		    </td>
          </tr> 
        </table></TD> 
    </TR>  
  </TBODY> 
</TABLE> 
</body>
</html>
