<?php
include_once("conn/conn.php");
include_once("top.php");
?>
<table width="870" height="30" align="center" background="images/bg_14(1).jpg"><tr><td width="129" rowspan="2">&nbsp;</td>
    <td width="729"></td>
</tr>
  <tr>
    <td><span class="a9">软件下载</span></td>
  </tr>
</table>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">
<table width="750" height="60" border="0" align="center" cellpadding="0">
        
        <tr>
          <td>
		  
		    <br>
      <table width="700" height="40" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
       
	    <tr>
          <td colspan="2" bgcolor="#CCCCCC"><div align="center">软件名称</div></td>
          <td width="150" height="20" bgcolor="#CCCCCC"><div align="center">添加时间</div></td>
          <td width="70" height="20" bgcolor="#CCCCCC"><div align="center">下载次数</div></td>
        </tr>
           <?php
	  $sql=mysql_query("select count(*) as total from tb_soft",$conn);
	  $info=mysql_fetch_array($sql);
	  $total=$info[total];
	 if($total==0)
	    {
	     echo "<div align=center>对不起，暂无软件提供下载！</div>";
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
		   
		   $pagesize=25;
		   
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

	   $sql=mysql_query("select * from tb_soft order by addtime desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
	   while($info=mysql_fetch_array($sql))
	    {  	
		   
	 ?>
	   
	   
	    <tr>
          <td colspan="2" bgcolor="#FFFFFF">&nbsp;<a href="softinfo.php?id=<?php echo $info[id];?>" class="a1"><?php echo unhtml($info[softname]);?></a></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info[addtime];?></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><?php echo $info[click];?></div></td>
       </tr>
	  
	   <?php
	     }
	   }	
	  ?> 
      </table>
	  	  <br></td>
        </tr>
      </table>
      <table width="750" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#FFFFFF"><table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="479"><div align="left">&nbsp;&nbsp;共提供软件下载&nbsp;<?php echo $total;?>&nbsp;项&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;项&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount;?>&nbsp;页</div></td>
              <td width="269"><div align="right"><a href="<?php echo $_SERVER["PHP_SELF"]?>?page=1" class="a1">首页</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
		 if($page>1) 
		  
		   echo $page-1;
		  else
		   echo 1;  
		   ?>" class="a1">上一页</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
		 if($page<$pagecount) 
		  
		   echo $page+1;
		  else
		   echo $pagecount;  
		   ?>" class="a1">下一页&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php echo $pagecount;?>" class="a1">尾页</a>&nbsp;&nbsp;</div></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table width="750" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>


</td>
        </tr></table>
<?php
include_once("bottom.php");
?>