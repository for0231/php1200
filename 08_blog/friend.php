<?php session_start();  include "check_login.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<title>朋友圈管理</title>
</head>
<script src=" JS/menu.JS"></script>
<script  language="javascript">
//判断用户的输入是否合法
function check(){
	if (myform.txt_name.value==""){
		alert("请输入姓名！");myform.txt_name.focus();return false;
	}
	if(myform.txt_bir.value==""){
		alert("请输入您的生日!");myform.txt_bir.focus();return false;
	}		
	if(CheckDate(myform.txt_bir.value)){
		alert("您输入的日期非法或不正确，请输入标准日期（如：1980/05/29或1980-05-29");myform.txt_bir.focus();return false;
	}
	if(myform.txt_province.value==""){
		alert("请选择您所在的省会名称!");myform.txt_province.focus();return false;
	}
	if(myform.txt_city==""){
		alert("请选择您所在的城市名称!");myform.txt_city.focus();return false;
	}
	if (myform.txt_address.value==""){
		alert("请输入家庭地址！");myform.txt_address.focus();return false;
	}
	if (myform.txt_postcode.value==""){
		alert("请输入邮政编码！");myform.txt_postcode.focus();return false;
	}
	if (myform.txt_email.value==""){
		alert("请输入您的Email地址！");myform.txt_email.focus();return false;
	}
	var i=myform.txt_email.value.indexOf("@");
	var j=myform.txt_email.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0)){
		alert("您输入的e-mail地址不正确，请重新输入！");myform.txt_email.value="";myform.txt_email.focus();return false;
	}
	if (myform.txt_tel.value==""){
		alert("请输入您的家庭电话！");myform.txt_tel.focus();return false;
	}
	if (myform.txt_handset.value==""){
		alert("请输入您的手机号码！");myform.txt_handset.focus();return false;
	}
	if(myform.txt_QQ==""){
		alert("请输入您的QQ号!");myform.txt_QQ.focus();return false;
	}
	myform.submit();		
function CheckDate(INDate)
{ if (INDate=="")
    {return true;}
	subYY=INDate.substr(0,4)
	if(isNaN(subYY) || subYY<=0){
		return true;
	}
	//转换月份
	if(INDate.indexOf('-',0)!=-1){	separate="-"}
	else{
		if(INDate.indexOf('/',0)!=-1){separate="/"}
		else {return true;}
		}
		area=INDate.indexOf(separate,0)
		subMM=INDate.substr(area+1,INDate.indexOf(separate,area+1)-(area+1))
		if(isNaN(subMM) || subMM<=0){
		return true;
	}
		if(subMM.length<2){subMM="0"+subMM}
	//转换日
	area=INDate.lastIndexOf(separate)
	subDD=INDate.substr(area+1,INDate.length-area-1)
	if(isNaN(subDD) || subDD<=0){
		return true;
	}
	if(eval(subDD)<10){subDD="0"+eval(subDD)}
	NewDate=subYY+"-"+subMM+"-"+subDD
	if(NewDate.length!=10){return true;}
    if(NewDate.substr(4,1)!="-"){return true;}
    if(NewDate.substr(7,1)!="-"){return true;}
	var MM=NewDate.substr(5,2);
	var DD=NewDate.substr(8,2);
	if((subYY%4==0 && subYY%100!=0)||subYY%400==0){ //判断是否为闰年
		if(parseInt(MM)==2){
			if(DD>29){return true;}
		}
	}else{
		if(parseInt(MM)==2){
			if(DD>28){return true;}
		}	
	}
	var mm=new Array(1,3,5,7,8,10,12); //判断每月中的最大天数
	for(i=0;i< mm.length;i++){
		if (parseInt(MM) == mm[i]){
			if(parseInt(DD)>31){
				return true;
			}else{
				return false;
			}
		}
	}
   if(parseInt(DD)>30){return true;}
   if(parseInt(MM)>12){return true;}
   return false;
   }
}
</script>
<body>
<div class=menuskin id=popmenu 
      onmouseover="clearhidemenu();highlightmenu(event,'on')" 
      onmouseout="highlightmenu(event,'off');dynamichide(event)"
	  style="Z-index:100;position:absolute;">
</div>
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px" align="center"> 
  <TBODY> 
    <TR> <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3> <TABLE 
      style="BACKGROUND-IMAGE: url( images/f_head.jpg); WIDTH: 760px; HEIGHT: 154px" 
      cellSpacing=0 cellPadding=0> <TBODY> 
            <TR> 
              <TD height="110" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD> 
            </TR> 
            <TR> 
              <TD height="29" align="center" valign="middle">
			  <TABLE style="WIDTH: 580px" VERTICAL-ALIGN: text-top; cellSpacing=0 cellPadding=0 align="center">
                  <TBODY>
                    <TR align="center" valign="middle">
					 <TD style="WIDTH: 100px; COLOR: red;">欢迎您:&nbsp;<?php echo $_SESSION[username]; ?>&nbsp;&nbsp;</TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"> </SPAN><a href="index.php">博客首页</a></TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,productmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >文章管理</a></TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,Honourmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand">图片管理</a></TD>
                      <TD style="WIDTH: 90px; COLOR: red;"><a  onmouseover=showmenu(event,myfriend) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >朋友圈管理</a>  </TD>
                       <?php
					  if($_SESSION[fig]==1){
					   ?>
					   <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,myuser) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >管理员管理</a></TD> 
  					 <?php  
					  }
					  ?>
					  <TD style="WIDTH: 80px; COLOR: red;"><a href="safe.php">退出登录</a></TD>
                    </TR>
                  </TBODY>
              </TABLE>			  </TD> 
            </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
    <TR> 
      <TD colSpan=3 valign="baseline" style="BACKGROUND-IMAGE: url( images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center"><table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="451" align="center" valign="top"><br>
            <table width="640"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="613" height="23" align="right" valign="top">&nbsp;</td><br>
            </tr>
            <tr>
              <td height="223" align="center" valign="top">			  <form  name="myform" action="check_friend.php" method="post">
                <table width="85%" border="1" align=center cellpadding=3 cellspacing=2 bordercolor="#FFFFFF" bgcolor="#FFFFFF" class=i_table>
                  <tr align="left" bgcolor="#EFF7DE">
                    <td height=22 colspan=2 class=right_head> <span class="tableBorder_LTR">朋友圈添加</span></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td width=22% align="right" valign=middle> 姓名</td>
                    <td width=78% align="left"><input name='txt_name' type=text id="txt_name" value='' size=20 maxlength=14>                    </td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right" valign=middle ><span class="f_one">性别</span> </td>
                    <td align="left" ><span class="f_one">
                      <select name=txt_sex id="txt_sex">
                        <option value=1>男</option>
                        <option value=2>女</option>
                        <option value=0 selected>保密</option>
                      </select>
                    </span> </td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right" > 生日</td>
                    <td align="left" > <span class="word_grey">
                      <input name="txt_bir" type="text" id="Tel">
        （日期格式为：yyyy-mm-dd）</span></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right" valign=middle>所在城市 </td>
                    <td align="left"  ><SCRIPT src=" JS/initcity.js"></SCRIPT> 
					<select name="txt_province" id="select" onChange="initcity();">
                  <SCRIPT>creatprovince();</SCRIPT> 
					</select>
                      <select name="txt_city" id="select2" >
                      </select></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right">家庭住址 </td>
                    <td align="left">
                      <input name='txt_address' type=text id="txt_address2" value='' size=40 maxlength=75>
                          </td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right"> 邮政编码: </td>
                    <td align="left"><input name='txt_postcode' type=text id="txt_address3" value='' size=40 maxlength=75></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right">e-mail</td>
                    <td align="left"><input name='txt_email' type=text id="txt_reghomepage3" value='' size=40 maxlength=75></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right"> 家庭电话</td>
                    <td align="left"><input name='txt_tel' type=text id="txt_regoicq4" value='' size=20 maxlength=14></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right" valign=middle>手机号码</td>
                    <td align="left"><input name='txt_handset' type=text id="txt_regoicq2" value='' size=20 maxlength=14></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right"> QQ号 </td>
                    <td align="left"><input name='txt_QQ' type=text id="txt_regoicq3" value='' size=20 maxlength=14></td>
                  </tr>
                </table>
                <br>
                <input type='submit' name='regsubmit' value='提 交'class="btn_grey" onClick="return check()">
				<input name="Submit2" type="reset" class="btn_grey" value="重 填">
              </form></td>
          </tr>
          </table>            </td>
    </tr>
</table></TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
