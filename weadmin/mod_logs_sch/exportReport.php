<?php
@include("../lib/session.php");
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="report_accept_' . date('Y-m-d') . '.xls"'); #ชื่อไฟล์
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("config.php");
include "incModLang.php";

$masterkey = $_REQUEST['masterkey'];
$menukeyid = $_REQUEST['menukeyid'];

logs_access('3', 'Export');

?>
<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">


<HEAD>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<style type="text/css">
		/* <!-- */
		.bold {
			font-weight: bold;
		}

		/* --> */
	</style>
</HEAD>

<BODY>
	<table border="1" cellspacing="1" cellpadding="2" align="center">
		<tbody>
			<tr>
				<td width="56" height="30" align="center" bgcolor="#eeeeee" class="bold" valign="middle">ลำดับ</td>
				<td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:keywords"] ?></td>
				<td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:count"] ?></td>
				<td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle">วันที่สร้าง </td>
			</tr>

			<?php
			$sql = str_replace('\\', '', $_POST['sql_export']);
			$query = wewebQueryDB($coreLanguageSQL, $sql);
			$count_record = wewebNumRowsDB($coreLanguageSQL, $query);
			$date_print = date("Y-m-d H:i:s");

			if ($count_record >= 1) {
				$index = 1;
				while ($row_member = wewebFetchArrayDB($coreLanguageSQL, $query)) {
					$row_id = $row_member[0];
					
					$valKeywords = $row_member[2];
					$valCount = number_format($row_member[3]);
					$valDateCredate = dateFormatReal($row_member[4]);
					$valTimeCredate = timeFormatReal($row_member[4]);
			?>

					<tr bgcolor="#ffffff">
						<td height="30" align="center" valign="middle"><?php echo $index ?></td>
						<td align="left" valign="middle"><?php echo $valKeywords ?></td>
						<td align="left" valign="middle">'<?php echo $valCount ?></td>
						<td align="left" valign="middle"><?php echo $valDateCredate ?></td>
					</tr>
				<?php
					$index++;
				}
				?>


			<?php } ?>
		</tbody>
	</table>
	<table border="0" cellspacing="1" cellpadding="2" align="left">
		<tbody>
			<tr>
				<td width="175" align="right" valign="middle" class="bold">Print date : </td>
				<td width="175" align="left" valign="middle"><?php echo $date_print ?></td>
			</tr>
		</tbody>
	</table>
</BODY>

</HTML>