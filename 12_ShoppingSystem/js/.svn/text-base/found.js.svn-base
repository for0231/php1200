// JavaScript Document
function chkname(form){
	var user = form.user.value;
	if(user == ''){
		alert('请输入用户名');
		form.user.focus();
		return false;
	}else{
		var url = "foundpwd.php?user="+user;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				if(msg == '0'){
					alert('没有该用户，请重新查找!');
					form.user.select();
					return false;
				}else{
					document.getElementById('first').style.display = 'none';
					document.getElementById('second').style.display = '';
					document.getElementById('question').innerHTML = msg;
				}
			}
		}
		xmlhttp.send(null);
	}
}
function chkanswer(form) {
	var user = document.getElementById('user').value;
	var answer = form.answer.value;
	if(answer == ''){
		alert('请输入提示问题');
		form.answer.focus();
		return false;
	}else{
		var url = "foundpwd.php?user="+user+"&answer="+answer;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				if(msg == '0'){
					alert('问题回答错误');
					form.answer.select();
					return false;
				}else{
					document.getElementById('second').style.display = 'none';
					document.getElementById('third').style.display = '';
				}
			}
		}
		xmlhttp.send(null);
	}
}
function chkpwd(form){
	var user = document.getElementById('user').value;
	var pwd1 = form.pwd1.value;
	var pwd2 = form.pwd2.value;
	if(pwd1 == ''){
		alert('请输入密码');
		form.pwd1.focus();
		return false;
	}
	if(pwd1.length < 6){
		alert('密码输入错误');
		form.pwd1.focus();
		return false;
	}
	if(pwd1 != pwd2){
		alert('两次密码不相等');
		form.pwd2.select();
		return false;
	}
	var url = "foundpwd.php?user="+user+"&password="+pwd1;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == '1'){
				alert('密码修改成功，请重新登录');
				window.close();
			}else{
				alert(msg);
			}
		}
	}
	xmlhttp.send(null);
}