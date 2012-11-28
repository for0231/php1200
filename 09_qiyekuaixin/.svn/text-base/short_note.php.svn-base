<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>短信群发</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<script language="javascript">
function checkregtel(regtel){
	var str=regtel;
	var Expression=/^(\d{11})$/; 
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}	
</script>
<script language="javascript">
function checkits(){
		if(form1.regtel.value==""){
	        alert("请输入注册的手机号码!");
   		    form1.regtel.select();
			return(false);
         } 
	if(!checkregtel(form1.regtel.value)){
		alert("您输入的手机号码格式不正确!");
	    form1.regtel.select();
	    return(false);
	}
     if(form1.regpwd.value==""){
			alert("请输入密码!");
			form1.regpwd.select();
			return(false);
		 }
	return(true);				 
}	
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<center>
<table width="590" height="172" border="2" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="2FB3EB">
      <tr>
        <td align="center" valign="top" bgcolor="#FFFFFF">
<table width="99%" height="30" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#E9E9E9">
  <tr>
    <td bgcolor="#FFFFFF"><table width="99%" height="21" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="530" height="21" bgcolor="#F8F8F8">&nbsp;<img src="images/mail_1.gif" width="240" height="19"></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="99%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="8"></td>
  </tr>
</table>
<table width="97%" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#EBEBEB">
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" height="30" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F8F8F8">
      <tr>
  <form name="form2" method="post" action="che2.php">
        <td width="305"><div align="center" class="STYLE1">添加手机号：</div></td>
        <td width="407"><div align="left"><input type="text" name="new_tel" size="40" class="inputcss">
        </div></td>
        <td width="233"><div align="left">
          <input name="button" type="submit" value="添加">
         
        </div></td>
 </form>
      </tr>
  </table>
      <table width="100%" height="30" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F8F8F8">
    <form name="form1" method="post" action="send.php" onSubmit="javascript: return checkits()"> 
	  <tr>
        <td height="20" colspan="2" class="STYLE1">&nbsp;&nbsp;&nbsp;发送的手机号码</td>
      </tr>
	      <tr>
        <td height="24" colspan="2"><div align="center" class="STYLE1">
         
 <?php
			    $array=explode("@",$_SESSION[producelist]);
				$arrayquatity=explode("@",$_SESSION[quatity]);
				
				 while(list($name,$value)=each($_POST))
				    {
					  for($i=0;$i<count($array)-1;$i++)
					  {
					    if(($array[$i])==$name)
						{
						  $arrayquatity[$i]=$value;  
						}
					  }
					  
					}
				  
			    $_SESSION[quatity]=implode("@",$arrayquatity);
				
				
				for($i=0;$i<count($array)-1;$i++)
				 { 
				 
				   $id=$array[$i];
				  
				  if($id!="")
				   {
				 $sql='select * from tb_colleague where colleague_id='.$id.'';
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,3,3);
			?>
<input type="hidden" name="colleague_tel[]" value="<?php $fields=$rs->fields(colleague_tel);echo $fields->value;?>"><?php $fields=$rs->fields(colleague_tel);echo $fields->value;?>
 <?php
			      
			      }
				 }
			 ?>

         
 <?php
			    $arrayss=explode("@",$_SESSION[producelistss]);
				$arrayquatityss=explode("@",$_SESSION[quatityss]);
				
				 while(list($name,$value)=each($_POST))
				    {
					  for($i=0;$i<count($arrayss)-1;$i++)
					  {
					    if(($arrayss[$i])==$name)
						{
						  $arrayquatityss[$i]=$value;  
						}
					  }
					  
					}
				  
			    $_SESSION[quatityss]=implode("@",$arrayquatityss);
				
				
				for($i=0;$i<count($arrayss)-1;$i++)
				 { 
				 
				   $idss=$arrayss[$i];
				  
				  if($idss!="")
				   {
				 $sql='select * from tb_customer where customer_id='.$idss.'';
	   $rsss=new com("adodb.recordset");
	   $rsss->open($sql,$conn,3,3);
			?>
<input type="hidden" name="colleague_tel[]" value="<?php $fields=$rsss->fields(customer_tel);echo $fields->value;?>"><?php $fields=$rsss->fields(customer_tel);echo $fields->value;?>
 <?php
			      
			      }
				 }
			 ?>



 <?php
					    $arrays=explode("@",$_SESSION[producelists]);
				$arrayquatitys=explode("@",$_SESSION[quatitys]);
				
				 while(list($name,$value)=each($_POST))
				    {
					  for($i=0;$i<count($arrays)-1;$i++)
					  {
					    if(($arrays[$i])==$name)
						{
						  $arrayquatitys[$i]=$value;  
						}
					  }
					  
					}
				  
			    $_SESSION[quatitys]=implode("@",$arrayquatitys);
				
				
				for($i=0;$i<count($arrays)-1;$i++)
				 { 
				 
				   $ids=$arrays[$i];
				  if($ids!="")
				   {
?>

<input type="hidden" name="colleague_tel[]" value="<?php echo $ids;?>">
<?php echo $ids;?>



<?php 

}}

?>
<a href="delete_tel.php">删除</a></div> 	  </td>
        </tr>
	
	<tr>
	    <td height="60"><div align="center" class="STYLE1">短信内容:</div></td>
	    <td height="60"><div align="left">
<textarea name="mess" cols="50" rows="5">     
<?php
  $arrayes=explode("@",$_SESSION[producelistes]);
  $arrayquatityes=explode("@",$_SESSION[quatityes]);
  while(list($names,$values)=each($_POST)){
	    for($i=0;$i<count($arrayes)-1;$i++){
		   if(($arrayes[$i])==$names){
			  $arrayquatityes[$i]=$values;  
		    }
		}
  }				  
  $_SESSION[quatityes]=implode("@",$arrayquatityes);
  for($i=0;$i<count($arrayes)-1;$i++){ 				 
	 $ides=$arrayes[$i];
     if($ides!=""){
	   $sql='select * from tb_note where note_id='.$ides.'';
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,3,3);
       $fields=$rs->fields(note_content);
       echo $fields->value;
	 }
  }
?>
</textarea>
	    </div></td>
	  </tr>  
	  <tr>
        <td width="306" height="20"><div align="center" class="STYLE1">注册手机号:</div></td>
        <td width="639" height="20"><div align="left"><input name="regtel" type="text" class="inputcss" id="regtel" size="30" >
        </div></td>
      </tr>
	  <tr>
        <td height="20"><div align="center" class="STYLE1">注册密码:</div></td>
        <td height="20"><div align="left"><input name="regpwd" type="password" class="inputcss" id="regpwd" size="30">
        </div></td>
      </tr>
	  <tr>
	    <td height="30" colspan="2" valign="middle"><div align="center">
	      <input name="Submit" type="submit" class="buttoncss" id="Submit" value="发送">
	    </div></td>
      </tr>
  </form>
</table></td>
  </tr>

</table>
<table width="99%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="8"></td>
  </tr>
</table>
<?php 
switch($lmlb){
     case "客户信息管理" :
	     include "customer_gl.php";

     break;
	 case "同事信息管理": 	  
         include "colleague_gl.php";
     break;
	 case "常用短语管理": 	  
         include "short_gl.php";
     break;
case "短信记录管理": 	  
         include "look_short.php";
     break;
	 case "":
	     include "mail_short_notes.php";
	  break;
}
?>
</td>
      </tr>
      
    </table>
</center>
</body>
</html>
