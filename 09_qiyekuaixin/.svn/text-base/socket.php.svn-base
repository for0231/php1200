<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>通过socket编程发送短信</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
.STYLE2 {
	font-size: 14px;
	font-weight: bold;
	color: #FFFFFF;
}
-->
</style>
</head>
<script language="javascript">
  function chkinput(form){
    if(form.ip.value==""){
	  alert("请输入短信网关的地址!");
	  form.ip.select();
	  return(false);
	}
	
	  if(form.port.value==""){
	  alert("请输端口号!");
	  form.port.select();
	  return(false);
	}
	
	 if(isNaN(form.port.value)==true){
	  alert("端口只能由数字组成!");
	  form.port.select();
	  return(false);
	 }
	
	
	
	 if(form.username.value==""){
	  alert("请输入用户名!");
	  form.username.select();
	  return(false);
	}
	  if(form.userpwd.value==""){
	  alert("请输入用于密码!");
	  form.userpwd.select();
	  return(false);
	}
	  if(form.telnumber.value==""){
	  alert("请输入您的手机号!");
	  form.telnumber.select();
	  return(false);
	}
	
	 if(isNaN(form.telnumber.value)==true){
	  alert("手机号只能由数字组成!");
	  form.telnumber.select();
	  return(false);
	 }
	 
	 if(form.receivenumber.value==""){
	  alert("请输入接收方手机号!");
	  form.receivenumber.select();
	  return(false);
	}
	
	 if(isNaN(form.receivenumber.value)==true){
	  alert("手机号只能由数字组成!");
	  form.receivenumber.select();
	  return(false);
	 }
	 
	  if(form.content.value==""){
	  alert("请输入短信内容!");
	  form.content.select();
	  return(false);
	}
    return(true);
  }
</script>
<body>
<table width="367" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/back.gif"><table width="367" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#0066FF">
      <form name="form1" method="post" action="index.php" onSubmit="return chkinput(this)">
	  <tr>
        <td height="30" colspan="4" align="center"><span class="STYLE2">通过socket编程实现短信发送</span></td>
      </tr>
      <tr>
        <td width="82" height="25"><div align="center" class="STYLE1">网关地址</div></td>
        <td width="169">&nbsp;<input type="text" name="ip" class="inputcss" size="25"></td>
        <td width="38"><span class="STYLE1">端口：</span></td>
        <td width="78"><input type="text" name="port" size="5" class="inputcss"></td>
      </tr>
      <tr>
        <td height="20"><div align="center" class="STYLE1">用户名：</div></td>
        <td height="20">&nbsp;<input type="text" name="username" class="inputcss" size="25"></td>
        <td height="20" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td height="20"><div align="center" class="STYLE1">密码：</div></td>
        <td height="20">&nbsp;<input type="password" name="userpwd" class="inputcss" size="25"></td>
        <td height="20" colspan="2"><input type="submit" name="submit" class="buttoncss" value="发送" /></td>
      </tr>
      <tr>
        <td height="20"><div align="center" class="STYLE1">发送手机号：</div></td>
        <td height="20">&nbsp;<input type="text" name="telnumber" class="inputcss" size="25"></td>
        <td height="20" colspan="2"><input type="reset" name="reset" class="buttoncss" value="重写" /></td>
      </tr>
	  <tr>
        <td height="20"><div align="center" class="STYLE1">接收手机号：</div></td>
        <td height="20">&nbsp;<input type="text" name="receivenumber" class="inputcss" size="25"></td>
        <td height="20" colspan="2">&nbsp;</td>
	  </tr>
      <tr>
        <td height="72"><div align="center" class="STYLE1">短信内容：</div></td>
        <td colspan="3">&nbsp;<textarea name="content" cols="40" rows="5" class="inputcss"></textarea></td>
      </tr>
      <tr>
        <td height="25" colspan="4"><div align="center"></div></td>
        </tr></form>
    </table></td>
  </tr>
</table>
<?php
 if($_POST[submit]!="")
 {
    $smsUID=$_POST[username];  //短信网关分配的用户名和密码  
    $smsPWD=$_POST[userpwd];  
    $smsSocket=$_POST[id];   //短信网关的IP  
    $smsPost=$_POST[port];     //短信网关的端口  
    $fp=@fsockopen($smsSocket,$smsPost,&$errno,  &$errstr,  $smsTimeout);  
     if(!$fp)  
      {  
         echo  "<script>alert('与短信网关连接失败!');</script>";  
      }  
     else  
      {  
         //登录到短信中心服务器  
        fputs($fp,"login\n");  
        fputs($fp,$smsUID."\n");  
        fputs($fp,$smsPWD."\n");  
        fputs($fp,"\n");  
        $MessageContent=trim($_POST[content]);  
        $MobileNo=trim($_POST[telnumber]);
		$ReceiveNo=trim($_POST[receivenumber]);  
        $ServiceType="MFFW";   //计费代码TP0.5按条收费  
        $Priority="0";        //发送优先级  
        $AgentFlag="0";  //代收费标志  
        $MoFlag="2";     //点播号  
        $ExpireTime="";   //短信失效时间  
        $ScheduleTime="";   //定时发送时间  
        $ReportFlag="1";      //状态报告  
        $status="255";       //都要返回状态报告  
        $MessageType="TEXT";       //短信类型,文本信息  
        $FreeTerminalNo=$MobileNo;    //记费手机号码,本实例采用收短信方收费 
        $TargetTerminalNo=$ReceiveNo;     //接收方手机号码  
        $SourceTerminalNo=$MobileNo;       //发送方手机号码  
        $MessageId="123";  
        print(fgets($fp,4096));  
        print(fgets($fp,4096));  
        fputs($fp,"submit"."\n");  
        fputs($fp,$MessageId."\n");  
        fputs($fp,$FreeTerminalNo."\n");  
        fputs($fp,$SourceTerminalNo."\n");  
        fputs($fp,$TargetTerminalNo."\n");  
        fputs($fp,$ServiceType."\n");  
        fputs($fp,$MoFlag."\n");  
        fputs($fp,$ReportFlag."\n");  
        fputs($fp,$ExpireTime."\n");  
        fputs($fp,$ScheduleTime."\n");  
        fputs($fp,$MessageType."\n");  
        $MessageContent=str_replace("\r","",str_replace("\n","",$MessageContent)); //不能有回车  
        fputs($fp,$MessageContent."\n");  
        fputs($fp,"\n");  
        print("<div align=center>发送成功!".$MobileNo."  :  ".$MessageContent."</div>");  
        fclose($fp);  
    }  
 }
?>
</body>
</html>
