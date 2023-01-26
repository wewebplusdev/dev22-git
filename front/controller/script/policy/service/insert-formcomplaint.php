<?php

$secret = $secretkey;
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_REQUEST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);


// print_pre($_REQUEST['Uploadpicname']);
// die;

if (!empty($_POST) && $responseData->success) {
  $data = array();
  $data[$config['coms']['db']['main'] . "_masterkey"] = "'" . changeQuot($_POST["masterkey"]) . "'";
  $data[$config['coms']['db']['main'] . "_gid"] = "'" . changeQuot($_POST["inputGroup"]) . "'";
  $data[$config['coms']['db']['main'] . "_subject"] = "'" . changeQuot($_POST["inputSubject"]) . "'";
  $data[$config['coms']['db']['main'] . "_message"] = "'" . encodeStr($_POST["inputMessage"]) . "'";
  $data[$config['coms']['db']['main'] . "_fname"] = "'" . encodeStr($_POST["inputName"]) . "'";
  $data[$config['coms']['db']['main'] . "_name"] = "'" . encodeStr($_POST["inputName"]) . "'";
  $data[$config['coms']['db']['main'] . "_email"] = "'" . encodeStr($_POST["inputEmail"]) . "'";
  $data[$config['coms']['db']['main'] . "_address"] = "'" . encodeStr($_POST["inputAddress"]) . "'";
  $data[$config['coms']['db']['main'] . "_tel"] = "'" . encodeStr($_POST["inputTel"]) . "'";
  $data[$config['coms']['db']['main'] . "_language"] = "'" . $url->pagelang[2] . "'";
  $data[$config['coms']['db']['main'] . "_ip"] = "'" . getip() . "'";
  $data[$config['coms']['db']['main'] . "_status"] = "'Unread'";
  $data[$config['coms']['db']['main'] . "_credate"] = "NOW()";

  $sql = "INSERT INTO " . $config['coms']['db']['main'] . "(" . implode(',', array_keys($data)) . ") VALUES(" . implode(',', array_values($data)) . ")";
  $insertDb = $db->execute($sql);
  $ContentID = $db->insert_Id();

  // insert file
  if (!empty($_POST["Uploadpicname"])) {
    $nameToinput = explode('.', $_POST["Uploadpicname"]);
    $insert = array();
    $insert[$config['cmsf']['db']['main'] . "_contantid"] = "'" . $ContentID . "'";
    $insert[$config['cmsf']['db']['main'] . "_filename"] = "'" . $_POST["Uploadpicname"] . "'";
    $insert[$config['cmsf']['db']['main'] . "_name"] = "'" . $nameToinput[0] . "'";
    $insert[$config['cmsf']['db']['main'] . "_masterkey"] = "'" . $_POST["masterkey"] . "'";

    $sql_file = "INSERT INTO " . $config['cmsf']['db']['main'] . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
    $Query_file = $db->execute($sql_file);
  }

  formmail();
  $data = array(
    'status' => 200,
    'icon' => 'success',
    'title' => $lang['contact']['title_success'],
    'msg' => $lang['contact']['msg_success'],
    'btn' => $lang['system']['ok'],
    'color' => "#013f94",
  );
}else{
  $data = array(
    'status' => 400,
    'icon' => 'error',
    'title' => $lang['contact']['title_fail'],
    'msg' => $lang['contact']['msg_fail'],
    'btn' => $lang['system']['ok'],
    'color' => "#013f94",
  );
}


echo json_encode($data);
exit(0);


####Start MAIL To User####'
function formmail(){
  global $url_website, $callSetWebsite, $core_send_email, $core_default_typemail, $settingWeb, $policyPage, $lang, $config;
  
  $mailGorup = $policyPage->callmailcontact($_POST["masterkey"], $_POST["inputGroup"]);
  // $SubjectMail = "".$subGroup->fields[2]."(" . $_POST['inputfname'] . " " . $_POST['inputlname'] . ") – ".$Group->fields[2]."";
  $SubjectMail = $lang["policy"]["complaint"]." (" . $_POST['inputName'] . ")";
  $SubjectMail_admin = $lang["policy"]["complaint"];
  $Group = $policyPage->callComsGroup($_POST["masterkey"], $_POST["inputGroup"]);
  
  $messageUser = "
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
                      ".$lang["policy"]["complaint"]." - ".$settingWeb['subjectoffice']."</div>
                    </td>
                  </tr>
                  <tr style='height: 209px;'>
                    <td style='height: 209px;'>
                      <div style='font-size: 16px; color: #666; line-height: 1.4em;'>".$lang['form']['dear']." ".changeQuot($_POST['inputName'])."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>&nbsp;</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['email']['veri:title2']."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['email']['step2:dear']."</div>
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
  $messageAdmin = "
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
                      ".$lang["policy"]["complaint"]." - ".$settingWeb['subjectoffice']."</div>
                    </td>
                  </tr>
                  <tr style='height: 209px;'>
                    <td style='height: 209px;'>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['policy']['group']." ".$Group->fields[2]."<br />".$lang['contact']['name']." ".changeQuot($_POST["inputName"])."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['contact']['text']." : ".changeQuot($_POST["inputSubject"])."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['contact']['text']." : ".changeQuot($_POST["inputMessage"])."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang["policy"]["fname"]."-".$lang["policy"]["lname"]." : ".changeQuot($_POST["inputName"])."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang["policy"]["email"]." : ".changeQuot($_POST["inputEmail"])."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['contact']['address']." : ".changeQuot($_POST["inputAddress"])."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang["policy"]["tel"]." : ".changeQuot($_POST["inputTel"])."</div>
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
  
  $arrEmailer = array();
  /* ################ Start Mail To User ########### */
  $to = trim($_POST['inputEmail']);
  $templates_user = $callSetWebsite->template_mail($messageUser);
  $arrEmailer['user']['subject'] = $SubjectMail;
  $arrEmailer['user']['body'] = $templates_user;
  $arrEmailer['user']['to'][] = $to;
  // echo  "to==>".$to."<br/>Subject==>".$SubjectMail."<br/>".$templates_user."<br/>";
  /* ################ End Mail To User ########### */
  
  /* ################ Start Mail To Admin ########### */
  $templates_admin = $callSetWebsite->template_mail($messageAdmin);
  foreach ($mailGorup as $key => $to) {
    $arrEmailer['admin']['subject'] = $SubjectMail_admin;
    $arrEmailer['admin']['body'] = $templates_admin;
    // echo  "to==>".$to[2]."<br/>Subject==>".$SubjectMail."<br/>".$templates_admin."<br/>";
    $arrEmailer['admin']['to'][] = $to[2];
  }
  /* ################ End Mail To Admin ########### */

  loadSendEmailTo($arrEmailer, null, null, 2);
}


