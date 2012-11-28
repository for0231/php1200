// JavaScript Document
function check_login(form){
	var user = form.user.value;
	var pwd = form.pwd.value;
	if(user == ""){
		alert('用户名不允许为空');
		form.user.focus();
		return false;
	}
	if(pwd == ''){
		alert('密码不允许为空');
		form.pwd.focus();
		return false;
	}
	var url = "check_login.php?user="+user+"&pwd="+pwd;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = checklogin;
	xmlhttp.send(null);
}
function checklogin(){
	if(xmlhttp.readyState == 4){
		if(xmlhttp.status == 200){
			var msg = xmlhttp.responseText;
			if(msg == "1"){
				alert('登录成功');
				location=('main.html');
			}else{
				alert('用户名或密码错误!');
				alert(msg);
			}
		}
	}
}