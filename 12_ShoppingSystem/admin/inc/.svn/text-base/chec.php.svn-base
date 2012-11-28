<?
	session_start();
	if(empty(isset($_SESSION['admin']))){
		echo "<script>alert('您没有登录或超时');history.back;</script>";
	}
	$ref = $_SERVER['HTTP_REFERER'];
	if($ref == ''){
		echo '对不起，不允许从地址栏访问!';
		exit();
	}else{
		$url = parse_url($ref);
		if($url[host] != '127.0.0.1' && $url[host] != 'localhost'){
			echo '不允许盗链';
			exit();
		}
	}

	
	
?>