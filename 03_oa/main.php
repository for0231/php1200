<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "inc/chec.php";
	include "conn/conn.php";
	include "inc/func.php";
?>
<link href="css/style.css" rel="stylesheet" />
<script src="js/client_js.js"></script>
<table width="765" border="0" cellpadding="0" cellspacing="0" style="margin-top:15px; background-color:#DEEBEF;">
	<tr>
		<td height="36" colspan="2" background="./images/list.jpg" id="list">最新消息</td>
	</tr>
	<tr>
		<td width="50%" align="center" valign="top">
		<table width="100%" height="195" border="0" cellpadding="0" cellspacing="0" class="big_td">
			<tr>
				<td height="20" align="center" valign="middle">企业公告</td>
			</tr>
			<tr>
				<td align="center" valign="top">
				<!--公告-->
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DEEBEF">
	<tr>
		<td width="75" height="25" align="center" valign="middle">发布时间</td>
		<td align="center" valign="middle">标题</td>
	</tr>
<?php
		$sqlstr = "select * from tb_person where u_id = 9 order by id limit 0,5";
		$result = mysql_query($sqlstr,$conn);
		while($rows = mysql_fetch_row($result)){
?>
	<tr>
		<td height=30 align=center valign=middle><?php echo $rows[3]; ?></td>
		<td align="center" valign="middle" style='text-indent: 30px;'><a href="./rsxx/show_message.php?id=<?php echo $rows[0]; ?>" target='_blank'><?php echo $rows[1]; ?></a></td>
	</tr>
<?php
		}
?>
</table>
			  <!-- ----- -->			  </td>
			</tr>
		</table>
	  </td>
		<td align="center" valign="top">
		<table width="100%" height="195" border="0" cellpadding="0" cellspacing="0" class="big_td">
          <tr>
            <td height="20" align="center" valign="middle" scope="col">活动安排</td>
          </tr>
          <tr>
            <td align="center" valign="top">
			<!--活动-->
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DEEBEF">
	<tr>
		<td width="75" height="25" align="center" valign="middle">发布时间</td>
		<td align="center" valign="middle">标题</td>
	</tr>
<?php
		$sqlstr = "select * from tb_person where u_id = 10 order by id limit 0,5";
		$result = mysql_query($sqlstr,$conn);
		while($rows = mysql_fetch_row($result)){
?>
	<tr>
		<td height=30 align=center valign=middle><?php echo $rows[3]; ?></td>
		<td align="center" valign="middle" style='text-indent: 30px;'><a href="./rsxx/show_message.php?id=<?php echo $rows[0]; ?>" target='_blank'><?php echo $rows[1]; ?></a></td>
	</tr>
<?php
		}
?>
</table>
			<!-- ----- -->			</td>
          </tr>
      </table></td>
	</tr>
	<tr>
		<td width="50%" align="center" valign="top">
		  <table width="100%" height="195" border="0" cellpadding="0" cellspacing="0" class="big_td">
            <tr>
              <td height="20" align="center" valign="middle">个人计划</td>
            </tr>
            <tr>
              <td align="center" valign="top">
			  <!--个人计划-->
			  <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DEEBEF">
	<tr>
		<td width="75" height="25" align="center" valign="middle">日期</td>
		<td align="center" valign="middle">内容提要</td>
		<td align="center" valign="middle">类型</td>
	</tr>
<?
	$p_sql = "select * from tb_plan where p_id = ".$_SESSION[id]." order by id desc limit 0,5";
	$p_rst = mysql_query($p_sql,$conn);
	while($p_rows = mysql_fetch_array($p_rst)){
?>
	<tr>
		<td height="30" align="center" valign="middle"><?php echo $p_rows[4]; ?></td>
		<td align="left" valign="middle"><?php echo substr($p_rows[1],0,20).".........<a href='grjh/show_plan.php?id=".$p_rows[0]."' target='_blank'>查看全文</a>"; ?></td>
		<td width="50" align="center" valign="middle"><?php echo read_field($conn,"tb_list","f_name",$p_rows[p_type]); ?></td>
	</tr>
<?php
	}
?>
</table>
			  <!-- --------------------------- -->			  </td>
            </tr>
      </table>		</td>
		<td align="center" valign="top">
		  <table width="100%" height="195" border="0" cellpadding="0" cellspacing="0" class="big_td">
            <tr>
              <td height="20" align="center" valign="middle" scope="col">审核批示</td>
            </tr>
            <tr>
              <td align="center" valign="top">
			  <!--审核批示-->
			  <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DEEBEF">
	<tr>
		<td width="75" height="25" align="center" valign="middle">日期</td>
		<td height="25" align="center" valign="middle">标题</td>
		<td width="50" height="25" align="center" valign="middle">是否批示</td>
		<td width="75" height="25" align="center" valign="middle">操作</td>
	</tr>
<?php
	$a_sql = "select * from tb_iss where p_id = ".$_SESSION[id];
	$a_rst = mysql_query($a_sql,$conn);
	while($a_rows = mysql_fetch_array($a_rst)){
?>
	<tr>
		<td height="30" align="center" valign="middle"><?php echo $a_rows[i_time]; ?></td>
		<td height="30" align="left" valign="middle"><?php echo $a_rows[i_title]; ?></td>
		<td height="30" align="center" valign="middle">
<?php
		if($a_rows[i_state] == 3)
			echo "未审核";
		else
			echo (($a_rows[i_state] == 0)?"通过":"未通过"); 
?>		</td>
		<td height="30" align="center" valign="middle"><a href="shps/modify_issuance.php?id=<?php echo $a_rows[id]; ?>">修改</a>||<a href="shps/del_issuance_chk.php?id=<?php echo $a_rows[id]; ?>">删除</a></td>
	</tr>
<?php
}
?>
</table>
			  <!-- ---------- -->			  </td>
            </tr>
          </table>		</td>
	</tr>
</table>