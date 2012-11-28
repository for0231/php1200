<?php
include_once("top.php");
include_once("bbs_top.php");
?>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
  <tr><td bgcolor="#FFFFFF">
<table width="825" height="3" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<?php
$sql=mysql_query("select * from tb_type_big order by createtime desc",$conn);
$info=mysql_fetch_array($sql);
if($info==false){
?>
<table width="825" height="30" border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
  <tr>
    <td bgcolor="#FFFFFF"><div align="center" style="font-weight: bold; color: #DC4A01">暂无论坛版块！</div></td>
  </tr>
</table>

<?php
}else{
 do{
?>
<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="1" background="images/lt_15(2).jpg">
      <tr>
        <td height="20" class="a9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo unhtml($info["title"]);?></td>
      </tr>
</table>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
       
	   <?php
           $sql1=mysql_query("select * from tb_type_small where bigtypeid='".$info["id"]."'",$conn);
		   $info1=mysql_fetch_array($sql1); 
		   if($info1==false){
		?>
	   <tr>
          <td height="20" colspan="4" bgcolor="#FFFFFF"><div align="center" style="font-weight: bold; color: #DC4A01">该版块暂时无讨论区！</div>            </td>
  </tr>
	   <?php
	    }else{
	   ?>
	    <tr bgcolor="#FFFFFF">
          <td height="20" bgcolor="F0F5F9">&nbsp;</td>
          <td width="520" height="20" bgcolor="F0F5F9"><div align="left" style="font-weight: bold; color: #DC4A01">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo unhtml($info["title"]);?></div></td>
          <td bgcolor="F0F5F9"><div align="center" style="font-weight: bold; color: #DC4A01">发帖数</div></td>
          <td bgcolor="F0F5F9"><div align="center" style="font-weight: bold; color: #DC4A01">热门帖数</div></td>
        </tr>
        
		 
	    <?php
		  
		     do{
         ?>
		<tr>
          <td width="62" height="60" bgcolor="F0F5F9"><div align="center"><img src="images/lt_15(3).jpg" width="40" height="36" /></div></td>
          <td height="60" bgcolor="F0F5F9"><table width="474" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="474" height="30">&nbsp;<strong><a href="bbs_list.php?id=<?php echo $info1["id"];?>" class="a1"><?php echo unhtml($info1["title"]);?></a></strong></td>
             
            </tr>
            <tr>
              <td height="30"><font color="#666666">创建时间：<?php echo $info1["createtime"];?></font></td>
            </tr>
          </table></td>
          <td width="81" height="60" bgcolor="F0F5F9"><div align="center"><?php
		    $sqlt=mysql_query("select count(*) as totalt from tb_bbs where typeid='".$info1["id"]."'",$conn);
			$infot=mysql_fetch_array($sqlt);
			echo $infot["totalt"];
		  ?></div></td>
          <td width="82" height="60" bgcolor="F0F5F9"><div align="center"><?php
		    $sqlt=mysql_query("select count(*) as totalt from tb_bbs where typeid='".$info1["id"]."' and readtimes>10",$conn);
			$infot=mysql_fetch_array($sqlt);
			echo $infot["totalt"];
		  ?></div></td>
        </tr>
	  <?php
        }while($info1=mysql_fetch_array($sql1));
	 } 	
      ?>
</table>
 


<table width="825" height="7" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
  <?php
   }while($info=mysql_fetch_array($sql));
  }
 ?>
</td></tr></table> 
<?php
include_once("bottom.php");
?>
