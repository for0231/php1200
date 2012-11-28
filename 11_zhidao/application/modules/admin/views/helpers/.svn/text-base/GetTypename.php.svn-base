<?php
/**
 * 获取类别名称视图助手
 *
 */
class Zend_View_Helper_GetTypename
{
    /**
     * 获取模块名称
     *
     * @param int $module
     * @param int|string $flag
     * @return string
     */
    public function getTypename ($module, $flag)
    {
        if ($module == 0) {
            //0-新闻
            switch ($flag) {
                case 'ttj':
                    $typeName = '今日推荐新闻';
                    break;
                case 'all':
                    $typeName = '全部新闻';
                    break;
                case 0:
                    $typeName = '站内新闻';
                    break;
                case 1:
                    $typeName = 'IT人物新闻';
                    break;
                case 2:
                    $typeName = '高端访谈';
                    break;
                case 3:
                    $typeName = '产品快讯';
                    break;
                case 4:
                    $typeName = '企业动态';
                    break;
                case 5:
                    $typeName = '互联网新闻';
                    break;
                case 6:
                    $typeName = '游戏资讯';
                    break;
                case 7:
                    $typeName = '广告传媒';
                    break;
                case 8:
                    $typeName = '财经报道';
                    break;
                case 9:
                    $typeName = '图片新闻';
                    break;
                case 10:
                    $typeName = '综合资讯';
                    break;
            }
        }
        return $typeName;
    }
}