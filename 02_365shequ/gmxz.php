<?php
include_once("conn/conn.php");
include_once("top.php");
?>
<table width="870" height="30" align="center" background="images/bg_14(1).jpg"><tr><td width="129" rowspan="2">&nbsp;</td>
    <td width="729"></td>
</tr>
  <tr>
    <td><span class="a9">购买须知</span></td>
  </tr>
</table>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">


<table width="750" height="60" border="0" align="center" cellpadding="0">
        
        <tr>
          <td>
		  
		    <br>
			
			<?php
	   $sqlb=mysql_query("select * from tb_bccd order by addtime desc",$conn);
	   $infob=mysql_fetch_array($sqlb);
	   if($infob==false)
	   {
	     echo "<div  align=center>对不起，暂无编程词典信息！</div>";
	   }
	   else
	   {
	    do{
	  ?>
	  
      <table width="680" height="22" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <tr>
          <td bgcolor="#FFFFFF">&nbsp;<img src="images/menubar_left[1].gif" />&nbsp;<?php echo  unhtml($infob[bccdname]);?></td>
        </tr>
      </table>
	  <br>
      <table width="680" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
      
	    <?php
		
		
	   $sqlq=mysql_query("select * from tb_bbqb where bccdid='".$infob[id]."'",$conn);
	   $infoq=mysql_fetch_array($sqlq);
	   if($infoq==false){
	     echo "<div align=center>对不起，该编程词典暂无版本信息！</div>";
	   }else{
		?>
		
		<tr>
          <td width="98" height="22" bgcolor="#CCCCCC"><div align="center">软件版本</div></td>
          <td width="197" height="22" bgcolor="#CCCCCC"><div align="center">功能</div></td>
          <td width="261" height="22" bgcolor="#CCCCCC"><div align="center">享受服务</div></td>
          <td width="119" height="22" bgcolor="#CCCCCC"><div align="center">价格(元)</div></td>
        </tr>
       
	   <?php
	  
	     do{
	   ?>
	    <tr>
          <td height="22" bgcolor="#FFFFFF">&nbsp;
		  <?php
		   $sql0=mysql_query("select * from tb_bb where id='".$infoq[bbid]."'",$conn);
		   $info0=mysql_fetch_array($sql0);
		   echo unhtml($info0[bbname]);
		  ?>		  </td>
          <td height="22" bgcolor="#FFFFFF">&nbsp;<?php echo unhtml($infoq[gn]);?></td>
          <td height="22" bgcolor="#FFFFFF">&nbsp;<?php echo unhtml($infoq[fw]);?></td>
          <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo $infoq[price];?></div></td>
        </tr>
       <?php
	      }while($infoq=mysql_fetch_array($sqlq));
		}
		
	   ?> 
      </table>
      <table width="550" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
	  <?php
	  
	   }while($infob=mysql_fetch_array($sqlb));
	   
	  } 
	  ?>
	  
	  
    
	      <br>		  </td>
        </tr>
      </table>

</td>
        </tr></table>
<?php
include_once("bottom.php");
?>



