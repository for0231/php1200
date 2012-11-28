<?php
	session_start();
	include "conn/conn.php";
?>
<script src="js/chk.js" language="javascript"></script>
<link rel="stylesheet" href="css/style.css" />
<center>
<?php
	include "top.php";				//banner
?>
<table border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="886" height="32" align="center" valign="middle" background="images/l_list.jpg">
		<?php
			if($_GET[action] == "audio"){
				$s_sql = "select id,name from tb_audiolist where grade = '2'";
				
			}
			else if($_GET[action] == "video"){
				$s_sql = "select id,name from tb_videolist where grade = '2'";
			}
			else{
				$s_sql = "";
			}
			if($s_sql != ""){
				echo "<a href='?action=$_GET[action]'>全部</a>";
				echo "&nbsp;&nbsp;&nbsp;";
				$s_rst = $conn->execute($s_sql);
				while(!$s_rst->EOF){
					echo "<a href='?action=$_GET[action]&style=".urlencode($s_rst->fields[1])."'>".$s_rst->fields[1]."</a>";
					echo "&nbsp;&nbsp;&nbsp;";
					$s_rst->movenext();
				}
			}
		?>		</td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="265" align="center" valign="top">
<?php
	include "left.php";				//登录、搜索框
?>
	</td>
    <td width="605" align="center" valign="top">
<!-- 列表-->
<?php
	if($_GET[action] == "audio"){
		if($_GET[style] == ""){
			$l_sqlstr = "select id,style,name,actor,remark,address from tb_audio order by id";
			$l_name = "影视大棚"; 
		}
		else if($_GET[style] == "new"){
			$l_sqlstr = "select id,style,name,actor,remark,address from tb_audio where bool = '1' order by id";
			$l_name = "最新影视";
		}
		else{
			$l_sqlstr = "select id,style,name,actor,remark,address from tb_audio where style='$_GET[style]' order by id";
			$l_name = "$_GET[style]";
		}
	
	}
	else if($_GET[action] == "video"){
	 	if($_GET[style] == ""){
			$l_sqlstr = "select id,style,name,actor,remark,address from tb_video order by id";
			$l_name = "音乐特区";
		}
		else{
			$l_sqlstr = "select id,style,name,actor,remark,address from tb_video where style='$_GET[style]' order by id";
			$l_name = "$_GET[style]";
		}
	}
	else if($_GET[action] == "dot"){
		$l_sqlstr = "select id,style,name,actor,remark,address from tb_video order by id" ;
		$l_name = "点歌专区";
	}
	else{
		echo "请重新链接";
		exit();
	}
?>
		<table width="605" border="0" cellspacing="0" cellpadding="0" class="right_table">
			<tr>
				<td height="30" colspan="6" align="center" valign="middle" background="images/new_file_left.jpg"><div style="font-size:15px; color:#ffffff;"><?php echo $l_name; ?></div></td>
			</tr>
			<tr>
				<td width="100" height="25" align="center" valign="middle"><?php echo (($_GET[action] == "audio")?"影视分类":"歌曲分类"); ?></td>
				<td width="25%" align="center" valign="middle"><?php echo (($_GET[action] == "audio")?"电影名称":"歌曲名称"); ?></td>
				<td width="28%" align="center" valign="middle"><?php echo (($_GET[action] == "audio")?"主演":"主唱"); ?></td>
				<td width="75" align="center" valign="middle"><?php echo (($_GET[action] == "audio")?"在线观看":"在线试听"); ?></td>
				<td width="75" align="center" valign="middle"><?php echo (($_GET[action] == "dot")?"点播":"下载"); ?></td>
				<td width="75" align="center" valign="middle">介绍</td> 
			</tr>
<?php
		$l_rst = $conn->execute($l_sqlstr);
		while(!$l_rst->EOF){
?>
			<tr onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
				<td height="25" align="right" valign="middle" ><a href="#action=<?php echo $_GET[action]; ?>&style=<?php echo urlencode($l_rst->fields[1]); ?>" >【<?php echo $l_rst->fields[1]; ?>】</a></td>
				<td align="center" valign="middle"><?php echo $l_rst->fields[2]; ?></td>
				<td align="center" valign="middle"><?php echo $l_rst->fields[3]; ?></td>
				<td align="center" valign="middle">
<?php
	if(isset($_SESSION[name])){
?> 
				<a href="#" onclick="javascript:Wopen=open('operation.php?action=<?php echo (($_GET[action] == "audio")?"see":"listen");?>&id=<?php echo $l_rst->fields[5]; ?>','','height=700,width=665,scrollbars=no');">
				<img src="images/online_icon.jpg" width="21" height="20" border="0" alt="在线播放"></a>
<?php
	}
?>
</td>
				<td align="center" valign="middle">
<?php 
	if(isset($_SESSION[name])){
			if($_GET[action] == "dot"){
?>
			<a href='#' onclick=javascript:Wopen=open('operation.php?action=give&id=<?php echo $l_rst->fields[0]; ?>','','height=700,width=665,scrollbars=no')><img src=images/tv_icon.jpg width=15 height="13" border="0" alt="点播" /></a>
<?php
			}
			if($_SESSION[grades] == "高级会员"){
			if($_GET[action] == "audio"){
?>
			<a href="download.php?id=<?php echo $l_rst->fields[5] ?>&action=audio"><img src=images/down.jpg width=20 height=18 border=0 alt=下载/></a>
<?php
			}else if($_GET[action] == "video"){
?>
			<a href="download.php?id=<?php echo $l_rst->fields[5] ?>&action=video"><img src=images/down.jpg width=20 height=18 border=0 alt=下载/></a>
<?php
			}
		}
	}
?></td>
				<td align="center" valign="middle"><a href="#" onclick="javascript:Wopen=open('operation.php?action=<?php echo (($_GET[action] == "audio")?"intro":"v_intro");?>&id=<?php echo $l_rst->fields[0]; ?>','','height=700,width=665,scrollbars=no');"><img src="images/show_icon.jpg" width="20" height="20" border="0" alt="介绍"></a></td>
			</tr>
<?php			
			$l_rst->movenext();
		}
?>
		</table>
<!------------------------------>
	</td>
  </tr>
</table>
</center>

