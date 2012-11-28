// JavaScript Document
/* public.php  */
function chkaddpub(form){
	var title = form.title.value;
	var content = form.content.value;
	if(title == ''){
		alert('标题为空');
		form.title.focus();
		return false;
	}
	if(content == ''){
		alert('内容为空');
		form.content.focus();
		return false;
	}
	var url = 'addpub.php?title='+title+'&content='+content;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == '1'){
				alert('添加成功');
				location='showpub.php';
			}else{
				alert(msg);
			}
		}
	}
	xmlhttp.send(null);
}
/* showpub.php 
 * 删除确认
 */
function delepub(form){
	if(!window.confirm('是否要删除数据??')){
		
	}else{
		var leng = form.chk.length;
		if(leng==undefined){
			if(!form.chk.checked){
					alert('请选取要删除数据!');
			}else{
				rd = form.chk.value;
				var url = 'delpub.php?rd='+rd;
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange = delpub;
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
			}else{
				var url = "delpub.php?rd="+rd;
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange = delpub;
				xmlhttp.send(null);
			}
		}
	}
	return false;
}
function delpub(){
	if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == "0"){
				alert('删除失败');
			}else{
				alert('删除成功');
				location=('showpub.php');
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
//修改
function modi(key){
	//window.open('modifycommo.php?key='+key,'_blank','width=750,heigh=500',false);
}

