<?php 
session_start(); 
include "check_login.php";
include "conn/conn.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<title>博客Sky</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<script src=" JS/menu.JS"></script>
<script src=" JS/UBBCode.JS"></script>
<script language="javascript">
function check(){
	if(myform.txt_title.value==""){
		alert("公告主题名称不允许为空！");myform.txt_title.focus();return false;
	}
	if(myform.file.value==""){
		alert("公告内容不允许为空！");myform.file.focus();return false;
	}
}
</script>
<body >
<div class=menuskin id=popmenu 
      onmouseover="clearhidemenu();highlightmenu(event,'on')" 
      onmouseout="highlightmenu(event,'off');dynamichide(event)"
	  style="Z-index:100;position:absolute;">
</div>
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
              <TD height="34" align="center" valign="middle">
			  <TABLE style="WIDTH: 580px" VERTICAL-ALIGN: text-top; cellSpacing=0 cellPadding=0 align="center">
                  <TBODY>
                    <TR align="center" valign="middle">
					 <TD style="WIDTH: 100px; COLOR: red;">欢迎您:&nbsp;<?php echo $_SESSION[username]; ?>&nbsp;&nbsp;</TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"> </SPAN><a href="index.php">博客首页</a></TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,productmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >文章管理</a></TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,Honourmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand">图片管理</a></TD>
                      <TD style="WIDTH: 90px; COLOR: red;"><a  onmouseover=showmenu(event,myfriend) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >朋友圈管理</a>  </TD>
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
              </TABLE>			  </TD> 
            </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
    <TR> 
      <TD colSpan=3 valign="baseline" style="BACKGROUND-IMAGE: url( images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center"><table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="451" align="center" valign="top"><table width="640"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="613" height="223" align="center"><br>
			  <table width="500" border="0" cellpadding="0" cellspacing="0">
			    <tr>
					<td valign="middle" align="center">
					<!--公告列表-->
					<?php if ($page=="") {$page=1;}; ?>
<table width="630" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                <tr align="left" colspan="2" >
                  <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="tableBorder_LTR"> 查看全部公告 </span> </td>
                </tr>
                	<?php
						if ($page){
						   $page_size=20;     //每页显示20条记录
						   $query="select count(*) as total from tb_public order by id desc";   
							$result=mysql_query($query);       //查询总的记录条数
							$message_count=mysql_result($result,0,"total");       //为变量赋值
							$page_count=ceil($message_count/$page_size);	  //根据记录总数除以每页显示的记录数求出所分的页数
							$offset=($page-1)*$page_size;			//计算下一页从第几条数据开始循环  
							for ($i=1; $i<2; $i++) {         //计算每页显示几行记录信息
							if ($i==1) {
								$sql=mysql_query("select id,title from tb_public order by id desc limit $offset, $page_size");			
								$info=mysql_fetch_array($sql);
								}
					 ?>
                <tr>
                  <td height="31" align="center" valign="top" ><table width="500"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><table width="498"  border="0" cellspacing="0" cellpadding="0" valign="top">
                          <?php
							$i=1;
							do{
						  ?>
                          <tr>
                            <td width="408" align="left" valign="middle"> &nbsp;&nbsp;&nbsp;<a href="#" onClick="wopen=open('show_pub.php?id=<?php echo $info[id];?>','','height=200,width=500,scollbars=no')"><?php echo $i."、".$info[title];?></a> </td>
                            <td width="90" align="left" valign="middle">
							<?php 
									  if($_SESSION[fig]==1){
									?> 
                                      <a href="del_pub.php?id=<?php echo $info[id];?>"><img src="images/A_delete.gif" width="52" height="16" alt="删除博客文章" onClick="return d_chk();"></a> 
                                      <?php
										}
									 ?>									 </td>
                          </tr>
                          <?php 
							  $i=$i+1;
							  }while($info=mysql_fetch_array($sql));
						  ?>
                      </table></td>
                    </tr>
                  </table></td>
                </tr>
                <?php
					}while($result=mysql_fetch_array($sql));
				?>
              </table>
              <table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr bgcolor="#EFF7DE">
                  <td width="33%">&nbsp;&nbsp;页次：<?php echo $page;?>/<?php echo $page_count;?>页
                    记录：<?php echo $message_count;?> 条&nbsp; </td>
                  <td width="67%" align="right" class="hongse01">
                          <?php
						  if($page!=1)
						   {
							 echo  "<a href=managepub.php?page=1>首页</a>&nbsp;";
							 echo "<a href=managepub.php?page=".($page-1).">上一页</a>&nbsp;";
						   }
						  if($page<$page_count)
						   {
								echo "<a href=managepub.php?page=".($page+1).">下一页</a>&nbsp;";
								echo  "<a href=managepub.php?page=".$page_count.">尾页</a>";
						   }
						 } 
						?>
                  </td>
                </tr>
              </table>
					<!--------------->
					</td>
				</tr>
				<tr>
					<td height="20">&nbsp;</td>
				</tr>
                <tr>
                  <td>
				  <form  name="myform" method="post" action="check_pub.php">
				  <table width="630" border="1" cellpadding="3" cellspacing="1" bordercolor="#D6E7A5">
                      <tr>
                        <td class="i_table" colspan="2"> <span class="tableBorder_LTR">添加系统公告</span></td>
                      </tr>
                      <tr>
                        <td valign="top" align="right" width="14%">公告主题：<br></td>
                        <td width="86%"><input name="txt_title" type="text" id="txt_title" size="68"></td>
                      </tr>
                      <tr>
                        <td align="right" width="14%">公告编程区：</td>
                        <td width="86%"><img src=" images/UBB/B.gif" width="21" height="20" onClick="bold()">&nbsp;<img src=" images/UBB/I.gif" width="21" height="20" onClick="italicize()">&nbsp;<img src=" images/UBB/U.gif" width="21" height="20" onClick="underline()">
						字体
                            <select name="font" class="wenbenkuang" id="font" onChange="showfont(this.options[this.selectedIndex].value)">
                              <option value="宋体" selected>宋体</option>
                              <option value="黑体">黑体</option>
                              <option value="隶书">隶书</option>
                              <option value="楷体">楷体</option>
                            </select>
字号<span class="pt9">
<select 
      name=size class="wenbenkuang" onChange="showsize(this.options[this.selectedIndex].value)">
  <option value=1>1</option>
  <option value=2>2</option>
  <option 
        value=3 selected>3</option>
  <option value=4>4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
</select>
颜色
<select onChange="showcolor(this.options[this.selectedIndex].value)" name="color" size="1" class="wenbenkuang" id="select">
  <option selected>默认颜色</option>
  <option style="color:#FF0000" value="#FF0000">红色热情</option>
  <option style="color:#0000FF" value="#0000ff">蓝色开朗</option>
  <option style="color:#ff00ff" value="#ff00ff">桃色浪漫</option>
  <option style="color:#009900" value="#009900">绿色青春</option>
  <option style="color:#009999" value="#009999">青色清爽</option>
  <option style="color:#990099" value="#990099">紫色拘谨</option>
  <option style="color:#990000" value="#990000">暗夜兴奋</option>
  <option style="color:#000099" value="#000099">深蓝忧郁</option>
  <option style="color:#999900" value="#999900">卡其制服</option>
  <option style="color:#ff9900" value="#ff9900">镏金岁月</option>
  <option style="color:#0099ff" value="#0099ff">湖波荡漾</option>
  <option style="color:#9900ff" value="#9900ff">发亮蓝紫</option>
  <option style="color:#ff0099" value="#ff0099">爱的暗示</option>
  <option style="color:#006600" value="#006600">墨绿深沉</option>
  <option style="color:#999999" value="#999999">烟雨蒙蒙</option>
</select>
</span></td>
                      </tr>
                      <tr>
                        <td align="right" width="14%">公告内容：</td>
                        <td width="86%">
						   <div class="file">						  
						     <textarea name="file" cols="75" rows="20" id="file" style="border:0px;width:520px;"></textarea>
						   </div> 
						</td>
                      </tr>
                      <tr align="center">
                        <td colspan="2"><input name="btn_tj" type="submit" id="btn_tj" value="提交" onClick="return check();">                          &nbsp;
                          <input name="btn_cx" type="reset" id="btn_cx" value="重写"></td>
                        </tr>
                  </table>
				  </form>
				  </td>
                </tr>
              </table></td>
          </tr>
          </table>            </td>
    </tr>
</table></TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
