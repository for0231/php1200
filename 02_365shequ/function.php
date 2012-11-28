<?php
function unhtml($content){								//定义自定义函数的名称
	$content=htmlspecialchars($content);                //转换文本中的特殊字符
    $content=str_replace(chr(13),"<br>",$content);		//替换文本中的换行符
    $content=str_replace(chr(32),"&nbsp;",$content);	//替换文本中的&nbsp;
    $content=str_replace("[_[","<",$content);			//替换文本中的大于号
    $content=str_replace("]_]",">",$content);			//替换文本中的小于号
    $content=str_replace("|_|"," ",$content);			//替换文本中的空格
    return trim($content);								//删除文本中首尾的空格
}
function msubstr($str,$start,$len) {					//定义自定义函数的名称,控制文本输出字符的个数
    $strlen=$start+$len;								//获取文本的长度
    for($i=0;$i<$strlen;$i++) { 						//循环输出文本中的字符
        if(ord(substr($str,$i,1))>0xa0) { 				//截取文本中的字符
            $tmpstr.=substr($str,$i,2);					//截取文本中的字符
            $i++; 
        }else 
            $tmpstr.=substr($str,$i,1); 
    } 
    return $tmpstr;								 
}
?>
