<table width="635" border="0" cellpadding="0" cellspacing="0">   
        <tr>
          <td align="center"  valign="middle" bgcolor="#FFFFFF">

<table width="600" height="44" border="0" align="center" cellpadding="0" cellspacing="0">
           <?php
			 $sql=mysql_query("select count(*) as total from tb_cjwt",$conn);
			 $info=mysql_fetch_array($sql);
			 $total=$info[total];
			 if($total==0){
			?>
			<tr>
              <td height="22" colspan="2"><div align="center">对不起，暂无常见问题！</div></td>
              </tr>
			<?php
			 }else{
			   if(!isset($_GET["page"]) || !is_numeric($_GET["page"])){
			      $page=1; 
			   }else{
			      $page=intval($_GET["page"]);
			   }
			   
			   $pagesize=1;
			   if($total%$pagesize==0){
			      $pagecount=intval($total/$pagesize);
			   }else{
			      $pagecount=ceil($total/$pagesize);
			   }
			   $sql=mysql_query("select * from tb_cjwt order by createtime desc limit ".($page-1)*$pagesize.",$pagesize  ",$conn);
			   while($info=mysql_fetch_array($sql)){
			  
	     ?> 
			
            <tr>
              <td width="30" height="22"><div align="center"><img src="images/mark_0.gif" width="3" height="3" /></div></td>
              <td width="690" height="22">
			  <a href="lookcjwt.php?id=<?php echo $info["id"];?>" class="a1" target="_blank">
			  <?php
			  echo unhtml(msubstr($info["question"],0,70));
						
						 if(strlen($info["question"])>70)
			             {
			                echo " ...";
			             }
						 echo "<font color=blue>[".substr(str_replace("-","/",$info[createtime]),0,10)."]</font>";
						 
			?></a></td>
            </tr>
		<?
			 }
		  }
		?>	
          </table></td>
        </tr>
  <tr>
    <td  valign="top"><hr width="1" size="1" noshade></td>
  </tr>
  <tr>
    <td align="center"  valign="middle" bgcolor="#FFFFFF"><table width="600" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="479"><div align="left">&nbsp;&nbsp;共有常见问题&nbsp;<?php echo $total;?>&nbsp;条&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount;?>&nbsp;页</div></td>
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
		   ?>" class="a1">下一页</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php echo $pagecount;?>" class="a1">尾页</a>&nbsp;&nbsp;</div></td>
      </tr>
    </table></td>
  </tr>
      </table>