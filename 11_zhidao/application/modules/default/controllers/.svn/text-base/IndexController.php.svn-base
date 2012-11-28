<?php
/**
 * 首页控制器
 */
class IndexController extends Zend_Controller_Action
{
    private $_titleModel;
    private $_bbsTypeModel;
    private $_keywordsModel;
    private $_config;
    private $_auth;
    /**
     * 控制器初始化
     *
     */
    public function init ()
    {
        //
        $this->initView();
        //
        $this->_titleModel = new Model_DbTable_Title();
        $this->_bbsTypeModel = new Model_DbTable_Bbstype();
        $this->_keywordsModel = new Model_DbTable_Keywords();
        //
        $types = $this->_bbsTypeModel->findAll(true);
        $this->view->types = $types;
        //
        $hotKeywordses = $this->_keywordsModel->findByHot(5, true);
        $this->view->hotKeywords = $hotKeywordses;
        $this->_config = Zend_Registry::get('config');
        $this->view->assign('config', $this->_config);
        //
        $this->_auth = Zend_Auth::getInstance();
        $this->_auth->setStorage(new Zend_Auth_Storage_Session('Project', 'netname'));
        //判断用户是否登录
        $isLogin = false;
        if ($this->_auth->hasIdentity()) {
            $isLogin = true;
        }
        $this->view->assign('isLogin', $isLogin);
    }
    /**
     * 设置页面信息
     *
     * @param string $title
     * @param string $keywords
     * @param string $description
     * @param string $layout
     */
    private function _pageInfo ($title, $keywords, $description, $layout = null)
    {
        $this->view->title = $title;
        $this->view->keywords = $keywords;
        $this->view->description = $description;
        if ($layout == null) {
            $this->_helper->layout->disableLayout();
        } else {
            $this->_helper->layout->setLayout($layout);
        }
    }
    /**
     * 首页Action
     *
     */
    public function indexAction ()
    {
        //
        $title = '明日知道-国内领先的IT技术搜素引擎';
        $keywords = '搜索|技术|asp|.net|php|java|jsp|c#|c++|vb';
        $description = '明日知道为开发人员提供快速高效的技术解决方案';
        $this->_pageInfo($title, $keywords, $description, null);
        $this->_auth = Zend_Auth::getInstance();
        $this->_auth->setStorage(new Zend_Auth_Storage_Session('Project', 'netname'));
        //判断用户是否登录
        $isLogin = false;
        if ($this->_auth->hasIdentity()) {
            $isLogin = true;
            $nowLoginNetname = $this->_auth->getIdentity();
            $this->view->assign('nowLoginNetname', $nowLoginNetname);
        }
        $this->view->assign('isLogin', $isLogin);
    }
    /**
     * 查询Action
     *
     */
    public function searchAction ()
    {
        //接收用户提交的查询关键字
        $keywordsStr = urldecode($this->_request->getParam('keywords'));
        $this->view->assign('keywordsStr', $keywordsStr);
        $typeid = $this->_request->getParam('typeid');
        $this->view->assign('typeid', $typeid);
        //
        $where = $this->_keywordsModel->getAdapter()->quoteInto('keyword=?', $keywordsStr);
        if (($arrayKey = $this->_keywordsModel->fetchRow($where)) == null) {
            $arrayInsert = array('keyword' => $keywordsStr , 'searchtime' => 1);
            $this->_keywordsModel->insert($arrayInsert);
        } else {
            $arrayUpdate = array('searchtime' => intval($arrayKey['searchtime']) + 1);
            $this->_keywordsModel->update($arrayUpdate, $this->_keywordsModel->getAdapter()->quoteInto('id=?', $arrayKey['id']));
        }
        //
        $this->view->assign('keywordsStr', $keywordsStr);
        $keywordsStrArray = explode(' ', $keywordsStr); //将关键字字符串用空格分割保存到数组中
        $this->view->assign('keywordsStrArray', $keywordsStrArray); //将数组赋给视图变量keywordsStrArray
        //
        $page = $this->_request->getParam('page');
        if ($page == null) {
            $page = 1;
        }
        $pageSize = 20;
        $paginator = $this->_titleModel->findByLike($keywordsStr, $typeid, null, $page, $pageSize);
        $this->view->assign('page', $page);
        $this->view->assign('pageSize', $pageSize);
        $this->view->assign('paginator', $paginator);
        //
        $title = '明日知道-国内专业的IT技术搜索专区';
        $keywords = '';
        $description = '';
        $this->_pageInfo($title, $keywords, $description, 'bbs');
    }
    /**
     * 关键字列表Action
     *
     */
    public function keywordsListAction ()
    {
        header('content-type:text/html; charset=utf-8'); //设置页面编码为utf-8
        $keyword = urldecode($this->_request->getParam('keyword')); //获取用户录入的关键字并进行URL解码
        $keywordses = $this->_keywordsModel->findByLike($keyword, 10, true); //调用关键字模型的findByLink()方法查询所有以该关键字开头的内容
        $total = 0; //保存总匹配关键字数
        if ($keywordses != null) {
            $total = count($keywordses); //统计总匹配关键字数
        }
        $str = '<input type="hidden" name="totalList" id="totalList" value="' . $total . '" />';
        foreach ($keywordses as $k => $key) { //通过循环形成下拉列表
            $str .= '<div id="listItem_' . $k . '" style="width:98%; clear:both; background-color:#FFFFFF; cursor:pointer;" onmouseover="this.style.backgroundColor=\'#158CD0\'; this.style.color=\'#FFFFFF\'" onmouseout="this.style.backgroundColor=\'#FFFFFF\'; this.style.color=\'#333333\'" onclick="setText(\'' . $key['keyword'] . '\')">';
            $str .= '<ul>';
            $str .= '    <li id="listItem_li_' . $k . '" style="width:60%; height:18px; line-height:18px; text-align:left; float:left;">' . $key['keyword'] . '</li>';
            $str .= '    <li style="width:38%; height:18px; line-height:18px; text-align:right; float:right;">' . $key['searchtime'] . '</li>';
            $str .= '</ul>';
            $str .= '</div>';
        }
        echo $str;
        $this->_helper->layout->disableLayout(); //取消页面布局
        $this->_helper->viewRenderer->setNoRender(); //取消视图
    }
}