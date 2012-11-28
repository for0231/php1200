<?php include_once("conn/conn.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>
<script language="javascript">
    function open01(){
		if(kh.style.display=='')
		   kh.style.display='none';
		else if(kh.style.display=='none')
		   kh.style.display='';
	  } 
   
 function open02(){
		if(ts.style.display=='')
		   ts.style.display='none';
		else if(ts.style.display=='none')
		   ts.style.display='';
	  } 
 function open03(){
		if(cydy.style.display=='')
		   cydy.style.display='none';
		else if(cydy.style.display=='none')
		   cydy.style.display='';
	  } 
function open04(){
		if(file.style.display=='')
		   file.style.display='none';
		else if(file.style.display=='none')
		   file.style.display='';
	  } 

</script>
<body>

 <table width="167" border="0" cellspacing="0" cellpadding="0">
 
                <tr> 
                  <td><img src="images/bg_09.gif" width="167" height="21"></td>
                </tr>

                <tr> 
                  <td><img src="images/bg_14.gif" width="167" height="31" border="0" onClick="javascript:open04();"></td>
                </tr>
</table>
<table width="167" border="0" cellpadding="0" cellspacing="0" background="images/bg_34.gif" id="file"
			
			  <?php
		
if(!($_GET[lmlb]=="客户信息管理" || $_GET[lmlb]=="同事信息管理"||$_GET[lmlb]=="常用短语管理" ||$_GET[lmlb]=="短信记录管理")){
			  ?>  style="display:none"
			  <?php
			  }
			  ?>  
			  >
       <tr> 
        <td width="42" height="24" align="right" valign="middle">
          <div align="right"><a href="indexs.php?lmbs=<?php echo $_GET[lmbs];?>&lmlb=客户信息管理" class="STYLE1"><img src="images/bg_19.gif" width="20" height="19" border="0"></a></div></td>
        <td width="125" valign="middle"><a href="indexs.php?lmbs=<?php echo $_GET[lmbs];?>&lmlb=客户信息管理" class="STYLE1">&nbsp;客户信息管理</a></td>
  </tr>
<tr> 
        <td height="24" align="right">
	      <div align="right"><a href="indexs.php?lmbs=<?php echo $_GET[lmbs];?>&lmlb=客户信息管理" class="STYLE1"><img src="images/bg_19.gif" width="20" height="19" border="0"></a></div></td>
        <td><a href="indexs.php?lmbs=<?php echo $_GET[lmbs];?>&lmlb=同事信息管理" class="STYLE1">&nbsp;同事信息管理</a></td>
</tr>
<tr> 
        <td height="24" align="right">
	      <div align="right"><a href="indexs.php?lmbs=<?php echo $_GET[lmbs];?>&lmlb=客户信息管理" class="STYLE1"><img src="images/bg_19.gif" width="20" height="19" border="0"></a></div></td>
        <td><a href="indexs.php?lmbs=<?php echo $_GET[lmbs];?>&lmlb=常用短语管理" class="STYLE1">&nbsp;</a><a href="indexs.php?lmbs=<?php echo $_GET[lmbs];?>&lmlb=常用短语管理" class="STYLE1">常用短语管理</a></td>
</tr>
<tr> 
        <td height="24" align="right">
	      <div align="right"><a href="indexs.php?lmbs=<?php echo $_GET[lmbs];?>&lmlb=客户信息管理" class="STYLE1"><img src="images/bg_19.gif" width="20" height="19" border="0"></a></div></td>
        <td><a href="indexs.php?lmbs=<?php echo $_GET[lmbs];?>&lmlb=短信记录管理" class="STYLE1">&nbsp;</a><a href="indexs.php?lmbs=<?php echo $_GET[lmbs];?>&lmlb=短信记录管理" class="STYLE1">短信记录管理</a></td>
</tr>
      <tr> 
                  <td height="2" colspan="3" align="right"></td>
  </tr>
</table>


 <table width="14%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td><img src="images/bg_26.gif" width="167" height="31" border="0" onClick="javascript:open01();"></td>
                </tr>
</table>
<table width="167" border="0" cellpadding="0" cellspacing="0" background="images/bg_34.gif" id="kh"
			  style="display:none"
			  <?php
		
if(!($_GET[idss]=='$fields->value')){
			  ?>
			  <?php
			  }
			  ?>  
			  >
               
   <?php

	   $sql="select * from tb_customer";
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,1,1);
	   while(!$rs->eof)
	   {
 $fields=$rs->fields(customer_id);
	  ?>    
   <tr> 
        <td width="42" height="24" align="right"><img src="images/bg_19.gif" width="20" height="19"></td>
        <td><a href="che4.php?idss=<?php $fields=$rs->fields(customer_id);echo $fields->value;?>">&nbsp;
          <?php $fields=$rs->fields(customer_name);echo $fields->value;?>
        </a></td>
  </tr><?php
	     $rs->movenext;
	   }
	  ?>
      <tr> 
                  <td height="2" colspan="3" align="right"></td>
  </tr>
</table>


 <table width="14%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td><img src="images/bg_27.gif" width="167" height="31" border="0" onClick="javascript:open02();"></td>
                </tr>
</table>
<table width="167" border="0" cellpadding="0" cellspacing="0" background="images/bg_34.gif" id="ts"
			  style="display:none"

			  <?php
		
if(!($_GET[id]=='$fields->value')){
			  ?>
			  <?php
			  }
			  ?>  
			  >
               
    <?php
	   $sql="select * from tb_colleague";
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,3,1);
	   while(!$rs->eof)
	   {
 $fields=$rs->fields(colleague_id);
	  ?>
    <tr> 
	  <td width="42" height="24" align="right"><img src="images/bg_19.gif" width="20" height="19"></td>
        <td width="114">
		
<a href="che.php?id=<?php $fields=$rs->fields(colleague_id);echo $fields->value;?>">&nbsp;</a><a href="che.php?id=<?php $fields=$rs->fields(colleague_id);echo $fields->value;?>"><?php $fields=$rs->fields(colleague_name);echo $fields->value;?></a></td>
    </tr><?php
	     $rs->movenext;
	   }
	  ?>
      <tr> 
                  <td height="2" colspan="3" align="right"></td>
  </tr>
</table>
<table width="14%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td><img src="images/bg_28.gif" width="167" height="31" border="0" onClick="javascript:open03();"></td>
                </tr>
</table>
<table width="167" border="0" cellpadding="0" cellspacing="0" background="images/bg_34.gif" id="cydy"
			  style="display:none"
			  <?php
		
if(!($_GET[ides]=='$fields->value')){
			  ?>
			  <?php
			  }
			  ?>  
			  >
               
       <?php

	   $sqls="select * from tb_note";
	   $res=new com("adodb.recordset");
	   $res->open($sqls,$conn,1,1);
	   while(!$res->eof)
	   {
$fields=$res->fields(note_id);
	  ?>
       <tr> <td width="42" height="24" align="right"><img src="images/bg_19.gif" width="20" height="19"></td>
        <td width="122">
	<a href="che3.php?ides=<?php $fields=$res->fields(note_id);echo $fields->value;?>"><?php $fields=$res->fields(note_content);echo $fields->value;?></a>          </td>
  </tr><?php
	     $res->movenext;
	   }
	  ?>
      <tr> 
                  <td height="2" colspan="2" align="right"></td>
  </tr>
</table>



</body>
</html>
