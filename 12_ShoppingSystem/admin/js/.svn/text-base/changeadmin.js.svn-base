// JavaScript Document
/*	修改操作	*/
function showdiv(key,name){
	if(document.getElementById('moddiv').style.display == 'none'){
		document.getElementById('showname').innerHTML = '修改管理员'+name+'的密码';
		document.getElementById('modid').value= key;
		document.getElementById('moddiv').style.display = '';
		if(document.getElementById('adddiv').style.display == ''){
			document.getElementById('adddiv').style.display = 'none';
		}
		   
	}else{
		document.getElementById('showname').innerHTML = '修改管理员'+name+'的密码';
		document.getElementById('modid').value= key;
	}
}
function modiadmin(){
	var key = document.getElementById('modid').value;
	var old = document.getElementById('old').value;
	var new1 = document.getElementById('new1').value;
	var new2 = document.getElementById('new2').value;
	if(old== '' || new1=='' || new2==''){
		alert('密码不允许为空');
		old.focus();
		return false;
	}
	if(new1 != new2){
		alert('两次密码不相等');
		new1.focus();
		return false;
	}
	
	var url = "modiadmin.php?id="+key+"&old="+old+"&new="+new1;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == "1"){
				alert('密码修改成功');
				location = 'admin.php';
			}else{
				alert('密码修改失败');
				return false;
			}
		}
	}
	xmlhttp.send(null);
}
/*		删除操作	*/
function deladmin(key){
	if(!confirm("确定要删除管理员吗？")){
		return false;
	}else{
		var url = 'deladmin.php?id='+key;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				if(msg == "1"){
					alert('删除成功');
					location='admin.php';
				}else if(msg == '2'){
					alert('目前只有1个管理帐号，不允许删除');
					return false;
				}else{
					alert('删除失败');
					return false;
				}
			}
		}
		xmlhttp.send(null);
	}
}
/*	添加操作	*/
function showadd(){
	if(document.getElementById('adddiv').style.display == 'none'){
		document.getElementById('showname').innerHTML = '';
		document.getElementById('moddiv').style.display = 'none';
		document.getElementById('adddiv').style.display = '';
	}else{
		document.getElementById('adddiv').style.display = 'none';
	}
}
function addadmin(form){
	var names = form.names.value;
	var pwd1 = form.pwd1.value;
	var pwd2 = form.pwd2.value;
	if(names == ''){
		alert('账号不允许为空!');
		form.names.focus();
		return false;
	}
	if(pwd1 == ''){
		alert('密码不允许为空!');
		form.pwd1.focus();
		return false;
	}
	
	if(pwd1 != pwd2){
		alert('两次密码不相等');
		form.pwd1.focus();
		return false;
	}
	var url = "addadmin.php?name="+names+"&pwd="+pwd1;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == "1"){
				alert('管理员添加成功');
				location='admin.php';
			}else{
				alert(msg);
				return false;
			}
		}
	}
	xmlhttp.send(null);
}