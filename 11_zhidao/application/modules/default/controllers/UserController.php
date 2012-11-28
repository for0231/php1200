<?php
/**
 * 用户控制器
 * 
 */
class UserController extends Zend_Controller_Action
{
    private $_userModel;
    private $_sessionNamespace;
    private $_auth;
    /**
     * 初始控制器
     * 
     */
    public function init ()
    {
        $this->initView();
        $this->_userModel = new Model_DbTable_User();
        $this->_sessionNamespace = new Zend_Session_Namespace('Project');
        $this->_auth = Zend_Auth::getInstance();
        $isLogin = false;
        if ($this->_auth->hasIdentity()) {
            $isLogin = true;
        }
        $this->view->assign('isLogin', $isLogin);
    }
    /**
     * 公共信息
     *
     * @param string $title
     * @param string $keywords
     * @param string $description
     * @param string $layout
     */
    private function _setPageInfo ($title, $keywords = '', $description = '', $layout = 'user')
    {
        $this->view->assign('title', $title);
        $this->view->assign('keywords', $keywords);
        $this->view->assign('description', $description);
        $this->_helper->layout->setLayout($layout);
    }
    /**
     * 用户首页
     *
     */
    public function indexAction ()
    {
        $this->_redirect('/');
        exit();
    }
    /**
     * 用户注册
     *
     */
    public function registerAction ()
    {
        $this->_setPageInfo('用户注册', '用户|注册|用户中心', '明日知道网站用户注册'); //设置页面信息
        $regAgreement = file_get_contents(APPLICATION_PATH . '/resources/agreement.txt'); //注册协议
        $this->view->assign('regAgreement', $regAgreement);
        $p = Plugin_Util_ProvinceAndCityFactory::getProvince(); //省份下拉列表项
        $this->view->assign('p', $p);
        if ($this->_request->isPost()) { //如果用户通过POST方法提交表单
            $request = $this->_request; //获取当前控制器对象的POST方法
            $arrayProvice = Plugin_Util_ProvinceAndCityFactory::getProvince(); //获取用户所在省份
            $p = $arrayProvice[$request->getParam('p')];
            $arrayCity = Plugin_Util_ProvinceAndCityFactory::getCityByProvinceArrayIndex($request->getParam('p'));
            $c = $arrayCity[$request->getParam('c')]; //获取用户所在市
            $config = Zend_Registry::get('config'); //获取Zend_Config对象
            $arraySmtpConfig = array('auth' => 'login' , 'username' => $config['mail']['username'] , 'password' => $config['mail']['password']); //邮件配置信息
            $transport = new Zend_Mail_Transport_Smtp($config['mail']['host'], $arraySmtpConfig); //构建邮件传输对象
            $mail = new Zend_Mail('utf-8'); //构建Zend_Mail对象，并设置字符编码
            $mail->setSubject($config['mail']['subject']); //邮件主题
            $mail->setBodyHtml(file_get_contents($config['mail']['bodyPath'])); //HTML邮件内容 
            $mail->setFrom($config['mail']['from'], $config['mail']['name']); //发件人
            $mail->addTo(trim($request->getParam('email'))); //收件人
            try {
                $mail->send($transport); //发送youjian
            } catch (Zend_Exception $e) {
                $e->getMessage();
            }
            //保存用户信息到数据库
            $arrayUserInfo = array('netname' => trim($request->getParam('netname')) , 'password' => md5(trim($request->getParam('password'))) , 'email' => trim($request->getParam('email')) , 'tel' => trim($request->getParam('tel')) , 'pc' => $p . '-' . $c , 'regtime' => date('Y-m-d H:i:s') , 'face' => '' , 'pubtimes' => 0 , 'replytimes' => 0 , 'usertype' => 0); //用户注册信息所构建的数组
            try {
                $this->_userModel->insert($arrayUserInfo); //保存用户注册信息
            } catch (Zend_Exception $e) {
                $e->getMessage();
            }
            $this->_sessionNamespace->netname = trim($request->getParam('netname'));
            $this->_redirect('/user/register-success'); //定向到用户注册成功提示页面
            exit();
        }
    }
    /**
     * 用户注册成功
     *
     */
    public function registerSuccessAction ()
    {
        $this->_auth->setStorage(new Zend_Auth_Storage_Session('Project', 'netname'));
        $netname = $this->_auth->getIdentity();
        $this->_setPageInfo('', '', '');
    }
    /**
     * 用户登录
     *
     */
    public function loginAction ()
    {
        $this->_setPageInfo('用户登录', '用户|登录|用户中心', '明日知道网站用户登录'); //设置页面信息
        $options = array('baseUrl' => $this->view->baseUrl());   //
        $loginForm = new Form_User_Login($options);
        $this->view->assign('loginForm', $loginForm);
        $message = '';
        if ($this->_request->isPost()) {
            $formData = $this->_request->getPost();
            if ($loginForm->isValid($formData)) {
                if ($this->_userModel->isValid($formData['netname'], $formData['password'])) {
                    $tourl = $this->_sessionNamespace->tourl;
                    if (isset($tourl)) {
                        $this->_redirect('/' . $tourl);
                    } else {
                        $this->_redirect('/user/register-success');
                    }
                } else {
                    $message .= '　　·用户名或密码输入有误';
                }
            } else {
                $loginForm->populate($formData);
                $arrayMessage = $loginForm->getMessages();
                if (isset($arrayMessage['netname']['isEmpty'])) {
                    $message .= '　　' . $arrayMessage['netname']['isEmpty'] . '<br />';
                }
                if (isset($arrayMessage['password']['isEmpty'])) {
                    $message .= '　　' . $arrayMessage['password']['isEmpty'] . '<br />';
                }
                if (isset($arrayMessage['vcode']['isEmpty'])) {
                    $message .= '　　' . $arrayMessage['vcode']['isEmpty'] . '<br />';
                }
                if (isset($arrayMessage['vcode']['notRight'])) {
                    $message .= '　　' . $arrayMessage['vcode']['notRight'] . '<br />';
                }
            }
        }
        $this->view->assign('message', $message);
    }
    /**
     * 检测用户昵称是否被占用
     *
     */
    public function checkNetnameAction ()
    {
        header('content-type:text/html; charset=utf-8');
        $this->_helper->layout->disableLayout();
        $result = 'F';
        if ($this->_userModel->findByNetname(trim($this->_request->getParam('netname'))) == null) {
            $result = 'F';
        } else {
            $result = 'T';
        }
        $this->view->assign('result', $result);
    }
    /**
     * 提示用户登录
     *
     */
    public function unloginAction ()
    {
        $tourl = str_replace('-', '/', $this->_request->getParam('tourl'));
        $tourl = str_replace('$', '-', $tourl);
        $this->_sessionNamespace->tourl = $tourl;
        $this->_setPageInfo('', '', '');
    }
    //
    public function logoutAction ()
    {
        $this->_helper->viewRenderer->setNoRender();
        $this->_helper->layout->disableLayout();
        //
        unset($this->_sessionNamespace->tourl);
        $this->_auth->setStorage(new Zend_Auth_Storage_Session('Project', 'netname'));
        $this->_auth->clearIdentity();
        //
        $this->_redirect('/');
        exit();
    }
}