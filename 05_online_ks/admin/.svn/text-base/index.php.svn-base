<?php session_start();
if($_SESSION[admin_user]==true){
include("../conn/conn.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>网络在线考试</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
.style11 {color: #FFFFFF}
body {
	background-color: #D9D6D1;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<table width="801" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="586" height="40" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="../images/index_top.gif" width="801" height="203" border="0" usemap="#Map">
          <table width="801" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="35" background="../images/index_line.gif"><table width="801" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="209" height="35">&nbsp;</td>
                  <td width="592" class="STYLE1"><?php echo $htgl;?></td>
                </tr>
              </table></td>
            </tr>
          </table></td>
      </tr>
    </table>
      <table width="801" height="231" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="44" height="225" bgcolor="#FFFFFF">&nbsp;</td>
          <td width="711" align="center" valign="top" bgcolor="#FFFFFF"><br>            
            <br>            <?php 
	switch($htgl){
		case "考生信息管理":
			include("ksxx_gl.php");
			break;
		case "考题类别管理":
			include("ktlb_gl.php");
			break;
		case "考题信息添加":
			include("ktxx_tj.php");
			break;
		case "考题信息管理":
			include("ktxx_gl.php");
			break;
		case "":
			include("ksxx_gl.php");
			break;


	}
	?>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br></td>
          <td width="46" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
      </table>
      <table width="801" height="24" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="50" align="center" bgcolor="5D554A"><span class="style11">在线考试系统 www.bcty365.com 版权所有</span></td>
        </tr>
      </table></td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="187,28,275,52" href="index.php?htgl=&#32771;&#29983;&#20449;&#24687;&#31649;&#29702;">
  <area shape="rect" coords="294,29,378,51" href="index.php?htgl=&#32771;&#39064;&#31867;&#21035;&#31649;&#29702;">
  <area shape="rect" coords="405,29,491,51" href="index.php?htgl=&#32771;&#39064;&#20449;&#24687;&#28155;&#21152;">
  <area shape="rect" coords="516,28,604,49" href="index.php?htgl=&#32771;&#39064;&#20449;&#24687;&#31649;&#29702;">
<area shape="rect" coords="724,172,785,196" href="../tc_dl.php">
<area shape="rect" coords="638,176,698,194" href="checkadmin.php">
</map>
</body>
</html>

<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='checkadmin.php';</script>";
}

?>