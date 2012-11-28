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
    <td height="24" align="center" bgcolor="#E9F7FD"><span class="STYLE1">姓名</span></td>
    <td align="center" bgcolor="#E9F7FD"><span class="STYLE1">电话</span></td>
    <td align="center" bgcolor="#E9F7FD"><span class="STYLE1">邮箱</span></td>
    <td align="center" bgcolor="#E9F7FD"><span class="STYLE1">生日</span></td>
    <td align="center" bgcolor="#E9F7FD"><span class="STYLE1">地址</span></td>
    <td align="center" bgcolor="#E9F7FD"><a href="#" class="STYLE1" onClick="MM_openBrWindow('insert_customer.php','','toolbar=yes,width=440,height=219')">添加客户</a></td>
  </tr>
    <?php
       include("conn/conn.php");
	   $sql="select * from tb_customer";
	   $res=new com("adodb.recordset");
	   $res->open($sql,$conn,3,3);
	 		   $res->pagesize=10;
	   if((trim(intval($_GET[page]))=="")||(intval($_GET[page])>$res->pagecount)||(intval($_GET[page])<=0))
	    {
		  $page=1;
		}
	   else
		{
		  $page=intval($_GET[page]); 
		}
	    
	   if($res->eof || $res->bof)
	    {
	?>
	<tr>
      <td height="20" colspan="6" bgcolor="#F8F8F8"><div align="center" class="STYLE1">没有信息！</div></td>
  </tr>
	
	<?php
		}
	   else
		{		
		
		 $res->absolutepage=$page;
		 $mypagesize=$res->pagesize;
		 while(!$res->eof && $mypagesize>0)
		  {
	  ?>
  <tr>
    <td align="center" bgcolor="#F8F8F8"><span class="STYLE1">
      <?php $fields=$res->fields(customer_name);echo $fields->value;?>
    </span></td>
    <td align="center" bgcolor="#F8F8F8"><span class="STYLE1">
      <?php $fields=$res->fields(customer_tel);echo $fields->value;?>
    </span></td>
    <td align="center" bgcolor="#F8F8F8"><span class="STYLE1">
      <?php $fields=$res->fields(customer_mail);echo $fields->value;?>
    </span></td>
    <td align="center" bgcolor="#F8F8F8"><span class="STYLE1">
      <?php $fields=$res->fields(customer_birthday);echo $fields->value;?>
    </span></td>
    <td align="center" bgcolor="#F8F8F8"><span class="STYLE1">
      <?php $fields=$res->fields(customer_address);echo $fields->value;?>
    </span></td>
    <td align="center" bgcolor="#F8F8F8"><a href="delete_colleague_customer.php?lmbs=<?php echo $_GET[lmbs];?>&customer=<?php $fields=$res->fields(customer_id);echo $fields->value;?>" class="STYLE1">删除</a></td>
<?php   
         $mypagesize--;
	     $res->movenext;
	   }}
	  ?>
  <tr>
    <td colspan="6" align="center" bgcolor="#F8F8F8"><table width="90%" height="18" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="345" height="25" class="STYLE1">
	<div align="left">合计<?php echo $res->recordcount;?>人&nbsp;每页显示<?php echo $res->pagesize;?>条信息&nbsp;第<?php echo $page;?>页/共<?php echo $res->pagecount;?>页	</div></td>
    <td width="385" class="STYLE1">
	<div align="right">	
	<?php
   if($page>=2)
	{
?>
   
<?php
    }
   if($res->pagecount<=4)
     {
		for($i=1;$i<=$res->pagecount;$i++)
		{
?>
        <a href="indexs.php?lmbs=&lmlb=客户信息管理&page=<?php echo $i;?>"><?php echo $i;?></a>
<?php
		 }
	  }
	else
	  {
		 for($i=1;$i<=4;$i++)
		  {	 
?>
          <a href="indexs.php?lmbs=&lmlb=客户信息管理&page=<?php echo $i;?>"><?php echo $i;?></a>
<?php 
          }
?>
         
  <?php 
          }
  ?>
	</div>	</td>
  </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
