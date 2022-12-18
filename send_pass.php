<?php
session_start();
require "connection.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if (isset($_POST['back'])) {
    header("location: set_password.php");
    exit();
}
if (isset($_POST['save'])) {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $sql=mysqli_query($con,"SELECT password FROM user_data WHERE username='$username'");
    $row=mysqli_fetch_array($sql);
    if (is_array($row)) {
        $pass=$row['password'];
    }
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bacakomiktekweb@gmail.com';
    $mail->Password = 'dzokdjoyejzekaqe';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('bacakomiktekweb@gmail.com');
    $mail->addAddress('$email');
    $mail->isHTML(true);

    $mail->Subject = "Your Password";
    $mail->Body = "$pass";

    $mail->send();

    echo
    "
    <script>
        alert('Your email has been sent successfully.');
        document.location.href = 'logout.php';
    </script>
    ";
    
}

?>