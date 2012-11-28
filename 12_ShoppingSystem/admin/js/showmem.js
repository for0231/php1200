// JavaScript Document
function changestate(key,state){
	if(state == 0){
		state = 1;
	}else{
		state = 0;	
	}
	var url = 'freezechk.php?key='+key+'&state='+state;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == 0 || msg == 1){
				top.opener.location.reload();
				alert('更改成功');
				window.close();
			}else{
				alert(msg);
			}
		}
	}
	xmlhttp.send(null);
}
function dele(key){
	if(!window.confirm('是否要删除数据??')){
	}else{
		var url = 'delmem.php?rd='+key;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = function() {
			if(xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				if(msg == "0"){
					alert('删除失败');
				}else{
					alert('删除成功');
					location=('member.php');
				}
			}
		}
		xmlhttp.send(null);
	}
}
