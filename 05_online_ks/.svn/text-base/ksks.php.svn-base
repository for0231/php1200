<?php session_start();include("conn/conn.php");
if($_SESSION[online_number]!=""){
$kt_lbes=$_POST[kt_lbes];
$kt_small_lb=$_POST[kt_small_lb];

$query=mssql_query("select * from tb_user where online_number='$_SESSION[online_number]' and online_pt='1'");
$result=mssql_num_rows($query);
if($result==0){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>在线考试系统</title>
<style type="text/css">
<!--
.STYLE4 {color: #FF0000}
.STYLE1 {font-size: 12px}
-->
</style>
<script language=javascript>
function keydown(){
	if(event.keyCode==8){
		event.keyCode=0;
		event.returnValue=false;
		alert("当前设置不允许使用退格键");
	  }if(event.keyCode==13){
		event.keyCode=0;
		event.returnValue=false;
		alert("当前设置不允许使用回车键");
	  }if(event.keyCode==116){
		event.keyCode=0;
		event.returnValue=false;
		alert("当前设置不允许使用F5刷新键");
	  }if((event.altKey)&&((window.event.keyCode==37)||(window.event.keyCode==39))){
		event.returnValue=false;
		alert("当前设置不允许使用Alt+方向键←或方向键→");
	  }if((event.ctrlKey)&&(event.keyCode==78)){
	   event.returnValue=false;
	   alert("当前设置不允许使用Ctrl+n新建IE窗口");
	  }if((event.shiftKey)&&(event.keyCode==121)){
	   event.returnValue=false;
	   alert("当前设置不允许使用shift+F10");
	  }
}
</script>
<script language=javascript>
  function click() {
     event.returnValue=false;
	 alert("当前设置不允许使用右键！");
  }
  document.oncontextmenu=click;
</script>
</head>
<body onkeydown="keydown()">
<table width="750" height="30" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  <tr>
    <td width="165" height=23 align=right nowrap bgcolor="#EEEEEE"><span class="STYLE1">考试时间：</span></td>
    <td width="42" nowrap bgcolor="#EEEEEE"><span class="STYLE1"><font color="#FF0000">20</font>分钟</span></td>
    <td width="58" align="center" nowrap bgcolor="#EEEEEE"><span class="STYLE1">计 时</span></td>
    <td width="193" nowrap bgcolor="#EEEEEE"><span class="STYLE1">
      <script type="text/javascript" src="js/xmlHttpRequest.js"></script>
      <script type="text/javascript">
timer = window.setInterval("ShowTime()",1000); 
function ShowTime(){
	xmlHttp.open("post","showtime.php", true);
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4){
			tet = xmlHttp.responseText;
			document.getElementById("show_time").innerHTML = tet;
		}
	}
	xmlHttp.send(null);
}
        </script>
      </span>
    <div class="STYLE1" id="show_time"></div></td>
    <td width="77" align="center" nowrap bgcolor="#EEEEEE"><span class="STYLE1">剩余时间：
        <script type="text/javascript">
time = window.setInterval("sparetime()",1000); 
function sparetime(){
	xmlHttp.open("post","sparetime.php", true);
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4){
			tet = xmlHttp.responseText;
			document.getElementById("sparetime").innerHTML = tet;
				if(tet=="00:00"){
					form1.submit();
					
				}
		}
	}
	xmlHttp.send(null);
}
        </script>
        </span>
    </td>
    <td width="182" nowrap bgcolor="#EEEEEE"><div class="STYLE1" id="sparetime"></div></td>
  </tr>
</table>
<form name="form1" method="post" action="index.php?online=开始考试">
<table width="750" height="228" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
<tr><td height="20" colspan="2" bgcolor="#EEEEEE" class="STYLE1">&nbsp;&nbsp;单选</td>
  </tr>
<?php 
$query0=mssql_query("select * from tb_kt where kt_lb='$kt_lbes' and kt_lx='0' and kt_small_lb='$kt_small_lb'");
$x=1;
$fen0=0; 
while($myrow0=mssql_fetch_array($query0)){
?>
 <tr>
    <td width="443" height="20" bgcolor="#FFFFFF" class="STYLE1">&nbsp;&nbsp;<?php echo $x.".".$myrow0["kt_nr"]?> </td>
<td bgcolor="#FFFFFF" class="STYLE1"><span class="STYLE4"><?php echo $myrow0[kt_fs];?>分</span></td>
</tr>
<?php 
    $array0=explode("*",$myrow0["kt_daan"]);
           if($_POST[Submit]!=""){
             for($a=0;$a<count($array0);$a++){
             if($array0[$a]!=""){
               if($array0[$a]==$_POST[$myrow0[kt_id]]) {
            	 $str0=$_POST[$myrow0[kt_id]];               
				}
             }
           }
}
    for($a=0;$a<count($array0);$a++){
      if($array0[$a]!=""){
?>
	

  <tr>
    <td height="20" bgcolor="#FFFFFF" class="STYLE1">
	&nbsp;&nbsp;
    <input type="radio" name="<?php echo $myrow0[kt_id];?>" value="<?php echo $array0[$a];?>">
	<?php echo $array0[$a];?>	</td>
    <td bgcolor="#FFFFFF" class="STYLE1"> &nbsp; <?php
if($_POST[$myrow0[kt_id]]==true){
     if($a==0)    
      if($myrow0["kt_zqdaan"]==$str0){
        echo "您输入的答案&nbsp;";
        echo "<font color='#FF0000'>".substr($str0,0,1)."</font>";
		echo "&nbsp;正确&nbsp;&nbsp;分数:";
		echo "<font color='#FF0000'>".$myrow0[kt_fs]."</font>"; 
          $fen0+=$myrow0["kt_fs"];
         }else{
         echo "您输入的答案&nbsp;";
		echo "<font color='#FF0000'>".substr($str0,0,1)."</font>";
		echo "&nbsp;错误&nbsp;&nbsp;";
         echo "正确答案:&nbsp;<font color='#FF0000'>".substr($myrow0[kt_zqdaan],0,1)."</font>" ;

      
 }}
   ?></td>
<?php

 }
 }
?>

  <?php 

$x++;
}
  ?>




  <tr>
    <td height="20" bgcolor="#FFFFFF" class="STYLE1">&nbsp;</td>
    <td bgcolor="#FFFFFF" class="STYLE1">&nbsp;</td>
  </tr>
<tr>
  <td height="20" colspan="2" bgcolor="#EEEEEE" class="STYLE1">&nbsp;&nbsp;多选</td>
  </tr>
  <?php 
	$query1=mssql_query("select * from tb_kt where kt_lb='$kt_lbes' and kt_lx='1' and kt_small_lb='$kt_small_lb'");
	$y=1;
	$fen1=0; 
	while($myrow1=mssql_fetch_array($query1)){
	 $ii=0;	
?>
    

<tr>
    <td height="20" bgcolor="#FFFFFF" class="STYLE1">&nbsp;&nbsp;<?php echo $y.".".$myrow1["kt_nr"]?> </td>
    <td bgcolor="#FFFFFF" class="STYLE1"><span class="STYLE4"><?php echo $myrow1[kt_fs];?>分</span></td>
</tr>
<?php 
	$array_a1=array();
    $array1=explode("*",$myrow1["kt_daan"]);
           if($_POST[Submit]!=""){
             for($i=0;$i<count($array1);$i++){
             if($array1[$i]!=""){
               if($array1[$i]==$_POST[$myrow1[kt_id]."-".$i]) {
                array_push($array_a1,$_POST[$myrow1[kt_id]."-".$i]);
               }

             }
           }
          }

       $str1=implode("*",$array_a1);
    for($i=0;$i<count($array1);$i++){
      if($array1[$i]!=""){
	  
?>
	

     


<tr>
  <td height="20" bgcolor="#FFFFFF" class="STYLE1">
	&nbsp;&nbsp;

	<input type='checkbox' name='<?php echo $myrow1[kt_id]."-".$i?>' value='<?php echo $array1[$i];?>'> <?php echo $array1[$i];?></td>
    <td bgcolor="#FFFFFF" class="STYLE1">&nbsp;

     <?php

if($_POST[Submit]==true){
  if($_POST[$myrow1[kt_id]."-".$i]==true){

    if($ii==0){

      if($myrow1["kt_zqdaan"]==$str1){
        echo "您输入的答案&nbsp;";
$arrayesg=explode("*",$str1);
for($gg=0;$gg<count($arrayesg);$gg++){
list($name,$valuesg)=each($arrayesg);
		echo "<font color='#FF0000'>".substr($valuesg,0,1)."</font>";
}
		echo "&nbsp;正确&nbsp;&nbsp;分数:";
		echo "<font color='#FF0000'>".$myrow1[kt_fs]."</font>"; 
          $fen1+=$myrow1["kt_fs"];
         }else{

         echo "您输入的答案&nbsp;";
$arrayes=explode("*",$str1);
for($g=0;$g<count($arrayes);$g++){

list($name,$values)=each($arrayes);
		echo "<font color='#FF0000'>".substr($values,0,1)."</font>";

}
		echo "&nbsp;错误&nbsp;&nbsp;正确答案:&nbsp;";

$arrayes=explode("*",$myrow1[kt_zqdaan]);
for($g=0;$g<count($arrayes);$g++){
list($name,$values)=each($arrayes);
		echo "<font color='#FF0000'>".substr($values,0,1)."</font>";
}
      
} }
$ii=1;
}}
   ?></td>
	
</tr>

<?php

 }
}
?>

  <?php 

$y++;
}
  ?>











  <tr>
    <td height="20" bgcolor="#FFFFFF" class="STYLE1">&nbsp;</td>
    <td bgcolor="#FFFFFF" class="STYLE1">&nbsp;</td>
  </tr><tr>
    <td height="20" colspan="2" bgcolor="#EEEEEE" class="STYLE1">&nbsp;&nbsp;简答</td>
    </tr>
  <?php 
$query2=mssql_query("select * from tb_kt where kt_lb='$kt_lbes' and kt_lx='2' and kt_small_lb='$kt_small_lb'");
$z=1;
$fen2=0; 
while($myrow2=mssql_fetch_array($query2)){
  ?>
  <tr>
    <td height="20" colspan="2" bgcolor="#FFFFDF" class="STYLE1">&nbsp;&nbsp;<span class="STYLE4"><?php echo $z.".".$myrow2["kt_nr"]?>&nbsp;&nbsp;<?php echo $myrow2[kt_fs];?>分</span></td>
    </tr>
  <tr>
<?php 
?>
    <td height="20" colspan="2" bgcolor="#FFFFFF" class="STYLE1">
	&nbsp;&nbsp;
	<textarea name="<?php echo $myrow2[kt_id];?>" cols="80" rows="3">
<?php
if($_POST[$myrow2[kt_id]]==true){ 
     if($myrow2["kt_zqdaan"]==$_POST[$myrow2[kt_id]]){
        	echo "您输入的答案正确&nbsp;&nbsp;";
     	   	echo $myrow2["kt_fs"]; 
        	$fen2+=$myrow2["kt_fs"];
      }else{
         	echo "您输入的答案错误&nbsp;&nbsp;";
          	echo "正确答案:". $myrow2["kt_zqdaan"];
	 }}
?>
</textarea>	</td>
    </tr>

  <tr>
    <td height="20" colspan="2" bgcolor="#FFFFFF" class="STYLE1">&nbsp;</td>
    </tr>
  <?php 
$z++;
}

  ?>
 <tr>
    <td height="20" colspan="2" bgcolor="#EEEEEE" class="STYLE1">&nbsp;&nbsp;论述</td>
    </tr>
 <?php
$query3=mssql_query("select * from tb_kt where kt_lb='$kt_lbes' and kt_lx='3' and kt_small_lb='$kt_small_lb'");
$w=1;
$fen3=0; 
while($myrow3=mssql_fetch_array($query3)){

 ?>
  <tr>
    <td height="20" colspan="2" bgcolor="#FFFFDF" class="STYLE1">&nbsp;<span class="STYLE4">&nbsp;<?php echo $w.".".$myrow3["kt_nr"]?>
    &nbsp;&nbsp;<?php echo $myrow3[kt_fs];?>分</span></td>
    </tr>
<?php 
            if($_POST[Submit]!=""){
               if($myrow3[kt_daan]==$_POST[kt_3]) {
            	 $str3=$_POST[kt_3];               
				}
             }
      if($myrow3[kt_daan]!=""){
?>

  <tr>
    <td height="20" colspan="2" align="left" bgcolor="#FFFFFF" class="STYLE1">
	  &nbsp;&nbsp;
	  <textarea name="kt_3" cols="80" rows="3"><?php
if($_POST[kt_3]==true){   
         
      if($myrow3["kt_zqdaan"]==$str3){
        echo "您输入的答案正确&nbsp;&nbsp;";
        echo $myrow3["kt_fs"];
        echo $str3; 
          $fen3+=$myrow3["kt_fs"];
         }else{
         echo "您输入的答案错误&nbsp;&nbsp;";
 
   

          echo "正确答案:". $myrow3["kt_zqdaan"];

      
 }
}
   ?>

</textarea>	</td>
    </tr>
  <tr>
    <td height="20" colspan="2" bgcolor="#FFFFFF" class="STYLE1">&nbsp;</td>
    </tr>
  <?php 
$w++;
}}

  ?>
  <tr>
    <td height="20" bgcolor="#FFFFFF" class="STYLE1">&nbsp;
<?php  
$zf=$fen0+$fen1+$fen2+$fen3; 
echo "您的总成绩是:";
echo $zf; 

?></td>
    <td bgcolor="#FFFFFF" class="STYLE1">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFFFF" class="STYLE1"><input type="hidden" name="Submit" value="提交">
    <input type="hidden" value="<?php  echo $_POST[kt_lbes]?>" name="kt_lbes"><input type="hidden" value="<?php  echo $_POST[kt_small_lb]?>" name="kt_small_lb"><input type="submit" name="Submit" value="提交"></td>
    <td bgcolor="#FFFFFF" class="STYLE1">&nbsp;</td>
  </tr>
</table>
</form>
<?php 
if($Submit=="提交"){
$data=date("Y-m-d H:i:s");
$grade="update tb_user set online_grade='$zf',online_subject='$_POST[kt_lbes]',online_pt='1',online_date='$data' where online_number='$_SESSION[online_number]'";
$grade_result=mssql_query($grade);
}
?>
</body>
</html>
<?php

}else{
echo "<script> alert('您已经完成本类别的考试,不可以重复答题,谢谢!'); window.location.href='index.php?online=进入考场';</script>";
}

}else{
echo "<script> alert('请您正确登录!'); window.location.href='index.php?online=用户登录';</script>";
}
?>
