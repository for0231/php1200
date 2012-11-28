<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>查看昵称</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<table width="150" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="60">
	
	<div align="center">
	<?php
	echo $_GET[nc];
	 $nc=trim($_GET[nc]);
	 if($nc=="")
	  {
	   echo "请输入用户昵称!";
	  }
	 else
	  { 
	   include_once("conn/conn.php");
	   $sql=mysql_query("select usernc from tb_user where usernc='".$nc."'",$conn);
	   $info=mysql_fetch_array($sql);
       if($info==false)
	    {
		 echo "恭喜您,该昵称未被占用!";
		}
		else
		{
		 echo "对不起,该昵称已被占用!";
		}
		mysql_close($conn);
	 }	
	?>
   </div></td>
  </tr>
  <tr>
    <td height="20"><div align="center"><input type="button" onClick="window.close()" value="关闭"></div></td>
  </tr>
</table>

</body>
</html>
