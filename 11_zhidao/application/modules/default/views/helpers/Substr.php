<?php
/**
 * 截取中文助手
 *
 */
class Zend_View_Helper_Substr
{
    /**
     * 截取中文
     *
     * @param string $str
     * @param int $length
     * @param string $endStr
     * @return string
     */
    function subStr ($str, $length, $endStr = '..')
    {
        if (strlen($str) <= $length) {
            return $str;
        } else {
            $i = 0;
            while ($i < $length) {
                $tmpStr = substr($str, $i, 1);
                if (ord($tmpStr) >= 224) {
                    $tmpStr = substr($str, $i, 3);
                    $i = $i + 3;
                } elseif (ord($tmpStr) >= 192) {
                    $tmpStr = substr($str, $i, 2);
                    $i = $i + 2;
                } else {
                    $i = $i + 1;
                }
                $resultStrArray[] = $tmpStr;
            }
            $resultStr = implode("", $resultStrArray);
            return $resultStr . $endStr;
        }
    }
}