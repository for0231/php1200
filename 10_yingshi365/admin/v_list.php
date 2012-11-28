<?php
	session_start();
	include "inc/chec.php";
	include "conn/conn.php";
	$l_sqlstr = "select * from tb_videolist";
	$l_rst = $conn->execute($l_sqlstr);
	
?>
<table width="380" height="440" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4" valign="top"><table width="380" height="60" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" colspan="4" align="center" valign="middle">音 频 目 录 管 理</td>
        </tr>
        <tr>
          <td colspan="4"><table width="375" border="0" align="center" cellpadding="2" cellspacing="2">
              <tr>
                <td height="10" colspan="5" align="right" valign="middle"><a href="#" onclick="javacript:Wopen=open('operation.php?action=videolist','添加目录','height=500,width=665,scrollbars=no');">目录添加</a></td>
              </tr>
              <tr>
                <td height="30" align="center" valign="middle">ID</td>
                <td height="30" align="center" valign="middle">等级</td>
                <td height="30" align="center" valign="middle">名称</td>
                <td height="30" align="center" valign="middle">父级名称</td>
                <td height="30" align="center" valign="middle">操作</td>
              </tr>
			  <?php
			  	while(!$l_rst->EOF){
			  ?>
              <tr>
                <td height="18" align="center" valign="middle"><?php echo $l_rst->fields[0]; ?></td>
                <td height="18" align="center" valign="middle"><?php echo $l_rst->fields[1]; ?></td>
                <td height="18" align="center" valign="middle"><?php echo $l_rst->fields[2]; ?></td>
                <td height="18" align="center" valign="middle"><?php echo $l_rst->fields[3] ?></td>
                <td height="18" align="center" valign="middle"><a href="del_list_chk.php?action=videolist&id=<?php echo $l_rst->fields[0]; ?>" onclick="return del_chk();">删除</a>
                </td>
              </tr>
              <?php
			  	$l_rst->MoveNext();
				}
			  ?>
          </table></td>
        </tr>
    </table></td>
  </tr>
</table>