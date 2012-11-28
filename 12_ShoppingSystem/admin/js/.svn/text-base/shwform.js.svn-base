// JavaScript Document
function del(form){
	if(!window.confirm('是否要删除订单??')){
		
	}else{
		var leng = form.chk.length;
		if(leng==undefined){
			if(!form.chk.checked){
					alert('请选取要删除数据!');
			}else{
				rd = form.chk.value;
				var url = 'delform.php?rd='+rd;
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange = delcommo;
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
				var url = "delform.php?rd="+rd;
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange = delcommo;
				xmlhttp.send(null);
			}
		}
	}
	return false;
}
function delcommo(){
	if(xmlhttp.readyState == 4){
		if(xmlhttp.status == 200){
			var msg = xmlhttp.responseText;
			if(msg != "1"){
				alert('删除失败'.msg);
			}else{
				alert('删除成功');
				location=('showform.php');
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
function showforminfo(fid){
	window.open('forminfo.php?fid='+fid,'_blank','width=550,height=400',false);
}
function showme(formid){
	if(document.getElementById('chdl').style.display == ''){
		document.getElementById('chdl').style.display = 'none';
	}else{
		document.getElementById('chdl').style.display = '';
		document.getElementById('formid').innerHTML = formid;
	}
}
function changeme(form){
	var fid = document.getElementById('formid').innerText;
	var lang = form.acceptsend.length;
	var state;
	for(var i=0; i < lang; i++){
		if(form.acceptsend[i].checked == true){
			state = form.acceptsend[i].value;
		}
	}
	if(state == undefined){
		alert('请选择处理项');
		return false;
	}
	var url = "changestate.php?formid="+fid+"&state="+state;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == '1'){
				location.reload();
			}else{
				alert('修改失败'+msg);
			}
		
		}
	}
	xmlhttp.send(null);
}
