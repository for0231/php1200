<?php
 include("conn/conn.php");
 include("top.php");
?>
<style type="text/css">
<!--
.style1 {color: #990000}
-->
</style>

<table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="229" valign="top" bgcolor="#F0F0F0"><?php include("left.php");?></td>
    <td width="561" align="center" valign="top" bgcolor="#FFFFFF"><table width="550" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
      <?php
		 $jdcz=$_POST[jdcz];
		 $name=$_POST[name];
		 $mh=$_POST[mh];
		 $dx=$_POST[dx];
		   if($dx=="1"){
			   $dx=">";
			}
			elseif($dx=="-1"){
			    $dx="<";
			 }
		    else{
			    $dx="=";
			 } 
		 $jg=intval($_POST[jg]);
		
		 $lb=$_POST[lb];
		if($jdcz!=""){
	     $sql=mysql_query("select * from tb_shangpin where mingcheng like '%".$name."%' order by addtime desc",$conn);
		}
		else
		{
		   if($mh=="1"){
			  $sql=mysql_query("select * from tb_shangpin where huiyuanjia $dx".$jg." and typeid='".$lb."' and mingcheng like '%".$name."%'",$conn);
			
			}
		    else{
			  $sql=mysql_query("select * from tb_shangpin where huiyuanjia $dx".$jg." and typeid='".$lb."' and mingcheng = '".$name."'",$conn);
			}
		} 
		 $info=mysql_fetch_array($sql);
		 if($info==false){
		   echo "<script language='javascript'>alert('本站暂无类似产品!');history.go(-1);</script>";
		  } 
		 else{
	?>
      <table width="530" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <tr bgcolor="#FFEDBF">
          <td width="92" height="25"><div align="center" style="color: #990000">名称</div></td>
          <td width="83"><div align="center" style="color: #990000">品牌</div></td>
          <td width="62"><div align="center" style="color: #990000">市场价</div></td>
          <td width="62"><div align="center" style="color: #990000">会员价</div></td>
          <td width="161"><div align="center" style="color: #990000">上市时间</div></td>
          <td width="48"><div align="center" style="color: #FFFFFF"><span class="style1"></span></div></td>
          <td width="42"><div align="center" style="color: #990000">操作</div></td>
        </tr>
        <?php
		 do{
		?>
        <tr bgcolor="#FFFFFF">
          <td height="25"><div align="center"><?php echo $info[mingcheng];?></div></td>
          <td height="25"><div align="center"><?php echo $info[pinpai];?></div></td>
          <td height="25"><div align="center"><?php echo $info[shichangjia];?></div></td>
          <td height="25"><div align="center"><?php echo $info[huiyuanjia];?></div></td>
          <td height="25"><div align="center"><?php echo $info[addtime];?></div></td>
          <td height="25"><div align="center"><a href="lookinfo.php?id=<?php echo $info[id];?>">查看</a></div></td>
          <td height="25"><div align="center"><a href="addgouwuche.php?id=<?php echo $info[id];?>">购物</a></div></td>
        </tr>
        <?php
		   }while($info=mysql_fetch_array($sql));
		 }
		?>
    </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>