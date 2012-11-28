<?php
class Zend_View_Helper_Unhtml
{
    public function unhtml ($text)
    {
        $text = htmlspecialchars_decode(stripcslashes(strip_tags($text)));
        $text = str_ireplace("&nbsp;", "", $text);
        $text = str_ireplace("　", "", $text);
        return $text;
    }
}