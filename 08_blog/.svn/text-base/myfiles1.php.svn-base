<?php session_start(); include "Conn/conn.php";?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css"  rel="stylesheet">
<title>浏览全部博客文章及评论</title>
<style type="text/css">
<!--
.style1 {
	font-size: 9pt;
	color: #cc0033;
}
-->
</style></head>
<body style="MARGIN-TOP: 0px; VERTICAL-ALIGN: top; PADDING-TOP: 0px; TEXT-ALIGN: center"> 
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px"> 
  <TBODY> 
    <TR> <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3> <TABLE 
      style="BACKGROUND-IMAGE: url( images/f_head.jpg); WIDTH: 760px; HEIGHT: 154px" 
      cellSpacing=0 cellPadding=0> <TBODY> 
            <TR> 
              <TD colspan="5" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD> 
            </TR> 
            <TR> 
                <TD width="378" height="24" style="VERTICAL-ALIGN: text-top; TEXT-ALIGN: right"> <TABLE width="100%" height="26" cellPadding=0 cellSpacing=0 style="WIDTH: 240px"> 
                    <TBODY> 
                      <TR> 
                        <TD colSpan=3 rowSpan=3 align="center" style="HEIGHT: 15px; TEXT-ALIGN: center"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"> </SPAN><A 
                  href="index.php">首
          
                             页</A></TD> 
						<td solspan=3 rowSpan=3 align="center" style="height:15px; text-align:center;"><span style="font-size:9pt;color=#cc0033"></span><a href="file.php">我的博客</a>
						</td>
                        <TD rowSpan=3 style="HEIGHT: 15px; TEXT-ALIGN: center"><A href="file_more.php"> 博客文章</SPAN></A></TD> 
                        <TD  rowSpan=3 style="HEIGHT: 15px; TEXT-ALIGN: center"><A href="RegPro.php"> 博客注册</A></TD> 
                      </TR> 
                      <TR></TR> 
                      <TR></TR> 
                    </TBODY> 
                </TABLE></TD> 
                <TD width="95" align="center">当前时间：</TD> 
              <TD width="285" align="left" style="FONT-SIZE: 9pt; VERTICAL-ALIGN: middle; WIDTH: 273px; COLOR: red; FONT-FAMILY: 宋体; HEIGHT: 1px; TEXT-ALIGN: left"> <SCRIPT type=text/javascript> 
　　　document.write("<span id=labTime width='118px' Font-Size='9pt'></span>") //输出显示日期的容器 
　　　//每1000毫秒(即1秒) 执行一次本段代码 
　　　setInterval("labTime.innerText=new Date().toLocaleString()",1000)  
　　　　</SCRIPT> </TD> 
              </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
    <TR> 
      <TD colSpan=3 valign="baseline" style="BACKGROUND-IMAGE: url( images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center"><br>
        <br> 
        <table width="600" height="100%"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="130" align="center" valign="top"><?php if ($page=="") {$page=1;}; ?>
<table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                <tr align="left" colspan="2" >
                  <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="tableBorder_LTR"> 查看我的文章 </span> </td>
                </tr>
                	<?php
						if ($page){
						   $page_size=20;     //每页显示20条记录
						   $query="select count(*) as total from tb_article where author = '".$_SESSION[username]."' order by id desc";   
							$result=mysql_query($query);       //查询总的记录条数
							$message_count=mysql_result($result,0,"total");       //为变量赋值
							$page_count=ceil($message_count/$page_size);	  //根据记录总数除以每页显示的记录数求出所分的页数
							$offset=($page-1)*$page_size;			//计算下一页从第几条数据开始循环  

								$sql=mysql_query("select id,title from tb_article where author = '".$_SESSION[username]."' order by id desc limit $offset, $page_size");			
								$info=mysql_fetch_array($sql);
								
					 ?>
                <tr>
                  <td height="31" align="center" valign="top" ><table width="500"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><table width="498"  border="0" cellspacing="0" cellpadding="0" valign="top">
                          <?php
						  	if($info){
							$i=1;
							do{
						  ?>
                          <tr>
                            <td width="498" align="left" valign="top"> &nbsp;&nbsp;&nbsp;<a href="article.php?file_id=<?php echo $info[id];?>"><?php echo $i."、".$info[title];?></a> </td>
                          </tr>
                          <?php 
							  $i=$i+1;
							  }while($info=mysql_fetch_array($sql))
						  ?>
                      </table></td>
                    </tr>
                  </table></td>
                </tr>
               <?php } ?>
              </table>
              <table width="560" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr bgcolor="#EFF7DE">
                  <td width="33%">&nbsp;&nbsp;页次：<?php echo $page;?>/<?php echo $page_count;?>页
                    记录：<?php echo $message_count;?> 条&nbsp; </td>
                  <td width="67%" align="right" class="hongse01">
                          <?php
						  if($page!=1)
						   {
							 echo  "<a href=myfiles.php?page=1>首页</a>&nbsp;";
							 echo "<a href=myfiles.php?page=".($page-1).">上一页</a>&nbsp;";
						   }
						  if($page<$page_count)
						   {
								echo "<a href=myfiles.php?page=".($page+1).">下一页</a>&nbsp;";
								echo  "<a href=myfiles.php?page=".$page_count.">尾页</a>";
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
