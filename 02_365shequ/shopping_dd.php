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
?>
<table width="750" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
          <td><br>
		  
		  
		  <table width="630" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
           
		
             
		   
		   
		    <tr>
              <td bgcolor="#FFFFFF"><table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="25" colspan="2"><table width="250" height="20" border="0" align="left" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="15" bgcolor="#FFFFFF"><div align="center"></div></td>
                      <td width="235" bgcolor="#CCCCCC"><div align="center">吉林省明日科技有限公司-编程词典订单</div></td>
                    </tr>
                  </table></td>
                  <td height="25">&nbsp;</td>
                  <td height="25"><?php echo $info["createtime"];?></td>
                </tr>
				<tr>
                  <td height="1" colspan="4" valign="top"><hr size="1" color="#CCCCCC" width="600"></td>
                  </tr>
                <tr>
                  <td width="125" height="18"><div align="right">订单号：</div></td>
                  <td height="18" colspan="3">&nbsp;<?php echo $info["ddnumber"];?></td>
                </tr>
                <tr>
                  <td height="18"><div align="right">收货人：</div></td>
                  <td width="222" height="18">&nbsp;<?php echo $info["recuser"];?></td>
                  <td width="125" height="18"><div align="right">邮编：</div></td>
                  <td width="208" height="18">&nbsp;<?php echo $info["yb"];?></td>
                </tr>
                <tr>
                  <td height="18"><div align="right">移动电话：</div></td>
                  <td height="18">&nbsp;<?php echo $info["mtel"];?></td>
                  <td height="18"><div align="right">固定电话：</div></td>
                  <td height="18">&nbsp;<?php echo $info["gtel"];?></td>
                </tr>
                <tr>
                  <td height="18"><div align="right">联系地址：</div></td>
                  <td height="18" colspan="3">&nbsp;<?php echo unhtml($info["address"]);?></td>
                  </tr>
                <tr>
                  <td height="20" colspan="4"><br><table width="550" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                    <tr>
                      <td height="18" bgcolor="#CCCCCC"><div align="center">商品名称</div></td>
                      <td bgcolor="#CCCCCC"><div align="center">单价（元）</div></td>
                      <td bgcolor="#CCCCCC"><div align="center">数量</div></td>
                      <td bgcolor="#CCCCCC"><div align="center">小计（元）</div></td>
                    </tr>
             <?php
			
			 $array=explode("@",$info["spc"]);
			 $arraynum=explode("@",$info["slc"]);
			 $markid=0;
			 for($i=0;$i<count($array);$i++){
			   if($array[$i]!=""){
			     $markid++;
			   }
			 }
			
			 if($markid==0){ 
			?>
					
					
					
				     <tr>
                      <td height="18" colspan="4" bgcolor="#FFFFFF"><div align="center">暂无商品信息！</div></td>
                     </tr>
			<?php
			}else{
		       $totalprice=0;
			   $gnum=0;
			   for($i=0;$i<count($array);$i++){
			     if($array[$i]!=""){
				   $sqldd=mysql_query("select * from tb_bccd where id='".$array[$i]."'",$conn);
				   $infodd=mysql_fetch_array($sqldd)
			?>	 
					
					 <tr>
                      <td height="18" bgcolor="#FFFFFF">&nbsp;<?php echo unhtml($infodd["bccdname"]);?></td>
                      <td height="18" bgcolor="#FFFFFF"><div align="center"><?php echo number_format($infodd["price"],2);?></div></td>
                      <td height="18" bgcolor="#FFFFFF"><div align="center"><?php echo $arraynum[$i];?></div></td>
                      <td height="18" bgcolor="#FFFFFF"><div align="center"><?php echo number_format($infodd["price"]*$arraynum[$i],2);?></div></td>
                    </tr>
			<?php 
			       $totalprice+=$infodd["price"]*$arraynum["$i"];
				   $gnum++;
			     }
			   }
			}
			?>	
					
                  </table>
				  
				    <table width="550" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="25">&nbsp;</td>
                        <td width="60" height="25"><div align="center">商品总计：</div></td>
                        <td width="112">&nbsp;<?php echo number_format($totalprice,2);?>&nbsp;元</td>
                      </tr>
                    
                      <tr>
                        <td height="25">&nbsp;</td>
                        <td height="25"><div align="right">邮费：</div></td>
                        <td height="25">&nbsp;<?php echo number_format($info["yprice"],2);?>&nbsp;元</td>
                      </tr>
					  <tr>
                        <td width="378" height="1"></td>
                        <td height="1" colspan="2" bgcolor="#CCCCCC"></td>
                      </tr>
					  <tr>
                        <td height="25" colspan="2"><div align="right"><strong>你需要支付的金额总计为：</strong></div></td>
                        <td width="112">&nbsp;<?php echo number_format($info["totalprice"],2);?>&nbsp;元</td>
                      </tr>
                    </table>
				    </td>
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
        <td width="340">&nbsp;</td>
        <td width="75"> <img src="images/bg_14(11).jpg" width="69" height="20" onclick="javascript:openprintwindow('<?php echo base64_decode($_GET["ddno"]);?>','<?php echo $gnum;?>','p')" style="cursor:hand"/></td>
        <td width="90"><img src="images/bg_14(12).jpg" width="69" height="20"  onclick="javascript:openprintwindow('<?php echo base64_decode($_GET["ddno"]);?>','<?php echo $gnum;?>','v')" style="cursor:hand"/></td>
        <td width="125"><img src="images/bg_14(10).jpg" width="69" height="20" onclick="javascript:window.location.href='shopping_tjdd.php?ddno=<?php echo $_GET["ddno"];?>'" style="cursor:hand"/></td>
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