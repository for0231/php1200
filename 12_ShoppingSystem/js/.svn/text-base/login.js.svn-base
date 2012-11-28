// JavaScript Document
function lg(form){
	if(form.name.value==""){
		alert('请输入用户名');
		form.name.focus();
		return false;
	}
	if(form.password.value == "" || form.password.value.length < 6){
		alert('请输入正确密码');
		form.password.focus();
		return false;
	}
	if(form.check.value == ""){
		alert('请输入验证码');
		form.check.focus();
		return false;
	}
	if(form.check.value != form.check2.value){
		form.check.select();
		code(form);
		return false;
	}
	var user = form.name.value;
	var password = form.password.value;
	var url = "chkname.php?user="+user+"&password="+password;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == '2'){
				alert('用户名或密码错误!!');
				form.password.select();
				form.check.value = '';
				code(form);
				return false;
			}if(msg == "3"){
				alert("该用户被冻结，请联系管理员");
				return false;
			}
			else{
				alert('欢迎光临');
				location.reload();
			}
		}
	}
	xmlhttp.send(null);
	return false;
}
//显示验证码
function yzm(form){
	var num1=Math.round(Math.random()*10000000);
	var num=num1.toString().substr(0,4);
	document.write("<img name=codeimg width=36 heigh=20 src='yzm.php?num="+num+"'>");
	form.check2.value=num;
}
//刷新验证码
function code(form){
	var num1=Math.round(Math.random()*10000000);
	var num=num1.toString().substr(0,4);
	document.codeimg.src="yzm.php?num="+num;
	form.check2.value=num;
}
//注册
function reg(){
window.open("register.php", "_blank", "width=500,height=450",false);	
}
//找回密码
function found() {
window.open("found.php","_blank","width=220 height=130",false);	
}