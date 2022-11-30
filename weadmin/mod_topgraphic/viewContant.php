<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("../core/incLang.php");
include("incModLang.php");
include("config.php");

$valClassNav = 2;
$valNav1 = $langTxt["nav:home2"];
$valLinkNav1 = "../core/index.php";


if ($_REQUEST['inputLt'] == "Thai") {

  $sql = "SELECT   ";
  $sql .= "   
        " . $mod_tb_root . "_id , 
        " . $mod_tb_root . "_credate , 
        " . $mod_tb_root . "_crebyid, 
        " . $mod_tb_root . "_status,    
        " . $mod_tb_root . "_sdate ,    
        " . $mod_tb_root . "_edate , 
        " . $mod_tb_root . "_lastdate, 
        " . $mod_tb_root . "_subject , 
        " . $mod_tb_root . "_lastbyid,    
        " . $mod_tb_root . "_target,    
        " . $mod_tb_root . "_pic , 
        " . $mod_tb_root . "_url,
        " . $mod_tb_root . "_title,    
        " . $mod_tb_root . "_desc as description,    
        " . $mod_tb_root . "_typevdo as typevdo , 
        " . $mod_tb_root . "_filevdo as filevdo , 
        " . $mod_tb_root . "_urlvdo as urlvdo ,
        " . $mod_tb_root . "_htmlfilename as htmlfilename
        ";
} elseif ($_REQUEST['inputLt'] == "Eng") {

  $sql = "SELECT   ";
  $sql .= "   
          " . $mod_tb_root . "_id , 
          " . $mod_tb_root . "_credate , 
          " . $mod_tb_root . "_crebyid, 
          " . $mod_tb_root . "_status,    
          " . $mod_tb_root . "_sdate      ,    
          " . $mod_tb_root . "_edate    , 
          " . $mod_tb_root . "_lastdate, 
          " . $mod_tb_root . "_subjecten , 
          " . $mod_tb_root . "_lastbyid,    
          " . $mod_tb_root . "_target,    
          " . $mod_tb_root . "_picen , 
          " . $mod_tb_root . "_urlen, 
          " . $mod_tb_root . "_titleen,   
          " . $mod_tb_root . "_descen as description,   
          " . $mod_tb_root . "_typevdoen as typevdo, 
          " . $mod_tb_root . "_filevdoen as filevdo, 
          " . $mod_tb_root . "_urlvdoen as urlvdo,
          " . $mod_tb_root . "_htmlfilenameen as htmlfilename
          ";
} else {

  $sql = "SELECT   ";
  $sql .= "   
            " . $mod_tb_root . "_id , 
            " . $mod_tb_root . "_credate , 
            " . $mod_tb_root . "_crebyid, 
            " . $mod_tb_root . "_status,    
            " . $mod_tb_root . "_sdate      ,    
            " . $mod_tb_root . "_edate    , 
            " . $mod_tb_root . "_lastdate, 
            " . $mod_tb_root . "_subjectcn , 
            " . $mod_tb_root . "_lastbyid,    
            " . $mod_tb_root . "_target,    
            " . $mod_tb_root . "_piccn , 
            " . $mod_tb_root . "_urlcn,
            " . $mod_tb_root . "_titlecn,    
            " . $mod_tb_root . "_desccn as description,    
            " . $mod_tb_root . "_typevdocn as typevdo, 
            " . $mod_tb_root . "_filevdocn as filevdo, 
            " . $mod_tb_root . "_urlvdocn as urlvdo,
            " . $mod_tb_root . "_htmlfilenamecn as htmlfilename
            ";
}


$sql .= " ,
      " . $mod_tb_root . "_langth as langth,
      " . $mod_tb_root . "_langen as langen,
      " . $mod_tb_root . "_langcn as langcn

      FROM " . $mod_tb_root . " WHERE " . $mod_tb_root . "_masterkey='" . $_REQUEST["masterkey"] . "'  AND  " . $mod_tb_root . "_id='" . $_REQUEST['valEditID'] . "' ";
// print_pre($sql);
$Query = wewebQueryDB($coreLanguageSQL, $sql);

//  print_pre($sql);
$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
$valID = $Row[0];
$valCredate = DateFormat($Row[1]);
$valCreby = $Row[2];
$valStatus = $Row[3];
if ($valStatus == "Enable") {
  $valStatusClass =  "fontContantTbEnable";
} else {
  $valStatusClass =  "fontContantTbDisable";
}

if ($Row[4] == "0000-00-00 00:00:00" || $Row[4] == "") {
  $valSdate = "-";
} else {
  $valSdate = DateFormatReal($Row[4]);
}
if ($Row[5] == "0000-00-00 00:00:00" || $Row[5] == "") {
  $valEdate = "-";
} else {
  $valEdate = DateFormatReal($Row[5]);
}



$valLastdate = DateFormat($Row[6]);
$valSubject = rechangeQuot($Row[7]);
$valLastby = $Row[8];

$valTarget = $Row[9];
$valPicName = $Row[10];
$valPic = $mod_path_real . "/" . $Row[10];
// print_pre($valPic);
$valUrl = rechangeQuot($Row[11]);
$valTitle = rechangeQuot($Row[12]);
$valDesc = rechangeQuot($Row['description']);

$valType = $Row['typevdo'];
// print_pre($valType);
$valFilevdo = $Row['filevdo'];
$valPathvdo = $mod_path_vdo . "/" . $Row['filevdo'];
$valUrlVideo = rechangeQuot($Row['urlvdo']);
$valHtml = $mod_path_html . "/" . $Row['htmlfilename'];
$valLang[0] = $Row['langth'];
$valLang[1] = $Row['langen'];
$valLang[2] = $Row['langcn'];

$valPicName2 = $Row['pic2'];
$valPic2 = $mod_path_real . "/" . $Row['pic2'];


$valPermission = getUserPermissionOnMenu($_SESSION[$valSiteManage . "core_session_groupid"], $_REQUEST["menukeyid"]);
logs_access('3', 'View');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="googlebot" content="noindex, nofollow" />
  <link href="../css/theme.css" rel="stylesheet" />

  <title><?php echo $core_name_title ?></title>
  <script language="JavaScript" type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
</head>

<body>
  <form action="?" method="get" name="myForm" id="myForm">
    <input name="execute" type="hidden" id="execute" value="update" />
    <input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
    <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo $_REQUEST['module_pageshow'] ?>" />
    <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo $_REQUEST['module_pagesize'] ?>" />
    <input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo $_REQUEST['module_orderby'] ?>" />
    <input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputGh'] ?>" />
    <input name="valEditID" type="hidden" id="valEditID" value="<?php echo $_REQUEST['valEditID'] ?>" />
    <input name="inputLt" type="hidden" id="inputLt" value="<?php echo $_REQUEST['inputLt'] ?>" />
    <?php if ($_REQUEST['viewID'] <= 0) { ?>
      <div class="divRightNav">
        <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a href="<?php echo $valLinkNav1 ?>" target="_self"><?php echo $valNav1 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)" onclick="btnBackPage('index.php')" target="_self"><?php echo getNameMenu($_REQUEST["menukeyid"]) ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo $langMod["txt:titleview"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"], $langTxt["lg:chi"]) ?>)<?php } ?></span></td>
            <td class="divRightNavTb" align="right">



            </td>
          </tr>
        </table>
      </div>
    <?php } ?>
    <div class="divRightHead">
      <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
        <tr>
          <td height="77" align="left"><span class="fontHeadRight"><?php echo $langMod["txt:titleview"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"], $langTxt["lg:chi"]) ?>)<?php } ?></span></td>
          <td align="left">
            <table border="0" cellspacing="0" cellpadding="0" align="right">
              <tr>
                <td align="right">
                  <?php if ($_REQUEST['viewID'] <= 0) { ?>
                    <?php if ($valPermission == "RW") { ?>
                      <div class="btnEditView" title="<?php echo $langTxt["btn:edit"] ?>" onclick="
                                                        document.myFormHome.valEditID.value=<?php echo $valID ?>;  
                                                        editContactNew('../<?php echo $mod_fd_root ?>/editContant.php')"></div>
                    <?php } ?>
                    <div class="btnBack" title="<?php echo $langTxt["btn:back"] ?>" onclick="btnBackPage('index.php')"></div>
                  <?php } ?>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </div>
    <div class="divRightMain">
      <br />
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo $langMod["txt:subject"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langMod["txt:subjectDe"] ?></span>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["set:lang:web"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <?php
            foreach ($modTxtSetLang as $key => $value) {
            ?>
              <div class="formDivView">
                <?php
                if ($valLang[$key] == 1) {
                  echo '- ' . $value;
                }
                ?>
              </div>
            <?php
            }
            ?>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:inpName"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valSubject ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:title"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valTitle ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:linkvdo"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valUrl ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:typevdo"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $modTxtTarget[$valTarget] ?></div>
          </td>
        </tr>
        <!-- <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:desc"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valDesc ?></div>
          </td>
        </tr> -->
      </table>
      <br />
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo $langMod["txt:pic"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langMod["txt:picDe"] ?></span>
          </td>
        </tr>
        <!-- <tr >
        <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><span class="fontContantAlert"></span></td>
        <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
          <div class="formDivView">
            <?php if (is_file($valPic)) { ?>
            <a href="<?php echo $valPic ?>" target="_blank"><img style="float:left;border:#c8c7cc solid 1px;max-width:650px;" src="<?php echo $valPic ?>"/></a>

            <?php } else { ?>

              <img src='<?php echo "../img/btn/nopic.jpg" ?>' style="float:left;border:#c8c7cc solid 1px;max-width:300;" />

            <?php } ?>
          </div>
        </td>
      </tr> -->
        <!-- <tr style="display: show;">
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:typevdo"] ?>:</td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php if ($valType == "url") {
                echo $langMod["tit:linkvdo"] . ' Youtube';
              } elseif ($valType == "file") {
                echo $langMod["tit:uploadvdo"];
              } elseif ($valType == "pic") {
                echo  $langMod["txt:pic"];
              } ?>
            </div>
          </td>
        </tr> -->

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php
              if ($valType == "file") {
                if ($valFilevdo != "") {
                  $filename = $valFilevdo;
                  $arrstrfile = explode(".", $valFilevdo);
                  $filetype = strtolower($arrstrfile[sizeof($arrstrfile) - 1]);
              ?>
                  <!-- <div id="areaPlayer" style="z-index:-1999; "></div> -->
                  <video width="560" height="315" controls>
                    <source src="<?php echo $mod_path_vdo . "/" . $filename ?>" type="video/mp4">
                  </video>
                <?php } else { ?>
                  -
                <?php
                }
              } elseif ($valType == "url") {
                if ($valUrlVideo != "") {

                  $myUrlArray = explode("v=", $valUrlVideo);
                  //  print_pre($myUrlArray);
                  $myUrlCut = $myUrlArray[1];
                  $myUrlCutArray = explode("&", $myUrlCut);
                  $myUrlCutAnd = $myUrlCutArray[0];
                ?>
                  <iframe width="560" height="315" src="//www.youtube-nocookie.com/embed/<?php echo  $myUrlCutAnd ?>" frameborder="0" allowfullscreen style="z-index:-1999; "></iframe>
                <?php } else { ?>
                  -
                <?php }
              } elseif ($valType == "pic") { ?>
                <?php if (is_file($valPic)) { ?>
                  <a href="<?php echo $valPic ?>" target="_blank"><img style="float:left;border:#c8c7cc solid 1px;max-width:650px;" src="<?php echo $valPic ?>" /></a>

                <?php } else { ?>

                  <img src='<?php echo "../img/btn/nopic.jpg" ?>' style="float:left;border:#c8c7cc solid 1px;max-width:300;" />

                <?php } ?>
              <?php } ?>

            </div>
          </td>
        </tr>

      </table>
      <br />
      <?php if(in_array($_REQUEST['masterkey'], $arr_masterkey_ck)){ ?>
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
          <tr>
              <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                  <span class="formFontSubjectTxt"><?php echo $langMod["txt:title"] ?></span><br />
                  <span class="formFontTileTxt"><?php echo $langMod["txt:titleDe"] ?></span>
              </td>
          </tr>
          <tr>
              <td colspan="7" align="left" valign="top" class="formTileTxt">
                  <div class="viewEditorTileTxt">
                      <?php
                      $fd = @fopen($valHtml, "r");
                      $contents = @fread($fd, filesize($valHtml));
                      @fclose($fd);
                      echo txtReplaceHTML($contents);
                      ?>
                  </div>
              </td>
          </tr>
      </table>
      <br />
      <?php } ?>
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo $langMod["txt:seo"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langMod["txt:seoDe"] ?></span>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:sdate"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valSdate ?> <?php echo $valTimeSdate ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:edate"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valEdate ?> <?php echo $valTimeEdate ?></div>
          </td>
        </tr>


      </table>
      <br />
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo $langTxt["us:titleinfo"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langTxt["us:titleinfoDe"] ?></span>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["us:credate"] ?>:</td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valCredate ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["us:creby"] ?>:</td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php
              if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
                echo getUserThai($valCreby);
              } else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
                echo getUserEng($valCreby);
              }


              ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["us:lastdate"] ?>:</td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valLastdate ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["us:creby"] ?>:</td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php
              if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
                echo getUserThai($valLastby);
              } else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
                echo getUserEng($valLastby);
              }


              ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["mg:status"] ?>:</td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">

              <?php if ($valStatus == "Enable") { ?>
                <span class="<?php echo $valStatusClass ?>"><?php echo $valStatus ?></span>
              <?php } else { ?>
                <span class="<?php echo $valStatusClass ?>"><?php echo $valStatus ?></span>
              <?php } ?>
            </div>
          </td>
        </tr>
      </table>
      <br />
      <?php if ($_REQUEST['viewID'] <= 0) { ?>
        <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">

          <tr>
            <td colspan="7" align="right" valign="top" height="20"></td>
          </tr>
          <tr>
            <td colspan="7" align="right" valign="middle" class="formEndContantTb"><a href="#defTop" title="<?php echo $langTxt["btn:gototop"] ?>"><?php echo $langTxt["btn:gototop"] ?> <img src="../img/btn/top.png" align="absmiddle" /></a></td>
          </tr>
        <?php } ?>
        </table>
    </div>
  </form>
  <?php include("../lib/disconnect.php"); ?>

  <script type='text/javascript' src='../<?php echo  $mod_fd_root ?>/swfobject.js'></script>
  <script type='text/javascript' src='../<?php echo  $mod_fd_root ?>/silverlight.js'></script>
  <script type='text/javascript' src='../<?php echo  $mod_fd_root ?>/wmvplayer.js'></script>
  <script type='text/javascript'>
    var filename = "<?php echo  $filename ?>";
    var filetype = "<?php echo  $filetype ?>";
    var cnt = document.getElementById("areaPlayer");
    if (filetype == "flv") {
      var s1 = new SWFObject('../<?php echo  $mod_fd_root ?>/player.swf', 'player', '560', '315', '9');
      s1.addParam('allowfullscreen', 'true');
      s1.addParam('wmode', 'transparent');
      s1.addParam('allowscriptaccess', 'always');
      s1.addParam('flashvars', 'file=<?php echo  $mod_path_vdo ?>/' + filename);
      s1.write('areaPlayer');
    } else /* if(filetype=="wmv")*/ {

      var src = '../<?php echo  $mod_fd_root ?>/wmvplayer.xaml';
      var cfg = "";
      var ply;
      cfg = {
        file: '<?php echo  $mod_path_vdo ?>/' + filename,
        image: '',
        height: '315',
        width: '560',
        autostart: "false",
        windowless: 'true',
        showstop: 'true'
      };
      ply = new jeroenwijering.Player(cnt, src, cfg);
    }
  </script>


</body>

</html>