<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>发送邮件</title>
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
.STYLE2 {color: #FF0000}
-->
</style>
</head>
<script language="javascript">
 function chkinput(form){
    if(form.fromuser.value==""){
	  alert("请输入发件人地址!");
	  form.fromuser.select();
	  return(false);
	}
	var i=form.fromuser.value.indexOf("@");
	var j=form.fromuser.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0))
	 {
       alert("请输入正确的发件人E-mail地址!");
	   form.fromuser.select();
	   return(false);
	 }
	 
	 if(form.touser.value==""){
	  alert("请输入收件人地址!");
	  form.touser.select();
	  return(false);
	}
	var i=form.touser.value.indexOf("@");
	var j=form.touser.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0))
	 {
       alert("请输入正确的收件人E-mail地址!");
	   form.touser.select();
	   return(false);
	 }
	if(form.subject.value==""){
	  alert("请输入邮件主题!");
	   form.subject.select();
	   return(false);
	} 
	if(form.mailbody.value==""){
	  alert("请输入邮件内容!");
	   form.mailbody.select();
	   return(false);
	} 
	if(form.upfile.value!=""){
   var fso,f;
   fso=new ActiveXObject("Scripting.FileSystemObject");
   f=fso.GetFile(form.upfile.value);
    if(f.size>2000000){
	  alert("对不起,您上传的文件超过了规定的大小!");
	  return(false);
	}
	}
  return(true);
 }
</script>
<body>
<table width="604"  border="00" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="135" height="421" valign="top">
      <?php
	include("mail_left.php");
	?>    </td>
    <td width="454" align="center" valign="top"><table width="454" height="421" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="35"><img src="images/mail_04.gif" width="454" height="35"></td>
      </tr>
      <tr>
        <td width="454" height="29" background="images/mail_07.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="STYLE22"><?php echo $lmbs;?></span></td>
      </tr>
      <tr>
        <td align="center" valign="top">			<form name="form2" method="post" action="mail_send.php" enctype="multipart/form-data" onSubmit="return chkinput(this)">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="13%"  height="25" align="center">发件人：</td>
                        <td width="87%"><input name="fromuser" type="text" class="inputcss" id="fromuser" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" value="<?php echo $_SESSION[user];?>" size="50" /></td>
                      </tr>
                      <tr>
                        <td height="25" align="center">收件人： </td>
                        <td height="25">
   <table width="387" border="0" cellspacing="0" cellpadding="0">
     <tr>
       <td width="260" rowspan="2"><textarea name="touser" cols="35" rows="3" class="inputcss" id="touser" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
<?php
  $arrayss=explode("@",$_SESSION[producelistss]);
  $arrayquatityss=explode("@",$_SESSION[quatityss]);
  while(list($names,$values)=each($_POST)){
	    for($i=0;$i<count($arrayss)-1;$i++){
		   if(($arrayss[$i])==$names){
			  $arrayquatityss[$i]=$values;  
		    }
		}
  }				  
  $_SESSION[quatityss]=implode("@",$arrayquatityss);
  for($i=0;$i<count($arrayss)-1;$i++){ 				 
	 $idss=$arrayss[$i];
     if($idss!=""){
	   $sql='select * from tb_customer where customer_id='.$idss.'';
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,3,1);
       $fields=$rs->fields(customer_mail);
       echo $fields->value;
	 }
  }
 $array=explode("@",$_SESSION[producelist]);
  $arrayquatity=explode("@",$_SESSION[quatity]);
  while(list($name,$value)=each($_POST)){
	    for($i=0;$i<count($array)-1;$i++){
		   if(($array[$i])==$name){
			  $arrayquatity[$i]=$value;  
		    }
		}
  }				  
  $_SESSION[quatity]=implode("@",$arrayquatity);
  for($i=0;$i<count($array)-1;$i++){ 				 
	 $id=$array[$i];
     if($id!=""){
	   $sql='select * from tb_colleague where colleague_id='.$id.'';
	   $res=new com("adodb.recordset");
	   $res->open($sql,$conn,3,1);
       $fields=$res->fields(colleague_mail);
       echo $fields->value;
	 }
  }
?>
</textarea></td>
       <td width="86" height="33" class="STYLE2"><a href="delete_mail.php">删除邮箱</a></td>
     </tr>
     <tr>
       <td><span class="STYLE2">注意：群发使用*分隔邮箱地址</span></td>
     </tr>
   </table></td>
                      </tr>
                      <tr>
                        <td height="25" align="center">主&nbsp;&nbsp;题：</td>
                        <td height="25"><input name="subject" type="text" class="inputcss" id="subject" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="50" /></td>
                      </tr>
                      <tr>
                        <td height="25" align="center">附&nbsp;&nbsp;件：</td>
                        <td height="25"><input name="upfile" type="file" class="inputcss" id="upfile" size="50" /></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center"><br />
                        <textarea name="mailbody" rows="15" class="inputcss" id="mailbody"  style="BORDER-RIGHT: #aaaaaa 1px solid; BORDER-TOP: #aaaaaa 1px solid; OVERFLOW-Y: scroll; BORDER-LEFT: #aaaaaa 1px solid; WIDTH: 320px; SCROLLBAR-SHADOW-COLOR: #556688; SCROLLBAR-ARROW-COLOR: #556688; BORDER-BOTTOM: #aaaaaa 1px solid; SCROLLBAR-BASE-COLOR: #1C92E2; HEIGHT: 120px"></textarea></td>
                      </tr>
                    </table>
                    <input name="submit" type="submit" class="buttoncss" id="submit" value="发送" />
&nbsp;&nbsp;
                    <input name="reset" type="reset" class="buttoncss" id="reset" value="重写" />
               
                             </form>

		
		</td>
      </tr>
      <tr>
        <td height="27"><img src="images/mail_10.gif" width="454" height="27"></td>
      </tr>
    </table></td>
    <td width="15" valign="top"><img src="images/mail_05.gif" width="15" height="421"></td>
  </tr>
</table>
</body>
</html>
