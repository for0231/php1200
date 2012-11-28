<?php
/**
 * 论坛主题标志图片助手
 *
 */
class Zend_View_Helper_TitleMark
{
    /**
     * 返回论坛主题标志图片
     *
     * @param array $params
     * @param string $baseUrl
     * @return string
     */
    public function titleMark ($params, $baseUrl)
    {
        $config = Zend_Registry::get('config');
        if ($params['istop'] == true) {
            $result = '<img src="' . $baseUrl . '/img/mark_title_top.gif" title="置顶主题"/>';
        } elseif ($params['browse'] > $config['bbs']['hotTitleBrowseStandard']) {
            $result = '<img src="' . $baseUrl . '/img/mark_title_hot.gif" title="热门主题"/>';
        } elseif (strtotime($params['addtime']) > strtotime(date('Y-m-d H:i:s')) - $config['bbs']['newTitleTimestampStandard']) {
            $result = '<img src="' . $baseUrl . '/img/mark_title_new.gif" title="最新主题"/>';
        } else {
            $result = '<img src="' . $baseUrl . '/img/mark_title_simple.gif" title="普通主题"/>';
        }
        return $result;
    }
}