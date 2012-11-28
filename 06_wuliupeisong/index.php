<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户注册</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<script language="javascript">
  function chkinput(form){
  
    if(form.admin_user.value==""){
	  alert("请输入用户昵称!");
	  form.admin_user.select();
	  return(false);
	}
   if(form.admin_pass.value==""){
	  alert("请输入注册密码!");
	  form.admin_pass.select();
	  return(false);
	}
   return(true);
  }

</script>
<body>
<table width="800" height="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"><table width="635" height="372" border="0" align="center" cellpadding="0" cellspacing="0" background="images/dl.gif">
  <form name="form1" method="post" action="index.php"  onsubmit="return chkinput(this)">
    <tr>
      <td width="94" height="299"></td>
      <td width="106"></td>
      <td width="66"></td>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td height="39"></td>
      <td align="center"><input type="text" name="admin_user" class="inputcss" size="14"></td>
      <td></td>
      <td width="106" align="center"><input type="password" name="admin_pass" class="inputcss" size="14"></td>
      <td width="96"><input type="image" name="imageField" src="images/dl_03.gif"></td>
      <td width="167"><input type="image" name="reset" src="images/dl_04.gif" onClick="form.reset();return false;" class="inputcss" ></td>
    </tr>
    <tr>
      <td height="34"></td>
      <td></td>
      <td></td>
      <td colspan="3"></td>
    </tr>
  </form>
</table></td>
  </tr>
</table>
<?php 
 if($_POST[admin_user]!="" || $_POST[admin_pass]!="")
  {
  	$conn=new mysqli("localhost","root","thbcsl","db_wlgl");
    $conn->query("set names gb2312");   
    $admin_user=$_POST[admin_user];
    $admin_pass=md5($_POST[admin_pass]);
    $sql=$conn->query("call admin_regs('".$admin_user."','".$admin_pass."')");
    $res=$sql->fetch_array(MYSQL_BOTH);
    if($res!=NULL){

	session_register("admin_user");
	session_register("admin_pass");
	   echo "<script>alert('管理员登录成功!');window.location.href='indexs.php';</script>";
	}else{
	    echo "<script>alert('管理员登录失败!');</script>";
	
   
 }
}
?>
</body>
</html>
