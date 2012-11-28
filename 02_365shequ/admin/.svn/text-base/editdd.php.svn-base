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
<table width="565" height="81" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
	   <?php
	  include_once("../conn/conn.php");
	  include_once("function.php");  
	  $sql=mysql_query("select count(*) as total from tb_dd",$conn);
	  $info=mysql_fetch_array($sql);
	  $total=$info[total];
	 if($total==0)
	    {
	     echo "<tr>";
	     echo  "<td height=\"25\" colspan=\"4\" align=\"center\" bgcolor=\"#F7F7F7\">对不起，暂无订单！</td>";
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
		  <td height="25" colspan="5" align="center" class="a5"><?php echo $htgl;?></td>
  </tr>
		<tr>
          <td width="106" height="25" align="right" bgcolor="#F7F7F7"><div align="center">收货人</div></td>
     
          <td width="114" height="25" align="right" bgcolor="#F7F7F7"><div align="center">订单号</div></td>
          <td width="122" height="25" align="right" bgcolor="#F7F7F7"><div align="center">金额</div></td>
          <td width="140" bgcolor="#F7F7F7"><div align="center">电话</div></td>
          <td width="55" bgcolor="#F7F7F7"><div align="center">删除</div></td>
        </tr>
	 <?php
	   $sql=mysql_query("select * from tb_dd order by id desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
	   while($info=mysql_fetch_array($sql))
	    {  	
	 
	 ?>	
		
        <tr>
          <td height="25" align="right" bgcolor="#F7F7F7"><div align="left">&nbsp;<?php 
		  		   echo unhtml($info[recuser]); 
		  ?></div></td>
          <td align="right" bgcolor="#F7F7F7"><div align="center"><?php
		   echo $info[ddnumber]; 
		  ?></div></td>
          <td align="right" bgcolor="#F7F7F7"><div align="center"><?php echo $info[totalprice];?></div></td>
          <td height="25" align="right" bgcolor="#F7F7F7"><div align="center"><?php echo $info[mtel];?>/<?php echo $info[gtel];?></div></td>
          <td height="25" align="right" bgcolor="#F7F7F7"><div align="center"><a href="default.php?htgl=订单管理&mtid=<?php echo $info[id];?>"></a><a href="javascript:if(window.confirm('您确定删除该订单么？')==true){window.location.href='deletedd.php?id=<?php echo $info[id];?>';}"><img src="images/del.gif" width="22" height="22" border="0"></a></div></td>
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
    <td width="400" height="20"><div align="left">共有订单&nbsp;<?php echo $total;?>&nbsp;个&nbsp;每页显示&nbsp;<?php echo $pagesize?>&nbsp;个&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页&nbsp;/共&nbsp;<?php echo $pagecount?>&nbsp;页</div></td>
    <td width="300">
	<div align="right">
	<?php
   if($page>=2)
	{
    ?>
  <a href="default.php?htgl=订单管理&page=1" title="首页"><font face="webdings"> 9 </font></a> 
  <a href="default.php?htgl=订单管理&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
  <?php
    }
   if($pagecount<=4)
     {
		for($i=1;$i<=$pagecount;$i++)
		{
  ?>
        <a href="default.php?htgl=订单管理&page=<?php echo $i;?>"><?php echo $i;?></a>
  <?php
		 }
	  }
	else
	  {
		 for($i=1;$i<=4;$i++)
		  {	 
  ?>
          <a href="default.php?htgl=订单管理&page=<?php echo $i;?>"><?php echo $i;?></a>
  <?php 
          }
  ?>
        <a href="default.php?htgl=订单管理&page=<?php 
		 if($pagecount>=$page+1)
		   echo $page+1;
		  else
		   echo 1; 
		 
		 ?>" title="后一页"><font face="webdings"> 8 </font></a> 
		<a href="default.php?htgl=订单管理&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
  <?php 
          }
		  }
  ?>
	&nbsp;</div></td>
  </tr>
</table>
</body>
</html>
