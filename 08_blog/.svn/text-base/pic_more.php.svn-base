<?php 
session_start();
include "Conn/conn.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>博客Sky</title>
<link href="CSS/style.css" rel="stylesheet"/>
</head>
<?php
$str=array("大","更","创","天","科","客","博","技","立","新");
$word=strlen($str);
for($i=0;$i<4;$i++){
	$num=rand(0,$word*2-1);      //$word=$word*2-1
	$img=$img."<img src=' images/checkcode/".$num.".gif' width='16' height='16'>";    //显示随机图片
	$pic=$pic.$str[$num];    //将图片转换成数组中的文字
}
?>
<script src="JS/check.js" language="javascript">
</script>
<body onselectstart="return false">
<table width="757"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr align="right" valign="top">
    <td height="149" colspan="2" background="images/head.jpg">
	  <table width="100%" height="149"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="51" align="right">
		  <br>
		  <table width="262" border="0" cellspacing="0" cellpadding="0">
            <tr align="left">
              <td width="26" height="20"><a href="index.php"></a></td>
              <td width="71" class="word_white"><a href="index.php"><span style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none">首  页</span></a></td>
              <td width="87"><a href="file.php"><span  style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none">我的博客</span></a></td>
              <td width="55"><a href="<?php echo (!isset($_SESSION[username])?'Regpro.php':'safe.php'); ?>"><span style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none"><?php echo (!isset($_SESSION[username])?"博客注册":"安全退出"); ?></span></a></td>
              <td width="23">&nbsp;</td>
            </tr>
          </table>
		  <br></td>
        </tr>
        <tr>
          <td height="66" align="right">&nbsp;</td>
        </tr>
        <tr>
		<form name="form" method="post" action="checkuser.php">
          <td height="20" valign="baseline">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="32%" height="20" align="center" valign="baseline">&nbsp; </td>
                <td width="67%" align="left" valign="baseline" style=" text-indent:10px;">
				<?php
		  	if(!isset($_SESSION[username])){
		  ?>
				用户名:
                  <input  name=txt_user size="10">
密码:
<input  name=txt_pwd type=password style="FONT-SIZE: 9pt; WIDTH: 65px" size="6">
验证码:
<input name="txt_yan" style="FONT-SIZE: 9pt; WIDTH: 65px" size="8">
<input type="hidden" name="txt_hyan" id="txt_hyan" value="<?php echo $pic;?>">
<?php echo $img; ?> &nbsp;
<input style="FONT-SIZE: 9pt"  type=submit value=登录 name=sub_dl onClick="return f_check(form)">
&nbsp; 
<?php
				}else{
			?>
				<font color="red"><?php echo $_SESSION[username]; ?></font>&nbsp;&nbsp;博客天空网站欢迎您的光临！！！当前时间：<font color="red"><?php echo date("Y-m-d l"); ?>
</font>
			<?
				}
			?>
</td>
                <td width="1%" align="center" valign="baseline">&nbsp;</td>
              </tr>
            </table> 
			</td>
		  </form>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td width="236" height="501" background=" images/left.jpg">
		<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td height="155" align="center" valign="top">		<?php include "cale.php"; ?></td>
		  </tr>
		  <tr>
			<td height="125" align="center" valign="top"><br>
	
			  <table width="200"  border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td><table width="201"  border="0" cellspacing="0" cellpadding="0" valign="top" style="margin-top:5px;">
					<?php
				$sql=mysql_query("select id,title from tb_article order by now desc limit 5");
				$i=1;
				while($info=mysql_fetch_array($sql)){
			?>
					<tr>
					  <td width="201" align="left" valign="top">
					&nbsp;&nbsp;&nbsp;<a href="article.php?file_id=<?php echo $info[id];?>" target="_blank"><?php echo $i."、".substr($info[title],0,20);?></a>
					  </td>
					</tr>
					<?php 
				$i=$i+1;
			  }
			  ?>
					<tr>
					  <td height="10" align="right"><a href="file_more.php"><img src=" images/more.gif" width="27" height="9" border="0">&nbsp;&nbsp;&nbsp;</a></td>
					</tr>
				  </table></td>
				</tr>
			</table></td></tr>
		  <tr>
			<td height="201" align="center" valign="top">          <br>
			  <table width="145"  border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td><table width="201"  border="0" cellspacing="0" cellpadding="0" valign="top" style="margin-top:10px;">
					<?php
				$sql=mysql_query("select id,tpmc,file from tb_tpsc order by scsj desc limit 2");
				while($info=mysql_fetch_array($sql)){
			?>
					<tr>
					  <td width="9" rowspan="2"  align="center">&nbsp;                                        </td>
					  <td width="147"  align="center"><a href="image.php?recid=<?php echo $info[id]; ?>" target="_blank"><img src="f_image.php?pic_id=<?php echo $info[id];?>"  width="120" height="80" border="0"></a>                                                            </td>
					  <td width="10" rowspan="2"  align="center">&nbsp;</td>
					</tr>
					<tr>
					  <td  align="center">图片名称：<?php echo $info[tpmc];?></td>
					</tr>
					<?php 
			  }
			  ?>
			  		<tr>
					  <td colspan="3" height="10" align="right"><a href="pic_more.php"><img src=" images/more.gif" width="27" height="9" border="0">&nbsp;&nbsp;&nbsp;</a></td>
					</tr>
				</table></td>
			  </tr>
			</table>        </td>
		  </tr>
		</table>
	</td>
    <td width="521" height="501" align="center" background="images/flist.jpg">
		<table width="100%" height="98%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="372" align="center">
		<!-- 文章列表-->
		<table width="90%" height="100%"  border="0" cellpadding="0" cellspacing="0" style="margin-top:25px;">
          <tr>
            <td height="130" align="center" valign="top"><?php if ($page=="") {$page=1;}; ?>
<table width="80%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                <tr align="left" colspan="2" >
                  <td height="25" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="tableBorder_LTR"> 浏览全部图片 </span> </td>
                </tr>
                	<?php
						if ($page){
						   $page_size=4;     //每页显示20条记录
						   $query="select count(*) as total from tb_tpsc order by id desc";   
							$result=mysql_query($query);       //查询总的记录条数
							$message_count=mysql_result($result,0,"total");       //为变量赋值
							$page_count=ceil($message_count/$page_size);	  //根据记录总数除以每页显示的记录数求出所分的页数
							$offset=($page-1)*$page_size;			//计算下一页从第几条数据开始循环  
							?>
                <tr>

					<?php
					$sql=mysql_query("select * from tb_tpsc order by id desc limit $offset, $page_size");
					$i=1;
					while($info=mysql_fetch_array($sql)){
						if($i%2==0){
					?>
                  <td height="31" align="left" valign="middle" >
				  <!--显示图片-->
				  <table width="180"  border="0" cellspacing="0" cellpadding="0" valign="top" style="margin-top:10px;">
				  	<tr>
					  <td width="9" rowspan="2"  align="center">&nbsp;                                        </td>
					  <td width="147"  align="center"><a href="image.php?recid=<?php echo $info[id]; ?>" target="_blank"><img src="f_image.php?pic_id=<?php echo $info[id];?>"  width="120" height="80" border="0"></a>                                                            </td>
					  <td width="10" rowspan="2"  align="center">&nbsp;</td>
					</tr>
					<tr>
					  <td  align="center">图片名称：<?php echo $info[tpmc];?></td>
					</tr>
				</table>
				<!----------------------------------->				  </td>
                </tr>
                <?php
					}else{
					?>
                  <td height="31" align="left" valign="middle" >
				  <!--显示图片-->
				  <table width="180"  border="0" cellspacing="0" cellpadding="0" valign="top" style="margin-top:10px;">
				  	<tr>
					  <td width="9" rowspan="2"  align="center">&nbsp;                                        </td>
					  <td width="147"  align="center"><a href="image.php?recid=<?php echo $info[id]; ?>" target="_blank"><img src="f_image.php?pic_id=<?php echo $info[id];?>"  width="120" height="80" border="0"></a>                                                            </td>
					  <td width="10" rowspan="2"  align="center">&nbsp;</td>
					</tr>
					<tr>
					  <td  align="center">图片名称：<?php echo $info[tpmc];?></td>
					</tr>
				</table>
				<!----------------------------------->				  </td>
				<?php
					}
					$i++;}
				?>
              </table>
              <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr bgcolor="#EFF7DE">
                  <td width="73%" align="left" valign="middle">&nbsp;&nbsp;页次：<?php echo $page;?>/<?php echo $page_count;?>页
                    记录：<?php echo $message_count;?> 条&nbsp; </td>
                  <td width="27%" align="right" class="hongse01">
                          <?php
						  if($page!=1)
						   {
							 echo  "<a href=pic_more.php?page=1>首页</a>&nbsp;";
							 echo "<a href=pic_more.php?page=".($page-1).">上一页</a>&nbsp;";
						   }
						  if($page<$page_count)
						   {
								echo "<a href=pic_more.php?page=".($page+1).">下一页</a>&nbsp;";
								echo  "<a href=pic_more.php?page=".$page_count.">尾页</a>";
						   }
						 } 
						?>                  </td>
                </tr>
              </table></td>
          </tr>
        </table>
		<!----------------------------->
		
		</td>
      </tr>
      <tr>
        <td height="66">&nbsp;</td>
      </tr>
    </table>
	</td>
  </tr>
</table>
</body>
</html>

