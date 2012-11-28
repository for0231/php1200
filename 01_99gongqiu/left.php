<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
<script language="javascript">
	  function chkinput(form){
	    if(form.content.value==""){
		  alert("请输入查询关键字!");
		  form.content.select();
		  return false;
		}
	  }
  function opengg(id){
    window.open("showgg.php?id="+id,"","width=679,height=443");
  }  
</script>
<table width="217" height="593" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="31" background="Images/line.gif">&nbsp;&nbsp;<img src="Images/landian.gif" width="9" height="9">&nbsp;&nbsp;<strong>推荐企业广告信息</strong></td>
  </tr>
  <tr>
    <td valign="top" background="Images/line2.gif"><table width="215"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><table width="210"  border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" colspan="2"></td>
            </tr>
            <?php
				 include("conn/conn.php");
				 include("JS/function.php");
				 $gsql=mysql_query("select * from tb_advertising where flag=1 order by id desc limit 0,10",$conn);
				 $ginfo=mysql_fetch_array($gsql);
				 if($ginfo==false){
			?>
            <tr>
              <td width="10" height="5">&nbsp;</td>
              <td height="20"><div align="left">暂无推荐企业广告信息!</div></td>
            </tr>
            <?php
			 }
			 else{
			   do{
			?>
            <tr>
              <td width="10" height="5"><div align="center">·</div></td>
              <td height="20"><div align="left"> <a href="javascript:opengg(<?php echo $ginfo[id];?>);">
             <?php 
			 echo  msubstr($ginfo[title],0,30);
			 if(strlen($ginfo[title])>30){
				echo "...";
			 }
		    ?>
              </a> </div></td>
            </tr>
            <?php
			 }while($ginfo=mysql_fetch_array($gsql));
			 }
			?>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="31" background="Images/line.gif">&nbsp;&nbsp;<img src="Images/landian.gif" width="9" height="9">&nbsp;&nbsp;<strong>信息快速检索</strong></td>
  </tr>
<form name="form1" method="post" action="findinfo.php"> 
  <tr>
    <td height="103" align="center" background="Images/query.gif">
      <table width="204" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="204" height="35">关键字：
            <input name="content" type="text" id="content" size="20"></td>
        </tr>
        <tr>
          <td height="30">条&nbsp;&nbsp;件：
            <select name="type">
              <option value="招聘信息">-招聘信息-</option>
              <option value="求职信息" selected>-求职信息-</option>
              <option value="培训信息">-培训信息-</option>
              <option value="家教信息">-家教信息-</option>
              <option value="房屋信息">-房屋信息-</option>
              <option value="车辆信息">-车辆信息-</option>
              <option value="求购信息">-求购信息-</option>
              <option value="出售信息">-出售信息-</option>
              <option value="招商引资">-招商引资-</option>
              <option value="公寓信息">-公寓信息-</option>
              <option value="寻人/物启示">-寻人/物启示-</option>
            </select>
</td>
        </tr>
        <tr>
          <td height="23" align="center"><input name="search" type="image" class="input1" id="search" src="Images/btn1.gif" width="67" height="23" border="0" onClick="return chkinput(form)">            </td>
        </tr>
      </table>
    </td>
  </tr>
</form>
  <tr>
    <td height="31" background="Images/line.gif">&nbsp;&nbsp;<img src="Images/landian.gif" width="9" height="9">&nbsp;&nbsp;<strong>联系我们</strong></td>
  </tr>
  <tr>
    <td align="center" valign="top" background="Images/line2.gif"><table width="190" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="20">&nbsp;</td>
      </tr>
      <tr>
        <td height="20">&nbsp;<span class="style1">易查供求信息网</span></td>
      </tr>
      <tr>
        <td height="3" background="Images/tiao.gif"></td>
      </tr>
      <tr>
        <td height="20">联系地址：吉林省长春市**街*号</td>
      </tr>
      <tr>
        <td height="20">联系电话：849789**</td>
      </tr>
      <tr>
        <td height="20">邮政编码：130000</td>
      </tr>
    </table></td>
  </tr>
</table>
