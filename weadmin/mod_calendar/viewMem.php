<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("../core/incLang.php");
include("incModLang.php");
include("config.php");

$valClassNav=2;
$valNav1=$langTxt["nav:home2"];
$valLinkNav1="../core/index.php";


				$sql = "SELECT   ";
				$sql .= "   
				".$mod_tb_apply."_id ,
				".$mod_tb_apply."_credate ,
				".$mod_tb_apply."_status,
				".$mod_tb_apply."_officeth,
				".$mod_tb_apply."_name,
				".$mod_tb_apply."_ip,
				".$mod_tb_apply."_gid,
				".$mod_tb_apply."_ordernum,
				".$mod_tb_apply."_address,
				".$mod_tb_apply."_tel,
				".$mod_tb_apply."_email,
				".$mod_tb_apply."_food,
				".$mod_tb_apply."_hotel,
				".$mod_tb_apply."_checkin,
				".$mod_tb_apply."_checkout,
				".$mod_tb_apply."_room,
				".$mod_tb_apply."_live,
				".$mod_tb_apply."_butdy,
				".$mod_tb_apply."_count ,
				".$mod_tb_apply."_note 
				 ";
		  	$sql .= " FROM ".$mod_tb_apply." WHERE ".$mod_tb_apply."_masterkey='".$_REQUEST["masterkey"]."'  AND  ".$mod_tb_apply."_id='".$_REQUEST['valEditID']."' ";
			$Query=wewebQueryDB($coreLanguageSQL,$sql);
			$Row=wewebFetchArrayDB($coreLanguageSQL,$Query);
			$valID=$Row[0];
			$valCredate=DateFormat($Row[1]);
			$valStatus=$Row[2];
			if($valStatus=="1"){
				$valStatusClass=	"fontContantTbHomeSt";
			}else if($valStatus=="2"){
				$valStatusClass=	"fontContantTbEnable";
			}else if($valStatus=="3"){
				$valStatusClass=	"fontContantTbDisable";
			}
			
			$valofficeth=rechangeQuot($Row[3]);
			$valName=rechangeQuot($Row[4]);
			$valIp=rechangeQuot($Row[5]);
			$valGid=rechangeQuot($Row[6]);
			$valOrderNumber=rechangeQuot($Row[7]);
			$valAddress=rechangeQuot($Row[8]);
			$valMobile=rechangeQuot($Row[9]);
			$valEmail=rechangeQuot($Row[10]);
			$valFood=$modTxtFood[$Row[11]];
			$valHotel=rechangeQuot($Row[12]);
			$valHotelShow=$modTxtHotel[$valHotel];
			$valCheckin=DateFormatReal($Row[13]);
			$valCheckout=DateFormatReal($Row[14]);
			$valRoom=rechangeQuot($Row[15]);
			$valRoomShow=$modTxtRoomType[$valRoom];
			$valLive=rechangeQuot($Row[16]);
			$valLiveShow=$modTxtLive[$valLive];
			$valButdy=rechangeQuot($Row[17]);
			$valCountSn=number_format($Row[18]);
			$valNote=rechangeQuot($Row[19]);

		 	$valPermission= getUserPermissionOnMenu($_SESSION[$valSiteManage."core_session_groupid"],$_REQUEST["menukeyid"]);
			
			logs_access('3','View');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">
<link href="../css/theme.css" rel="stylesheet"/>

<title><?php echo $core_name_title?></title>
<script language="JavaScript"  type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
</head>

<body>
<form action="?" method="get" name="myForm" id="myForm">
    <input name="execute" type="hidden" id="execute" value="update" />
    <input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey']?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid']?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch']?>" />
    <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo $_REQUEST['module_pageshow']?>" />
    <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo $_REQUEST['module_pagesize']?>" />
    <input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo $_REQUEST['module_orderby']?>" />
    <input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputGh']?>" />
    <input name="valEditID" type="hidden" id="valEditID" value="<?php echo $_REQUEST['valEditID']?>" />
    <input name="inputLt" type="hidden" id="inputLt" value="<?php echo $_REQUEST['inputLt']?>" />
    <?php if($_REQUEST['viewID']<=0){ ?>
					<div class="divRightNav">
                        <table width="96%" border="0" cellspacing="0" cellpadding="0"  align="center" >
                        <tr>
                        <td  class="divRightNavTb" align="left"  id="defTop" ><span class="fontContantTbNav"><a href="<?php echo $valLinkNav1?>" target="_self"><?php echo $valNav1?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a  href="javascript:void(0)"  onclick="btnBackPage('index.php')" target="_self"><?php echo getNameMenu($_REQUEST["menukeyid"])?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo $langMod["txt:titleview"]?></span></td>
                        <td  class="divRightNavTb" align="right">
                        

                        
                        </td>
                        </tr>
                        </table>
					</div>
                    <?php } ?>
                            <div class="divRightHead">
                                <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center" >
                                  <tr>
                                    <td height="77" align="left"><span class="fontHeadRight"><?php echo $langMod["txt:titleview"]?></span></td>
                                    <td align="left">
                                            <table  border="0" cellspacing="0" cellpadding="0" align="right">
                                                <tr>
                                                    <td align="right">
													<?php if($_REQUEST['viewID']<=0){ ?>
                                                
                                                      <div  class="btnBack" title="<?php echo $langTxt["btn:back"]?>" onclick="btnBackPage('mem.php')"></div>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            </table>
                                    </td>
                                  </tr>
                                </table>
                            </div>
                             <div class="divRightMain" >
<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr >
    <td colspan="7" align="left"  valign="middle" class="formTileTxt">
    <span class="formFontSubjectTxt"><?php echo $langMod["txt:regis4"]?></span><br/>
    <span class="formFontTileTxt"><?php echo $langMod["txt:regis4De"]?></span>    </td>
    </tr>

     <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["inp:order"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valOrderNumber?></div></td>
  </tr>
     <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:select"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView">
     <?php 
	$sql_group = "SELECT ";
			if($_REQUEST['inputLt']=="Thai"){
				$sql_group .= "  ".$mod_tb_root."_id,".$mod_tb_root."_subject";
			}else if($_REQUEST['inputLt']=="Eng"){
				$sql_group .= "  ".$mod_tb_root."_id,".$mod_tb_root."_subjecten";
			}else{
				$sql_group .= " ".$mod_tb_root."_id,".$mod_tb_root."_subjectcn ";
			}
			 
			$sql_group .= "  FROM ".$mod_tb_root." WHERE  ".$mod_tb_root."_id='".$valGid."'  ORDER BY ".$mod_tb_root."_order DESC ";
		$query_group=wewebQueryDB($coreLanguageSQL,$sql_group);
		$row_group=wewebFetchArrayDB($coreLanguageSQL,$query_group);
		$row_groupid=$row_group[0];
	echo 	$row_groupname=$row_group[1];
		?>
    </div></td>
  </tr>
     <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["inp:officeth"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valofficeth?></div></td>
  </tr>
  
     <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:name"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valName?></div></td>
  </tr>   <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:address"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valAddress?></div></td>
  </tr>  
 

      <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:mobile"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valMobile?></div></td>
  </tr>
     <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:email"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valEmail?></div></td>
  </tr>
     <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:food"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valFood?></div></td>
  </tr>
  <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["tit:noteg"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valNote?></div></td>
  </tr>  
  <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:count"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valCountSn?></div></td>
  </tr>


    <tr >
    <td colspan="7" align="left"  valign="middle" class="formTileTxt">
    <span class="formFontSubjectTxt"><?php echo $langMod["txt:regis2"]?></span><br/>
    <span class="formFontTileTxt"><?php echo $langMod["txt:regis2De"]?></span>    </td>
    </tr>
       <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >
	<?php echo $langMod["ep:hotel"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valHotelShow?></div></td>
  </tr>
  <?php if($valHotel==1){ ?>
     <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:Checkin"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valCheckin?></div></td>
  </tr>
     <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:Checkout"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valCheckout?></div></td>
  </tr>
     <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:roomType"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valRoomShow?></div></td>
  </tr>
  <?php 
  if($valRoom==2){
  ?>
     <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:Live"]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valLiveShow?>
    <?php if($valLive==2){ ?><?php echo $valButdy?><?php } ?></div>
    </td>
  </tr>
  <?php } ?>
  <?php } ?>

<tr >
    <td colspan="7" align="left"  valign="middle" class="formTileTxt">
    <span class="formFontSubjectTxt"><?php echo $langTxt["us:titleinfo"]?></span><br/>
    <span class="formFontTileTxt"><?php echo $langTxt["us:titleinfoDe"]?></span>     </td>
    </tr>
  <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:regisdate"]?>:</td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
     <div class="formDivView"><?php echo $valCredate?></div>         </td>
  </tr>
   <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >IP:</td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
     <div class="formDivView"><?php echo $valIp?></div>         </td>
  </tr>
  
    <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langTxt["mg:status"]?>:</td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
     <div class="formDivView">
     
            
                   <span class="<?php echo $valStatusClass?>"><?php echo $modTxtStatusSn[$valStatus]?></span>
              
     </div>         </td>
  </tr>
      <?php if($_REQUEST['viewID']<=0){ ?>

   <tr >
      <td colspan="7" align="right"  valign="top" height="20"></td>
      </tr>
    <tr >
    <td colspan="7" align="right"  valign="middle" class="formEndContantTb"><a href="#defTop" title="<?php echo $langTxt["btn:gototop"]?>"><?php echo $langTxt["btn:gototop"]?> <img src="../img/btn/top.png"  align="absmiddle"/></a></td>
    </tr>
    <?php } ?>
  </table>
  </div>
</form>   
<?php include("../lib/disconnect.php");?>
<link rel="stylesheet" type="text/css" href="../js/fancybox/jquery.fancybox.css" media="screen" />
<script language="JavaScript"  type="text/javascript" src="../js/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript">
	jQuery(function() {
			jQuery('a[rel=viewAlbum]').fancybox({
			'padding'			: 0,
			'transitionIn': 'fade',
			'transitionOut': 'fade',
			'autoSize'   : false,
			});
	});
</script>
<script type='text/javascript' src='swfobject.js'></script>
<script type='text/javascript' src='silverlight.js'></script> 
<script type='text/javascript' src='wmvplayer.js'></script>  
<script type='text/javascript'> 
	var filename = "<?php echo $filename?>";
	var filetype = "<?php echo $filetype?>";
	var cnt = document.getElementById("areaPlayer");
	if(filetype=="flv"){
		var s1 = new SWFObject('player.swf','player','560','315','9'); 
		s1.addParam('allowfullscreen','true'); 
		s1.addParam('wmode','transparent'); 
		s1.addParam('allowscriptaccess','always'); 
		s1.addParam('flashvars','file=<?php echo $mod_path_vdo?>/'+filename); 
		s1.write('areaPlayer');
	}else/* if(filetype=="wmv")*/{
		
		var src = 'wmvplayer.xaml';
		var cfg = "";
		var ply;
			 cfg = {
				file:'<?php echo $mod_path_vdo?>/'+filename,
				image:'',
				height:'315',
				width:'560',
				autostart:"false",
				windowless:'true',
				showstop:'true'
			};
			ply = new jeroenwijering.Player(cnt,src,cfg);
	}
</script>


</body>
</html>
