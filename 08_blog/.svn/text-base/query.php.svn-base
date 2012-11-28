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
function check(form){
if (document.myform.sel_key.value==""){
	alert("请输入查询条件!");myform.sel_key.focus();return false;
}
}
</script>
<body> 
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px" align="center"> 
  <TBODY> 
    <TR> 
      <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3> <TABLE 
      style="BACKGROUND-IMAGE: url( images/f_head.jpg); WIDTH: 760px; HEIGHT: 154px" 
      cellSpacing=0 cellPadding=0> 
          <TBODY> 
            <TR> 
              <TD height="110" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD> 
            </TR> 
            <TR> 
              <TD height="29" align="center" valign="middle"> <TABLE style="WIDTH: 580px" VERTICAL-ALIGN: text-top; cellSpacing=0 cellPadding=0 align="center"> 
                  <TBODY> 
                    <TR align="center" valign="middle"> 
                      <TD style="WIDTH: 100px; COLOR: red;">欢迎您:&nbsp;<?php echo $_SESSION[username]; ?>&nbsp;&nbsp;</TD> 
                      <TD style="WIDTH: 80px; COLOR: red;"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"></SPAN><a href="index.php"> 博客首页</a></TD> 
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
                      <TD style="WIDTH: 80px; COLOR: red;"><a href="safe.php">退出登录</a></TD> 
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
            <td height="451" align="center" valign="top"><br> 
              <br> 
              <table width="600" height="398"  border="0" cellpadding="0" cellspacing="0"> 
                <tr> 
                  <td height="32" align="center" valign="middle"><table width="480" border="0" cellpadding="0" cellspacing="0"> 
                      <tr> 
                        <td> <form  name="myform" method="post" action=""> 
                            <table width="560" border="1" cellpadding="3" cellspacing="1" bordercolor="#D6E7A5"> 
                              <tr> 
                                <td width="100%" height="28" align="center" class="i_table">查询条件：
                                  <select name="sel_tj" id="sel_tj"> 
                                    <option value="title" selected>博客主题</option> 
                                    <option value="author">作者</option> 
                                  </select> 
                                  关键字
                                  <input name="sel_key" type="text" id="sel_key" size="30"> 
&nbsp; 
                                  <input type="submit" name="Submit" value="检索" onClick="return check();"></td> 
                              </tr> 
                            </table> 
                          </form></td> 
                      </tr> 
                    </table></td> 
                </tr> 
                <tr> 
                  <td height="223" align="center" valign="top">
				 <?php
				  if (isset($_POST[sel_key])){
				  	 $tj=$_POST[sel_tj];
					 $key=$_POST[sel_key];
					 $sql="select * from tb_article where $tj like '%$key%'";
					 $rst = mysql_query($sql,$link);
					 $result=mysql_fetch_array($rst);
				 	 if(mysql_num_rows($rst) == 0){
				  		echo "[<font color=red>对不起，您检索的博客信息不存在!</font>]";
				 	 }
				 	 else{
				 ?> 
                    <table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF"> 
                      <tr align="left" colspan="2" > 
                        <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="tableBorder_LTR"> 博客文章</span> </td> 
                      </tr> 
                      <td align="center" valign="top" ><table width="480" border="0" cellpadding="0" cellspacing="0"> 
                            <tr> 
                              <td height="100" valign="top">
							  <?php 
							 do{
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
                                    <td colspan="5"><?php echo $result[content]; ?></td> 
                                  </tr> 
                                  <tr bgcolor="#FFFFFF"> 
                                    <td colspan="3" align="center"><a href="comment.php?file_id=<?php echo $result[id]; ?>">发表评论</a></td> 
                                    <td colspan="3" align="center">
									<?php 
									  if($_SESSION[fig]==1){
									?> 
                                      <a href="del_file.php?file_id=<?php echo $result[id];?>"><img src="images/A_delete.gif" width="52" height="16" alt="删除博客文章" onClick="return d_chk();"></a> 
                                      <?php
										}
									 ?> </td> 
                                  </tr> 
                                </table> 
                                <?php  
							}while($result = mysql_fetch_array($rst));
						 ?></td> 
                            </tr> 
                          </table></td> 
                    </table> 
                    <?php
						}
				 	 }
			        ?>
					</td> 
                </tr> 
              </table></td> 
          </tr> 
        </table></TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
