<?php
/**
 * 验证验证码是否正确
 *
 */
class Plugin_Validate_VcodeRight extends Zend_Validate_Abstract
{
    //设置错误信息的键名
    const ERRORMESSAGE = 'notRight';
    //设置错误信息
    protected $_messageTemplates = array(
        self::ERRORMESSAGE => '·验证码输入有误'
    );
    //实现isValid()方法，对信息进行验证
    public function isValid ($value)
    {
        $this->_setValue($value);
        $sessionNamespace = new Zend_Session_Namespace('Project');
        if (trim(strtolower($value)) != strtolower($sessionNamespace->validateCode)) {
            $this->_error(self::ERRORMESSAGE);
            return false;
        }
        return true;
    }
}