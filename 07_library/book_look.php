<?php session_start();?>
<html>
<head>
<title>图书馆管理系统</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
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
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" align="center" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：图书档案管理 &gt; 图书详细信息 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="100%" height="493"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top">
		<?php 
        include("conn/conn.php");
        $sql=mysql_query("select book.barcode,book.id as bookid,book.bookname,bt.typename,book.author,book.translator,pb.pubname,book.price,book.page,bc.name from tb_bookinfo book join tb_booktype bt on book.typeid=bt.id join tb_publishing pb on book.ISBN=pb.ISBN join tb_bookcase bc on book.bookcase=bc.id where book.id=$_GET[id]");
		$info=mysql_fetch_array($sql);
		?>
	<table width="600" height="432"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="173" align="center">条&nbsp;形&nbsp;码：</td>
        <td width="427" height="39">
          <input name="barcode" type="text" id="barcode" value="<?php echo $info[barcode];?>"></td>
      </tr>
      <tr>
        <td align="center">图书名称：</td>
        <td height="39"><input name="bookName" type="text" id="bookName" value="<?php echo $info[bookname];?>" size="50"> 
        * </td>
      </tr>
      <tr>
        <td align="center">图书类型：</td>
        <td>
		<input type="text" value="<?php echo $info[typename];?>">
         </td>
      </tr>
      <tr>
        <td align="center">作&nbsp;&nbsp;者：</td>
        <td><input name="author" type="text" id="author" value="<?php echo $info[author];?>" size="40"></td>
      </tr>
      <tr>
        <td align="center">译&nbsp;&nbsp;者：</td>
        <td><input name="translator" type="text" id="translator" value="<?php echo $info[translator];?>" size="40"></td>
      </tr>
      <tr>
        <td align="center">出&nbsp;版&nbsp;社：</td>
        <td>
		<input name="isbn" type="text" class="wenbenkuang" value="<?php echo $info[pubname];?>">
        </td>
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
        <td align="center">书&nbsp;&nbsp;架：</td>
        <td><input name="bookcaseid" class="wenbenkuang" value="<?php echo $info[name];?>">
      </tr>
      <tr>
        <td colspan="2" align="center">
			  <input name="Submit2" type="button" class="btn_grey" value="返回" onClick="history.back();"></td>
        </tr>
    </table>
	</td>
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
