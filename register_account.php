<?php
require "connection.php";
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$file_image=$_GET['fimg'];
$sql=mysqli_query($con, "SELECT * FROM user_data WHERE username='$username'");
if(mysqli_num_rows($sql) > 0)
{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('User already exists!');
    window.location.href='register_page.php';
    </script>");
}
else if (isset($_POST['save']))
{
    if ($username=="" || $email=="" || $password=="") 
    {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Isi tidak boleh kosong!');
            window.location.href='register_page.php';
            </script>");
    }
    else
    {
        $sql="INSERT INTO user_data VALUES('$username', '$email','$password','$file_image')";
        $query=mysqli_query($con, $sql);
        header ("Location: login_page.php?status=success");
    }
    
}


?>