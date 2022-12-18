<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body{font: 14px sans-serif; }
        .wrapper{width:360px; padding: 20px; margin:0 auto}
    </style>
</head>

<body>
    <div class="wrapper">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="Img/sign.mp4" type="video/mp4">
        </video>

        <form action="register_account.php" method="post" class="signin-box" style="margin-left: -120px; margin-top: 100px; color: white; 
        background: black; opacity: 90%">
            <h2>Sign up</h2>
            <p>Please fill this form to create an account.</p>

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>

            <div class="mb-3">
                <label class="exampleInputPassword1" class="form-label">
                    Password
                </label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="form-group">
                <button type="submit" name="save" class="btn btn-lg btn-block" style="background: mediumaquamarine; color: white;">
                    Register now
                </button>
            </div>

            <br>
            <p> Already have an account? <a href="login_page.php"> Login now!</a></p>
        </form>
    </div>
    
</body>
</html>