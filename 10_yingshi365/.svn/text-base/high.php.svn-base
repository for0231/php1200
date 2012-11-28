<?php
	include "conn/conn.php";
?>
<table width="558" height="110" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="567" height="26" valign="bottom" background="../Image/skintop2.gif"><div align="center">高 级 查 询 </div></td>
  </tr>
  <tr>
    <td>
	<table width="559" height="300" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td height="92">
		<table width="404" height="90" border="0" align="center" cellpadding="0" cellspacing="0" >
          <tr>
            <td width="402" valign="top">
			<table width="400" height="300" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="2" valign="middle">
				<table width="380" height="300" border="0" align="center" cellpadding="0" cellspacing="0">
                  <form name="list" method="post" action="">
				  <tr>
                   <td width="129" ><div align="right" >查询方式：</div></td>
                    <td width="251" ><span >
                      <select name="selecttype"  onchange="window.location='operation.php?action=search&selecttype=' + this.value;">
                        <option value="Name" <?php if($_GET[selecttype]=="Name" or $_GET[selecttype]=="") echo "selected"; ?>>按名称</option>
                        <option value="Actor" <?php if($_GET[selecttype]=="Actor") echo "selected"; ?>>按人物</option>
                      </select>
                    </span></td>
					                  </tr>
				  </form>
				  <form name="list1" method="post" action="high_chk.php">
                  <tr><input name="selecttype1" type="hidden" value="<?php  if($_GET[selecttype]=="") echo "Name"; else echo $_GET[selecttype]; ?>">
					 <td><div align="right" >查询类别：</div></td>
                    <td ><select name="selecttype2" >
                      <option value="audio">影视类</option>
                      <option value="video">音乐类</option>
                    </select></td>

                  </tr>         
<?php  
	$selecttype=$_GET[selecttype];
	
	switch ($selecttype){
		case "Name":
			names();
			break;
		case "Actor":
			Actor();
			break;
		default:
			names();
			break;
	}
	
?>	
                  <tr>
                    <td  colspan="2"><div align="center">
						<input type="hidden" name="aciton" value="high" />
                        <input name="Submit" type="submit"  value="  查  询  ">
                        <input name="Submit2" type="button"  value="  返  回  " onClick="javascript:top.window.close()">
                    </div></td>
                  </tr>
				   </form>
                </table></td>
                </tr>
              
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

<?php 		
 function names(){

 ?>
                  <tr>
                    <td ><div align="right"><span >数据名称：</span></div></td>
                    <td ><div align="left"><span >
                    <input name="dataname" type="text"  size=35>
                    </select>
</span></div></td>
                  </tr>
                  <tr>
                    <td ><div align="right"><span >发行地区名称：</span></div></td>
                    <td ><div align="left"><span >
                    <input type="text" name="areaname" >
</span></div></td>
                  </tr>
                  <tr>
                    <td ><div align="right"><span >发行商名称：</span></div></td>
                    <td ><div align="left"><span >
                      <input name="publishername" type="text"  size=35>
                    </span></div></td>
                  </tr>				  				  				  				  
                  <tr>
                    <td ><div align="right"><span >语言名称：</span></div></td>
                    <td ><div align="left" >
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
                      法语
                    </div></td>
                  </tr>
<?php
}	
function Actor(){
?>
     <tr>
                    <td ><div align="right"><span >演员/歌手：</span></div></td>
                    <td ><div align="left"><span >
                      <input name="actor" type="text" >
</span></div></td>
                  </tr>
                  <tr>
                    <td ><div align="right"><span >导演/作词：</span></div></td>
                    <td ><div align="left"><span >
                      <input name="director" type="text" >
</span></div></td>
                  </tr>
                  <tr>
                    <td ><div align="right"><span >制片/作曲：</span></div></td>
                    <td ><div align="left"><span >
                      <input name="marker" type="text" >
                    </span></div></td>
                  </tr>
<?php
}
?>					  		  			  