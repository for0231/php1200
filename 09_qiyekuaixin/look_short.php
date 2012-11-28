<?php include_once("conn/conn.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; chareset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<table width="97%" height="92" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#EBEBEB">
  <tr>
    <td height="20" align="center" valign="middle" bgcolor="#E9F7FD"><span class="STYLE1">IP</span></td>
    <td align="center" valign="middle" bgcolor="#E9F7FD"><span class="STYLE1">发信号码</span></td>
    <td align="center" valign="middle" bgcolor="#E9F7FD"><span class="STYLE1">收信号码</span></td>
    <td align="center" valign="middle" bgcolor="#E9F7FD"><span class="STYLE1">短信内容</span></td>
    <td align="center" valign="middle" bgcolor="#E9F7FD"><span class="STYLE1">发送时间</span></td>
    <td align="center" valign="middle" bgcolor="#E9F7FD"><span class="STYLE1">操作</span></td>
  </tr>
   <?php

	   $sqls="select * from tb_short";
	   $res=new com("adodb.recordset");
	   $res->open($sqls,$conn,1,1);
		   $res->pagesize=5;
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
        <td height="20" colspan="6" bgcolor="#F8F8F8"><div align="center" class="STYLE1">暂无短信发送记录！</div></td>
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
    <td height="20" align="center" valign="middle" bgcolor="#F8F8F8"><span class="STYLE1">
      <?php $fields=$res->fields(short_ip);echo $fields->value;?>
    </span></td>
    <td align="center" valign="middle" bgcolor="#F8F8F8"><span class="STYLE1">
      <?php $fields=$res->fields(short_tel);echo $fields->value;?>
    </span></td>
    <td align="center" valign="middle" bgcolor="#F8F8F8"><span class="STYLE1">
      <?php $fields=$res->fields(short_tels);echo $fields->value;?>
    </span></td>
    <td align="center" valign="middle" bgcolor="#F8F8F8"><span class="STYLE1">
      <?php $fields=$res->fields(short_content);echo $fields->value;?>
    </span></td>
    <td align="center" valign="middle" bgcolor="#F8F8F8"><span class="STYLE1">
      <?php $fields=$res->fields(short_date);echo $fields->value;?>
    </span></td>
    <td align="center" valign="middle" bgcolor="#F8F8F8"><a href="delete_short.php?lmbes=<?php $fields=$res->fields(short_id);echo $fields->value;?>" class="STYLE1">删除</a></td>
  </tr>
  
<?php   $mypagesize--;
	     $res->movenext;
	   }}
	  ?>
  <tr>
    <td height="20" colspan="6" align="center" valign="middle" bgcolor="#F8F8F8">
<table width="95%" height="20" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="345" height="25" class="STYLE1">
	<div align="left">发送信息<?php echo $res->recordcount;?>条&nbsp;每页显示<?php echo $res->pagesize;?>条&nbsp;第<?php echo $page;?>页/共<?php echo $res->pagecount;?>页	</div></td>
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
        <a href="look_short.php?page=<?php echo $i;?>"><?php echo $i;?></a>
<?php
		 }
	  }
	else
	  {
		 for($i=1;$i<=4;$i++)
		  {	 
?>
          <a href="look_short.php?page=<?php echo $i;?>"><?php echo $i;?></a>
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
