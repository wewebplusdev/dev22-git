<?php
// print_pre($_REQUEST);
// print_pre($_FILES);
$secret = $secretkey;
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_REQUEST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);
// print_pre($responseData);
if (!empty($_POST) && $responseData->success) {
  $arrData = array();

  // info
  $arrKeyInfo = array('groupid', 'salary', 'startdate');
  $index = 0;
  foreach ($_REQUEST['info'] as $key => $value) {
    $arrData['info'][$arrKeyInfo[$index]] = $value;
    $index++;
  }

  //general
  $arrKeyGeneral = array('prefix', 'fname', 'lname', 'prefixen', 'fnameen', 'lnameen', 'bday', 'bmonth', 'byear', 'weight', 'height', 'placeofbirth', 'sex');
  $index = 0;
  foreach ($_REQUEST['general'] as $key => $value) {
    $arrData['general'][$arrKeyGeneral[$index]] = $value;
    $index++;
  }

  //address
  $arrKeyAddress = array(
    'housenumber', 'moo', 'village', 'alley', 'road', 'province', 'district', 'subdictrict', 'postcode', 
    'housenumbernow', 'moonow', 'villagenow', 'alleynow', 'roadnow', 'provincenow', 'districtnow', 'subdictrictnow', 'postcodenow',
    'tel', 'telmobile', 'email', 'identification', 'issued-at', 'expiry-date'
  );
  $index = 0;
  foreach ($_REQUEST['address'] as $key => $value) {
    $arrData['address'][$arrKeyAddress[$index]] = $value;
    $index++;
  }

  //military
  $arrKeyMilitary = array('status', 'other');
  $index = 0;
  foreach ($_REQUEST['military'] as $key => $value) {
    $arrData['military'][$arrKeyMilitary[$index]] = $value;
    $index++;
  }

  //emergency
  $arrKeyMergency = array('fname', 'lname', 'bdaty', 'bmonth', 'byear', 'age', 'relations', 'address', 'tel');
  $index = 0;
  foreach ($_REQUEST['emergency'] as $key => $value) {
    $arrData['emergency'][$arrKeyMergency[$index]] = $value;
    $index++;
  }

  //family
  $arrKeyFamily = array(
    'fname1', 'lname1', 'bday1', 'bmonth1', 'byear1', 'age1', 'relations1', 'address1', 'tel1', 'alive1', 'dday1', 'dmonth1', 'dyear1',
    'fname2', 'lname2', 'bday2', 'bmonth2', 'byear2', 'age2', 'relations2', 'address2', 'tel2', 'alive2', 'dday2', 'dmonth2', 'dyear2',
  );
  $index = 0;
  foreach ($_REQUEST['family'] as $key => $value) {
    $arrData['family'][$arrKeyFamily[$index]] = $value;
    $index++;
  }

  //brother
  $arrKeyBrother_1 = array(
    'number', 'born',
  );
  $arrKeyBrother = array(
    'fname', 'lname', 'bdaty', 'bmonth', 'byear', 'age', 'relations', 'address', 'tel', 'alive', 'dday', 'dmonth', 'dyear',
  );
  unset($_REQUEST['brethren']['temp']); // unset temp
  $arrData['brethren']['main'] = array( // mwege input จำนวนพี่น้องและเป็นคนที่เท่าไหร่ to array
    'number' => $_REQUEST['brethren'][0][0],
    'born' => $_REQUEST['brethren'][0][1],
  );
  foreach ($_REQUEST['brethren'] as $key => $value) {
    $index = 0;
    foreach ($value as $key2 => $value2) {
      if ($key > 0 || $key2 > 1) { // มองข้าม input จำนวนพี่น้องและเป็นคนที่เท่าไหร่
        $arrData['brethren'][$key][$arrKeyBrother[$index]] = $value2;
        $index++;
      }
    }
  }

  //education
  $arrKeyEducation = array(
    'level', 'academy-name', 'from', 'majors', 'educational-background', 'education-start', 'education-end', 'grade'
  );
  unset($_REQUEST['education']['tmp']); // unset temp
  foreach ($_REQUEST['education'] as $key => $value) {
    $index = 0;
    foreach ($value as $key2 => $value2) {
      $arrData['education'][$key][$arrKeyEducation[$index]] = $value2;
      $index++;
    }
  }

  //training
  $arrKeyTraining = array(
    'course', 'institute', 'degree', 'period', 'training-start', 'training-end'
  );
  unset($_REQUEST['training']['tmp']); // unset temp
  foreach ($_REQUEST['training'] as $key => $value) {
    $index = 0;
    foreach ($value as $key2 => $value2) {
      $arrData['training'][$key][$arrKeyTraining[$index]] = $value2;
      $index++;
    }
  }

  //workhistory
  $arrKeyKeyWork = array(
    'company', 'type', 'address', 'tel', 'first-position', 'last-position', 'last-salary', 'other', 'responsibility', 'period', 'work-start', 'work-end'
  );
  unset($_REQUEST['workhistory']['tmp']); // unset temp
  foreach ($_REQUEST['workhistory'] as $key => $value) {
    $index = 0;
    foreach ($value as $key2 => $value2) {
      $arrData['workhistory'][$key][$arrKeyKeyWork[$index]] = $value2;
      $index++;
    }
  }

  //language
  $arrKeyKeyLanguage = array(
    'language', 'speaking', 'listening', 'writing'
  );
  unset($_REQUEST['language']['tmp']); // unset temp
  foreach ($_REQUEST['language'] as $key => $value) {
    $index = 0;
    foreach ($value as $key2 => $value2) {
      $arrData['language'][$key][$arrKeyKeyLanguage[$index]] = $value2;
      $index++;
    }
  }

  //information
  $arrKeyKeyInfomation = array(
    'country-out-permanent', 'country-out-temporary', 'contagious', 'contagious-other', 'handicap', 'handicap-other', 'investigation', 'investigation-other',
    'discharged', 'discharged-other', 'friend', 'friend-other', 'vacancy', 'vacancy-other-1', 'vacancy-other-2', 'beneficial'
  );
  $index = 0;
  foreach ($_REQUEST['information'] as $key => $value) {
    $arrData['information'][$arrKeyKeyInfomation[$index]] = $value;
    $index++;
  }

  //reference
  $arrKeyKeyReference = array(
    'fname', 'address', 'position', 'tel', 'relations'
  );
  unset($_REQUEST['reference']['tmp']); // unset temp
  $arrData['reference']['main'] = array( // mwege input จำนวนพี่น้องและเป็นคนที่เท่าไหร่ to array
    'reference' => $_REQUEST['reference'][0]['reference'],
  );
  foreach ($_REQUEST['reference'] as $key => $value) {
    $index = 0;
    foreach ($value as $key2 => $value2) {
      if ($key > 0 || $key2 > 0) { // มองข้าม input จำนวนพี่น้องและเป็นคนที่เท่าไหร่
        $arrData['reference'][$key][$arrKeyKeyReference[$index]] = $value2;
        $index++;
      }
    }
  }

  //comment
  $arrKeyKeyHrComment = array(
    'hr-comment'
  );
  unset($_REQUEST['comment']['confirm']); // unset temp
  $index = 0;
  foreach ($_REQUEST['comment'] as $key => $value) {
    $arrData['comment'][$arrKeyKeyHrComment[$index]] = $value;
    $index++;
  }

   print_pre($arrData);

  $data = array();
  // profile information
  $data[$config['career']['join']['main'] . "_province"] = "'" . changeQuot($arrData["address"]['province']) . "'";
  $data[$config['career']['join']['main'] . "_name"] = "'" . changeQuot($arrData["general"]['fname']." ".$arrData["general"]['lname']) . "'";
  $data[$config['career']['join']['main'] . "_sex"] = "'" . changeQuot($arrData["general"]['sex']) . "'";

  /* Start Education */
  $arrInsertEdu = array();
  foreach ($arrData["education"] as $keyEdu => $valueEdu) {
    array_push($arrInsertEdu, $valueEdu['level']);
  }
  $data[$config['career']['join']['main'] . "_edu"] = "'" . serialize($arrInsertEdu) . "'";
  /* End Education */
  $data[$config['career']['join']['main'] . "_sdate"] = "'" . $arrData["info"]["startdate"] . " 00:00:00'";
  $data[$config['career']['join']['main'] . "_salary"] = "'" . changeQuot($arrData["info"]['salary']) . "'";
  $data[$config['career']['join']['main'] . "_email"] = "'" . changeQuot($arrData["address"]['email']) . "'";
  $data[$config['career']['join']['main'] . "_jID"] = "'" . changeQuot($arrData["info"]['groupid']) . "'";
  $data[$config['career']['join']['main'] . "_prefix"] = "'" . changeQuot($arrData["general"]['prefix']) . "'";
  $data[$config['career']['join']['main'] . "_fname"] = "'" . changeQuot($arrData["general"]['fname']) . "'";
  $data[$config['career']['join']['main'] . "_lname"] = "'" . changeQuot($arrData["general"]['lname']) . "'";

  /* Start Info */
  $data[$config['career']['join']['main'] . "_info"] = "'" . json_encode($arrData['info'],JSON_UNESCAPED_UNICODE) . "'";
  /* End Info */

  /* Start General */
  $data[$config['career']['join']['main'] . "_general"] = "'" . json_encode($arrData['general'],JSON_UNESCAPED_UNICODE) . "'";
  /* End General */

  /* Start General */
  $data[$config['career']['join']['main'] . "_address"] = "'" . json_encode($arrData['address'],JSON_UNESCAPED_UNICODE) . "'";
  /* End General */

  /* Start military */
  $data[$config['career']['join']['main'] . "_military"] = "'" . json_encode($arrData['military'],JSON_UNESCAPED_UNICODE) . "'";
  /* End military */

  /* Start emergency */
  $data[$config['career']['join']['main'] . "_emergency"] = "'" . json_encode($arrData['emergency'],JSON_UNESCAPED_UNICODE) . "'";
  /* End emergency */

  /* Start family */
  $data[$config['career']['join']['main'] . "_family"] = "'" . json_encode($arrData['family'],JSON_UNESCAPED_UNICODE) . "'";
  /* End family */

  /* Start brother */
  $data[$config['career']['join']['main'] . "_brother"] = "'" . json_encode($arrData['brethren'],JSON_UNESCAPED_UNICODE) . "'";
  /* End brother */

  /* Start education */
  $data[$config['career']['join']['main'] . "_education"] = "'" . json_encode($arrData['education'],JSON_UNESCAPED_UNICODE) . "'";
  /* End education */

  /* Start training */
  $data[$config['career']['join']['main'] . "_training"] = "'" . json_encode($arrData['training'],JSON_UNESCAPED_UNICODE) . "'";
  /* End training */

  /* Start workhistory */
  $data[$config['career']['join']['main'] . "_workhistory"] = "'" . json_encode($arrData['workhistory'],JSON_UNESCAPED_UNICODE) . "'";
  /* End workhistory */

  /* Start language */
  $data[$config['career']['join']['main'] . "_language"] = "'" . json_encode($arrData['language'],JSON_UNESCAPED_UNICODE) . "'";
  /* End language */

  /* Start information */
  $data[$config['career']['join']['main'] . "_information"] = "'" . json_encode($arrData['information'],JSON_UNESCAPED_UNICODE) . "'";
  /* End information */

  /* Start reference */
  $data[$config['career']['join']['main'] . "_reference"] = "'" . json_encode($arrData['reference'],JSON_UNESCAPED_UNICODE) . "'";
  /* End reference */

  /* Start comment */
  $data[$config['career']['join']['main'] . "_comment"] = "'" . json_encode($arrData['comment'],JSON_UNESCAPED_UNICODE) . "'";
  /* End comment */


  $data[$config['career']['join']['main'] . "_masterkey"] = "'" . $config['about']['ab_js']['masterkey'] . "'";
  $data[$config['career']['join']['main'] . "_credate"] = "NOW()";
  $data[$config['career']['join']['main'] . "_status"] = "'New'";
  $sql = "INSERT INTO " . $config['career']['join']['main'] . "(" . implode(',', array_keys($data)) . ")VALUES(" . implode(',', array_values($data)) . ")";
  
  $result = $db->execute($sql);
  $ContentID = $db->insert_Id();

  /* Start Upload File career */
  require_once _DIR . '/front/controller/script/' . $menuActive . '/service/upload-career.php';
  /* End Upload File career */

  /* Start Sent Email */
  formmail($arrData);
  /* End Sent Email */
  
  $status = array();
  $status['status'] = 'success';
  $status['msg'] = $lang['contact']['success_msg'];
  $status['msg_desc'] = $lang['contact']['success_msg_desc'];
  $status['btn'] = $lang['system']['ok'];
  

}else{
  $status = array();
  $status['status'] = 'error';
  $status['msg'] = $lang['contact']['error_msg'];
  $status['msg_desc'] = $lang['contact']['error_msg_desc'];
  $status['btn'] = $lang['system']['ok'];
  
}

echo json_encode($status);
exit(0);

####Start MAIL To User####'
function formmail($arrData){
  global $url_website, $callSetWebsite, $core_send_email, $core_default_typemail, $settingWeb, $aboutPage, $lang, $config;
  
  $mailGroup = $aboutPage->callmailcareer($config['about']['ab_js']['masterkey']);
  $SubjectMail = $lang['menu']['career']." (" . changeQuot($arrData["general"]['fname']." ".$arrData["general"]['lname']) . ")";
  $Group = $aboutPage->callGroupCareer($config['about']['ab_js']['masterkey'],changeQuot($arrData["info"]['groupid']));

  $Province = $aboutPage->callProvince_main($arrData['address']['provincenow']);
  $Distric = $aboutPage->callDistrict_main($arrData['address']['provincenow'],$arrData['address']['districtnow']);
  $Subdistric = $aboutPage->callSubDistrict_main($arrData['address']['districtnow'],$arrData['address']['subdictrictnow']);

  $message = "
  <tr style='height: 309px;'>
    <td style='height: 309px; width: 596px;'>
      <table border='0' width='100%' cellspacing='0' cellpadding='0' align='center'>
        <tbody>
          <tr>
            <td width='40'>&nbsp;</td>
            <td>
              <table style='height: 255px; width: 100%;' border='0' width='100%' cellspacing='0'
                cellpadding='0' align='center'>
                <tbody>
                  <tr style='height: 50px;'>
                    <td style='height: 16px;'>
                      <div style='font-size: 16px; font-weight: bold; color: #037ee5; line-height: 1em;'>
                      ติดต่อเรา - ".$settingWeb['subjectoffice']."</div>
                    </td>
                  </tr>
                  <tr style='height: 209px;'>
                    <td style='height: 209px;'>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['menu']['career']." ".$lang['career']['position']." : ".$Group->fields[2]."<br />".$lang['contact']['name']." : ". changeQuot($arrData["general"]['fname']." ".$arrData["general"]['lname']) ."</div>
                      
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['contact']['email']." : ". changeQuot($arrData["address"]['email']) ."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['contact']['address']." : ".changeQuot($arrData['address']['housenumbernow']." ".$arrData['address']['moonow']." ".$arrData['address']['villagenow']." ".$arrData['address']['alleynow'])
                      ."<br />".$Province->fields[2]." ".$Distric->fields[2]." ".$Subdistric->fields[2]." ".changeQuot($arrData['address']['postcodenow'])."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['contact']['tel']." : ".changeQuot($arrData['address']['tel'])."</div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
            <td width='40'>&nbsp;</td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>";
  
  // $to = trim($_POST['inputEmail']);
  // $templates_user = $callSetWebsite->template_mail($message);
  // loadSendEmailTo($to, $SubjectMail, $templates_user);
  // echo  "to==>".$to."<br/>Subject==>".$SubjectMail."<br/>".$templates_user."<br/>";
  // /* ################ End Mail To User ########### */
  
  /* ################ Start Mail To Admin ########### */
  $templates_admin = $callSetWebsite->template_mail($message);

  $arrEmail = array();
    //array_push($arrEmail,trim($_POST['inputEmail']));
    foreach($mailGroup as $key => $to){
      array_push($arrEmail,$to[1]);
    }
    // print_pre($arrEmail);
    loadSendEmailTo($arrEmail, $SubjectMail, $templates_admin);

  // foreach ($mailGroup as $key => $to) {
  //     loadSendEmailTo($to[2], $SubjectMail, $templates_admin);
  //     // echo  "to==>".$to[2]."<br/>Subject==>".$SubjectMail."<br/>".$templates_admin."<br/>";
  // }
}