<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("../core/incLang.php");
include("config.php");
include("incModLang.php");

$valClassNav    = 2;
$valNav1        = $langTxt["nav:home2"];
$valLinkNav1    = "../core/index.php";
$dataselect     = "";
if ($_REQUEST['inputLt'] == "Thai") {
    $dataselect = "
    " . $mod_tb_root . "." . $mod_tb_root . "_id,
    " . $mod_tb_root . "." . $mod_tb_root . "_subject,
    " . $mod_tb_root . "." . $mod_tb_root . "_lastdate,
    " . $mod_tb_root . "." . $mod_tb_root . "_crebyid,
    " . $mod_tb_root . "." . $mod_tb_root . "_status,
    " . $mod_tb_root . "." . $mod_tb_root . "_title
    ";
} elseif($_REQUEST['inputLt'] == "Eng") {
    $dataselect = "
    " . $mod_tb_root . "." . $mod_tb_root . "_id,
    " . $mod_tb_root . "." . $mod_tb_root . "_subjecten,
    " . $mod_tb_root . "." . $mod_tb_root . "_lastdate,
    " . $mod_tb_root . "." . $mod_tb_root . "_crebyid,
    " . $mod_tb_root . "." . $mod_tb_root . "_status,
    " . $mod_tb_root . "." . $mod_tb_root . "_titleen

    ";
}else{
    $dataselect = "
    " . $mod_tb_root . "." . $mod_tb_root . "_id,
    " . $mod_tb_root . "." . $mod_tb_root . "_subjectcn,
    " . $mod_tb_root . "." . $mod_tb_root . "_lastdate,
    " . $mod_tb_root . "." . $mod_tb_root . "_crebyid,
    " . $mod_tb_root . "." . $mod_tb_root . "_status,
    " . $mod_tb_root . "." . $mod_tb_root . "_titlecn

    ";
}
$dataselect .= "
    ,
    " . $mod_tb_root . "." . $mod_tb_root . "_pic
    ";
$sql    = "SELECT " . $dataselect . " FROM " . $mod_tb_root . " WHERE 1=1 AND " . $mod_tb_root . "_masterkey = '" . $_REQUEST['masterkey'] . "' AND " . $mod_tb_root . "_id = '" . $_REQUEST['valEditID'] . "' ";
$Query  = wewebQueryDB($coreLanguageSQL, $sql);
$Row    = wewebFetchArrayDB($coreLanguageSQL, $Query);

$valid          = $Row[0];
$valSubject     = $Row[1];
$valhtml        = $mod_path_html . "/" . $Row[2];
$valhtmlname    = $Row[2];
// $valPathOurHis  = $mod_path_html . "/" . $Row[2];
// $valhtmlOurHis  = $Row[2];
// $valPathReward  = $mod_path_html . "/" . $Row[3];
// $valhtmlReward  = $Row[3];
// $valPathBod     = $mod_path_html . "/" . $Row[4];
// $valhtmlBod     = $Row[4];
$valcredate     = DateFormat($Row[5]);
$valcreby       = $Row[6];
$valstatus      = $Row[7];
$valmetatitle   = $Row[8];
$valdescription = $Row[9];
$valkeywords    = $Row[10];
$valTitle       = $Row[5];
$valPicName = $Row[6];
$valPic = $mod_path_pictures . "/" . $Row[6];
$valTypeC = $Row[13];
$valUrlC = $Row[14];
$valTarget = $Row[15];
$valPermission = getUserPermissionOnMenu($_SESSION[$valSiteManage . "core_session_groupid"], $_POST["menukeyid"]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />
    <link href="../css/theme.css" rel="stylesheet" />
    <title><?php echo $core_name_title; ?></title>
    <script language="JavaScript" type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
    <script language="JavaScript" type="text/javascript">
        function executeSubmit() {
            with(document.myForm) {

                // Validate Subject
                if (isBlank(inputSubject)) {
                    inputSubject.focus();
                    jQuery("#inputSubject").addClass("formInputContantTbAlertY");
                    return false;
                } else {
                    jQuery("#inputSubject").removeClass("formInputContantTbAlertY");
                }
            }
            updateContactNew('updateContant.php');
        }

        jQuery(document).ready(function() {

            jQuery('#myForm').keypress(function(e) {
                /* Start  Enter Check CKeditor 
                var focusManager = new CKEDITOR.focusManager( editDetail );
                var checkFocus =CKEDITOR.instances.editDetail.focusManager.hasFocus;*/
                var checkFocusTitle = jQuery("#inputComment").is(":focus");

                if (e.which == 13) {
                    //e.preventDefault();
                    if (!checkFocusTitle) {
                        //if(!checkFocus){
                        executeSubmit();
                        return false;
                        // }
                    }
                }
                /* End  Enter Check CKeditor */
            });
            $("#inputSubject").keyup(function() {
                let Str = replaceAll($(this).val(), '#', '');
                $(this).val(Str);
            });

        });
    </script>
</head>

<body>
    <form action="?" method="get" name="myForm" id="myForm">
        <input name="execute" type="hidden" id="execute" value="update" />
        <input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey']; ?>" />
        <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid']; ?>" />
        <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch']; ?>" />
        <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo $_REQUEST['module_pageshow']; ?>" />
        <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo $_REQUEST['module_pagesize']; ?>" />
        <input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo $_REQUEST['module_orderby']; ?>" />
        <input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputGh'] ?>" />
        <input name="valEditID" type="hidden" id="valEditID" value="<?php echo $_REQUEST['valEditID']; ?>" />
        <input name="valDelFile" type="hidden" id="valDelFile" value="" />
        <input name="valDelAlbum" type="hidden" id="valDelAlbum" value="" />
        <input name="inputHtml" type="hidden" id="inputHtml" value="" />
        <input name="inputHtmlDel" type="hidden" id="inputHtmlDel" value="<?php echo $valhtmlname ?>" />
        <input name="inputLt" type="hidden" id="inputLt" value="<?php echo $_REQUEST['inputLt']; ?>" />
        <input name="inputG3" type="hidden" id="inputG3" value="<?php echo $_REQUEST['inputG3'] ?>" />
        <div class="divRightNav">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td class="divRightNavTb" align="left" id="defTop">
                        <span class="fontContantTbNav">
                            <a href="<?php echo $valLinkNav1 ?>" target="_self"><?php echo $valNav1 ?></a>
                            <img src="../img/btn/nav.png" align="absmiddle" vspace="5" />
                            <a href="javascript:void(0)" onclick="btnBackPage('index.php')" target="_self"><?php echo getNameMenu($_REQUEST["menukeyid"]) ?></a>
                            <img src="../img/btn/nav.png" align="absmiddle" vspace="5" />
                            <?php echo $langMod["txt:titleedit"] ?>
                            <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] >= 2) { ?>
                                (<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"], $langTxt["lg:chi"]) ?>)
                            <?php } ?>
                        </span>
                    </td>
                    <td class="divRightNavTb" align="right"></td>
                </tr>
            </table>
        </div>
        <div class="divRightHead">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
                <tr>
                    <td height="77" align="left">
                        <span class="fontHeadRight">
                            <?php echo $langMod["txt:titleedit"] ?> <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] >= 2) { ?>
                                (<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"], $langTxt["lg:chi"]) ?>)
                            <?php } ?>
                        </span>
                    </td>
                    <td align="left">
                        <table border="0" cellspacing="0" cellpadding="0" align="right">
                            <tr>
                                <td align="right">
                                    <?php if ($valPermission == "RW") { ?>
                                        <div class="btnSave" title="<?php echo $langTxt["btn:save"] ?>" onclick="executeSubmit();"></div>
                                    <?php } ?>
                                    <div class="btnBack" title="<?php echo $langTxt["btn:back"] ?>" onclick="btnBackPage('index.php')"></div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div class="divRightMain">
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo $langMod["txt:subject"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo $langMod["txt:subjectDe"] ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:inpName"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <input name="inputSubject" id="inputSubject" type="text" class="formInputContantTb" value="<?php echo @$valSubject; ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:noteg"] ?></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <textarea name="inputComment" id="inputComment" cols="20" rows="5" class="formTextareaContantTb"><?php echo $valTitle; ?></textarea>
                    </td>
                </tr>
            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td colspan="7" align="right" valign="top" height="20"></td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="middle" class="formEndContantTb">
                        <a href="#defTop" title="<?php echo $langTxt["btn:gototop"]; ?>"><?php echo $langTxt["btn:gototop"]; ?> <img src="../img/btn/top.png" align="absmiddle" /></a>
                    </td>
                </tr>
            </table>
        </div>
    </form>
    <script type="text/javascript" src="../js/ajaxfileupload.js"></script>
    <script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
    <script type="text/javascript" language="javascript">
        /*################################# Upload Pic #######################*/
        function ajaxFileUpload() {
            var valuepicname = jQuery("input#picname").val();

            jQuery.blockUI({
                message: jQuery('#tallContent'),
                css: {
                    border: 'none',
                    padding: '35px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .9,
                    color: '#fff'
                }
            });


            jQuery.ajaxFileUpload({
                url: 'loadUpdatePic.php?myID=<?php echo $_POST["valEditID"] ?>&masterkey=<?php echo $_REQUEST['masterkey'] ?>&langt=<?php echo $_REQUEST['inputLt'] ?>&delpicname=' + valuepicname + '&menuid=<?php echo $_REQUEST['menukeyid'] ?>',
                secureuri: false,
                fileElementId: 'fileToUpload',
                dataType: 'json',
                success: function(data, status) {
                    if (typeof(data.error) != 'undefined') {

                        if (data.error != '') {
                            alert(data.error);

                        } else {
                            jQuery("#boxPicNew").show();
                            jQuery("#boxPicNew").html(data.msg);
                            setTimeout(jQuery.unblockUI, 200);
                        }
                    }
                },
                error: function(data, status, e) {
                    alert(e);
                }
            })
            return false;

        }

        /*############################# Upload File ####################################*/
        function ajaxFileUploadDoc() {
            var valuefilename = jQuery("input#inputFileName").val();
            jQuery.blockUI({
                message: jQuery('#tallContent'),
                css: {
                    border: 'none',
                    padding: '35px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .9,
                    color: '#fff'
                }
            });


            jQuery.ajaxFileUpload({
                url: 'loadUpdateFile.php?myID=<?php echo $_POST["valEditID"] ?>&masterkey=<?php echo $_REQUEST['masterkey'] ?>&langt=<?php echo $_REQUEST['inputLt'] ?>&nametodoc=' + valuefilename + '&menuid=<?php echo $_REQUEST['menukeyid'] ?>',
                secureuri: true,
                fileElementId: 'inputFileUpload',
                dataType: 'json',
                success: function(data, status) {
                    if (typeof(data.error) != 'undefined') {

                        if (data.error != '') {
                            alert(data.error);
                        } else {
                            jQuery("#boxFileNew").show();
                            jQuery("#boxFileNew").html(data.msg);
                            document.myForm.inputFileName.value = "";
                            setTimeout(jQuery.unblockUI, 200);
                        }

                    }
                },
                error: function(data, status, e) {
                    alert(e);
                }
            })

            return false;

        }
        /*################### Load FCK Editor ######################*/
        jQuery(document).ready(function() {
            // onLoadFCK();
        });
    </script>
    <?php include("../lib/disconnect.php"); ?>
</body>

</html>