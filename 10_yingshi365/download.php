<?php
	include "conn/conn.php";
	$address = $_GET[id];
	if($_GET[action] == "audio"){
		$a_sql = "select address,downTime from tb_audio where address = '".$address."'";
		$a_rst = $conn->execute($a_sql);
		if(!$a_rst->eof){
			$downtime = array();
			$downtime["downTime"] = $a_rst->fields[1] + 1;    
			$updata = $conn->getupdateSql($a_rst,$downtime);
			$conn->execute($updata);
			$path= "upfiles/audio/".$address;
		}
	}else if($_GET[action] == "video"){
		$a_sql = "select address,downTime from tb_video where address = '".$address."'";
		$a_rst = $conn->execute($a_sql);
		if(!$a_rst->eof){
			$downtime = array();
			$downtime["downTime"] = $a_rst->fields[1] + 1;    
			$updata = $conn->getupdateSql($a_rst,$downtime);
			$conn->execute($updata);
			$path = "upfiles/video/".$address;
		}
	}
if(file_exists($path)==false)
{
 echo "<script>alert('您访问文件已删除，请与管理员联系。');history.back();</script>";
 exit;
}
$filename=basename($path);
$file=fopen($path,"r");
header("Content-type:application/octet-stream");
header("Accept-ranges:bytes");
header("Accept-length:".filesize($path));
header("Content-Disposition:attachment;filename=".$filename);
echo fread($file,filesize($path));
fclose($file);
exit;
?>