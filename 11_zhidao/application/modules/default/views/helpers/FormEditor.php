<?php
class Zend_View_Helper_FormEditor extends Zend_View_Helper_FormElement
{
    public function formEditor ($name, $value = null, $attribs = null)
    {
        $info = $this->_getInfo($name, $value, $attribs);
        extract($info);
        $baseUrl = $this->view->baseUrl();
        $xhtml = '';
        if ($value != null) {
            $value = str_replace(chr(10), '', str_replace(chr(13), '', $value));
        } else {
            $value = '';
        }
        // $xhtml.= '<script src="'. $baseUrl .'/js/jquery.js"></script>';
        $xhtml .= '<script src="' . $baseUrl . '/js/LzhEditor/LzhEditor.js"></script>';
        $xhtml .= '<div style="border:1px solid #154096; background-color:#FFFFFF; width:' . $attribs['width'] . 'px; clear:both; ">';
        $xhtml .= '<script language="javascript">';
        $xhtml .= '    var lzhEditor = new LzhEditor("' . $name . '", "100%", "' . $attribs['height'] . '", "' . $value . '", "' . $baseUrl . '/js/LzhEditor", "' . $baseUrl . '/common/upload");';
        $xhtml .= '    lzhEditor.Create();';
        $xhtml .= '</script>';
        $xhtml .= '</div>';
        return $xhtml;
    }
}