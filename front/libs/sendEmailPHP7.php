<?php
require _DIR . '/front/libs/vendor/autoload.php'; #load Ribary

$jsonReturn = null;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

$core_smtp_host = "smtp.office365.com";
$core_smtp_port = "587";
$core_smtp_username = "wewebplus.dev@hotmail.com"; // Email ที่ใช้ส่ง
$core_smtp_password = "mailer1234";
// $core_smtp_username = "webmaster@git.or.th"; // Email ที่ใช้ส่ง
// $core_smtp_password = "GIT@2015";
$core_smtp_title = "สถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน)";

$mail = new PHPMailer();
$mail->IsHTML(true);
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->SMTPSecure = "tls"; // sets the prefix to the servier
$mail->Host = $core_smtp_host;
$mail->Port = $core_smtp_port;
$mail->SMTPAuth = true; 

$mail->Username = $core_smtp_username; // ต้องมีเมล์ของ gmail ที่สมัครไว้ด้วยนะครับ
$mail->Password = $core_smtp_password;

$mail->From = $core_smtp_username;
$mail->FromName = $core_smtp_title; // ผู้รับจะเห็นชื่อนี้เป็น ชื่อผู้ส่ง

$mail->SMTPDebug = 0;


switch ($version) {
    case '2':
        $valSendMailStatus = 1;
        foreach ($mailTo as $key => $to) {
            $mail->Subject = $to['subject'];
            $mail->Body = $to['body'];
            foreach ($to['to'] as $keyto => $valueto) {
                $mail->AddAddress($valueto);
            }
            $mailerSend = $mail->Send();
            $mail->clearAllRecipients();
            if (!$mailerSend) {
                $valSendMailStatus = 0;
            }
        }
        break;
    
    default:
        $mail->Subject = $subjectMail;
        $mail->Body = $messageMail;
        if (gettype($mailTo) == "string") {
            $mail->addAddress($mailTo); //ส่งถึงใคร
        }else{
            foreach ($mailTo as $key => $to) {
                $mail->AddAddress($to);
            }
        }
        
        if ($mail->Send()) {
            $valSendMailStatus = 1;
        } else {
            $valSendMailStatus = 0;
        }
        break;
}


