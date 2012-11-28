<?php
	//判断文件后缀
	//$f_type：允许文件的后缀类型
	//$f_upfiles：上传文件名
	function f_postfix($f_type,$f_upfiles){
		$is_pass = false;
		$tmp_upfiles = split("\.",$f_upfiles);
		$tmp_num = count($tmp_upfiles);
		for($num = 0; $num < count($f_type);$num++){
			if(strtolower($tmp_upfiles[$tmp_num - 1]) == $f_type[$num])
				$is_pass = $f_type[$num];
		}
		return $is_pass;
	}
function Audio(){
include "conn/conn.php";
?>
<tr>
	<td width="131" height="20"><div align="right" ></div><div align="right">名称：</div></td>
    <td width="269" height="20"><input name="names" type="text" id="names" size="30">* </td>
</tr>
<tr>
    <td height="20"><div align="right">等级：</div></td>
    <td height="20">
        <select name="grade" id="grade" >
          <option value="一级">一级</option>
          <option value="二级">二级</option>
          <option value="三级">三级</option>
          <option value="无限制级">无限制级</option>
          <option value="禁片">禁片</option>
        </select>
            *</td>
</tr>
<tr>
	<td height="20"><div align="right">发行商：</div></td>
    <td height="20">
      <input name="publisher" type="text"  id="publisher" size="30">
      *</td>
</tr>
<tr>
    <td height="20"><div align="right">主要演员：</div></td>
    <td height="20">
      <input name="actor" type="text"  id="actor" size="30">
      *</td>
</tr>
<tr>
    <td height="20"><div align="right">导演：</div></td>
    <td height="20">
      <input name="director" type="text"  id="director" size="30">
      *</td>
</tr>
<tr>
    <td height="20"><div align="right">制片人：</div></td>
    <td height="20">
      <input name="marker" type="text"  id="marker" size="30">
      *</td>
</tr>
<tr>
    <td height="20"><div align="right">语言：</div></td>
    <td height="20">
<div align="left" >
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
                      法语 *</div>
      </td>
</tr>
<tr>
    <td height="20"><div align="right">二级分类：</div></td>
    <td height="20">

        <select name="style"  id="style" >
<?php
		$sql="select * from tb_audiolist where grade='2'";
		$rst = $conn->execute($sql);
		while(!$rst->EOF){ 
?>
		<option value="<?php echo $rst->fields[2]; ?>"><?php echo $rst->fields[2]; ?></option>
<?php  $rst->movenext();
		}
?>
        </select>
            *</td>
  </tr>
  <tr>
    <td height="20"><div align="right">一级分类：</div></td>
    <td height="20">

        <select name="type"  id="type" >
<?php
		$sql="select * from tb_audiolist where grade='1'";
		$rst = $conn->execute($sql);
		while(!$rst->EOF){ 
?>
		<option value="<?php echo $rst->fields[2]; ?>"><?php echo $rst->fields[2]; ?></option>
<?php  $rst->movenext();
		}
?>
        </select>
            *</td>
  </tr>
  <tr>
    <td height="20"><div align="right">发行国家：</div></td>
    <td height="20">
      <input name="from" type="text"  id="from" size="30">
      *</td>
  </tr>
  <tr>
    <td height="20"><div align="right">发行时间：</div></td>
    <td height="20">
      <input name="publishtime" type="text"  id="publishtime" size="30">
      *</td>
  </tr>
  <tr>
    <td height="20"><div align="right">新品：</div></td>
    <td height="20">
      <input name="news" type="radio"  value="1" checked>
      是
      <input name="news" type="radio"  value="0">
      否 *</td>
  </tr>
  <tr>
    <td height="20"><div align="right">简要介绍：</div></td>
    <td height="20">
      <textarea name="remark" cols="35" rows="3"  id="remark"></textarea>
	  <input type="hidden" name="action" value="a" />
      *</td>
  </tr>
<?php 
}
/*  上传音频文件  */
function Video(){
include "conn/conn.php";
?>
<tr>
                          <td width="131" height="20"><div align="right" ></div>
                                <div align="right">名称：</div>
                            </td>
                          <td width="269" height="20">
                            <input name="names" type="text"  id="names" size="30">
            * </td>
                        </tr>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">演唱者：</div></td>
                          <td height="20">
                            <input name="actor" type="text"  id="grade" size="30">
            *</td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right" >演唱者类型：</div></td>
                          <td height="20">
                            <div align="left">
                    <input type="radio" name="actortype" value="个人" checked>
                    个人
                    <input type="radio" name="actortype" value="组合">
组合
<input type="radio" name="actortype" value="乐队">
乐队                    *</div> 
                            
</td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">作词：</div></td>
                          <td height="20">
                            <input name="ci" type="text" >
*                          </td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">作曲：</div></td>
                          <td height="20">
                            <input name="qu" type="text" >
*                          </td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">发行商：</div></td>
                          <td height="20">
                            <input name="publisher" type="text"  id="publisher" size="30">
            *</td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">语言：</div></td>
                          <td height="20">
                          <div align="left" >
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
                      法语 *</div>
            </td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">二级分类：</div></td>
                          <td height="20">
        <select name="style"  id="style" >
<?php $sql="select * from tb_videolist where grade='2'";
		$rst=$conn->execute($sql);
		while(!$rst->EOF){
?>
		<option value="<?php echo $rst->fields[2]; ?>;"><? echo $rst->fields[2]; ?></option>
<?php
		$rst->movenext();
		}
?>
        </select>
*</td>
                        </tr>
						                        <tr>
                          <td height="20"><div align="right">一级分类：</div></td>
                          <td height="20">
        <select name="type"  id="type" >
<?php $sql="select * from tb_videolist where grade='1'";
		$rst=$conn->execute($sql);
		while(!$rst->EOF){
?>
		<option value="<?php echo $rst->fields[2]; ?>;"><? echo $rst->fields[2]; ?></option>
<?php
		$rst->movenext();
		}
?>
        </select>
*</td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">发行国家：</div></td>
                          <td height="20">
                            <input name="from" type="text"  id="from" size="30">
            *</td>
                        </tr>
                        <tr>
                          <td height="20"><div align="right">发行时间：</div></td>
                          <td height="20">
                            <input name="publishtime" type="text"  id="publishtime" size="30">
            *</td>
                        </tr>

                        <tr>
                          <td height="20"><div align="right">简要介绍：</div></td>
                          <td height="20">
                            <textarea name="remark" cols="35" rows="3"  id="remark"></textarea>
							<input type="hidden" name="action" value="v" />
            *</td>
                        </tr>
<?php
}
?>