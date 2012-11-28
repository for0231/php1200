<?php
session_start();
include "Conn/conn.php";
include "check_login.php"; 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<title>博客主页</title>
</head>
<div class=menuskin id=popmenu 
      onmouseover="clearhidemenu();highlightmenu(event,'on')" 
      onmouseout="highlightmenu(event,'off');dynamichide(event)"
	  style="Z-index:100;position:absolute;"></div>
<script src=" JS/menu.JS"></script>
<script language="javascript">
function check(){
if (document.myform.txt_content.value==""){
	alert("评论内容不能为空!");myform.txt_content.focus();return false;
}
}
</script>
<body> 
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px" align="center"> 
  <TBODY> 
    <TR> <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3> <TABLE 
      style="BACKGROUND-IMAGE: url( images/f_head.jpg); WIDTH: 760px; HEIGHT: 154px" 
      cellSpacing=0 cellPadding=0> <TBODY> 
            <TR> 
              <TD height="110" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD> 
            </TR> 
            <TR> 
              <TD height="29" align="center" valign="middle"> <TABLE style="WIDTH: 580px" VERTICAL-ALIGN: text-top; cellSpacing=0 cellPadding=0 align="center"> 
                  <TBODY> 
                    <TR align="center" valign="middle"> 
                      <TD style="WIDTH: 100px; COLOR: red;">欢迎您:&nbsp;<?php echo $_SESSION[username]; ?>&nbsp;&nbsp;</TD> 
                      <TD style="WIDTH: 80px; COLOR: red;"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"></SPAN> <a href="index.php">博客首页</a></TD> 
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,productmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >文章管理</a></TD> 
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,Honourmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand">图片管理</a></TD> 
                      <TD style="WIDTH: 90px; COLOR: red;"><a  onmouseover=showmenu(event,myfriend) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >朋友圈管理</a> </TD> 
                      <?php
						  if($_SESSION[fig]==1){
					   ?> 
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,myuser) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >管理员管理</a></TD> 
                      <?php  
					  }
					  ?> 
                      <TD style="WIDTH: 80px; COLOR: red;"></A><a href="safe.php">退出登录</a></TD> 
                    </TR> 
                  </TBODY> 
                </TABLE></TD> 
            </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
    <TR> 
      <TD colSpan=3 valign="baseline" style="BACKGROUND-IMAGE: url( images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center"><table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0"> 
          <tr> 
            <td height="451" align="center"><br>
              <table width="600" height="100%"  border="0" cellpadding="0" cellspacing="0"> 
                  <tr> 
                    <td height="130" align="center" valign="middle"><table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF"> 
                        <tr align="left" colspan="2" > 
                          <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="right_head"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"></SPAN></span><span class="tableBorder_LTR"> 博客文章</span> </td> 
                        </tr> 
                        <td align="center" valign="top" ><table width="480" border="0" cellpadding="0" cellspacing="0"> 
                              <tr> 
                                <td>
								<?php 
									$sql=mysql_query("select * from tb_article where id = ".$_GET[file_id]);
									$result=mysql_fetch_array($sql);
							  ?> <table width="100%"  border="1" cellpadding="1" cellspacing="1" bordercolor="#D6E7A5" bgcolor="#FFFFFF" class="i_table"> 
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
                                      <td>
									  <?php 
									  if($_SESSION[fig]==1){
									?> 
                                      <a href="del_file.php?file_id=<?php echo $result[id];?>"><img src="images/A_delete.gif" width="52" height="16" alt="删除博客文章" onClick="return d_chk();"></a>
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
                    <td height="213" align="center" valign="top"><?php if ($page=="") {$page=1;}; ?>
                      <table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                        <tr align="left" colspan="2" >
                          <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="right_head"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"></SPAN></span><span class="tableBorder_LTR"> 查看相关评论</span> </td>
                        </tr>
                        <?php
						if ($page){
						   $page_size=2;     //每页显示2条记录
						   $query="select count(*) as total from tb_filecomment where fileid='$_GET[file_id]' order by id desc";   
							$result=mysql_query($query);       //查询总的记录条数
							$message_count=mysql_result($result,0,"total");       //为变量赋值
							$page_count=ceil($message_count/$page_size);	  //根据记录总数除以每页显示的记录数求出所分的页数
							$offset=($page-1)*$page_size;			//计算下一页从第几条数据开始循环  
							for ($i=1; $i<2; $i++) {         //计算每页显示几行记录信息
							if ($i==1) {
								$sql=mysql_query("select * from tb_filecomment where fileid='$_GET[file_id]' order by id desc limit $offset, $page_size");			
								$result=mysql_fetch_array($sql);
								}
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
                              <td colspan="5"><?php echo $result[content]; ?></td>
                            </tr>
							<tr align="right" bgcolor="#FFFFFF">
                              <td colspan="6">
							  <?php 
									if ($_SESSION[fig]==1){
								?>
                                <a href="del_comment.php?comment_id=<?php echo $result[id]?>"><img src="images/A_delete.gif" width="52" height="16" alt="删除博客文章评论" onClick="return d_chk();"></a>
                                <?php
									}
								?></td>
                            </tr>
                          </table></td>
                        </tr> 
                        <?php
							}while($result=mysql_fetch_array($sql));
							?>
                      </table>
                      <table width="560" border="0" align="center" cellpadding="0" cellspacing="0">
           <tr bgcolor="#EFF7DE"> 
             <td width="52%">&nbsp;&nbsp;页次：<?php echo $page;?>/<?php echo $page_count;?>页 记录：<?php echo $message_count;?> 条&nbsp;</td>
                <td align="right" class="hongse01">
		          <?php
				  if($page!=1)
				   {
				     echo  "<a href=comment.php?page=1&file_id=".$_GET[file_id].">首页</a>&nbsp;";
					 echo "<a href=comment.php?page=".($page-1)."&file_id=".$_GET[file_id].">上一页</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=comment.php?page=".($page+1)."&file_id=".$_GET[file_id].">下一页</a>&nbsp;";
				        echo  "<a href=comment.php?page=".$page_count."&file_id=".$_GET[file_id].">尾页</a>";
				   }
				 } 
				 }
				?>
					 </td>
				  </tr>
				</table></td>
                  </tr>
                  <tr>
                    <td height="188" align="center" valign="top">
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
					  <td colspan="2"><input type="submit" name="submit" value="提交" onClick="return check();">
					    &nbsp;
					    <input type="reset" name="submit2" value="重置"></td>
				    </tr>
				  </table>			    </td>
              </table>
			  </form>		    </td>
			</tr> 
              </table>
		    </td> 
          </tr> 
        </table></TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
