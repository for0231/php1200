<?php session_start(); include "Conn/conn.php"; include "check_login.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<title>用户管理</title>
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
              <TD height="34" align="center" valign="middle"> <TABLE width="603" align="center" cellPadding=0 cellSpacing=0 style="WIDTH: 580px" VERTICAL-ALIGN: text-top;> 
                  <TBODY> 
                    <TR align="center" valign="middle"> 
                      <TD style="WIDTH: 100px; COLOR: red;">欢迎您:&nbsp;<?php echo $_SESSION[username]; ?>&nbsp;&nbsp;</TD> 
                      <TD style="WIDTH: 80px; COLOR: red;"> <a href="index.php">博客首页</a></TD> 
                      <TD style="WIDTH: 80px; COLOR: red;"> <a  onmouseover=showmenu(event,productmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >文章管理</a></TD> 
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,Honourmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand"> 图片管理</a></TD> 
                      <TD style="WIDTH: 90px; COLOR: red;"><a  onmouseover=showmenu(event,myfriend) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" > 朋友圈管理</a> </TD> 
                      <?php
					  if($_SESSION[fig]==1){
					   ?> 
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,myuser) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" > 管理员管理</a></TD> 
                      <?php  
					  }
					  ?> 
                      <TD style="WIDTH: 80px; COLOR: red;"><a href="safe.php"> 退出登录</a></TD> 
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
              <br> <?php if ($page=="") {$page=1;}; ?> 
              <table width="600" height="291"  border="0" cellpadding="0" cellspacing="0"> 
                <tr> 
                  <td height="291" align="center" valign="top"> 
                    <table width="600" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF"> 
                      <tr align="left" colspan="2" > 
                        <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="tableBorder_LTR"> 浏览用户信息</span> </td> 
                      </tr> 
                      <?php
						if ($page){
						   $page_size=2;     //每页显示2条记录
						   $query="select count(*) as total from tb_user order by id desc";   
							$result=mysql_query($query);       //查询总的记录条数
							$message_count=mysql_result($result,0,"total");       //为变量赋值
							$page_count=ceil($message_count/$page_size);	  //根据记录总数除以每页显示的记录数求出所分的页数
							$offset=($page-1)*$page_size;			//计算下一页从第几条数据开始循环  
							for ($i=1; $i<2; $i++) {        
							if ($i==1) {
								$sql=mysql_query("select * from tb_user order by id desc limit $offset, $page_size");			
								$result=mysql_fetch_array($sql);
								}
							do{
							?> 
                      <tr> 
                        <td height="184" align="center" valign="middle" >
						<table width="540" border="1" align=center cellpadding=3 cellspacing=2 bordercolor="#FFFFFF" bgcolor="#FFFFFF" class=i_table> 
                            <tr bgcolor="#FFFFFF"> 
                              <td width=13% align="center" valign=middle> 用户ID</td> 
                              <td width=8% align="left"><?php echo $result[id]; ?></td> 
                              <td width=10% align="center">用户名</td> 
                              <td width=13% align="left"><?php echo $result[regname]; ?></td> 
                              <td width=13% align="center">真实姓名</td> 
                              <td width=12% align="left"><?php echo $result[regrealname]; ?></td> 
                              <td width=11% align="center">性
                                别</td> 
                              <td width=20% align="left"> <?php 
									if($result[regsex]==0){
										echo "保密";
									}
									if($result[regsex]==1){
										echo "男";
									}
									if($result[regsex]==2){
										echo "女";
									}
									 ?> </td> 
                            </tr> 
                            <tr bgcolor="#FFFFFF"> 
                              <td width=13% align="center" valign=middle>出生日期</td> 
                              <td colspan="3" align="left"><?php echo $result[regbirthday]; ?></td> 
                              <td align="center">密 &nbsp;码</td> 
                              <td colspan="3" align="left"><?php echo $result[regpwd]; ?></td> 
                            </tr> 
                            <tr bgcolor="#FFFFFF"> 
                              <td align="center">所在城市</td> 
                              <td colspan="3" align="left"><?php echo $result[regcity]; ?></td> 
                              <td align="center">E-mail</td> 
                              <td colspan="3" align="left"><?php echo $result[regemail]; ?></td> 
                            </tr> 
                            <tr bgcolor="#FFFFFF"> 
                              <td height="30" align="center" valign=middle>个人主页</td> 
                              <td colspan="3" align="left"><?php echo $result[reghomepage]; ?></td> 
                              <td align="center">QQ号</td> 
                              <td align="left"><?php echo $result[regqq]; ?></td> 
                              <td align="left">IP地址</td> 
                              <td align="center"><?php echo $result[ip]; ?> </td> 
                            </tr> 
                            <tr bgcolor="#FFFFFF"> 
                              <td align="center">个性签名</td> 
                              <td colspan="7" align="left"><?php echo $result[regsign]; ?></td> 
                            </tr> 
                            <tr bgcolor="#FFFFFF"> 
                              <td height="26" align="center">自我简介</td> 
                              <td colspan="6" align="left"><?php echo $result[regintroduce]; ?> </td> 
							  <td align="left"><?php 
									if ($_SESSION[fig]=1){
									?>
                                <a href="del_user.php?user_id=<?php echo $result[id];?>"><img src="images/A_delete.gif" width="52" height="16" alt="删除用户信息" onClick="return d_chk();"></a>
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
                    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr bgcolor="#EFF7DE">
                        <td>&nbsp;&nbsp;页次：<?php echo $page;?>/<?php echo $page_count;?>页
                          记录：<?php echo $message_count;?> 条&nbsp;</td>
                        <td align="right" class="hongse01">
                          <?php
				  if($page!=1)
				   {
				     echo  "<a href=browseuser.php?page=1>首页</a>&nbsp;";
					 echo "<a href=browseuser.php?page=".($page-1).">上一页</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=browseuser.php?page=".($page+1).">下一页</a>&nbsp;";
				        echo  "<a href=browseuser.php?page=".$page_count.">尾页</a>";
				   }
				 } 
				 }
				?>
                        </td>
                      </tr>
                    </table></td> 
                </tr> 
              </table></td> 
          </tr> 
        </table></TD> 
    </TR>  
  </TBODY> 
</TABLE> 
</body>
</html>
