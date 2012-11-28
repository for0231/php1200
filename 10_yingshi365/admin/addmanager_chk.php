<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	include "conn/conn.php";
	include "inc/chec.php";
	
	$a_sql="select * from tb_manager where name='".$_POST[names]."'";
	$a_rst = $conn->execute($a_sql);
	if(!$a_rst->EOF)
		echo "<script>alert('该名称的管理员已经存在，请更换名称');history.go(-1);</script>";
	else{
		$a_sqlstr="insert into tb_manager values('','".$_POST[names]."','".$_POST[password]."','".$_POST[grade]."','".$_POST[realname]."','".date("Y-m-d")."','1')";
		$a_rst1 = $conn->execute($a_sqlstr);
		if(!($a_rst1 == false)){
?>
		<script>
			top.opener.location.reload(); 
			alert("管理员添加成功");
			top.window.close();
		</script>
<?php
		}
		else
			echo "<script>alert('添加失败".$a_sqlstr."');history.go(-1);</script>";
	}
?>	