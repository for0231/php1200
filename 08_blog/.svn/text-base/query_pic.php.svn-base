<?php session_start(); include "Conn/conn.php";  include "check_login.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<title>图片查询</title>
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
function pic_chk(){
if(confirm("确定要删除选中的项目吗？一旦删除将不能恢复！")){
	return true;
}else
	return false;   
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
                      <TD style="WIDTH: 80px; COLOR: red;"> <a  onmouseover=showmenu(event,productmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >文章管理</a></TD> 
                      <TD style="WIDTH: 80px; COLOR: red;"> <a  onmouseover=showmenu(event,Honourmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand">图片管理</a></TD> 
                      <TD style="WIDTH: 90px; COLOR: red;"> <a  onmouseover=showmenu(event,myfriend) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >朋友圈管理</a> </TD> 
                       <?php
					  if($_SESSION[fig]==1){
					   ?>
					   <TD style="WIDTH: 80px; COLOR: red;"> <a  onmouseover=showmenu(event,myuser) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >管理员管理</a></TD> 
  					   <?php  
					  }
					  ?>
					  <TD style="WIDTH: 80px; COLOR: red;"><span class="bold"> </span><a href="safe.php">退出登录</a></TD> 
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
              <table width="600" height="360"  border="0" cellpadding="0" cellspacing="0"> 
                <tr> 
                  <td height="32" align="center" valign="middle"><table width="480" border="0" cellpadding="0" cellspacing="0"> 
                      <tr> 
                        <td> <form  name="myform" method="post" action=""> 
                            <table width="560" border="1" cellpadding="3" cellspacing="1" bordercolor="#D6E7A5"> 
                              <tr> 
                                <td width="100%" height="28" align="center" class="i_table">查询条件：
                                  <select name="sel_tj" id="sel_tj">
                                    <option value="tpmc">图片名称</option> 
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
                  <td height="325" align="center" valign="top">
				  <?php
				  if ($_POST["Submit"]=="检索"){
				  	 $tj=$_POST[sel_tj];
					 $key=$_POST[sel_key];
					 $sql=mysql_query("select * from tb_tpsc where $tj='$key'");
					 $result=mysql_fetch_array($sql);
				  if($result==false){
				  	echo ("[<font color=red>对不起，您检索的图片信息不存在!</font>]");
				  }
				  else{
				 ?> 
                    <table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                      <tr align="left" colspan="2" >
                        <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="tableBorder_LTR"> 查询结果</span> </td>
                      </tr>
					<td height="192" align="center" valign="top" ><table width="480" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center">
                          <?php 
							  do{
							  ?>
                          <table width="329" border="0" cellpadding="0" cellspacing="2" bgcolor="#EFF7DE">
                            <tr bgcolor="#EFF7DE">
                              <td colspan="4" align="center"><img src="image.php?recid=<?php echo $result[id];?>"  width="260" height="160" border="0"></td>
                            </tr>
                            <tr bgcolor="#EFF7DE">
                              <td>&nbsp;名称:<?php echo $result[tpmc];?></td>
                              <td>作者:<?php echo $result[author];?></td>
                              <td>时间:<?php echo $result[scsj];?></td>
                              <td>
							<?php 
								if ($_SESSION[fig]==1){
							?>
							  <a href="remove.php?pic_id=<?php echo $result[id]?>"><img src="images/A_delete.gif" width="52" height="16" alt="删除图片" onClick="return pic_chk();"></a>
							<?php
								}
							 ?>	
							   </td>
                            </tr>
                          </table>
                          <br>
                          <?php  
							}while($result=mysql_fetch_array($sql))
						 ?>                          </td>
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
