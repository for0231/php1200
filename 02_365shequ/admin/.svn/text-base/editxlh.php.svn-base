<?php
session_start();
if($_SESSION["admin_nc"]=="")
 {
  echo "<script>alert('禁止非法登录!');window.location.href='../index.php';</script>";
  exit;
 }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>BCTY365网上社区—后台管理</title>
<link rel="stylesheet" type="text/css" href="css/style.css"></head>
<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
      <table width="565" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
	   <?php
	  include_once("../conn/conn.php");
	  include_once("function.php");  
	  $sql=mysql_query("select count(*) as total from tb_xlh",$conn);
	  $info=mysql_fetch_array($sql);
	  $total=$info[total];
	 if($total==0)
	    {
	     echo "<tr>";
	     echo  "<td height=\"25\" colspan=\"4\" align=\"center\" bgcolor=\"#F7F7F7\">对不起，暂无序列号！</td>";
         echo "</tr>";
	    }
	  
	   else
	    {
		  if(empty($_GET[page])==true || is_numeric($_GET[page])==false)
		   {
		     $page=1;
		   }
		   else
		   {
		     $page=intval($_GET[page]);
		   }
		   
		   $pagesize=20;
		   
		   if($total<$pagesize)	
		   {
		     $pagecount=1;
		   }
		   else
		   {
		     if($total%$pagesize==0)
			  {
			    $pagecount=intval($total/$pagesize);
			  }
			  else
			  {
			    $pagecount=intval($total/$pagesize)+1;
			  } 
		   }
      
	  
		  
	 ?>
		<tr>
		  <td height="25" colspan="5" align="center"  class="a5"><?php echo $htgl;?></td>
	    </tr>
		<tr>
          <td width="228" height="25" align="right" bgcolor="#F7F7F7"><div align="center">编程词典类别</div></td>
     
          <td width="101" height="25" align="right" bgcolor="#F7F7F7"><div align="center">版本</div></td>
          <td width="183" height="25" align="right" bgcolor="#F7F7F7"><div align="center">序列号</div></td>
          <td width="119" bgcolor="#F7F7F7"><div align="center">最后下载时间</div></td>
          <td width="63" bgcolor="#F7F7F7"><div align="center">删除</div></td>
        </tr>
	 <?php
	   $sql=mysql_query("select * from tb_xlh order by id desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
	   while($info=mysql_fetch_array($sql))
	    {  	
	 
	 ?>	
		
        <tr>
          <td height="25" align="right" bgcolor="#F7F7F7"><div align="left">&nbsp;<?php 
		   $sql01=mysql_query("select * from tb_type where id='".$info[bccdid]."'",$conn);
		   $info01=mysql_fetch_array($sql01);
		   echo unhtml($info01[typename]); 
		  ?></div></td>
          <td align="right" bgcolor="#F7F7F7"><div align="center"><?php
		  
		   $sql0=mysql_query("select * from  tb_bb where id='".$info[bbid]."'",$conn);
		   $info0=mysql_fetch_array($sql0);
		   echo unhtml($info0[bbname]); 
		  ?></div></td>
          <td align="right" bgcolor="#F7F7F7"><div align="center"><?php echo $info[xlh];?></div></td>
          <td height="25" align="right" bgcolor="#F7F7F7"><div align="center"><?php echo date("Y-m-d H:i:s",$info[lastdowntime]);?></div></td>
          <td height="25" align="right" bgcolor="#F7F7F7"><div align="center"><a href="default.php?htgl=编辑序列号&mtid=<?php echo $info[id];?>"></a><a href="javascript:if(window.confirm('您确定删除该序列号么？')==true){window.location.href='deletexlh.php?id=<?php echo $info[id];?>';}"><img src="images/del.gif" width="22" height="22" border="0"></a></div></td>
        </tr>
	 <?php
	      }
	  	}
	  ?>
      </table>
	  <?php
if($total!=0)
{
?>
<table width="565" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="400" height="20"><div align="left">共有序列号&nbsp;<?php echo $total;?>&nbsp;个&nbsp;每页显示&nbsp;<?php echo $pagesize?>&nbsp;个&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页&nbsp;/共&nbsp;<?php echo $pagecount?>&nbsp;页</div></td>
    <td width="300">
	<div align="right">
	<?php
   if($page>=2)
	{
    ?>
  <a href="default.php?htgl=编辑序列号&page=1" title="首页"><font face="webdings"> 9 </font></a> 
  <a href="default.php?htgl=编辑序列号&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
  <?php
    }
   if($pagecount<=4)
     {
		for($i=1;$i<=$pagecount;$i++)
		{
  ?>
        <a href="default.php?htgl=编辑序列号&page=<?php echo $i;?>"><?php echo $i;?></a>
  <?php
		 }
	  }
	else
	  {
		 for($i=1;$i<=4;$i++)
		  {	 
  ?>
          <a href="default.php?htgl=编辑序列号&page=<?php echo $i;?>"><?php echo $i;?></a>
  <?php 
          }
  ?>
        <a href="default.php?htgl=编辑序列号&page=<?php 
		 if($pagecount>=$page+1)
		   echo $page+1;
		  else
		   echo 1; 
		 
		 ?>" title="后一页"><font face="webdings"> 8 </font></a> 
		<a href="default.php?htgl=编辑序列号&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
  <?php 
          }
		  }
  ?>
	&nbsp;</div></td>
  </tr>
</table>
</body>
</html>
