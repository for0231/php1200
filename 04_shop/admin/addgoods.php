<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>添加商品</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php include("conn/conn.php");?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">添加商品</div></td>
  </tr>
  <tr>
    <td height="253" bgcolor="#666666"><table width="720" border="0" cellpadding="0" cellspacing="1">
	<script language="javascript">
	function chkinput(form)
	{
	  if(form.mingcheng.value=="")
	   {
	     alert("请输入商品名称!");
		 form.mingcheng.select();
		 return(false);
	   }
	  
	
	
	  if(form.huiyuanjia.value=="")
	   {
	     alert("请输入商品会员价!");
		 form.huiyuanjia.select();
		 return(false);
	   }
	 
	
	
	  if(form.shichangjia.value=="")
	   {
	     alert("请输入商品市场价!");
		 form.shichangjia.select();
		 return(false);
	   }
	  if(form.dengji.value=="")
	   {
	     alert("请输入商品等级!");
		 form.dengji.select();
		 return(false);
	   }
	   
	   
	   if(form.pinpai.value=="")
	   {
	     alert("请输入商品品牌!");
		 form.pinpai.select();
		 return(false);
	   }
	   
	   if(form.xinghao.value=="")
	   {
	     alert("请输入商品型号!");
		 form.xinghao.select();
		 return(false);
	   }
	   if(form.shuliang.value=="")
	   {
	     alert("请输入商品数量!");
		 form.shuliang.select();
		 return(false);
	   }
	   if(form.jianjie.value=="")
	   {
	     alert("请输入商品简介!");
		 form.jianjie.select();
		 return(false);
	   }
	
	   return(true);
	}
    </script>
     <form name="form1" enctype="multipart/form-data" method="post" action="savenewgoods.php" onSubmit="return chkinput(this)">
	  <tr>
        <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">商品名称：</div></td>
        <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="mingcheng" size="25" class="inputcss"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">上市时间：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
<select name="nian" class="inputcss">
 <?php 
  for($i=1995;$i<=2050;$i++)
  {
 ?>
  <option><?php echo $i;?></option>
  <?php 
  }
 ?>
</select>          
年
          <select name="yue" class="inputcss">
            <?php 
            for($i=1;$i<=12;$i++)
             {
            ?>
           <option><?php echo $i;?></option>
            <?php 
             }
             ?>
          </select>
          月
          <select name="ri" class="inputcss">
		  <?php 
            for($i=1;$i<=31;$i++)
             {
            ?>
		  
            <option><?php echo $i;?></option>
		 <?php 
             }
             ?>
          </select>
          日</div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">价格：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">市场价：<input type="text" name="shichangjia" size="10" class="inputcss" >
          元&nbsp;&nbsp;会员价：
          <input type="text" name="huiyuanjia" size="10" class="inputcss">
          元</div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">商品类型：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
           <?php
			$sql=mysql_query("select * from tb_type order by id desc",$conn);
			$info=mysql_fetch_array($sql);
			if($info==false)
			{
			  echo "请先添加商品类型!";
			}
			else
			{
			?>
            <select name="typeid" class="inputcss">
			<?php
			do
			{
			?>
              <option value=<?php echo $info[id];?>><?php echo $info[typename];?></option>
			<?php
			}
			while($info=mysql_fetch_array($sql));
			?>  
            </select>
            <?php
		     }
		    ?>
        </div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">商品等级：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
          <select name="dengji" class="inputcss">
            <option selected value="精品">精品</option>
            <option value="一般">一般</option>
            <option value="二手">二手</option>
            <option value="淘汰">淘汰</option>
          </select>
        </div></td>
      </tr>
      <tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center">商品品牌：</div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="left"><input type="text" name="pinpai" class="inputcss" size="20"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">商品型号：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="xinghao" class="inputcss" size="20"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">是否推荐：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
          <select name="tuijian" class="inputcss" >
            <option selected value=1>是</option>
            <option value=0>否</option>
          </select>
     </div>
      </td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">商品数量：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="shuliang" class="inputcss" size="20"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">商品图片：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        <input type="file" name="upfile" class="inputcss" size="30"></div></td>
      </tr>
      <tr>
        <td height="80" bgcolor="#FFFFFF"><div align="center">商品简介：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><textarea name="jianjie" cols="80" rows="8" class="inputcss"></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input name="submit" type="submit" class="buttoncss" id="submit" value="添加">
        &nbsp;&nbsp;<input type="reset" value="重写" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>
