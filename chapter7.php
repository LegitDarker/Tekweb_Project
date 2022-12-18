<?php 
require "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
</head>
<body>
	<div class="wrapper" style="background: white;">
	<div class="container">
	<?php 
		$sql="SELECT * from episode7 ORDER BY id asc";
		$res=mysqli_query($con,$sql);

		if (mysqli_num_rows($res) > 0){
			while($images = mysqli_fetch_assoc($res)) {?>

				<div class="alb">
					<img src="<?=$images['image_url']?>">
			</div>

	<?php } }?>
	 <div class="buttonTop">
                    <a href="chapter6.php"><button type="button" class="btn btn-outline-primary" id="button1" >
                        <h2>Prev Chapter</h2></button>
                    </a>
               


                <a href="chapter8.php"><button type="button" class="btn btn-outline-primary" id="button2">
                <h2>Next Chapter</h2></button>
            </a>
            </div>
            <a href="view.php"><button type="button" class="btn btn-outline-primary" id="button3">
                <h2>HOME</h2></button>
            	</a>
</div>
</div>

</body>
</html>