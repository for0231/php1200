<?php
include_once("conn/conn.php");
include_once("top.php");
?>
<table width="870" height="30" align="center" background="images/bg_14(1).jpg"><tr><td width="129" rowspan="2">&nbsp;</td>
    <td width="729"></td>
</tr>
  <tr>
    <td><span class="a9">编程词典详细信息</span></td>
  </tr>
</table>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">

<?php
$id=$_GET["id"];
$sql=mysql_query("select * from tb_bccd where id='".$_GET[id]."'",$conn);
$info=mysql_fetch_array($sql);

?>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td height="40"><br>
          <table width="680" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
          <tr>
            <td width="190" rowspan="7" bgcolor="#FFFFFF"><div align="center"><img src="<?php echo  $info["imageaddress"]; ?>" width="150" height="160"></div></td>
            <td height="30" colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
          <tr>
            <td width="100" height="25" bgcolor="#FFFFFF"><div align="center">名称：</div></td>
            <td width="386" height="25" bgcolor="#FFFFFF">&nbsp;<?php echo unhtml($info["bccdname"]);?></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">版权：</div></td>
            <td height="25" bgcolor="#FFFFFF">&nbsp;<?php echo unhtml($info["owner"]);?></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">版本：</div></td>
            <td height="25" bgcolor="#FFFFFF">&nbsp;<?php
						     $sqlt=mysql_query("select id,bbname from tb_bb where id='".$info["bbid"]."'",$conn);
						     $infot=mysql_fetch_array($sqlt);
							 echo unhtml($infot["bbname"]);
						   ?>			</td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">添加时间：</div></td>
            <td height="25" bgcolor="#FFFFFF">&nbsp;<?php echo $info["addtime"];?></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">价格：</div></td>
            <td height="25" bgcolor="#FFFFFF">&nbsp;<?php 
						   
							echo number_format($info["price"],2)."&nbsp;元"; 
						  
						  ?></td>
          </tr>
          <tr>
            <td height="25" colspan="2" bgcolor="#FFFFFF"><table width="280" height="22" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><a href="shopping_cart_first.php?id=<?php echo $info["id"]; ?>"><img src="images/bg_14(8).jpg" width="69" height="20" border="0"/></a></div></td>
              </tr>
            </table></td>
          </tr>
        </table>
          <br>
          <table width="680" height="120" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
            <tr>
              <td bgcolor="#FFFFFF" valign="top"><div style="line-height:1.6; padding:5" ><font color="red">版本共同点：</font><?php echo unhtml($info["samepart"]);?></div></td>
            </tr>
          </table>
		
		  <br>
          <table width="680" height="120" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
            <tr>
              <td bgcolor="#FFFFFF"><div style="line-height:1.6; padding:5" ><font color="red">内容简介：</font><?php echo unhtml($info["content"]);?></div></td>
            </tr>
          </table>	
		  <br>		  	  </td>
      </tr>
    </table>


</td>
        </tr></table>
<?php
include_once("bottom.php");
?>
