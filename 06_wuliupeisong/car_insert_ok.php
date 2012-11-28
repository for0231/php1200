<?php session_start(); include("conn/conn.php");
if($_SESSION[admin_user]==true){
if($Submit==true){

	    if(preg_match("/\d{17}[\d|X]|\d{15}/",$user_number,$counts)){ 
	   
             if(preg_match("/^(\d{3}-)(\d{8})$|^(\d{4}-)(\d{7})$|^(\d{4}-)(\d{8})$|^(\d{11})$/",$user_tel,$countes)){ 
			  
   $query=mysql_query("insert into tb_car(username,user_number,tel,address,car_number,car_road,car_content)values('$username','$user_number','$user_tel','$address','$car_number','$car_road','$car_content')");
   if($query==true){
	   echo "<script>alert('车源信息添加成功!');window.location.href='indexs.php?lmbs=车源信息管理';</script>";   }	   
	         }else{
                echo "<script>alert('您输入的电话号码格式不正确!!');history.back()</script>";
             }
        }else{
           echo "<script>alert('您输入的身份证号码的格式不正确!!');history.back()</script>";
        }
    
} 


if($Submit2=="修改"){
    if(preg_match("/\d{17}[\d|X]|\d{15}/",$user_number,$counts)){ 
	   
             if(preg_match("/^(\d{3}-)(\d{8})$|^(\d{4}-)(\d{7})$|^(\d{4}-)(\d{8})$|^(\d{11})$/",$user_tel,$countes)){ 

   $query="update tb_car set username='$username', user_number='$user_number', tel='$user_tel', address='$address', car_number='$car_number', car_road='$car_road', car_content='$car_content' where car_number='$car_number'";
   $result=mysql_query($query);
   if($result==true){
 	   echo "<script>alert('车源数据更新成功!!');window.location.href='indexs.php?lmbs=车源信息管理';</script>";
   }
       }else{
                echo "<script>alert('您输入的电话号码格式不正确!!');history.back()</script>";
             }
        }else{
           echo "<script>alert('您输入的身份证号码的格式不正确!!');history.back()</script>";
        }
}

if($Submit4=="删除"){
   $query="delete  from tb_car where car_number='$car_number'";
   $result=mysql_query($query);
   if($result==true){
 	   echo "<script>alert('车源数据删除成功!');window.location.href='indexs.php?lmbs=车源信息管理';</script>";
   }

}

?>
<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>