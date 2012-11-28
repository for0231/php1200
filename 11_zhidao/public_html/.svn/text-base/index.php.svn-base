<?php
/**
 * 项目启动页
 */
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application')); //应用路径
defined('APPLICATION_ENV') || define('APPLICATION_ENV', getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'project');  //应用环境
$arrayIncludePath = array('.', realpath(dirname(__FILE__) . '/../library'));  //指定工程包含目录
set_include_path(implode(PATH_SEPARATOR, $arrayIncludePath)); //将指定路径包含到工程中
require_once 'Zend/Application.php';  //包含Application.php文件
$application = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini'); //实例Zend_Application类
$application->bootstrap()->run(); //调用启动文件并运行项目
