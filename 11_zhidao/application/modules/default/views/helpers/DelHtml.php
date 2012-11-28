<?php
/**
 * 删除HTML标记助手
 *
 */
class Zend_View_Helper_DelHtml
{
    /**
     * 删除HTML标记方法
     *
     * @param string $text
     * @return string
     */
    public function delHtml ($text)
    {
        
        $text = preg_replace("@<script(.*?)</script>@is", "", $text);
        $text = preg_replace("@<iframe(.*?)</iframe>@is", "", $text);
        $text = preg_replace("@<style(.*?)</style>@is", "", $text);
        //$text = preg_replace("@<(.*?)>@is", "", $text);
        $text = preg_replace("@&(.*?);@is", "", $text);
        $text = strip_tags($text);
        return $text;
    }
}