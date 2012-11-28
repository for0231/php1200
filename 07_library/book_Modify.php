<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<style type="text/css">
<!--
.style1 {color: #FF6600}
-->
</style>
</head>
<script language="javascript">
function check(form){
	if(form.barcode.value==""){
		alert("请输入条形码!");form.barcode.focus();return false;
	}
	if(form.bookName.value==""){
		alert("请输入图书姓名!");form.bookName.focus();return false;
	}
	if(form.price.value==""){
		alert("请输入图书定价!");form.price.focus();return false;
	}
form.submit();
}
</script>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
	<?php include("navigation.php");?>
	</td>
  </tr>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="475"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="473" align="center" valign="top" style="padding:5px;"><table width="98%" height="463"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：图书档案管理 &gt; 修改图书信息 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td height="441" align="center" valign="top"><table width="100%" height="421"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="421" align="center" valign="top">
	<form name="form1" method="post" action="book_modify_ok.php">
	<?php
	include("conn/conn.php");
	$sql=mysql_query("select book.barcode,book.id as bookid,book.bookname,bt.typename,book.typeid,book.author,book.ISBN,book.translator,book.bookcase,pb.pubname,book.price,book.page,bc.name from tb_bookinfo book join tb_booktype bt on book.typeid=bt.id join tb_publishing pb on book.ISBN=pb.ISBN join tb_bookcase bc on book.bookcase=bc.id where book.id=$_GET[id]");
	$info=mysql_fetch_array($sql);
	?>
    <input type="hidden" name="bid" value="<?php echo $info[book.id];?>">
    <table width="600" height="397"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="173" align="center">条&nbsp;形&nbsp;码：</td>
        <td width="427" height="33">
          <input name="barcode" type="text" id="barcode" value="<?php echo $info[barcode];?>"></td>
      </tr>
      <tr>
        <td align="center">图书名称：</td>
        <td height="35"><input name="bookName" type="text" id="bookName" value="<?php echo $info[bookname];?>" size="50">
          <span class="style1">*</span></td>
      </tr>
      <tr>
        <td height="35" align="center">图书类型：</td>
        <td>
		<select name="typeId" class="wenbenkuang" id="typeId">
		<?php 
		$sql1=mysql_query("select * from tb_booktype");
		$info1=mysql_fetch_array($sql1);
		do{
		?> 		
        <option value="<?php echo $info1[id];?>" <?php if($info1[id]==$info[typeid]){?> selected <?php }?>><?php echo $info1[typename];?></option>
		<?php }while($info1=mysql_fetch_array($sql1));?> 
        </select>		</td>
      </tr>
      <tr>
        <td align="center">作&nbsp;&nbsp;者：</td>
        <td><input name="author" type="text" id="author" value="<?php echo $info[author];?>" size="40"></td>
      </tr>
      <tr>
        <td height="36" align="center">译&nbsp;&nbsp;者：</td>
        <td><input name="translator" type="text" id="translator" value="<?php echo $info[translator];?>" size="40"></td>
      </tr>
      <tr>
        <td height="34" align="center">出&nbsp;版&nbsp;社：</td>
        <td>
		<select name="isbn" class="wenbenkuang">
		<?php
		$sql2=mysql_query("select * from tb_publishing");
		$info2=mysql_fetch_array($sql2);
		do{
		?> 		
        <option value="<?php echo $info2[ISBN];?>"<?php if($info2[ISBN]==$info[ISBN]){?> selected <?php }?>><?php echo $info2[pubname];?></option>
		<?php }while($info2=mysql_fetch_array($sql2));?> 
        </select>		</td>
      </tr>
      <tr>
        <td align="center">价&nbsp;&nbsp;格：</td>
        <td><input name="price" type="text" id="price" value="<?php echo $info[price];?>">
        (元)</td>
      </tr>
      <tr>
        <td align="center">页&nbsp;&nbsp;码：</td>
        <td><input name="page" type="text" id="page" value="<?php echo $info[page];?>"></td>
      </tr>
      <tr>
        <td height="34" align="center">书&nbsp;&nbsp;架：</td>
        <td><select name="bookcaseid" class="wenbenkuang" id="bookcaseid">
		<?php
		$sql3=mysql_query("select * from tb_bookcase");
		$info3=mysql_fetch_array($sql3);
		do{
		?> 		
          <option value="<?php echo $info3[id];?>"<?php if($info3[id]==$info[bookcase]){?> selected <?php }?>><?php echo $info3[name];?></option>
			<?php }while($info3=mysql_fetch_array($sql3));?> 
        </select>
          <input name="operator" type="hidden" id="operator" value="<?php echo $info3[name];?>"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input name="Submit" type="submit" class="btn_grey" value="保存" onClick="return check(form1)">&nbsp;
			<input name="Submit2" type="button" class="btn_grey" value="返回" onClick="history.back();"></td>
        </tr>
    </table>
	</form>	</td>
  </tr>
</table></td>
      </tr>
    </table></td>
  </tr>
</table><?php include("copyright.php");?></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>

