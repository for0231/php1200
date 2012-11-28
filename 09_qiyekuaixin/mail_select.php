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
</script>
<body>
<?php include_once("conn/conn.php"); ?>
<table border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td><img src="images/bg_009.gif" width="167" height="21" ></td>
                </tr>
</table>

 <table width="14%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td><img src="images/bg_26.gif" width="167" height="31" border="0" onClick="javascript:open01();"></td>
                </tr>
</table>
<table width="167" border="0" cellpadding="0" cellspacing="0" background="images/bg_34.gif" id="kh"
			 
			  <?php
		
if(!($_GET[idss]=='$fields->value')){
			  ?> style="display:none"
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
     <td width="42" align="right"><img src="images/bg_19.gif" width="20" height="19"></td> 
        <td height="24">&nbsp;
	<a href="mail_che5.php?idss=<?php $fields=$rs->fields(customer_id);echo $fields->value;?>"><?php $fields=$rs->fields(customer_name);echo $fields->value;?></a>          </td>
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
      <td width="42" align="right"><img src="images/bg_19.gif" width="20" height="19"></td> 
        <td height="24">&nbsp;
		
<a href="mail_che6.php?id=<?php $fields=$rs->fields(colleague_id);echo $fields->value;?>"><?php $fields=$rs->fields(colleague_name);echo $fields->value;?></a></td>
  </tr><?php
	     $rs->movenext;
	   }
	  ?>
      <tr> 
                  <td height="2" colspan="3" align="right"></td>
  </tr>
</table>
 

</body>
</html>
