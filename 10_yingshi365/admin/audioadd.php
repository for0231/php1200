<?php
	session_start();
	include "inc/chec.php";
	include "conn/conn.php";
?>
<script src="js/riq.js" language="javascript"></script>
<table width="558" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="567" height="26" align="center" valign="middle"><font style="font-size:13px; ">视 频 数 据 添 加</font></td>
  </tr>
  <tr>
    <td><table width="559" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="92"><table width="404" height="90" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="402" valign="top"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
              <form name="list" method="post" action="dataadd_chk.php" enctype="multipart/form-data">
              <tr>
                <td height="15" colspan="2">&nbsp;</td>
                </tr>
               <tr>
    <td width="131" height="20" align="right" valign="middle">名称：</td>
    <td width="269" height="20" align="left" valign="middle">
      <input name="names" type="text" id="names" size="30">*</td>
  </tr>
               <tr>
                 <td height="20" align="right" valign="middle">封面图片：</td>
                 <td height="20" align="left" valign="middle"><input name="picture" type="file" id="picture" size="15">
                 *(最大700K)</td>
               </tr>
               <tr>
                 <td height="20" align="right" valign="middle">资源上传：</td>
                 <td height="20" align="left" valign="middle"><input name="address" type="file" id="address" size="15">
                 *(最大300M)</td>
               </tr>
  <tr>
    <td height="20" align="right" valign="middle">等级：</td>
    <td height="20" align="left" valign="middle">

     <select name="grade" id="grade">
          <option value="一级">一级</option>
          <option value="二级">二级</option>
          <option value="三级">三级</option>
          <option value="无限制级" selected="selected">无限制级</option>
          <option value="禁片">禁片</option>
        </select>
            *</td>
  </tr>
  <tr>
    <td height="20" align="right" valign="middle">发行商：</td>
    <td height="20" align="left" valign="middle"><input name="publisher" type="text" id="publisher" size="30">
      *</td>
  </tr>
  <tr>
    <td height="20" align="right" valign="middle">主要演员：</td>
    <td height="20" align="left" valign="middle">
		  <input name="actor" type="text" id="actor" size="30">
      *</td>
  </tr>
  <tr>
    <td height="20" align="right" valign="middle">导演：</td>
    <td height="20" align="left" valign="middle">
      <input name="director" type="text"  id="director" size="30">
      *</td>
  </tr>
  <tr>
    <td height="20" align="right" valign="middle">制片人：</td>
    <td height="20" align="left" valign="middle">
      <input name="marker" type="text" id="marker" size="30">
      *</td>
  </tr>
  <tr>
    <td height="30" align="right" valign="middle">语言：</td>
    <td height="30" align="left" valign="middle">
                      <input type="radio" name="language" value="中文" checked> 
                      中文
                      <input type="radio" name="language" value="英文">
                      英文
                      <input type="radio" name="language" value="韩语"> 
                      韩语
                      <br>
                      <input type="radio" name="language" value="日语"> 
                      日语
                      <input type="radio" name="language" value="德语">
                      德语
                      <input type="radio" name="language" value="法语"> 
                      法语 *      </td>
  </tr>
  <tr>
    <td height="20" align="right" valign="middle">二级分类：</td>
    <td height="20" align="left" valign="middle">

        <select name="style" id="style" >
<?php
			$a_sqlstr = "select * from tb_audiolist where grade='2'";
			$a_rst = $conn->execute($a_sqlstr);
			while(!$a_rst->EOF){ 
?>
		<option value="<?php echo $a_rst->fields[2]; ?>"><?php echo $a_rst->fields[2]; ?></option>
<?php
				$a_rst->movenext();
			}
?>
        </select>
            *</td>
  </tr>
  <tr>
  	<td height="20" align="right" valign="middle">一级分类：</td>
	<td height="20" align="left" valign="middle">
	<select name="types" id="types">
<?php
			$t_sql = "select * from tb_audiolist where grade = '1'";
			$t_rst = $conn->execute($t_sql);
			while(!$t_rst->EOF){		
?>
			<option value="<?php echo $t_rst->fields[2]; ?>"><?php echo $t_rst->fields[2]; ?></option>
<?php
			$t_rst->movenext();
			}
?>
	</select>
	</td>
  </tr>
  <tr>
    <td height="20" align="right" valign="middle">发行国家：</td>
    <td height="20" align="left" valign="middle">
      <input name="from" type="text" id="from" size="30">
      *</td>
  </tr>
  <tr>
    <td height="20" align="right" valign="middle">发行时间：</td>
    <td height="20" align="left" valign="middle">
      <input name="publishtime" type="text" id="publishtime" size="15" readonly="readonly"><input type="button" value=" " onClick="loadCalendar(list.publishtime);">
      *</td>
  </tr>
  <tr>
    <td height="20" align="right" valign="middle">新品：</td>
    <td height="20" align="left" valign="middle">
      <input name="news" type="radio" value="1" checked>
      是
      <input name="news" type="radio" value="0">
      否 *</td>
  </tr>
  <tr>
    <td height="20" align="right" valign="middle">简要介绍：</td>
    <td height="20" align="left" valign="middle">
      *
        <textarea name="remark" cols="35" rows="5" id="remark"></textarea></td>
  </tr>
              <tr>
                <td height="30" colspan="2" align="center" valign="middle">
					<input type="hidden" name="action" value="a">
                    <input name="Submit" type="submit" value="添  加" class="submit" onclick="return a_chk();">
                    （*为必填项）                    
                    <input name="Submit2" type="button" value="返  回" class="submit" onClick="javascript:top.window.close()"></td>
                </tr> </form>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>