<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>编辑公告</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php
 include("conn/conn.php");
 $sql=mysql_query("select * from tb_gonggao where id=".$_GET[id]."",$conn);      
 $info=mysql_fetch_array($sql);


?>
<script language="javascript">
  function chkinput(form)
   {
     if(form.title.value=="")
	 {
	   alert("请输入公告主题!");
	   form.title.select();
	   return(false);
	 }
     if(form.content.value=="")
	 {
	   alert("请输入公告内容!");
	   form.content.select();
	   return(false);
	 }
	 return(true);
   }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="750" border="0" align="center" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">查看修改公告</div></td>
  </tr>
  <tr>
    <td bgcolor="#666666"><table width="750" border="0" align="center" cellpadding="0" cellspacing="1">
       <form name="form1" method="post" action="saveeditgonggao.php" onSubmit="return chkinput(this)">
	  
	  <tr>
        <td width="100" height="25" bgcolor="#FFFFFF"><div align="center">公告主题</div></td>
        <td width="647" height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="title" size="50" class="inputcss" value="<?php echo $info[title];?>"></div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">公告内容：</div></td>
        <td bgcolor="#FFFFFF"><div align="left"><textarea name="content" cols="60" rows="8" class="inputcss"><?php echo $info[content];?></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="hidden" name="id" value="<?php echo $_GET[id];?>"><input type="submit" value="更改" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="取消更改" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>
