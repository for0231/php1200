
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>编辑商品</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php
  include("conn/conn.php");
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<?php
	   $sql=mysql_query("select count(*) as total from tb_shangpin ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0){
	     echo "本站暂无商品!";
	   }
	   else
	    {
?>
<form name="form1" method="post" action="deletefxhw.php">
  <p>&nbsp;</p>
  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="75" bgcolor="#666666"><table width="750" height="86" border="0" cellpadding="0" cellspacing="1">
      
	  <tr bgcolor="#FFCF60">
        <td height="20" colspan="10"><div align="center" class="style1">商品信息编辑</div></td>
      </tr>
      <tr>
        <td width="59" height="28" bgcolor="#FFFFFF"><div align="center">复选</div></td>
        <td width="102" bgcolor="#FFFFFF"><div align="center">名称</div></td>
        <td width="86" bgcolor="#FFFFFF"><div align="center">品牌</div></td>
        <td width="71" bgcolor="#FFFFFF"><div align="center">型号</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">剩余</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">市场价</div></td>
        <td width="61" bgcolor="#FFFFFF"><div align="center">会员价</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">卖出</div></td>
        <td width="112" bgcolor="#FFFFFF"><div align="center">加入时间</div></td>
        <td width="68" bgcolor="#FFFFFF"><div align="center">操作</div></td>
      </tr>
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
			 
           $sql1=mysql_query("select * from tb_shangpin order by addtime desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
		   while($info1=mysql_fetch_array($sql1))
		    {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="<?php echo $info1[id];?>" value=<?php echo $info1[id];?>>
        </div></td>
        <td height="25" bgcolor="#FFFFFF">
          
          <div align="center"><?php echo $info1[mingcheng];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[pinpai];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[xinghao];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php if($info1[shuliang]<0) {echo "售完";}else {echo $info1[shuliang];}?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[shichangjia];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[huiyuanjia];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[cishu];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[addtime];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="changegoods.php?id=<?php echo $info1[id];?>">更改</a></div></td>
      </tr>
	 <?php
	    }
        
      ?>
	 
    </table></td>
  </tr>
</table>
<table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="165">
	  <div align="left"><input name="submit" type="submit" class="buttoncss" id="submit" value="删除选择">
	  &nbsp;<input type="reset" value="重新选择" class="buttoncss"></div></td>
    <td width="585"><div align="right">&nbsp;本站共有货物
        <?php
		   echo $total;
		  ?>
        &nbsp;件&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;件&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="editgoods.php?page=1" title="首页"><font face="webdings"> 9 </font></a> <a href="editgoods.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="editgoods.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="editgoods.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="editgoods.php?page=<?php echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a> <a href="editgoods.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
        <?php }?>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
  <?php
	}
  ?>
</body>
</html>
