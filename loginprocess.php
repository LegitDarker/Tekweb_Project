<?php
session_start();
require 'connection.php';
if (isset($_POST['username']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql=mysqli_query($con, "SELECT * FROM user_data WHERE username='$username' AND password='$password'");
    $row = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["username"] = $row['username'];
        $_SESSION["password"] = $row['password'];
        header("Location: view.php");
    }
    else
    {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Invalid username / password!');
        window.location.href='login_page.php';
        </script>");
    }
}

?>