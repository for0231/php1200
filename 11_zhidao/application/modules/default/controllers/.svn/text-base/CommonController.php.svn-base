<?php
/**
 * 公共信息处理控制器
 *
 */
class CommonController extends Zend_Controller_Action
{
    private $_config;
    /**
     * 初始控制器
     *
     */
    public function init ()
    {
        $this->_config = Zend_Registry::get('config');
    }
    /**
     * 公共信息首页
     *
     */
    public function indexAction ()
    {
        $this->_redirect('/');
        exit();
    }
    /**
     * 生成验证码
     *
     */
    public function vcodeAction ()
    {
        $w = $this->_request->getParam('w');
        $h = $this->_request->getParam('h');
        $f = $this->_request->getParam('f');
        if ($w == null) {
            $w = 80;
        }
        if ($h == null) {
            $h = 35;
        }
        if ($f == null) {
            $f = 0;
        }
        $codeStr = "";
        $codeArray = array('0' , '1' , '2' , '3' , '4' , '5' , '6' , '7' , '8' , '9' , 'A' , 'B' , 'C' , 'D' , 'E' , 'F' , 'G' , 'H' , 'I' , 'J' , 'K' , 'L' , 'M' , 'N' , 'O' , 'P' , 'Q' , 'R' , 'S' , 'T' , 'U' , 'V' , 'W' , 'X' , 'Y' , 'Z');
        for ($i = 0; $i < 4; $i ++) {
            $codeStr .= $codeArray[mt_rand(0, 35)];
        }
        $sessionNamespace = new Zend_Session_Namespace('Project');
        $sessionNamespace->validateCode = $codeStr;
        $validateCode = new Plugin_Util_ValidateCode($w, $h, $codeStr, $f);
        $validateCode->show();
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
    }
    /**
     * 判断验证码是否正确
     *
     */
    public function checkVcodeAction ()
    {
        header('content-type:text/html; charset=utf-8');
        $this->_helper->layout->disableLayout();
        $sessionNamespace = new Zend_Session_Namespace('Project');
        $result = '';
        if (strtolower($sessionNamespace->validateCode) == strtolower($this->_request->getParam('vcode'))) {
            $result = '1';
        } else {
            $result = '0';
        }
        $this->view->assign('result', $result);
    }
    /**
     * 获取城市下拉列表项目
     *
     */
    public function cityAction ()
    {
        header('content-type:text/html; charset=utf-8');
        $this->_helper->layout->disableLayout();
        $pindex = $this->_request->getParam('pindex');
        $str = '';
        if ($pindex == '-1') {
            $str .= '<option value="-1">请选择城市</option>';
        } else {
            $cityArray = Plugin_Util_ProvinceAndCityFactory::getCityByProvinceArrayIndex($pindex);
            for ($i = 0; $i < count($cityArray); $i ++) {
                $str .= '<option value="' . $i . '">' . $cityArray[$i] . '</option>';
            }
        }
        $this->view->assign('str', $str);
    }
    /**
     * 文件下载
     * 
     */
    public function downloadAction ()
    {
        $filePath = $this->_request->getParam('f');
        $filePath = str_replace('@', '.', $filePath);
        $filePath = str_replace('-', '/', $filePath);
        $filename = basename($filePath);
        if (! file_exists($filePath)) {
            header('content-type:text/html; charset=utf-8');
            echo "<script>alert('对不起,暂时停止该文件下载！'); history.back();</script>";
            exit();
        }
        $fp = fopen($filePath, "r");
        header("content-type:application/octet-stream");
        header("accept-ranges:bytes");
        header("accept-length:" . filesize($filePath));
        header("content-disposition:attachment;filename=" . $filename);
        echo fread($fp, filesize($filePath));
        fclose($fp);
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
    }
    /**
     * 在线编辑器上传图片
     */
    public function uploadAction ()
    {
        header('content-type:text/html; charset=utf-8');
        if ($this->_request->isPost()) {
            //图片保存目录
            $upfileDir = realpath($this->_config['bbs']['upfilesdir']);
            //网站根目录
            $baseUrl = $this->view->baseUrl();
            $upfileName = $_FILES["upfile"]["name"];
            $array = explode('.', $upfileName);
            $array = array_reverse($array);
            $newFileName = date("YmdHis") . mt_rand(1000, 9999) . '.' . $array[0];
            if (! is_dir($upfileDir)) {
                mkdir($upfileDir);
            }
            $upfileNameAndDir = $upfileDir . "/" . $newFileName;
            if(@move_uploaded_file($_FILES["upfile"]["tmp_name"], $upfileNameAndDir)){
                echo '<script language="javascript">
                          parent.window.frames["editor"].focus();
                          parent.window.frames["editor"].document.selection.createRange();
                          parent.window.frames["editor"].document.execCommand("InsertImage", false, "' . $baseUrl . '/upfiles/bbs/' . $newFileName . '");
                          parent.document.getElementById("uploadLayer").style.display="none";	
                      </script>';
            }else{
                echo '<script>alert("图片上传失败");</script>';
            }
        }
        echo '
        <script language="javascript">
            function lzhEditor_chkinput(form)
            {
                if(form.upfile.value==""){
                    alert("请选择要插入的图片！");
                    form.upfile.focus();
                    return false; 
                }
                var v=form.upfile.value;
                var extsName=v.substring(v.lastIndexOf(".")+1).toLowerCase();
                if(!(extsName=="gif" || extsName=="jpg" || extsName=="png" || extsName=="bmp")){
                    alert("插入的图片只能为gif、jpg、png或bmp格式！");
                    form.upfile.focus();
                    return false; 
                }
                return true;
            }    
        </script>
        <body style="margin:0px; padding:10px; background-color:#F2F9F9; border:0px;">
                <form name="form_lzhEditor" method="post" action="" enctype="multipart/form-data" style="margin:0px; padding:0px; font-size:14px;" onsubmit="return lzhEditor_chkinput(this)">
                    <br/>
                    图片地址：<br/><input type="file" name="upfile" id="upfile"  size="30" style="font-size:12px; border:1px solid #777777; font-family:宋体; height:18px;"/><br/><br/><input type="submit" value="插入" />
                </form>
              </body>';
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
    }
}