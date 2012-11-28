<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
include "../conn/conn.php";
include "../inc/chec.php";
include "../inc/func.php";
$l_sql = "select id,l_title,l_content,l_time,is_reply,r_back from tb_lyb order by id desc";
$l_rst = mysql_query($l_sql,$conn);
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<table width="765" border="1" cellpadding="0" cellspacing="0" class="big_td">
	<tr>
		<td height="33" background="../images/list.jpg" id="list"><?php echo read_field($conn,"tb_list","f_name",$_GET[u_id]); ?></td>
	</tr>
</table>
<table width="765" border="0" cellspacing="0" cellpadding="0" bgcolor="#DEEBEF" class="big_td">
<tr>
    <td width="15%" height="30" align="left" valign="middle" scope="col">
	2007-11-15
	</td>
    <td align="center" valign="middle" scope="col">注意事项</td>
    <td width="15%" align="center" valign="middle" scope="col">&nbsp;
	</td>
  </tr>
  <tr>
    <td height="100" colspan="3" align="left" valign="middle" scope="col">
	如果对公司有好的建议或意见，请在这里提出。此处发言，完全为匿名，请不要有任何顾虑~
	<p><font color=red>注意：不允许进行人身攻击。否则删帖!!</font>
	</td>
  </tr>

<?php
	while($l_rows = mysql_fetch_array($l_rst)){
?>
  <tr>
    <td width="15%" height="30" align="left" valign="middle" scope="col">
	<?php echo $l_rows[l_time]; ?>
	</td>
    <td align="left" valign="middle" scope="col">
	主题：<?php echo $l_rows[l_title]; ?>
	</td>
    <td width="15%" align="center" valign="middle" scope="col">
	<?php if(($_SESSION[u_depart]) == "人事部"){ ?>
	<a href="t_back.php?id=<?php echo $l_rows[id]; ?>">回复</a>&nbsp;&nbsp;<a href="del_ly_chk.php?id=<?php echo $l_rows[id]; ?>" onclick="return del_mess()">删除</a>
	<?php }
	 ?>&nbsp;
	</td>
  </tr>
  <tr>
    <td height="75" colspan="3" align="left" valign="middle" scope="col" >
	<?php echo $l_rows[l_content]; ?>
	</td>
  </tr>
<?php
	if($l_rows[is_reply] == 1){
?>
  <tr>
  	<td height="25" colspan="3" align="left" valign="middle" headers="50" scope="col" onmouseover="this.style.backgroundColor='#FFEEBC'" onmouseout="this.style.backgroundColor=''">
	<font color="#FF0000">
	<?php
		echo $l_rows[r_back];
	?>
	</font>
	</td>
  </tr>
<?php
	}
}
?>
</table>
<table border="0" cellspacing="0" cellpadding="0" bgcolor="#DEEBEF">
<form id="lyb" name="lyb" method="post" action="lyb_chk.php">
  <tr>
    <td width="10%" height="30" align="right" valign="middle" scope="col">主题：</td>
    <td align="left" valign="middle" scope="col"><input type="text" name="l_title" size="30"></td>
  </tr>
  <tr>
  	<td align="right" valign="middle" scope="col">内容：</td>
    <td height="150" align="left" valign="middle"><textarea name="l_content" cols="75" rows="10"></textarea></td>
    </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle">
	<input type="submit" value="提交" onclick="return add_lyb();">&nbsp;&nbsp;<input  type="reset" value="重置">
	</td>
  </tr>
 </form>
</table>
</center>