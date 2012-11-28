<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<script language="javascript">
function checkit(){
		if(form1.note_content.value==""){
	        alert("请输入短语内容!");
   		    form1.note_category.select();
			return(false);
         }		        		
       if(form1.note_category.value==""){
			alert("请输入短语类别!");
			form1.note_category.select();
			return(false);
		 }
				return(true);				 
}	
</script>
<body>
<table width="440" height="219" border="0" align="center" cellpadding="0" cellspacing="0" background="images/bg_36.gif">
  <tr>
    <td height="40" colspan="2" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="STYLE33">短语信息添加</span></td>
  </tr>
<form name="form1" method="post" action="insert_note_ok.php" onSubmit="javascript: return checkit()"> 
 <tr>
    <td width="123" align="center"><span class="STYLE1">短语内容</span></td>
    <td width="317"><textarea name="note_content" cols="35" rows="5" id="note_content"></textarea></td>
  </tr>
  <tr>
    <td align="center"><span class="STYLE1">短语类别</span></td>
    <td><input name="note_category" type="text" id="note_category" size="28" maxlength="20">
      <span class="STYLE1">*</span></td>
  </tr>
  <tr>
    <td height="47">&nbsp;</td>
    <td><input type="submit" name="Submit" value="提交">
    <input type="reset" name="Submit2" value="重置"></td>
  </tr>
</form>
</table>

</body>
</html>
