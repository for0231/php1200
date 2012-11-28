<?php session_start(); include("conn/conn.php");
if($_SESSION[admin_user]==true){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>物流配送信息网</title>
</head>
<script language="javascript" src="js/car_js.js"></script>
<body>
<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  <tr>
    <form id="form1" name="form1" method="post" action="indexs.php?lmbs=车源信息查询" onSubmit="javascript: return check_select_car();">
      <td height="30" colspan="4" align="right" bgcolor="#FFFFFF">查询
        <input name="select1" type="text" id="select1" size="10">
        至
        <input name="select2" type="text" id="select2" size="10"></td>
      <td colspan="2" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="提交" /></td>
    </form>
  </tr>
  <tr>
    <td width="79" height="26" align="center" bgcolor="#FFFFFF">车牌号码</td>
    <td width="146" align="center" bgcolor="#FFFFFF">路线</td>
    <td colspan="2" align="center" bgcolor="#FFFFFF">车辆描述</td>
    <td width="141" align="center" bgcolor="#FFFFFF">使用日志</td>
    <td width="67" align="center" bgcolor="#FFFFFF">是否使用</td>
  </tr>
  <?php   if($select1==true || $select2==true){
  $query="select * from tb_car where car_road like '%$select1%' and car_road like '%$select2%'";
  $result=mysql_query($query);
  if(mysql_num_rows($result)>0){
  while($myrow=mysql_fetch_array($result)){  
    
  ?>
  <tr>
    <td height="26" align="center" bgcolor="#FFFFFF"><?php echo $myrow[car_number];?></td>
    <td bgcolor="#FFFFFF"><?php echo $myrow[car_road];?></td>
    <td colspan="2" bgcolor="#FFFFFF"><?php echo $myrow[car_content];?></td>
    <td bgcolor="#FFFFFF">&nbsp;
        <?php $querys=mysql_query("select * from tb_car_log where car_number='$myrow[car_number]'");
	$myrows=mysql_fetch_array($querys);
	echo $myrows[car_log];
	?>
    </td>
    <td align="center" bgcolor="#FFFFFF"><?php if($myrows[car_log]==null){
	echo "<a href='indexs.php?lmbs=发货单&ljid=$myrow[id]'>使用该车</a>";
	}else{
		echo "<a href='indexs.php?lmbs=发货单&ljid=$myrow[id]'>预定该车</a>";	}?>
    </td>
  </tr>
  <?php }}else{
  echo "您查找的路线不存在！";
  }
  
  }?>
</table>
</body>
</html>
<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>