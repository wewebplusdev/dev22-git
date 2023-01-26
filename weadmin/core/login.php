<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../core/incLang.php");

$inputUser = trim($_POST["inputUser"]);
$inputPass= trim($_POST["inputPass"]);
$inputUserMaster = changeQuot($inputUser);
$inputPassMaster= encodeStr($inputPass);

$total_fail = total_logs_fail();
if($total_fail >= $core_login_fail_time){
	$msg = "ความพยายามในการเข้าสู่ระบบที่ล้มเหลวมากเกินไป";
	$msg = "กรุณาเข้าสู่ระบบหลังจาก ".$core_login_fail_unlock." นาที";
?>
<script language="JavaScript"  type="text/javascript">
	jQuery("#loadAlertLogin").hide();
	jQuery("#loadAlertLoginRemaining").show();
	jQuery("#loadAlertLoginRemaining2").show();
	jQuery("#alertMsg").html('<?php echo $msg;?>');
	jQuery("#alertMsg2").html('<?php echo $msg2;?>');
	document.myFormLogin.inputUser.value='';
	document.myFormLogin.inputPass.value='';
</script>
<?php
}else{
		if($total_fail == 0){
			$ip =  get_real_ip();
			$sqlLogfail = "DELETE FROM ".$core_tb_login_log." WHERE ".$core_tb_login_log."_ip='".$ip."'";
			$query=wewebQueryDB($coreLanguageSQL,$sqlLogfail);
		}
		$sqlMaster = "SELECT ".$core_tb_staff."_id FROM ".$core_tb_staff." WHERE ".$core_tb_staff."_username='".encodeStr($inputUserMaster)."' AND ".$core_tb_staff."_password='".$inputPassMaster."'  AND ".$core_tb_staff."_status='Superadmin'    ";
		$queryMaster=wewebQueryDB($coreLanguageSQL,$sqlMaster);
		$recordMaster=wewebNumRowsDB($coreLanguageSQL,$queryMaster);

		if($recordMaster>=1) {

			$_SESSION[$valSiteManage."core_session_logout"]=1;
			$_SESSION[$valSiteManage."core_session_id"]=0;
			$_SESSION[$valSiteManage."core_session_name"]= "Private Member";
			$_SESSION[$valSiteManage."core_session_level"]="SuperAdmin";
			// $_SESSION[$valSiteManage."core_session_language"]="Thai";
			// $_SESSION[$valSiteManage."core_session_languageT"]="1";
			$_SESSION[$valSiteManage."core_session_language"]  = getSystemLang();
			$_SESSION[$valSiteManage."core_session_languageT"]	= getSystemLangType();
			$_SESSION[$valSiteManage."core_session_usrcar"]=0;
			?>
			<script language="JavaScript"  type="text/javascript">
				document.location.href = "core/index.php";
			</script>
			<?php
		}else{

			// ,
			// ".$core_tb_staff."_typeuser  ,
			// ".$core_tb_staff."_typeusermini ,
			// ".$core_tb_staff."_username

			
		$_SESSION[$valSiteManage."core_session_logout"]=1;
		$sql = "SELECT 
		".$core_tb_staff."_id,
		".$core_tb_staff."_password,
		".$core_tb_staff."_fnamethai,
		".$core_tb_staff."_lnamethai,
		".$core_tb_staff."_groupid,
		".$core_tb_staff."_status 
		FROM ".$core_tb_staff." WHERE ".$core_tb_staff."_username='".$inputUser."'  AND ".$core_tb_staff."_status !='Disable' ";
		$Query=wewebQueryDB($coreLanguageSQL,$sql);
		$RecordCount=wewebNumRowsDB($coreLanguageSQL,$Query);
			if($RecordCount>=1) {
				$Row=wewebFetchArrayDB($coreLanguageSQL,$Query);
				$myPassword=decodeStr($Row[1]);
				if($myPassword==$inputPass) {
				
					$_SESSION[$valSiteManage."core_session_id"]		= $Row[0];
					$_SESSION[$valSiteManage."core_session_name"]		= rechangeQuot($Row[2])." ".rechangeQuot($Row[3]);
					$_SESSION[$valSiteManage."core_session_groupid"]	= $Row[4];
					$_SESSION[$valSiteManage."core_session_language"]  = getSystemLang();
					$_SESSION[$valSiteManage."core_session_languageT"]	= getSystemLangType();
					// $_SESSION[$valSiteManage."core_session_typeproblem"]	= $Row[5];
					// $_SESSION[$valSiteManage."core_session_typeusermini"]	= $Row[6];
					// if ($_SESSION[$valSiteManage."core_session_typeusermini"] != 0) {
					// 	$_SESSION[$valSiteManage."core_session_password"] = $myPassword;
					// 	$_SESSION[$valSiteManage."core_session_username"] = $Row[7];
					// }
					
					$sql_lv = "SELECT ".$core_tb_group."_lv FROM ".$core_tb_group." WHERE ".$core_tb_group."_id='".$Row[4]."'";
					$Query_lv=wewebQueryDB($coreLanguageSQL,$sql_lv);
					$Row_lv=wewebFetchArrayDB($coreLanguageSQL,$Query_lv);
					$_SESSION[$valSiteManage."core_session_level"]		= $Row_lv[0];
				
					###################### Start insert logs ##################
					logs_access('1','Login');
					
					if($coreLanguageSQL=="mssql"){
					$sqlLog = "DELETE FROM ".$core_tb_log." WHERE ".$core_tb_log."_time < DATEADD(mm, -3, GETDATE())";
					}else{
					$sqlLog = "DELETE FROM ".$core_tb_log." WHERE ".$core_tb_log."_time < DATE_SUB(".wewebNow($coreLanguageSQL).", INTERVAL  3 MONTH)";
					}
					
					
					$queryLog=wewebQueryDB($coreLanguageSQL,$sqlLog);
						
					$days = 90;
					$valDel =3600*($days*24);
					$dir = "../../logs/login/";
					$nofiles =0;
					
					if($handle = @opendir($dir)) {
						while (false !== ($file =@readdir($handle))) { 
							$valFileDel=$dir.$file;
								if( is_file($valFileDel)){
									$filelastmodified = @filemtime($valFileDel);
										if((time()-$filelastmodified) > $valDel ){
											unlink($valFileDel);
										$nofiles++;
										}
									}
						}
						closedir($handle); 
					}
					
					$dir = "../../logs/access-user/";
					if($handle = @opendir($dir)) {
						while (false !== ($file =@readdir($handle))) { 
							$valFileDel=$dir.$file;
								if( is_file($valFileDel)){
									$filelastmodified = @filemtime($valFileDel);
										if((time()-$filelastmodified) > $valDel ){
											unlink($valFileDel);
										$nofiles++;
										}
									}
						}
						closedir($handle); 
					}
					
					$dir = "../../logs/access-permission/";
					if($handle = @opendir($dir)) {
						while (false !== ($file =@readdir($handle))) { 
							$valFileDel=$dir.$file;
								if( is_file($valFileDel)){
									$filelastmodified = @filemtime($valFileDel);
										if((time()-$filelastmodified) > $valDel ){
											unlink($valFileDel);
										$nofiles++;
										}
									}
						}
						closedir($handle); 
					}
					
					
					###################### End logs ##################
					
					$sql = "UPDATE ".$core_tb_staff." SET ".$core_tb_staff."_logdate=".wewebNow($coreLanguageSQL)." WHERE ".$core_tb_staff."_id='".$_SESSION[$valSiteManage."core_session_id"]."'";
					$Query=wewebQueryDB($coreLanguageSQL,$sql);

					
					
					
					if($inputUrl!=""){
						$txtLinkUrlTo= "../".$inputUrl;
					}else{
						$txtLinkUrlTo="core/index.php";
					}
			?>
			<script language="JavaScript"  type="text/javascript">
				document.location.href = "<?php echo $txtLinkUrlTo?>";
			</script>
			<?php
						
				} else {
					logs_access('1','Login Fail');
					login_logs_fail();
					$total_fail++;
					$rem_attm=$core_login_fail_time-$total_fail;
					$msg = 'โปรดป้อนรายละเอียดการเข้าสู่ระบบที่ถูกต้อง เหลืออีก <span style="color:red">'.$rem_attm.'</span> ครั้ง';
			?>
			<script language="JavaScript"  type="text/javascript">
				jQuery("#loadAlertLogin").show();
				jQuery("#loadAlertLoginRemaining").show();
				jQuery("#loadAlertLoginRemaining2").hide();
				jQuery("#alertMsg").html('<?php echo $msg;?>');
				document.myFormLogin.inputUser.value='';
				document.myFormLogin.inputPass.value='';
			</script>
			<?php
				}
			} else {
				logs_access('1','Login Fail');
				login_logs_fail();
				$total_fail++;
				$rem_attm=$core_login_fail_time-$total_fail;
				$msg = 'โปรดป้อนรายละเอียดการเข้าสู่ระบบที่ถูกต้อง เหลืออีก <span style="color:red">'.$rem_attm.'</span> ครั้ง';
			?>
			<script language="JavaScript"  type="text/javascript">
				jQuery("#loadAlertLogin").show();
				jQuery("#loadAlertLoginRemaining").show();
				jQuery("#loadAlertLoginRemaining2").hide();
				jQuery("#alertMsg").html('<?php echo $msg;?>');
				document.myFormLogin.inputUser.value='';
				document.myFormLogin.inputPass.value='';
			</script>
			<?php
			}
			
		}
}
include("../lib/disconnect.php");
?>
