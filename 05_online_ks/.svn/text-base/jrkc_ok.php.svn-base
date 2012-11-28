<?php  
include("conn/conn.php");
//单选
if($kt_0==true){
	for($i=0;$i<count($kt_0);$i++){
		$array=$_POST["kt_daan".$kt_0[$i]];
		while(list($name,$value)=each($array)){
			$query="select * from tb_kt where kt_id='".$_POST[kt_0][$i]."' and kt_zqdaan='".$value."'";
			$result=mssql_query($query);
			$myrow=mssql_fetch_array($result);
			if(mssql_num_rows($result)>0){
				echo "正确答案：".substr($myrow[kt_zqdaan],0,1);
				echo "分数：$myrow[kt_fs]";
			}else{
				echo "您的答案：".substr($value,0,1);
				echo "分数：0";
			}
		}
	}
}
//多选
if($kt_1==true){
	for($m=0;$m<count($kt_1);$m++){
		$array=$_POST["kt_daanes".$kt_1[$m]];
			$string=implode("*",$array);
			$query="select * from tb_kt where kt_id='".$_POST[kt_1][$m]."' and kt_zqdaan='".$string."'";
			$result=mssql_query($query);
			$myrow=mssql_fetch_array($result);
			if(mssql_num_rows($result)>0){
				echo "正确答案：".$myrow[kt_zqdaan];
				echo "分数：$myrow[kt_fs]";
			}else{
				echo "您的答案：";
				for($n=0;$n<count($array);$n++){
					echo substr($array[$n],0,1);
				}
				echo "分数：0";
			}   	
	}
}

//简答题
if($kt_2==true){
	for($a=0;$a<count($kt_2);$a++){
		$array=$_POST[kt_daan2];
		while(list($name,$value)=each($array)){
			$query="select * from tb_kt where kt_id='".$_POST[kt_2][$a]."' and kt_zqdaan='".$value."'";
			$result=mssql_query($query);
			$myrow=mssql_fetch_array($result);
			if(mssql_num_rows($result)>0){
				echo "正确答案：".$myrow[kt_zqdaan];
				echo "分数：$myrow[kt_fs]";
			}else{
				echo "您的答案：".$value;
				echo "分数：0";
			}
		}
	}
}
//论述
if($kt_3==true){
	for($b=0;$b<count($kt_3);$b++){
		$array=$_POST[kt_daan3];
		while(list($name,$value)=each($array)){
			$query="select * from tb_kt where kt_id='".$_POST[kt_3][$b]."' and kt_zqdaan='".$value."'";
			$result=mssql_query($query);
			$myrow=mssql_fetch_array($result);
			if(mssql_num_rows($result)>0){
				echo "正确答案：".$myrow[kt_zqdaan];
				echo "分数：$myrow[kt_fs]";
			}else{
				echo "您的答案：".$value;
				echo "分数：0";
			}
		}
	}
}
?>