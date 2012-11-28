<?php
include_once("conn/conn.php");
include_once("top.php");
?>
<table width="870" height="30" align="center" background="images/bg_14(1).jpg"><tr><td width="129" rowspan="2">&nbsp;</td>
    <td width="729"></td>
</tr>
  <tr>
    <td><span class="a9">编程词典</span></td>
  </tr>
</table>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">

<table width="850" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><br>
	
		<?php
		
		  $sql=mysql_query("select count(*) as total1 from tb_bccd ",$conn);
$info=mysql_fetch_array($sql);
 $total1=$info[total1];
if(empty($_GET[page])==true || is_numeric($_GET[page])==false)
		        {
		         $page1=1;
		        }
		       else
		       {
		         $page1=intval($_GET[page]);
		       }

		
		     if($total1==0)
	         {
			   echo "<div align=center>暂无新书</div>";
			 }
			 else
			  { 
		         $pagesize1=8;
		   
		       if($total1<$pagesize1)	
		        {
		          $pagecount1=1;
		        }
	           else
		          {
		           if($total1%$pagesize1==0)
			        {
			          $pagecount1=intval($total1/$pagesize1);
			         }
			       else
			         {
			          $pagecount1=intval($total1/$pagesize1)+1;
			         } 
		         }
      
	  
		  
		
		?>  
		  <table border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
        <?php
		 $sql=mysql_query("select * from tb_bccd order by bccdname desc, addtime desc  limit ".($page1-1)*$pagesize1.",$pagesize1",$conn);
		 $info=mysql_fetch_array($sql);
		  $i=1; 
		   do
		    { 
             if ($i % 2==0)
		      { 
		 ?>
          <td height="25"><table width="200" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="415" height="175" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#6EBEC7">
            <tr>
              <td width="415" bgcolor="#FFFFFF">
			  <table width="415" height="170" border="0" align="center" cellpadding="0" cellspacing="0">
               <tr>
                  <td width="135" rowspan="3" align="center"><div align="center"><a href="<?php echo $info["imageaddress"]; ?>"><img src=" <?php echo $info["imageaddress"]; ?>" width="135" height="150" border="0"></a></div></td>
                  <td width="7" rowspan="3" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="1" height="9" bgcolor="#FFFFFF"></td>
                  <td width="280" rowspan="3" bgcolor="#FFFFFF" valign="middle"><table width="240" height="140" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td colspan="2" background="images/bg_14(2).jpg">&nbsp;<span class="a10">名&nbsp;&nbsp;&nbsp;称：
                              <?php
						    echo unhtml($info["bccdname"]);
						  ?>
                          </span></td>
                          </tr>
                        <tr>
                          <td width="90"><div align="center">所属版本：</div></td>
                          <td width="170"><?php
						     $sqlt=mysql_query("select id,bbname from tb_bb where id='".$info["bbid"]."'",$conn);
						     $infot=mysql_fetch_array($sqlt);
							 echo unhtml($infot["bbname"]);
						   ?></td>
                        </tr>
                        <tr>
                          <td><div align="center">价&nbsp;&nbsp;&nbsp;&nbsp;格：</div></td>
                          <td><?php 
						   
							echo number_format($info["price"],2)."&nbsp;元"; 
						  
						  ?></td>
                        </tr>
                        <tr>
                          <td><div align="center">版&nbsp;&nbsp;&nbsp;&nbsp;权：</div></td>
                          <td><?php
						    echo unhtml($info["owner"]);
						  ?></td>
                        </tr>
                        <tr>
                          <td colspan="2"><div align="center"><a href="bccdinfo.php?id=<?php echo $info[id];?>"><img src="images/bg_14(3).jpg" border="0" width="69" height="20" /></a>&nbsp;&nbsp;<a href="shopping_cart_first.php?id=<?php echo $info[id];?>"><img src="images/bg_14(4).jpg" width="69" height="20" border="0" /></a>&nbsp;<a href="shopping_cart.php"><img src="images/bg_14(16).jpg" border="0" width="80" height="22" /></a></div></td>
                          </tr>
                      </table></td>
                </tr>
              </table>
			  
			  
			  
			  </td>
            </tr>
          </table></td>
    <td width="10">&nbsp;</td>
  </tr>
</table>
<br>		  </td>
        </tr>
        <?php
			  }
			 else
			  {
		?>
  <td height="25"><table width="200" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="190"><table width="415" height="175" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#6EBEC7">
          <tr>
            <td bgcolor="#FFFFFF"><table width="130" height="170" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="173" rowspan="3" align="center"><div align="center"><a href="<?php echo $info["imageaddress"]; ?>"><img src=" <?php echo $info["imageaddress"]; ?>" width="135" height="150" border="0"></a></div></td>
                  <td width="10" rowspan="3" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="1" height="9" bgcolor="#FFFFFF"></td>
                  <td width="285" rowspan="3" bgcolor="#FFFFFF" valign="middle"><table width="240" height="140" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td colspan="2" background="images/bg_14(2).jpg">&nbsp;<span class="a10">名&nbsp;&nbsp;&nbsp;称：
                              <?php
						    echo unhtml($info["bccdname"]);
						  ?>
                          </span></td>
                          </tr>
                        <tr>
                          <td width="90"><div align="center">所属版本：</div></td>
                          <td width="170">
                            <?php
						     $sqlt=mysql_query("select id,bbname from tb_bb where id='".$info["bbid"]."'",$conn);
						     $infot=mysql_fetch_array($sqlt);
							 echo unhtml($infot["bbname"]);
						   ?>
                         </td>
                        </tr>
                        <tr>
                          <td><div align="center">价&nbsp;&nbsp;&nbsp;&nbsp;格：</div></td>
                          <td>
                            <?php 
						echo number_format($info["price"],2)."&nbsp;元"; 
						  
						  ?>
                          </td>
                        </tr>
                        <tr>
                          <td><div align="center">版&nbsp;&nbsp;&nbsp;&nbsp;权：</div></td>
                          <td>
                            <?php
						    echo unhtml($info["owner"]);
						  ?>
                         </td>
                        </tr>
                        <tr>
                          <td colspan="2"><a href="bccdinfo.php?id=<?php echo $info[id];?>"><img src="images/bg_14(3).jpg" border="0" width="69" height="20" /></a>&nbsp;<a href="shopping_cart_first.php?id=<?php echo $info[id];?>"><img src="images/bg_14(4).jpg" width="69" height="20" border="0" /></a>&nbsp;<a href="shopping_cart.php"><img src="images/bg_14(16).jpg" border="0" width="80" height="22" /></a></td>
                          </tr>
                    </table></td>
                </tr>
            </table></td>
          </tr>
      </table></td>
      <td width="10">&nbsp;</td>
    </tr>
  </table>
<br>
  
  </td>
   
      <?php
			}
		  $i++;	
		}while($info=mysql_fetch_array($sql));
}		
	 ?>
	</tr>
  </table>
 <table width="845" height="25" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
            <tr>
              <td width="531"><div align="left">&nbsp;&nbsp;共有编程词典&nbsp;<?php echo $total1;?>&nbsp;个&nbsp;每页显示&nbsp;<?php echo $pagesize1;?>&nbsp;个&nbsp;第&nbsp;<?php echo $page1;?>&nbsp;页/共&nbsp;<?php echo $pagecount1;?>&nbsp;页</div></td>
              <td width="317"><div align="right"><a href="<?php echo $_SERVER["PHP_SELF"]?>?page=1" class="a1">首页</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
		 if($page1>1) 
		  
		   echo $page1-1;
		  else
		   echo 1;  
		   ?>" class="a1">上一页</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
		 if($page1<$pagecount1) 
		  
		   echo $page1+1;
		  else
		   echo $pagecount1;  
		   ?>" class="a1">下一页</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php echo $pagecount1;?>" class="a1">尾页</a>&nbsp;&nbsp;</div></td>
            </tr>
          </table>
	  <br>
	
	
	
	
	</td>
  </tr>
</table>



</td>
        </tr></table>
<?php
include_once("bottom.php");
?>