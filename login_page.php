<?php
require "connection.php";
if (isset($_POST['buttonlogin'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql=mysqli_query($con, "SELECT * FROM user_data WHERE username='$username' AND password='$password'");
    $row = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        // header("Location: view.php");
        echo "view.php";
    }
    else
    {
        echo "username atau password salah";

    }
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="jquery-3.6.1.js" type="text/javascript"></script>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="webcss.css">
    <style>
        body{font: 14px sans-serif; }
        .wrapper{width:360px; padding: 20px; margin:0 auto}
    </style>
</head>
<body>
    <div class="wrapper">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="Image files/sign.mp4" type="video/mp4">
        </video>

        <div class="signin-box" style="margin-left: -120px; margin-top: 100px; color: white; background: black;">
            <h2>Login</h2>
            <p class="hint-text">Enter login details</p>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
                <div id="emailHelp" class="form-text"> 
                    We'll never share your login details with anyone
                </div>
            </div>

            <div class="mb-3">
                <label class="exampleInputPassword1" class="form-label">
                    Password
                </label>
                <input type="password" class="form-control" id="password" name="password">
                <div id="error" style="color: red;"></div>
               <!--  <form action="view.php">
                    <div id="error" style="color: red;"></div>
                </form> -->
            </div>

            <div class="form-group">
                <button type="submit" name="save" id="save" class="btn btn-lg btn-block" style="background: white; color: black;">
                    Login
                </button>
            </div>

            <br>
            <p> Don't have an account? <a href="register_page.php"> Register now!</a></p>
        </div>
    </div>

<script>
//javascript
$(document).ready(function(){

    //login
    $('#save').click(function(){
        var v_username=$('#username').val();
        var v_password=$('#password').val();
        $.ajax({
            url     : "login_page.php",
            type    : "POST",
            async   : true,
            data    : {
                buttonlogin : 1,
                username    : v_username,
                password    : v_password
            },
            success : function(result){
                if (result == "username atau password salah") {
                    $('#error').html(result);
                }
                else{
                    window.location.href=result;
                }
                
            }
        });
    });

    
});

</script>
    
</body>
</html>