<?php  
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include_once("conn/conn.php");		//连接数据库
if($_POST[colleague_tel]==""){				//判断电话号码是否为空
	echo "<script>alert('请填写发送的手机号码!');history.back();</script>";
}else{
	$carrier="吉林省明日科技有限公司";    //获取标题
	$userid=trim($_POST[regtel]);         //获取发送手机号码
	$password=trim($_POST[regpwd]);       //获取密码
	$content=trim($_POST[mess]);          //获取短信内容
	$data=date("Y-m-d H:i:s");            //获取时间	
	$ip=getenv('REMOTE_ADDR');            //获取IP地址
while(list($name,$value)=each($_POST[colleague_tel])){      //读取要发送的电话号码
	if(is_numeric($value)==true){        //判断电话格式是否正确
    	$mobilenumber=$value;            //将获取的电话号码附给变量
     	$msgtype="Text";                 //指定短信为文本格式
     	/*向数据库中添加发送短信的记录*/
     	$sql="insert into tb_short(short_ip,short_tel,short_tels,short_content,short_date,short_title)values('$ip','$userid','$mobilenumber','$content','$data','$carrier')";
     	$rs=new com("adodb.recordset");
     	$rs->open($sql,$conn,3,3);		//执行添加语句
		/*------------------------*/
    	include('nusoap/lib/nusoap.php');    //读取PHP类文件,实现短信的发送
		/*将数据以数组的形式添加到sendXml方法中*/
     	$s=new soapclient('http://smsinter.sina.com.cn/ws/smswebservice0101.wsdl','WSDL');
     	$s->call('sendXml',array('parameters' =>array('carrier' => $carrier,'userid'=> $userid,'password' => $password,'mobilenumber' => $mobilenumber,'content' => $content,'msgtype' => $msgtype))); 
		/*-------------------------------------*/
     	echo "<script>alert('短信发送成功!');window.location.href='indexs.php?lmbs=连接短信';</script>";
  	}}}
?>
