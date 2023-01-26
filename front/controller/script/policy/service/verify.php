<?php
$secret = $secretkey;
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_REQUEST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);

if (!empty($_POST) && $responseData->success) {
    $generateKey = $policyPage->generateKey();

    $data = array();
    $data[$config['custp']['db']['main'] . "_masterkey"] = "'" . $config['req']['main']['masterkey'] . "'";
    $data[$config['custp']['db']['main'] . "_language"] = "'" . $url->pagelang[2] . "'";
    $data[$config['custp']['db']['main'] . "_fname"] = "'" . changeQuot($_POST['inputfName']) . "'";
    $data[$config['custp']['db']['main'] . "_lname"] = "'" . changeQuot($_POST['inputlName']) . "'";
    $data[$config['custp']['db']['main'] . "_email"] = "'" . changeQuot($_POST['inputEmail']) . "'";
    $data[$config['custp']['db']['main'] . "_tel"] = "'" . changeQuot($_POST['inputTel']) . "'";
    $data[$config['custp']['db']['main'] . "_key"] = "'" . $generateKey . "'";
    $data[$config['custp']['db']['main'] . "_credate"] = "NOW()";
  
    $sql = "INSERT INTO " . $config['custp']['db']['main'] . "(" . implode(',', array_keys($data)) . ") VALUES(" . implode(',', array_values($data)) . ")";
    $insertDb = $db->execute($sql);

    $SubjectMail = $lang['email']['titlemail']." - (".$_POST['inputfName']." ".$_POST['inputlName'].")";
    $urlVerify = _URL ."/". $url->pagelang[2] ."/". $menuActive."/request/step-2?token=".$generateKey."";
    $to = trim($_POST['inputEmail']);
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
                        <div style="font-size: 22px; color: #474d57; line-height: 24px; font-weight: normal;">'.$lang['email']['dear'].'</div>
                        <div style="font-size: 16px; color: #474d57; line-height: 26px; font-weight: normal; margin-top: 20px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$lang['email']['veri:policy'].'<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$lang['email']['veri:company'].'<br>
                            <br>
                            <div style="padding-left:20px;">
                                <span style="text-decoration: underline">'.$lang['email']['veri:email'].'</span><br>
                                <span style="font-size: 16px; color: #ff0000;">'.$lang['email']['veri:time'].'</span><br>
                                <br>
                                '.$lang['email']['veri:regard'].'<br>
                                '.$lang['email']['veri:protection'].'<br>
                                <br>
                                '.$lang['email']['veri:remarks'].'<br>
                                '.$lang['email']['veri:note'].'<br>
                                '.$urlVerify.'<br>
                                <br>
                                '.$lang['email']['veri:note2'].'<br>
                                <br>
                                '.$lang['email']['veri:inquiries'].'<br>
                            </div>
                        </div>
                        <div style="margin-top: 30px;">
                            <a href="'.$urlVerify.'" target="_blank" style="font-size: 16px; color: #fff; background-color: #013f94; border-radius: 5px; padding: 15px 45px; text-decoration: none;">'.$lang['email']['identity'].'</a>
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
    /* ################ Start Mail To User ########### */
    $messageConfirm = $callSetWebsite->mail_template($mailbody);
    // echo  "Subject==>".$SubjectMail."<br/>Email==>".$to."<br/>".$messageConfirm."<br/><br/>To==>".$core_send_email."TypeMail==>".$core_default_typemail;
    // die;
    $arrEmailer = array();
    array_push($arrEmailer, trim($_POST['inputEmail']));
    $templates_admin = $messageConfirm;
    loadSendEmailTo($arrEmailer, $SubjectMail, $templates_admin);
    /* ################ End Mail To User ########### */

    $data = array(
        'status' => 200,
        'icon' => 'success',
        'title' => $lang['form']['title_step1_success'],
        'msg' => $lang['form']['msg_step1_success'],
        'btn' => $lang['form']['btn_success'],
    );
}else{
    $data = array(
      'status' => 400,
      'icon' => 'error',
      'title' => $lang['form']['title_fail'],
      'msg' => $lang['form']['msg_fail'],
      'btn' => $lang['form']['btn_success'],
    );
}
echo json_encode($data);
exit(0);

?>