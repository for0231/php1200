// JavaScript Document
//删除确认
function del(form){
	if(!window.confirm('是否要删除数据??')){
		
	}else{
		var leng = form.chk.length;
		if(leng==undefined){
			if(!form.chk.checked){
					alert('请选取要删除数据!');
			}else{
				rd = form.chk.value;
				var url = 'delcomm.php?rd='+rd;
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
				var url = "delcomm.php?rd="+rd;
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
		var msg = xmlhttp.responseText;
		if(msg != "1"){
			alert('删除失败'+msg);
		}else {
			alert('删除成功');
			location=('showcommo.php');
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
	window.open('modifycommo.php?key='+key,'_blank','width=750,heigh=500',false);
}