<?php
	session_start();
	include "inc/chec.php";
	include "conn/conn.php";
?>
<table width="380" height="440" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4" valign="top"><table width="380" height="60" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" colspan="4" align="center" valign="middle">会 员 等 级 管 理</td>
        </tr>
        <tr>
          <td colspan="4"><table width="375" border="0" align="center" cellpadding="2" cellspacing="0">
              <tr>
                <td height="10" colspan="3" align="right" valign="middle"><a href="#" onclick="javacript:Wopen=open('operation.php?action=v_grade','参数更新','height=500,width=665,scrollbars=no');">参数更新</a></td>
              </tr>
              <tr>
                <td width="47" height="30" align="center" valign="middle">ID</td>
                <td height="30" align="center" valign="middle">项目名称</td>
                <td height="30" align="center" valign="middle">项目参数</td>
              </tr>
              	<?php		$a_sql="select * from tb_grade";
						$a_rst = $conn->execute($a_sql);
						While(!$a_rst->EOF){
				?>
              <tr>
                <td height="20" align="center" valign="middle"><?php echo $a_rst->fields[0]; ?></td>
                <td height="20" align="center" valign="middle"><?php echo $a_rst->fields[1]; ?></td>
                <td height="20" align="center" valign="middle"><?php echo $a_rst->fields[2]; ?></td>
              </tr>
              	<?php
						$a_rst->movenext();
						}
				?>
          </table></td>
        </tr>
    </table></td>
  </tr>
</table>