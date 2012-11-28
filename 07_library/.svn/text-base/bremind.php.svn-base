<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
</head>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder">
  <tr>
    <td>
	<?php include("navigation.php");?>
	</td>
  </tr>
	<td bgcolor="#FFFFFF">
	<table width="100%"  border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：系统查询 &gt; 借阅到期提醒  &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
		<?php 
		include("conn/conn.php");
		$time=date("Y-m-d");
		$sql=mysql_query("select book.barcode,book.bookname,reader.barcode as readerbarcode,reader.name,borr.borrowTime,borr.backTime,borr.ifback from tb_bookinfo book join tb_borrow  as borr on book.id=borr.bookid join tb_reader as reader on borr.readerid=reader.id  where borr.backTime<='$time' and borr.ifback=0");
		$info=mysql_fetch_array($sql);
		if($info==false){
		?>
		 <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center">暂无到期提醒信息！</td>
            </tr>
          </table>
          <?php
			}else{
		  ?>
          <table width="98%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="15%">图书条形码</td>
    <td width="28%">图书名称</td>
    <td width="17%">读者条形码</td>
    <td width="9%">读者名称</td>
    <td width="15%">借阅时间</td>
    <td width="16%">应还时间</td>
    </tr>
<?php
  do{
?>
  <tr>
    <td style="padding:5px;">&nbsp;<?php echo $info[barcode];?></td>
    <td style="padding:5px;"><?php echo $info[bookname];?></td>
    <td style="padding:5px;">&nbsp;<?php echo $info[readerbarcode];?></td>
    <td style="padding:5px;">&nbsp;<?php echo $info[name];?></td>
    <td style="padding:5px;">&nbsp;<?php echo $info[borrowTime];?></td>
    <td style="padding:5px;">&nbsp;<?php echo $info[backTime];?></td>
    </tr>
<?php
  }while($info=mysql_fetch_array($sql));
}
?>
</table></td>
      </tr>
    </table>
</td>
  </tr>
</table><?php include("copyright.php");?></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
