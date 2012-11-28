<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
	include "../inc/func.php";
//0 下班 1 上班 2 加班签到 3 加班签退 4 病假 5 事假
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<table width="765" border="1" cellpadding="0" cellspacing="0" class="big_td">
	<tr>
		<td height="33" background="../images/list.jpg" id="list">考勤管理</td>
	</tr>
</table>
<table width="765" border="1" cellpadding="0" cellspacing="0" bgcolor="#DEEBEF">
	<tr>
		<td height="25" colspan="8" align="center" valign="middle">
		<a href="#" onclick="javascript:openWin=open('set_time.php' ,'','width=500,height=100,scrollbars=no');">设置时间</a>&nbsp;&nbsp;
		<a href="del_note_chk.php" onclick="return del_mess();">清空记录</A>
		</td>
	</tr>
	<tr>
		<td width="75" height="20" align="center" valign="middle">日期</td>
		<td width="75" height="20" align="center" valign="middle">时间</td>
  		<td width="75" height="20" align="center" valign="middle">职员姓名</td>
		<td width="75" align="center" valign="middle">上班签到</td>
		<td width="75" align="center" valign="middle">下班签退</td>
		<td width="75" align="center" valign="middle">加班签到</td>
		<td width="75" align="center" valign="middle">加班签退</td>
		<td width="75" align="center" valign="middle">病事假</td>
		
	</tr>
<?php
if(!isset($keyword))
{
	$sqlstr = "select * from tb_register order by id";
	$result = mysql_query($sqlstr,$conn);
}
while($rows = mysql_fetch_array($result)){
?>
		<tr>
			<td height="25" align="center" valign="middle">
			<?php
				echo $rows[r_date];
			?>			</td>
			<td height="25" align="center" valign="middle">
			<?php
				echo $rows[r_time];
			?>			</td>
			
			<td height="25" align="center" valign="middle">
			<?php
				echo read_field($conn,"tb_users","u_name",$rows[p_id]);
			?>			</td>
			
			<td align="center" valign="middle">
			<?php 
				if($rows[r_type] == 1)
					echo ($rows[r_state] == 0)?"正点上班":"迟到"; 
				else
					echo "-";
			?>			</td>
			<td align="center" valign="middle">
			<?php 
				if($rows[r_type] == 0)
					echo ($rows[r_state] == 0)?"早退":"正点下班"; 
				else
					echo "-";
			?>			</td>
			<td align="center" valign="middle">
			<?php 
				if($rows[r_type] == 2)
					echo ($rows[r_state] == 0)?"正点加班":"晚点加班";
				else
					echo "-";
			?>			</td>
			<td align="center" valign="middle">
			<?php 
				if($rows[r_type] == 3)
					echo ($rows[r_state] == 0)?"早退":"正点下班";
				else
					echo "-";
			?>			</td>
			<td align="center" valign="middle">
			<?php
				if(($rows[r_type]) == 4 or ($rows[r_type] ==5))
					echo ($rows[r_state] == 0)?"病假":"事假";
				else
					echo "-";
			?>			</td>
		</tr>
<?php		
	}
?>
</table>