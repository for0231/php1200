<?php
/**
 * 论坛主题显示页的回复分页页码助手
 *
 */
class Zend_View_Helper_ReplyPaginator
{
    /**
     * 返回分页链接
     *
     * @param int $total
     * @param int $pageSize
     * @param string $baseUrl
     * @return string
     */
    public function replyPaginator ($total, $pageSize, $titleid, $baseUrl)
    {
        $result = '';
        if ($total > 0) {
            $totalPage = ceil($total / $pageSize);
            if ($totalPage > 1) {
                $result .= '[<img src="' . $baseUrl . '/img/mark_replypaginator.gif' . '" title="回复分页导航" align="absmiddle" />';
                for ($i = 1; $i < $totalPage + 1; $i ++) {
                    $result .= '<a href="' . $baseUrl . '/bbs/thread-' . $titleid . '-' . $i . '" target="_blank" class="a1">' . $i . '</a> ';
                }
                $result .= ']';
            }
        }
        return $result;
    }
}