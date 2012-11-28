
<table width="886" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="54" colspan="2" align="center" valign="top" background="images/top.jpg">&nbsp;</td>
  </tr>
  <tr>
  	<td height="37" colspan="2" align="center" valign="top">
	<!--µ¼º½À¸-->
		<table width="100%" height="37" cellpadding="0" cellspacing="0" background="images/navig.jpg">
			<tr>
				<td width="21">&nbsp;</td>
			    <a href="index.php"><td width="111" align="center" valign="middle" onmouseover="this.background='images/2.jpg'" onmouseout="this.background=''"></td></a>
			    <a href="list.php?action=audio"><td width="107" align="center" valign="middle" onmouseover="this.background='images/3.jpg'" onmouseout="this.background=''"></td></a>
			    <a href="list.php?action=video"><td width="108" align="center" valign="middle" onmouseover="this.background='images/4.jpg'" onmouseout="this.background=''"></td></a>
			    <a href="<?php if($_SESSION[name] <> ""){ echo "list.php?action=dot"; }else{ echo "#"; }?> "><td width="109" align="center" valign="middle" onmouseover="this.background='images/5.jpg'" onmouseout="this.background=''"></td></a>
			    <a href="#" <?php if($_SESSION[name] <> "") { ?> onclick="javascript:Wopen=open('operation.php?action=trans','','height=700,width=665,scrollbars=no');"<?php } ?>><td width="110" align="center" valign="middle" onmouseover="this.background='images/6.jpg'" onmouseout="this.background=''"></td></a>
			    <a href="#" onclick="javascript:Wopen=open('operation.php?action=call','','height=700,width=665,scrollbars=yes');"><td width="112" align="center" valign="middle" onmouseover="this.background='images/7.jpg'" onmouseout="this.background=''"></td></a>
			    <a href="logout.php" onclick="return l_chk();"><td width="111" align="center" valign="middle" onmouseover="this.background='images/8.jpg'" onmouseout="this.background=''"></td></a>
			    <td>&nbsp;</td>
			</tr>
		</table>
	<!-- ----------------------------------- -->
	</td>
  </tr>
  <tr>
  <td height="13" colspan="2" align="center" valign="bottom" background="images/1ine_1.jpg"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="886" height="12" align="bottom">
    <param name="movie" value="images/00.swf" />
    <param name="quality" value="high" />
    <embed src="images/00.swf" width="886" height="12" align="bottom" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
  </object></td>
  </tr>
  <tr>
  	<td height="96" colspan="2" align="center" valign="top" background="images/c_banner.jpg">&nbsp;</td>
  </tr>
  <tr>
  	<td height="12" colspan="2" align="center" valign="bottom" background="images/1ine_1.jpg">
	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="886" height="12">
        <param name="movie" value="images/01.swf" />
        <param name="quality" value="high" />
        <embed src="images/01.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="886" height="12"></embed>
	    </object></td>
  </tr>
</table>