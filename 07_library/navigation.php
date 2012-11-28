<?php
session_start();
include("conn/conn.php");
$query=mysql_query("select m.id,m.name,p.id,p.sysset,p.readerset,p.bookset,p.borrowback,p.sysquery from tb_manager as m left join (select * from tb_purview ) as p on m.id=p.id where name='$_SESSION[admin_name]'");
$info=mysql_fetch_array($query);
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<script src="JS/menu.JS"></script>
<div class=menuskin id=popmenu
      onmouseover="clearhidemenu();highlightmenu(event,'on')"
      onmouseout="highlightmenu(event,'off');dynamichide(event)" style="Z-index:100;position:absolute;"></div>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="115" align="right" valign="bottom" background="Images/banner.gif" bgcolor="#FD9C11"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="26" align="right">当前登录的用户：<?php echo $_SESSION[admin_name];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="33" align="right" background="Images/menu_line1.gif" bgcolor="#FD9C11"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="5%"></td>
        <td width="23%"><script type=text/javascript>
		document.write("<span id='labtime' width='120px' Font-Size='9pt'></span>")
		setInterval("labtime.innerText=new Date().toLocaleString()",1000)
		</script></td>
        <td width="70%" align="right"><a href="index.php" class="a1">首页</a> ┊ 
        <?php if($info[sysset]==1){ ?><a  onmouseover=showmenu(event,sysmenu) onmouseout=delayhidemenu()  style="CURSOR:hand"  class="a1">系统设置</a> ┊ <?php }?><?php if($info[readerset]==1){?><a  onmouseover=showmenu(event,readermenu) onmouseout=delayhidemenu()  style="CURSOR:hand" class="a1">读者管理</a> ┊ <?php } ?><?php if($info[bookset]==1){ ?><a href="book.php" class="a1">图书档案管理</a> ┊ <?php }?><?php if($info[borrowback]==1){?><a  onmouseover=showmenu(event,borrowmenu) onmouseout=delayhidemenu() style="CURSOR:hand"class="a1" >图书借还</a> ┊ <?php }?><?php if($info[sysquery]==1){ ?><a  onmouseover=showmenu(event,querymenu) onmouseout=delayhidemenu()  style="CURSOR:hand" class="a1">系统查询</a> ┊ <?php } ?><a  href="pwd_Modify.php" class="a1">更改口令</a> ┊ <a href="safequit.php" class="a1">注销</a></td>
        <td width="2%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
