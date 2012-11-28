<?php session_start();
if($_SESSION[admin_user]==true){
include("../conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
-->
</style>
</head>
<body>
<form name="form1" method="post" action="index.php?htgl=考题信息管理" >
<table width="685" height="35" border="0" cellpadding="0" cellspacing="1" bgcolor="#5D554A">
  
  <tr bgcolor="#DDDDDD">
    <td width="232" align="center"><span class="STYLE1">考题类别</span></td>
    <td width="436">&nbsp;
      <select name="kt_lb" id="kt_lb">
	  <?php  $query=mssql_query("select * from tb_ktlb");
	while($myrow=mssql_fetch_array($query)){
	?>
        <option value="<?php echo $myrow[online_ktlb];?>"><?php echo $myrow[online_ktlb];?></option>
	    <?php }?>
    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <input type="submit" name="Submit" value="考题查找" /></td></tr>
</table>
</form>

<table width="682" height="168" border="0" cellpadding="0" cellspacing="1" bgcolor="#5D554A">
  
  <?php $query=mssql_query("select * from tb_kt where kt_lb='$kt_lb'");
			while($myrow=mssql_fetch_array($query)){  
  ?>
<form name="form2" method="post" action="ktxx_gl_ok.php">
  <tr>
    <td width="112" height="27" align="center" bgcolor="#DDDDDD" class="STYLE1">考题类别</td>
    <td width="117" align="center" bgcolor="#DDDDDD" class="STYLE1"><input name="kt_lb" type="text" value="<?php echo $myrow[kt_lb];?>" size="8"></td>
    <td width="180" align="center" bgcolor="#DDDDDD" class="STYLE1">考题类型
    <input name="kt_lx" type="text" value="<?php echo $myrow[kt_lx];?>" size="10"></td>
    <td width="148" align="center" bgcolor="#DDDDDD" class="STYLE1">分数
    <input name="kt_fs" type="text" value="<?php echo $myrow[kt_fs];?>" size="5"></td>
    <td width="99" rowspan="4" align="center" bgcolor="#FFFFFF" class="STYLE1">
            <input type="hidden" name="kt_id" value="<?php echo $myrow[kt_id]?>">

<input type="submit" name="Submit2" value="修改">

      /<input type="submit" name="Submit3" value="删除"></td>
  </tr>
  <tr>
    <td height="43" align="center" bgcolor="#DDDDDD" class="STYLE1">考题内容</td>
    <td colspan="3" align="center" bgcolor="#FFFFFF" class="STYLE1"><textarea name="kt_nr" cols="60" rows="5"><?php echo $myrow[kt_nr];?></textarea></td>
  </tr>
  <tr>
    <td height="46" align="center" bgcolor="#DDDDDD" class="STYLE1">考题答案</td>
    <td colspan="3" align="center" bgcolor="#FFFFFF" class="STYLE1"><textarea name="kt_daan" cols="60" rows="5"><?php echo $myrow[kt_daan];?></textarea></td>
  </tr>
  <tr>
    <td height="33" align="center" bgcolor="#DDDDDD" class="STYLE1">考题正确答案</td>
    <td colspan="3" align="center" bgcolor="#FFFFFF" class="STYLE1"><textarea name="kt_zqdaan" cols="60" rows="5"><?php echo $myrow[kt_zqdaan];?></textarea></td>
  </tr></form>
  <?php }?>
</table>
      
</body>
</html>

<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='checkadmin.php';</script>";
}

?>