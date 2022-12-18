<?php
session_start();
error_reporting(0);
require "connection.php";


// $msg = "";

// If upload button is clicked ...
if (isset($_POST['buttonupload'])) {
	$username=$_POST['username'];
	$filename = $_POST["uploadfile"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "img/image/".$filename;

	// Get all the submitted data from the form
	// $sql = "INSERT INTO user_data (file_image) VALUES ('$filename')";

	// $sql1="SELECT * FROM user_data WHERE username='$username'";
	// $sql="UPDATE user_data SET file_image='$filename' WHERE username='$username'";

	// Execute query
	// $result=mysqli_query($con, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
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
<html>

<head>
	<script src="jquery-3.6.1.js" type="text/javascript"></script>
	<title>Image Upload</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" />
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
                <h2>Upload Image</h2>
                <div id="content">
					<form method="POST" action="" enctype="multipart/form-data">
						<div class="form-group">
							<input class="form-control" type="file" id="uploadfile" name="uploadfile"/>
							<div id="usern" value="<?php echo $_SESSION['username'] ?>"></div>
						</div>
						<div class="form-group">
							<button class="btn btn-primary" type="submit" name="upload" id="upload">UPLOAD</button>
							<button type="submit" name="back" id="back" class="btn" style="background: white; color: black; margin-left: 360px;">Back</button>
						</div>
					</form>
				</div>
				
        </div>
    </div>
<script>
//javascript
$(document).ready(function(){

    //save new username
    $('#upload').click(function(){
        var v_file=$('#uploadfile').val();
        var v_user=$('#usern').val();
        $.ajax({
            url     : "set_image.php",
            type    : "POST",
            async   : true,
            data    : {
                buttonupload  : 1,
                uploadfile    : v_file,
                username	  : v_user
            },
            success : function(result){
                // if (result == "username tidak valid") {
                //     $('#error').html(result);
                // }
                // else{
                //     window.location.href="view_account.php";
                // }
                if (result == "ok") {
                	alert(result);
                }
                else if (result == "v_user") {
                	alert("nice");
                }
                else{
                	alert("ko");
                }
                // window.location.href="view_account.php";
                
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
