<?php
/**
 * 后台默认控制器
 *
 */
class Admin_IndexController extends Zend_Controller_Action
{
    //项目配置信息
    private $_config;
    //用户表模型
    private $_user;
    //Zend_Auth对象
    private $_auth;
    /**
     * 控制器初始话
     *
     */
    public function init ()
    {
        //初始视图
        $this->initView();
        //获取页面配置信息对象
        $this->_config = Zend_Registry::get('config');
        $this->view->config = $this->_config;
        //实例用户表模型
        $this->_user = new Model_DbTable_User();
    }
    /**
     * 设置页面信息
     *
     * @param string $layout
     */
    private function _setPageInfo ($title = '', $layout = 'admin')
    {
        //主题
        $this->view->title = $title;
        //页面布局
        if ($layout == null) {
            $this->_helper->layout->disableLayout();
        } else {
            $this->_helper->layout->setLayout($layout);
        }
    }
    /**
     * 后台登录页
     *
     */
    public function indexAction ()
    {
        $errMsg = null;
        //如果用户提交表单，怎对用户身份进行验证
        if ($this->_request->isPost()) {
            //接收用户名密码
            $netname = trim($this->_request->getParam('netname'));
            $password = trim($this->_request->getParam('password'));
            //对用户身份 进行验证
            if ($this->_user->isValid($netname, $password)) {
                $admin = $this->_user->findByNetname($netname);
                if ($admin['usertype'] == 1) {
                    $this->_redirect('/adminCenter');
                    exit();
                } else {
                    $errMsg = '您无权登录管理中心！';
                }
            } else {
                $errMsg = '管理员名称或密码输入有误，请重新登录！';
            }
        }
        $this->view->errMsg = $errMsg;
        //页面信息
        $title = $this->_config['pageInfo']['admin']['title'] . '-' . $this->_config['pageInfo']['default']['title'];
        $this->_setPageInfo($title, null);
    }
    /**
     * 左侧导航树
     *
     */
    public function treeAction ()
    {
        //设置页面信息
        $title = $this->_config['pageInfo']['admin']['title'] . '-' . $this->_config['pageInfo']['default']['title'];
        $this->_setPageInfo($title, null);
    }
    /**
     * 后台首页
     *
     */
    public function mainAction ()
    {
        //设置页面信息
        $title = $this->_config['pageInfo']['admin']['title'] . '-' . $this->_config['pageInfo']['default']['title'];
        $this->_setPageInfo($title, null);
    }
    /**
     * 后台框架页
     *
     */
    public function frameAction ()
    {
        //登录用户信息
        $this->_auth = Zend_Registry::get('auth');
        if (! $this->_auth->hasIdentity()) {
            $this->_redirect('/');
        } else {
            $netname = $this->_auth->getIdentity();
            $this->_loginUser = $this->_user->findByNetname($netname);
            if ($this->_loginUser['usertype'] != 1) {
                $this->_redirect('/');
            }
            $this->view->loginUser = $this->_loginUser;
        }
        //设置页面信息
        $title = $this->_config['pageInfo']['admin']['title'] . '-' . $this->_config['pageInfo']['default']['title'];
        $this->_setPageInfo($title, null);
    }
}