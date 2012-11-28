<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<link href="css/style.css" rel="stylesheet">
<script language="javascript">
function checkform(form){
	for(i=0;i<form.length;i++){
		if(form.elements[i].value==""){
			alert("请将发布信息填写完整！");
			form.elements[i].focus();
			return false;
		}
	}
}
</script>
<table width="563" height="407" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="563" height="407" valign="top" bgcolor="#FFFFFF">
      <form name="form1" method="post" action="release_ok.php" >
        <table width="563" border="0" cellspacing="0" cellpadding="0">
          <tr background="Images/mianfei.gif">
            <td height="27" colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td height="24" colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td width="130" height="30" align="right">信息类别：</td>
            <td width="433" height="30"><select name="type">
              <option value="招聘信息">-招聘信息-</option>
              <option value="求职信息" selected>-求职信息-</option>
              <option value="培训信息">-培训信息-</option>
              <option value="家教信息">-家教信息-</option>
              <option value="房屋信息">-房屋信息-</option>
              <option value="车辆信息">-车辆信息-</option>
              <option value="求购信息">-求购信息-</option>
              <option value="出售信息">-出售信息-</option>
              <option value="招商引资">-招商引资-</option>
              <option value="公寓信息">-公寓信息-</option>
              <option value="寻人/物启示">-寻人/物启示-</option>
            </select>
&nbsp;<span class="style1">*&nbsp;请正确选择您要发布的信息类别</span></td>
          </tr>
          <tr>
            <td height="30" align="right">信息标题：</td>
            <td height="30"><input name="title" type="text" id="title" size="50"></td>
          </tr>
          <tr>
            <td height="30" align="right">信息内容：</td>
            <td height="30">
              <textarea name="content" cols="50" rows="8" id="content"></textarea>
            </td>
          </tr>
          <tr>
            <td height="30" align="right">联&nbsp;系&nbsp;人：</td>
            <td height="30"><input name="linkman" type="text" id="linkman"></td>
          </tr>
          <tr>
            <td height="30" align="right">联系电话：</td>
            <td height="30"><input name="tel" type="text" id="tel"></td>
          </tr>
          <tr align="center">
            <td height="80" colspan="2">
              <input name="imageField" type="image" class="input1" src="Images/fa.jpg" width="145" height="46" border="0" onClick="return checkform(form);">
            </td>
          </tr>
        </table>
      </form>
   </td>
  </tr>
</table>
