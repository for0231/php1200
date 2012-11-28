<table width="635" height="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <script language="javascript">
		     function chkinput(form){
			   if(form.title.value==""){
			     alert("请输入留言主题！");
			     form.title.focus();
				 return(false);
			   }
			   if(form.type.value==""){
			     alert("请选择留言类型！");
			     form.type.focus();
				 return(false);
			   }
			   if(form.content.value==""){
			     alert("请输入留言内容！");
			     form.content.focus();
				 return(false);
			   }
			   if(form.xym.value==""){
			     alert("请输入效验码！");
			     form.xym.focus();
				 return(false);
			   }
			   
			  return(true);   
			   
			 }
		   
		   </script>
  <form name="form1" method="post" action="saveleaveword.php" onsubmit="return chkinput(this)">
    <tr>
      <td width="111" height="30"><div align="center">主&nbsp;&nbsp;题：</div></td>
      <td colspan="3"><input type="text" name="title" size="55" class="inputcss"></td>
    </tr>
    <tr>
      <td height="30"><div align="center">类&nbsp;&nbsp;别：</div></td>
      <td height="30" colspan="3"><select name="type">
        <option selected="selected" value="">请选择</option>
        <option value="1">我的留言</option>
        <option value="2">我的建议</option>
      </select>
      </td>
    </tr>
    <tr>
      <td height="130"><div align="center">内&nbsp;&nbsp;容：</div></td>
      <td height="30" colspan="3"><textarea name="content" rows="8" cols="65"></textarea></td>
    </tr>
    <tr>
      <td height="30"><div align="center">效验码：</div></td>
      <td width="69" height="30"><img src="xym.php"></td>
      <td width="184"><input type="text" name="xym" size="5"></td>
      <td width="271"><input name="submit" type="submit" value="提交" />
        &nbsp;&nbsp;
        <input name="reset" type="reset" value="重写" /></td>
    </tr>
  </form>
</table>
