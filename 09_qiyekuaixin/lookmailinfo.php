<?php session_start();
$hostname=$_SESSION[host];
$username=$_SESSION[user];
$userpwd=$_SESSION[pwd];
if(!$mbox=@imap_open("$hostname","$username","$userpwd")){
   echo "<script>alert('登录超时，请重新登录!');history.back();</script>";
   exit;
}
$id=$_GET[id];
$obj=@imap_header($mbox,$id);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>查看邮件内容</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
.style2 {color: #000000}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(images/mrbg.gif);
}
-->
</style>
</head>
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
        <td align="center" valign="top">
<table width="454" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="63" height="26" align="center">时&nbsp;&nbsp;间：</td>
                                        <td align="left" bgcolor="#FFFFFF">&nbsp;&nbsp;
                                            <?php $array=@getdate(strtotime($obj->date));
			   echo $array[year]."-".$array[mon]."-".$array[mday]."&nbsp;".$array[hours].":".$array[minutes].":".$array[seconds];?></td>
                                      </tr>
                                      <tr>
                                        <td height="26" align="center">发件人：</td>
                                        <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;<?php echo $obj->fromaddress;?></td>
                                      </tr>
                                      <tr>
                                        <td height="26" align="center">收件人：</td>
                                        <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;<?php echo $obj->toaddress;?></td>
                                      </tr>
                                      <tr>
                                        <td height="26" align="center">主&nbsp;&nbsp;题：</td>
                                        <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;&nbsp;
                                            <?php 
			  if(strtolower(@substr($obj->Subject,0,10))==strtolower("=?gb2312?B"))
			     echo base64_decode(substr($obj->Subject,11,(strlen($obj->Subject)-13)));
			   else
			     echo $obj->Subject;
            ?>
                                        </td>
                                      </tr>
                                      <?php
		    $body=@imap_fetchbody($mbox,$id,2);
			if($body!=""){  
		  ?>
                                      <tr>
                                        <td height="26" align="center">附&nbsp;&nbsp;件：</td>
                                        <td height="24" align="left" bgcolor="#FFFFFF">
                                          <table height="26" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                              <td width="225" height="26">&nbsp;&nbsp;
                                                  <?php
		        $structure= @imap_fetchstructure($mbox,$id); 
		        $array=$structure->parts;
		        if(($array[1]->dparameters[0]->value)!=""){
                   $filename=$array[1]->dparameters[0]->value;
                }else{
                    $filename=$array[1]->description;
                 }
				if(strtolower(substr($filename,0,10))==strtolower("=?gb2312?B"))
			     echo base64_decode(substr($filename,11,(strlen($filename)-13)));
			   else
			     echo $filename;
		        ?>
                                              </td>
                                              <td width="82">&nbsp;</td>
                                              <td width="61"><a href="down.php?id=<?php echo $id;?>" class="a1">(下载附件)</a></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                      <?php
		   }
		  ?>
                                  </table>
								  <table width="454" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td><div  align="center" name="content1" id="content1" style=" padding:5pt;BORDER-RIGHT:1px solid; BORDER-TOP:1px solid #999999;OVERFLOW-X: auto;OVERFLOW-Y: auto; BORDER-LEFT:1px solid; WIDTH: 350; BORDER-BOTTOM:1px solid; HEIGHT: 120px"> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php
  include_once("function.php");
  if(unhtml(imap_base64(@imap_fetchbody($mbox,$id,1)))==""){
    echo unhtml(@imap_fetchbody($mbox,$id,1));
  }else{
    echo unhtml(imap_base64(imap_fetchbody($mbox,$id,1))); 
  }
  
?>
                                </div></td>
                              </tr>
</table>
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
