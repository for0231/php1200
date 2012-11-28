<?php
class Zend_View_Helper_UnHtml
{
    public function unHtml ($text)
    {
        return str_replace(' ', '', html_entity_decode(strip_tags(stripslashes($text)), ENT_NOQUOTES, 'UTF-8'));
    }
}