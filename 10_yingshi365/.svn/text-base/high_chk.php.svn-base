<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "conn/conn.php";
	$type1=$_POST[selecttype2];
	$_SESSION[seltype]=$type1;
	switch ($_POST[selecttype1]){
		case "Name":
		$name0=$_POST[dataname];
		$name2=$_POST[areaname];
		$name4=$_POST[publishername];
		$name5=$_POST[language];
		if($type1=="audio"){
			$sql="select id,style,name,actor,remark,address from tb_audio where name like '%".$name0."%' and froms like '%".$name2."%' and publisher like '%".$name4."%' and languages like '%".$name5."%'";
		}else{
			$sql="select id,style,name,actor,remark,address from tb_video where name like '%".$name0."%' and froms like '%".$name2."%' and publisher like '%".$name4."%' and languages like '%".$name5."%'";
		}
		$_SESSION[sql]=$sql;
		break;	
		case "Actor":
		$name1=$_POST[actor];
		$name2=$_POST[director];
		$name3=$_POST[marker];
		if($type1=="audio"){ 
			$sql="select id,style,name,actor,remark,address from tb_audio where actor like '%".$name1."%' and director like '%".$name2."%' and marker like '%".$name3."%'";
		}else{
			$sql="select id,style,name,actor,remark,address from tb_video where actor like '%".$name1."%' and ci like '%".$name2."%' and qu like '%".$name3."%'";
		}	
		$_SESSION[sql]=$sql;
		break;
	}
?>
<script>
top.opener.location="show.php?action=high&type=<?php echo $type1; ?>";
window.close();
</script>