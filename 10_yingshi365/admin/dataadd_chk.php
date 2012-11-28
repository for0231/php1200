<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
	include "inc/chec.php";
	include "conn/conn.php";
	include "inc/func.php";
	$p_type = array("jpg","jpeg","bmp","gif");
	$f_type = array("avi","rm","rmvb","wav","mp3","mpg");
	$audio_path = "../upfiles\\audio";
	$video_path = "../upfiles\\video";
	$picture_path ="";
	$file_path = "";
	/*  判断上传图片类型和文件大小，上传图片 */
	if($_FILES[picture][size] > 0 and $_FILES[picture][size] < 700000){
		if(($postf = f_postfix($p_type,$_FILES[picture][name])) != false){
			$picture_path = time().".".$postf;
			if($_POST[action] == "a"){
				if($_FILES[picture][tmp_name])
					move_uploaded_file($_FILES[picture][tmp_name],$audio_path."\\".$picture_path);
				else{
					echo "<script>alert('上传图片失败！');history.go(-1);</script>";
					exit();
				}
			}else if($_POST[action] == "v"){
				if($_FILES[picture][tmp_name])
					move_uploaded_file($_FILES[picture][tmp_name],$video_path."\\".$picture_path);
				else{
					echo "<script>alert('上传图片失败！');history.go(-1);</script>";
					exit();
				}
			}
		}else{
			echo "<script>alert('上传图片格式错误！111');history.go(-1);</script>";
			exit();
		}
	}else if($_FILES[picture][size] > 700000){
			echo "<script>alert('上传图片大小超出范围！');history.go(-1);</script>";
			exit();
	}
	else{
		$picture = "";
	}
	/******************************/
	/*  判断上传文件类型与大小，上传文件  */
	if($_FILES[address][size] > 0){
		//如果是视频文件
		if($_POST[action] == "a"){
			if($_FILES[address][size] < 300000000){
				if(($postf = f_postfix($f_type,$_FILES[address][name])) != false){
					$file_path = time().".".$postf;
					if($_FILES[address][tmp_name])
						move_uploaded_file($_FILES[address][tmp_name],$audio_path."\\".$file_path);
					else{
						echo "<script>alert('上传文件错误！');history.go(-1);</script>";
						exit();
					}
				}
				else{
					echo "<script>alert('上传文件格式错误！');history.back(-1);</script>";
					exit();
				}
			}else{
				echo "<script>alert('上传文件大小错误！');history.go(-1);</script>";
				exit();
			}
		}
		//如果是音频文件
		else if($_POST[action] == "v"){
			if($_FILES[address][size] < 10000000){
				if(($postf = f_postfix($f_type,$_FILES[address][name])) != false){
					$file_path = time().".".$postf;
					if($_FILES[address][tmp_name])
						move_uploaded_file($_FILES[address][tmp_name],$video_path."\\".$file_path);
					else{
						echo "<script>alert('上传文件错误！');history.go(-1);</script>";
						exit();
					}
				}
				else{
					echo "<script>alert('上传文件格式错误！');history.back(-1);</script>";
					exit();
				}
			}else{
				echo "<script>alert('上传文件大小错误！');history.go(-1);</script>";
				exit();
			}
		}
	}else{
		echo "<script>alert('没有上传文件或文件大于300M');history.go(-1);</script>";
		exit();
	}
	/****************/
	/*  相同的信息  */
	$names = $_POST[names];					//视频名称
	$grade = $_POST[grade];					//级别
	$sizes = $_FILES[address][size];
	$publisher = $_POST[publisher];			
	$actor = $_POST[actor];
	$language = $_POST[language];
	$style = $_POST[style];
	$types = $_POST[types];
	$froms = $_POST[from];
	$publishtime = $_POST[publishtime];
	$news = $_POST[news];
	$remark = $_POST[remark];
	
	/*****************/
	if($_POST[action] == "a"){
		/*  确认父级目录  */
		//保存路径
		//表单值
		$director = $_POST[director];
		$marker = $_POST[marker];
		$a_sqlstr = "insert into tb_audio (name,picture,sizes,grade,publisher,actor,director,marker,languages,type,style,froms,publishtime,bool,remark,property,address,username,issueDate)  values('$names','$picture_path','$sizes','$grade','$publisher','$actor','$director','$marker','$language','$types','$style','$from','$publishtime','$news','$remark','管理员','$file_path','$_SESSION[admin]','".date("Y-m-d H:i:s")."')";
	}
	else if($_POST[action] == "v"){
		//保存路径
		$actortype = $_POST[actortype];
		$ci = $_POST[ci];
		$qu = $_POST[qu];
		$a_sqlstr = "insert into tb_video (name,picture,actor,ci,qu,actortype,type,style,publisher,froms,sizes,languages,publishTime,remark,property,address,userName,issueDate) values('$names','$picture_path','$actor','$ci','$qu','$actortype','$types','$style','$publisher','$froms','$sizes','$language','$publishtime','$remark','管理员','$file_path','$_SESSION[admin]','".date("Y-m-d H:i:s")."')";
	}
	else
	{
		echo "<script>alert('错误');window.close();</script>";
		exit();
	}
	$a_rst = $conn->execute($a_sqlstr);
	if(!($a_rst == false))
		echo "<script>top.opener.location.reload();alert('添加成功');window.close();</script>";
	else
		echo "<script>alert('添加失败');history.go(-1);</script>";
?>