<table width="870" height="30" border="0" align="center" cellpadding="0" cellspacing="0" background="images/lt_15(1).jpg">
      <tr>
        <td height="4"></td>
        <td height="4"></td>
        <td width="387" rowspan="2">&nbsp;
          <select name="select_type" class="inputcss" onChange="javascript:window.location=this.options[this.selectedIndex].value;" >
	<?php
	  $sql=mysql_query("select * from tb_type_small order by createtime desc",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info=="")
	  {
	    echo "<option>暂无讨论区</option>";
	  }
	  else
	  { 
	   echo "<option>-版块快速跳转-</option>";
	   do
	   {
	    echo "<option value='bbs_list.php?id=".$info[id]."'>".$info[title]."</option>";
	   }
	   while($info=mysql_fetch_array($sql));
	  } 
	 ?>
      </select></td>
      </tr>
      <tr>
        <td class="a9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当前位置&nbsp;&gt;&gt;&nbsp;社区论坛&nbsp;</td>
        <td width="142"><span class="a9"><a href="bbs_index.php" class="a4">论坛版块</a>&nbsp;&nbsp;<a href="bbs_find.php" class="a4">查找帖子</a></span></td>
      </tr>
    </table>
