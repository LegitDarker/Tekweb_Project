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
    $mail->Username = 'bacakomiktekweb2@gmail.com';
    $mail->Password = 'ypaabokrweliwgar';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('bacakomiktekweb2@gmail.com');
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);

    $mail->Subject = "Your Password";
    $mail->Body = "This is your password : $pass";

    $mail->send();

    echo
    "
    <script>
        alert('Your password has been sent successfully.');
        document.location.href = 'logout.php';
    </script>
    ";
    
}

?>