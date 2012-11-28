<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

</head>

<body>
<table width="97%" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#EBEBEB">
  
  <tr>
    <td height="21" colspan="2" align="center" bgcolor="#E9F7FD"><span class="STYLE1">常用短语</span></td>
    <td colspan="2" align="center" bgcolor="#E9F7FD"><span class="STYLE1">短语类别</span></td>
    <td colspan="3" align="center" bgcolor="#E9F7FD"><a href="#" class="STYLE1" onClick="MM_openBrWindow('insert_note.php','','toolbar=yes,width=440,height=219')">添加</a></td>
  </tr>
  
 <?php
       include("conn/conn.php");
	   $sql="select * from tb_note";
	   $ress=new com("adodb.recordset");
	   $ress->open($sql,$conn,3,3);
	   		   $res->pagesize=10;
	   if((trim(intval($_GET[page]))=="")||(intval($_GET[page])>$ress->pagecount)||(intval($_GET[page])<=0))
	    {
		  $page=1;
		}
	   else
		{
		  $page=intval($_GET[page]); 
		}
	    
	   if($ress->eof || $ress->bof)
	    {
	?>
	<tr>
      <td height="20" colspan="7" align="center" bgcolor="#F8F8F8"><div align="center" class="STYLE1">没有信息！</div></td>
  </tr>
	
	<?php
		}
	   else
		{		
		
		 $ress->absolutepage=$page;
		 $mypagesize=$ress->pagesize;
		 while(!$ress->eof && $mypagesize>0)
		  {
	  ?>
  <tr>
    <td height="21" colspan="2" align="center" bgcolor="#F8F8F8"><span class="STYLE1">
      <?php $fields=$ress->fields(note_content);echo $fields->value;?>
    </span></td>
    <td colspan="2" align="center" bgcolor="#F8F8F8"><span class="STYLE1">
      <?php $fields=$ress->fields(note_category);echo $fields->value;?>
    </span></td>
    <td colspan="3" align="center" bgcolor="#F8F8F8"><a href="delete_colleague_customer.php?lmbs=<?php echo $_GET[lmbs];?>&note=<?php $fields=$ress->fields(note_id);echo $fields->value;?>" class="STYLE1">删除</a></td>
  </tr>
  
<?php
	 
         $mypagesize--;
	     $ress->movenext;
	   }}
	  ?><tr>
    <td height="21" colspan="7" bgcolor="#F8F8F8">
<table width="95%" height="20" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="345" height="25" class="STYLE1">
	<div align="left">共有<?php echo $ress->recordcount;?>条短语&nbsp;每页显示<?php echo $ress->pagesize;?>条&nbsp;第<?php echo $page;?>页/共<?php echo $ress->pagecount;?>页	</div></td>
    <td width="385" class="STYLE1">
	<div align="right">	
	<?php
   if($page>=2)
	{
?>
   
<?php
    }
   if($ress->pagecount<=4)
     {
		for($i=1;$i<=$ress->pagecount;$i++)
		{
?>
        <a href="file_gl.php?page=<?php echo $i;?>"><?php echo $i;?></a>
<?php
		 }
	  }
	else
	  {
		 for($i=1;$i<=4;$i++)
		  {	 
?>
          <a href="file_gl.php?page=<?php echo $i;?>"><?php echo $i;?></a>
<?php 
          }
?>
         
  <?php 
          }
  ?>
	</div>	</td>
  </tr>
    </table>   </td>
  </tr>
</table>
</body>
</html>
