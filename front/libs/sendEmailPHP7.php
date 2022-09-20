<?php
require _DIR . '/front/libs/vendor/autoload.php'; #load Ribary

$jsonReturn = null;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

$core_smtp_title = "บริษัท เอสจี แคปปิตอล จำกัด (มหาชน)";

$mail = new PHPMailer();
$mail->isSMTP();
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Host = 'smtp.gmail.com';
$mail->CharSet = "utf-8";
$mail->Port = 587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPAuth = true;
$mail->AuthType = 'XOAUTH2';
$email = 'dev.mail@wewebplus.com'; //gmail ของผู้ส่ง
$clientId = '1092747956073-qsmendargatfpggcudeb9777vorjvj20.apps.googleusercontent.com'; //ClienId ที่ได้จาก Google console
$clientSecret = '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'; //ClienSecret ที่ได้จาก Google console
$refreshToken = '1//0gdDTnot4nejWCgYIARAAGBASNgF-L9IrniCc3YCCNq6tVBvayCpRlv76YO276Mk4hXx1075LVFRsHlYXYvZMvcWceanRinIo-Q'; // refresgToken
$provider = new Google(
[
    'clientId' => $clientId,
    'clientSecret' => $clientSecret,
]
);
$mail->setOAuth(
new OAuth(
    [
    'provider' => $provider,
    'clientId' => $clientId,
    'clientSecret' => $clientSecret,
    'refreshToken' => $refreshToken,
    'userName' => $email,
    ]
)
);
$mail->setFrom($mailFrom, $core_smtp_title); //ชื่อผู้ส่ง กับ Email ผู้ส่ง
$mail->addAddress($mailTo); //ส่งถึงใคร
$mail->isHTML(true);
$mail->Subject = $subjectMail; // หัวข้อเรื่อง
$mail->Body    = $messageMail; // ตัว Body ของ Gmail
if ($mail->Send()) {
    $valSendMailStatus = 1;
} else {
    $valSendMailStatus = 0;
}
