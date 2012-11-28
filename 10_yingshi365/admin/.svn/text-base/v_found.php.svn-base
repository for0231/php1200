<?php
	session_start();
	include "conn/conn.php";
	include "inc/chec.php";
	
?>
<table width="558" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="567" height="26" align="center" valign="middle"><font sytle="font-size:13px; ">会 员 信 息 查 询</font></td>
  </tr>
  <tr>
    <td><table width="559" height="94" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="92"><table width="404" height="90" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="402" valign="top"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
             
              <tr>
                <td height="15" colspan="2">&nbsp;</td>
                </tr> <form name="list" method="post" action="<?php $_SERVER['HTTP_REFERER']; ?>">
              <tr>
                <td width="150" height="40" align="right" valign="middle">查 询 方 式 ：</td>
                <td width="250" height="40" align="left" valign="middle"><select name="types" onChange="javascript:list.submit()">
                  <option value="name" <?php  if(($_POST[types]=="name") or ($_POST[types]=="")) echo "selected"; ?>>按用户名</option>
                  <option value="realname" <?php if($_POST[types]=="realname") echo  "selected"; ?>>按真实姓名</option>
				  <option value="grade" <?php if($_POST[types]=="grade") echo "selected"; ?>>按会员等级</option>
                  <option value="counts" <?php if($_POST[types]=="counts") echo "selected"; ?>>按上传数量</option>
                  <option value="sex" <?php if($_POST[types]=="sex") echo "selected" ?>>按性别</option>
                </select></td>
              </tr> </form>
			  <form name="list1" method="post" action="v_found.php">
<?php switch ($_POST[types]){ 
			case "":
				names() ;
				break;
			case "name":
				 names();
				 break;
			case "realname":
				 realname();
				 break; 
			case "grade":
				 grade();
				 break;
			case "counts":
				 counts();
				 break;
			case "sex":
				 sex();
				 break;
			default:
				 names();
				 break;
		}
?> 
				<input name="types1" type="hidden" value="<?php if($_POST[types]=="") echo "name"; else echo $_POST[types]; ?>">
				<input type="hidden" name="action" value="search">
              <tr>
                <td height="30" colspan="2" align="center" valign="middle">
                    <input name="Submit" type="submit" class="submit" value="  查  询  ">
                    <input name="Submit2" type="button" class="submit" value="  返  回  " onClick="javascript:top.window.close()"></td>
                </tr> </form>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
 function names(){
?>
              <tr>
                <td height="40" align="right" valign="middle">                  
                  用 户 名 ： </td>
                <td height="40"><input name="keyword" type="text" id="name"></td>
              </tr>
<?php
}
function realname(){
?>
              <tr>
                <td height="40" align="right" valign="middle">真 实 姓 名 ：</td>
                <td height="40"><input name="keyword" type="text" id="realname"></td>
              </tr>
<?php
}
function grade(){
?>
<tr>
<td height="40" align="right" valign="middle">会 员 等 级 ：</td>
                <td height="40">
                  <input name="keyword" type="radio" value="普通会员" checked>
                  普通会员
                    <input type="radio" name="keyword" value="高级会员"> 
                    高级会员</td></tr>
<?php
}
function counts(){
?>
              <tr>
                <td height="40" align="right" valign="middle">上 传 数 量 ：</td>
                <td height="40">
					<input name="keyword" type="text" id="name">以内
                  </td>
              </tr>
<?php
}
function sex(){
?>
              <tr>
                <td height="40" align="right" valign="middle">性 别 ：</td>
                <td height="40">
                  <input type="radio" name="keyword" value="man"> 
                  男
                  <input name="keyword" type="radio" value="male" checked>
女                  </td>
              </tr>
<?php
}
?>
<?php if($_POST[action]=="search"){
?>
	<script language="javascript">
		top.opener.location="main.php?action=member&types=<?php echo $_POST[types1]; ?>&key=<?php echo $_POST[keyword]; ?>";
		top.window.close();
	</script>
<?php } ?>;