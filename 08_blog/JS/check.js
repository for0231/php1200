// JavaScript Document
//首页登录验证
function f_check(form){
		if(form.txt_user.value==""){
			alert("请输入用户名");form.txt_user.focus();return false;		
		}
		if(form.txt_pwd.value==""){
			alert("请输入密码");form.txt_pwd.focus();return false;
		}
		if(form.txt_yan.value==""){
			alert("请输入验证码");form.txt_yan.focus();return false;
		}
		if(form.txt_yan.value!=form.txt_hyan.value){
			alert("对不起，您输入的验证码不正确!");form.txt_yan.focus();return false;
		}
	}
//判断用户的输入是否合法
function check(){
	if (myform.txt_regrealname.value==""){
		alert("请输入真实姓名！");myform.txt_regrealname.focus();return false;
	}
	if (myform.txt_regpwd.value==""){
		alert("请输入密码！");myform.txt_regpwd.focus();return false;
	}
	if (myform.txt_regpwd.value.length<3){
		alert("密码至少为3位，请重新输入！");myform.txt_regpwd.focus();return false;
	}		
	if (myform.txt_regpwd2.value==""){
		alert("请确认密码！");myform.txt_regpwd2.focus();return false;
	}
	if (myform.txt_regpwd.value!=myform.txt_regpwd2.value){
		alert("您两次输入的密码不一致，请重新输入！");myform.txt_regpwd.focus();return false;
	}
	if(myform.txt_birthday.value==""){
		alert("请输入您的生日");myform.txt_birthday.focus();return false;
	}		
	if(CheckDate(myform.txt_birthday.value)){
		alert("请输入标准日期（如：1980/05/29或1980-05-29）");myform.txt_birthday.focus();return false;
	}
	if (myform.txt_regemail.value==""){
		alert("请输入Email地址！");myform.txt_regemail.focus();return false;
	}
	var i=myform.txt_regemail.value.indexOf("@");
	var j=myform.txt_regemail.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0)){
		alert("您输入的Email地址不正确，请重新输入！");myform.txt_regemail.value="";myform.txt_regemail.focus();return false;
	}
	if(myform.txt_province.value==""){
		alert("请选择您所在的省会名称!");myform.txt_province.focus();return false;
	}
	if(myform.txt_city==""){
		alert("请选择您所在的城市名称!");myform.txt_city.focus();return false;
	}
	if(myform.txt_ico==""){
		alert("请选择您喜欢的人物头像!");myform.txt_ico.focus();return false;
	}	
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

function openwin(x){
				  if (x==""){
	                  alert("请输入用户名!"); myform.txt_regname.focus();return false;
				 }
				 else{
					 window.open("submit_checkuser.php?x="+x,"newframe","width=300,height=150");
				 }
				 }