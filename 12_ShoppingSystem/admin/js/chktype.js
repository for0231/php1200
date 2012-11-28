// JavaScript Document
function changetype(form){
		if(form.grade.value=="2"){
			form.supid.disabled=false;
		}else{
			form.supid.disabled=true;
		}
}
function chktype(form){
	var name = form.names.value;
	var supid = form.supid.value;
	if(form.names.value == ""){
		alert('请填写类别名称');
		form.names.focus();
		return false;
	}
	if(form.grade.value == "1"){
		var url = "chktype.php?name="+name;
	}else{
		var url = "chktype.php?name="+name+"&supid="+supid;
	}
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = check;
	xmlhttp.send(null);
}
function check(){
	if(xmlhttp.readyState == 4){
		if(xmlhttp.status == 200){
			var msg = xmlhttp.responseText;
			if(msg == "1"){
				alert('类名重复');
			}else if(msg == "2"){
				alert('添加失败!');
			}else{
				alert('添加成功');
				location='showtype.php';
			}
		}
	}
}