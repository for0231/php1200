<?php
/**
 * 用户管理控制器
 *
 */
class Admin_UserController extends Zend_Controller_Action
{
    //用户表模型
    private $_user;
    //工程配置对象
    private $_config;
    //初始控制器
    public function init ()
    {
        //初始用户表模型
        $this->_user = new Model_DbTable_User();
        //获取工程配置文件
        $this->_config = Zend_Registry::get('config');
        $this->view->config = $this->_config;
    }
    /**
     * 设置页面信息
     *
     * @param string $title
     * @param string $position
     * @param string $layout
     */
    private function _setPageInfo ($title, $position, $layout = 'admin')
    {
        //主题
        $this->view->title = $title . '-' . $this->_config['pageInfo']['default']['title'];
        //当前页面位置
        $this->view->position = $this->_config['pageInfo']['default']['title'] . '　>>　管理中心　>>　' . $position;
        //页面布局
        if ($layout == null) {
            $this->_helper->layout->disableLayout();
        } else {
            $this->_helper->layout->setLayout($layout);
        }
    }
    /**
     * 用户管理首页
     *
     */
    public function indexAction ()
    {
        //自动转向用户添加页面
        $this->_redirect('/admin/user/list');
    }
    /**
     *　用户信息列表
     *
     */
    public function listAction ()
    {
        //获取页面参数
        $page = $this->_request->getParam('page');
        $lt = $this->_request->getParam('lt');
        //每页显示记录数
        $pageSize = 20;
        //查询结果分页
        $paginator = $this->_user->findByPage($lt, $page, $pageSize);
        //传递页面参数
        $this->view->lt = $lt;
        $this->view->paginator = $paginator;
        // 设置页面信息
        $title = '待更改的用户信息列表';
        $this->_setPageInfo($title, $title);
    }
    /**
     * 查询新闻信息
     *
     */
    public function searchAction ()
    {
        //获取页面参数
        $keywords = urldecode($this->_request->getParam('keywords'));
        //开始查询并返回查询结果
        if ($keywords != null && trim($keywords) != '') {
            //查询表单回填数据
            $fData = array();
            $fData['keywords'] = $keywords;
            $this->view->fData = $fData;
            $users = $this->_user->findByLike($keywords);
            $this->view->users = $users;
            $this->view->isShow = 'T';
        }
        //设置页面信息
        $title = '用户信息查询';
        $this->_setPageInfo($title, $title);
    }
    /**
     * 删除用户信息
     *
     */
    public function deleteAction ()
    {
        //页面编码
        header('content-type:text/html; charset=utf-8');
        //去掉视图和布局
        $this->_helper->layout()->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        //接收页面参数
        $id = $this->_request->getParam('id');
        $isSearch = $this->_request->getParam('isSearch');
        $where = $this->_user->getAdapter()->quoteInto('id=?', $id);
        $this->_user->delete($where);
        //返回
        if ($isSearch != null && $isSearch == 'T') {
            $this->_redirect('/admin/user/search/keywords/' . urlencode($this->_request->getParam('keywords')));
        } else {
            $this->_redirect('/admin/user/list/lt/0/page/1');
        }
        exit();
    }
}