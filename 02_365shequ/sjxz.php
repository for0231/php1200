<?php
include_once("conn/conn.php");
include_once("top.php");
?>
<table width="870" height="30" align="center" background="images/bg_14(1).jpg"><tr><td width="129" rowspan="2">&nbsp;</td>
    <td width="729"></td>
</tr>
  <tr>
    <td><span class="a9">升级下载</span></td>
  </tr>
</table>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">

<table width="750" height="200" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="190" valign="top"><table width="190" height="190" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><br><img src="images/bg_14(6).jpg" width="137" height="163" /></td>
                </tr>
              </table></td>
              <td width="557" valign="top">
			    <br>
				<table width="520" height="60" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                  <tr>
                    <td bgcolor="#FFFFFF">&nbsp;使用说明：</td>
                  </tr>
                </table>
                <br>
				<table width="520" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="center">请选择你所购买的编程词典类别：
          <select name="select_type" onChange="javascript:window.location=this.options[this.selectedIndex].value;">
	<?php
	  $sql=mysql_query("select * from tb_type order by createtime desc",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info=="")
	  {
	    echo "<option>暂无讨论区</option>";
	  }
	  else
	  { 
	   echo "<option>-请选择-</option>";
	   do
	   {
	    echo "<option value='sjxz.php?id=".$info[id]."'>".$info[typename]."</option>";
	   }
	   while($info=mysql_fetch_array($sql));
	  } 
	 ?>
      </select>
          </div></td>
        </tr>
      </table>
	<br>
	  
	  
	  <?php
	   if($_GET[id]!=""){
	  ?>
	  <table width="520" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="110"><div align="left"><font color="#FF6600">当前编程词典类别：</font></div></td>
          <td width="410">&nbsp;<font color="#FF6600"><?php
		    $sql1=mysql_query("select * from tb_type where id='".$_GET[id]."'",$conn);
		    $info1=mysql_fetch_array($sql1);
			echo unhtml($info1[typename]);
		  
		  ?></font></td>
        </tr>
      </table>
	  <table width="520" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <tr>
          <td width="229" height="22" bgcolor="#FFFFFF"><div align="center">升级包名称</div></td>
          <td width="97" bgcolor="#FFFFFF"><div align="center">版本</div></td>
          <td width="122" bgcolor="#FFFFFF"><div align="center">更新时间</div></td>
          <td width="67" bgcolor="#FFFFFF"><div align="center">立即下载</div></td>
        </tr>
		<?php
		  $sql2=mysql_query("select * from tb_sjxz where typeid='".$_GET[id]."' order by addtime desc",$conn);
		  $info2=mysql_fetch_array($sql2);
		  if($info2==false){
		?>
	    <tr>
          <td height="22" colspan="4" bgcolor="#FFFFFF"><div align="center">最不起，暂无该类编程词典升级包！</div></td>
        </tr>
		<?php
		}else{
          $sql20=mysql_query("select * from tb_xlh where bccdid='".$info2[typeid]."' and bbid='".$info2[bbid]."'",$conn);
		  $info20=mysql_fetch_array($sql20);
		  do{
		
		?>
		
       
	    <tr>
          <td height="22" bgcolor="#FFFFFF">&nbsp;<?php echo unhtml($info2[name]);?></td>
          <td height="22" bgcolor="#FFFFFF"><div align="center"><?php
		   $sql3=mysql_query("select * from tb_bb where id='".$info2[bbid]."'",$conn);
		   $info3=mysql_fetch_array($sql3);
		   echo unhtml($info3[bbname]);
		  ?></div></td>
          <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo $info2[addtime];?></div></td>
          <td height="22" bgcolor="#FFFFFF"><div align="center">
		   <?php
		    if($_SESSION[unc]!=""){   
		   
		   ?>
		   
		   
		  
		  <img src="images/bg_14(5).jpg" width="22" height="22" border="0" onclick="opendiv(<?php echo $info20[id];?>,<?php echo $info3[id];?>,<?php echo $_GET[id];?>,<?php echo $info2[id];?>)"/>
		  
		  
		  
		  <?php
		  }else{
		  ?>
		  <img src="images/bg_14(5).jpg" width="22" height="22" border="0" onclick="javascript:alert('请先登录本站，然后下载升级包！');"/>
		  
		  <?php
		  
		  }
		  ?>
		  
		  </div></td>
        </tr>
		<?php
		   }while($info2=mysql_fetch_array($sql2));
		 }
		?>
      </table>
	   <?php
	     }
	   ?>
	  
	  
	  <br><br>			  </td>
            </tr>
          </table>
<script language="javascript">
  function opendiv(x,y,z,m){
  
      User.style.display='';
      form_xlh.xzid.value=x;
	  form_xlh.bbid.value=y;
	  form_xlh.pid.value=z;
	  form_xlh.sid.value=m;
	  form_xlh.xlh.focus();
  }

</script>

<div id="User" style="position:absolute; width:941px; height:200px; display:none; left: 33px; top: 294px;">
  <table width="600" height="150" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td bgcolor="#999999"  style="filter:alpha(opacity=90)"><table width="400" height="100" border="0" align="center" cellpadding="0" cellspacing="0" >
	  <script language="javascript">
	     function chkinputxlh(form){
		   if(form.xlh.value==""){
		     alert('请输入产品序列号！');
		     form.xlh.focus();
			 return(false);
		   }
		   
		   if(form.sid.value==""){
		     alert('您的浏览器已经禁用了JavaScript，请启用！');
			 return(false);
		   
		   }
		   return(true);
		 
		 }
	  
	  </script>
	  <form name="form_xlh" method="post" action="downloadsj.php" onsubmit="return chkinputxlh(this)">
        <tr>
          <td background="images/xjxz_back.gif"><div align="center">请输入产品序列号：
			<input type="text" name="xlh" size="40" class="inputcss"><br><br>
            <input type="hidden" name="xzid" value="">
 			<input type="hidden" name="bbid" value="">
			<input type="hidden" name="pid" value="">
			<input type="hidden" name="sid" value="">
			<input type="submit" value="确定">&nbsp;&nbsp;
			<input type="button" value="取消"  onclick="User.style.display='none'"></div></td>
        </tr>
	</form>	
      </table></td>
    </tr>
  </table>
</div>



</td>
        </tr></table>
<?php
include_once("bottom.php");
?>




