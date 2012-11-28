<?php
	include_once 'inc/char.php';
	include_once 'system/system.inc.php';
	$vendee = $_GET['vendee'];
	$formid = $_GET['formid'];
	$reback = '0';
	$tmp = "<table width='630' border='0' align='center' cellpadding='0' cellspacing='0'><tr><td height='25' colspan='7' align='center' valign='middle' class='first'>查询结果</td></tr><tr><td width='100' height='25' align='center' valign='middle' class='left'>订单号</td><td width='75' height='25' align='center' valign='middle' class='center'>订货会员</td><td width='75' height='25' align='center' valign='middle' class='center'>收货人</td><td width='100' height='25' align='center' valign='middle' class='center'>订单金额</td><td width='75' height='25' align='center' valign='middle' class='center'>付款方式</td><td width='75' height='25' align='center' valign='middle' class='center'>收款方式</td><td width='100' height='25' align='center' valign='middle' class='right'>订单状态</td></tr>";

	$sql = "select id,formid,vendee,taker,total,pay_method,del_method,state from tb_form where vendee = '".$vendee."' or formid = '".$formid."'";
	$rst = $conn->execute($sql);
	if($rst->RecordCount() == 0){
	}else{
		$arr = $rst->getArray();
		
		foreach($arr as $value){
			$tmp .= "<tr><td height=25 align=center valign=middle class=left>".$value['formid']."</td><td align=center valign=middle class=center>".$value['vendee']."</td><td align=center valign=middle class=center>".$value['taker']."</td><td  align=center valign=middle class=center>".$value['total']."</td><td  align=center valign=middle class=center>".$value['pay_method']."</td><td align=center valign=middle class=center>".$value['del_method']."</td><td align=center valign=middle class=right>";
			switch ($value['state']){
				case 0:
					$tmp .= '未作处理';
					break;
				case 1:
					$tmp .= '已付款';
					break;
				case 2:
					$tmp .= '已发货';
					break;
				case 3:
					$tmp .= '已收货';
					break;
			}
			$tmp .= "</td></tr>";
		}
		$tmp .= "</table>";
		$reback = $tmp;
	}
	echo $reback;
?>
