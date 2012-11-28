<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/style.css" rel="stylesheet">
<?php
include("../conn/conn.php");
$state=$_POST[payfor];
$type=$_POST[select];
if($_POST[select]==""){
$state=$_GET[state];
$type=$_GET[type];
}
if($state=="all"){
	$sql1=mysql_query("select count(*) as total from tb_leaguerinfo  where type='$type' order by id");
}else{
	$sql1=mysql_query("select count(*) as total from tb_leaguerinfo  where type='$type' and checkstate=$state order by id");
}
$minfo=mysql_fetch_array($sql1);
$total=$minfo[total];
$pagesize=4;
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
	$sql=mysql_query("select * from tb_leaguerinfo  where type='$type' order by id limit ".($page-1)*$pagesize.",$pagesize");
}else{
	$sql=mysql_query("select * from tb_leaguerinfo  where type='$type' and checkstate=$state order by id limit ".($page-1)*$pagesize.",$pagesize");
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当前信息类别：&nbsp;『<span class="style11">&nbsp;<?php echo $type;?>&nbsp;</span>』<br>
        <table width="709" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFCC33">
          <tr align="center" bgcolor="#FFCC33">
            <td width="76">信息标题</td>
            <td width="204">信息内容</td>
            <td width="65">联系人</td>
            <td width="88">联系电话</td>
            <td width="79">发布日期</td>
            <td width="72">截止日期</td>
            <td width="54">审核状态</td>
            <td width="62">操作</td>
          </tr>
          <?php
	if($info){
	do{
		if($info[checkstate]==1){ 
			$state1="已付费";
		}else{
			$state1="未付费";
		}
	?>
          <tr bgcolor="#FFFFFF">
            <td>&nbsp;<?php echo $info[title];?></td>
            <td width="204">&nbsp;<?php echo $info[content];?></td>
            <td>&nbsp;<?php echo $info[linkman];?></td>
            <td>&nbsp;<?php echo $info[tel];?></td>
            <td>&nbsp;<?php echo $info[sdate];?></td>
            <td>&nbsp;<?php echo $info[showday];?></td>
            <td align="center" class="style11"><?php echo $state1;?></td>
            <td align="center" bgcolor="#FFFFFF"><a href="statefu_ok.php?id=<?php echo $info[id];?>&type=<?php echo $type;?>&state=<?php echo $state;?>">审核</a>/<a href="fudel_ok.php?id=<?php echo $info[id];?>&type=<?php echo $type;?>&state=<?php echo $state;?>">删除</a></td>
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
      <a href="find_fufei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=1" title="首页"></a> <a href="find_fufei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $page-1;?>" title="上一页"></a>
      <?php
		  }
	  if($pagecount<=4){
		 for($i=1;$i<=$pagecount;$i++){
	  ?>
      <a href="find_fufei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
      <?php
		 }
      }else{
	  for($i=1;$i<=4;$i++){	 
	  ?>
      <a href="find_fufei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
      <?php }?>
      <a href="find_fufei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $page-1;?>" title="下一页"></a> <a href="find_fufei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $pagecount;?>" title="尾页"></a>
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
        </table>
    </td>
  </tr>
  <tr>
    <td height="32" background="images/right_bottom.gif">&nbsp;</td>
  </tr>
</table>
