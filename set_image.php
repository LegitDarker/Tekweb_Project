<?php
session_start();
error_reporting(0);
require "connection.php";
$username=$_GET['usern'];

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "img/image/" . $filename;

	// Get all the submitted data from the form
	$sql = "UPDATE user_data SET file_image='$filename' WHERE username='$username'";

	// Execute query
	mysqli_query($con, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
		header("location: view_account.php");
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
if (isset($_POST['back'])) {
    header("location: view_account.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
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
                			<input class="form-control" type="file" name="uploadfile" value="" />
                		</div>
                		<div class="form-group">
                			<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
                			<button type="submit" name="back" id="back" class="btn" style="background: white; color: black; margin-left: 375px;">Back</button>
                		</div>
                	</form>
                </div>



        </div>
    </div>
	<!-- <div id="content">
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<input class="form-control" type="file" name="uploadfile" value="" />
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" id="userna" value="<?php echo $_GET['usern']; ?>" name="upload">UPLOAD</button>
			</div>
		</form>
	</div>
	<div id="display-image">
		<?php
		$query = " select * from user_data ";
		$result = mysqli_query($con, $query);

		while ($data = mysqli_fetch_assoc($result)) {
		?>
			<img src="img/image/<?php echo $data['filename']; ?>">

		<?php
		}
		?>
	</div> -->

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


</script>

</body>

</html>
