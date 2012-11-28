<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>职员登录</title>
<link href="css/style.css" rel="stylesheet" />
<script src="js/client_js.js"></script>
<? include "conn/conn.php"; ?>
<style type="text/css">
<!--
.STYLE1 {font-weight: bold}
-->
</style>
</head>
<body onload="document.login.username.focus();">
<center>
<form id="login" name="login" method="post" action="index_ok.php">
<table width="100%" height="620" border="0" cellpadding="0" cellspacing="0" background="images/bg_02.gif">
 	<tr>
		<td colspan="3" height="150">&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td width="324" height="204" align="center" valign="middle">
		<table width="324" height="204" border="0" cellpadding="0" cellspacing="0" background="images/bg_03.jpg">
      		<tr>
        		<td height="65" colspan="2" align="center" valign="middle">&nbsp;</td>
       		</tr>
      		<tr>
      		  <td width="140" height="25" align="right" valign="middle"><span id="lg"><strong>用户名称：</strong></span></td>
   		      <td width="175" align="left" valign="middle"><input name="username" type="text" class="STYLE1" id="username" size="15" /></td>
      		</tr>
      		<tr>
       			<td height="25" align="right" valign="middle"><span id="lg"><strong>用户密码：</strong></span></td>
      			<td align="left" valign="middle"><input name="pwd" type="password" id="pwd" size="15" /></td>
      		</tr>
	  		<tr>
				<td height="25" align="right" valign="middle"><span id="lg"><strong>用户组：</strong></span></td>
        		<td align="left" valign="middle"><span style="font-weight: bold">
        		  <select name="u_group" style=" width:115px;">
        		    <?php
					$sqlstr = "select * from tb_group";
					$result = mysql_query($sqlstr,$conn);
					while($rows = mysql_fetch_row($result)){
						echo "<option value=".$rows[0].">".$rows[1]."</option>";
					}
				?>
      		    </select>
      		  </span> </td>
	  		</tr>
      		<tr>
        		<td height="64" colspan="2" align="center" valign="middle">
				  <strong>
				<input type="hidden" name="action" value="login" />
				<input type="submit" name="login" id="login" value="" onclick="return chk_lg();"/>
&nbsp;&nbsp;&nbsp; 
       		    <input type="reset" name="reset" id="reset" value="" />
			      </strong></td>
      		</tr>
    	</table>
	</td>
	<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3" height="155">&nbsp;</td>
	</tr>
 </table>
    
  </form>
</center>
</body>
</html>
