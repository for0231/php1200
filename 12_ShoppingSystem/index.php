<?php 
session_start(); 						//初始化session变量
require_once("system/system.inc.php");  //获取数据库连接、管理和模板类返回的对象
include_once "public.php";				//包含公告模块
include_once "links.php";				//包含友情链接模块
if($_SESSION["member"]==""){			//判断SESSION变量的值是否为空
	$smarty->assign("member","F");		//如果为空，则为模板变量赋值为F
}else{
	$smarty->assign("member",$_SESSION['member']);	//否则将SESSION变量的值赋给模板变量
}	
if($_GET["page"]==""){					//判断变量page的值是否为空
	$smarty->assign("page","F");		//如果为空，为模板变量赋值为F
}
switch($_GET["page"]){					//应用Switch语句，根据条件进行判断，实现页面跳转
	  case "hyzx":
	  	include_once "member.php";		//包含指定的PHP文件
		if($_GET['action'] == 'modify'){	//根据action的值，指定不同的模板页
			$smarty->assign("switchs",'modifypwd.html');	//将指定的模板页赋给模板变量
		}else{
			$smarty->assign("switchs",'membershow.html');
		}
	  	break;
	  case 'allpub':
	    include_once 'allpub.php';
			$smarty->assign("switchs","allpub.html");	//将指定的模板页赋给模板变量
		break;
	  case 'nom':
	    include_once 'allnom.php';
			$smarty->assign("switchs","allnom.html");
		break;
	  case 'new':
	    include_once 'allnew.php';
			$smarty->assign("switchs","allnew.html");
		break;
	  case 'hot':
	    include_once 'allhot.php';
			$smarty->assign("switchs","allhot.html");
		break;
	  case 'shopcar':
	    include_once 'myshopcar.php';
			$smarty->assign("switchs","myshopcar.html");
		break;
	  case 'settle':
	    include_once 'settle.php';
			$smarty->assign("switchs","settle.html");
		break;
	  case 'queryform':
	    include_once 'queryform.php';
			$smarty->assign("switchs","queryform.html");
		break;
	  default:
	    include_once 'nominate.php';
			$smarty->assign("switches","nominate.html");
		include_once 'newhot.php';
			$smarty->assign("switchs","newhot.html");
	}
	$smarty->display('index.html');				//指定模板页
?>