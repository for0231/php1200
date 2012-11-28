<?php
/**
 * 问题控制器
 */
class QuestionController extends Zend_Controller_Action
{
    private $_userModel;
    private $_bbstypeModel;
    private $_titleModel;
    private $_replyModel;
    private $_config;
    private $_auth;
    private $_keywordsModel;
    /**
     * 初始控制器
     */
    public function init ()
    {
        $this->initView();
        $this->_userModel = new Model_DbTable_User();
        $this->_bbstypeModel = new Model_DbTable_Bbstype();
        $this->_titleModel = new Model_DbTable_Title();
        $this->_replyModel = new Model_DbTable_Reply();
        $this->_keywordsModel = new Model_DbTable_Keywords();
        $this->_config = Zend_Registry::get('config');
        $this->view->assign('config', $this->_config);
       // $this->_auth = Zend_Auth::getInstance();
      //  $this->_auth->setStorage(new Zend_Auth_Storage_Session('Project', 'netname'));
      $this->_auth = Zend_Registry::get('auth');
        //判断用户是否登录
        $isLogin = false;
        $nowUsertype = 0;
        if ($this->_auth->hasIdentity()) {
            $isLogin = true;
            $nowLoginUser = $this->_userModel->findByNetname($this->_auth->getIdentity());
            $nowUsertype = $nowLoginUser['usertype'];
        }
        //
        $types = $this->_bbstypeModel->findAll(true);
        $this->view->types = $types;
        //
        $hotKeywordses = $this->_keywordsModel->findByHot(5, true);
        $this->view->hotKeywords = $hotKeywordses;
        $this->view->assign('isLogin', $isLogin);
        $this->view->assign('nowUsertype', $nowUsertype);
    }
    /**
     * 公共方法
     *
     * @param string $title
     * @param string $layout
     */
    private function _setPageInfo ($title, $keywords = '', $description = '', $layout = 'bbs')
    {
        if ($title == '') {
            $title = $this->_config['bbs']['title'];
        } else {
            $title .= '-' . $this->_config['bbs']['title'];
        }
        if ($keywords == '') {
            $keywords = $this->_config['bbs']['keywords'];
        } else {
            $keywords .= '|' . $this->_config['bbs']['keywords'];
        }
        if (trim($description) == '') {
            $description = $this->_config['bbs']['description'];
        }
        // echo $description;
        $this->view->assign('title', $title);
        $this->view->assign('keywords', $keywords);
        $this->view->assign('description', $description);
        $this->_helper->layout->setLayout($layout);
    }
    /**
     * 论坛首页
     *
     */
    public function indexAction ()
    {
        $this->_setPageInfo('', '', '');
        $bbstypes = $this->_bbstypeModel->findAll(false);
        $this->view->assign('bbstypes', $bbstypes);
    }
    /**
     * 主题列表页
     *
     */
    public function forumAction ()
    {
        //获取并解析查询参数
        $param = $this->_request->getParam('param');
        $arrayParam = explode('-', $param);
        $typeid = $arrayParam[0];
        if (isset($arrayParam[1])) {
            $page = $arrayParam[1];
        } else {
            $page = 1;
        }
        if (isset($arrayParam[2])) {
            $listType = $arrayParam[2];
        } else {
            $listType = 1;
        }
        $this->view->assign('listType', $listType);
        //查询版块类别
        $type = $this->_bbstypeModel->findById($typeid);
        $this->view->assign('type', $type);
        //每页显示记录数
        $pageSize = $this->_config['bbs']['forumPageSize'];
        //获取分页数据
        $paginator = $this->_titleModel->findByPage($typeid, $listType, $page, $pageSize);
        $this->view->assign('paginator', $paginator);
        //论坛导航
        $arrayTypes = array();
        $bbstypes = $this->_bbstypeModel->findAll(true);
        foreach ($bbstypes as $bbstypeParent) {
            $arrayTypes[$bbstypeParent['tid']] = $bbstypeParent['typename'];
        }
        $this->view->assign('arrayTypes', $arrayTypes);
        //设置本页公共信息
        $this->_setPageInfo($type['typename'], '', '');
    }
    /**
     * 主题详细信息
     *
     */
    public function threadAction ()
    {
        //获取并解析查询参数
        $param = $this->_request->getParam('param');
        $arrayParam = explode('-', $param);
        $titleid = $arrayParam[0];
        if (isset($arrayParam[1])) {
            $page = $arrayParam[1];
        } else {
            $page = 1;
        }
        //
        $pageSize = $this->_config['bbs']['threadPageSize'];
        //更改浏览次数
        $this->_titleModel->update(array('browse' => new Zend_Db_Expr('browse+1')), $this->_titleModel->getAdapter()->quoteInto('id=?', $titleid));
        //主题信息
        $arrayTitle = $this->_titleModel->findById($titleid);
        $this->view->assign('arrayTitle', $arrayTitle);
        //发表回复信息
        $isShowReplyForm = false;
        if (isset($arrayParam[2]) && $arrayParam[2] == 'T' && $this->_auth->hasIdentity()) {
            $isShowReplyForm = true;
            if (isset($arrayParam[3]) && $arrayParam[3] != 'F') {
                if ($arrayParam[3] == 'T') {
                    $value = '<FIELDSET><LEGEND>引自：楼主</LEGEND>' . $arrayTitle['content'] . '</FIELDSET>';
                } else {
                    $arrayYReply = explode('@', $arrayParam[3]);
                    $arrayReply = $this->_replyModel->findById($arrayYReply[0]);
                    $value = '<FIELDSET><LEGEND>引自：' . $arrayYReply[1] . '楼</LEGEND>' . $arrayReply['content'] . '</FIELDSET>';
                }
            } else {
                $value = '';
            }
            $arrayOptions = array('baseUrl' => $this->view->baseUrl() , 'titleid' => $titleid , 'value' => $value);
            $replyForm = new Form_Bbs_Reply($arrayOptions);
            $this->view->assign('replyForm', $replyForm);
            //
            if (isset($arrayParam[4])) {
                $arrayEReply = explode('@', $arrayParam[4]);
                $replyid = $arrayEReply[0];
                $topage = $arrayEReply[1];
                $replyArray = $this->_replyModel->findById($replyid);
                $populateArray = array('replyid' => $replyArray['id'] , 'topage' => $topage , 'title' => $replyArray['title'] , 'content' => $replyArray['content']);
                $replyForm->populate($populateArray);
            }
            //
            $errorMsg = '';
            if ($this->_request->isPost()) { //判断用户是否提交了表单
                $formData = $this->_request->getPost(); //获取表单提交数据所组成的数组
                if ($replyForm->isValid($formData)) { //如果通过表单验证
                    $replyid = $this->_request->getParam('replyid'); //获得问题类别ID
                    if (isset($replyid) && $replyid != null) { //如果设置了问题类别ID，则说明要进行更改问题回复操作，否则进行添加问题回复操作
                        $updateArray = array('title' => $formData['title'] , 'content' => $formData['content']); //更改问题回复数组
                        $where = $this->_replyModel->getAdapter()->quoteInto('id = ?', $replyid);
                        $this->_replyModel->update($updateArray, $where);
                        $this->_redirect('/question/thread/param/' . $titleid . '-' . $this->_request->getParam('topage') . '#r' . $replyid); //重定向到问题详细信息页面
                    } else {
                       
                        $replyUser = $this->_userModel->findByNetname($this->_auth->getIdentity());

                        $insertArray = array('title' => $formData['title'] , 'content' => $formData['content'] , 'addtime' => date('Y-m-d H:i:s') , 'user_id' => $replyUser['id'] , 'title_id' => $arrayTitle['tid'] , 'topindex' => 0 , 'bbstype_id' => $arrayTitle['bbstype_id']); //添加问题回复数组
                      
                        $this->_replyModel->insert($insertArray);
                        $totalReply = $arrayTitle['totalreply'] + 1;
                        $totalPage = ceil($totalReply / $pageSize);
                        $this->_redirect('/question/thread/param/' . $titleid . '-' . $totalPage . '#b'); //重定向到问题详细信息页面
                    }
                } else {
                    foreach ($replyForm->getMessages() as $messageArray) { //获取错误信息
                        foreach ($messageArray as $message) {
                            $errorMsg .= $message . '<br />';
                        }
                    }
                    $replyForm->populate($formData); //表单数据回填
                }
            }
            $this->view->assign('errorMsg', $errorMsg);
        }
        $this->view->assign('isShowReplyForm', $isShowReplyForm);
        //回复信息分页
        $paginator = $this->_replyModel->findByPage($titleid, $page, $pageSize);
        $this->view->assign('page', $page);
        $this->view->assign('pageSize', $pageSize);
        $this->view->assign('paginator', $paginator);
        //
        if (! $this->_auth->hasIdentity()) {
            $sessionNamespace = new Zend_Session_Namespace('Project');
            $sessionNamespace->tourl = '/question/thread/param/' . $titleid;
        }
        //设置本页公共信息
        $title = $arrayTitle['title'];
        $keywords = $arrayTitle['ptypename'] . '|' . $arrayTitle['typename'];
        $description = $this->view->delHtml($arrayTitle['content']);
        $this->_setPageInfo($title, $keywords, $description);
    }
    /**
     * 发表主题
     * 
     */
    public function pubtitleAction ()
    {
        //
        $bbstypeid = $this->_request->getParam('bbstypeid');
        //
        if (! $this->_auth->hasIdentity() || $bbstypeid == null) {
            $this->_redirect('/user/login');
        }
        //
        $titleid = $this->_request->getParam('titleid');
        //论坛导航
        $arrayTypes = array();
        $bbstypes = $this->_bbstypeModel->findAll(true);
        foreach ($bbstypes as $bbstypeParent) {
            $arrayTypes[$bbstypeParent['tid']] = $bbstypeParent['typename'];
        }
        //
        $arrayOptions = array('baseUrl' => $this->view->baseUrl() , 'multiOptions' => $arrayTypes , 'bbstypeid' => $bbstypeid , 'titleid' => $titleid);
        //
        $pubtitleForm = new Form_Bbs_Pubtitle($arrayOptions);
        $this->view->pubtitleForm = $pubtitleForm;
        //
        //
        if (isset($titleid) && $titleid != null) {
            $titleArray = $this->_titleModel->findByid($titleid);
            $populateArray = array('title' => $titleArray['title'] , 'content' => $titleArray['content']);
            $pubtitleForm->populate($populateArray);
        }
        //
        $errorMsg = '';
        //
        if ($this->_request->isPost()) {
            $formData = $this->_request->getPost();
            //
            if ($pubtitleForm->isValid($formData)) {
                $adapter = new Zend_File_Transfer_Adapter_Http(); //构建上传适配器
                $upfileName = ''; //上传后，保存在服务器中的文件名
                if ($adapter->getFileName('file1') != null) { //如果用户已经选择了上传文件
                    $upfileDir = $this->_config['bbs']['upfilesdir']; //从配置文件中读取上传文件保存目录
                    if (! is_dir($upfileDir)) { //判断上传目录是否存在，如果不存在则创建该目录
                        mkdir($upfileDir);
                    }
                    $adapter->setDestination($upfileDir); //为上传适配器设置上传目录
                    $arrayOldFileName = array_reverse(explode('.', basename($adapter->getFileName('file1')))); //提取上传文件原来名字
                    $extendsFileName = '.' . $arrayOldFileName[0]; //获取上传文件扩展名
                    $upfileName = date('YmdHis') . mt_rand(1000, 9999) . $extendsFileName; //文上传文件指定新名称，用时将和一个4位随机数组成
                    $upfilePathAndName = $upfileDir . '/' . $upfileName; //文件在服务器中保存目录及名称
                    $adapter->addFilter('Rename', array('target' => $upfilePathAndName , 'overwrite' => true), 'file1'); //更改上传文件名
                    $adapter->addValidator('Size', false, array('min' => '0kB' , 'max' => '2MB' , 'bytestring' => false , 'messages' => '·您所上传的文件不能超过2M')); //指定上传文件的范围
                    $adapter->addValidator('ExcludeExtension', false, array('php' , 'exe' , 'messages' => '·您上传的文件类型不允许')); //指定上传文件扩展名
                }
                if ($adapter->getFileName('file1') != null && $adapter->receive() == false) {
                    $pubtitleForm->populate($formData);
                    foreach ($adapter->getMessages() as $message) {
                        $errorMsg .= $message . '<br />';
                    }
                } else {
                    if (isset($titleid) && $titleid != null) {
                        if ($adapter->getFileName('file1') != null) {
                            if ($titleArray['filename'] != '' && file_exists($upfileDir . '/' . $titleArray['filename'])) {
                                unlink($upfileDir . '/' . $titleArray['filename']);
                            }
                            $filename = $upfileName;
                        } else {
                            $filename = $titleArray['filename'];
                        }
                        $arrayUpdate = array('title' => $formData['title'] , 'content' => $formData['content'] , 'unhtmlcontent' => $this->view->unHtml($formData['content']) , 'bbstype_id' => $formData['bbstypeid'] , 'filename' => $filename);
                        $this->_titleModel->update($arrayUpdate, $this->_titleModel->getAdapter()->quoteInto('id = ?', $titleid));
                        $this->_redirect('question/thread/param/' . $titleid);
                        exit();
                    } else {
                        $pubUser = $this->_userModel->findByNetname($this->_auth->getIdentity());
                        $arrayInsert = array('title' => $formData['title'] , 'content' => $formData['content'] , 'unhtmlcontent' => $this->view->unHtml($formData['content']) , 'addtime' => date('Y-m-d H:i:s') , 'istop' => false , 'user_id' => $pubUser['id'] , 'bbstype_id' => $formData['bbstypeid'] , 'browse' => 0 , 'filename' => $upfileName , 'isjh' => false);
                        $this->_titleModel->insert($arrayInsert);
                        $lastTitle = $this->_titleModel->findLastByUserid($pubUser['id']);
                        $this->_redirect('question/thread/param/' . $lastTitle['id']);
                        exit();
                    }
                }
            } else {
                foreach ($pubtitleForm->getMessages() as $messageArray) {
                    foreach ($messageArray as $message) {
                        $errorMsg .= $message . '<br />';
                    }
                }
                $pubtitleForm->populate($formData);
            }
        }
        $this->view->assign('errorMsg', $errorMsg);
        //设置本页公共信息
        $this->_setPageInfo('发表主题', '', '');
    }
    //
    public function printAction ()
    {
        $titleid = $this->_request->getParam('titleid');
        $arrayTitle = $this->_titleModel->findById($titleid);
        $this->view->assign('arrayTitle', $arrayTitle);
        $arrayReply = $this->_replyModel->findByTitleid($titleid);
        $this->view->assign('config', $this->_config);
        $this->view->assign('arrayReply', $arrayReply);
        $this->view->assign('title', $arrayTitle['title'] . '-' . $this->_config['default']['title']);
        $this->_helper->layout->disableLayout();
    }
    //
    public function deleteAction ()
    {
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        $dt = $this->_request->getParam('dt');
        $id = $this->_request->getParam('id');
        if ($dt == 'n') {
            $tid = $this->_request->getParam('tid');
            $where = $this->_titleModel->getAdapter()->quoteInto('id = ?', $id);
            $this->_titleModel->delete($where);
            $this->_redirect('/question/forum-' . $tid . '-1-1');
            exit();
        } elseif ($dt == 'r') {
            $titleid = $this->_request->getParam('titleid');
            $where = $this->_replyModel->getAdapter()->quoteInto('id = ?', $id);
            $this->_replyModel->delete($where);
        }
        // echo '<script>history.back();</script>';
        $this->_redirect('/question/thread-' . $titleid);
        exit();
    }
}