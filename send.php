<?php
require "connection.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])) {
    $username=$_GET['username'];
    $msg=$_POST['message'];
    $sql=mysqli_query($con,"SELECT * FROM user_data WHERE username='$username'");
    $row=mysqli_fetch_array($sql);
    if (is_array($row)) {
        $emaill=$row['email'];
    }
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bacakomiktekweb2@gmail.com';
    $mail->Password = 'ypaabokrweliwgar';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('bacakomiktekweb2@gmail.com');
    $mail->addAddress($emaill);
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body ="FROM $username : $msg";

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