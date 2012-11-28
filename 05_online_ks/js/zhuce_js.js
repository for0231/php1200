//定义XMLHttpRrequest对象
var xmlHttp=createXmlHttpRequestObject();

//获取XMLHttpRrequest对象
function createXmlHttpRequestObject(){
	//用来存储将要使用的XMLHttpRrequest对象
	var xmlHttp;
	//如果在internet Explorer下运行
	if(window.ActiveXObject){
		try{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			xmlHttp=false;
		}

	}else{
	//如果在Mozilla或其他的浏览器下运行
		try{
			xmlHttp=new XMLHttpRequest();
		}catch(e){
			xmlHttp=false;
		}
	}
	 //返回创建的对象或显示错误信息
	if(!xmlHttp)
		alert("返回创建的对象或显示错误信息");
		else
		return xmlHttp;
}
//使用XMLHttpRequest对象创建异步HTTP请求
function process(){
	
	if(form1.username.value==""){
		alert("请输入姓名！");
   		    form1.username.select();
			return(false);
		}
	if(form1.tel.value==""){
		alert("请输入电话号码！");
		form1.tel.select();
		return(false);
		}
	if(checkphone(form1.tel.value)!=true){
		alert("您输入的电话号码的格式不正确！");
		form1.tel.select();
		return(false);
		}	

	if(form1.address.value==""){
		alert("请输入联系地址！");
		form1.address.select();
		return(false);
		}
	
	//在xmlHttp对象不忙时进行处理
	if(xmlHttp.readyState==4 || xmlHttp.readyState==0){
	//获取用户在线表单中输入的姓名	
	names = document.getElementById("username").value;
	tels = document.getElementById("tel").value;
	addresss =document.getElementById("address").value;
	//在服务器端执行quickstart.php
	
	xmlHttp.open("GET","zhuce_ok.php?online_user="+names+"& online_tel="+tels+"& online_address="+addresss,true);
	//定义获取服务器端响应的方法
	xmlHttp.onreadystatechange=handleServerResponse;
	//向服务器发送请求
	xmlHttp.send(null);
	}else
	//如果服务器忙,1秒后重试
	setTimeout('process()',1000);
}
//当收到服务器端的消息时自动执行
function handleServerResponse(){
	//在处理结束时进入下一步
	if(xmlHttp.readystate==4){
		//状态为200表示处理成功结束
		if(xmlHttp.status==200){
			//获取服务器端发来的XML信息
			xmlResponse=xmlHttp.responseXML;
			//获取XML中的文档对象(根对象)
			xmlDocumentElement=xmlResponse.documentElement;
			//获取第一个文档子元素的文本信息
			helloMessage=xmlDocumentElement.firstChild.data;
			//使用从服务器端发来的消息更新客户端显示的内容
			document.getElementById("divMessage").innerHTML='<i>'+helloMessage+'</i>';
			//重新开始
			setTimeout('process()',1000);

		}else{
			//如果HTTP的状态不是200表示发生错误
        	alert("There was a problem accessing the server:"+xmlHttp.statusText);
		}
	}
}

//验证电话号码的格式是否正确
function checkphone(tel){
	var str=tel;
	var Expression=/^(\d{3}-)(\d{8})$|^(\d{4}-)(\d{7})$|^(\d{4}-)(\d{8})$|^(\d{11})$/;  
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}	
