// JavaScript Document
function addlinks(form){
	var name = form.names.value;
	var url = form.url.value;
	if(name == ''){
		alert('请添加网站名称');
		form.names.focus();
		return false;
	}
	if(url == ''){
		alert('请添加网站的URL');
		form.url.focus();
		return false;
	}
}
/*	删除	*/
function dellinks(form){
	if(!window.confirm('是否要删除数据??')){
		
	}else{
		var leng = form.chk.length;
		if(leng==undefined){
			if(!form.chk.checked){
					alert('请选取要删除数据!');
					return false;
			}else{
				var url = 'dellinks.php?rd='+rd;
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange = delcomm;
				xmlhttp.send(null);
			}
		}else{ 
			var rd=new Array();
			var j = 0;
			for( var i = 0; i < leng; i++)
			{
				if(form.chk[i].checked){
					rd[j++] = form.chk[i].value;
				}
			}
			if(rd == ''){
				alert('请选取要删除数据!');
				return false;
			}else{
				var url = "dellinks.php?rd="+rd;
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange = dellink;
				xmlhttp.send(null);
			}
		}
	}
}
function dellink(){
	if(xmlhttp.readyState == 4){
		if(xmlhttp.status == 200){
			var msg = xmlhttp.responseText;
			if(msg == "0"){
				alert('删除失败');
			}else{
				alert('删除成功');
				location=('showlinks.php');
			}
		}
	}
}

//全部选择/取消
function alldel(form){
	var leng = form.chk.length;
	if(leng==undefined){
	   if(!form.chk.checked)
	   		form.chk.checked=true;
	 }else{  
       for( var i = 0; i < leng; i++)
	    {
			if(!form.chk[i].checked)
	      		form.chk[i].checked = true;
	    }
	 } 
	return false;
}
// 反选
function overdel(form){
	 var leng = form.chk.length;
	 if(leng==undefined){
	   if(!form.chk.checked)
	   		form.chk.checked=true;
		else
			form.chk.checked=false;
	 }else{  
       for( var i = 0; i < leng; i++)
	    {
			if(!form.chk[i].checked)
	      		form.chk[i].checked = true;
			else
				form.chk[i].checked = false;
	    }
	 } 
	return false;
}
function modlink(key){
	var nm = 'wnames'+key;
	var ur = 'wurl'+key;
	var names = document.getElementById(nm).value;
	var wurl = document.getElementById(ur).value;
	if(names == ""){
		alert('请填写网站名称');
		document.getElementById(nm).focus();
		return false;
	}
	if(wurl == ""){
		alert('请填写URL');
		document.getElementById(ur).focus();
		return false;
	}
	
	var url = "modlinks.php?id="+key+"&names="+names+"&wurl="+wurl;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg=="1"){
				alert('修改成功');
				location='showlinks.php';
			}else{
				alert(msg);
				return false;
			}
		}
	}
	xmlhttp.send(null);
}

