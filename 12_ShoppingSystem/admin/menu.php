<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
include_once 'system/system.inc.php';
?>
<script language="javascript" src="js/changemenu.js"></script>
<link rel="stylesheet" href="css/menu.css" />
    <select id="bigclass" name="bigclass" onchange="changetype(this.value)">
	<option value="0">请选择类别</option>
	<?php
		$sql="select * from tb_class where supid = 0 ";
		$rst=$conn->execute($sql);
		while(!$rst->EOF){
	?>
	<option value="<? echo $rst->fields['id'];?>" <? if($_GET['id']==$rst->fields['id']){echo 'selected=selected';}?>><? echo $rst->fields['name'];?></option>
	<?php
			$rst->movenext();
		}
	?>
</select>
<select id="smallclass" name="smallclass" onchange="changestype(this.value)">
<option value="0">请选择类别</option>
	<?php
		if(!empty($_GET['id'])){
			$sql="select * from tb_class where supid =".$_GET['id'];
			$rst=$conn->execute($sql);
			if($rst->RecordCount() == 0){
	?>
				<option value="0">没有子类</option>
	<?php
    		}else{				
				while(!$rst->EOF){
	?>
     
	<option value="<? echo $rst->fields['id'];?>"><? echo $rst->fields['name'];?></option>
	<?php
					$rst->movenext();
				}
			}
		}
	?>
    </select>
	<font color="#FF0000">*</font> 