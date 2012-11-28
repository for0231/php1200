<?php
	session_start();
	include "conn/conn.php";
?>
<script src="js/chk.js" language="javascript"></script>
<link rel="stylesheet" href="css/style.css" />
<center>
<?php
	include "top.php";			//banner
?>
	<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="265" align="center" valign="top">
<?php
	include "left.php";			//登录、搜索框
?>
	</td>
    <td align="center" valign="top">
<!---->
<table width="605" border="0" cellspacing="0" cellpadding="0" class="right_table">
        <tr>
          <td height="30" colspan="6" align="center" valign="middle" background="images/new_file_left.jpg" style=" font-size:14px; color:#FFFFFF;">查询结果</td>
        </tr>
<?php
if($_POST[action] == "l_found"){
?>
		<tr>
			<td width="51" height="20" align="center" valign="middle">类别</td>
		    <td width="225" align="center" valign="middle" ><?php echo (($_POST[m_type] == "audio")?"电影名称":"歌曲名称"); ?></td>
		    <td width="128" align="center" valign="middle" ><?php echo (($_POST[m_type] == "audio")?"主演":"主唱"); ?></td>
		    <td width="57" align="center" valign="middle" ><?php echo (($_POST[m_type] == "audio")?"在线观看":"在线试听"); ?></td>
		    <td width="60" align="center" valign="middle" >下载</td>
			<td width="84" align="center" valign="middle" >介绍</td>
		</tr>
<?php
		$l_sqlstr = "select id,style,name,actor,remark,address from tb_".$_POST[m_type]." where name like '%".$_POST[k_word]."%'";
		$l_rst = $conn->execute($l_sqlstr);
		while(!$l_rst->EOF){
?>
        <tr onmouseover="this.style.backgroundColor='#E8FEFF'" onmouseout="this.style.backgroundColor=''" onchange="k_change();">
          <td height="30" align="center" valign="middle"><?php echo $l_rst->fields[1]; ?></td>
		  <td  align="center" valign="middle"><?php echo $l_rst->fields[2]; ?></td>
		  <td  align="center" valign="middle"><?php echo $l_rst->fields[3]; ?></td>
		  <td  align="center" valign="middle">
<?php
	if(isset($_SESSION[name])){
?> 
				<a href="#" onclick="javascript:Wopen=open('operation.php?action=<?php echo (($_POST[m_type] == "audio")?"see":"listen");?>&id=<?php echo $l_rst->fields[5]; ?>','','height=700,width=665,scrollbars=no');">
		  <img src="images/online_icon.jpg" height="20" width="20" border="0"  /></a>
<?php
	}
?>
</td>
		  <td align="center" valign="middle">
<?php
			if($_SESSION[grades] == "高级会员"){
			if($_POST[m_type] == "audio"){
?>
		<a href="download.php?id=<?php echo $l_rst->fields[5] ?>&action=audio">
		  <img src="images/downall_icon.jpg" height="20" width="20" border="0"  /></a>
<?php
			}else if($_POST[m_type] == "video"){
?>
		<a href="download.php?id=<?php echo $l_rst->fields[5] ?>&action=video">
		  <img src="images/downall_icon.jpg" height="20" width="20" border="0"  /></a>
<?php
			}}
?>
		  </td>
		  <td  align="center" valign="middle"><a href="#" onclick="javascript:Wopen=open('operation.php?action=<?php echo (($_POST[m_type] == "audio")?"intro":"v_intro");?>&id=<?php echo $l_rst->fields[0]; ?>','','height=700,width=665,scrollbars=no');"><img src="images/show_icon.jpg" height="20" width="20" border="0" alt="详细介绍" /></a></td>
		</tr>
<?php
			$l_rst->movenext();
		}
?>
      </table>
<!---->
	</td>
  </tr>
</table>
<?php
}else if($_GET[action] == "high"){
?>
	<tr>
		<td height="830" valign="top"><table width="540" height="838" border="0" align="center" cellpadding="0" cellspacing="0" >
	<tr>
		<td valign="top"><table width="530" border="0" align="center" cellpadding="0" cellspacing="0">

<?php
if($_SESSION[seltype]=="Audio"){
?>
<tr>
	<td width="34" height="20"><div align="center"></div></td>
	<td width="75"><div align="center">类别</div></td>
	<td width="129"><div align="center">视频数据名称</div></td>
	<td width="161"><div align="center">主要演员 </div></td>
	<td width="62"><div align="center">在线观看</div></td>
	<td width="38"><div align="center">下载</div></td>
	<td width="31"><div align="center">详细</div></td>
</tr>
<?Php
	}else{
?>
<tr>
	<td width="34" height="20"><div align="center"></div></td>
	<td width="75"><div align="center">类别</div></td>
	<td width="129"><div align="center">音乐数据名称</div></td>
	<td width="161"><div align="center">歌手姓名 </div></td>
	<td width="62"><div align="center">在线观看</div></td>
	<td width="38"><div align="center">下载</div></td>
	<td width="31"><div align="center">详细</div></td>
</tr>
<?php
}
	$h_sql=$_SESSION[sql];
	$h_rst = $conn->execute($h_sql);
while(!$h_rst->EOF){
?>
<tr>
	<td height="20"><div align="center"></div></td>
	<td><div align="center"><?php echo $h_rst->fields[1]; ?></div></td>
	<td><div align="center"><?php echo $h_rst->fields[2]; ?></div></td>
	<td><div align="center"><?php echo $h_rst->fields[3]; ?></div></td>
	<td><div align="center">
<?php
	if(isset($_SESSION[name])){
?> 
				<a href="#" onclick="javascript:Wopen=open('operation.php?action=<?php echo (($_GET[type] == "audio")?"see":"listen");?>&id=<?php echo $h_rst->fields[5]; ?>','','height=700,width=665,scrollbars=no');">
	<img src="images/online_icon.jpg" width="21" height="20" border="0"></a>
<?php
}
?>
	</div></td>
	<td><div align="center">
<?php
			if($_SESSION[grades] == "高级会员"){
			if($_GET[type] == "audio"){
?>
		<a href="download.php?id=<?php echo $h_rst->fields[5] ?>&action=audio">
		  <img src="images/downall_icon.jpg" height="20" width="20" border="0"  /></a>
<?php
			}else if($_GET[type] == "video"){
?>
		<a href="download.php?id=<?php echo $h_rst->fields[5] ?>&action=video">
		  <img src="images/downall_icon.jpg" height="20" width="20" border="0"  /></a>
<?php
			}}
?>
	</div></td>
	<td><div align="center">
<a href="#" onclick="javascript:Wopen=open('operation.php?action=<?php echo (($_GET[type] == "audio")?"intro":"v_intro");?>&id=<?php echo $h_rst->fields[0]; ?>','','height=700,width=665,scrollbars=no');"><img src="images/show_icon.jpg" width="20" height="20" border="0" ></a>
	</div></td>
</tr>
<?php
	$h_rst->movenext();
	}
?>
</table></td>
</tr>
</table></td>
</tr>
</table>
<?php
}
?>