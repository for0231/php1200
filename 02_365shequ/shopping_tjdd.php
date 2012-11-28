<?php
include_once("conn/conn.php");
include_once("top.php");
?>
<table width="870" height="30" align="center" background="images/bg_14(1).jpg"><tr><td width="129" rowspan="2">&nbsp;</td>
    <td width="729"></td>
</tr>
  <tr>
    <td><span class="a9">订单处理</span></td>
  </tr>
</table>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">

<?php
$ddnumber=base64_decode($_GET["ddno"]);
$sql=mysql_query("select * from tb_dd where ddnumber='".$ddnumber."'",$conn);
$info=mysql_fetch_array($sql);
$amount=$info["totalprice"];
$amount=str_replace(",","",number_format($amount,2));
$amount=str_replace(".","",number_format($amount,2));
?>
<table width="750" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><br>
		  
		  
		  <table width="630" height="50" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
           
		
             
		   
		   
		    <tr>
              <td bgcolor="#FFFFFF"><table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="130" height="22"><div align="right">订单号：</div></td>
                  <td width="211">&nbsp;<font color=red><strong><?php echo base64_decode($_GET["ddno"]);?></strong></font></td>
                  <td width="130"><div align="right">需支付金额：</div></td>
                  <td width="159">&nbsp;<?php
				   $sql=mysql_query("select totalprice from tb_dd where ddnumber='".base64_decode($_GET["ddno"])."'",$conn);
				   $info=mysql_fetch_array($sql);
				   echo "<font color=red><strong>".$info["totalprice"]."&nbsp;元</strong></font>";
				  ?></td>
                </tr>
                <tr>
                  <td height="30" colspan="4"><table width="500" height="1" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td bgcolor="#CCCCCC"></td>
                    </tr>
                  </table>
                    <table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td style="line-height:2">&nbsp;<font color="#FF0000">*</font>&nbsp;<font color="#999999">只有在网上支付成功后，我公司才会为您邮递。</font><br>&nbsp;<font color="#FF0000">*</font>&nbsp;<font color="#999999">我们会在48小时内保留您的订单，请及时支付。</font></td>
                    </tr>
                  </table></td>
                </tr>
                
              </table></td>
		    </tr>
          </table><br>
	<script language="javascript">
	  function openprintwindow(x,y,z){
	    
	     window.open("printwindow.php?ddno="+x+"&pv="+z,"newframe","top=200,left=200,width=635,height="+(230+20*y)+",menubar=no,location=no,toolbar=no,scrollbars=no,status=no");
	
	  }
	
	</script>	  
		  
		  
		
		  <table width="630" height="25" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
  <tr>
    <td bgcolor="#FFFFFF"><table width="630" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="430">&nbsp;</td>
        <td width="75"><img src="images/bg_14(14).jpg" width="69" height="20" style="cursor:hand" onclick="javascript:if(window.confirm('如果取消该订单，则该订单将被删除，您需要重新购买！')==true){window.location.href='deletedd.php?ddno=<?php echo $_GET["ddno"];?>';}"/></td>
        <td width="125"><img src="images/bg_14(15).jpg" width="119" height="20" onclick="javascript:window.location.href='ddform.php?orderid=<?php echo base64_decode($_GET["ddno"]);?>&amount=<?php echo $amount;?>&orderDate=<?php echo date("Ymdhis");?>';" style="cursor:hand"/></td>
      </tr>
    </table></td>
  </tr>
</table>
<br>	  
		  </td>
        </tr>
      </table>
</td>
        </tr></table>
<?php
include_once("bottom.php");
?>