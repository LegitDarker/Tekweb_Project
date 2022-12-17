<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bacakomiktekweb@gmail.com';
    $mail->Password = 'dzokdjoyejzekaqe';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('bacakomiktekweb@gmail.com');
    $mail->addAddress('d4niel.ap@gmail.com');
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo
    "
    <script>
        alert('Your email has been sent successfully.');
        document.location.href = 'view_chat.php';
    </script>
    ";
    
}


?>