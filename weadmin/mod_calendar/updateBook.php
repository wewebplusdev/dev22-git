<?php
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
$masterkey="sm";
include("config.php");
$aID=$_POST["bID"];
$keyPage = "อัพเดทข้อมูลการลงทะเบียนสัมมนาหมายเลข ";

		/*############## Start Update Status #################*/
		$update = array();
		$update[]=$mod_tb_apply."_status  	='".$_POST['valueID']."'";
		
		$sql="UPDATE ".$mod_tb_apply." SET ".implode(",",$update)." WHERE ".$mod_tb_apply."_id='".$_POST["bID"]."'  ";
		$Query=wewebQueryDB($coreLanguageSQL,$sql);	
		/*############## End Update Status #################*/
		
		if($_POST['valueID']>=2){

		/*############## Start Apply Informaion #################*/
		$sqlApply = "SELECT 
		".$mod_tb_apply."_id,
		".$mod_tb_apply."_officeth ,
		".$mod_tb_apply."_name ,
		".$mod_tb_apply."_address ,
		".$mod_tb_apply."_tel ,
		".$mod_tb_apply."_email ,
		".$mod_tb_apply."_count ,
		".$mod_tb_apply."_gid ,
		".$mod_tb_apply."_status ,
		".$mod_tb_apply."_ordernum
		FROM ".$mod_tb_apply." ";
		$sqlApply .= "WHERE ".$mod_tb_apply."_masterkey='".$masterkey."' AND ".$mod_tb_apply."_id='".$aID."'  ";
		$queryApply=wewebQueryDB($coreLanguageSQL,$sqlApply);
		$countApplys=wewebNumRowsDB($coreLanguageSQL,$queryApply);
		$rowApply=wewebFetchArrayDB($coreLanguageSQL,$queryApply);
			$valApplyID=$row_cms[0];
			$valApplyOfficeth=rechangeQuot($rowApply[1]);
			$valApplyName=rechangeQuot($rowApply[2]);
			$valApplyAddress=rechangeQuot($rowApply[3]);
			$valApplyTel=rechangeQuot($rowApply[4]);
			$valApplyEmail=rechangeQuot($rowApply[5]);
			$valApplyCount=rechangeQuot($rowApply[6]);
			$d=rechangeQuot($rowApply[7]);
			$valApplyStatus=rechangeQuot($rowApply[8]);
			$valOrderNumber=rechangeQuot($rowApply[9]);
		/*############## End Apply Informaion #################*/

		/*############## Start Seminar Informaion #################*/
			$sql_cms ="SELECT 
			".$mod_tb_root."_id,
			".$mod_tb_root."_subject ,
			".$mod_tb_root."_masterkey ,
			".$mod_tb_root."_title  ,
			".$mod_tb_root."_credate   , 
			".$mod_tb_root."_pic , 
			".$mod_tb_root."_htmlfilename , 
			".$mod_tb_root."_view , 
			".$mod_tb_root."_description , 
			".$mod_tb_root."_keywords , 
			".$mod_tb_root."_metatitle, 
			".$mod_tb_root."_type , 
			".$mod_tb_root."_filevdo , 
			".$mod_tb_root."_url 	,
			".$mod_tb_root."_typeSal , 
			".$mod_tb_root."_typeDateTo, 
			".$mod_tb_root."_typeTimeTo, 
			".$mod_tb_root."_fromHH, 
			".$mod_tb_root."_quantity, 
			".$mod_tb_root."_fromMM, 
			".$mod_tb_root."_toHH, 
			".$mod_tb_root."_toMM, 
			".$mod_tb_root."_price, 
			".$mod_tb_root."_sale, 
			".$mod_tb_root."_eat, 
			".$mod_tb_root."_walk, 
			".$mod_tb_root."_address  ,    
			".$mod_tb_root."_sdate  	 	 ,    
			".$mod_tb_root."_edate  ,    
			".$mod_tb_root."_map 	 , 
			".$mod_tb_root."_showicon,
			".$mod_tb_root."_gid
			  FROM ".$mod_tb_root." ";
			$sql_cms.=" WHERE       ".$mod_tb_root."_masterkey='".$masterkey."' ";
			$sql_cms.=" AND ".$mod_tb_root."_id='".$d."' ";
			$query_cms=wewebQueryDB($coreLanguageSQL,$sql_cms);
			$count_row_cms=wewebNumRowsDB($coreLanguageSQL,$query_cms);
			$row_cms=wewebFetchArrayDB($coreLanguageSQL,$query_cms);
			$txt_cms_id=$row_cms[0];
			$txt_cms_subject=rechangeQuot($row_cms[1]);						
			$txt_cms_key=$row_cms[2];
			$txt_cms_detail=rechangeQuot($row_cms[3]);
			$txt_cms_deate=ShowDateShortTh($row_cms[4]);
			$txt_cms_picFile=$row_cms[5];
			$txt_cms_pic=$mod_path_pictures."/".$row_cms[5];
			$txt_cms_picDetail=$mod_path_pictures."/".$row_cms[5];
			$txt_cms_html=$mod_path_html_fornt."/".$row_cms[6];
			$txt_cms_view=number_format($row_cms[7]);
			$txt_cms_description=rechangeQuot($row_cms[8]);
			if($txt_cms_description==""){
			$txt_cms_description=$fornt_name_description;
			}
			
			$txt_cms_keywords=rechangeQuot($row_cms[9]);
			if($txt_cms_keywords==""){
			$txt_cms_keywords=$fornt_name_keywords;
			}

			$txt_cms_metatitle=rechangeQuot($row_cms[10]);		
			if($txt_cms_metatitle==""){
			$txt_cms_metatitle=$txt_cms_subject;	
			}

			 $txt_cms_type=$row_cms[11];
			$txt_cms_filevdo=$row_cms[12];
			$txt_cms_pathvdo=$mod_path_vdo_fornt."/".$row_cms[12];
			$myExtensionArray = explode(".",$txt_cms_filevdo);
           	$mediaFileType = strtolower($myExtensionArray[sizeof($myExtensionArray)-1]);
			$txt_cms_url=rechangeQuot($row_cms[13]);
			$txtValueUrl=$txt_cms_url;
			
			$valTypeSal=$row_cms[14];
			$valTypeDateTo=$row_cms[15];
			$valTypeTimeTo=$row_cms[16];
			$valFromHH=$row_cms[17];
			$valQuantity=$row_cms[18];
			$valFromMM=$row_cms[19];
			$valToHH=$row_cms[20];
			$valToMM=$row_cms[21];
			$valPrice=$row_cms[22];
			$valSale=$row_cms[23];
			$valEat=rechangeQuot($row_cms[24]);
			$valWalk=rechangeQuot($row_cms[25]);
			$valAddress=rechangeQuot($row_cms[26]);
			
		if($row_cms[27]=="0000-00-00 00:00:00"){
			$valSdate="-";
			}else{
			$valSdate=ShowDateShortTh($row_cms[27]);
			}
			if($row_cms[28]=="0000-00-00 00:00:00"){
			$valEdate="-";
			}else{
			$valEdate=ShowDateShortTh($row_cms[28]);
			}
			
			$txt_cms_mapFile=$row_cms[29];
			$txt_cms_map=$mod_path_pictures."/".$row_cms[29];
			$txt_cms_icon=rechangeQuot($row_cms[30]);
			$g=rechangeQuot($row_cms[31]);
			
			$valDateSnNow = $valSdate;
			if($valTypeDateTo==1){
				$valDateSnNow .=  $valEdate;
			}
			
			if($valTypeSal==2){
				$valTimeSnNow = $valFromHH.":".$valFromMM;
				 if($valTypeTimeTo==1){
				 	$valTimeSnNow .= " - ".$valToHH.":".$valToMM;
				 }
				 $valTimeSnNow .=" น.";
				 
			}else{
				$valTimeSnNow ="ทั้งวัน";
			}
			
				$valURLStatus =  $core_full_path."/seminarStatus/".$d."/";
				$valURLDetail =  $core_full_path."/seminarDetail/".$d."/";
				/*############## End Seminar Informaion #################*/
				if($_POST['valueID']==2){
					$SubjectMail = "Confirm Training-Seminar Registration (".$valApplyOfficeth.", ".$valApplyName.")";	
				}else{
					$SubjectMail = "Cancel Training-Seminar Registration (".$valApplyOfficeth.", ".$valApplyName.")";	
				}
				
				$sql = "SELECT ".$mod_tb_root_email."_email FROM ".$mod_tb_root_email." WHERE ".$mod_tb_root_email."_masterkey='".$masterkey."' AND ".$mod_tb_root_email."_gid='".$g."'  ";
				$Query=wewebQueryDB($coreLanguageSQL,$sql);
				$RecordCount=wewebNumRowsDB($coreLanguageSQL,$Query);
				$index=0;
				while($index<$RecordCount) {
				$Row=wewebFetchArrayDB($coreLanguageSQL,$Query);
				$txt_email=$Row[0];
				$from = $core_admin_email;
				$fromname = $fornt_name_title;
				$to = $txt_email;	
				
							$message = '
					<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" >
			  <tr>
				<td   bgcolor="#ffffff"  align="left" valign="middle" >
				
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tr>
						<td height="20" > </td>
					  </tr>
						  <tr>
						<td height="20">
						<span  style="font-family: tahoma;	font-size: 25px; color: #484848;font-weight:bold;">
							'.$valApplyOfficeth.', '.$valApplyName.'
						</span>
						 </td>
					  </tr>
					
						<tr>
						<td height="20"> </td>
					  </tr>
					</table>
					
				
				</td>
			  </tr>
			  <tr>
				<td height="5" bgcolor="#006838"> </td>
			  </tr>
			  <tr>
				<td height="3" bgcolor="#999999"> </td>
			  </tr>
			  <tr>
				<td height="20"  bgcolor="#F0F0F0">&nbsp;</td>
			  </tr>
			  <tr>
				<td valign="top">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td colspan="3"></td>
				</tr>
			  <tr>
				<td width="25" bgcolor="#F0F0F0">&nbsp;</td>
				<td width="92%" bgcolor="#F0F0F0">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tr>
						<td  align="left" valign="top"  style="font-family: tahoma;font-size: 16px;word-wrap: break-word; ">
					  
					  
					  <p  style="font-family: tahoma;	font-size: 16px; color: #484848;line-height:25px;">
							<span  style="font-family: tahoma;	font-size: 18px; color: #484848;font-weight:bold;">
								Details of Participant / ข้อมูลผู้เข้าร่วมอบรม
							</span>
							<br />
							<hr>
							<span  style="font-family: tahoma;	font-size: 16px; color: #484848;font-weight:bold;">
								Registration Number / หมายเลขลงทะเบียน:
							</span>
							<span style="font-family: tahoma;font-size: 14px;word-wrap: break-word;color: #484848; ">
							 '.$valOrderNumber.'
							</span>
							<br />
							<span  style="font-family: tahoma;	font-size: 16px; color: #484848;font-weight:bold;">
								Name / ชื่อผู้เข้าร่วมอบรม:
							</span>
							<span style="font-family: tahoma;font-size: 14px;word-wrap: break-word;color: #484848; ">
							 '.$valApplyName.'
							</span>
							<br />
							<span  style="font-family: tahoma;	font-size: 16px; color: #484848;font-weight:bold;">
								Name of company / ชื่อหน่วยงาน:
							</span>
							<span style="font-family: tahoma;font-size: 14px;word-wrap: break-word;color: #484848; ">
							 '.$valApplyOfficeth.'
							</span>
							<br />
							<span  style="font-family: tahoma;	font-size: 16px; color: #484848;font-weight:bold;">
								Address / ที่อยู่หน่วยงาน:
							</span>
							<span style="font-family: tahoma;font-size: 14px;word-wrap: break-word;color: #484848; ">
							 '.nl2br($valApplyAddress).'
							</span>
							<br />
							
							<span  style="font-family: tahoma;	font-size: 16px; color: #484848;font-weight:bold;">
								Phone Number / โทรศัพท์:
							</span>
							<span style="font-family: tahoma;font-size: 14px;word-wrap: break-word;color: #484848; ">
							 '.$valApplyTel.'
							</span>
							<br />
							<span  style="font-family: tahoma;	font-size: 16px; color: #484848;font-weight:bold;">
								 Email / อีเมล:
							</span>
							<span style="font-family: tahoma;font-size: 14px;word-wrap: break-word;color: #484848; ">
							 '.$valApplyEmail.'
							</span>
							<br />
							
							<span  style="font-family: tahoma;	font-size: 16px; color: #484848;font-weight:bold;">
								 Status / สถานะ:
							</span>
							<span style="font-family: tahoma;font-size: 14px;word-wrap: break-word;color: #484848; ">
							 '.$modTxtStatusSnEn[$valApplyStatus].' / '.$modTxtStatusSn[$valApplyStatus].'
							</span>
							<br />
							<span  style="font-family: tahoma;	font-size: 16px; color: #484848;font-weight:bold;">
								 Check for status / ตรวจสอบสถานะ:
							</span>
							<span style="font-family: tahoma;font-size: 14px;word-wrap: break-word;color: #484848; ">
							<br /> <a  href="'.$valURLStatus.'" > '.$valURLStatus.'</a>
							</span>
							
							
							</p>
							<br />
							<hr>
							
							<span  style="font-family: tahoma;	font-size: 18px; color: #484848;font-weight:bold;">
								Details of Training-Seminar Course / ข้อมูลการอบรม-สัมมนา
							</span>
							<br />
							<hr>
							<span  style="font-family: tahoma;	font-size: 16px; color: #484848;font-weight:bold;">
								 Course / ชื่อหลักสูตร:
							</span>
							<span style="font-family: tahoma;font-size: 14px;word-wrap: break-word;color: #484848; ">
							 '.$txt_cms_subject.'
							</span>
							<br />
							
							<span  style="font-family: tahoma;	font-size: 16px; color: #484848;font-weight:bold;">
								 Date / วันที่:
							</span>
							<span style="font-family: tahoma;font-size: 14px;word-wrap: break-word;color: #484848; ">
							 '.$valDateSnNow.'
							</span>
							<br />
							
							
							<span  style="font-family: tahoma;	font-size: 16px; color: #484848;font-weight:bold;">
								Venue /  สถานที่:
							</span>
							<span style="font-family: tahoma;font-size: 14px;word-wrap: break-word;color: #484848; ">
							<br /> '.nl2br($valAddress).'
							</span>
							</p>
							<br />
					
							
							<span  style="font-family: tahoma;	font-size: 16px; color: #484848;font-weight:bold;">
								More details / รายละเอียดเพิ่มเติม:
							</span>
							<span style="font-family: tahoma;font-size: 14px;word-wrap: break-word;color: #484848; ">
							
							<br /> <a  href="'.$valURLDetail.'" > '.$valURLDetail.'</a>
							</span>
							</p>
							
							<hr>
							<br />
							<br />
							
						 <p  style="font-family: tahoma;	font-size: 14px; color: #484848;line-height:25px;">
						<span  style="font-family: tahoma;	font-size: 14px; color: #484848;font-weight:bold;">
								'.$core_mail_thankyou.'
							</span>
							
							</p>    
						 </td>
					  </tr>
					</table>    </td>
				<td width="25" bgcolor="#F0F0F0">&nbsp;</td>
			  </tr>
			  <tr>
				<td colspan="3"  bgcolor="#F0F0F0">&nbsp;</td>
				</tr>
			</table>    </td>
			  </tr>
			  <tr>
				<td height="20">&nbsp;</td>
			  </tr>
			  <tr>
				<td align="left" valign="top" bgcolor="#999999"><table width="600" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td width="15" height="10" align="left" valign="top"> </td>
					<td width="570" height="10" align="left" valign="top"> </td>
					<td width="15" height="10" align="left" valign="top"> </td>
				  </tr>
				  <tr>
					<td width="15" align="left" valign="top">&nbsp;</td>
					<td width="570" align="left" valign="top" class="info" style="font-family: tahoma;	font-size: 12px;	color: #FFF;">'.$core_mail_sentby.'<br />
					  <br />
					  <span style="font-weight: bold;">'.$core_mail_company.'<br />
					 </span>'.$core_mail_address.'</td>
					<td width="15" align="left" valign="top">&nbsp;</td>
				  </tr>
				  <tr>
					<td width="15" height="10" align="left" valign="top"> </td>
					<td width="570" height="10" align="left" valign="top"> </td>
					<td width="15" height="10" align="left" valign="top"> </td>
				  </tr>
				</table></td>
			  </tr>
			  
			  
			  <tr>
				<td height="30">&nbsp;</td>
			  </tr>
			</table>
					';
							
						loadSendEmailTo($to, $core_send_email, $SubjectMail, $message, $core_default_typemail);
							
				//echo  "Subject==>".$SubjectMail."<br/>Email==>".$to."<br/>EmailFrom==>".$core_send_email."<br/>".$message."<br/><br/>";
				
				$index++;
				}
				$to = $valApplyEmail;
				loadSendEmailTo($to, $core_send_email, $SubjectMail, $message, $core_default_typemail);
				//echo  "Subject==>".$SubjectMail."<br/>Email==>".$to."<br/>EmailFrom==>".$core_send_email."<br/>".$message."<br/><br/>";

		}
?>
<select name="inputStatus<?php echo $_POST['bID']?>"  id="inputStatus<?php echo $_POST['bID']?>" class="formSelectStatusSn"  onChange="changeStatusBook('<?php echo $_POST['bID']?>',this.value,'../<?php echo $mod_fd_root?>/updateBook.php');">
    <option value="1"  <?php if($_POST['valueID']=="1"){ ?>  selected="selected" <?php } ?> ><?php echo $modTxtStatusSn[1]?></option>
    <option value="2"  <?php if($_POST['valueID']=="2"){ ?>  selected="selected" <?php } ?> ><?php echo $modTxtStatusSn[2]?></option>
    <option value="3"  <?php if($_POST['valueID']=="3"){ ?>  selected="selected" <?php } ?> ><?php echo $modTxtStatusSn[3]?></option>
</select>