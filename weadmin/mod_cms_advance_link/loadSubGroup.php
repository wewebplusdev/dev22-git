<?
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../core/incLang.php");
include("incModLang.php");
include("config.php");

$valNav1=$langTxt["nav:home2"];
$valLinkNav1="../core/index.php";
$valNav2= $langMod["meu:subgroup"];
$valPermission= getUserPermissionOnMenu($_SESSION[$valSiteManage."core_session_groupid"],$_REQUEST["menukeyid"]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">

<link href="../css/theme.css" rel="stylesheet"/>
<title><?=$core_name_title?></title>
<script language="JavaScript"  type="text/javascript" src="../js/jquery-1.9.0.js"></script>
<script language="JavaScript"  type="text/javascript" src="../js/jquery.blockUI.js"></script>
<script language="JavaScript"  type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
<script type="text/javascript" language="javascript">


</script>
</head>

<body>
<?
// Check to set default value #########################
$module_default_pagesize = $core_default_pagesize;
$module_default_maxpage = $core_default_maxpage;
$module_default_reduce = $core_default_reduce;
$module_default_pageshow = 1;
$module_sort_number = $core_sort_number;

if($_REQUEST['module_pagesize']=="") {
	$module_pagesize = $module_default_pagesize;
}else{
	$module_pagesize =$_REQUEST['module_pagesize'];
}

if($_REQUEST['module_pageshow']=="") {
	$module_pageshow = $module_default_pageshow;
}else{
	$module_pageshow =$_REQUEST['module_pageshow'];
}

if($_REQUEST['module_adesc']=="") {
	$module_adesc = $module_sort_number;
}else{
	$module_adesc =$_REQUEST['module_adesc'];
}

if($_REQUEST['module_orderby']=="")  {
	$module_orderby = $mod_tb_root_sub_group."_order";
}else{
	$module_orderby =$_REQUEST['module_orderby'];
}

if($_REQUEST['inputSearch']!="") {
	$inputSearch=trim($_REQUEST['inputSearch']);
}else{
	$inputSearch =$_REQUEST['inputSearch'];
}

?>
<form action="?" method="post" name="myForm" id="myForm">
<input name="masterkey" type="hidden" id="masterkey" value="<?=$_REQUEST['masterkey']?>" />
<input name="menukeyid" type="hidden" id="menukeyid" value="<?=$_REQUEST['menukeyid']?>" />
<input name="module_pageshow" type="hidden" id="module_pageshow" value="<?=$module_pageshow?>" />
<input name="module_pagesize" type="hidden" id="module_pagesize" value="<?=$module_pagesize?>" />
<input name="module_orderby" type="hidden" id="module_orderby" value="<?=$module_orderby?>" />

					<div class="divRightNav">
                        <table width="96%" border="0" cellspacing="0" cellpadding="0"  align="center" >
                        <tr>
                        <td  class="divRightNavTb" align="left"><span class="fontContantTbNav"><a href="<?=$valLinkNav1?>" target="_self"><?=$valNav1?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?=$valNav2?></span></td>
                        <td  class="divRightNavTb" align="right">
                        <!-- ######### Start Menu Sub Mod ########## -->
                        <div class="menuSubMod ">
                            <a  href="group.php?masterkey=<?=$_REQUEST['masterkey']?>&menukeyid=<?=$_REQUEST['menukeyid']?>">
								<?=$langMod["meu:group"]?>
                            </a>
                        </div>
												<div class="menuSubMod active">
                            <a  href="subgroup.php?masterkey=<?=$_REQUEST['masterkey']?>&menukeyid=<?=$_REQUEST['menukeyid']?>">
								<?=$langMod["meu:subgroup"]?>
                            </a>
                        </div>
                        <div class="menuSubMod">
                            <a  href="index.php?masterkey=<?=$_REQUEST['masterkey']?>&menukeyid=<?=$_REQUEST['menukeyid']?>">
								<?=$langMod["meu:contant"]?>
                            </a>
                        </div>
                        <!-- ######### End Menu Sub Mod ########## -->
                        </td>
                        </tr>
                        </table>
					</div>
                    <div class="divRightHeadSearch" >

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding-top:20px;" align="center">
  
    <tr>
    <td width="50%"><select name="inputGh"  id="inputGh" onchange="document.myForm.submit(); " class="formSelectSearchStyle" >
       <option value="0"><?=$langMod["tit:selectg"]?> </option>
        <?
  $sql_group = "SELECT ".$mod_tb_root_group."_id,".$mod_tb_root_group."_subject FROM ".$mod_tb_root_group." WHERE  ".$mod_tb_root_group."_masterkey ='".$_REQUEST['masterkey']. "' AND ". $mod_tb_root_group . "_Status != 'Disable'   ORDER BY ".$mod_tb_root_group."_order DESC ";
   
  $query_group=wewebQueryDB($coreLanguageSQL, $sql_group);
    while($row_group=wewebFetchArrayDB($coreLanguageSQL,$query_group)) {
    $row_groupid=$row_group[0];
    $row_groupname=$row_group[1];
    $row_groupnameeng=$row_group[2];
          if($_SESSION[$valSiteManage.'core_session_language']=="Thai"){
              $valNameShow=$row_groupname;
          }else if($_SESSION[$valSiteManage.'core_session_language']=="Eng"){
              $valNameShow=$row_groupnameeng;
          }
    ?>
        <option value="<?=$row_groupid?>" <?  if($_REQUEST['inputGh']==$row_groupid){ ?> selected="selected" <?  }?>><?=$valNameShow?></option>
        <? }?>
    </select></td>
    <td   id="boxSelectTest"  width="50%" align="right">
        <input name="inputSearch" type="text"  id="inputSearch" value="<?=trim($_REQUEST['inputSearch'])?>" class="formInputSearchI" style="border-radius:15px;" placeholder="<?=$langTxt["sch:search"]?>"  /></td>
          <td style="padding-right:10px;" align="right" width="5%"><input name="searchOk" id="searchOk" onClick="document.myForm.submit();"  type="button" class="btnSearch"  value=" "  /></td>
    </tr>
</table>

  </div>
                            <div class="divRightHead">
                                <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center" >
                                  <tr>
                                    <td height="77" align="left"><span class="fontHeadRight"><?=$valNav2?></span></td>
                                    <td align="left">
                                            <table  border="0" cellspacing="0" cellpadding="0" align="right">
                                                <tr>
                                                    <td align="right">
                                                    <? if($valPermission=="RW"){?>
                                                        <div  class="btnAdd" title="<?=$langTxt["btn:add"]?>" onclick="document.myFormHome.inputLt.value='Thai';  addContactNew('addSubGroup.php');"></div>
                                                        <div  class="btnDel" title="<?=$langTxt["btn:del"]?>"   onclick="
if(Paging_CountChecked('CheckBoxID',document.myForm.TotalCheckBoxID.value)>0) {
	if(confirm('<?=$langTxt["mg:delpermis"]?>')) {
          delContactNew('deleteSubGroup.php');
	}
} else {
		alert('<?=$langTxt["mg:selpermis"] ?>');
}
				  "></div>
                  <?if($_REQUEST['inputGh']>=1) {?>

                                                        <div  class="btnSort" title="<?=$langTxt["btn:sortting"]?>" onclick="sortContactNew('sortSubGroup.php');"></div>
                    <?} }?>
                                                    </td>
                                                </tr>
                                            </table>
                                    </td>
                                  </tr>
                                </table>
                            </div>
                             <div class="divRightMain" >
<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center"  class="tbBoxListwBorder">
   <tr ><td width="3%"  class="divRightTitleTbL"  valign="middle" align="center" >
        <input name="CheckBoxAll" type="checkbox"  id="CheckBoxAll"  value="Yes" onClick="Paging_CheckAll(this,'CheckBoxID',document.myForm.TotalCheckBoxID.value)"   class="formCheckboxHead" />    </td>

     <td width="22%" align="left"   valign="middle"  class="divRightTitleTb" ><span class="fontTitlTbRight"><?=$langMod["tit:selectsgn"]?><? if($_SESSION[$valSiteManage.'core_session_languageT']==2){?>(<?=$langTxt["lg:thai"]?>)<? }?></span></td>
     <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>
            <td width="22%" align="left" valign="middle" class="divRightTitleTb"><span class="fontTitlTbRight"><?php echo $langMod["tit:selectsgn"] ?>(<?php echo $langTxt["lg:eng"] ?>)</span>
            </td>
          <?php } ?>
          <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>
            <td width="22%" align="left" valign="middle" class="divRightTitleTb"><span class="fontTitlTbRight"><?php echo $langMod["tit:selectsgn"] ?>(<?php echo $langTxt["lg:chi"] ?>)</span>
            </td>
          <?php } ?>
    <td width="12%"  class="divRightTitleTb"  valign="middle"  align="center"><span class="fontTitlTbRight"><?php echo $langMod["tit:subjectg"] ?></span></td>
    <td width="12%"  class="divRightTitleTb"  valign="middle"  align="center"><span class="fontTitlTbRight"><?=$langTxt["mg:status"]?></span></td>
    <td width="12%"  class="divRightTitleTb"  valign="middle"  align="center"><span class="fontTitlTbRight"><?=$langTxt["us:lastdate"]?></span></td>
    <td width="12%"  class="divRightTitleTbR"  valign="middle"  align="center"><span class="fontTitlTbRight"><?=$langTxt["mg:manage"]?></span></td>
  </tr>
  <?
// SQL SELECT #########################
$sql = "SELECT ".$mod_tb_root_sub_group."_id,"
.$mod_tb_root_sub_group."_subject,"
.$mod_tb_root_sub_group."_lastdate,"
.$mod_tb_root_sub_group."_status,"
.$mod_tb_root_sub_group."_subjecten,"
.$mod_tb_root_sub_group."_subjectcn," 
.$mod_tb_root_sub_group."_parentid," 
.$mod_tb_root_group ."_subject as groupname"
." FROM ".$mod_tb_root_sub_group;
$sql = $sql . "  INNER JOIN " . $mod_tb_root_group . " ON ". $mod_tb_root_group."_id = ".$mod_tb_root_sub_group."_gid";
$sql = $sql."  WHERE ".$mod_tb_root_sub_group."_masterkey ='".$_REQUEST['masterkey']."'   ";
$sql = $sql."  AND ".$mod_tb_root_sub_group."_parentid =0  ";

if($_REQUEST['inputGh']>=1) {
    $sql = $sql."  AND ".$mod_tb_root_sub_group."_gid ='".$_REQUEST['inputGh']."'   ";
    }

if($inputSearch<>"") {
		$sql = $sql."  AND  (
		".$mod_tb_root_sub_group."_subject LIKE '%$inputSearch%'  OR
    ".$mod_tb_root_sub_group."_subjecten LIKE '%$inputSearch%'  OR
		".$mod_tb_root_sub_group."_subjectcn LIKE '%$inputSearch%'   ) ";
}


$query=wewebQueryDB($coreLanguageSQL, $sql);
$count_totalrecord=wewebNumRowsDB($coreLanguageSQL, $query);

// Find max page size #########################
if($count_totalrecord>$module_pagesize) {
	$numberofpage= ceil($count_totalrecord/$module_pagesize);
} else {
	$numberofpage=1;
}

// Recover page show into range #########################
if($module_pageshow>$numberofpage) { $module_pageshow=$numberofpage; }

// Select only paging range #########################
$recordstart = ($module_pageshow-1)*$module_pagesize;

$sql .= " ORDER BY $module_orderby $module_adesc LIMIT $recordstart , $module_pagesize ";

// print_pre($sql);
$query=wewebQueryDB($coreLanguageSQL, $sql);
$count_record=wewebNumRowsDB($coreLanguageSQL, $query);
$index=1;
$valDivTr="divSubOverTb";
if($count_record>0) {
	while($index<$count_record+1) {
		$row=wewebFetchArrayDB($coreLanguageSQL, $query);
		$valID=$row[0];
		$valName=rechangeQuot($row[1]);
	 	$valDateCredate = dateFormatReal($row[2]);
	 	$valTimeCredate = timeFormatReal($row[2]);
		$valStatus=$row[3];
		$valNameEn=rechangeQuot($row[4]);
		$valNameEn=chechNullVal($valNameEn);
    $valNameCn=rechangeQuot($row[5]);
		$valNameCn=chechNullVal($valNameCn);
    $valParentID=$row[6];
    $groupName = rechangeQuot($row[7]);
		if($valStatus=="Enable"){
			$valStatusClass=	"fontContantTbEnable";
		}else{
			$valStatusClass=	"fontContantTbDisable";
		}

		//if($valDivTr=="divSubOverTb"){
			$valDivTr=	"divOverTb";
		//}else{
			//$valDivTr="divSubOverTb";
		//}
  ?>
  <tr class="<?=$valDivTr?>" >
     <td  class="divRightContantOverTbL"  valign="top" align="center" ><input  id="CheckBoxID<?=$index?>" name="CheckBoxID<?=$index?>" type="checkbox" class="formCheckboxList" onClick="Paging_CheckAllHandle(document.myForm.CheckBoxAll,'CheckBoxID',document.myForm.TotalCheckBoxID.value)" value="<?=$valID?>" />    </td>
     <td  class="divRightContantOverTb"   valign="top" align="left" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left"><div class="widthDiv"><a  href="javascript:void(0)"  onclick="
    document.myFormHome.inputLt.value='Thai';
   document.myFormHome.valEditID.value=<?=$valID?>;
    viewContactNew('viewSubGroup.php');" ><?=$valName?></a></div></td>
  </tr>
</table></td>
<?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>
                <td class="divRightContantOverTb" valign="top" align="left">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="left"><a href="javascript:void(0)" onclick="
        document.myFormHome.inputLt.value='Eng';
      document.myFormHome.valEditID.value=<?php echo $valID ?>;
        viewContactNew('viewSubGroup.php');"><?php echo $valNameEn ?></a></td>
                    </tr>
                  </table>
                </td>
              <?php } ?>
              <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>
                <td class="divRightContantOverTb" valign="top" align="left">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="left"><a href="javascript:void(0)" onclick="
            document.myFormHome.inputLt.value='Chi';
            document.myFormHome.valEditID.value=<?php echo $valID ?>;
            viewContactNew('viewSubGroup.php');"><?php echo $valNameCn ?></a></td>
                    </tr>
                  </table>
                </td>
              <?php } ?>
<? if($_SESSION[$valSiteManage.'core_session_languageT']==2){?>
     <td  class="divRightContantOverTb"   valign="top" align="left" >
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left"><div class="widthDiv"><a  href="javascript:void(0)"  onclick="
    document.myFormHome.inputLt.value='Eng';
   document.myFormHome.valEditID.value=<?=$valID?>;
    viewContactNew('viewSubGroup.php');" ><?=$valNameEn?></a></div></td>
  </tr>
</table>    </td>
<? }?>
<td  class="divRightContantOverTb"  valign="top"  align="center"><?php echo $groupName?></td>
    <td  class="divRightContantOverTb"  valign="top"  align="center">
       <? if($valPermission=="RW" ){?>
     <div   id="load_status<?=$valID?>">
    <? if($valStatus=="Enable"){?>

<a href="javascript:void(0)"  onclick="changeStatus('load_waiting<?=$valID?>','<?=$mod_tb_root_sub_group?>','<?=$valStatus?>','<?=$valID?>','load_status<?=$valID?>','../<?=$mod_fd_root?>/statusMg.php')" ><span class="<?=$valStatusClass?>"><?=$valStatus?></span></a>

                <? }else{?>

				<a href="javascript:void(0)"  onclick="changeStatus('load_waiting<?=$valID?>','<?=$mod_tb_root_sub_group?>','<?=$valStatus?>','<?=$valID?>','load_status<?=$valID?>','../<?=$mod_fd_root?>/statusMg.php')"> <span class="<?=$valStatusClass?>"><?=$valStatus?></span> </a>

                <? }?>

                <img src="../img/loader/ajax-loaderstatus.gif" alt="waiting"  style="display:none;"  id="load_waiting<?=$valID?>" />     </div>
           <? }else{?>
               <? if($valStatus=="Enable"){?>
                   <span class="<?=$valStatusClass?>"><?=$valStatus?></span>
                <? }else{?>
                    <span class="<?=$valStatusClass?>"><?=$valStatus?></span>
                <? }?>

           <? }?>    </td>
    <td  class="divRightContantOverTb"  valign="top"  align="center">
    <span class="fontContantTbupdate"><?=$valDateCredate?></span><br/>
    <span class="fontContantTbTime"><?=$valTimeCredate?></span>    </td>
    <td  class="divRightContantOverTbR"  valign="top"  align="center">
    <? if($valPermission=="RW"){?>
    <table  border="0" cellspacing="0" cellpadding="0">
  <tr>
  <?php if ($valParentID == "0") { ?>
  <td valign="top" align="center" width="30">

  <div class="divRightManage"  title="<?php echo  $langTxt["btn:add"] ?>" onclick="
  document.myFormHome.inputLt.value='Thai';
  document.myFormHome.myParentID.value =<?php echo  $valID ?>;
  addContactNew('addSubGroup.php');" >
  <img src="../img/btn/add2.png"  /><br/>
  <span class="fontContantTbManage"><?php echo  $langTxt["btn:add"] ?></span></div>
  </td>
  <?php } ?>
   <td valign="top" align="center" width="30">

    <div class="divRightManage"  title="<?=$langTxt["btn:top"]?>" onclick="
   document.myFormHome.inputLt.value='Thai';
   document.myFormHome.valEditID.value=<?=$valID?>;
    editContactNew('topUpdateSubGroup.php');" >
    <img src="../img/btn/topbtn.png"  /><br/>
    <span class="fontContantTbManage"><?=$langTxt["btn:top"]?><? if($_SESSION[$valSiteManage.'core_session_languageT']==2){?><br />
(<?=$langTxt["lg:all"]?>)<? }?></span></div>
  </td>
  <td valign="top" align="center" width="30">
                        <div class="divRightManage" title="<?php echo $langTxt["btn:edit"] ?>" onclick="
   document.myFormHome.inputLt.value='Thai';;
   document.myFormHome.valEditID.value=<?php echo $valID ?>;
    editContactNew('editSubGroup.php');">
                          <img src="../img/btn/edit.png" /><br />
                          <span class="fontContantTbManage"><?php echo $langTxt["btn:edit"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?><br />
                            (<?php echo $langTxt["lg:thai"] ?>)<?php } ?></span>
                        </div>
                      </td>
                      <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>
                        <td valign="top" align="center" width="30">
                          <div class="divRightManage" title="<?php echo $langTxt["btn:edit"] ?>" onclick="
   document.myFormHome.inputLt.value='Eng';
   document.myFormHome.valEditID.value=<?php echo $valID ?>;
    editContactNew('editSubGroup.php');">
                            <img src="../img/btn/edit.png" /><br />
                            <span class="fontContantTbManage"><?php echo $langTxt["btn:edit"] ?><br />
                              (<?php echo $langTxt["lg:eng"] ?>)</span>
                          </div>
                        </td>
                      <?php } ?>
                      <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>
                        <td valign="top" align="center" width="30">
                          <div class="divRightManage" title="<?php echo $langTxt["btn:edit"] ?>" onclick="
   document.myFormHome.inputLt.value='Chi';
   document.myFormHome.valEditID.value=<?php echo $valID ?>;
    editContactNew('editSubGroup.php');">
                            <img src="../img/btn/edit.png" /><br />
                            <span class="fontContantTbManage"><?php echo $langTxt["btn:edit"] ?><br />
                              (<?php echo $langTxt["lg:chi"] ?>)</span>
                          </div>
                        </td>
                      <?php } ?>
    <td valign="top" align="center" width="30">
    <div class="divRightManage" title="<?=$langTxt["btn:del"]?>"  onClick="
            if(confirm('<?=$langTxt["mg:delpermis"]?>')) {
            Paging_CheckedThisItem( document.myForm.CheckBoxAll, <?=$index?>, 'CheckBoxID', document.myForm.TotalCheckBoxID.value );
          delContactNew('deleteSubGroup.php');
            }
            ">
     <img src="../img/btn/delete.png"  /><br/>
    <span class="fontContantTbManage"><?=$langTxt["btn:del"]?><? if($_SESSION[$valSiteManage.'core_session_languageT']==2){?><br />
(<?=$langTxt["lg:all"]?>)<? }?></span>    </div>    </td>
  </tr>
</table>
<? }?>    </td>
  </tr>
  <?php
  if ($valParentID == "0") {
    $sqlSub = "SELECT ".$mod_tb_root_sub_group."_id,"
      .$mod_tb_root_sub_group."_subject,"
      .$mod_tb_root_sub_group."_lastdate,"
      .$mod_tb_root_sub_group."_status,"
      .$mod_tb_root_sub_group."_subjecten,"
      .$mod_tb_root_sub_group."_subjectcn," 
      .$mod_tb_root_sub_group."_parentid" 
      ." FROM ".$mod_tb_root_sub_group;
      $sqlSub = $sqlSub."  WHERE ".$mod_tb_root_sub_group."_masterkey ='".$_REQUEST['masterkey']."'   ";
      $sqlSub = $sqlSub."  AND ".$mod_tb_root_sub_group."_parentid ='" . $valID . "'";
      
      $querySub = wewebQueryDB($coreLanguageSQL, $sqlSub);
      $recordCountSub = wewebNumRowsDB($coreLanguageSQL, $querySub);
      $maxOrderSub = $recordCountSub;
      if ($recordCountSub >= 1) {
          while ($rowSub = wewebFetchArrayDB($coreLanguageSQL, $querySub)) {
              $valIDSub=$rowSub[0];
              $valName=rechangeQuot($rowSub[1]);
               $valDateCredate = dateFormatReal($rowSub[2]);
               $valTimeCredate = timeFormatReal($rowSub[2]);
              $valStatus=$rowSub[3];
              $valNameEn=rechangeQuot($rowSub[4]);
              $valNameEn=chechNullVal($valNameEn);
              $valNameCn=rechangeQuot($rowSub[5]);
              $valNameCn=chechNullVal($valNameCn);
              $valParentID=$rowSub[6];
              if($valStatus=="Enable"){
                $valStatusClass=	"fontContantTbEnable";
              }else{
                $valStatusClass=	"fontContantTbDisable";
              }
              ?>
              <tr class="divSubOverTb" >
     <td  class="divRightContantOverTbL"  style="padding-left:20px;" valign="top" align="center" ><input  id="CheckBoxID<?=$index?>" name="CheckBoxID<?=$index?>" type="checkbox" class="formCheckboxList" onClick="Paging_CheckAllHandle(document.myForm.CheckBoxAll,'CheckBoxID',document.myForm.TotalCheckBoxID.value)" value="<?=$valID?>" />    </td>
     <td  class="divRightContantOverTb"   valign="top" align="left" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left"><div class="widthDiv"><a  href="javascript:void(0)"  onclick="
    document.myFormHome.inputLt.value='Thai';
    document.myFormHome.myParentID.value =<?php echo  $valID ?>;
   document.myFormHome.valEditID.value=<?=$valIDSub?>;
    viewContactNew('viewSubGroup.php');" ><?=$valName?></a></div></td>
  </tr>
</table></td>
<?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>
                <td class="divRightContantOverTb" valign="top" align="left">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="left"><a href="javascript:void(0)" onclick="
        document.myFormHome.inputLt.value='Eng';
      document.myFormHome.valEditID.value=<?php echo $valID ?>;
        viewContactNew('viewSubGroup.php');"><?php echo $valNameEn ?></a></td>
                    </tr>
                  </table>
                </td>
              <?php } ?>
              <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>
                <td class="divRightContantOverTb" valign="top" align="left">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="left"><a href="javascript:void(0)" onclick="
            document.myFormHome.inputLt.value='Chi';
            document.myFormHome.valEditID.value=<?php echo $valID ?>;
            viewContactNew('viewSubGroup.php');"><?php echo $valNameCn ?></a></td>
                    </tr>
                  </table>
                </td>
              <?php } ?>
<? if($_SESSION[$valSiteManage.'core_session_languageT']==2){?>
     <td  class="divRightContantOverTb"   valign="top" align="left" >
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left"><div class="widthDiv"><a  href="javascript:void(0)"  onclick="
    document.myFormHome.inputLt.value='Eng';
   document.myFormHome.valEditID.value=<?=$valID?>;
    viewContactNew('viewSubGroup.php');" ><?=$valNameEn?></a></div></td>
  </tr>
</table>    </td>
<? }?>
    <td  class="divRightContantOverTb"  valign="top"  align="center"><?php echo $groupName?></td>
    <td  class="divRightContantOverTb"  valign="top"  align="center">
       <? if($valPermission=="RW" ){?>
     <div   id="load_status<?=$valIDSub?>">
    <? if($valStatus=="Enable"){?>

<a href="javascript:void(0)"  onclick="changeStatus('load_waiting<?=$valIDSub?>','<?=$mod_tb_root_sub_group?>','<?=$valStatus?>','<?=$valIDSub?>','load_status<?=$valIDSub?>','../<?=$mod_fd_root?>/statusMg.php')" ><span class="<?=$valStatusClass?>"><?=$valStatus?></span></a>

                <? }else{?>

				<a href="javascript:void(0)"  onclick="changeStatus('load_waiting<?=$valIDSub?>','<?=$mod_tb_root_sub_group?>','<?=$valStatus?>','<?=$valIDSub?>','load_status<?=$valIDSub?>','../<?=$mod_fd_root?>/statusMg.php')"> <span class="<?=$valStatusClass?>"><?=$valStatus?></span> </a>

                <? }?>

                <img src="../img/loader/ajax-loaderstatus.gif" alt="waiting"  style="display:none;"  id="load_waiting<?=$valIDSub?>" />     </div>
           <? }else{?>
               <? if($valStatus=="Enable"){?>
                   <span class="<?=$valStatusClass?>"><?=$valStatus?></span>
                <? }else{?>
                    <span class="<?=$valStatusClass?>"><?=$valStatus?></span>
                <? }?>

           <? }?>    </td>
    <td  class="divRightContantOverTb"  valign="top"  align="center">
    <span class="fontContantTbupdate"><?=$valDateCredate?></span><br/>
    <span class="fontContantTbTime"><?=$valTimeCredate?></span>    </td>
    <td  class="divRightContantOverTbR"  valign="top"  align="center">
    <? if($valPermission=="RW"){?>
    <table  border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td valign="top" align="center" width="30">

    <div class="divRightManage"  title="<?=$langTxt["btn:top"]?>" onclick="
   document.myFormHome.inputLt.value='Thai';
   document.myFormHome.myParentID.value =<?php echo  $valID ?>;
   document.myFormHome.valEditID.value=<?=$valIDSub?>;
    editContactNew('topUpdateSubGroup.php');" >
    <img src="../img/btn/topbtn.png"  /><br/>
    <span class="fontContantTbManage"><?=$langTxt["btn:top"]?><? if($_SESSION[$valSiteManage.'core_session_languageT']==2){?><br />
(<?=$langTxt["lg:all"]?>)<? }?></span></div>
  </td>
  <td valign="top" align="center" width="30">
                        <div class="divRightManage" title="<?php echo $langTxt["btn:edit"] ?>" onclick="
   document.myFormHome.inputLt.value='Thai';
   document.myFormHome.myParentID.value =<?php echo  $valID ?>;
   document.myFormHome.valEditID.value=<?php echo $valIDSub ?>;
    editContactNew('editSubGroup.php');">
                          <img src="../img/btn/edit.png" /><br />
                          <span class="fontContantTbManage"><?php echo $langTxt["btn:edit"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?><br />
                            (<?php echo $langTxt["lg:thai"] ?>)<?php } ?></span>
                        </div>
                      </td>
                      <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>
                        <td valign="top" align="center" width="30">
                          <div class="divRightManage" title="<?php echo $langTxt["btn:edit"] ?>" onclick="
   document.myFormHome.inputLt.value='Eng';
   document.myFormHome.myParentID.value =<?php echo  $valID ?>;
   document.myFormHome.valEditID.value=<?php echo $valIDSub ?>;
    editContactNew('editSubGroup.php');">
                            <img src="../img/btn/edit.png" /><br />
                            <span class="fontContantTbManage"><?php echo $langTxt["btn:edit"] ?><br />
                              (<?php echo $langTxt["lg:eng"] ?>)</span>
                          </div>
                        </td>
                      <?php } ?>
                      <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>
                        <td valign="top" align="center" width="30">
                          <div class="divRightManage" title="<?php echo $langTxt["btn:edit"] ?>" onclick="
   document.myFormHome.inputLt.value='Chi';
   document.myFormHome.myParentID.value =<?php echo  $valID ?>;
   document.myFormHome.valEditID.value=<?php echo $valIDSub ?>;
    editContactNew('editSubGroup.php');">
                            <img src="../img/btn/edit.png" /><br />
                            <span class="fontContantTbManage"><?php echo $langTxt["btn:edit"] ?><br />
                              (<?php echo $langTxt["lg:chi"] ?>)</span>
                          </div>
                        </td>
                      <?php } ?>
    <td valign="top" align="center" width="30">
    <div class="divRightManage" title="<?=$langTxt["btn:del"]?>"  onClick="
            if(confirm('<?=$langTxt["mg:delpermis"]?>')) {
            Paging_CheckedThisItem( document.myForm.CheckBoxAll, <?=$index?>, 'CheckBoxID', document.myForm.TotalCheckBoxID.value );
          delContactNew('deleteSubGroup.php');
            }
            ">
     <img src="../img/btn/delete.png"  /><br/>
    <span class="fontContantTbManage"><?=$langTxt["btn:del"]?><? if($_SESSION[$valSiteManage.'core_session_languageT']==2){?><br />
(<?=$langTxt["lg:all"]?>)<? }?></span>    </div>    </td>
  </tr>
</table>
<? }?>    </td>
  </tr>
              <?php
          }
      }
  }
 ?>
<?php
$index++;
}
	}else{?>
 <tr >
    <td colspan="6" align="center"  valign="middle"  class="divRightContantTbRL" style="padding-top:150px; padding-bottom:150px;" ><?=$langTxt["mg:nodate"]?></td>
    </tr>
<? }?>

<tr >
    <td colspan="7" align="center"  valign="middle"  class="divRightContantTbRL" ><table width="98%" border="0" cellspacing="0" cellpadding="0"  align="center" >
                        <tr>
                        <td  class="divRightNavTb" align="left"><span class="fontContantTbNavPage"><?=$langTxt["pr:All"]?> <b><?=number_format($count_totalrecord)?></b> <?=$langTxt["pr:record"]?></span></td>
                        <td  class="divRightNavTb" align="right">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
<td align="right" style="padding-right:10px;"><span class="fontContantTbNavPage"><?=$langTxt["pr:page"]?>
<? if($numberofpage>1) { ?>
<select name="toolbarPageShow"  class="formSelectContantPage" onChange="document.myForm.module_pageshow.value=this.value; document.myForm.submit(); ">
<?
if($numberofpage<$module_default_maxpage) {
	// Show page list #########################
	for($i=1;$i<=$numberofpage;$i++) {
		echo "<option value=\"$i\"";
		if($i==$module_pageshow) { echo " selected"; }
		echo ">$i</option>";
	}

}else {
	// # If total page count greater than default max page  value then reduce page select size #########################
	$starti = $module_pageshow-$module_default_reduce;
	if($starti<1) { $starti=1; }
	$endi = $module_pageshow+$module_default_reduce;
	if($endi>$numberofpage) { $endi=$numberofpage; }
	//#####################
	for($i=$starti ;$i<=$endi;$i++) {
		echo "<option value=\"$i\"";
		if($i==$module_pageshow) { echo " selected"; }
		echo ">$i</option>";
	}
}
?>
</select>
<? } else { ?>
 <b><?=$module_pageshow?></b>
 <? }?>
  <?=$langTxt["pr:of"]?> <b><?=$numberofpage?></b></span></td>
		<? if($module_pageshow>1) { ?>
		<td width="21" align="center"> <img src="../img/controlpage/playset_start.gif" width="21" height="21"
		onmouseover="this.src='../img/controlpage/playset_start_active.gif'; this.style.cursor='hand';"
		onmouseout="this.src='../img/controlpage/playset_start.gif';"
		onclick="document.myForm.module_pageshow.value=1; document.myForm.submit();"  style="cursor:pointer;" /></td>
		<? } else { ?>
		<td width="21" align="center"><img src="../img/controlpage/playset_start_disable.gif" width="21" height="21" /></td>
		<? } ?>
		<? if($module_pageshow>1) {
		$valPrePage=$module_pageshow-1;
		 ?>
		<td width="21" align="center"> <img src="../img/controlpage/playset_backward.gif" width="21" height="21"  style="cursor:pointer;"
		onmouseover="this.src='../img/controlpage/playset_backward_active.gif'; this.style.cursor='hand';"
		onmouseout="this.src='../img/controlpage/playset_backward.gif';"
		onclick="document.myForm.module_pageshow.value='<?=$valPrePage?>'; document.myForm.submit();" /></td>
		<? } else { ?>
		<td width="21" align="center"><img src="../img/controlpage/playset_backward_disable.gif" width="21" height="21" /></td>
		<? } ?>
		<td width="21" align="center"> <img src="../img/controlpage/playset_stop.gif" width="21" height="21"   style="cursor:pointer;"
		onmouseover="this.src='../img/controlpage/playset_stop_active.gif'; this.style.cursor='hand';"
		onmouseout="this.src='../img/controlpage/playset_stop.gif';"
		onclick="
		with(document.myForm) {
		module_pageshow.value='';
		module_pagesize.value='';
		module_orderby.value='';
        document.myForm.submit();
		}
		" /></td>
		<? if($module_pageshow<$numberofpage) {
		$valNextPage=$module_pageshow+1;
		 ?>
		<td width="21" align="center"> <img src="../img/controlpage/playset_forward.gif" width="21" height="21"   style="cursor:pointer;"
		onmouseover="this.src='../img/controlpage/playset_forward_active.gif'; this.style.cursor='hand';"
		onmouseout="this.src='../img/controlpage/playset_forward.gif';"
		onclick="document.myForm.module_pageshow.value='<?=$valNextPage?>'; document.myForm.submit();" /></td>
		<? } else { ?>
		<td width="10" align="center"><img src="../img/controlpage/playset_forward_disable.gif" width="21" height="21" /></td>
		<? } ?>
		<? if($module_pageshow<$numberofpage) { ?>
		<td width="10" align="center"><img src="../img/controlpage/playset_end.gif" width="21" height="21"   style="cursor:pointer;"
		onmouseover="this.src='../img/controlpage/playset_end_active.gif'; this.style.cursor='hand';"
		onmouseout="this.src='../img/controlpage/playset_end.gif';"
		onclick="document.myForm.module_pageshow.value='<?=$numberofpage?>'; document.myForm.submit();" /></td>
		<? } else { ?>
		<td width="10" align="center"><img src="../img/controlpage/playset_end_disable.gif" width="21" height="21" /></td>
		<? } ?>
		</tr>
		</table>                        </td>
                        </tr>
                        </table></td>
    </tr>
</table>
<input name="TotalCheckBoxID" type="hidden" id="TotalCheckBoxID" value="<?=$index-1?>" />
<div class="divRightContantEnd"></div>
                             </div>

</form>
<? include("../lib/disconnect.php");?>

 </body>
</html>
