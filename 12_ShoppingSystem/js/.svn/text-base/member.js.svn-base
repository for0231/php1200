// JavaScript Document
function mem(form){
	if(form.realname.value==""){
		alert('请填写真实姓名');
		form.realname.focus();
		return false;
	}
	if(form.card.value==""){
		alert('请填写身份证号');
		form.card.focus();
		return false;
	}
	if(form.card.value.length != 15 && form.card.value.length !=18){
		alert('请填写正确的身份证号');
		form.card.focus();
		return false;
	}
	if(form.tel.value==""){
		alert('请填写移动电话');
		form.tel.focus();
		return false;
	}
	if(isNaN(form.tel.value)){
		alert('请填正确的电话号码');
		form.tel.focus();
		return false;
	}
	if(form.phone.value==""){
		alert('请填写固定电话');
		form.phone.focus();
		return false;
	}
	if(isNaN(form.qq.value)){
		alert("QQ号码只能由数字组成！");
		form.qq.focus();
		return false;
	}
	var i=form.email.value.indexOf("@");
	var j=form.email.value.indexOf(".");
	if((form.email.value != "") && ((i<0)||(i-j>0)||(j<0))){
		alert('请正确填写Email');
		form.email.focus();
		return false;
	}
	if(isNaN(form.code.value)){
		alert('请填写正确的邮编');
		form.code.focus();
		return false;
	}
	if(form.code.value.legnth < 6){
		alert('请填写正确的邮编');
		form.code.focus();
		return false;
	}
	if(form.address.value==""){
		alert('请填写地址');
		form.address.focus();
		return false;
	}
}
function pwd(form){
	if(form.old.value == ""){
		alert('请填写旧密码');
		form.old.focus();
		return false;
	}
	if(form.old.value.length < 6){
		alert('请填写正确的旧密码');
		form.old.focus();
		return false;
	}
	if(form.new1.value == ""){
		alert('请填写新密码');
		form.new1.focus();
		return false;
	}
	if(form.new1.value.length < 6){
		alert('密码长度不得小于6位');
		form.new1.focus();
		return false;
	}
	if(form.new1.value != form.new2.value){
		alert('两次密码不相等');
		form.new2.focus();
		return false;
	}
}