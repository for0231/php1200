<?php
 include("top.php");
?>
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="209" height="438" valign="top" bgcolor="#F0F0F0"><?php include("left.php");?></td>
    <td width="581" align="center" valign="top" bgcolor="#FFFFFF"><table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="50" background="images/tuijian1.gif">&nbsp;</td>
      </tr>
    </table>
      <table width="550" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td background="images/line1.gif"></td>
        </tr>
      </table>
      <?php
	   $sql=mysql_query("select count(*) as total from tb_shangpin where tuijian=1 ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0)
	   {
	     echo "本站暂无推荐产品!";
	   }
	   else
	   {
	  
	  ?>
      <table width="550" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
        <?php
 
    
	       $pagesize=20;
		   if ($total<=$pagesize){
		      $pagecount=1;
			} 
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;
			
			}else{
			   $pagecount=$total/$pagesize;
			
			}
			if(($_GET[page])==""){
			    $page=1;
			
			}else{
			    $page=intval($_GET[page]);
			
			}
			 
             $sql1=mysql_query("select * from tb_shangpin where tuijian=1 order by addtime desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
        <tr>
          <td width="89"  rowspan="6"><div align="center">
              <?php
			 if($info1[tupian]=="")
			 {
			   echo "暂无图片!";
			 }
			 else
			 {
			?>
              <a href="lookinfo.php?id=<?php echo $info1[id];?>" ><img  border="0" width="80" height="80" src="<?php echo $info1[tupian];?>"></a>
              <?php
			 }
			?>
          </div></td>
          <td width="93" height="20"><div align="center" style="color: #000000">商品名称：</div></td>
          <td colspan="5"><div align="left"> <a href="lookinfo.php?id=<?php echo $info1[id];?>"><?php echo $info1[mingcheng];?></a></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">商品品牌：</div></td>
          <td width="101" height="20"><div align="left"><?php echo $info1[pinpai];?></div></td>
          <td width="62"><div align="center" style="color: #000000">商品型号：</div></td>
          <td colspan="3"><div align="left"><?php echo $info1[xinghao];?></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">商品简介：</div></td>
          <td height="20" colspan="5"><div align="left"><?php echo $info1[jianjie];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">上市日期：</div></td>
          <td height="20"><div align="left"><?php echo $info1[addtime];?></div></td>
          <td height="20"><div align="center" style="color: #000000">剩余数量：</div></td>
          <td width="69" height="20"><div align="left"><?php echo $info1[shuliang];?></div></td>
          <td width="63"><div align="center" style="color: #000000">商品等级：</div></td>
          <td width="73"><div align="left"><?php echo $info1[dengji];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">商场价：</div></td>
          <td height="20"><div align="left"><?php echo $info1[shichangjia];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">会员价：</div></td>
          <td height="20"><div align="left"><?php echo $info1[huiyuanjia];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">折扣：</div></td>
          <td height="20"><div align="left"><?php echo (ceil(($info1[huiyuanjia]/$info1[shichangjia])*100))."%";?></div></td>
        </tr>
        <tr>
          <td height="20" colspan="6" width="461"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="addgouwuche.php?id=<?php echo $info1[id];?>"><img src="images/goumai_btn.gif" width="60" height="18" border="0" style=" cursor:hand"></a></div></td>
        </tr>
        <tr>
          <td height="10" colspan="7" background="images/line1.gif"></td>
        </tr>
        <?php
	    }
		
		?>
      </table>
      <table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="right">本站共有推荐产品&nbsp;
                  <?php
		   echo $total;
		  ?>
&nbsp;件&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;件&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="showtuijian.php?page=1" title="首页"><font face="webdings"> 9 </font></a> <a href="showtuijian.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="showtuijian.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="showtuijian.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="showtuijian.php?page=<?php echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a> <a href="showtuijian.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
        <?php }?>
          </div></td>
        </tr>
      </table>
    <?php
	    }
		
		?></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>