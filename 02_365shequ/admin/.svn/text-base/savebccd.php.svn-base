<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include_once("../conn/conn.php");		//连接数据库
$bccdname=$_POST[bccdname];					//获取POST方法提交的值
$owner=$_POST[owner];
$typeid=$_POST[typeid];
$content=$_POST[content];
$samepart=$_POST[samepart];
$addtime=date("Y-m-j H:i:s");				//获取当前时间
if(is_dir("./bccdimages")==false){			//判断指定的文件是否存在
	mkdir("./bccdimages");					//如果不存在,则创建一个新的文件夹
} 
$link=date("YmjHis");						//获取当前时间
//为表单中提交的数据重新命名,以当前时间和随机数作为名称,其中使用$_FILES获取表单中真实的名称,使用strstr函数获取文件的后缀
$path=$link.mt_rand(1000000,9999999).strstr($_FILES["imageaddress"]["name"],".");
$address="./bccdimages/".$path;				//定义文件上传的路径
move_uploaded_file($_FILES["imageaddress"]["tmp_name"],$address);		//将文件上传到指定的文件中
$imageaddress="./admin/bccdimages/".$path;								//获取上传文件在服务器中的存储路径
//将表单中提交的数据存储到数据库中
$query=mysql_query("insert into tb_bccd(bccdname,owner,typeid,content,samepart,imageaddress,addtime) values('$bccdname','$owner','$typeid','$content','$samepart','$imageaddress','$addtime')",$conn);
if($query==true){ 
	echo "<script>alert('编程词典添加成功！');history.back();</script>";
}else{
	echo "<script>alert('编程词典添加失败！');history.back();</script>";
}
?>