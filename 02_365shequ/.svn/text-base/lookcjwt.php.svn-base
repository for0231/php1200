<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>常见问题</title>
</head>

<body>

<table width="642" align="center" border="0" cellspacing="0" cellpadding="0">
          <td height="30" valign="middle" background="images/bg_12(2).jpg"><table width="610">
            <tr>
              <td width="109" rowspan="2">&nbsp;</td>
              <td width="379" height="3"></td>
              <td width="106" rowspan="2">&nbsp;</td>
            <tr>
              <td>&nbsp;常见问题</td>
            </table></td>
        </tr>
        <tr>
          <td  width="642" align="center" valign="top">
   <table width="642" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">


<?php
include_once("conn/conn.php");
include_once("function.php");
$sql=mysql_query("select * from tb_cjwt where id='".$_GET["id"]."'",$conn);
$info=mysql_fetch_array($sql);
?>
<table width="635" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="94" height="30"><div align="center"><strong>问&nbsp;&nbsp;题：</strong></div></td>
              <td width="541"><?php echo unhtml($info["question"]);?></td>
            </tr>
            <tr>
              <td height="70"><div align="center"><strong>解&nbsp;&nbsp;答：</strong></div></td>
              <td height="70">&nbsp;<?php echo unhtml($info["answer"]);?></td>
            </tr>
</table>


</td>
        </tr></table>
          </td>
        </tr>
      </table>
</body>
</html>
