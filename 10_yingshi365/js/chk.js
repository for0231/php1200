// JavaScript Document
//index.php
//登录验证
function chk_log(){
	if(this.login.name.value == ""){
		alert("请输入用户名!");
		this.login.name.focus();
		return false;
	}
	if(this.login.password.value == ""){
		alert("请输入密码!");
		this.login.password.focus();
		return false;
	}
}
//注册验证
function reg_chk(){
	if(this.reg.name.value == ""){
		alert("请输入注册帐号!");
		this.reg.name.focus();
		return false;
	}
	if(this.reg.password.value == ""){
		alert("请输入密码!");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.password.value.length < 3){
		alert("密码长度最少为3位");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.password.value != this.reg.t_password.value){
		alert("两次密码输入不一致");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.question.value == ""){
		alert("请输入密码提示问题!");
		this.reg.question.focus();
		return false;
	}
	if(this.reg.answer.value == ""){
		alert("请输入问题答案!");
		this.reg.answer.focus();
		return false;
	}
	if(this.reg.email.value != ""){
		var mailObj = this.reg.email;
		var email_ch= /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if(! email_ch.test(mailObj.value)){
			alert("请输入正确的邮箱地址！");
			mailObj.focus();
			return false;	
		}
	}
}
//修改验证
function reg_chk(){
	if(this.reg.name.value == ""){
		alert("请输入注册帐号!");
		this.reg.name.focus();
		return false;
	}
	if(this.reg.password.value == ""){
		alert("请输入密码!");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.password.value.length < 3){
		alert("密码长度最少为3位");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.password.value != this.reg.t_password.value){
		alert("两次密码输入不一致");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.email.value != ""){
		var mailObj = this.reg.email;
		var email_ch= /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if(!email_ch.test(mailObj.value)){
			alert("请输入正确的邮箱地址！");
			mailObj.focus();
			return false;	
		}
	}
}
//退出登录
function l_chk(){
	if(confirm("确定要退出登录吗？")){
		window.location="logout.php";
	} 
	else
     return false; 
}









