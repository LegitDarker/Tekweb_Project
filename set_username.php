<?php
session_start();
require "connection.php";
if (isset($_POST['buttonsave'])) {
    $username=$_POST['username'];
    $newusern=$_POST['newusern'];
    if ($username == $newusern || $newusern =="") 
    {
        echo "username tidak valid";
    }
    else
    {
        $sql="UPDATE user_data SET username='$newusern' WHERE username='$username'";
        $result=mysqli_query($con,$sql);
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
    <title>Set Username</title>
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
                <h2>Set Username</h2>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control"
                    id="username" name="username" value="<?php echo $_SESSION['username'] ?>" readonly="readonly">
                </div>

                <div class="mb-3">
                    <label class="form-label">New Username</label>
                    <input type="text" class="form-control" id="newusern" name="newusern" placeholder="New Username">
                    <div id="error" style="color: red;"></div>
            </div>

            <div class="form-group">
                <button type="submit" name="save" id="save" class="btn btn-lg btn-block" style="background: white; color: black;">
                    Save
                </button>
                <button type="submit" name="back" id="back" class="btn btn-lg btn-block" style="background: white; color: black; margin-left: 360px;">
                    Back
                </button>
            </div>


        </div>
    </div>

<script>
//javascript
$(document).ready(function(){

    //save new username
    $('#save').click(function(){
        var v_username=$('#username').val();
        var v_newusern=$('#newusern').val();
        $.ajax({
            url     : "set_username.php",
            type    : "POST",
            async   : true,
            data    : {
                buttonsave  : 1,
                username    : v_username,
                newusern    : v_newusern
            },
            success : function(result){
                if (result == "username tidak valid") {
                    $('#error').html(result);
                }
                else{
                    window.location.href="view_account.php";
                }
                
            }
        });
    });

    //back
    $('#back').click(function(){
        var backk = true
        $.ajax({
            url     : "set_username.php",
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