<?php
session_start();
if($_SESSION["admin_nc"]=="")
 {
  echo "<script>alert('禁止非法登录!');window.location.href='../index.php';</script>";
  exit;
 }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>BCTY365网上社区—后台管理</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
     <table width="565" height="22" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
       <tr><td align="center" class="a5"><?php echo $htgl;?></td>
     </tr>
       <tr>
         <td align="center" bgcolor="#FFFFFF" class="a5">
	  <table width="565" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
        <tr>
          <td width="249" height="22" bgcolor="#FFFFFF"><div align="center">编程词典名称</div></td>
         
          <td width="163" bgcolor="#FFFFFF"><div align="center">添加时间</div></td>
          <td width="89" bgcolor="#FFFFFF"><div align="center">添加版本信息</div></td>
          <td width="94" bgcolor="#FFFFFF"><div align="center">删除</div></td>
        </tr>
		<?php
		include_once("../conn/conn.php");
		include_once("function.php");
		$sql=mysql_query("select * from tb_bccd order by addtime desc",$conn);
		$info=mysql_fetch_array($sql);
		if($info==false){
               echo "<div align=center>对不请,暂无编程词典信息!</div>";		
		}else{
		  do{
		?>
        
		
		<tr>
          <td height="22" bgcolor="#FFFFFF"><div align="center"><?php  echo unhtml($info[bccdname]);?></div></td>
        
          <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo $info[addtime];?></div></td>
          <td height="22" bgcolor="#FFFFFF"><div align="center"><a href="default.php?htgl=编辑编程词典&bccdid=<?php echo $info[id]; ?>">添加</a></div></td>
          <td height="22" bgcolor="#FFFFFF"><div align="center"><a href="javascript:if(window.confirm('您确定删除该编程词典么?')==true){window.location.href='deletebccd.php?id=<?php echo $info[id];?>';}"><img src="images/del.gif" width="22" height="22" border="0"></a></div></td>
        </tr>
		
		<?php
		  }while($info=mysql_fetch_array($sql));
		}
		
		?>
      </table>
	  <br><br>
	  <?php
	   if($_GET[bccdid]!=""){
	  ?>
	  
	  <table width="565" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
        <tr>
          <td width="143" height="22" bgcolor="#FFFFFF"><div align="center">版本名称</div></td>
          <td width="55" bgcolor="#FFFFFF"><div align="center">价格(元)</div></td>
          <td width="90" bgcolor="#FFFFFF"><div align="center">内容简介</div></td>
          <td width="127" bgcolor="#FFFFFF"><div align="center">功能</div></td>
          <td width="89" bgcolor="#FFFFFF"><div align="center">服务</div></td>
          <td width="89" bgcolor="#FFFFFF"><div align="center">删除</div></td>
        </tr>
        <?php
		  $sql1=mysql_query("select * from tb_bbqb where bccdid='".$_GET[bccdid]."'",$conn);
		  $info1=mysql_fetch_array($sql1);
          if($info1==false){
		    echo "<div align=center>该编程词典暂无版本信息！</div>";
		   
		  }else{
		   do{
		?>
		
		<tr>
          <td height="22" bgcolor="#FFFFFF"><div align="center">
		  <?php
		      
		     $sql2=mysql_query("select * from tb_bb where id='".$info1[bbid]."'",$conn);
			 $info2=mysql_fetch_array($sql2);
			 echo unhtml($info2[bbname]);
		  
		  ?></div></td>
          <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[price];?></div></td>
          <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo unhtml($info1[content]);?></div></td>
          <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo unhtml($info1[gn]);?></div></td>
          <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo unhtml($info1[fw]);?></div></td>
          <td height="22" bgcolor="#FFFFFF"><div align="center"><a href="javascript:if(window.confirm('您确定删除该版本信息么？')==true){window.location.href='deletebbqb.php?id=<?php echo $info1[id];?>';}"><img src="images/del.gif" width="22" height="22" border="0"></a></div></td>
        </tr>
		<?php
		 }while($info1=mysql_fetch_array($sql1));
		 }
		?>
		
      </table>
	  <br><br>
	  
	  <table width="565" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
      <script language="javascript">
	    function chkinput(form){
		
		  if(form.bbid.value==""){
		    alert("请选择版本名称！");

		    form.bbid.focus();
			return(false);
		  }
		  
		   if(form.price.value==""){
		    alert("请输入编程词典价格！");
		    form.price.focus();
			return(false);
		  }
		  
		    if(isNaN(form.price.value)==true){
			  
			   alert("编程词典价格只能为数字！");
		       form.price.focus();
			   return(false);
			
			}
		  
		  
		  
		 if(form.content.value==""){
		    alert("请输入编程词典内容简介！");
		    form.content.focus();
			return(false);
		  }
		  if(form.gn.value==""){
		    alert("请输入编程词典功能！");
		    form.gn.focus();
			return(false);
		  }
		    if(form.fw.value==""){
		    alert("请输入编程词典服务！");
		    form.fw.focus();
			return(false);
		  }
		  
		 return(true);
		
		}
	  
	  </script>
	
	
	  <form name="form1" method="post" action="savebccdbb.php" onSubmit="return chkinput(this)">
	  
	    <tr>
          <td width="144" height="25" bgcolor="#FFFFFF"><div align="center">编程词典名称：</div></td>
          <td width="453" bgcolor="#FFFFFF">&nbsp;<input type="text" name="bccdname" size="25" class="txt_grey" disabled="disabled" value="<?php
		   $sql4=mysql_query("select bccdname from tb_bccd where id='".$_GET[bccdid]."'",$conn);
		   $info4=mysql_fetch_array($sql4);
		   echo unhtml($info4[bccdname]);
		  ?>">
		  <input type="hidden" name="bccdid" value="<?php echo $_GET[bccdid];?>">
		  </td>
        </tr>
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">版本名称：</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<select name="bbid">
            
			<option value="">请选择版本名称</option>
			
			<?php
			  $sql3=mysql_query("select * from tb_bb order by createtime desc ",$conn);
			  $info3=mysql_fetch_array($sql3); 
			  if($info3==false){
			    echo  "<option>暂无版本信息</option>";
			  }else{
			    do{
			 ?>
			
			  <option  value="<?php echo $info3[id];?>"><?php echo unhtml($info3[bbname]);?></option>
			
			<?php
			     }while($info3=mysql_fetch_array($sql3));
			}
			?>
			
          </select>
          </td>
        </tr>
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">价格：</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="price" size="25" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="80" bgcolor="#FFFFFF"><div align="center">该版该类编程词典简介： </div></td>
          <td height="80" bgcolor="#FFFFFF">&nbsp;<textarea name="content" rows="5" cols="60" class="textarea"></textarea></td>
        </tr>
        <tr>
          <td height="80" bgcolor="#FFFFFF"><div align="center">该版该类编程词典功能：</div></td>
          <td height="80" bgcolor="#FFFFFF">&nbsp;<textarea name="gn" rows="5" cols="60" class="textarea"></textarea></td>
        </tr>
        <tr>
          <td height="80" bgcolor="#FFFFFF"><div align="center">该版该类编程词典服务：</div></td>
          <td height="80" bgcolor="#FFFFFF">&nbsp;<textarea name="fw" rows="5" cols="60" class="textarea"></textarea></td>
        </tr>
        <tr>
          <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="添加" class="btn_grey">&nbsp;&nbsp;<input type="reset" value="重写" class="btn_grey"></div></td>
        </tr>
		
		</form>
		
</table>	
	  <?php
	     }
	  ?>
</td>
       </tr>
     </table>  
</body>
</html>
