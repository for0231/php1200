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
	
	 <script language="javascript">
	   function chkinput(form){
	     if(form.typeid.value==""){
		   alert('请选择编程词典类别！');
		   form.typeid.focus();
		   return(false);
		 }
		 
		  if(form.bbid.value==""){
		   alert('请选择编程词典版本！');
		   form.bbid.focus();
		   return(false);
		 }
		 
		  if(form.xlh.value==""){
		   alert('请输入编程词典序列号！');
		   form.xlh.focus();
		   return(false);
		 }
		 return(true); 
	   
	   }
	 
	 </script>
	<table width="500" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
         <form name="form1" method="post" action="savexlh.php" onSubmit="return chkinput(this)">
		
		<tr>
          <td height="25" colspan="2" align="center" class="a5"><?php echo $htgl;?></td>
        </tr>
        <tr>
          <td width="100" height="25" bgcolor="#FFFFFF"><div align="center">编程词典类别：</div></td>
          <td width="397" bgcolor="#FFFFFF">&nbsp;<select name="typeid" class="txt_grey">
                <option value="" selected="selected">请选择</option>
				<?php
				 include_once("../conn/conn.php");
				 $sql=mysql_query("select * from tb_type order by createtime desc",$conn);
				 $info=mysql_fetch_array($sql);
				 if($info==false)
				  {
				   echo "<option >暂无类别</option>";
				  }
				  else
				   {
				      do
				       {
					      echo "<option value=".$info[id].">".$info[typename]."</option>";
					
					   }
				      while($info=mysql_fetch_array($sql));
			    	}		
				?>
				
              </select></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">版本：</div></td>
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
			
			  <option  value="<?php echo $info3[id];?>"><?php echo $info3[bbname];?></option>
			
			<?php
			     }while($info3=mysql_fetch_array($sql3));
			}
			?>
			
          </select></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">序列号： </div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="xlh" size="40" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="添加" class="btn_grey">&nbsp;&nbsp;<input type="reset" value="重写" class="btn_grey"></div></td>
        </tr>
		
		</form>
</table>
      
</body>
</html>
