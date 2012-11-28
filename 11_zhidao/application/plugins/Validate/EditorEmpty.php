<?php
class Plugin_Validate_EditorEmpty extends Zend_Validate_Abstract
{
    const ERRORMESSAGE = 'isEditorEmpty';
    protected $_messageTemplates = array(self::ERRORMESSAGE => '·请输入要发表的内容');
    public function isValid ($value)
    {
        $this->_setValue($value);
        if (trim($value) == '' || strtolower(trim($value)) == strtolower('<P>&nbsp;</P>')) {
            $this->_error(self::ERRORMESSAGE);
            return false;
        }
        return true;
    }
}
