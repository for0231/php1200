<?php
class ErrorController extends Zend_Controller_Action
{
    public function errorAction ()
    {
        $this->view->title = "明日知道网站错误提示";  //页面标题
        $this->_helper->layout->disableLayout();   //去掉布局
    }
}