<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/style.css" rel="stylesheet">
<script language="javascript">
function checkform(form){
	for(i=0;i<form.length;i++){
		if(form.elements[i].value==""){
			alert("请将发布的企业广告信息填写完整！");
			form.elements[i].focus();
			return false;
		}
	}
}
</script>
<table width="776" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="32" background="images/right_line.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您现在的位置：易查供求信息网&nbsp;&gt;&nbsp;后台管理系统</td>
  </tr>
  <tr>
    <td height="32" background="images/right_top.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="488" align="center" valign="top" background="images/right_middle.gif">
        <br>
        <br>
        <table width="563" height="303" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="563" height="303" valign="top" bgcolor="#FFFFFF">
              <form name="form1" method="post" action="advertising_ok.php">
                <table width="563" border="0" cellspacing="0" cellpadding="0">
                  <tr background="Images/mianfei.gif">
                    <td height="27" colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="130" height="50" align="right">广告标题：</td>
                    <td width="433" height="30"><input name="title" type="text" id="title" size="66"></td>
                  </tr>
                  <tr>
                    <td height="30" align="right">广告内容：</td>
                    <td height="30">
                      <textarea name="content" cols="55" rows="10" id="content"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td height="30" align="right">是否推荐：                    </td>
                    <td height="30"><input name="flag" type="checkbox" class="input1" id="flag" value="1" checked>
                    </td>
                  </tr>
                  <tr align="center">
                    <td height="80" colspan="2">
                      <input name="imageField" type="image" class="input1" src="images/fa.jpg" width="145" height="46" border="0" onClick="return checkform(form);">
                    </td>
                  </tr>
                </table>
            </form></td>
          </tr>
    </table></td>
  </tr>
  <tr>
    <td height="32" background="images/right_bottom.gif">&nbsp;</td>
  </tr>
</table>
