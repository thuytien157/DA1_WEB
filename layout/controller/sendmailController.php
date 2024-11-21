<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendmail($address, $name, $mess) {


    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/SMTP.php';
    
    $mail = new PHPMailer(true);

    try {
        // Cấu hình server gửi email
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tiennttps39163@gmail.com';
        $mail->Password   = 'cfia cwou ubuz uhtv'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Người gửi và người nhận
        $mail->setFrom($address);
        $mail->addAddress('tiennttps39163@gmail.com'); 

        // Nội dung email
        $mail->isHTML(true);
        $mail->Subject = "Liên hệ từ: " . $name; 
        $mail->Body    = $mess;
        $mail->AltBody = $mess;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }

}
?>
