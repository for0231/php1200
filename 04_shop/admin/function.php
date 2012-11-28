<?php
     function unhtml($content)
			{
			 $content=str_replace("&","&amp;",$content);
			 $content=str_replace("<","&lt;",$content);
			 $content=str_replace(">","&gt;",$content);
			 $content=str_replace(" ","&nbsp;",$content);
			 $content=str_replace(chr(13),"<br>",$content);
 			 $content=str_replace("\\","\\\\",$content);
 			 $content=str_replace(chr(34),"&quot;",$content);

			 return $content;
			}

?>