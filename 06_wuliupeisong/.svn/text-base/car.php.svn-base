<?php session_start(); 
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
  <tr>   <form name="form2" method="post" action="indexs.php?lmbs=车源信息管理">
  
    <td width="360" height="30" align="right" bgcolor="#FFFFFF">车源信息管理
	
      <select name="select">
	  <option selected="selected"></option>
        <?php 
	  $query="select * from tb_car";
	  $result=mysql_query($query);
	  while($myrow=mysql_fetch_array($result)){
	  ?>
	   <option><?php echo $myrow[car_number]; ?></option>
	  <?php } ?>
      </select>      </td>
    <td width="360" bgcolor="#FFFFFF">&nbsp; <input type="submit" name="Submit3" value="提交"> </td> </form>   
  </tr>
 
</table>
<?php 
	  $querys="select * from tb_car where car_number='$select'";
	  $results=mysql_query($querys);
	 $myrows=mysql_fetch_array($results);
	  ?>
<form name="form1" method="post" action="car_insert_ok.php" onSubmit="javascript:return check_car(form1);">  
<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  
  <tr>
    <td width="80" height="26" align="center" bgcolor="#FFFFFF">姓名：</td>
    <td width="218" bgcolor="#FFFFFF"><input name="username" type="text" id="username" size="25" value="<?php echo $myrows[username];?>" /></td>
    <td width="83" height="22" align="center" bgcolor="#FFFFFF">车牌号码：</td>
    <td width="281" bgcolor="#FFFFFF"><input name="car_number" type="text" id="car_number" size="25" value="<?php echo $myrows[car_number];?>" /></td>
  </tr>
  <tr>
    <td height="22" align="center" bgcolor="#FFFFFF">身份证号：</td>
    <td bgcolor="#FFFFFF"><input name="user_number" type="text" id="user_number" size="28" value="<?php echo $myrows[user_number];?>"/></td>
    <td rowspan="2" align="center" bgcolor="#FFFFFF">车辆描述：</td>
    <td rowspan="2" bgcolor="#FFFFFF"><textarea name="car_content" cols="30" rows="5" id="car_content"><?php echo $myrows[car_content];?></textarea></td>
  </tr>
  <tr>
    <td height="22" align="center" bgcolor="#FFFFFF">电话：</td>
    <td bgcolor="#FFFFFF"><input name="user_tel" type="text" id="user_tel" value="<?php echo $myrows[tel];?>"/></td>
  </tr>
  <tr>
    <td height="22" align="center" bgcolor="#FFFFFF">地址：</td>
    <td bgcolor="#FFFFFF"><textarea name="address" id="address"><?php echo $myrows[address];?></textarea></td>
    <td align="center" bgcolor="#FFFFFF">运输路线：</td>
    <td bgcolor="#FFFFFF"><textarea name="car_road" cols="30" rows="5" id="car_road"><?php echo $myrows[car_road];?></textarea></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td align="right" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="提交" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit2" value="修改"></td>
    <td bgcolor="#FFFFFF"><input type="submit" name="Submit4" value="删除"></td>
  </tr>
</table>
</form>
</body>
</html>
<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>