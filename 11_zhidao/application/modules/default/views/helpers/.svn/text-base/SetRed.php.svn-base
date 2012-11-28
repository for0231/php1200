<?php
class Zend_View_Helper_SetRed
{
    public function setRed ($arrayKeywords, $str)
    {
        $beginFont = '︼'; //关键字开始标识
        $endFont = '︻'; //关键字结束标识
        foreach ($arrayKeywords as $keyword) { //遍历所有关键字
            $array = array();
            preg_match_all('/' . $keyword . '/i', $str, $array); //查询与关键字匹配的内容，并保存到数组中
            $arrayKey = array_unique($array[0]); //去掉重复数组元素
            foreach ($arrayKey as $key) { //遍历所有匹配关键字
                $str = str_replace($key, $beginFont . $key . $endFont, $str); //将查询结果中匹配关键字前后分别加上关键字开始标识和结束标识
            }
        }
        $str = str_replace($beginFont, '<font color="#FF0000">', $str); //将开始标识替换成<font>标签开始部分
        $str = str_replace($endFont, '</font>', $str); //将结束标识替换成<font>标签结束部分
        return $str;
    }
}