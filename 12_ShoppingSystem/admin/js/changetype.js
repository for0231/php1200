// JavaScript Document
function modifytype(key){
	var nm = 'moditype'+key;
	var names = document.getElementById(nm).value;
	if(names == ""){
		alert('请填写类别名称');
		document.getElementById(nm).focus();
		return false;
	}
	var url = "changetype.php?action=m&names="+names+"&key="+key;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = check;
	xmlhttp.send(null);
}
function delbigtype(key){
	if(confirm("您要删除的是一级类，确定要删除吗？")){
		var url = "changetype.php?action=bd&key="+key;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = check;
		xmlhttp.send(null);
	}else{
		return false;
	}
}
function delsmalltype(key){
	if(confirm("确定要删除选中的项目吗？一旦删除将不能恢复！")){
		var url = "changetype.php?action=sd&key="+key;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = check;
		xmlhttp.send(null);
	}else{
		return false;
	}
}
function check(){
	if(xmlhttp.readyState == 4){
		if(xmlhttp.status == 200){
			var msg = xmlhttp.responseText;
			if(msg == "1"){
				alert('类名重复');
			}else if(msg == "2"){
				alert('操作失败!');
			}else if(msg == '3'){
				alert('操作成功');
				location='showtype.php';
			}else if(msg == '4'){
				alert('该大类有子类，不能删除');
			}else if(msg == '0'){
				alert('未知错误!'+'\n错误代码:'+msg);
			}
		}
	}
}