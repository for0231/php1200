// JavaScript Document
function showsimple(){
	var cont = document.getElementById("searchtxt").value;
	open('searchrst.php?act=simple&cont='+cont,'_blank','width=660',false);
}
function openwin(){
	open('h_search.php','_blank','width=660',false);
}
function showhsearch(){
	var name= document.getElementById("name").value;
	var model= document.getElementById("model").value;
	var stype= document.getElementById("stype").value;
	if(name == '' && model == '' && stype == ''){
		alert("至少填写一项查询信息");
		return false;
	}
	url = 'searchrst.php?act=high&name='+name+"&model="+model+"&stype="+stype;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				showme.innerHTML = msg;
			}
	}
	xmlhttp.send(null);
}