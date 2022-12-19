<?php 
session_start();
require "episodeCon.php";
if (!isset ($_SESSION["username"])){
    header("location: login_page.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper" style="background: white;">
	<div class="container">
	<?php 
		$sql="SELECT * from episode1 ORDER BY id asc";
		$res=mysqli_query($con,$sql);

		if (mysqli_num_rows($res) > 0){
			while($images = mysqli_fetch_assoc($res)) {?>

				<div class="alb">
					<img src="<?=$images['image_url']?>">
			</div>

	<?php } }?>
	 <div class="buttonTop">
                    
                <a href="#" class="btn btn-outline-primary btn-lg disabled" role="button" aria-disabled="true"><h2>Prev Chapter</h2></a> 

				<?php
					$query = mysql_query("SELECT * FROM chapter_data WHERE id = '1'")

					while ($row = mysqli_fetch_array($query)) { ?>
						<?php
							$result = mysql_query("SELECT * FROM likes WHERE username = '".$_SESSION['username']."' AND id=".$row['id']."");
							if (mysql_num_rows($result) == 1) ?>
								<!-- User sudah menyukai chapter -->
								<span><a href="" class="unlike" id="<?php echo $row['id']; ?>">Unlike</a></span> 
							<?php } else { ?>
								
							}
						?>

						<div class="like-button">
							<span><a href="">like</a></span>
						</div>

					<?php } ?>
                <a href="chapter2.php"><button type="button" class="btn btn-outline-primary" id="button2">
                <h2>Next Chapter</h2></button>
            </a>
            </div>
        </div>
	</div>

</body>
</html>