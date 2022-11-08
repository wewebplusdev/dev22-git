<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("../core/incLang.php");

$sqlChk = "SELECT ".$core_tb_menu."_id,".$core_tb_menu."_linkpath FROM ".$core_tb_menu;
$sqlChk = $sqlChk."  WHERE ".$core_tb_menu."_masterkey ='".$_REQUEST['masterkey']."'";
$queryChk=wewebQueryDB($coreLanguageSQL,$sqlChk);
$rowChk=wewebFetchArrayDB($coreLanguageSQL,$queryChk);
$pathArr = explode("/",$rowChk[1]);

include("../".$pathArr[1]."/incModLang.php");
include("../".$pathArr[1]."/config.php");

	 $sql = "SELECT ".$core_tb_menu."_parentid FROM ".$core_tb_menu." WHERE ".$core_tb_menu."_id='".$_REQUEST['menukeyid']."' ";
	$query=wewebQueryDB($coreLanguageSQL,$sql) ;
	$recordCount=wewebNumRowsDB($coreLanguageSQL,$query);
	$row=wewebFetchArrayDB($coreLanguageSQL,$query);
	$valParentid=$row[0];
	if($valParentid>=1){
	?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<?php
$sqlSelect = "*";

	if($coreLanguageSQL=="mssql"){
	$valLimitTop ="TOP (5)";
	$valLimitMysql ="";
	}else{
	$valLimitTop ="";
	$valLimitMysql =" LIMIT 0,5";
	}

    $sqlMenu = "SELECT  ".$valLimitTop." ".$sqlSelect."  FROM ".$core_tb_menu." WHERE ".$core_tb_menu."_parentid='".$valParentid."'  AND ".$core_tb_menu."_status='Enable'  ORDER BY ".$core_tb_menu."_order ASC ".$valLimitMysql."";
    $queryMenu=wewebQueryDB($coreLanguageSQL,$sqlMenu) ;
    $recordCountMenu=wewebNumRowsDB($coreLanguageSQL,$queryMenu);
    while($rowMenu=wewebFetchArrayDB($coreLanguageSQL,$queryMenu)) {
		$masterkeyName = $rowMenu[$core_tb_menu."_masterkey"];
		$myUserID = $_SESSION[$valSiteManage."core_session_groupid"];
		$myMenuID = $rowMenu[$core_tb_menu."_id"];
		$permissionID = getUserPermissionOnMenu($myUserID,$myMenuID);

		if($permissionID!="NA" || $_SESSION[$valSiteManage."core_session_level"]=="SuperAdmin") {
					if($_SESSION[$valSiteManage.'core_session_language']=="Thai"){
							$txt_menu_lan=$rowMenu[$core_tb_menu."_namethai"];
					}else if($_SESSION[$valSiteManage.'core_session_language']=="Eng"){
							$txt_menu_lan=$rowMenu[$core_tb_menu."_namethai"];
					}

    ?>
  <tr>
    <td width="31" align="center" height="25" valign="top">&bull;</td>
    <td  align="left"  valign="top"><a href="../<?php echo $mod_fd_root?>/loadContant.php?masterkey=<?php echo $masterkeyName?>&menukeyid=<?php echo $myMenuID?>&viewID=1&inputLt=<?php echo $_SESSION[$valSiteManage.'core_session_language']?>"  class="moreDetailAb"><?php echo txtLimit($txt_menu_lan,45)?></a></td>
  </tr>
  <?php  }} ?>
  </table>

<?php }else{ ?>
<div style="height:140px; overflow:hidden;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="125" align="center" valign="middle"><a href="../<?php echo $mod_fd_root?>/loadContant.php?masterkey=<?php echo $_REQUEST['masterkey']?>&menukeyid=<?php echo $_REQUEST['menukeyid']?>&viewID=1" class="moreDetailAb"><?php echo $langMod["home:detail"]?></a></td>
    </tr>
</table>
</div>
<?php } ?>

<script type="text/javascript">
	jQuery(function() {
		jQuery(".moreDetailAb").colorbox({width:"950", height:"600"});
	});
</script>
