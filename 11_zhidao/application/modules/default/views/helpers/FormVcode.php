<?php
/**
 * 表单验证码视图助手
 *
 */
class Zend_View_Helper_FormVcode extends Zend_View_Helper_FormElement
{
    /**
     * 返回表但验证码
     *
     * @param string $name
     * @param string $value
     * @param array $attribs
     * @return string
     */
    public function formVcode ($name, $value = null, $attribs = null)
    {
        $xhtml = '<input type="text" name="' . $name . '" id="' . $name . '" maxlength="4"  value="' . $value . '" ';
        if (isset($attribs['textStyle'])) {
            $xhtml .= 'style="' . $attribs['textStyle'] . '" ';
        }
        if (isset($attribs['textClass'])) {
            $xhtml .= 'class="' . $attribs['textClass'] . '" ';
        }
        $xhtml .= ' />';
        $xhtml .= '<img id="vcodeImg" src="' . $this->view->baseUrl() . '/common/vcode" ';
        if (isset($attribs['imageStyle'])) {
            $xhtml .= 'style="' . $attribs['imageStyle'] . '" ';
        }
        if (isset($attribs['imageClass'])) {
            $xhtml .= 'class="' . $attribs['imageClass'] . '" ';
        }
        $xhtml .= ' />';
        $xhtml .= '<span ';
        if (isset($attribs['spanStyle'])) {
            $xhtml .= 'style="' . $attribs['spanStyle'] . '" ';
        }
        if (isset($attribs['spanClass'])) {
            $xhtml .= 'class="' . $attribs['spanClass'] . '" ';
        }
        $xhtml .= ' />';
        $xhtml .= '<a href="javascript:' . $attribs['functionName'] . '" class="' . $attribs['aClass'] . '">看不清，我想换一张</a>';
        $xhtml .= '</span>';
        return $xhtml;
    }
}