<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
 session_start();
 if($_SESSION[username]==""){
    echo "<script>alert('请先登录，后购物!');history.back();</script>";
	exit;
  }
?>
<?php
 include("top.php");
?>
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="229" height="438" valign="top" bgcolor="#F4F4F4"><?php include("left.php");?></td>
    <td width="561" align="center" valign="top" bgcolor="#FFFFFF"><table width="550" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
    </table>
      <table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
        <form name="form1" method="post" action="gouwu1.php">
          <tr>
            <td height="46" background="images/cart.gif"></td>
          </tr>
          <tr>
            <td  bgcolor="#FFFFFF"><table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
                <?php
			  session_register("total");
			  if($_GET[qk]=="yes"){
			     $_SESSION[producelist]="";
				 $_SESSION[quatity]=""; 
			  }
			   $arraygwc=explode("@",$_SESSION[producelist]);
			   $s=0;
			   for($i=0;$i<count($arraygwc);$i++){
			       $s+=intval($arraygwc[$i]);
			   }
			  if($s==0 ){
				   echo "<tr>";
                   echo" <td height='25' colspan='6' bgcolor='#FFFFFF' align='center'>您的购物车为空!</td>";
                   echo"</tr>";
				}
			  else{ 
			?>
                <tr>
                  <td width="125" height="25" bgcolor="#FFFFFF"><div align="center">商品名称</div></td>
                  <td width="52" bgcolor="#FFFFFF"><div align="center">数量</div></td>
                  <td width="64" bgcolor="#FFFFFF"><div align="center">市场价</div></td>
                  <td width="64" bgcolor="#FFFFFF"><div align="center">会员价</div></td>
                  <td width="51" bgcolor="#FFFFFF"><div align="center">折扣</div></td>
                  <td width="66" bgcolor="#FFFFFF"><div align="center">小计</div></td>
                  <td width="71" bgcolor="#FFFFFF"><div align="center">操作</div></td>
                </tr>
                <?php
			    $total=0;
			    $array=explode("@",$_SESSION[producelist]);
				$arrayquatity=explode("@",$_SESSION[quatity]);
				 while(list($name,$value)=each($_POST)){
					  for($i=0;$i<count($array)-1;$i++){
					    if(($array[$i])==$name){
						  $arrayquatity[$i]=$value;  
						}
					}
				}
			    $_SESSION[quatity]=implode("@",$arrayquatity);
				
				for($i=0;$i<count($array)-1;$i++){ 
				   $id=$array[$i];
				   $num=$arrayquatity[$i];
				  
				  if($id!=""){
				   $sql=mysql_query("select * from tb_shangpin where id='".$id."'",$conn);
				   $info=mysql_fetch_array($sql);
				   $total1=$num*$info[huiyuanjia];
				   $total+=$total1;
				   $_SESSION["total"]=$total;
			?>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[mingcheng];?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">
                  <input type="text" name="<?php echo $info[id];?>" size="2" class="inputcss" value=<?php echo $num;?>>
                  </div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[shichangjia];?>元</div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[huiyuanjia];?>元</div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo @(ceil(($info[huiyuanjia]/$info[shichangjia])*100))."%";?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[huiyuanjia]*$num."元";?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="removegwc.php?id=<?php echo $info[id]?>">移除</a></div></td>
                </tr>
                <?php
			      }
				 }
			 ?>
                <tr>
                  <td height="25" colspan="8" bgcolor="#FFFFFF"><div align="right">
                      <table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="125"><div align="center">
                              <input name="submit2" type="submit" class="buttoncss" value="更改商品数量">
                          </div></td>
                          <td width="125"><div align="center"><a href="gouwu2.php">去收银台</a></div></td>
                          <td width="125"><div align="center"><a href="gouwu1.php?qk=yes">清空购物车</a></div></td>
                          <td width="125"><div align="left">总计：<?php echo $total;?></div></td>
                        </tr>
                      </table>
                  </div></td>
                </tr>
                <?php
			 }
			?>
            </table></td>
          </tr>
        </form>
    </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>