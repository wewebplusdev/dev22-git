<?php

$secret = $secretkey;
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_REQUEST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);


// print_pre($_REQUEST['g-recaptcha-response']);
// die;

if (!empty($_POST) && $responseData->success) {
  $data = array();
  $data[$config['cus']['db']['main'] . "_masterkey"] = "'" . changeQuot($config['contact']['cu']['masterkey']) . "'";
  $data[$config['cus']['db']['main'] . "_gid"] = "'" . changeQuot($_POST["inputGroup"]) . "'";
  $data[$config['cus']['db']['main'] . "_subject"] = "'" . changeQuot($_POST["inputSubject"]) . "'";
  $data[$config['cus']['db']['main'] . "_message"] = "'" . changeQuot($_POST["inputMessage"]) . "'";
  $data[$config['cus']['db']['main'] . "_fname"] = "'" . changeQuot($_POST["inputName"]) . "'";
  $data[$config['cus']['db']['main'] . "_email"] = "'" . changeQuot($_POST["inputEmail"]) . "'";
  $data[$config['cus']['db']['main'] . "_address"] = "'" . changeQuot($_POST["inputAddress"]) . "'";
  $data[$config['cus']['db']['main'] . "_tel"] = "'" . changeQuot($_POST["inputTel"]) . "'";
  $data[$config['cus']['db']['main'] . "_language"] = "'" . $url->pagelang[2] . "'";
  $data[$config['cus']['db']['main'] . "_ip"] = "'" . getip() . "'";
  $data[$config['cus']['db']['main'] . "_status"] = "'Unread'";
  $data[$config['cus']['db']['main'] . "_credate"] = "NOW()";

  $sql = "INSERT INTO " . $config['cus']['db']['main'] . "(" . implode(',', array_keys($data)) . ") VALUES(" . implode(',', array_values($data)) . ")";
  $insertDb = $db->execute($sql);

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
  global $url_website, $callSetWebsite, $core_send_email, $core_default_typemail, $settingWeb, $contactPage, $lang, $config;
  
  $mailGroup = $contactPage->callmailcontact($config['contact']['cu']['masterkey'], $_POST["inputGroup"]);
  // print_pre($mailGroup);die;
  // $SubjectMail = "".$subGroup->fields[2]."(" . $_POST['inputfname'] . " " . $_POST['inputlname'] . ") – ".$Group->fields[2]."";
  $SubjectMail = $lang['menu']['contact']." (" . $_POST['inputName'] . ")";
  $Group = $contactPage->callGroup($config['contact']['cu']['masterkey'], $_POST["inputGroup"]);
  
  
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
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['contact']['group']." ".$Group->fields[2]."<br />".$lang['contact']['name']." ".changeQuot($_POST["inputName"])."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['contact']['subject']." : ".changeQuot($_POST["inputSubject"])."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['contact']['text']." : ".changeQuot($_POST["inputMessage"])."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['contact']['name']." : ".changeQuot($_POST["inputName"])."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['contact']['email']." : ".changeQuot($_POST["inputEmail"])."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['contact']['address']." : ".changeQuot($_POST["inputAddress"])."</div>
                      <div style='font-size: 14px; color: #666; line-height: 1.4em;'>".$lang['contact']['tel']." : ".changeQuot($_POST["inputTel"])."</div>
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
      array_push($arrEmail,$to[2]);
    }
    // print_pre($arrEmail);
    loadSendEmailTo($arrEmail, $SubjectMail, $templates_admin);

  // foreach ($mailGroup as $key => $to) {
  //     loadSendEmailTo($to[2], $SubjectMail, $templates_admin);
  //     // echo  "to==>".$to[2]."<br/>Subject==>".$SubjectMail."<br/>".$templates_admin."<br/>";
  // }
}

