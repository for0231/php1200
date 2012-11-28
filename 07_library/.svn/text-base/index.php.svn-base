<?php 
include ("check_login.php"); 
include("conn/conn.php");
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<head>
<title>学校图书馆管理系统</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td><?php include("navigation.php"); ?></td>
  </tr>
	<td bgcolor="#FFFFFF">
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td align="center" valign="top" style="padding:5px;"><table width="738"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="148" valign="top"><table width="738"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="753" height="44" background="Images/main_booksort.gif">&nbsp;</td>
          </tr>
          <tr>
            <td height="72" valign="top" background="Images/main_booksort_1.gif"><table width="740"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
              <tr align="center">
                <td width="4%" height="25">排名</td>
                <td width="10%">图书条形码</td>
                <td width="22%">图书名称</td>
                <td width="11%">图书类型</td>
                <td width="9%">书架</td>
                <td width="13%">出版社</td>
                <td width="15%">作者</td>
                <td width="8%">定价(元)</td>
                <td width="8%">借阅次数</td>
              </tr>
              <?php
					$sql=mysql_query("select * from (select bookid,count(bookid) as degree from tb_borrow group by bookid) as borr join (select b.*,c.name as bookcasename,p.pubname,t.typename from tb_bookinfo b left join tb_bookcase c on b.bookcase=c.id join tb_publishing p on b.ISBN=p.ISBN join tb_booktype t on b.typeid=t.id where b.del=0) as book on borr.bookid=book.id order by borr.degree desc limit 10");
					$info=mysql_fetch_array($sql);
					$i=1;
					do{
					?>
              <tr>
                <td height="25" align="center"><?php echo $i;?></td>
                <td style="padding:5px;">&nbsp;<?php echo $info[barcode];?></td>
                <td style="padding:5px;"><?php echo $info[bookname];?></td>
                <td style="padding:5px;"><?php echo $info[typename];?></td>
                <td align="center">&nbsp;<?php echo $info[bookcasename];?></td>
                <td align="center">&nbsp;<?php echo $info[pubname];?></td>
                <td align="center"><?php echo $info[author];?></td>
                <td align="center"><?php echo $info[price];?></td>
                <td align="center"><?php echo $info[degree];?></td>
              </tr>
              <?php 
				 $i=$i+1;
				 }while($info=mysql_fetch_array($sql));
				?>
            </table></td>
          </tr>
          <tr>
            <td height="19" background="Images/main_booksort_2.gif">&nbsp;</td>
          </tr>
        </table>
          </td>
      </tr>
    </table>
      <p>&nbsp;</p></td>
  </tr>
</table></td>
  </tr>
</table>
<?php include("copyright.php"); ?></td>
  </tr>
</table>
</html>