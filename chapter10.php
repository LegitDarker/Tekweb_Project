<?php 
require "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
	<div class="wrapper" style="background: white;">
	<div class="container">
	<?php 
		$sql="SELECT * from episode10 ORDER BY id asc";
		$res=mysqli_query($con,$sql);

		if (mysqli_num_rows($res) > 0){
			while($images = mysqli_fetch_assoc($res)) {?>

				<div class="alb">
					<img src="<?=$images['image_url']?>">
			</div>

	<?php } }?>
	 <div class="buttonTop">
                    <a href="chapter9.php"><button type="button" class="btn btn-outline-primary" id="button1" >
                        <h2>Prev Chapter</h2></button>
                    </a>
               


                <a href="chapter11.php"><button type="button" class="btn btn-outline-primary" id="button2">
                <h2>Next Chapter</h2></button>
            </a>
            </div>
            <a href="view.php"><button type="button" class="btn btn-outline-primary" id="button3">
                <h2 class="las la-home"></h2></button>
            	</a>
</div>
</div>

</body>
</html>