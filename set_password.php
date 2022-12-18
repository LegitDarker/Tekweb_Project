<?php
session_start();
require "connection.php";
if (isset($_POST['buttonsave'])) {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $newpass=$_POST['newpass'];
    $sql=mysqli_query($con,"SELECT * FROM user_data WHERE username='$username' AND password='$password'");
    $row=mysqli_fetch_array($sql);
    if ($password =="" || !is_array($row))
    {
        if ($newpass == "") {
            echo "2";
        }
        else{
            echo "3";
        }
    }
    elseif (is_array($row)) {
        if ($newpass == "") {
            echo "0";
        }
        else{
            $result=mysqli_query($con,"UPDATE user_data SET password='$newpass' WHERE username='$username' AND password='$password'");
            echo "1";
        }
    }
    exit();
}
if (isset($_POST['buttonback'])) {
    $back=$_POST['back'];
    if ($back) {
        echo "view_account.php";
    }
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="jquery-3.6.1.js" type="text/javascript"></script>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body{font: 14px sans-serif; }
        .wrapper{width:360px; padding: 20px; margin:0 auto}
    </style>
</head>
<body>
    <div class="wrapper">
            <div style="background:linear-gradient(to right,rgba(0, 255, 255, 0.4),rgba(0, 255, 166, 0.3));">
            <video autoplay loop muted plays-inline class="back-video">
                <source src="img/sign.mp4" type="video/mp4">
            </video>
            </div>

            <div class="signin-box" style="margin-left: -120px; margin-top: 100px; color: white; background: black; opacity: 90%">
                <h2>Change Password</h2>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control"
                    id="username" name="username" value="<?php echo $_SESSION['username'] ?>" readonly="readonly">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control"
                    id="email" name="email" value="<?php echo $_SESSION['email'] ?>" readonly="readonly">
                </div>

                <div class="mb-3">
                    <label class="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <div id="error" style="color: red;"></div>
                </div>

                <div class="mb-3">
                    <label class="exampleInputPassword1" class="form-label">Set New Password</label>
                    <input type="password" class="form-control" id="npassword" name="npassword" placeholder="New Password">
                    <div id="error1" style="color: red;"></div>
                </div>


            <div class="form-group">
                <button type="submit" name="save" id="save" class="btn btn-lg btn-block" style="background: white; color: black;">
                    Change
                </button>
                <button type="submit" name="back" id="back" class="btn btn-lg btn-block" style="background: white; color: black; margin-left: 345px;">
                    Back
                </button>
            </div>
            <br>
            <p><a href="forgot_pass.php"> Forgot Password</a></p>

        </div>
    </div>

<script>
//javascript
$(document).ready(function(){

    //save new password
    $('#save').click(function(){
        var v_username=$('#username').val();
        var v_email=$('#email').val();
        var v_password=$('#password').val();
        var v_newpass=$('#npassword').val();
        $.ajax({
            url     : "set_password.php",
            type    : "POST",
            async   : true,
            data    : {
                buttonsave  : 1,
                username    : v_username,
                email       : v_email,
                password    : v_password,
                newpass     : v_newpass
            },
            success : function(result){
                if (result == "0") {
                    $('#error').html("");
                    $('#error1').html("Password tidak boleh kosong");
                }
                else if (result == "1") {
                    window.location.href="logout.php";
                }
                else if (result == "2") {
                    $('#error').html("Password tidak valid");
                    $('#error1').html("Password tidak boleh kosong");
                }
                else if (result == "3") {
                    $('#error').html("Password tidak valid");
                    $('#error1').html("");
                }               
            }
        });
    });

    //back
    $('#back').click(function(){
        var backk = true
        $.ajax({
            url     : "set_password.php",
            type    : "POST",
            async   : true,
            data    : {
                buttonback : 1,
                back       : backk
            },
            success : function(result){
                window.location.href=result;
            }
        });
    });    
});

</script>
    
</body>
</html>