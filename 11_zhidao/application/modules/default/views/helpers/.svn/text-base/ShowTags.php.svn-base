<?php
class Zend_View_Helper_ShowTags
{
    public function showTags ($tagsStr)
    {
        $result = '';
        $tagsArray = explode(',', $tagsStr);
        foreach ($tagsArray as $tags) {
            if (trim($tags) != '') {
                $result .= '<a href="">' . $tags . '</a>　';
            }
        }
        return $result;
    }
}