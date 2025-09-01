<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, X-Requested-With");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "phpmailer/PHPMailer.php";
require "phpmailer/SMTP.php";
require "phpmailer/Exception.php";

$mail = new PHPMailer(true);

try {
    // server settings

    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = "0";
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'yusuffwa91@gmail.com';
    $mail->Password = 'bowi opfw zfgl nufh';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        )
    );

    // buyers

    $mail->setFrom('yusuffwa91@gmail.com', 'X Company');
    $mail->addAddress($data['email']);


    // content

    $mail->isHTML(true);
    $mail->Subject = 'Mail App Test';
    $mail->Body = $data['message'];

    $mail->send();

    echo 'Mesajınız iletildi --> ' . $data['email'];
} catch (Exception $e) {
    echo 'Mesajınız İletilemedi. Hata: ', $mail->ErrorInfo;
}
