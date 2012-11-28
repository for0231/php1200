<?php session_start();
$hostname=$_SESSION[host];
$username=$_SESSION[user];
$userpwd=$_SESSION[pwd];
if(!$mbox=@imap_open("$hostname","$username","$userpwd")){
   echo "<script>alert('登录超时，请重新登录!');history.back();</script>";
   exit;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>查找邮件</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
body {
	background-image: url(images/mrbg.gif);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>
<script language="javascript">
  function chkinput(form){
    if(form.content.value==""){
	  alert("请输入要查找的内容！");
	  form.content.select();
	  return(false);
	}
   var i=form.content.value.indexOf("@");
	var j=form.content.value.indexOf(".");
	if((form.method.value=="1")&&((i<0)||(i-j>0)||(j<0)))
	 {
       alert("请输入正确的收件人E-mail地址!");
	   form.content.select();
	   return(false);
	 }	
  
  }

</script>
<body>
<table width="604"  border="00" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="135" height="421" valign="top">
      <?php include("mail_left.php");?>   
 </td>
    <td width="452" align="center" valign="top"><table width="454" height="421" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="35"><img src="images/mail_04.gif" width="454" height="35"></td>
      </tr>
      <tr>
        <td width="454" height="29" background="images/mail_07.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="STYLE22"><?php echo $lmbs;?></span></td>
      </tr>
      <tr>
        <td valign="top">  <form name="form1" method="post" action="sendmail_select_ok.php">
          <table width="452" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr align="center" bgcolor="#BBE323">
              <td  height="25" colspan="2" bgcolor="#FFFFFF">邮件主题</td>
              <td width="114" bgcolor="#FFFFFF">发件人</td>
              <td width="115" bgcolor="#FFFFFF">发件时间</td>
              <td width="109" bgcolor="#FFFFFF">收件人</td>
            </tr>
            <?php
       include("conn/conn.php");
	   $sql="select * from tb_mail";
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,3,1);
	 		   $rs->pagesize=10;
	   if((trim(intval($_GET[page]))=="")||(intval($_GET[page])>$rs->pagecount)||(intval($_GET[page])<=0))
	    {
		  $page=1;
		}
	   else
		{
		  $page=intval($_GET[page]); 
		}
	    
	   if($rs->eof || $rs->bof)
	    {
	?>
            <tr>
              <td height="20" colspan="5" bgcolor="#FFFFFF"><div align="center">没有信息！</div></td>
            </tr>
            <?php
		}
	   else
		{		
		
		 $res->absolutepage=$page;
		 $mypagesize=$rs->pagesize;
		 while(!$rs->eof && $mypagesize>0)
		  {
	  ?>
            <tr>
              <td width="20"><input type="checkbox" name="check[]" value="<?php $fields=$rs->fields(mail_id);echo $fields->value;?>" /></td>
              <td width="132" height="25"><div align="center">
                <?php $fields=$rs->fields(mail_title);echo $fields->value;?>
              </div></td>
              <td><div align="center">
                <?php $fields=$rs->fields(mail_formuser);echo $fields->value;?>
              </div></td>
              <td><div align="center">
                <?php $fields=$rs->fields(mail_date);echo $fields->value;?>
              </div></td>
              <td><div align="center">
                <?php $fields=$rs->fields(mail_touser);echo $fields->value;?>
              </div></td>
            </tr>
            <?php
          $mypagesize--;
	     $rs->movenext;
	   }}
	  ?>
            <tr>
              <td height="25" colspan="5"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="25"><div align="left">
                        <input name="delete" type="submit" id="delete" value="删除">
                      邮件<?php echo $rs->recordcount;?>条&nbsp;每页显示<?php echo $rs->pagesize;?>条&nbsp;第<?php echo $page;?>页/共<?php echo $rs->pagecount;?>页 </div></td>
                    <td><div align="right">
                        <?php
   if($page>=2)
	{
?>
                        <a href="indexs.php?lmbs=查看邮件发送记录&page=1" title="首页"></a> <a href="indexs.php?lmbs=查看邮件发送记录&page=<?php echo $page-1;?>" title="前一页"></a>
                        <?php
    }
   if($rs->pagecount<=4)
     {
		for($i=1;$i<=$rs->pagecount;$i++)
		{
?>
                        <a href="indexs.php?lmbs=查看邮件发送记录&page=<?php echo $i;?>"><?php echo $i;?></a>
                        <?php
		 }
	  }
	else
	  {
		 for($i=1;$i<=4;$i++)
		  {	 
?>
                        <a href="indexs.php?lmbs=查看邮件发送记录&page=<?php echo $i;?>"><?php echo $i;?></a>
                        <?php 
          }
?>
                        <a href="indexs.php?lmbs=查看邮件发送记录&page=<?php 
		 if($rs->pagecount>=$page+1)
		   echo $page+1;
		  else
		   echo 1; 
		 
		 ?>" title="后一页"></a> <a href="indexs.php?lmbs=查看邮件发送记录&page=<?php echo $rs->pagecount;?>" title="尾页"></a>
                        <?php 
          }
  ?>
                    </div></td>
                  </tr>
              </table></td>
            </tr>
          </table>
        </form>     </td>
      </tr>
      <tr>
        <td height="27"><img src="images/mail_09.gif" width="452" height="27"></td>
      </tr>
    </table></td>
    <td width="15" valign="top"><img src="images/mail_05.gif" width="15" height="421"></td>
  </tr>
</table>
<?php
imap_close($mbox);
?>
</body>
</html>
