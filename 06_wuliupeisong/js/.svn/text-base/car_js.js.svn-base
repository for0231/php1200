function check_car_number(str){
	var Expression=/^[\u4E00-\u9FA5]?[a-zA-Z]-\w{5}$/; 	
	var objExp=new RegExp(Expression);
	return objExp.test(str)
}
function check_car(){
	if (form1.username.value == ""){
		alert("用户名不能为空！");
		form1.username.focus();
		return (false);	 
	}
	//验证车牌号码
	if (form1.car_number.value==""){
		alert("车牌号码不能为空！");
		form1.car_number.focus();
		return (false);	 
	}
	
	if(form1.car_number.value.length!=8||isNaN(form1.car_number.value.substr(3,4))){
		alert("您输入的车牌号码格式不正确!");
		form1.car_number.focus();
		return (false);	
	}	
	if(!check_car_number(form1.car_number.value)){
		alert("您输入的车牌号码格式不正确!");
		form1.car_number.focus();return;	
	}	

    //验证身份证号码
	if(form1.user_number.value==""){
		alert("请输入身份证号码!");
		form1.user_number.focus();
		return (false);
	}
	if(!(form1.user_number.value.length==15 || form1.user_number.value.length==18)){
	  alert("身份证号只能为15位或18位!");
	  form1.user_number.focus();
	  return (false);
	}
	
	//验证电话号码
		if(form1.user_tel.value==""){
		alert("请输入电话号码!");
		form1.user_tel.focus();
		return (false);
	}
	
	//验证地址
		if(form1.address.value==""){
		alert("请输入家庭地址!");
		form1.address.focus();
		return (false);
	}	
	    if(form1.car_content.value==""){
		alert("请输入车辆信息!");
		form1.car_content.focus();
		return (false);
	}	
	    if(form1.car_road.value==""){
		alert("请输入车辆行驶路线!");
		form1.car_road.focus();
		return (false);
	}
}

function check_admin(){
	if(form1.admin_user.value==""){
		alert("请输入用户名!");
		form1.admin_user.focus();
		return (false);
		}
    if(form1.admin_pass.value==""){
		alert("请输入旧密码!");
		form1.admin_pass.focus();
		return (false);
		}
		 if(form1.admin_new_pass.value==""){
		alert("请输入新密码!");
		form1.admin_new_pass.focus();
		return (false);
		}
 if(form1.admin_new_pass2.value==""){
		alert("请输入新密码!");
		form1.admin_new_pass2.focus();
		return (false);
		}
	 if(form1.admin_new_pass.value!=forms1.admin_new_pass2.value){
		alert("您输入的新密码与确认密码不符!");
		form1.admin_new_pass2.focus();
		return (false);
		}	
	}
function check_select_car(){
	if(form1.select1.value==""){
		alert("请输入车辆路线!");
		form1.select1.focus();
		return (false);
		}
    if(form1.select2.value==""){
		alert("请输入车辆路线!");
		form1.select2.focus();
		return (false);
		}

	}