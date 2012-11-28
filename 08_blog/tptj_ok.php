<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include("Conn/conn.php"); 
if($_POST["btn_tj"]=="提交"){
        $tpmc=htmlspecialchars($tpmc);      //将图片名称中的特殊字符转换成HTML格式
	    $tpmc=str_replace("\n","<br>",$tpmc);      //将图片名称中的回车符以自动换行符取代   
	    $tpmc=str_replace("","&nbsp;",$tpmc);       //将图片名称中的空格以"&nbsp;"取代
		$author=$_SESSION[username];
	    $scsj=date("y;m;d");          //设置图片的上传时间
        $fp=fopen($file,"r");       //以只读方式打开文件
        $file=addslashes(fread($fp,filesize($file)));       //将文件中的引号部分加上反斜线
		$query="insert into tb_tpsc (tpmc,file,author,scsj) values ('$tpmc','$file','$author','$scsj')";     //创建插入图片数据的sql语句
		$result=mysql_query($query);
		echo "<meta http-equiv=\"refresh\" content=\"1;url=browse_pic.php\">图片上传成功，请稍等...";
		   }
?>