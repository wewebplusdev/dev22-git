<?php
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("config.php");

$myRand = randomNameUpdate(2);

		$sql = "SELECT ".$md_mem_positiontemp."_email FROM ".$md_mem_positiontemp."  WHERE  ".$md_mem_positiontemp."_masterkey='".$_REQUEST["masterkey"]."'  AND   ".$md_mem_positiontemp."_email='".$_REQUEST['inputEmail']."' AND   ".$md_mem_positiontemp."_gid='".$_REQUEST['valEditID']."'";
		$query =wewebQueryDB($coreLanguageSQL,$sql);
		$count_record=wewebNumRowsDB($coreLanguageSQL,$query);
		if($count_record<=0){
		
		$insert=array();
		
		$insert[$md_mem_positiontemp."_mid"] = "'".$myRand."'";
		$insert[$md_mem_positiontemp."_gid"] = "'".changeQuot($_REQUEST['inputGroupIDMain'])."'";
		$insert[$md_mem_positiontemp."_pid"] = "'".changeQuot($_REQUEST['inputGroupID'])."'";

		$sql="INSERT INTO ".$md_mem_positiontemp."(".implode(",",array_keys($insert)).") VALUES (".implode(",",array_values($insert)).")";
		$Query =wewebQueryDB($coreLanguageSQL,$sql);
		

		}else{
		?>
<script language="JavaScript" type="text/javascript">
			jQuery("#boxAlertEmail").show();
</script>
        <?php
		}
		
		
	
?>

<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
          <?php
$sql = "SELECT ".$md_mem_positiontemp."_mid,".$md_mem_positiontemp."_gid, ".$md_mem_positiontemp."_pid FROM ".$md_mem_positiontemp."  WHERE ".$md_mem_positiontemp."_mid='".$myRand."' ORDER BY ".$md_mem_positiontemp."_id ASC ";
$query= wewebQueryDB($coreLanguageSQL,$sql);
$numRowCount= wewebNumRowsDB($coreLanguageSQL,$query);
if($numRowCount>=1){
$num_email=0;
while ($row = wewebFetchArrayDB($coreLanguageSQL, $query)) {
$num_email++;
$valEmailNew=rechangeQuot($row[0]);
$valEmailID=$row[1];

?>
  <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb"><?php echo number_format($num_email)?>.<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><a href="javascript:void(0)"  onclick="document.myForm.valDelFile.value=<?php echo $valEmailID?>; modDelEmail('deleteEmail.php')" ><img src="../img/btn/delete.png" align="absmiddle" title="Delete email"  hspace="5"    border="0" /></a> <?php echo $valEmailNew?></div></td>
  </tr>
  
<?php }} ?>
</table>
<script language="JavaScript" type="text/javascript">
	document.myForm.inputEmail.value=''
	document.myForm.inputEmail.focus();
</script>

