// JavaScript Document
//登录验证
function l_chk(){
	if(document.a_login.manager.value == ""){
		alert("请输入用户名");
		document.a_login.manager.focus();
		return false;
	}
	if(document.a_login.pwd.value == ""){
		alert("请输入密码");
		document.a_login.pwd.focus();
		return false;
	}
}
//添加目录验证
function n_chk(){
	if(document.list.names.value == ""){
		alert("目录名称不允许为空");
		document.list.names.focus();
		return false;
	}
}
//删除确认
function del_chk(){
	if(confirm("确定要删除选中的项目吗？一旦删除将不能恢复！"))
     	return true;
   	else
     	return false;
}
//添加管理员
function check(){
	var names=list.names.value;
	var pwd1=list.password.value;
	var pwd2=list.password2.value;
	var grade=list.grade.value;
	var realname=list.realname.value;
	if(names==""){
		alert("用户名不能为空");
		list.names.focus();
	}
	else if(pwd1==""){
		alert("密码不能为空");
		list.password.focus();
	}
	else if(pwd1.length<3){
		alert("密码长度不能小于3位");
		list.password.focus();
	}
	else if(pwd2==""){
		alert("请确认密码");
		list.password2.focus();
	}
	else if(pwd1!=pwd2){
		alert("两次输入的密码不一致");
		list.password.focus();
	}
	else if(realname==""){
		alert("请填写管理员真实姓名");
		list.realname.focus();
	}
	else {
		list.submit();
	}
}
//添加视频文件验证
function a_chk(){
	if(document.list.names.value == ""){
		alert("名称不允许为空");
		document.list.names.focus();
		return false;
	}
}