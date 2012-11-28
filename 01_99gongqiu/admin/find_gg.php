<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/style.css" rel="stylesheet">
<?php
include("../conn/conn.php");
$flag=$_POST[commend];
if($_POST[commend]==""){
$flag=$_GET[flag];
}
if($flag=="all"){
	$sql1=mysql_query("select count(*) as total from tb_advertising order by flag desc");
}else{
	$sql1=mysql_query("select count(*) as total from tb_advertising where flag='$flag' order by flag desc");
}
$minfo=mysql_fetch_array($sql1);
$total=$minfo[total];
$pagesize=10;
if($total<=$pagesize){
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
if($flag=="all"){
	$sql=mysql_query("select * from tb_advertising order by flag desc limit ".($page-1)*$pagesize.",$pagesize");
}else{
	$sql=mysql_query("select * from tb_advertising where flag='$flag' order by flag desc limit ".($page-1)*$pagesize.",$pagesize");
}
$info=mysql_fetch_array($sql);
?>
<table width="776" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="32" background="images/right_line.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您现在的位置：易查供求信息网&nbsp;&gt;&nbsp;后台管理系统</td>
  </tr>
  <tr>
    <td height="32" background="images/right_top.gif">&nbsp;</td>
  </tr>
  <tr>
  <td height="488" align="center" valign="top" background="images/right_middle.gif">      <table width="700" border="1" cellpadding="0" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FFCC33">
    <tr align="center" bgcolor="#FFCC33">
      <td width="141"  bgcolor="#FFCC33">广告标题</td>
      <td width="291">广告内容</td>
      <td width="123">发布时间</td>
      <td width="64">是否推荐</td>
      <td width="63" height="22">操作</td>
    </tr>
    <?php
	if($info){
	do{
			if($info[flag]=="1"){ 
				$flag1="已推荐";
			}else{
				$flag1="未推荐";
			}
   ?>
    <tr bgcolor="#FFFFFF">
      <td>&nbsp;<?php echo $info[title];?></td>
      <td>&nbsp;<?php echo $info[content];?></td>
      <td>&nbsp;<?php echo $info[fdate];?></td>
      <td align="center" bgcolor="#FFFFFF" class="style11">&nbsp;<?php echo $flag1;?></td>
      <td align="center" bgcolor="#FFFFFF"><a href="gg_ok.php?id=<?php echo $info[id];?>&flag=<?php echo $flag; ?>">推荐</a>/<a href="del_ok.php?id=<?php echo $info[id];?>&flag=<?php echo $flag; ?>">删除</a></td>
    </tr>
    <?php
			}while($info=mysql_fetch_array($sql));
		  ?>
    <tr bgcolor="#FFFFDD">
      <td height="22" colspan="8" align="right"> &nbsp; 共有&nbsp;
          <?php
		   echo $total;
		?>
&nbsp;条&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
      <?php
		  if($page>=2){
	  ?>
      <a href="find_gg.php?flag=<?php echo $flag;?>&page=1" title="首页"></a> <a href="find_gg.php?flag=<?php echo $flag;?>&page=<?php echo $page-1;?>" title="上一页"></a>
      <?php
		  }
	  if($pagecount<=4){
		 for($i=1;$i<=$pagecount;$i++){
	  ?>
      <a href="find_gg.php?flag=<?php echo $flag;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
      <?php
		 }
      }else{
	  for($i=1;$i<=4;$i++){	 
	  ?>
      <a href="find_gg.php?flag=<?php echo $flag;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
      <?php }?>
      <a href="find_gg.php?flag=<?php echo $flag;?>&page=<?php echo $page-1;?>" title="下一页"></a> <a href="find_gg.php?flag=<?php echo $flag;?>&page=<?php echo $pagecount;?>" title="尾页"></a>
      <?php }?>
&nbsp;</td>
    </tr>
    <?php
	}else{
?>
    <tr align="center" bgcolor="#FFFFFF">
      <td colspan="8">对不起，您检索的信息不存在！</td>
    </tr>
    <?php
}
?>
  </table></td>
  </tr>
  <tr>
    <td height="32" background="images/right_bottom.gif">&nbsp;</td>
  </tr>
</table>
