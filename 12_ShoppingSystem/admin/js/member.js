// JavaScript Document
/*  删除记录  */
function deletemem(form){
	if(!window.confirm('是否要删除数据??')){
		
	}else{
		var leng = form.chk.length;
		if(leng==undefined){
			if(!form.chk.checked){
					alert('请选取要删除数据!');
			}else{
				rd = form.chk.value;
				var url = 'delmem.php?rd='+rd;
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange = delnow;
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
				var url = "delmem.php?rd="+rd;
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange = delnow;
				xmlhttp.send(null);
			}
		}
	}
	return false;
}
function delnow(){
	if(xmlhttp.readyState == 4){
		if(xmlhttp.status == 200){
			var msg = xmlhttp.responseText;
			if(msg == "0"){
				alert('删除失败');
			}else{
				alert('删除成功');
				location=('member.php');
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
//修改
function showme(key){
	window.open('showmem.php?key='+key,'_blank','',false);
}
function changestate(key,state){
	if(state == 0){
		state = 1;
	}else{
		state = 0; 
	}
	var url = 'freezechk.php?key='+key+'&state='+state;
	xmlhttp.open("GET",url,false);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == "1"){
				location.reload();
			}else{
				alert(msg);
				return false;
			}
		}
	}
	xmlhttp.send(null);
}