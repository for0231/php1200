<?php include_once("top.php"); //获取头部文件 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>BCTY365网上社区</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<script language="javascript">
  function ld(){
   change_img();
   init();
  }
</script>
<body onLoad="ld()">
<table width="870" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="220" rowspan="2" valign="top">    
      <table width="220" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="30" align="left"><img src="images/br_11(1).jpg" width="220" height="30"></td>
        </tr>
        <tr>
          <td>  
              <table width="220" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
                <tr>
                  <td width="218" align="right" bgcolor="#FFFFFF"> <div id=marquees >

<table width="200" height="25" border="0" align="center"  cellpadding="0" cellspacing="0">

                      <?php
					  $sql=mysql_query("select id,title,createtime from tb_tell order by createtime desc limit 0,10",$conn);
					  $info=mysql_fetch_array($sql);
					  if($info==false){
					 ?>
                      <tr>
                        <td height="25"><div align="center"><a href="#" class="a4">本站暂无公告发布! </a></div></td>
                      </tr>
                      <?php
					  }else{ 
					   $i=1;
					    do{
					  ?>
                      <tr>
                        <td height="25" style="padding:4"><a href="tellinfo.php?id=<?php echo $info[id];?>" class="a1">
                          <?php
				   if($i==1)
				    {
					  echo "<font color=red>";
					}
				      echo $i.".&nbsp;";
					  echo unhtml(msubstr($info[title],0,50));
			          if(strlen($info[title])>50)
			           {
			             echo " ...";
			           }				  
					  echo "(".str_replace("-","/",$info[createtime]).")";
				    if($i==1)
				    {
					  echo "</font>";
					} 	  				  
					?>
                        </a>  </td>
        </tr>   
                      <?php
					   $i++;
					     }while($info=mysql_fetch_array($sql));
					   }
				?>
</table>
   </div>        </td>
                </tr>
            </table>
         
          <script language="JavaScript"> 
marqueesHeight=222; 
stopscroll=false; 

with(marquees){ 
style.width=0; 
style.height=marqueesHeight; 
style.overflowX="visible"; 
style.overflowY="hidden"; 
noWrap=true; 
onmouseover=new Function("stopscroll=true"); 
onmouseout=new Function("stopscroll=false"); 
} 
document.write('<div id="templayer" style="position:absolute;z-index:1;visibility:hidden"></div>'); 

preTop=0; currentTop=0; 

function init(){ 
templayer.innerHTML=""; 
while(templayer.offsetHeight<marqueesHeight){ 
templayer.innerHTML+=marquees.innerHTML; 
} 
marquees.innerHTML=templayer.innerHTML+templayer.innerHTML; 
setInterval("scrollup()",50); 
} 
//document.body.onload=init; 

function scrollup(){ 
if(stopscroll==true) return; 
preTop=marquees.scrollTop; 
marquees.scrollTop+=1; 
if(preTop==marquees.scrollTop){ 
marquees.scrollTop=templayer.offsetHeight-marqueesHeight; 
marquees.scrollTop+=1; 
} 
} 
      </script></td>
        </tr>
        <tr>
          <td height="30"><div align="center"><img src="images/bg_11(2).jpg" width="220" height="30"></div></td>
        </tr>
        <tr>
          <td><table width="220" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
                <tr>
                  <td height="38" bgcolor="#FFFFFF"><table width="215" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
                <?php
				 $sqluwz=mysql_query("select * from tb_soft order by addtime desc limit 0,7",$conn);
				 $infouwz=mysql_fetch_array($sqluwz);
				 if($infouwz==false){ 
				 ?>
                <tr>
                  <td width="20" height="22"><div align="center"><img src="images/mark_0.gif" width="3" height="3" /></div></td>
                  <td width="200">&nbsp;暂无软件提供下载！</td>
                </tr>
                <?php
				 }else{
				  $i=1;
				  do{
				    
				 ?>
                <tr>
                  <td width="20" height="22"><div align="center"><img src="images/mark_0.gif" width="3" height="3" /></div></td>
                  <td width="200" height="22" style="padding:5"><a href="softinfo.php?id=<?php echo $infouwz["id"];?>" class="a1">
                    <?php 
				     
				   if($i==1)
				    {
					  echo "<font color=red>";
					}
						
						
						echo unhtml(msubstr($infouwz["softname"],0,16));
						
						 if(strlen($infouwz["softname"])>16)
			             {
			                echo " .";
			             }
						 echo "<font color=red>[".substr(str_replace("-","/",$infouwz[addtime]),0,10)."]</font>";	
						 
					if($i==1)
				    {
					  echo "</font>";
					} 
					 
					  
					  
					  ?>
                  </a> </td>
                </tr>
                <tr>
                  <td height="1" colspan="2" background="images/line_1.gif"></td>
                </tr>
                <?php
			        $i++;
				  }while($infouwz=mysql_fetch_array($sqluwz));
				 }
				 ?>
            </table>                </tr>
          </table></td>
        </tr>
      </table>      </td>
    <td width="8" rowspan="2"></td>
    <td width="642" height="30"><img src="images/bg_11(3).jpg" width="642" height="30"></td>
  </tr>
  <tr>
    <td align="center"  valign="top" bgcolor="#FFFFFF"><script language='javascript'>
isns = navigator.appName == "Netscape";
img1=new Image()
img2=new Image()
img3=new Image()
img4=new Image()
img5=new Image()

img1.src='images/bccdimages/b1.gif'
img2.src='images/bccdimages/b2.gif'
img3.src='images/bccdimages/b3.gif'
img4.src='images/bccdimages/b4.gif'
img5.src='images/bccdimages/b5.gif'

nn=1

function change_img()
{
	eval('document.image.src=img'+nn+'.src');
	nn++;
	if(nn>5) nn=1
	if(!isns)
	{
		image.filters.item(0).apply()
		image.style.visibility='visible'
		image.filters.item(0).play()
		setTimeout("image.style.visibility='hidden'",5000);
	}
	else
	document.image.visibility='visible'
	tt=setTimeout('change_img()',5000)
}
</script>
      <table width="642" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">
          <table width="635" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="210" align="center"  valign="middle" bgcolor="#FFFFFF"><script language='javascript'>
isns = navigator.appName == "Netscape";
img1=new Image()
img2=new Image()
img3=new Image()
img4=new Image()
img5=new Image()

img1.src='images/bccdimages/b1.gif'
img2.src='images/bccdimages/b2.gif'
img3.src='images/bccdimages/b3.gif'
img4.src='images/bccdimages/b4.gif'
img5.src='images/bccdimages/b5.gif'

nn=1

function change_img()
{
	eval('document.image.src=img'+nn+'.src');
	nn++;
	if(nn>5) nn=1
	if(!isns)
	{
		image.filters.item(0).apply()
		image.style.visibility='visible'
		image.filters.item(0).play()
		setTimeout("image.style.visibility='hidden'",5000);
	}
	else
	document.image.visibility='visible'
	tt=setTimeout('change_img()',5000)
}
</script>
      <table width="610" height="200" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td valign="middle" bgcolor="#FFFFFF"><table width="610" height="170" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="175"><div align="center"><a href="morebccd.php"><img width="140" height="172" border="0" name="image" style='visibility:hidden;filter:revealtrans(duration=2.0,transition=12)'></a></div></td>
      <td valign="top"><table width="420" height="140" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="22" align="left"><img src="images/bg_11(13).jpg" width="100" height="22"></td>
            </tr>
            <tr>
              <td><div style="line-height:1.6">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
						 $sqlbj=mysql_query("select * from tb_bccdjj where mark=1",$conn);
						 $infobj=mysql_fetch_array($sqlbj);
						 echo unhtml(msubstr($infobj["content"],0,300));						
						 if(strlen($infobj["content"])>300)
			             {
			                echo " ...";
			             }
						 echo "<font color='red'>&nbsp;&nbsp;[&nbsp;".substr($infobj["createtime"],0,10)."&nbsp;]</font>";
						?>
              </div></td>
            </tr>
        </table></td>
    </tr>
  </table></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td  valign="top"><hr width="1" size="1" noshade></td>
  </tr>
  <tr>
    <td height="210" align="center"  valign="middle" bgcolor="#FFFFFF"><table width="610" height="210" border="0" align="center" cellpadding="0">
            <tr>
              <td width="610" bgcolor="#FFFFFF">
			  
			   <?php
			   $sqlnewbccd=mysql_query("select * from tb_bccd order by addtime desc limit 0,1",$conn);	
			   $infonewbccd=mysql_fetch_array($sqlnewbccd);
			   if($infonewbccd==false){
			     echo "<div align=center>对不起，暂无最新编程词典信息！</div>";
			     
			   }else{	
			     	   
			   ?>
			  
			  
			  <table width="610" height="170" border="0" align="center" cellpadding="0" cellspacing="0">
               <tr>
                  <td width="175" rowspan="3"><div align="center"><a href="bccdinfo.php?id=<?php echo $infonewbccd["id"]?>"><img src=" <?php echo $infonewbccd["imageaddress"]; ?>" width="140" height="170" border="0"></a></div></td>
                
                  <td width="435" rowspan="3" bgcolor="#FFFFFF" valign="middle">
<table width="420" height="140" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="22" colspan="2" align="left"><img src="images/bg_11(12).jpg" width="100" height="22"></td>
                    </tr>
                        <tr>
                          <td width="106"><div align="center">名&nbsp;&nbsp;&nbsp;&nbsp;称：</div></td>
                          <td width="314"><a href="bccdinfo.php?id=<?php echo $infonewbccd["id"];?>" class="a5"><?php
						    echo unhtml($infonewbccd["bccdname"]);
						  ?></a></td>
                    </tr>
                        <tr>
                          <td><div align="center">所属版本：</div></td>
                          <td><?php
						     $sqlt=mysql_query("select id,bbname from tb_bb where id='".$infonewbccd["bbid"]."'",$conn);
						     $infot=mysql_fetch_array($sqlt);
							 echo unhtml($infot["bbname"]);
						   ?></td>
                        </tr>
                        <tr>
                          <td><div align="center">价&nbsp;&nbsp;&nbsp;&nbsp;格：</div></td>
                          <td><?php 
						    
							echo number_format($infonewbccd["price"],2)."&nbsp;元"; 
						  
						  ?></font></td>
                        </tr>
                        <tr>
                          <td><div align="center">版&nbsp;&nbsp;&nbsp;&nbsp;权：</div></td>
                          <td><?php
						    echo unhtml($infonewbccd["owner"]);
						  ?></font></td>
                        </tr>
                        <tr>
                          <td><div align="center">添加时间：</div></td>
                          <td><?php
						    echo $infonewbccd["addtime"];
						  ?></font></td>
                        </tr>
                 </table></td>
                </tr>
              
              </table>
			  
			  <?php
			    }
			  ?>			  </td>
            </tr>
    </table></td>
        </tr>
      </table>

          </td>
        </tr>
      </table>
      
  </td>
  </tr>
</table>
<table align="center" width="870" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="80" colspan="3"><img src="images/bg_11(4).jpg" width="870" height="80"></td>
  </tr>
  <tr>
    <td width="290" height="30" align="left"><img src="images/bg_11(5).jpg" width="285" height="30"></td>
    <td width="290" align="center"><img src="images/bg_11(6).jpg" width="285" height="30"></td>
    <td width="290" align="right"><img src="images/bg_11(7).jpg" width="285" height="30"></td>
  </tr>
  <tr>
    <td><table width="285" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
      <tr>
        <td bgcolor="#FFFFFF"><table width="275" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="82" height="77" align="center" valign="middle"><img src="images/bg_11(8).jpg" width="80" height="75"></td>
            <td width="193" height="77" valign="middle"><table width="193" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
                <?php
				 $sqluwz=mysql_query("select * from tb_cjwt order by createtime desc limit 0,3",$conn);
				 $infouwz=mysql_fetch_array($sqluwz);
				 if($infouwz==false){ 
				 ?>
                <tr>
                  <td width="20" height="22"><div align="center"><img src="images/mark_0.gif" width="3" height="3" /></div></td>
                  <td width="200">&nbsp;暂无常见问题！</td>
                </tr>
                <?php
				 }else{
				  $i=1;
				  do{
				    
				 ?>
                <tr>
                  <td width="20" height="22"><div align="center"><img src="images/mark_0.gif" width="3" height="3" /></div></td>
                  <td width="200" height="22" style="padding:5"><a href="jszc.php?jszc=常见问题&id=<?php echo $infouwz["id"];?>" class="a1">
                    <?php 
				     
				   if($i==1)
				    {
					  echo "<font color=red>";
					}
						
						
						echo unhtml(msubstr($infouwz["question"],0,12));
						
						 if(strlen($infouwz["question"])>12)
			             {
			                echo " .";
			             }
						 echo "<font color=red>[".substr(str_replace("-","/",$infouwz[createtime]),0,10)."]</font>";	
						 
					if($i==1)
				    {
					  echo "</font>";
					} 
					 
					  
					  
					  ?>
                  </a> </td>
                </tr>
                <tr>
                  <td height="1" colspan="2" background="images/line_1.gif"></td>
                </tr>
                <?php
			        $i++;
				  }while($infouwz=mysql_fetch_array($sqluwz));
				 }
				 ?>
            </table></td>
          </tr>
          <tr>
            <td height="80" colspan="2" valign="top"><table width="275" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
                <?php
				 $sqluwz=mysql_query("select * from tb_cjwt order by createtime desc limit 3,3",$conn);
				while($infouwz=mysql_fetch_array($sqluwz)){
				 ?>
                <tr>
                  <td width="18" height="22"><div align="center"><img src="images/mark_0.gif" width="3" height="3" /></div></td>
                  <td width="302" height="22" style="padding:5"><a href="jszc.php?jszc=查看常见问题&id=<?php echo $infouwz["id"];?>" class="a1">
                    <?php 						
						echo unhtml(msubstr($infouwz["question"],0,24));
						
						 if(strlen($infouwz["question"])>24)
			             {
			                echo " .";
			             }
						 echo "<font color=red>[".substr(str_replace("-","/",$infouwz[createtime]),0,10)."]</font>";	
						 
				
					 
					  
					  
					  ?>
                  </a> </td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                </tr>
                <?php			  }
			
				 ?>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td align="center"><table width="285" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
      <tr>
        <td bgcolor="#FFFFFF"><table width="275" border="0" align="center" cellpadding="0" cellspacing="0">
            
            <tr>
              <td width="82" height="77" align="center" valign="middle"><img src="images/bg_11(9).jpg" width="80" height="75"></td>
              <td width="193" height="60" align="center" valign="middle"><table width="193" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
                  <?php
				 $sqluwz=mysql_query("select * from tb_bbs order by createtime desc limit 0,3",$conn);
				 $infouwz=mysql_fetch_array($sqluwz);
				 if($infouwz==false){ 
				 ?>
                  <tr>
                    <td width="20" height="22"><div align="center"><img src="images/mark_0.gif" width="3" height="3" /></div></td>
                    <td width="200">&nbsp;暂无人发贴！</td>
                  </tr>
                  <?php
				 }else{
				  $i=1;
				  do{
				    
				 ?>
                  <tr>
                    <td width="20" height="22"><div align="center"><img src="images/mark_0.gif" width="3" height="3" /></div></td>
                    <td width="200" height="22" style="padding:5"><a href="bbs_lookbbs.php?id=<?php echo $infouwz["id"];?>" class="a1">
                      <?php 
				     
				   if($i==1)
				    {
					  echo "<font color=red>";
					}
						
						
						echo unhtml(msubstr($infouwz["title"],0,12));
						
						 if(strlen($infouwz["title"])>12)
			             {
			                echo " .";
			             }
						 echo "<font color=red>[".substr(str_replace("-","/",$infouwz[createtime]),0,10)."]</font>";	
						 
					if($i==1)
				    {
					  echo "</font>";
					} 
					 
					  
					  
					  ?>
                    </a> </td>
                  </tr>
                  <tr>
                    <td height="1" colspan="2" background="images/line_1.gif"></td>
                  </tr>
                  <?php
			        $i++;
				  }while($infouwz=mysql_fetch_array($sqluwz));
				 }
				 ?>
              </table></td>
            </tr>
            <tr>
              <td height="80" colspan="2"  valign="top"><table width="275" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
                  <?php
				 $sqluwz=mysql_query("select * from tb_bbs order by createtime desc limit 3,3",$conn);
				while($infouwz=mysql_fetch_array($sqluwz)){
				 ?>
                                   <tr>
                    <td width="18" height="22"><div align="center"><img src="images/mark_0.gif" width="3" height="3" /></div></td>
                    <td width="302" height="22" style="padding:5"><a href="bbs_lookbbs.php?id=<?php echo $infouwz["id"];?>" class="a1">
                      <?php 
				     
			
						
						echo unhtml(msubstr($infouwz["title"],0,24));
						
						 if(strlen($infouwz["title"])>24)
			             {
			                echo " .";
			             }
						 echo "<font color=red>[".substr(str_replace("-","/",$infouwz[createtime]),0,10)."]</font>";	
						 
				
					  
					  
					  ?>
                    </a> </td>
                  </tr>
                  <tr>
                    <td height="1" colspan="2" background="images/line_1.gif"></td>
                  </tr>
                  <?php
			    
				  }
				
				 ?>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
    <td align="right"><table width="285" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
      <tr>
        <td bgcolor="#FFFFFF"><table width="275" border="0" align="center" cellpadding="0" cellspacing="0">
            
            <tr>
              <td width="82" height="77"><img src="images/bg_11(10).jpg" width="80" height="75"></td>
              <td width="193" height="60" valign="middle"><table width="193" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
                  <?php
				 $sqluwz=mysql_query("select * from tb_sjxz order by addtime desc limit 0,3",$conn);
				 $infouwz=mysql_fetch_array($sqluwz);
				 if($infouwz==false){ 
				 ?>
                  <tr>
                    <td width="20" height="22"><div align="center"><img src="images/mark_0.gif" width="3" height="3" /></div></td>
                    <td width="200">&nbsp;暂无升级下载！</td>
                  </tr>
                  <?php
				 }else{
				  $i=1;
				  do{
				    
				 ?>
                  <tr>
                    <td width="20" height="22"><div align="center"><img src="images/mark_0.gif" width="3" height="3" /></div></td>
                    <td width="200" height="22" style="padding:5"><a href="sjxz.php?id=<?php 
					   $sqlt=mysql_query("select id  from tb_type where id='".$infouwz["typeid"]."'",$conn);
					   $infot=mysql_fetch_array($sqlt);
					   echo $infot["id"];
					  
					  ?>" class="a1">
                      <?php 
				     
				   if($i==1)
				    {
					  echo "<font color=red>";
					}
						
						
						echo unhtml(msubstr($infouwz["name"],0,12));
						
						 if(strlen($infouwz["name"])>12)
			             {
			                echo " .";
			             }
						 echo "<font color=red>[".substr(str_replace("-","/",$infouwz[addtime]),0,10)."]</font>";	
						 
					if($i==1)
				    {
					  echo "</font>";
					} 
					 
					  
					  
					  ?>
                    </a> </td>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                  </tr>
                  <?php
			        $i++;
				  }while($infouwz=mysql_fetch_array($sqluwz));
				 }
				 ?>
              </table></td>
            </tr>
            <tr>
              <td height="80" colspan="2" valign="top"><table width="275" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
                  <?php
				 $sqluwz=mysql_query("select * from tb_sjxz order by addtime desc limit 3,3",$conn);
				while($infouwz=mysql_fetch_array($sqluwz)){
				 ?>
                 
                  <tr>
                    <td width="15" height="22"><div align="center"><img src="images/mark_0.gif" width="3" height="3" /></div></td>
                    <td width="285" height="22" style="padding:5"><a href="sjxz.php?id=<?php 
					   $sqlt=mysql_query("select id  from tb_type where id='".$infouwz["typeid"]."'",$conn);
					   $infot=mysql_fetch_array($sqlt);
					   echo $infot["id"];
					  
					  ?>" class="a1">
                      <?php 
				     
				  
						
						echo unhtml(msubstr($infouwz["name"],0,12));
						
						 if(strlen($infouwz["name"])>12)
			             {
			                echo " .";
			             }
						 echo "<font color=red>[".substr(str_replace("-","/",$infouwz[addtime]),0,10)."]</font>";	
						 
				
					  
					  
					  ?>
                    </a> </td>
                  </tr>
                  <tr>
                    <td height="1" colspan="2" background="images/line_1.gif"></td>
                  </tr>
                  <?php
			   
				  }
				 ?>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
include_once("bottom.php");
?>