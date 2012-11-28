<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	session_start();
	//include "inc/chec.php";
	include "conn/conn.php";
	include "inc/func.php";
?>
<link href="css/style.css" rel="stylesheet" />
<script src="js/client_js.js"></script>
<script language=JavaScript>
 document.onclick = clickHandler;
</script>
<table border="0" cellpadding="0" cellspacing="0" width="203" height="509" background="images/left.jpg">
	<tr>
		<td width="10">&nbsp;</td>
		<td height="20"></td>
	</tr>
	<tr>
		<td>
		<td align="center" valign="top">
		<?php
	$t_result = get_tp($conn);
	$num = 0;
	while($t_rows = mysql_fetch_row($t_result)){
		echo "<div id=div".$num." style='position:relative; background-color:#DEEBEF; width:190; height:25; '>";
		echo "<span id=div".$num." class = Outline style='hand:hand;'></span>";
		echo "<label id=div".$num." class = Outline style='cursor:hand;'>";
		echo "<img src=images/jia.gif id=div".$num."img name=div".$num."img/>".$t_rows[0]."</label>";
		//输出二级菜单
		$sqlstr = "select * from tb_list where f_type='".$t_rows[0]."'";
		$result = mysql_query($sqlstr,$conn);
		echo "<div id=div".$num."details style=\"display:None; position:relative; left:35;\">";
		while($rows = mysql_fetch_row($result)){
			if($rows[4] == "0"){
				echo "<img src=images/folder.gif /><U><a href='".$rows[3]."?u_id=".$rows[0]."' target=mainFrame>".$rows[1]."</a></U>";
				echo "<br/>";
			}else{
				$bool = false;
				$g_list = split(",",$rows[4]);
				for($i=0;$i<count($g_list);$i++){
					if($_SESSION[u_group] == $g_list[$i]){
						$bool = true;
						break;
					}
				}
				if($rows[5] != "1"){
					$p_list = split(",",$rows[5]);
					for($i=0;$i<count($p_list);$i++){
						if($_SESSION[u_name] == $p_list[$i]){
							$bool = true;
							break;
						}
					}
				}
				if($bool){
					echo "<img src=images/folder.gif /><U><a href='".$rows[3]."?u_id=".$rows[0]."' target=mainFrame>".$rows[1]."</a></U>";	
					echo "<br/>";
				}
			}
		}
		echo "</div></div>";
		
		$num++;	
	}
?>	
		</td>
	</tr>
	<tr>
		<td colspan="2" height="54" background="images/left_top.gif">&nbsp;</td>
	</tr>
</table>