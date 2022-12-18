<?php
session_start();
require "connection.php";

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

            <form action="send_pass.php" method="POST">
                <div class="signin-box" style="margin-left: -120px; margin-top: 100px; color: white; background: black; opacity: 90%">
                    <h2>Send Password</h2>
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

                    <h5>Send password to your email?</h5>


                    <div class="form-group">
                        <button type="submit" name="save" id="save" class="btn btn-lg btn-block" style="background: white; color: black;">
                            YES
                        </button>
                        <button type="submit" name="back" id="back" class="btn btn-lg btn-block" style="background: white; color: black; margin-left: 390px;">
                            NO
                        </button>
                    </div>


                </div>
            </form>
            
    </div>
    
</body>
</html>