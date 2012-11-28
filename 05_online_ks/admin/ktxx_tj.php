<?php session_start();
if($_SESSION[admin_user]==true){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
.style2 {color: #CC0066}
.STYLE1 {font-size: 12px}
-->
</style>
</head>
<body>
<form name="form2" method="post" action="ktxx_tj_ok.php">
<table width="744" height="41" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#676767">
  <tr>
    <td align="center" bgcolor="#EEEEEE"><span class="STYLE1">考题类别</span></td>
    <td width="68" bgcolor="#FFFFFF"><span class="STYLE1">
      <select name="kt_lb" id="kt_lb">
        <?php  $query=mssql_query("select * from tb_ktlb");
	while($myrow=mssql_fetch_array($query)){
	?>
        <option value="<?php echo $myrow[online_ktlb];?>"><?php echo $myrow[online_ktlb];?></option>
        <?php }?>
      </select>
    </span> </td>
    <td width="166" bgcolor="#FFFFFF"><span class="STYLE1">所属套题
        <select name="kt_small_lb" id="kt_small_lb">
          <option value="第一套题">第一套题</option>
          <option value="第二套题">第二套题</option>
          <option value="第三套题">第三套题</option>
          <option value="第四套题">第四套题</option>
          </select>
      </span></td>
    <td width="151" bgcolor="#FFFFFF"><span class="STYLE1">考题类型      
        <select name="kt_lx" id="kt_lx">
          <option value="２">简答</option>
          <option value="３">论述</option>
          <option value="０">单选</option>
          <option value="１">多选</option>
        </select>
    </span></td>
    <td width="211" bgcolor="#FFFFFF"><span class="STYLE1">分数
        <input name="kt_fs" type="text" id="kt_fs" size="10">
    </span></td>
  </tr>
  <tr>
    <td width="114" align="center" bgcolor="#EEEEEE"><span class="STYLE1">添加考题内容</span></td>
    <td colspan="4" bgcolor="#FFFFFF"><span class="STYLE1">
      <textarea name="kt_nr" cols="60" rows="5" id="kt_nr"></textarea>
    </span> </td>
  </tr>
  <tr>
    <td align="center" bgcolor="#EEEEEE"><span class="STYLE1">考题答案</span></td>
    <td colspan="4" bgcolor="#FFFFFF"><span class="STYLE1">
      <textarea name="kt_daan" cols="60" rows="5" id="kt_daan"></textarea>
      <span class="style2">选择题请使用*      分隔答案</span></span></td>
    </tr>
  <tr>
    <td align="center" bgcolor="#EEEEEE"><span class="STYLE1">考题正确答案</span></td>
    <td colspan="4" bgcolor="#FFFFFF"><span class="STYLE1">
      <textarea name="kt_zqdaan" cols="60" rows="5" id="kt_zqdaan"></textarea>
      <span class="style2">选择题请使用* 分隔答案</span></span></td>
    </tr>
  <tr align="center" bgcolor="#FFFFFF">
    <td colspan="5"><input name="Submit2" type="submit" value="提交考题" /></td>
    </tr>
</table>
</form>
</body>
</html>

<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='checkadmin.php';</script>";
}

?>