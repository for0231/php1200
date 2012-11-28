<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/style.css" rel="stylesheet">
<?php
include("../conn/conn.php");
$state=$_POST[state];
$type=$_POST[type];
if($_POST[type]==""){
$state=$_GET[state];
$type=$_GET[type];
}
if($state=="all"){
	$sql1=mysql_query("select count(*) as total from tb_info where type='$type' order by edate");
}else{
	$sql1=mysql_query("select count(*) as total from tb_info where type='$type' and checkstate=$state order by edate");
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
if($state=="all"){
	$sql=mysql_query("select * from tb_info where type='$type' order by edate limit ".($page-1)*$pagesize.",$pagesize");
}else{
	$sql=mysql_query("select * from tb_info where type='$type' and checkstate=$state order by edate limit ".($page-1)*$pagesize.",$pagesize");
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
    <td height="488" align="center" valign="top" background="images/right_middle.gif">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当前信息类别：&nbsp;『<span class="style11">&nbsp;<?php echo $type;?>&nbsp;</span>』<br>
        <table width="708" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFCC33">
          <tr align="center" bgcolor="#FFCC33">
            <td width="111">信息标题</td>
            <td width="203">信息内容</td>
            <td width="63">联系人</td>
            <td width="79">联系电话</td>
            <td width="125">发布时间</td>
            <td width="61">审核状态</td>
            <td width="58">操作</td>
          </tr>
	<?php
	if($info){
	do{
		if($info[checkstate]==1){ 
			$state1="已审核";
		}else{
			$state1="未审核";
		}
	?>
          <tr bgcolor="#FFFFFF">
            <td>&nbsp;<?php echo $info[title];?></td>
            <td>&nbsp;<?php echo $info[content];?></td>
            <td>&nbsp;<?php echo $info[linkman];?></td>
            <td>&nbsp;<?php echo $info[tel];?></td>
            <td>&nbsp;<?php echo $info[edate];?></td>
            <td align="center" class="style11"><?php echo $state1;?></td>
            <td align="center" bgcolor="#FFFFFF"><a href="state_ok.php?id=<?php echo $info[id];?>&type=<?php echo $type;?>&state=<?php echo $state;?>">审核</a>/<a href="miandel_ok.php?id=<?php echo $info[id];?>&type=<?php echo $type;?>&state=<?php echo $state;?>">删除</a></td>
          </tr>
	<?php
	}while($info=mysql_fetch_array($sql));
	?>
  <tr bgcolor="#FFFFDD">
    <td height="22" colspan="7" align="right"> &nbsp; 共有&nbsp;
        <?php
		   echo $total;
		?>
&nbsp;条&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
      <?php
		  if($page>=2){
	  ?>
      <a href="find_mianfei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=1" title="首页"></a>
	  <a href="find_mianfei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $page-1;?>" title="上一页"></a>
      <?php
		  }
	  if($pagecount<=4){
		 for($i=1;$i<=$pagecount;$i++){
	  ?>
      <a href="find_mianfei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
      <?php
		 }
      }else{
	  for($i=1;$i<=4;$i++){	 
	  ?>
      <a href="find_mianfei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
      <?php }?>
      <a href="find_mianfei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $page-1;?>" title="下一页"></a>
	  <a href="find_mianfei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $pagecount;?>" title="尾页"></a>
      <?php }?>
      &nbsp;</td>
  </tr>
<?php
	}else{
?>
		<tr align="center" bgcolor="#FFFFFF"><td colspan="7">对不起，您检索的信息不存在！</td>
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
