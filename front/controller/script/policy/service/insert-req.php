<?php
$secret = $secretkey;
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_REQUEST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);

if (!empty($_REQUEST) && $responseData->success) {
  $callcustp = $policyPage->callcustp($_REQUEST["token"]);
  $datenow = date('Y-m-d H:i:s');

  if ($callcustp->_numOfRows > 0) {
    if ($policyPage->DateDiff($callcustp->fields['credate'], $datenow) < 1) {

      // เอา ALL ออกจาก array
      $sid_array = $_REQUEST["inputtype"];
      if (($key = array_search('ALL', $sid_array)) !== false) {
        unset($sid_array[$key]);
      };

      $data = array();
      $data[$config['cus']['db']['main'] . "_sid"] = "'" . serialize($sid_array) . "'";
      $data[$config['cus']['db']['main'] . "_masterkey"] = "'" . changeQuot($config['policy']['req']['masterkey']) . "'";
      $data[$config['cus']['db']['main'] . "_language"] = "'" . $url->pagelang[2] . "'";
      $data[$config['cus']['db']['main'] . "_fname"] = "'" . changeQuot($_REQUEST['inputfname']) . "'";
      $data[$config['cus']['db']['main'] . "_lname"] = "'" . changeQuot($_REQUEST['inputlname']) . "'";
      $data[$config['cus']['db']['main'] . "_email"] = "'" . changeQuot($_REQUEST['inputemail']) . "'";
      $data[$config['cus']['db']['main'] . "_address"] = "'" . changeQuot($_REQUEST['inputaddress']) . "'";
      $data[$config['cus']['db']['main'] . "_tel"] = "'" . changeQuot($_REQUEST['inputtel']) . "'";
      $data[$config['cus']['db']['main'] . "_subject"] = "'" . changeQuot($_REQUEST['inputreason']) . "'";
      $data[$config['cus']['db']['main'] . "_ip"] = "'" . getip() . "'";
      $data[$config['cus']['db']['main'] . "_status"] = "'Unread'";
      $data[$config['cus']['db']['main'] . "_credate"] = "NOW()";
      $data[$config['cus']['db']['main'] . "_delete"] = "'Enable'";

      $sql = "INSERT INTO " . $config['cus']['db']['main'] . "(" . implode(',', array_keys($data)) . ") VALUES(" . implode(',', array_values($data)) . ")";
      // print_pre($sql);die;
      $insertDb = $db->execute($sql);
     
      // delete custp
      $sql = "DELETE FROM ".$config['custp']['db']['main']." WHERE ".$config['custp']['db']['main']."_key = '".$callcustp->fields['token']."' ";
      $sql_delete = $db->execute($sql);

      // sent mail
      formmail($sid_array);
      $data = array(
        'status' => 200,
        'icon' => 'success',
        'title' => $lang['form']['title_success'],
        'msg' => $lang['form']['msg_success'],
        'btn' => $lang['form']['btn_success'],
      );
    } else {
      $data = array(
        'status' => 400,
        'icon' => 'error',
        'title' => $lang['form']['title_fail'],
        'msg' => $lang['form']['msg_fail'],
        'btn' => $lang['form']['btn_fail'],
      );
    }
  } else {
    $data = array(
      'status' => 400,
      'icon' => 'error',
      'title' => $lang['form']['title_fail'],
      'msg' => $lang['form']['msg_fail'],
      'btn' => $lang['form']['btn_fail'],
    );
  }
} else {
  $data = array(
    'status' => 400,
    'icon' => 'error',
    'title' => $lang['form']['title_fail'],
    'msg' => $lang['form']['msg_fail'],
    'btn' => $lang['form']['btn_fail'],
  );
}
echo json_encode($data);
exit(0);



####Start MAIL To User####'
function formmail($arr_group = null)
{
  global $url_website, $callSetWebsite, $core_send_email, $core_default_typemail, $lang, $config;

  $policyPage = new policyPage;
  $arr_new_id = array();
  foreach ($arr_group as $keyarr_group => $valuearr_group) {
    $arr_new_id[] = "'".$valuearr_group."'";
  }
  $mailGorup = $policyPage->callmailcontact($config['policy']['req']['masterkey'], 0, $arr_new_id);
  $subGroup = $policyPage->callSubGroupContact($arr_new_id);
  // $Group = $policyPage->callGroupContact($arr_new_id);
  $subGroupArr = "";
  foreach ($subGroup as $keysubGroup => $valuesubGroup) {
    if ($keysubGroup == 0) {
      $subGroupArr .= $valuesubGroup[2];
    }else{
      $subGroupArr .= ", ".$valuesubGroup[2];
    }
  }

  $SubjectMail = $lang['email']['titlemail2']." (" . $_REQUEST['inputfname'] . " " . $_REQUEST['inputlname'] . ")";
  $SubjectMail_admin = $lang['email']['titlemail2']."";

  $to = trim($_REQUEST['inputemail']);
  $mailbody = '
    <tr>
        <td>
            <table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td colspan="3" height="30"></td>
                </tr>
                <tr>
                    <td width="30"></td>
                    <td>
                        <div style="font-size: 22px; color: #474d57; line-height: 24px; font-weight: normal;">'.$lang['form']['dear'] .''.$_REQUEST['inputfname'].' '.$_REQUEST['inputlname'].''.$lang['email']['comma'].'</div>
                        <div style="font-size: 16px; color: #474d57; line-height: 26px; font-weight: normal; margin-top: 20px;">
                          <div>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$lang['email']['veri:title'].'</span>
                          </div>
                        </div>
                        </br>
                        <table style="width: 100%;" border="1" cellspacing="0" cellpadding="0">
                          <tr>
                              <td colspan="12" height="30" style="text-align: center;">'.$lang['email']['you_detail'].'</td>
                          </tr>
                          <tr>
                              <td width="50%" height="50" style="padding-left:10px">'.$lang['form']['fname'].' - '.$lang['form']['lname'].'</td>
                              <td width="50%" height="50" style="padding-left:10px">'.$_REQUEST['inputfname'].' '.$_REQUEST['inputlname'].'</td>
                          </tr>
                          <tr>
                              <td width="50%" height="50" style="padding-left:10px">'.$lang['email']['you_request'].'</td>
                              <td width="50%" height="50" style="padding-left:10px">'.$subGroupArr.'</td>
                          </tr>
                          <tr>
                              <td width="50%" height="50" style="padding-left:10px">'.$lang['form']['text'].'</td>
                              <td width="50%" height="50" style="padding-left:10px">'.$_REQUEST['inputreason'].'</td>
                          </tr>
                      </table>
                      <div style="font-size: 16px; color: #474d57; line-height: 26px; font-weight: normal; margin-top: 20px;">
                        <div>
                          '.$lang['email']['step2:dear'].'
                        </div>
                        <div>
                          '.$lang['email']['step2:fromadmin'].'
                        </div>
                      </div>
                    </td>
                    <td width="30"></td>
                </tr>
                <tr>
                    <td colspan="3" height="40"></td>
                </tr>
            </table>
        </td>
    </tr>
      ';

    $mailbodyAdmin = '
    <tr>
        <td>
            <table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td colspan="3" height="30"></td>
                </tr>
                <tr>
                    <td width="30"></td>
                    <td>
                        <div style="font-size: 22px; color: #474d57; line-height: 24px; font-weight: normal;">'.$lang['form']['dearAdmin'].''.$lang['email']['comma'].'</div>
                        <div style="font-size: 16px; color: #474d57; line-height: 26px; font-weight: normal; margin-top: 20px;">
                          <div>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$lang['email']['veri:title'].'</span>
                          </div>
                        </div>
                        </br>
                        <table style="width: 100%;" border="1" cellspacing="0" cellpadding="0">
                          <tr>
                              <td colspan="12" height="30" style="text-align: center;">'.$lang['email']['you_detail'].'</td>
                          </tr>
                          <tr>
                              <td width="50%" height="50" style="padding-left:10px">'.$lang['form']['fname'].' - '.$lang['form']['lname'].'</td>
                              <td width="50%" height="50" style="padding-left:10px">'.$_REQUEST['inputfname'].' '.$_REQUEST['inputlname'].'</td>
                          </tr>
                          <tr>
                              <td width="50%" height="50" style="padding-left:10px">'.$lang['email']['you_request'].'</td>
                              <td width="50%" height="50" style="padding-left:10px">'.$subGroupArr.'</td>
                          </tr>
                          <tr>
                              <td width="50%" height="50" style="padding-left:10px">'.$lang['form']['text'].'</td>
                              <td width="50%" height="50" style="padding-left:10px">'.$_REQUEST['inputreason'].'</td>
                          </tr>
                      </table>
                      <div style="font-size: 16px; color: #474d57; line-height: 26px; font-weight: normal; margin-top: 20px;">
                        <div>
                          '.$lang['email']['step2:dear'].'
                        </div>
                        <div>
                          '.$lang['email']['step2:fromadmin'].'
                        </div>
                      </div>
                    </td>
                    <td width="30"></td>
                </tr>
                <tr>
                    <td colspan="3" height="40"></td>
                </tr>
            </table>
        </td>
    </tr>
      ';
    $arrEmailer = array();
    /* ################ Start Mail To User ########### */
    $messageUser= $callSetWebsite->mail_template($mailbody);
    $to = trim($_REQUEST['inputemail']);
    $arrEmailer['user']['subject'] = $SubjectMail;
    $arrEmailer['user']['body'] = $messageUser;
    $arrEmailer['user']['to'][] = $to;
    // echo  "Subject==>".$SubjectMail."<br/>Email==>".$to."<br/>".$messageUser."<br/><br/>To==>".$core_send_email."TypeMail==>".$core_default_typemail;
    /* ################ End Mail To User ########### */

    /* ################ Start Mail To Admin ########### */
    $messageAdmin = $callSetWebsite->mail_template($mailbodyAdmin);
    foreach ($mailGorup as $key => $to) {
      $arrEmailer['admin']['subject'] = $SubjectMail_admin;
      $arrEmailer['admin']['body'] = $messageAdmin;
      $arrEmailer['admin']['to'][] = $to[2];
    }
    // echo  "Subject==>".$SubjectMail."<br/>Email==>".$to[2]."<br/>".$messageAdmin."<br/><br/>To==>".$core_send_email."TypeMail==>".$core_default_typemail;
    /* ################ End Mail To Admin ########### */
    
    loadSendEmailTo($arrEmailer, null, null, 2);

}

