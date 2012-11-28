<?php session_start(); include "Conn/conn.php";  include "check_login.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<title>浏览图片</title>
<style type="text/css">
<!--
.style1 {font-size: 12pt}
-->
</style>
</head>
<script src=" JS/menu.JS"></script>
<script language="javascript">
function pic_chk(){
if(confirm("确定要删除选中的项目吗？一旦删除将不能恢复！")){
	return true;
}else
	return false;   
}
</script>
<body>
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
              <TD height="29" align="center" valign="middle">
			  <TABLE style="WIDTH: 580px" VERTICAL-ALIGN: text-top; cellSpacing=0 cellPadding=0 align="center">
                  <TBODY>
                    <TR align="center" valign="middle">
					 <TD style="WIDTH: 100px; COLOR: red;">欢迎您:&nbsp;<?php echo $_SESSION[username]; ?>&nbsp;&nbsp;</TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"></SPAN> <a href="index.php">博客首页</a></TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><A href="RegPro.php"> </A><a  onmouseover=showmenu(event,productmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >文章管理</a></TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><A href="RegPro.php"> </A><a  onmouseover=showmenu(event,Honourmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand">图片管理</a></TD>
                      <TD style="WIDTH: 90px; COLOR: red;"><A href="RegPro.php"> </A><a  onmouseover=showmenu(event,myfriend) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >朋友圈管理</a>  </TD>
                       <?php
					  if($_SESSION[fig]==1){
					   ?>
					   <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,myuser) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" > 管理员管理</a></TD> 
  					 <?php  
					  }
					  ?>
					  <TD style="WIDTH: 80px; COLOR: red;"><A href="RegPro.php"> </A><a href="safe.php">退出登录</a></TD>
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
          <td height="451" align="center" valign="top"><br>
            <table width="640"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="613" height="16" align="right" valign="top">&nbsp;</td>
              <br>
            </tr>
            <tr>
              <td height="292" align="center" valign="top" bordercolor="#D6E7A5">
				<table width="600" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                <tr align="left" colspan="2" >
                  <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="tableBorder_LTR">                     浏览图片</span>                    </td>
                </tr>

			  <td height="192" align="center" valign="top" ><?php
	if($_GET[page]=="" || is_numeric($_GET[page]==false))
	  {
	    $page=1;
	  }
	 else
	  {
	   $page=$_GET[page];
	  } 	
	    $page_size=4;     //每页显示4张图片
	    $query="select count(*) as total from tb_tpsc order by scsj desc";   
		$result=mysql_query($query);       //查询总的记录条数
		$message_count=mysql_result($result,0,"total");       //为变量赋值
		if($message_count==0)
		 {
		  echo "暂无图片！";
		 }
		 else
		  {
		    if($message_count<$page_size)
			 {
			   $page_count=1;
			 }
			 else
			  {
			    if($message_count%$page_size==0)
				 {
				   $page_count=$message_count/$page_size;	
				 }
				 else
				  {
				    $page_count=ceil($message_count/$page_size);	
				  }
		       }
	 	    $offset=($page-1)*$page_size;
			$query="select * from tb_tpsc where scsj order by id desc limit $offset, $page_size";			
			$result=mysql_query($query);
		?>
			    <table width="496" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#D6D7D6">
                  <tr>
                    <?php
		   $i=1;
		   while($info=mysql_fetch_array($result))
		   {  
		     if($i%2==0)
		       {
		 ?>
                    <td width="500"><table width="245" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td colspan="2"><div align="center"><img src="image.php?recid=<?php echo $info[id];?>" width="225" height="160"></div></td>
                        </tr>
                        <tr>
                          <td width="109" height="25" align="left">&nbsp;图片名称:<?php echo $info[tpmc];?></td>
                          <td width="128">上传时间:<?php echo $info[scsj];?></td>
                        </tr>
						<tr>
							<td colspan="2" height="25">
							<?php 
								if ($_SESSION[fig]==1){
							?>
							  <a href="remove.php?pic_id=<?php echo $info[id]?>"><img src="images/A_delete.gif" width="52" height="16" alt="删除图片" onClick="return pic_chk();"></a>
							<?php
								}
							 ?>	
							</td>
						</tr>
                    </table></td>
                  </tr>
                  <?php
		    }
			else
			{
		   ?>
  <td width="500" height="180"><table width="236" height="185" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="160" colspan="2"><div align="center"><img src="image.php?recid=<?php echo $info[id];?>" width="225" height="160"></div></td>
        </tr>
        <tr>
          <td width="110" height="25">&nbsp;图片名称:<?php echo $info[tpmc];?></td>
          <td width="126">上传时间:&nbsp;<?php echo $info[scsj];?></td>
        </tr>
		<tr>
			<td colspan="2" height="25">
			<?php 
								if ($_SESSION[fig]==1){
							?>
							  <a href="remove.php?pic_id=<?php echo $info[id]?>"><img src="images/A_delete.gif" width="52" height="16" alt="删除图片" onClick="return pic_chk();"></a>
							<?php
								}
							 ?>	
			</td>
		</tr>
    </table></td>
      <?php
		      }
		     $i++;
			} 
		   ?>
  </tr>
                </table></td>
              </table>
			  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr bgcolor="#EFF7DE">
                  <td>&nbsp;&nbsp;页次：<?php echo $page;?>/<?php echo $page_count;?>页
                    记录：<?php echo $message_count;?> 条&nbsp;</td>
                  <td align="right" class="hongse01">
                    <?php
				  if($page!=1)
				   {
				     echo  "<a href=browse_pic.php?page=1>首页</a>&nbsp;";
					 echo "<a href=browse_pic.php?page=".($page-1).">上一页</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=browse_pic.php?page=".($page+1).">下一页</a>&nbsp;";
				        echo  "<a href=browse_pic.php?page=".$page_count.">尾页</a>";
				   }
				 } 
				?>
                  </td>
                </tr>
              </table>
			  <p>&nbsp;</p></td>
            </tr>
          </table>            
            <br>
            <br>
            <br></td>
    </tr>
</table></TD> 
    </TR>  
  </TBODY> 
</TABLE> 
</body>
</html>
