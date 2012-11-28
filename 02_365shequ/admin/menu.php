<script language="javascript">
 function change(x,y)
  {
    if(x.style.display=="none")
	 {
	   x.style.display="";
	 }
	 else if(x.style.display=="")
	  {
	   x.style.display="none";
	   y.background="images/bg_16_11.jpg";
	  }
  
  }
</script>
<table width="195" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="33" background="images/bg_16_5.jpg">&nbsp;</td>
  </tr>
</table>
<table width="175" height="28" border="0" align="center" cellpadding="0" cellspacing="4" onclick="change(tz1,img_tz1)" style="cursor:hand">
  <tr>
    <td background="images/bg_16_11.jpg" id="img_tz1" class="a4"><div align="left"><img src="images/bg_16_21.jpg">&nbsp;编程词典管理</div></td>
  </tr>
</table>
<table name="tz1" id="tz1" width="170" height="40" border="0" align="center" cellpadding="0" cellspacing="0"
  <?php
	if(!($_GET[htgl]=="添加编程词典版本" ||$_GET[htgl]=="编辑编程词典版本" ||$_GET[htgl]=="添加编程词典" ||$_GET[htgl]=="编辑编程词典" )){
?>
			  style="display:none"
			  <?php
			  }
			  ?>
>
 
   <tr>
    <td width="40" height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td width="114" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=添加编程词典版本">添加编程词典版本</a></div></td>
  </tr>
  <tr>
    <td height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td height="20" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=编辑编程词典版本">编辑编程词典版本</a></div></td>
  </tr>
 
 
 
 
  <tr>
    <td width="40" height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td width="114" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=添加编程词典">添加编程词典</a></div></td>
  </tr>
  <tr>
    <td height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td height="24" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=编辑编程词典">编辑编程词典</a></div></td>
  </tr>



</table>



<table width="175" height="28" border="0" align="center" cellpadding="0" cellspacing="4" onclick="change(s11,img_s11)" style="cursor:hand">
  <tr> 
    <td background="images/bg_16_11.jpg" id="img_s11" class="a4"><div align="left"><img src="images/bg_16_21.jpg">&nbsp;技术支持管理</div></td>
  </tr>
</table>
<table name="s11" id="s11" width="170" height="40" border="0" align="center" cellpadding="0" cellspacing="0" 
  <?php
	if(!($_GET[htgl]=="添加常见问题" ||$_GET[htgl]=="编辑常见问题" ||$_GET[htgl]=="查看客户反馈" )){
?>
			  style="display:none"
			  <?php
			  }
			  ?>


>
  <tr> 
    <td width="40" height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td width="114" height="24" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=添加常见问题">添加常见问题</a></div></td>
  </tr>
  <tr> 
    <td width="40" height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td width="114" height="24" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=编辑常见问题">编辑常见问题</a></div></td>
  </tr>
  
   <tr> 
    <td width="40" height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td width="114" height="24" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=查看客户反馈">查看客户反馈</a></div></td>
  </tr>
</table>
 
<table width="175" height="28" border="0" align="center" cellpadding="0" cellspacing="4" onclick="change(yj,img_yj)" style="cursor:hand">
  <tr> 
    <td background="images/bg_16_11.jpg" id="img_yj" class="a4"><div align="left"><img src="images/bg_16_21.jpg">&nbsp;软件试用管理</div></td>
  </tr>
</table>
<table name="yj" id="yj" width="170" height="40" border="0" align="center" cellpadding="0" cellspacing="0" 
 <?php
	if(!($_GET[htgl]=="添加软件试用" ||$_GET[htgl]=="编辑软件试用")){
?>
			  style="display:none"
			  <?php
			  }
			  ?>

>
 
  <tr> 
    <td width="40" height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td width="114" height="24" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=添加软件试用">添加软件试用</a></div></td>
  </tr>
  <tr> 
    <td width="40" height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td width="114" height="24" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=编辑软件试用">编辑软件试用</a></div></td>
  </tr>
</table>






<table width="175" height="28" border="0" align="center" cellpadding="0" cellspacing="4" onclick="change(gg,img_gg)" style="cursor:hand">
  <tr> 
    <td background="images/bg_16_11.jpg" id="img_gg" class="a4"><div align="left" class="a4"><img src="images/bg_16_21.jpg">&nbsp;软件升级管理</div></td>
  </tr>
</table>
<table name="gg" id="gg" width="170" height="40" border="0" align="center" cellpadding="0" cellspacing="0" 
 <?php
	if(!($_GET[htgl]=="添加升级包" ||$_GET[htgl]=="编辑升级包" ||$_GET[htgl]=="添加序列号" ||$_GET[htgl]=="编辑序列号" )){
?>
			  style="display:none"
			  <?php
			  }
			  ?>


>
  <tr> 
    <td width="40" height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td width="132" height="24" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=添加升级包">添加升级包</a></div></td>
  </tr>
  <tr> 
    <td width="40" height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td height="24" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=编辑升级包">编辑升级包</a></div></td>
  </tr>
  
   <tr> 
    <td width="40" height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td height="24" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=添加序列号">添加序列号</a></div></td>
  </tr>
  <tr> 
    <td width="40" height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td height="24" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=编辑序列号">编辑序列号</a></div></td>
  </tr>
  
  
  
</table>



<table width="175" height="28" border="0" align="center" cellpadding="0" cellspacing="4" onclick="change(gggg,img_gggg)" style="cursor:hand">
  <tr> 
    <td background="images/bg_16_11.jpg" id="img_gggg" class="a4"><div align="left"><img src="images/bg_16_21.jpg">&nbsp;在线订购管理</div></td>
  </tr>
</table>
<table name="gggg" id="gggg" width="170" height="24" border="0" align="center" cellpadding="0" cellspacing="0"

 <?php
	if(!($_GET[htgl]=="订单管理")){
?>
			  style="display:none"
			  <?php
			  }
			  ?>
>
   <tr> 
    <td width="40" height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td width="114" height="24" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=订单管理">订单管理</a></div></td>
  </tr>
</table>





<table width="175" height="28" border="0" align="center" cellpadding="0" cellspacing="4" onclick="change(s111,img_gggg)" style="cursor:hand">
  <tr> 
    <td background="images/bg_16_11.jpg" id="img_gggg" class="a4"><div align="left"><img src="images/bg_16_21.jpg">&nbsp;站内公告管理</div></td>
  </tr>
</table>
<table name="s111" id="s111" width="170" height="40" border="0" align="center" cellpadding="0" cellspacing="0" 

 <?php
	if(!($_GET[htgl]=="添加公告" ||$_GET[htgl]=="编辑公告" )){
?>
			  style="display:none"
			  <?php
			  }
			  ?>

>
  <tr> 
    <td width="40" height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td width="114" height="24" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=添加公告">添加公告</a></div></td>
  </tr>
  <tr> 
    <td width="40" height="24" background="images/bg_16_16.jpg">&nbsp;</td>
    <td width="114" height="24" background="images/bg_16_16.jpg"><div align="left"><a href="default.php?htgl=编辑公告">编辑公告</a></div></td>
  </tr>
</table>

<table width="195" height="28" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><img src="images/bg_16_27.jpg" border="0" usemap="#Map"></td>
  </tr>
</table>
<map name="Map"><area shape="rect" coords="9,8,174,47" href="http://www.bcty365.com" target="_blank" />
</map>