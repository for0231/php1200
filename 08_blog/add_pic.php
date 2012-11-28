<?php 
	session_start(); 
	include "check_login.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<title>添加图片</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<script src=" JS/menu.JS"></script>
<script language="javascript">
function pic_chk(){
	if(this.myform.tpmc.value == ""){
		alert("图片名称不允许为空");
		this.myform.tpmc.focus();
		return false;
	}
	if(this.myform.file.value == ""){
		alert("请上传图片");
		this.myform.file.focus();
		return false;
	}
}
</script>
<body>
<div class=menuskin id=popmenu 
      onmouseover="clearhidemenu();highlightmenu(event,'on')" 
      onmouseout="highlightmenu(event,'off');dynamichide(event)"
	  style="Z-index:100;position:absolute;">
</div>
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px" align="center"> 
  <TBODY> 
    <TR> <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3> <TABLE 
      style="BACKGROUND-IMAGE: url( images/f_head.jpg); WIDTH: 760px; HEIGHT: 154px" 
      cellSpacing=0 cellPadding=0> <TBODY> 
            <TR> 
              <TD height="110" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD> 
            </TR> 
            <TR> 
              <TD height="29" align="center" valign="middle">
			  <TABLE style="WIDTH: 580px" VERTICAL-ALIGN: text-top; cellSpacing=0 cellPadding=0 align="center">
                  <TBODY>
                    <TR align="center" valign="middle">
					 <TD style="WIDTH: 100px; COLOR: red;">欢迎您:&nbsp;<?php echo $_SESSION[username]; ?>&nbsp;&nbsp;</TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><A 
                  href="index.php"></A><a href="index.php">博客首页</a></TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,productmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >文章管理</a></TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,Honourmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand">图片管理</a></TD>
                      <TD style="WIDTH: 90px; COLOR: red;"><a  onmouseover=showmenu(event,myfriend) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >朋友圈管理</a>  </TD>
                       <?php
					  if($_SESSION[fig]==1){
					   ?>
					   <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,myuser) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >管理员管理</a></TD> 
  					 <?php  
					  }
					  ?>
					  <TD style="WIDTH: 80px; COLOR: red;"><a href="safe.php">退出登录</a></TD>
                    </TR>
                  </TBODY>
              </TABLE>			  </TD> 
            </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
    <TR> 
      <TD colSpan=3 valign="baseline" style="BACKGROUND-IMAGE: url( images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center"><table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="451" align="center" valign="top"><br>
            <table width="640"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="613" height="23" align="right" valign="top">&nbsp;</td><br>
            </tr>
            <tr>
              <td height="223" align="center" valign="top">
			  <table width="380" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
				  <form  name="myform" method="post" action="tptj_ok.php"  enctype="multipart/form-data">
				  <table width="450" border="1" cellpadding="3" cellspacing="1" bordercolor="#D6E7A5">
                      <tr>
                        <td class="i_table" colspan="2">&nbsp;<span class="tableBorder_LTR">添加图片</span></td>
                      </tr>
                      <tr>
                        <td valign="top" align="right" width="28%">图片名称：<br></td>
                        <td width="72%"><input name="tpmc" type="text" id="tpmc" size="40"></td>
                      </tr>
                      <tr>
                        <td align="right" width="28%">上传路径：</td>
                        <td width="72%"><input name="file" type="file" size="23" maxlength="60" >
							
						</td>
                      </tr>
                      <tr align="center">
                        <td colspan="2"><input name="btn_tj" type="submit" id="btn_tj" value="提交" onClick="return pic_chk();">                          &nbsp;
                          <input name="btn_cx" type="reset" id="btn_cx" value="重写"></td>
                        </tr>
                  </table>
				  </form>
				  </td>
                </tr>
              </table></td>
          </tr>
          </table>            </td>
    </tr>
</table></TD> 
    </TR>  
  </TBODY> 
</TABLE> 
</body>
</html>
