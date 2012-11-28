<?php
session_start();
//函数list_menu为循环输出下级部门菜单
//$num为上级部门id号
//$wid为表格宽度
//$m为表单元素<tr id=..>的变量值
function list_menu($num,$wid,&$m){
	$conn = mysql_connect("localhost","root",$GLOBALS['password']);
	mysql_select_db("db_office",$conn);
	mysql_query("set names gb2312");
	//查询同级部门语句
	$sqlstr = "select * from tb_depart where up_depart = ".$num;
	$result = mysql_query($sqlstr,$conn);
?>
<!--隐藏域-->
<tr id="OpenRep<?php echo $m; ?>" style="display:none;">
	<td>				
		<table width="<?php echo $wid; ?>%"  border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td height="25" align="center">
					<table width="<?php echo ($wid -3); ?>%"  border="0" cellspacing="0" cellpadding="0">
<?php
	//循环输出同级部门
	while($rows = mysql_fetch_row($result)){
		//查看下属部门
		$sqlstr1 = "select * from tb_depart where up_depart = ".$rows[0];
		$result1 = mysql_query($sqlstr1,$conn);
		$nu = mysql_num_rows($result1);
		//如果当前部门没有下属部门时
		if(!$nu){
			$m += 1;
?>
						 <tr>
                    		<td width="100%" height="25" align="left">&nbsp;&nbsp;&nbsp;<img src="../images/folder.gif" width="30" height="16" border="0">&nbsp;<?php echo $rows[1] ?>------------------<a href="edit_depart.php?id=<?php echo $rows[0]; ?>">修改</a>||<a href="del_depart_chk.php?id=<?php echo $rows[0] ?>" onClick="return cfm();">删除</a></td>
                  		</tr>
									
<?php
		}
		//当前部门有下属部门时
		else{
			$m += 1;
?>
						<tr onMouseOver="this.style.background='#96F7F4'" onMouseOut="this.style.background=''">
							<td height="25">&nbsp;<a href="Javascript:ShowTR(img<?php echo $m; ?>,OpenRep<?php echo $m; ?>)"><img src="../Images/jia.gif" alt="展开" name="img<?php echo $m; ?>" width="32" height="14" border="0" id="img<?php echo $m; ?>">&nbsp;<?php echo $rows[1];?></a>------------------<a href="edit_depart.php?id=<?php echo $rows[0]; ?>">修改</a>||删除</td>
						</tr>
<?php
			list_menu($rows[0],$wid,$m);
		}
	}
?>
           		  </table>
				</td>
           	</tr>
         </table>
	</td>
</tr>
<?php
}
//记录后台管理信息
//记录管理员的操作
//登录、登出、添加、删除等
//参数$action为操作动作
function w_log($act){
	$filename = "log.txt";
	if(file_exists($filename)){
		$f_open = fopen($filename,"a+");
	}
	else
	{
		$f_open = fopen($filename,"w+");
	}
		$str = $_SESSION['controller'].",".date("Y-m-d H:i:s").",".$_SERVER['REMOTE_ADDR'].",".$act."\n";
		fwrite($f_open,$str);
		fclose($f_open);
}
//删除系统日志
function c_log(){
	$filename="../log.txt";
	if(file_exists($filename))
		unlink($filename);
	else
		echo "<script>alert('暂无系统日志！');history.go(-1);</script>";
}
//返回处理消息
//$l_address：跳转地址
function re_message($result,$l_address){
	if($result)
		echo "<script>alert('操作成功！');location='".$l_address."';</script>";
	else
		echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
}

//查看输入信息是否重复
function isbool($dname){
	$conn = mysql_connect("localhost","root",$GLOBALS['password']);
	mysql_select_db("db_office",$conn);
	mysql_query("set names gb2312");
	$sqlstr = "select * from tb_depart where d_name = '".$dname."'";
	$result = mysql_query($sqlstr,$conn);
	if(mysql_num_rows($result)>0)
		$isbool = true;
	else
		$isbool = false;
	return $isbool;
}
//返回文件夹下的文件列表
function show_file(){
	$folder_name = "../bak";
	$d_open = opendir($folder_name);
	$num = 0;
	while($file = readdir($d_open)){
		$filename[$num] = $file;
		$num++; 
	}
	closedir($d_open);
	return $filename;
}
//读取字段
//$conn,数据库链接
//$dataname：数据表名称
//$fieldname：要查找字段
//$n_id：数据id号
function read_field($conn,$tablename,$fieldname,$n_id){
	$sqlstr = "select ".$fieldname." from ".$tablename." where id = ".$n_id;
	$result = mysql_query($sqlstr,$conn);
	$rows = mysql_fetch_row($result);
	return $rows[0];
}
?>