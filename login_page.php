<!DOCTYPE html>
<html lang="en">
<head>
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

        <form action="loginprocess.php" method="post" class="signin-box" style="margin-left: -120px; margin-top: 100px; color: white; background: black;">
            <h2>Login</h2>
            <p class="hint-text">Enter login details</p>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
                <div id="emailHelp" class="form-text"> 
                    We'll never share your login details with anyone
                </div>
            </div>

            <div class="mb-3">
                <label class="exampleInputPassword1" class="form-label">
                    Password
                </label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="form-group">
                <button type="submit" name="save" class="btn btn-lg btn-block" style="background: white; color: black;">
                    Login
                </button>
            </div>

            <br>
            <p> Don't have an account? <a href="register_page.php"> Register now!</a></p>
        </form>
    </div>
    
</body>
</html>