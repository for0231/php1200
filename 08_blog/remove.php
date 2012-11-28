<?php  
header ( "Content-type: text/html; charset=gb2312" ); //ÉèÖÃÎÄ¼þ±àÂë¸ñÊ½       
	include "Conn/conn.php";
    $sql="delete from tb_tpsc where id=".$pic_id;
    $result=mysql_query($sql);
	if($result){
		echo "<script>alert('Í¼Æ¬É¾³ý³É¹¦!');location='browse_pic.php';</script>";
	}
	else{	
		echo "<script>alert('Í¼Æ¬É¾³ý²Ù×÷Ê§°Ü!');history.go(-1);</script>";
	}
?> 



