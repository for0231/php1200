<?php
/**
 * 启动类
 *
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoloader ()
    {
        $moduleAutoloader = new Zend_Application_Module_Autoloader(array('namespace' => '' , 'basePath' => APPLICATION_PATH));
        return $moduleAutoloader;
    }
    protected function _initRegister ()
    {
        //配置文件
        $config = $this->getOptions();
        Zend_Registry::set('config', $config);
        //设置缓存
        $frontOptions = array('leftTime' => $config['cache']['leftTime'] , 'automatic_serialization' => true);
        $backOptions = array('cache_dir' => $config['cache']['cache_dir']);
        $cache = Zend_Cache::factory('Core', 'File', $frontOptions, $backOptions);
        Zend_Registry::set('cache', $cache);
        //session命名空间
        $sessionNamespace = new Zend_Session_Namespace('Project');
        Zend_Registry::set('sessionNamespace', $sessionNamespace);
        //Zend_Auth对象
        $auth = Zend_Auth::getInstance();
        $storage = new Zend_Auth_Storage_Session('Project', 'netname');
        $auth->setStorage($storage);
        Zend_Registry::set('auth', $auth);
    }
}
