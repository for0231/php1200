<?php session_start();?>
<html>
<head>
<link href="CSS/style.css" rel="stylesheet">
		<script language="javascript">
		function checkreader(form){
			if(form.barcode.value==""){
				alert("请输入读者条形码!");form.barcode.focus();return;
			}
			form.submit();
		}
		function checkbook(form){
			if(form.barcode.value==""){
				alert("请输入读者条形码!");form.barcode.focus();return;
			}		
			if(form.inputkey.value==""){
				alert("请输入查询关键字!");form.inputkey.focus();return;
			}

			if(form.number.value-form.borrowNumber.value<=0){
				alert("您不能再借阅其他图书了!");return;
			}
        form.submit();
	   }
		</script>
</head>
<body>
<?php include("navigation.php");?>
<table width="776"  border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="509"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td align="left" valign="top" style="padding:5px;"> &nbsp; <span class="word_orange">&nbsp;当前位置：图书借还 &gt; 图书借阅&gt;&gt;&gt; </span>      <table width="100%"  border="0" cellpadding="0" cellspacing="0">
	<?php
		include("conn/conn.php");
		//$barcode=$_POST[barcode];
		$sql=mysql_query("select r.*,t.name as typename,t.number from tb_reader r left join tb_readerType t on r.typeid=t.id where r.barcode='".$_POST[barcode]."'");
		//$sql=mysql_query("select r.*,t.name as typename,t.number,book.bookname,book.price,borr.borrowTime,borr.backTime,pub.pubname,bc.name as bookcase from tb_reader r left join tb_readerType t on r.typeid=t.id join tb_borrow as borr on borr.readerid=r.id join tb_bookinfo as book on book.id=borr.bookid join tb_publishing as pub on book.ISBN=pub.ISBN  join tb_bookcase as bc on book.bookcase=bc.id where r.barcode='".$_POST[barcode]."'");
		$info=mysql_fetch_array($sql);
	?>
	<form name="form1" method="post" action="">
        <tr>
          <td height="72" align="center" valign="top" background="Images/main_booksort_1.gif" bgcolor="#F8BF73">
          <br>		  
          <table width="96%" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#9ECFEE" class="tableBorder_grey">
          <tr>
              <td height="33" valign="top" background="Images/bookborr.gif">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  
				
                    <tr>
                      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="33" background="Images/bookborr.gif">&nbsp;</td>
                        </tr>
                      </table>
                        <table width="100%" height="21" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="24%" height="18" style="padding-left:7px;padding-top:7px;"><img src="Images/bg_line.gif" width="132" height="20"></td>
                            <td width="76%" style="padding-top:7px;">读者条形码：
                              <input name="barcode" type="text" id="barcode" size="24" value="<?php echo $info[barcode];?>">
                            &nbsp;
                              <input name="Button" type="button" class="btn_grey" value="确定" onClick="checkreader(form1)"></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="13" align="left" style="padding-left:7px;"><hr width="90%" size="1"></td>
                      </tr>
                    <tr>
                      <td align="center"><table width="96%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td height="27">姓&nbsp;&nbsp;&nbsp;&nbsp;名：
                              <input name="readername" type="text" id="readername" value="<?php echo $info[name];?>">
                              <input name="readerid" type="hidden" id="readerid" value="<?php echo $info[id];?>"></td>
                            <td>性&nbsp;&nbsp;&nbsp;&nbsp;别：
                              <input name="sex" type="text" id="sex" value="<?php echo $info[sex];?>"></td>
                            <td>读者类型：
                              <input name="readerType" type="text" id="readerType" value="<?php echo $info[typename];?>"></td>
                          </tr>
                          <tr>
                            <td height="27">证件类型：
                              <input name="paperType" type="text" id="paperType" value="<?php echo $info[paperType];?>"></td>
                            <td>证件号码：
                              <input name="paperNo" type="text" id="paperNo" value="<?php echo $info[paperNO];?>"></td>
                            <td>可借数量：
                              <input name="number" type="text" id="number" value="<?php echo $info[number];?>" size="17">
                              册
                            &nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>
                </table></td>
            </tr>
                 <tr>
                   <td height="32">&nbsp;添加的依据：
                     <input name="f" type="radio" class="noborder" value="barcode" checked>
                     图书条形码 &nbsp;&nbsp;
                     <input name="f" type="radio" class="noborder" value="bookname">
  图书名称&nbsp;&nbsp;
  <input name="inputkey" type="text" id="inputkey" size="50">
                     <input name="Submit" type="button" class="btn_grey" id="Submit" onClick="checkbook(form1);" value="确定">
                     <input name="operator" type="hidden" id="operator" value="<?php echo $_SESSION[adminname];?>">
    <input name="Button2" type="button" class="btn_grey" id="Button2" onClick="window.location.href='bookBorrow.php'" value="完成借阅">                   </td>
                 </tr> 
            <tr>
              <td valign="top" bgcolor="#D2E5F1" style="padding:5px"><table width="99%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolorlight="#FFFFFF" bordercolordark="#9ECFEE" bgcolor="#FFFFFF">
                     <tr align="center" bgcolor="#E2F4F6">
                       <td width="29%" height="25">图书名称</td>
                       <td width="12%">借阅时间</td>
                       <td width="14%">应还时间</td>
                       <td width="17%">出版社</td>
                       <td width="14%">书架</td>
                       <td colspan="2">定价(元)</td>
                     </tr>
<?php
$readerid=$info[id];
$sql1=mysql_query("select r.*,borr.borrowTime,borr.backTime,book.bookname,book.price,pub.pubname,bc.name as bookcase from tb_borrow as borr join tb_bookinfo as book on book.id=borr.bookid join tb_publishing as pub on book.ISBN=pub.ISBN  join tb_bookcase as bc on book.bookcase=bc.id join tb_reader as r on borr.readerid=r.id  where borr.readerid='$readerid' and borr.ifback=0");
//$sql=mysql_query("select t.days from tb_bookinfo b left join tb_booktype t on b.typeid=t.id where b.barcode='".$_POST[barcode]."'");
$info1=mysql_fetch_array($sql1);
$borrowNumber=mysql_num_rows($sql1);     //获取结果集中行的数目
do{
?>
                     <tr>
                       <td height="25" style="padding:5px;">&nbsp;<?php echo $info1[bookname];?></td>
                       <td style="padding:5px;">&nbsp;<?php echo $info1[borrowTime];?></td>
                       <td style="padding:5px;">&nbsp;<?php echo $info1[backTime];?></td>
                       <td align="center">&nbsp;<?php echo $info1[pubname];?></td>
                       <td align="center">&nbsp;<?php echo $info1[bookcase];?></td>
                       <td width="14%" align="center">&nbsp;<?php echo $info1[price];?></td>
                     </tr>
<?php 
}while($info1=mysql_fetch_array($sql1));
?>
   <input name="borrowNumber" type="hidden" id="borrowNumber" value="<?php echo $borrowNumber; ?>">

                   </table>			</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="19" background="Images/main_booksort_2.gif">&nbsp;</td>
        </tr>
	   </form>
<?php
if($_POST[inputkey]!=""){
$f=$_POST[f];
$inputkey=trim($_POST[inputkey]);
$barcode=$_POST[barcode];
$readerid=$_POST[readerid];
$borrowTime=date('Y-m-d');
$backTime=date("Y-m-d",(time()+3600*24*30));        //归还图书日期为当前期日期+30天期限
$query=mysql_query("select * from tb_bookinfo where $f='$inputkey'");
$result=mysql_fetch_array($query);   //检索图书信息是否存在
if($result==false){
	echo "<script language='javascript'>alert('该图书不存在！');window.location.href='bookBorrow.php?barcode=$barcode';</script>";
}
else{
	$query1=mysql_query("select r.*,borr.borrowTime,borr.backTime,book.bookname,book.price,pub.pubname,bc.name as bookcase from tb_borrow as borr join tb_reader as r on borr.readerid=r.id join tb_bookinfo as book on book.id=borr.bookid join tb_publishing as pub on book.ISBN=pub.ISBN  join tb_bookcase as bc on book.bookcase=bc.id  where borr.bookid=$result[id] and borr.readerid=$readerid and ifback=0");   //检索该读者所借阅的图书是否与再借图书重复
	$result1=mysql_fetch_array($query1);
	if($result1==true){    //如果借阅的图书已被该读者借阅，那么提示不能重复借阅 
		echo "<script language='javascript'>alert('该图书已经借阅！');window.location.href='bookBorrow.php?barcode=$barcode';</script>";
	}
	else{    //否则，完成图书借阅操作
			$bookid=$result[id];
			mysql_query("insert into tb_borrow(readerid,bookid,borrowTime,backTime,operator,ifback)values('$readerid','$bookid','$borrowTime','$backTime','$_SESSION[admin_name]',0)");
 			echo "<script language='javascript'>alert('图书借阅操作成功！');window.location.href='bookBorrow.php?barcode=$barcode';</script>";
}
}
}
?>
    </table></td>
  </tr>
</table>
    <?php include("copyright.php");?></td>
  </tr>
</table>
</body>
</html>